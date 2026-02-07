@extends('layouts.admin')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <!-- Welcome Header -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white rounded-2xl p-8 mb-8 shadow-xl">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-4xl font-bold mb-2">👋 Tableau de Bord Administrateur</h1>
                <p class="text-blue-100 text-lg">Bienvenue {{ session('admin_user') }} - Vue d'ensemble complète</p>
            </div>
            <div class="hidden md:block">
                <div class="text-right">
                    <div class="text-3xl font-bold">{{ date('d/m/Y') }}</div>
                    <div class="text-blue-100">{{ date('H:i') }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats Grid -->
    <div class="grid md:grid-cols-4 gap-6 mb-8">
        <!-- Total Users -->
        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-users text-white text-2xl"></i>
                </div>
                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">Utilisateurs</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ number_format($totalUsers) }}</div>
            <div class="text-sm text-gray-600 mb-3">Total Utilisateurs</div>
            <div class="flex items-center text-xs text-green-600">
                <i class="fas fa-arrow-up mr-1"></i>
                <span>+{{ $newUsersToday }} aujourd'hui</span>
            </div>
        </div>

        <!-- Total Animals -->
        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-cow text-white text-2xl"></i>
                </div>
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Animaux</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ number_format($totalAnimals) }}</div>
            <div class="text-sm text-gray-600 mb-3">Total Bétail</div>
            <div class="flex items-center text-xs text-green-600">
                <i class="fas fa-arrow-up mr-1"></i>
                <span>+{{ $animalsToday }} aujourd'hui</span>
            </div>
        </div>

        <!-- QR Codes -->
        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-qrcode text-white text-2xl"></i>
                </div>
                <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-bold">QR Codes</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ number_format($animalsWithQR) }}</div>
            <div class="text-sm text-gray-600 mb-3">Codes Générés</div>
            <div class="flex items-center text-xs text-blue-600">
                <i class="fas fa-percentage mr-1"></i>
                <span>{{ $qrCodeGenerationRate }}% taux</span>
            </div>
        </div>

        <!-- Revenue -->
        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-money-bill-wave text-white text-2xl"></i>
                </div>
                <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-bold">Revenus</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ number_format($totalPayments) }}</div>
            <div class="text-sm text-gray-600 mb-3">FCFA Total</div>
            <div class="flex items-center text-xs text-green-600">
                <i class="fas fa-arrow-up mr-1"></i>
                <span>+{{ number_format($paymentsToday) }} FCFA</span>
            </div>
        </div>
    </div>

    <!-- Detailed Stats Row -->
    <div class="grid md:grid-cols-3 gap-6 mb-8">
        <!-- User Breakdown -->
        <div class="bg-white rounded-2xl p-6 shadow-lg">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-user-friends text-blue-500 mr-3"></i>
                Répartition Utilisateurs
            </h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-user text-blue-600 mr-3"></i>
                        <span class="font-medium">Éleveurs</span>
                    </div>
                    <span class="font-bold text-blue-600">{{ $breederCount }}</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-user-shield text-green-600 mr-3"></i>
                        <span class="font-medium">Vérificateurs</span>
                    </div>
                    <span class="font-bold text-green-600">{{ $verifierCount }}</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-purple-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-user-cog text-purple-600 mr-3"></i>
                        <span class="font-medium">Administrateurs</span>
                    </div>
                    <span class="font-bold text-purple-600">{{ $adminCount }}</span>
                </div>
            </div>
        </div>

        <!-- Animal Status -->
        <div class="bg-white rounded-2xl p-6 shadow-lg">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-tasks text-green-500 mr-3"></i>
                Statut des Animaux
            </h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-green-600 mr-3"></i>
                        <span class="font-medium">Approuvés</span>
                    </div>
                    <span class="font-bold text-green-600">{{ $approvedAnimals }}</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-orange-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-clock text-orange-600 mr-3"></i>
                        <span class="font-medium">En Attente</span>
                    </div>
                    <span class="font-bold text-orange-600">{{ $pendingAnimals }}</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-red-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-times-circle text-red-600 mr-3"></i>
                        <span class="font-medium">Rejetés</span>
                    </div>
                    <span class="font-bold text-red-600">{{ $rejectedAnimals }}</span>
                </div>
            </div>
        </div>

        <!-- Payment Status -->
        <div class="bg-white rounded-2xl p-6 shadow-lg">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-dollar-sign text-purple-500 mr-3"></i>
                Paiements
            </h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-600 mr-3"></i>
                        <span class="font-medium">Approuvés</span>
                    </div>
                    <span class="font-bold text-green-600">{{ number_format($approvedPayments) }}</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-orange-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-hourglass-half text-orange-600 mr-3"></i>
                        <span class="font-medium">En Attente</span>
                    </div>
                    <span class="font-bold text-orange-600">{{ number_format($pendingPayments) }}</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-receipt text-blue-600 mr-3"></i>
                        <span class="font-medium">Transactions</span>
                    </div>
                    <span class="font-bold text-blue-600">{{ $totalTransactions }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Recent Activity -->
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

        <!-- Recent Users -->
        <div class="bg-white rounded-2xl p-6 shadow-lg">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-user-plus text-blue-500 mr-3"></i>
                Derniers Utilisateurs
            </h3>
            @if($recentUsers->count() > 0)
                <div class="space-y-3">
                    @foreach($recentUsers as $user)
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div>
                                <div class="font-bold text-gray-800">{{ $user->name }}</div>
                                <div class="text-xs text-gray-600">{{ $user->email }}</div>
                            </div>
                        </div>
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">{{ ucfirst($user->role) }}</span>
                    </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500 text-center py-8">Aucun utilisateur récent</p>
            @endif
        </div>
    </div>

    <!-- Performance Indicators -->
    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-green-500 to-green-700 text-white rounded-2xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <i class="fas fa-percentage text-5xl opacity-50"></i>
                <div class="text-right">
                    <div class="text-4xl font-bold">{{ $approvalRate }}%</div>
                    <div class="text-green-100 text-sm">Taux d'Approbation</div>
                </div>
            </div>
            <div class="text-sm text-green-100">Animaux approuvés sur total</div>
        </div>

        <div class="bg-gradient-to-br from-orange-500 to-orange-700 text-white rounded-2xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <i class="fas fa-qrcode text-5xl opacity-50"></i>
                <div class="text-right">
                    <div class="text-4xl font-bold">{{ $qrCodeGenerationRate }}%</div>
                    <div class="text-orange-100 text-sm">QR Codes Générés</div>
                </div>
            </div>
            <div class="text-sm text-orange-100">Animaux avec QR code</div>
        </div>

        <div class="bg-gradient-to-br from-purple-500 to-purple-700 text-white rounded-2xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <i class="fas fa-money-check-alt text-5xl opacity-50"></i>
                <div class="text-right">
                    <div class="text-4xl font-bold">{{ $paymentApprovalRate }}%</div>
                    <div class="text-purple-100 text-sm">Paiements Validés</div>
                </div>
            </div>
            <div class="text-sm text-purple-100">Taux de validation</div>
        </div>
    </div>
</div>
@endsection
