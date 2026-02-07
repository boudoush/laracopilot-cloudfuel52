@extends('layouts.breeder')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <!-- Welcome Banner -->
    <div class="gradient-green text-white rounded-2xl p-8 mb-8 relative overflow-hidden shadow-xl">
        <div class="absolute top-0 right-0 opacity-10">
            <i class="fas fa-cow text-9xl"></i>
        </div>
        <div class="relative z-10">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-4xl font-bold mb-2">👋 Bienvenue, {{ session('user_name') }}!</h1>
                    <p class="text-green-100 text-lg">Gérez votre cheptel facilement depuis votre tableau de bord</p>
                </div>
                <div class="hidden md:block">
                    <div class="bg-white bg-opacity-20 rounded-2xl p-6 backdrop-blur text-center">
                        <i class="fas fa-user-circle text-6xl mb-2"></i>
                        <div class="font-bold">Éleveur Vérifié</div>
                        <div class="text-sm text-green-100">Compte Actif</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="grid md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift fade-in">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-cow text-white text-2xl"></i>
                </div>
                <span class="text-green-600 font-bold text-sm">Total</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ $totalAnimals ?? 0 }}</div>
            <div class="text-gray-600 text-sm">Animaux Enregistrés</div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift fade-in" style="animation-delay: 0.1s;">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-qrcode text-white text-2xl"></i>
                </div>
                <span class="text-orange-600 font-bold text-sm">QR Codes</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ $qrCodesGenerated ?? 0 }}</div>
            <div class="text-gray-600 text-sm">Codes Générés</div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift fade-in" style="animation-delay: 0.2s;">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-clock text-white text-2xl"></i>
                </div>
                <span class="text-blue-600 font-bold text-sm">En Attente</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ $pendingAnimals ?? 0 }}</div>
            <div class="text-gray-600 text-sm">À Valider</div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift fade-in" style="animation-delay: 0.3s;">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl flex items-center justify-center">
                    <i class="fas fa-money-bill-wave text-white text-2xl"></i>
                </div>
                <span class="text-purple-600 font-bold text-sm">Paiements</span>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-1">{{ $totalPayments ?? 0 }}</div>
            <div class="text-gray-600 text-sm">FCFA</div>
        </div>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        <!-- Quick Actions -->
        <div class="md:col-span-2">
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8 fade-in">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-bolt text-orange-500 mr-3"></i>
                    Actions Rapides
                </h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <a href="{{ route('breeder.animals.create') }}" class="group bg-gradient-to-br from-green-500 to-green-700 text-white p-6 rounded-2xl hover:shadow-xl transition transform hover:scale-105">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-plus text-2xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-lg">Ajouter Animal</div>
                                <div class="text-sm text-green-100">Nouvel enregistrement</div>
                            </div>
                        </div>
                        <div class="text-sm text-green-50">Enregistrez un nouvel animal dans votre cheptel avec toutes ses informations</div>
                    </a>

                    <a href="{{ route('breeder.animals.index') }}" class="group bg-gradient-to-br from-orange-500 to-orange-700 text-white p-6 rounded-2xl hover:shadow-xl transition transform hover:scale-105">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-list text-2xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-lg">Mes Animaux</div>
                                <div class="text-sm text-orange-100">Voir la liste complète</div>
                            </div>
                        </div>
                        <div class="text-sm text-orange-50">Consultez et gérez tous vos animaux enregistrés</div>
                    </a>

                    <a href="{{ route('breeder.payments.index') }}" class="group bg-gradient-to-br from-blue-500 to-blue-700 text-white p-6 rounded-2xl hover:shadow-xl transition transform hover:scale-105">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-money-bill-wave text-2xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-lg">Paiements</div>
                                <div class="text-sm text-blue-100">Gérer les paiements</div>
                            </div>
                        </div>
                        <div class="text-sm text-blue-50">Consultez vos paiements et générez les QR codes</div>
                    </a>

                    <a href="https://wa.me/221771234567?text=Bonjour, j'ai besoin d'aide" target="_blank" class="group bg-gradient-to-br from-purple-500 to-purple-700 text-white p-6 rounded-2xl hover:shadow-xl transition transform hover:scale-105">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mr-4">
                                <i class="fab fa-whatsapp text-2xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-lg">Assistance</div>
                                <div class="text-sm text-purple-100">Support WhatsApp</div>
                            </div>
                        </div>
                        <div class="text-sm text-purple-50">Contactez notre équipe pour toute aide</div>
                    </a>
                </div>
            </div>

            <!-- Recent Animals -->
            <div class="bg-white rounded-2xl shadow-lg p-8 fade-in">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-history text-green-500 mr-3"></i>
                    Derniers Animaux Ajoutés
                </h2>
                @if(isset($recentAnimals) && count($recentAnimals) > 0)
                    <div class="space-y-4">
                        @foreach($recentAnimals as $animal)
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-cow text-white"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-gray-800">{{ $animal->name ?? 'Animal #'.$animal->id }}</div>
                                    <div class="text-sm text-gray-600">{{ $animal->species ?? 'Bovin' }} - {{ $animal->breed ?? 'Race non spécifiée' }}</div>
                                </div>
                            </div>
                            <a href="{{ route('breeder.animals.show', $animal->id) }}" class="text-green-600 hover:text-green-700 font-bold">
                                Voir <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-12">
                        <i class="fas fa-cow text-gray-300 text-6xl mb-4"></i>
                        <p class="text-gray-600 mb-4">Aucun animal enregistré pour le moment</p>
                        <a href="{{ route('breeder.animals.create') }}" class="gradient-green text-white px-6 py-3 rounded-xl font-bold inline-block hover:opacity-90 transition">
                            <i class="fas fa-plus mr-2"></i>Ajouter Votre Premier Animal
                        </a>
                    </div>
                @endif
            </div>
        </div>

        <!-- Help & Resources -->
        <div class="space-y-8">
            <!-- Getting Started -->
            <div class="bg-gradient-to-br from-orange-500 to-orange-700 text-white rounded-2xl p-8 shadow-lg fade-in">
                <i class="fas fa-book text-5xl mb-4 opacity-80"></i>
                <h3 class="text-2xl font-bold mb-4">Guide de Démarrage</h3>
                <p class="text-orange-100 mb-6">Découvrez comment utiliser SahelTrace efficacement</p>
                <div class="space-y-3">
                    <div class="flex items-center text-sm">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span>Enregistrer vos animaux</span>
                    </div>
                    <div class="flex items-center text-sm">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span>Générer des QR codes</span>
                    </div>
                    <div class="flex items-center text-sm">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span>Suivre la santé</span>
                    </div>
                </div>
            </div>

            <!-- Support -->
            <div class="bg-white rounded-2xl shadow-lg p-8 fade-in">
                <div class="text-center">
                    <div class="w-16 h-16 gradient-green rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Besoin d'Aide?</h3>
                    <p class="text-gray-600 mb-6 text-sm">Notre équipe est là pour vous accompagner</p>
                    <div class="space-y-3">
                        <a href="https://wa.me/221771234567" target="_blank" class="block bg-green-500 hover:bg-green-600 text-white px-4 py-3 rounded-xl font-bold transition">
                            <i class="fab fa-whatsapp mr-2"></i>WhatsApp Support
                        </a>
                        <a href="tel:+221771234567" class="block bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-xl font-bold transition">
                            <i class="fas fa-phone mr-2"></i>Appeler
                        </a>
                        <a href="mailto:contact@saheltrace.com" class="block bg-gray-500 hover:bg-gray-600 text-white px-4 py-3 rounded-xl font-bold transition">
                            <i class="fas fa-envelope mr-2"></i>Email
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tips -->
            <div class="bg-blue-50 border-l-4 border-blue-500 rounded-lg p-6 fade-in">
                <div class="flex items-start">
                    <i class="fas fa-lightbulb text-blue-500 text-2xl mr-4 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2">💡 Astuce du Jour</h4>
                        <p class="text-sm text-gray-600">Pensez à mettre à jour régulièrement les carnets de santé de vos animaux pour une traçabilité optimale!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
