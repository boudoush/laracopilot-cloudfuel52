@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="gradient-green text-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute transform rotate-45 -right-20 -top-20 w-96 h-96 bg-white rounded-full animate-pulse"></div>
        <div class="absolute transform rotate-12 -left-20 -bottom-20 w-80 h-80 bg-white rounded-full pulse-slow"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="slide-in-left">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                    Traçabilité Moderne du Bétail
                </h1>
                <p class="text-xl mb-8 text-green-100">
                    Solution complète pour tous types de bétail: bovins, ovins, caprins. Sécurisez votre cheptel avec des QR codes uniques et accédez instantanément à l'historique complet de santé.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('register') }}" class="gradient-orange text-white px-8 py-4 rounded-xl text-lg font-bold hover:opacity-90 transition inline-flex items-center transform hover:scale-105 shadow-lg">
                        <i class="fas fa-user-plus mr-2"></i>S'inscrire Gratuitement
                    </a>
                    <a href="{{ route('admin.login') }}" class="bg-white text-green-700 px-8 py-4 rounded-xl text-lg font-bold hover:bg-gray-100 transition inline-flex items-center transform hover:scale-105 shadow-lg">
                        <i class="fas fa-sign-in-alt mr-2"></i>Se Connecter
                    </a>
                </div>
            </div>
            <div class="relative slide-in-right">
                <div class="bg-white rounded-3xl shadow-2xl p-8 transform hover:scale-105 transition duration-300">
                    <div class="w-full h-80 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex flex-col items-center justify-center p-6">
                        <i class="fas fa-cow text-green-700 text-7xl mb-4"></i>
                        <i class="fas fa-sheep text-green-600 text-6xl mb-4"></i>
                        <i class="fas fa-horse text-green-700 text-5xl"></i>
                        <p class="text-green-800 font-bold text-xl mt-4">Tous Types de Bétail</p>
                        <p class="text-green-600 text-sm">Bovins • Ovins • Caprins • Équins</p>
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-orange-500 text-white p-6 rounded-xl shadow-lg pulse-slow">
                        <i class="fas fa-qrcode text-4xl mb-2"></i>
                        <p class="font-bold text-lg">QR Code Unique</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Comment Ça Marche?</h2>
            <p class="text-xl text-gray-600">4 étapes simples pour tracer votre bétail</p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center fade-in">
                <div class="relative mb-8">
                    <div class="w-24 h-24 gradient-green rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <span class="text-4xl font-bold text-white">1</span>
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center mb-4">
                        <i class="fas fa-user-plus text-blue-600 text-6xl"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-gray-800">Inscription</h3>
                <p class="text-gray-600">Créez votre compte gratuitement en quelques minutes. Renseignez vos informations d'éleveur.</p>
            </div>

            <div class="text-center fade-in" style="animation-delay: 0.2s;">
                <div class="relative mb-8">
                    <div class="w-24 h-24 gradient-brown rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <span class="text-4xl font-bold text-white">2</span>
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center mb-4">
                        <i class="fas fa-clipboard-list text-green-600 text-6xl"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-gray-800">Enregistrement</h3>
                <p class="text-gray-600">Ajoutez vos animaux: race, âge, poids, vaccinations, carnets de santé et photos.</p>
            </div>

            <div class="text-center fade-in" style="animation-delay: 0.4s;">
                <div class="relative mb-8">
                    <div class="w-24 h-24 gradient-orange rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <span class="text-4xl font-bold text-white">3</span>
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl flex items-center justify-center mb-4">
                        <i class="fas fa-money-bill-wave text-orange-600 text-6xl"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-gray-800">Paiement</h3>
                <p class="text-gray-600">5,000 FCFA par animal ou 10,000 FCFA par lot. Paiement sécurisé via WhatsApp ou mobile money.</p>
            </div>

            <div class="text-center fade-in" style="animation-delay: 0.6s;">
                <div class="relative mb-8">
                    <div class="w-24 h-24 bg-gradient-to-br from-purple-600 to-purple-800 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <span class="text-4xl font-bold text-white">4</span>
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl flex items-center justify-center mb-4">
                        <i class="fas fa-qrcode text-purple-600 text-6xl"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-gray-800">QR Code</h3>
                <p class="text-gray-600">Recevez votre QR code unique immédiatement après validation. Scannez pour vérifier!</p>
            </div>
        </div>
    </div>
