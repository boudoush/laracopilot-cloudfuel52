@extends('layouts.breeder')

@section('content')
<div class="mb-8">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Mes Animaux</h1>
            <p class="text-gray-600 mt-2">Gérez votre cheptel et générez les QR codes</p>
        </div>
        <a href="{{ route('breeder.animals.create') }}" class="gradient-green text-white px-6 py-3 rounded-xl font-bold hover:opacity-90 transition">
            <i class="fas fa-plus mr-2"></i>Ajouter un Animal
        </a>
    </div>
</div>

@if(session('success'))
<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">
    <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
    <i class="fas fa-exclamation-circle mr-2"></i>{{ session('error') }}
</div>
@endif

<!-- Batch Actions -->
<div class="bg-white rounded-2xl shadow-lg p-6 mb-6">
    <form action="{{ route('breeder.qrcode.generate.batch') }}" method="POST" id="batch-form">
        @csrf
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <button type="button" onclick="selectAll()" class="text-blue-600 hover:text-blue-700 font-bold">
                    <i class="fas fa-check-square mr-2"></i>Tout sélectionner
                </button>
                <button type="button" onclick="deselectAll()" class="text-gray-600 hover:text-gray-700 font-bold">
                    <i class="fas fa-square mr-2"></i>Tout désélectionner
                </button>
                <span id="selected-count" class="text-gray-600">0 sélectionné(s)</span>
            </div>
            <button type="submit" class="gradient-orange text-white px-6 py-3 rounded-xl font-bold hover:opacity-90 transition">
                <i class="fas fa-download mr-2"></i>Télécharger QR Codes (ZIP)
            </button>
        </div>
    </form>
</div>

<!-- Animals Grid -->
@if(isset($animals) && count($animals) > 0)
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($animals as $animal)
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift">
        <div class="bg-gradient-to-br from-green-500 to-green-700 p-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="animal_ids[]" value="{{ $animal->id }}" form="batch-form" class="animal-checkbox w-5 h-5 text-green-600 rounded" onchange="updateSelectedCount()">
                    <i class="fas fa-cow text-5xl ml-4 opacity-80"></i>
                </div>
                @if($animal->qr_code)
                <span class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm font-bold">
                    <i class="fas fa-qrcode mr-1"></i>QR
                </span>
                @endif
            </div>
            <h3 class="text-2xl font-bold">{{ $animal->name ?? 'Animal #'.$animal->id }}</h3>
            <p class="text-green-100">{{ $animal->species ?? 'Bovin' }} - {{ $animal->breed ?? 'Race' }}</p>
        </div>

        <div class="p-6">
            <div class="space-y-3 mb-6">
                @if($animal->age)
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">Âge:</span>
                    <span class="font-bold">{{ $animal->age }} ans</span>
                </div>
                @endif
                @if($animal->weight)
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">Poids:</span>
                    <span class="font-bold">{{ $animal->weight }} kg</span>
                </div>
                @endif
                @if($animal->qr_code)
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">QR Code:</span>
                    <span class="font-mono font-bold text-green-600">{{ $animal->qr_code }}</span>
                </div>
                @endif
            </div>

            <div class="grid grid-cols-2 gap-3">
                @if($animal->qr_code)
                <a href="{{ route('breeder.qrcode.preview', $animal->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-bold text-center text-sm transition">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('breeder.qrcode.generate.single', $animal->id) }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-bold text-center text-sm transition">
                    <i class="fas fa-download"></i>
                </a>
                @else
                <button onclick="generateQRCode({{ $animal->id }})" class="col-span-2 bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-lg font-bold text-sm transition">
                    <i class="fas fa-qrcode mr-2"></i>Générer QR
                </button>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
@else
<div class="bg-white rounded-2xl shadow-lg p-12 text-center">
    <i class="fas fa-cow text-gray-300 text-8xl mb-6"></i>
    <h3 class="text-2xl font-bold text-gray-800 mb-4">Aucun animal enregistré</h3>
    <p class="text-gray-600 mb-8">Commencez par ajouter votre premier animal</p>
    <a href="{{ route('breeder.animals.create') }}" class="gradient-green text-white px-8 py-4 rounded-xl font-bold hover:opacity-90 transition inline-block">
        <i class="fas fa-plus mr-2"></i>Ajouter un Animal
    </a>
</div>
@endif

<script>
function selectAll() {
    document.querySelectorAll('.animal-checkbox').forEach(cb => cb.checked = true);
    updateSelectedCount();
}

function deselectAll() {
    document.querySelectorAll('.animal-checkbox').forEach(cb => cb.checked = false);
    updateSelectedCount();
}

function updateSelectedCount() {
    const count = document.querySelectorAll('.animal-checkbox:checked').length;
    document.getElementById('selected-count').textContent = count + ' sélectionné(s)';
}

function generateQRCode(animalId) {
    window.location.href = '/breeder/qrcode/preview/' + animalId;
}
</script>
@endsection
