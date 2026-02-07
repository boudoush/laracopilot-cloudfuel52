@extends('layouts.verifier')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <!-- Welcome Banner -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white rounded-2xl p-8 mb-8 relative overflow-hidden shadow-xl">
        <div class="absolute top-0 right-0 opacity-10">
            <i class="fas fa-check-circle text-9xl"></i>
        </div>
        <div class="relative z-10">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-4xl font-bold mb-2">👋 Bienvenue, {{ session('user_name') }}!</h1>
                    <p class="text-blue-100 text-lg">Vérifiez et validez l'authenticité du bétail en temps réel</p>
                </div>
                <div class="hidden md:block">
                    <div class="bg-white bg-opacity-20 rounded-2xl p-6 backdrop-blur text-center">
                        <i class="fas fa-user-shield text-6xl mb-2"></i>
                        <div class="font-bold">Vérificateur</div>
                        <div class="text-sm text-blue-100">Officiel</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="grid md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift fade-in">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-qrcode text-white text-2xl"></i>
                </div>
                <span class="text-blue-600 font-bold text-sm">Scans</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ $totalScans ?? 0 }}</div>
            <div class="text-gray-600 text-sm">QR Codes Scannés</div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift fade-in" style="animation-delay: 0.1s;">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-check-circle text-white text-2xl"></i>
                </div>
                <span class="text-green-600 font-bold text-sm">Vérifiés</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ $verifiedAnimals ?? 0 }}</div>
            <div class="text-gray-600 text-sm">Animaux Vérifiés</div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift fade-in" style="animation-delay: 0.2s;">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-clock text-white text-2xl"></i>
                </div>
                <span class="text-orange-600 font-bold text-sm">Aujourd'hui</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ $todayScans ?? 0 }}</div>
            <div class="text-gray-600 text-sm">Scans du Jour</div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift fade-in" style="animation-delay: 0.3s;">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-percentage text-white text-2xl"></i>
                </div>
                <span class="text-purple-600 font-bold text-sm">Taux</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">98%</div>
            <div class="text-gray-600 text-sm">Taux de Validité</div>
        </div>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        <!-- Main Scanner -->
        <div class="md:col-span-2">
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8 fade-in">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-qrcode text-blue-500 mr-3"></i>
                    Scanner QR Code
                </h2>
                
                <a href="{{ route('verifier.scan') }}" class="block group">
                    <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-3xl p-12 text-center hover:shadow-2xl transition transform hover:scale-105">
                        <div class="w-32 h-32 bg-gradient-to-br from-blue-600 to-blue-800 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-12 transition duration-300">
                            <i class="fas fa-qrcode text-white text-7xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Scanner un QR Code</h3>
                        <p class="text-gray-600 mb-6">Cliquez pour accéder au scanner et vérifier l'authenticité d'un animal</p>
                        <div class="inline-block bg-blue-600 text-white px-8 py-4 rounded-xl font-bold group-hover:bg-blue-700 transition">
                            <i class="fas fa-camera mr-2"></i>Ouvrir le Scanner
                        </div>
                    </div>
                </a>
            </div>

            <!-- Recent Scans -->
            <div class="bg-white rounded-2xl shadow-lg p-8 fade-in">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-history text-green-500 mr-3"></i>
                    Scans Récents
                </h2>
                @if(isset($recentScans) && count($recentScans) > 0)
                    <div class="space-y-4">
                        @foreach($recentScans as $scan)
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-gray-800">{{ $scan->animal_name ?? 'Animal #'.$scan->id }}</div>
                                    <div class="text-sm text-gray-600">{{ $scan->scanned_at ?? 'Il y a quelques minutes' }}</div>
                                </div>
                            </div>
                            <span class="bg-green-100 text-green-700 px-4 py-2 rounded-lg font-bold text-sm">
                                <i class="fas fa-check-circle mr-1"></i>Vérifié
                            </span>
                        </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-12">
                        <i class="fas fa-qrcode text-gray-300 text-6xl mb-4"></i>
                        <p class="text-gray-600 mb-4">Aucun scan effectué aujourd'hui</p>
                        <a href="{{ route('verifier.scan') }}" class="bg-blue-600 text-white px-6 py-3 rounded-xl font-bold inline-block hover:bg-blue-700 transition">
                            <i class="fas fa-qrcode mr-2"></i>Commencer à Scanner
                        </a>
                    </div>
                @endif
            </div>
        </div>

        <!-- Help & Guide -->
        <div class="space-y-8">
            <!-- How to Verify -->
            <div class="bg-gradient-to-br from-green-500 to-green-700 text-white rounded-2xl p-8 shadow-lg fade-in">
                <i class="fas fa-info-circle text-5xl mb-4 opacity-80"></i>
                <h3 class="text-2xl font-bold mb-4">Comment Vérifier?</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                            <span class="font-bold">1</span>
                        </div>
                        <div>
                            <div class="font-bold mb-1">Scanner le QR Code</div>
                            <div class="text-sm text-green-100">Utilisez votre caméra pour scanner</div>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                            <span class="font-bold">2</span>
                        </div>
                        <div>
                            <div class="font-bold mb-1">Vérifier les Infos</div>
                            <div class="text-sm text-green-100">Consultez la fiche complète</div>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                            <span class="font-bold">3</span>
                        </div>
                        <div>
                            <div class="font-bold mb-1">Valider ou Rejeter</div>
                            <div class="text-sm text-green-100">Confirmez l'authenticité</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="bg-white rounded-2xl shadow-lg p-8 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-6">Actions Rapides</h3>
                <div class="space-y-3">
                    <a href="{{ route('verifier.scan') }}" class="block bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 rounded-xl font-bold transition text-center">
                        <i class="fas fa-qrcode mr-2"></i>Scanner QR Code
                    </a>
                    <a href="#" class="block bg-gray-600 hover:bg-gray-700 text-white px-4 py-3 rounded-xl font-bold transition text-center">
                        <i class="fas fa-history mr-2"></i>Historique Complet
                    </a>
                    <a href="https://wa.me/221771234567" target="_blank" class="block bg-green-500 hover:bg-green-600 text-white px-4 py-3 rounded-xl font-bold transition text-center">
                        <i class="fab fa-whatsapp mr-2"></i>Support WhatsApp
                    </a>
                </div>
            </div>

            <!-- Stats Card -->
            <div class="bg-gradient-to-br from-orange-500 to-orange-700 text-white rounded-2xl p-8 shadow-lg fade-in">
                <div class="text-center">
                    <i class="fas fa-trophy text-6xl mb-4 opacity-80"></i>
                    <div class="text-4xl font-bold mb-2">98%</div>
                    <div class="text-orange-100 mb-4">Taux de Réussite</div>
                    <p class="text-sm text-orange-50">Excellent travail! Continuez à maintenir ce niveau de précision.</p>
                </div>
            </div>

            <!-- Tips -->
            <div class="bg-yellow-50 border-l-4 border-yellow-500 rounded-lg p-6 fade-in">
                <div class="flex items-start">
                    <i class="fas fa-lightbulb text-yellow-500 text-2xl mr-4 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2">💡 Conseil du Jour</h4>
                        <p class="text-sm text-gray-600">Vérifiez toujours les photos et le carnet de santé avant de valider un animal!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
