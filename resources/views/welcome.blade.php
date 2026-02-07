@extends('layouts.app')

@section('content')
<!-- Hero Section with Background and People Images -->
<section class="relative py-32 overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-green-900/95 to-green-700/90 z-10"></div>
        <div class="w-full h-full bg-cover bg-center" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 1200 800%22%3E%3Cdefs%3E%3ClinearGradient id=%22a%22 x1=%220%25%22 y1=%220%25%22 x2=%22100%25%22 y2=%22100%25%22%3E%3Cstop offset=%220%25%22 style=%22stop-color:%231B5E20%22/%3E%3Cstop offset=%22100%25%22 style=%22stop-color:%232E7D32%22/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill=%22url(%23a)%22 width=%221200%22 height=%22800%22/%3E%3Cg fill=%22%23ffffff%22 opacity=%220.03%22%3E%3Ccircle cx=%22100%22 cy=%22100%22 r=%2250%22/%3E%3Ccircle cx=%22300%22 cy=%22200%22 r=%2270%22/%3E%3Ccircle cx=%22500%22 cy=%22150%22 r=%2260%22/%3E%3Ccircle cx=%22700%22 cy=%22250%22 r=%2280%22/%3E%3Ccircle cx=%22900%22 cy=%22180%22 r=%2265%22/%3E%3Ccircle cx=%221100%22 cy=%22220%22 r=%2275%22/%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="text-white slide-in-left">
                <div class="inline-block bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold mb-4 animate-pulse">
                    <i class="fas fa-star mr-2"></i>Solution N°1 en Afrique
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                    Traçabilité Moderne du Bétail
                </h1>
                <p class="text-xl mb-8 text-green-100">
                    Solution complète pour tous types de bétail: bovins, ovins, caprins. Sécurisez votre cheptel avec des QR codes uniques et accédez instantanément à l'historique complet de santé.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('register') }}" class="gradient-orange text-white px-8 py-4 rounded-xl text-lg font-bold hover:opacity-90 transition inline-flex items-center transform hover:scale-105 shadow-2xl">
                        <i class="fas fa-user-plus mr-2"></i>S'inscrire Gratuitement
                    </a>
                    <a href="{{ route('admin.login') }}" class="bg-white text-green-700 px-8 py-4 rounded-xl text-lg font-bold hover:bg-gray-100 transition inline-flex items-center transform hover:scale-105 shadow-2xl">
                        <i class="fas fa-sign-in-alt mr-2"></i>Se Connecter
                    </a>
                </div>
                
                <!-- Trust Indicators -->
                <div class="mt-12 flex items-center space-x-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold">500+</div>
                        <div class="text-sm text-green-200">Éleveurs</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold">10K+</div>
                        <div class="text-sm text-green-200">Animaux</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold">100%</div>
                        <div class="text-sm text-green-200">Sécurisé</div>
                    </div>
                </div>
            </div>
            
            <div class="relative slide-in-right">
                <div class="relative">
                    <!-- Main Image Card with People -->
                    <div class="bg-white rounded-3xl shadow-2xl p-6 transform hover:scale-105 transition duration-300">
                        <div class="relative overflow-hidden rounded-2xl">
                            <!-- Farmer with Livestock Illustration -->
                            <div class="w-full h-96 bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center p-6">
                                <div class="text-center relative">
                                    <!-- Farmer illustration -->
                                    <div class="mb-6">
                                        <div class="w-32 h-32 mx-auto bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center mb-4 shadow-lg">
                                            <i class="fas fa-user text-white text-6xl"></i>
                                        </div>
                                        <div class="bg-white px-4 py-2 rounded-full inline-block shadow-md">
                                            <span class="font-bold text-green-700">👨‍🌾 Amadou - Éleveur</span>
                                        </div>
                                    </div>
                                    
                                    <!-- Livestock icons -->
                                    <div class="flex justify-center items-center space-x-4 mb-4">
                                        <i class="fas fa-cow text-green-700 text-5xl animate-bounce" style="animation-duration: 2s;"></i>
                                        <i class="fas fa-horse text-green-600 text-4xl animate-bounce" style="animation-duration: 2.5s; animation-delay: 0.3s;"></i>
                                        <i class="fas fa-sheep text-green-600 text-4xl animate-bounce" style="animation-duration: 2.2s; animation-delay: 0.6s;"></i>
                                    </div>
                                    <p class="text-green-800 font-bold text-lg">Tous Types de Bétail</p>
                                </div>
                            </div>
                            
                            <!-- Happy Customer Badge -->
                            <div class="absolute -bottom-4 -left-4 bg-white rounded-xl shadow-lg p-3 animate-pulse">
                                <div class="flex items-center space-x-2">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center">
                                        <i class="fas fa-user text-white"></i>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-bold text-gray-800">Fatou S.</div>
                                        <div class="text-gray-600 text-xs">⭐⭐⭐⭐⭐</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating QR Code Badge -->
                    <div class="absolute -bottom-6 -right-6 bg-orange-500 text-white p-6 rounded-2xl shadow-2xl pulse-slow">
                        <i class="fas fa-qrcode text-5xl mb-2"></i>
                        <p class="font-bold text-lg">QR Unique</p>
                    </div>
                    
                    <!-- Floating Stats -->
                    <div class="absolute -top-6 -right-6 bg-white rounded-2xl shadow-xl p-4 animate-bounce" style="animation-duration: 3s;">
                        <div class="text-center">
                            <i class="fas fa-check-circle text-green-600 text-3xl mb-2"></i>
                            <div class="font-bold text-gray-800">Vérifié</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section with Real People -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Ils Nous Font Confiance</h2>
            <p class="text-xl text-gray-600">Des éleveurs satisfaits partout en Afrique</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in">
                <div class="flex items-center mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-700 rounded-full flex items-center justify-center text-white mr-4 shadow-lg">
                        <div class="text-center">
                            <i class="fas fa-user text-3xl"></i>
                        </div>
                    </div>
                    <div>
                        <div class="font-bold text-lg">Amadou Diallo</div>
                        <div class="text-gray-600">👨‍🌾 Éleveur - Dakar</div>
                        <div class="text-yellow-500 text-lg">★★★★★</div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"SahelTrace a révolutionné ma façon de gérer mon cheptel. Je peux suivre chaque animal facilement avec mon téléphone!"</p>
                <div class="mt-4 flex items-center text-sm text-gray-500">
                    <i class="fas fa-cow mr-2 text-green-600"></i>
                    <span>125 animaux tracés</span>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in" style="animation-delay: 0.2s;">
                <div class="flex items-center mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-700 rounded-full flex items-center justify-center text-white mr-4 shadow-lg">
                        <div class="text-center">
                            <i class="fas fa-user text-3xl"></i>
                        </div>
                    </div>
                    <div>
                        <div class="font-bold text-lg">Fatou Sow</div>
                        <div class="text-gray-600">👩‍🌾 Éleveuse - Thiès</div>
                        <div class="text-yellow-500 text-lg">★★★★★</div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Excellent service! Les QR codes sont très pratiques. Mes clients sont rassurés de la traçabilité de mes animaux."</p>
                <div class="mt-4 flex items-center text-sm text-gray-500">
                    <i class="fas fa-sheep mr-2 text-orange-600"></i>
                    <span>87 animaux tracés</span>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in" style="animation-delay: 0.4s;">
                <div class="flex items-center mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center text-white mr-4 shadow-lg">
                        <div class="text-center">
                            <i class="fas fa-user-md text-3xl"></i>
                        </div>
                    </div>
                    <div>
                        <div class="font-bold text-lg">Dr. Mamadou Ba</div>
                        <div class="text-gray-600">🩺 Vétérinaire - Kaolack</div>
                        <div class="text-yellow-500 text-lg">★★★★★</div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Un outil indispensable pour la traçabilité sanitaire. Je peux accéder à l'historique complet en un scan!"</p>
                <div class="mt-4 flex items-center text-sm text-gray-500">
                    <i class="fas fa-notes-medical mr-2 text-blue-600"></i>
                    <span>350+ consultations</span>
                </div>
            </div>
        </div>

        <!-- Additional Row with Photos -->
        <div class="grid md:grid-cols-2 gap-8 mt-12">
            <div class="bg-gradient-to-br from-green-500 to-green-700 rounded-2xl p-8 text-white hover-lift fade-in" style="animation-delay: 0.6s;">
                <div class="flex items-center mb-4">
                    <div class="flex -space-x-4 mr-4">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center border-4 border-green-700">
                            <i class="fas fa-user text-green-600"></i>
                        </div>
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center border-4 border-green-700">
                            <i class="fas fa-user text-green-600"></i>
                        </div>
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center border-4 border-green-700">
                            <i class="fas fa-user text-green-600"></i>
                        </div>
                    </div>
                    <div>
                        <div class="font-bold text-xl">500+ Éleveurs</div>
                        <div class="text-green-100 text-sm">Rejoignez la communauté</div>
                    </div>
                </div>
                <p class="text-green-50">Une communauté grandissante d'éleveurs qui font confiance à SahelTrace pour la gestion et la traçabilité de leur bétail.</p>
            </div>

            <div class="bg-gradient-to-br from-orange-500 to-orange-700 rounded-2xl p-8 text-white hover-lift fade-in" style="animation-delay: 0.8s;">
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mr-4 shadow-lg">
                        <i class="fas fa-headset text-orange-600 text-2xl"></i>
                    </div>
                    <div>
                        <div class="font-bold text-xl">Support 24/7</div>
                        <div class="text-orange-100 text-sm">Toujours là pour vous</div>
                    </div>
                </div>
                <p class="text-orange-50">Notre équipe d'experts est disponible 24h/24 et 7j/7 pour vous accompagner dans l'utilisation de la plateforme.</p>
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
                    <div class="w-24 h-24 gradient-green rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg transform hover:scale-110 transition">
                        <span class="text-4xl font-bold text-white">1</span>
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center mb-4 hover-lift">
                        <div class="text-center">
                            <i class="fas fa-user-plus text-blue-600 text-6xl mb-2"></i>
                            <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mx-auto mt-3">
                                <i class="fas fa-user text-white text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-gray-800">Inscription</h3>
                <p class="text-gray-600">Créez votre compte gratuitement en quelques minutes</p>
            </div>

            <div class="text-center fade-in" style="animation-delay: 0.2s;">
                <div class="relative mb-8">
                    <div class="w-24 h-24 gradient-brown rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg transform hover:scale-110 transition">
                        <span class="text-4xl font-bold text-white">2</span>
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center mb-4 hover-lift">
                        <div class="text-center">
                            <i class="fas fa-clipboard-list text-green-600 text-6xl mb-2"></i>
                            <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mx-auto mt-3">
                                <i class="fas fa-cow text-white text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-gray-800">Enregistrement</h3>
                <p class="text-gray-600">Ajoutez vos animaux avec toutes leurs informations</p>
            </div>

            <div class="text-center fade-in" style="animation-delay: 0.4s;">
                <div class="relative mb-8">
                    <div class="w-24 h-24 gradient-orange rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg transform hover:scale-110 transition">
                        <span class="text-4xl font-bold text-white">3</span>
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl flex items-center justify-center mb-4 hover-lift">
                        <div class="text-center">
                            <i class="fas fa-money-bill-wave text-orange-600 text-6xl mb-2"></i>
                            <div class="w-12 h-12 bg-orange-600 rounded-full flex items-center justify-center mx-auto mt-3">
                                <i class="fab fa-whatsapp text-white text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-gray-800">Paiement</h3>
                <p class="text-gray-600">Paiement simple via WhatsApp ou Mobile Money</p>
            </div>

            <div class="text-center fade-in" style="animation-delay: 0.6s;">
                <div class="relative mb-8">
                    <div class="w-24 h-24 bg-gradient-to-br from-purple-600 to-purple-800 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg transform hover:scale-110 transition">
                        <span class="text-4xl font-bold text-white">4</span>
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl flex items-center justify-center mb-4 hover-lift">
                        <div class="text-center">
                            <i class="fas fa-qrcode text-purple-600 text-6xl mb-2"></i>
                            <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center mx-auto mt-3">
                                <i class="fas fa-check text-white text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-gray-800">QR Code</h3>
                <p class="text-gray-600">Recevez votre QR code unique immédiatement</p>
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
        <p class="text-xl mb-8 text-orange-100">Rejoignez des centaines d'éleveurs qui font confiance à SahelTrace</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('register') }}" class="bg-white text-orange-600 px-8 py-4 rounded-xl text-lg font-bold hover:bg-gray-100 transition inline-flex items-center transform hover:scale-105 shadow-lg">
                <i class="fas fa-user-plus mr-2"></i>S'inscrire Maintenant
            </a>
            <a href="{{ route('services') }}" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-xl text-lg font-bold hover:bg-white hover:text-orange-600 transition inline-flex items-center transform hover:scale-105">
                <i class="fas fa-concierge-bell mr-2"></i>Voir Nos Services
            </a>
        </div>
    </div>
</section>
@endsection
