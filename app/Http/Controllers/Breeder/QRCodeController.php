<?php

namespace App\Http\Controllers\Breeder;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;
use ZipArchive;

class QRCodeController extends Controller
{
    public function generateSingle($id)
    {
        if (!session('user_logged_in')) {
            return redirect()->route('admin.login');
        }

        $animal = Animal::findOrFail($id);
        
        // Generate unique QR code if not exists
        if (!$animal->qr_code) {
            $animal->qr_code = 'ST-' . strtoupper(uniqid());
            $animal->save();
        }

        // Generate QR code image
        $qrCode = QrCode::format('png')
            ->size(400)
            ->margin(2)
            ->errorCorrection('H')
            ->generate(route('public.verify', $animal->qr_code));

        // Create PDF with QR code and animal info
        $pdf = Pdf::loadView('breeder.qrcode-pdf', [
            'animal' => $animal,
            'qrCode' => base64_encode($qrCode)
        ]);

        return $pdf->download('QR_Code_' . $animal->qr_code . '.pdf');
    }

    public function generateBatch(Request $request)
    {
        if (!session('user_logged_in')) {
            return redirect()->route('admin.login');
        }

        $animalIds = $request->input('animal_ids', []);
        
        if (empty($animalIds)) {
            return back()->with('error', 'Veuillez sélectionner au moins un animal');
        }

        $animals = Animal::whereIn('id', $animalIds)->get();

        // Create temporary directory for PDFs
        $tempDir = storage_path('app/temp/qrcodes_' . time());
        if (!file_exists($tempDir)) {
            mkdir($tempDir, 0755, true);
        }

        // Generate PDF for each animal
        foreach ($animals as $animal) {
            // Generate unique QR code if not exists
            if (!$animal->qr_code) {
                $animal->qr_code = 'ST-' . strtoupper(uniqid());
                $animal->save();
            }

            $qrCode = QrCode::format('png')
                ->size(400)
                ->margin(2)
                ->errorCorrection('H')
                ->generate(route('public.verify', $animal->qr_code));

            $pdf = Pdf::loadView('breeder.qrcode-pdf', [
                'animal' => $animal,
                'qrCode' => base64_encode($qrCode)
            ]);

            $pdf->save($tempDir . '/QR_Code_' . $animal->qr_code . '.pdf');
        }

        // Create ZIP file
        $zipFileName = 'QR_Codes_Lot_' . date('Y-m-d_His') . '.zip';
        $zipFilePath = storage_path('app/temp/' . $zipFileName);

        $zip = new ZipArchive();
        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
            $files = glob($tempDir . '/*.pdf');
            foreach ($files as $file) {
                $zip->addFile($file, basename($file));
            }
            $zip->close();
        }

        // Clean up temporary PDFs
        array_map('unlink', glob($tempDir . '/*.pdf'));
        rmdir($tempDir);

        return response()->download($zipFilePath, $zipFileName)->deleteFileAfterSend(true);
    }

    public function preview($id)
    {
        if (!session('user_logged_in')) {
            return redirect()->route('admin.login');
        }

        $animal = Animal::findOrFail($id);
        
        if (!$animal->qr_code) {
            $animal->qr_code = 'ST-' . strtoupper(uniqid());
            $animal->save();
        }

        $qrCode = QrCode::format('svg')
            ->size(300)
            ->margin(1)
            ->errorCorrection('H')
            ->generate(route('public.verify', $animal->qr_code));

        return view('breeder.qrcode-preview', [
            'animal' => $animal,
            'qrCode' => $qrCode
        ]);
    }
}