</section>

<!-- Personalized Service Section -->
<section class="py-20 bg-gradient-to-br from-orange-50 to-orange-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 fade-in">
            <div class="text-center mb-12">
                <div class="w-20 h-20 gradient-orange rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-concierge-bell text-white text-3xl"></i>
                </div>
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Service Personnalisé VIP</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Pas le temps ou besoin d'aide? Nous nous occupons de tout pour vous!</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="space-y-6">
                    <div class="flex items-start space-x-4 bg-green-50 p-6 rounded-2xl hover-lift">
                        <div class="w-12 h-12 gradient-green rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-hands-helping text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl text-gray-800 mb-2">On Remplit pour Vous</h3>
                            <p class="text-gray-600">Envoyez-nous simplement les informations de vos animaux, notre équipe s'occupe de tout l'enregistrement dans la plateforme.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 bg-orange-50 p-6 rounded-2xl hover-lift">
                        <div class="w-12 h-12 gradient-orange rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-qrcode text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl text-gray-800 mb-2">Génération de QR Codes</h3>
                            <p class="text-gray-600">Nous générons vos QR codes uniques et les préparons pour une utilisation immédiate sur vos animaux ou lots.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 bg-brown-50 p-6 rounded-2xl hover-lift">
                        <div class="w-12 h-12 gradient-brown rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-tag text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl text-gray-800 mb-2">Étiquettes Professionnelles</h3>
                            <p class="text-gray-600">Nous imprimons vos QR codes sur des étiquettes professionnelles, durables et résistantes aux intempéries.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 bg-blue-50 p-6 rounded-2xl hover-lift">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-shipping-fast text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl text-gray-800 mb-2">Livraison à Domicile</h3>
                            <p class="text-gray-600">Recevez vos étiquettes QR codes directement chez vous, prêtes à être appliquées sur votre bétail.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-green-600 to-green-800 text-white p-8 rounded-3xl">
                    <div class="w-full h-64 bg-white bg-opacity-10 rounded-2xl flex items-center justify-center mb-6">
                        <div class="text-center">
                            <i class="fas fa-headset text-white text-7xl mb-4"></i>
                            <p class="text-white font-bold text-2xl">Service Client 24/7</p>
                        </div>
                    </div>
                    <h3 class="text-3xl font-bold mb-6">Comment Ça Marche?</h3>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-white text-green-700 rounded-full flex items-center justify-center font-bold flex-shrink-0">1</div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Contactez-Nous</h4>
                                <p class="text-green-100">Appelez-nous ou envoyez un WhatsApp avec les détails de vos animaux</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-white text-green-700 rounded-full flex items-center justify-center font-bold flex-shrink-0">2</div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Recevez un Devis</h4>
                                <p class="text-green-100">Nous vous envoyons un devis personnalisé selon vos besoins</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-white text-green-700 rounded-full flex items-center justify-center font-bold flex-shrink-0">3</div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">On S'Occupe de Tout</h4>
                                <p class="text-green-100">Nous enregistrons, générons les QR codes et préparons les étiquettes</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-white text-green-700 rounded-full flex items-center justify-center font-bold flex-shrink-0">4</div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Recevez Chez Vous</h4>
                                <p class="text-green-100">Vos étiquettes arrivent à votre porte, prêtes à l'emploi</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-6 bg-white bg-opacity-10 rounded-2xl">
                        <p class="text-center font-bold text-xl mb-4">Intéressé? Contactez-nous!</p>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <a href="https://wa.me/221771234567?text=Bonjour, je suis intéressé par votre service personnalisé VIP" target="_blank" class="flex-1 bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-xl font-bold text-center transition transform hover:scale-105">
                                <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                            </a>
                            <a href="tel:+221771234567" class="flex-1 bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-xl font-bold text-center transition transform hover:scale-105">
                                <i class="fas fa-phone mr-2"></i>Appeler
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Pourquoi Choisir SahelTrace?</h2>
            <p class="text-xl text-gray-600">Une solution complète pour tous les types de bétail</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-3xl p-8 hover-lift fade-in">
                <div class="w-16 h-16 gradient-green rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-qrcode text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">QR Code Unique</h3>
                <p class="text-gray-600 mb-4">Chaque animal reçoit un code QR unique permettant une identification instantanée et sécurisée.</p>
                <div class="w-full h-48 bg-gradient-to-br from-gray-200 to-gray-300 rounded-2xl flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-qrcode text-gray-500 text-6xl mb-3"></i>
                        <p class="text-gray-600 font-semibold">Scan Instantané</p>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-3xl p-8 hover-lift fade-in" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 gradient-brown rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-heartbeat text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Suivi Santé Complet</h3>
                <p class="text-gray-600 mb-4">Historique détaillé des vaccinations, traitements et carnets de santé accessibles en un scan.</p>
                <div class="w-full h-48 bg-gradient-to-br from-gray-200 to-gray-300 rounded-2xl flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-notes-medical text-gray-500 text-6xl mb-3"></i>
                        <p class="text-gray-600 font-semibold">Dossier Médical</p>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-3xl p-8 hover-lift fade-in" style="animation-delay: 0.4s;">
                <div class="w-16 h-16 gradient-orange rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-shield-alt text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Sécurité & Confiance</h3>
                <p class="text-gray-600 mb-4">Données sécurisées, vérification instantanée et traçabilité complète pour garantir l'authenticité.</p>
                <div class="w-full h-48 bg-gradient-to-br from-gray-200 to-gray-300 rounded-2xl flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-lock text-gray-500 text-6xl mb-3"></i>
                        <p class="text-gray-600 font-semibold">Cryptage SSL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift fade-in">
                <div class="w-16 h-16 gradient-green rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-white text-2xl"></i>
                </div>
                <div class="text-4xl font-bold text-gray-800 mb-2">500+</div>
                <div class="text-gray-600">Éleveurs Inscrits</div>
            </div>

            <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift fade-in" style="animation-delay: 0.1s;">
                <div class="w-16 h-16 gradient-brown rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-cow text-white text-2xl"></i>
                </div>
                <div class="text-4xl font-bold text-gray-800 mb-2">10,000+</div>
                <div class="text-gray-600">Animaux Tracés</div>
            </div>

            <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift fade-in" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 gradient-orange rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-qrcode text-white text-2xl"></i>
                </div>
                <div class="text-4xl font-bold text-gray-800 mb-2">8,500+</div>
                <div class="text-gray-600">QR Codes Générés</div>
            </div>

            <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift fade-in" style="animation-delay: 0.3s;">
                <div class="w-16 h-16 gradient-green rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-check-circle text-white text-2xl"></i>
                </div>
                <div class="text-4xl font-bold text-gray-800 mb-2">100%</div>
                <div class="text-gray-600">Traçabilité Garantie</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-orange text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center fade-in">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Prêt à Sécuriser Votre Cheptel?</h2>
        <p class="text-xl mb-8 text-orange-100">Rejoignez des centaines d'éleveurs qui font confiance à SahelTrace pour la traçabilité de leur bétail.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('register') }}" class="bg-white text-orange-600 px-8 py-4 rounded-xl text-lg font-bold hover:bg-gray-100 transition inline-flex items-center transform hover:scale-105 shadow-lg">
                <i class="fas fa-user-plus mr-2"></i>S'inscrire Maintenant
            </a>
            <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-xl text-lg font-bold hover:bg-white hover:text-orange-600 transition inline-flex items-center transform hover:scale-105">
                <i class="fas fa-phone mr-2"></i>Nous Contacter
            </a>
        </div>
    </div>
</section>
@endsection
