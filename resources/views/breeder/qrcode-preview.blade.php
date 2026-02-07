@extends('layouts.breeder')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-2xl shadow-lg p-8">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Aperçu du QR Code</h1>
                <p class="text-gray-600 mt-2">{{ $animal->name ?? 'Animal #'.$animal->id }}</p>
            </div>
            <a href="{{ route('breeder.animals.index') }}" class="text-green-600 hover:text-green-700 font-bold">
                <i class="fas fa-arrow-left mr-2"></i>Retour
            </a>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- QR Code Display -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8">
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">QR Code Généré</h2>
                    <p class="text-gray-600 text-sm">Code: <span class="font-mono font-bold text-green-700">{{ $animal->qr_code }}</span></p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="flex justify-center mb-4">
                        {!! $qrCode !!}
                    </div>
                    <div class="text-center mt-6">
                        <div class="text-2xl font-bold text-orange-600 mb-2">SahelTrace</div>
                        <p class="text-sm text-gray-600">Scannez pour vérifier</p>
                    </div>
                </div>
            </div>

            <!-- Animal Information -->
            <div>
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-6 mb-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">📋 Informations</h3>
                    <div class="space-y-3">
                        @if($animal->name)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Nom:</span>
                            <span class="font-bold">{{ $animal->name }}</span>
                        </div>
                        @endif
                        @if($animal->species)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Espèce:</span>
                            <span class="font-bold">{{ $animal->species }}</span>
                        </div>
                        @endif
                        @if($animal->breed)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Race:</span>
                            <span class="font-bold">{{ $animal->breed }}</span>
                        </div>
                        @endif
                        @if($animal->age)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Âge:</span>
                            <span class="font-bold">{{ $animal->age }} ans</span>
                        </div>
                        @endif
                        @if($animal->weight)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Poids:</span>
                            <span class="font-bold">{{ $animal->weight }} kg</span>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Download Options -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">📥 Télécharger</h3>
                    <div class="space-y-3">
                        <a href="{{ route('breeder.qrcode.generate.single', $animal->id) }}" class="block bg-green-600 hover:bg-green-700 text-white px-6 py-4 rounded-xl font-bold text-center transition transform hover:scale-105">
                            <i class="fas fa-file-pdf mr-2"></i>Télécharger PDF
                        </a>
                        <button onclick="window.print()" class="block w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-4 rounded-xl font-bold text-center transition transform hover:scale-105">
                            <i class="fas fa-print mr-2"></i>Imprimer
                        </button>
                        <a href="{{ route('public.verify', $animal->qr_code) }}" target="_blank" class="block bg-orange-600 hover:bg-orange-700 text-white px-6 py-4 rounded-xl font-bold text-center transition transform hover:scale-105">
                            <i class="fas fa-external-link-alt mr-2"></i>Tester le QR Code
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instructions -->
        <div class="mt-8 bg-yellow-50 border-l-4 border-yellow-500 p-6 rounded-lg">
            <div class="flex items-start">
                <i class="fas fa-info-circle text-yellow-500 text-2xl mr-4 mt-1"></i>
                <div>
                    <h4 class="font-bold text-gray-800 mb-2">💡 Instructions d'utilisation</h4>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>✅ Téléchargez le PDF pour l'imprimer sur des étiquettes</li>
                        <li>✅ Le QR code est permanent et unique à cet animal</li>
                        <li>✅ Scannez avec n'importe quel smartphone pour vérifier</li>
                        <li>✅ Le code reste valide même hors ligne (l'info s'affiche en ligne)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
