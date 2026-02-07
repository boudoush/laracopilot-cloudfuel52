@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="gradient-green text-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute transform rotate-45 -right-20 -top-20 w-96 h-96 bg-white rounded-full animate-pulse"></div>
        <div class="absolute transform rotate-12 -left-20 -bottom-20 w-80 h-80 bg-white rounded-full pulse-slow"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="fade-in">
            <div class="inline-block bg-orange-500 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 animate-bounce">
                <i class="fas fa-star mr-2"></i>Services Premium
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Nos Services</h1>
            <p class="text-xl text-green-100 max-w-3xl mx-auto">
                Solutions complètes de traçabilité et services personnalisés pour tous les éleveurs
            </p>
        </div>
    </div>
</section>

<!-- Core Services Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Services de Traçabilité</h2>
            <p class="text-xl text-gray-600">Des solutions adaptées à chaque besoin</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Service 1: Individual Animal -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-3xl p-8 hover-lift fade-in shadow-lg">
                <div class="relative mb-8">
                    <div class="w-20 h-20 gradient-green rounded-2xl flex items-center justify-center mx-auto mb-6 transform hover:rotate-12 transition">
                        <i class="fas fa-cow text-white text-4xl"></i>
                    </div>
                    <div class="w-full h-56 bg-gradient-to-br from-green-200 to-green-300 rounded-2xl flex items-center justify-center">
                        <div class="text-center">
                            <i class="fas fa-cow text-green-700 text-8xl mb-4"></i>
                            <div class="bg-white px-4 py-2 rounded-full inline-block">
                                <i class="fas fa-qrcode text-green-600 text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Animal Individuel</h3>
                <div class="text-4xl font-bold text-green-600 mb-4">5,000 FCFA</div>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mt-1 mr-3"></i>
                        <span>QR code unique et permanent</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mt-1 mr-3"></i>
                        <span>Fiche d'identité complète</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mt-1 mr-3"></i>
                        <span>Carnet de santé numérique</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mt-1 mr-3"></i>
                        <span>Historique vaccinations</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mt-1 mr-3"></i>
                        <span>Photos et documents</span>
                    </li>
                </ul>
                <a href="{{ route('register') }}" class="block w-full gradient-green text-white py-3 rounded-xl font-bold text-center hover:opacity-90 transition transform hover:scale-105">
                    <i class="fas fa-arrow-right mr-2"></i>Commander
                </a>
            </div>

            <!-- Service 2: Batch/Lot -->
            <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-3xl p-8 hover-lift fade-in shadow-lg border-4 border-orange-400 relative" style="animation-delay: 0.2s;">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white px-6 py-2 rounded-full text-sm font-bold">
                    <i class="fas fa-fire mr-2"></i>POPULAIRE
                </div>
                <div class="relative mb-8 mt-4">
                    <div class="w-20 h-20 gradient-orange rounded-2xl flex items-center justify-center mx-auto mb-6 transform hover:rotate-12 transition">
                        <i class="fas fa-layer-group text-white text-4xl"></i>
                    </div>
                    <div class="w-full h-56 bg-gradient-to-br from-orange-200 to-orange-300 rounded-2xl flex items-center justify-center">
                        <div class="text-center">
                            <div class="flex justify-center space-x-2 mb-4">
                                <i class="fas fa-cow text-orange-700 text-6xl"></i>
                                <i class="fas fa-sheep text-orange-600 text-5xl"></i>
                            </div>
                            <div class="bg-white px-4 py-2 rounded-full inline-block">
                                <i class="fas fa-qrcode text-orange-600 text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Lot d'Animaux</h3>
                <div class="text-4xl font-bold text-orange-600 mb-4">10,000 FCFA</div>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-orange-600 mt-1 mr-3"></i>
                        <span>QR code unique pour le lot</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-orange-600 mt-1 mr-3"></i>
                        <span>Liste complète des animaux</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-orange-600 mt-1 mr-3"></i>
                        <span>Suivi collectif de santé</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-orange-600 mt-1 mr-3"></i>
                        <span>Gestion groupée</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-orange-600 mt-1 mr-3"></i>
                        <span>Économie de 50%</span>
                    </li>
                </ul>
                <a href="{{ route('register') }}" class="block w-full gradient-orange text-white py-3 rounded-xl font-bold text-center hover:opacity-90 transition transform hover:scale-105 shadow-lg">
                    <i class="fas fa-arrow-right mr-2"></i>Commander
                </a>
            </div>

            <!-- Service 3: Premium Management -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-3xl p-8 hover-lift fade-in shadow-lg" style="animation-delay: 0.4s;">
                <div class="relative mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-600 to-purple-800 rounded-2xl flex items-center justify-center mx-auto mb-6 transform hover:rotate-12 transition">
                        <i class="fas fa-crown text-white text-4xl"></i>
                    </div>
                    <div class="w-full h-56 bg-gradient-to-br from-purple-200 to-purple-300 rounded-2xl flex items-center justify-center">
                        <div class="text-center">
                            <i class="fas fa-chart-line text-purple-700 text-8xl mb-4"></i>
                            <div class="bg-white px-4 py-2 rounded-full inline-block">
                                <i class="fas fa-star text-purple-600 text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Gestion Premium</h3>
                <div class="text-4xl font-bold text-purple-600 mb-4">Sur Devis</div>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-purple-600 mt-1 mr-3"></i>
                        <span>Tous les services inclus</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-purple-600 mt-1 mr-3"></i>
                        <span>Tableau de bord avancé</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-purple-600 mt-1 mr-3"></i>
                        <span>Rapports et statistiques</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-purple-600 mt-1 mr-3"></i>
                        <span>Support prioritaire 24/7</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-purple-600 mt-1 mr-3"></i>
                        <span>Formation personnalisée</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="block w-full bg-gradient-to-r from-purple-600 to-purple-800 text-white py-3 rounded-xl font-bold text-center hover:opacity-90 transition transform hover:scale-105">
                    <i class="fas fa-phone mr-2"></i>Nous Contacter
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Personalized VIP Service -->
<section class="py-20 bg-gradient-to-br from-orange-50 to-orange-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
            <div class="grid md:grid-cols-2">
                <!-- Left: Images/Icons -->
                <div class="bg-gradient-to-br from-orange-500 to-orange-700 p-12 text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -mr-32 -mt-32"></div>
                    <div class="relative z-10">
                        <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center mb-6 animate-bounce">
                            <i class="fas fa-concierge-bell text-orange-600 text-4xl"></i>
                        </div>
                        <h2 class="text-4xl font-bold mb-6">Service VIP Personnalisé</h2>
                        <p class="text-xl text-orange-100 mb-8">Nous faisons tout à votre place!</p>
                        
                        <div class="space-y-6">
                            <div class="bg-white bg-opacity-10 rounded-2xl p-6 backdrop-blur">
                                <div class="flex items-center mb-4">
                                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mr-4">
                                        <i class="fas fa-user-tie text-orange-600 text-2xl"></i>
                                    </div>
                                    <div>
                                        <div class="font-bold text-lg">Assistant Dédié</div>
                                        <div class="text-sm text-orange-100">Un expert à votre service</div>
                                    </div>
                                </div>
                                <p class="text-sm text-orange-50">Votre assistant personnel s'occupe de tout l'enregistrement de vos animaux.</p>
                            </div>

                            <div class="bg-white bg-opacity-10 rounded-2xl p-6 backdrop-blur">
                                <div class="flex items-center mb-4">
                                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mr-4">
                                        <i class="fas fa-truck text-orange-600 text-2xl"></i>
                                    </div>
                                    <div>
                                        <div class="font-bold text-lg">Livraison Incluse</div>
                                        <div class="text-sm text-orange-100">Étiquettes à domicile</div>
                                    </div>
                                </div>
                                <p class="text-sm text-orange-50">Recevez vos QR codes imprimés sur étiquettes professionnelles directement chez vous.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Service Details -->
                <div class="p-12">
                    <h3 class="text-3xl font-bold text-gray-800 mb-6">Ce que nous faisons pour vous</h3>
                    
                    <div class="space-y-6 mb-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 gradient-green rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-800 mb-2">Collecte des Informations</h4>
                                <p class="text-gray-600">Envoyez-nous vos documents par WhatsApp, email ou SMS. Nous nous occupons du reste.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 gradient-orange rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-database text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-800 mb-2">Saisie Complète</h4>
                                <p class="text-gray-600">Notre équipe remplit tous les formulaires et crée les fiches d'identité de vos animaux.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 gradient-brown rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-qrcode text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-800 mb-2">Génération QR Codes</h4>
                                <p class="text-gray-600">QR codes uniques générés et testés pour chaque animal ou lot.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-print text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-800 mb-2">Impression Professionnelle</h4>
                                <p class="text-gray-600">Étiquettes durables, résistantes à l'eau et aux UV, prêtes à coller.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-purple-800 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-shipping-fast text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-800 mb-2">Livraison Rapide</h4>
                                <p class="text-gray-600">Livraison dans toute l'Afrique de l'Ouest sous 48-72h.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-orange-100 to-orange-200 rounded-2xl p-6 mb-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-sm text-gray-600 mb-1">Tarif à partir de</div>
                                <div class="text-3xl font-bold text-orange-600">15,000 FCFA</div>
                                <div class="text-sm text-gray-600">+ frais de livraison</div>
                            </div>
                            <i class="fas fa-tag text-orange-400 text-5xl"></i>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <a href="https://wa.me/221771234567?text=Bonjour, je suis intéressé par le service VIP personnalisé" target="_blank" class="flex-1 bg-green-500 hover:bg-green-600 text-white px-6 py-4 rounded-xl font-bold text-center transition transform hover:scale-105">
                            <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                        </a>
                        <a href="tel:+221771234567" class="flex-1 gradient-orange text-white px-6 py-4 rounded-xl font-bold text-center hover:opacity-90 transition transform hover:scale-105">
                            <i class="fas fa-phone mr-2"></i>Appeler
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Pourquoi Nous Choisir?</h2>
            <p class="text-xl text-gray-600">Les avantages de SahelTrace</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 text-center hover-lift fade-in">
                <div class="w-16 h-16 gradient-green rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-bolt text-white text-2xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Rapide</h3>
                <p class="text-gray-600 text-sm">QR codes générés en moins de 24h</p>
            </div>

            <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-6 text-center hover-lift fade-in" style="animation-delay: 0.1s;">
                <div class="w-16 h-16 gradient-orange rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Sécurisé</h3>
                <p class="text-gray-600 text-sm">Cryptage SSL et données protégées</p>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 text-center hover-lift fade-in" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-800 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-mobile-alt text-white text-2xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Mobile</h3>
                <p class="text-gray-600 text-sm">Accessible depuis smartphone</p>
            </div>

            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 text-center hover-lift fade-in" style="animation-delay: 0.3s;">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-purple-800 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-headset text-white text-2xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Support 24/7</h3>
                <p class="text-gray-600 text-sm">Assistance à tout moment</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-green text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center fade-in">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Prêt à Commencer?</h2>
        <p class="text-xl mb-8 text-green-100">Choisissez le service qui correspond à vos besoins</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('register') }}" class="bg-white text-green-700 px-8 py-4 rounded-xl text-lg font-bold hover:bg-gray-100 transition inline-flex items-center transform hover:scale-105 shadow-lg">
                <i class="fas fa-user-plus mr-2"></i>S'inscrire Maintenant
            </a>
            <a href="{{ route('contact') }}" class="bg-orange-500 text-white px-8 py-4 rounded-xl text-lg font-bold hover:bg-orange-600 transition inline-flex items-center transform hover:scale-105 shadow-lg">
                <i class="fas fa-phone mr-2"></i>Demander un Devis
            </a>
        </div>
    </div>
</section>
@endsection
