@extends('layouts.breeder')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <!-- Welcome Header -->
    <div class="bg-gradient-to-r from-green-600 to-green-800 text-white rounded-2xl p-8 mb-8 shadow-xl">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-4xl font-bold mb-2">👨‍🌾 Tableau de Bord Éleveur</h1>
                <p class="text-green-100 text-lg">Bienvenue {{ session('user_name') }} - Gérez votre cheptel</p>
            </div>
            <div class="hidden md:block">
                <div class="text-right">
                    <div class="text-3xl font-bold">{{ date('d/m/Y') }}</div>
                    <div class="text-green-100">{{ date('H:i') }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Action Buttons -->
    <div class="grid md:grid-cols-4 gap-6 mb-8">
        <a href="{{ route('breeder.animals.create') }}" class="bg-white rounded-2xl p-6 shadow-lg hover-lift text-center">
            <div class="w-16 h-16 gradient-green rounded-xl flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-plus text-white text-2xl"></i>
            </div>
            <h3 class="font-bold text-gray-800 mb-2">Ajouter Animal</h3>
            <p class="text-sm text-gray-600">Enregistrer nouveau</p>
        </a>

        <a href="{{ route('breeder.animals.index') }}" class="bg-white rounded-2xl p-6 shadow-lg hover-lift text-center">
            <div class="w-16 h-16 gradient-orange rounded-xl flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-qrcode text-white text-2xl"></i>
            </div>
            <h3 class="font-bold text-gray-800 mb-2">Générer QR</h3>
            <p class="text-sm text-gray-600">Codes uniques</p>
        </a>

        <a href="{{ route('breeder.payments.index') }}" class="bg-white rounded-2xl p-6 shadow-lg hover-lift text-center">
            <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-wallet text-white text-2xl"></i>
            </div>
            <h3 class="font-bold text-gray-800 mb-2">Paiements</h3>
            <p class="text-sm text-gray-600">Gérer factures</p>
        </a>

        <a href="{{ route('breeder.animals.index') }}" class="bg-white rounded-2xl p-6 shadow-lg hover-lift text-center">
            <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-purple-800 rounded-xl flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-folder text-white text-2xl"></i>
            </div>
            <h3 class="font-bold text-gray-800 mb-2">Documents</h3>
            <p class="text-sm text-gray-600">Fichiers & Photos</p>
        </a>
    </div>

    <!-- Main Stats -->
    <div class="grid md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-cow text-white text-2xl"></i>
                </div>
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Total</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ $totalAnimals }}</div>
            <div class="text-sm text-gray-600">Animaux Enregistrés</div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-qrcode text-white text-2xl"></i>
                </div>
                <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-bold">QR Codes</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ $withQRCode }}</div>
            <div class="text-sm text-gray-600">Codes Générés</div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-check-circle text-white text-2xl"></i>
                </div>
                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">Approuvés</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ $approvedAnimals }}</div>
            <div class="text-sm text-gray-600">Animaux Validés</div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-yellow-500 to-yellow-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-clock text-white text-2xl"></i>
                </div>
                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">En Attente</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ $pendingAnimals }}</div>
            <div class="text-sm text-gray-600">À Valider</div>
        </div>
    </div>

    <!-- Charts and Data -->
    <div class="grid md:grid-cols-2 gap-8 mb-8">
        <!-- Species Distribution -->
        <div class="bg-white rounded-2xl p-6 shadow-lg">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-chart-pie text-green-500 mr-3"></i>
                Répartition par Espèce
            </h3>
            @if($animalsBySpecies->count() > 0)
                <div class="space-y-3">
                    @foreach($animalsBySpecies as $species)
                        @php
                            $percentage = $totalAnimals > 0 ? round(($species->total / $totalAnimals) * 100, 1) : 0;
                        @endphp
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">{{ $species->species ?? 'Non spécifié' }}</span>
                                <span class="font-bold">{{ $species->total }} ({{ $percentage }}%)</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-green-500 to-green-700 h-2 rounded-full" style="width: {{ $percentage }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500 text-center py-8">Aucune donnée disponible</p>
            @endif
        </div>

        <!-- Recent Animals -->
        <div class="bg-white rounded-2xl p-6 shadow-lg">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-history text-blue-500 mr-3"></i>
                Derniers Enregistrements
            </h3>
            @if($recentAnimals->count() > 0)
                <div class="space-y-3">
                    @foreach($recentAnimals as $animal)
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-700 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-cow text-white"></i>
                            </div>
                            <div>
                                <div class="font-bold text-gray-800">{{ $animal->name ?? 'Animal #'.$animal->id }}</div>
                                <div class="text-xs text-gray-600">{{ $animal->species }} - {{ $animal->created_at->diffForHumans() }}</div>
                            </div>
                        </div>
                        @if($animal->qr_code)
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">
                            <i class="fas fa-qrcode mr-1"></i>QR
                        </span>
                        @endif
                    </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500 text-center py-8">Aucun animal récent</p>
            @endif
        </div>
    </div>

    <!-- Additional Stats -->
    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-green-500 to-green-700 text-white rounded-2xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <i class="fas fa-weight text-5xl opacity-50"></i>
                <div class="text-right">
                    <div class="text-4xl font-bold">{{ number_format($avgWeight, 0) }}</div>
                    <div class="text-green-100 text-sm">kg Poids Moyen</div>
                </div>
            </div>
            <div class="text-sm text-green-100">Moyenne de votre cheptel</div>
        </div>

        <div class="bg-gradient-to-br from-orange-500 to-orange-700 text-white rounded-2xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <i class="fas fa-calendar text-5xl opacity-50"></i>
                <div class="text-right">
                    <div class="text-4xl font-bold">{{ number_format($avgAge, 1) }}</div>
                    <div class="text-orange-100 text-sm">ans Âge Moyen</div>
                </div>
            </div>
            <div class="text-sm text-orange-100">Âge moyen des animaux</div>
        </div>

        <div class="bg-gradient-to-br from-blue-500 to-blue-700 text-white rounded-2xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <i class="fas fa-folder text-5xl opacity-50"></i>
                <div class="text-right">
                    <div class="text-4xl font-bold">{{ $totalFiles }}</div>
                    <div class="text-blue-100 text-sm">Documents</div>
                </div>
            </div>
            <div class="text-sm text-blue-100">Fichiers stockés</div>
        </div>
    </div>
</div>
@endsection
