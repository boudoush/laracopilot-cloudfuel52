<?php

namespace App\Http\Controllers\Breeder;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\AnimalFile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    private function getBreeder()
    {
        if (!session('user_logged_in') || session('user_role') !== 'breeder') {
            return null;
        }
        return User::where('email', session('user_email'))->first();
    }

    public function index()
    {
        $breeder = $this->getBreeder();
        if (!$breeder) {
            return redirect()->route('admin.login');
        }

        $animals = Animal::where('user_id', $breeder->id)
            ->withCount('files')
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('breeder.animals.index', compact('animals'));
    }

    public function create()
    {
        if (!$this->getBreeder()) {
            return redirect()->route('admin.login');
        }

        return view('breeder.animals.create');
    }

    public function store(Request $request)
    {
        $breeder = $this->getBreeder();
        if (!$breeder) {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'type' => 'required|in:individual,batch',
            'identification' => 'required|string|max:255',
            'species' => 'required|string|max:100',
            'breed' => 'required|string|max:100',
            'sex' => 'required|in:male,female',
            'age' => 'required|integer|min:0',
            'weight' => 'required|numeric|min:0',
            'health_book' => 'nullable|string',
            'treatments' => 'nullable|string',
            'vaccinations' => 'nullable|string',
            'batch_size' => 'nullable|integer|min:1'
        ]);

        $validated['user_id'] = $breeder->id;

        $animal = Animal::create($validated);

        return redirect()->route('breeder.animals.show', $animal->id)
            ->with('success', 'Animal enregistré avec succès. Effectuez un paiement pour générer le QR code.');
    }

    public function show($id)
    {
        $breeder = $this->getBreeder();
        if (!$breeder) {
            return redirect()->route('admin.login');
        }

        $animal = Animal::where('user_id', $breeder->id)
            ->with('files', 'payments')
            ->findOrFail($id);

        return view('breeder.animals.show', compact('animal'));
    }

    public function edit($id)
    {
        $breeder = $this->getBreeder();
        if (!$breeder) {
            return redirect()->route('admin.login');
        }

        $animal = Animal::where('user_id', $breeder->id)->findOrFail($id);
        return view('breeder.animals.edit', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        $breeder = $this->getBreeder();
        if (!$breeder) {
            return redirect()->route('admin.login');
        }

        $animal = Animal::where('user_id', $breeder->id)->findOrFail($id);

        $validated = $request->validate([
            'identification' => 'required|string|max:255',
            'species' => 'required|string|max:100',
            'breed' => 'required|string|max:100',
            'sex' => 'required|in:male,female',
            'age' => 'required|integer|min:0',
            'weight' => 'required|numeric|min:0',
            'health_book' => 'nullable|string',
            'treatments' => 'nullable|string',
            'vaccinations' => 'nullable|string',
            'batch_size' => 'nullable|integer|min:1'
        ]);

        $animal->update($validated);

        return redirect()->route('breeder.animals.show', $animal->id)
            ->with('success', 'Animal modifié avec succès');
    }

    public function destroy($id)
    {
        $breeder = $this->getBreeder();
        if (!$breeder) {
            return redirect()->route('admin.login');
        }

        $animal = Animal::where('user_id', $breeder->id)->findOrFail($id);
        $animal->delete();

        return redirect()->route('breeder.animals.index')
            ->with('success', 'Animal supprimé avec succès');
    }

    public function uploadFile(Request $request, $id)
    {
        $breeder = $this->getBreeder();
        if (!$breeder) {
            return redirect()->route('admin.login');
        }

        $animal = Animal::where('user_id', $breeder->id)->findOrFail($id);

        $request->validate([
            'file' => 'required|file|max:10240|mimes:pdf,jpg,jpeg,png',
            'description' => 'nullable|string|max:255'
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('animal_files', $fileName, 'public');

        AnimalFile::create([
            'animal_id' => $animal->id,
            'file_name' => $fileName,
            'file_path' => $filePath,
            'file_type' => $file->getClientMimeType(),
            'file_size' => $file->getSize(),
            'description' => $request->description
        ]);

        return redirect()->route('breeder.animals.show', $animal->id)
            ->with('success', 'Fichier téléversé avec succès');
    }

    public function downloadFile($fileId)
    {
        $breeder = $this->getBreeder();
        if (!$breeder) {
            return redirect()->route('admin.login');
        }

        $file = AnimalFile::whereHas('animal', function($query) use ($breeder) {
            $query->where('user_id', $breeder->id);
        })->findOrFail($fileId);

        return Storage::disk('public')->download($file->file_path, $file->file_name);
    }

    public function deleteFile($fileId)
    {
        $breeder = $this->getBreeder();
        if (!$breeder) {
            return redirect()->route('admin.login');
        }

        $file = AnimalFile::whereHas('animal', function($query) use ($breeder) {
            $query->where('user_id', $breeder->id);
        })->findOrFail($fileId);

        Storage::disk('public')->delete($file->file_path);
        $animalId = $file->animal_id;
        $file->delete();

        return redirect()->route('breeder.animals.show', $animalId)
            ->with('success', 'Fichier supprimé avec succès');
    }
}