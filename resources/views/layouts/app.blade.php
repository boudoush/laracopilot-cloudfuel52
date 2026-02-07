<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SahelTrace - Traçabilité du Bétail</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        .gradient-green { background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%); }
        .gradient-brown { background: linear-gradient(135deg, #6D4C41 0%, #8D6E63 100%); }
        .gradient-orange { background: linear-gradient(135deg, #F97316 0%, #FB923C 100%); }
        .gradient-navbar { background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 50%, #388E3C 100%); }
        .hover-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .hover-lift:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.2); }
        .fade-in { animation: fadeIn 0.6s ease-in; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .slide-in-left { animation: slideInLeft 0.6s ease-out; }
        @keyframes slideInLeft { from { opacity: 0; transform: translateX(-50px); } to { opacity: 1; transform: translateX(0); } }
        .slide-in-right { animation: slideInRight 0.6s ease-out; }
        @keyframes slideInRight { from { opacity: 0; transform: translateX(50px); } to { opacity: 1; transform: translateX(0); } }
        .pulse-slow { animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite; }
        .rotate-slow { animation: rotate 20s linear infinite; }
        @keyframes rotate { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
        #cookie-banner { position: fixed; bottom: 0; left: 0; right: 0; z-index: 9999; transform: translateY(100%); transition: transform 0.4s ease; }
        #cookie-banner.show { transform: translateY(0); }
        .nav-link { position: relative; transition: all 0.3s ease; }
        .nav-link::after { content: ''; position: absolute; bottom: -2px; left: 0; width: 0; height: 2px; background: #F97316; transition: width 0.3s ease; }
        .nav-link:hover::after { width: 100%; }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="gradient-navbar shadow-2xl sticky top-0 z-50 fade-in">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center slide-in-left">
                    <a href="/" class="flex items-center space-x-3 group">
                        <img src="https://lh3.googleusercontent.com/d/1FC7HSbKK7jPDSj5huaVGqArUtxfmY5a_" alt="SahelTrace Logo" class="h-12 w-auto transform group-hover:scale-110 transition duration-300" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 100 100%27%3E%3Crect fill=%27%23ffffff%27 width=%27100%27 height=%27100%27 rx=%2710%27/%3E%3Ctext x=%2750%27 y=%2760%27 font-family=%27Arial%27 font-size=%2740%27 fill=%27%231B5E20%27 text-anchor=%27middle%27 font-weight=%27bold%27%3EST%3C/text%3E%3C/svg%3E';">
                        <span class="text-2xl font-bold text-white">SahelTrace</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8 slide-in-right">
                    <a href="/" class="nav-link text-white hover:text-orange-300 font-medium transition"><i class="fas fa-home mr-2"></i>Accueil</a>
                    <a href="{{ route('services') }}" class="nav-link text-white hover:text-orange-300 font-medium transition"><i class="fas fa-concierge-bell mr-2"></i>Services</a>
                    <a href="{{ route('about') }}" class="nav-link text-white hover:text-orange-300 font-medium transition"><i class="fas fa-info-circle mr-2"></i>À Propos</a>
                    <a href="{{ route('contact') }}" class="nav-link text-white hover:text-orange-300 font-medium transition"><i class="fas fa-envelope mr-2"></i>Contact</a>
                    <a href="{{ route('admin.login') }}" class="gradient-orange text-white px-6 py-2.5 rounded-xl hover:opacity-90 transition font-medium transform hover:scale-105 shadow-lg">
                        <i class="fas fa-sign-in-alt mr-2"></i>Connexion
                    </a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-white hover:text-orange-300 transition">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-green-800 border-t border-green-700">
            <div class="px-4 py-4 space-y-3">
                <a href="/" class="block text-white hover:text-orange-300 font-medium py-2"><i class="fas fa-home mr-2"></i>Accueil</a>
                <a href="{{ route('services') }}" class="block text-white hover:text-orange-300 font-medium py-2"><i class="fas fa-concierge-bell mr-2"></i>Services</a>
                <a href="{{ route('about') }}" class="block text-white hover:text-orange-300 font-medium py-2"><i class="fas fa-info-circle mr-2"></i>À Propos</a>
                <a href="{{ route('contact') }}" class="block text-white hover:text-orange-300 font-medium py-2"><i class="fas fa-envelope mr-2"></i>Contact</a>
                <a href="{{ route('admin.login') }}" class="block gradient-orange text-white px-6 py-2.5 rounded-xl text-center"><i class="fas fa-sign-in-alt mr-2"></i>Connexion</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="fade-in">
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="https://lh3.googleusercontent.com/d/1FC7HSbKK7jPDSj5huaVGqArUtxfmY5a_" alt="SahelTrace" class="h-10 w-auto" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 100 100%27%3E%3Crect fill=%27%232E7D32%27 width=%27100%27 height=%27100%27 rx=%2710%27/%3E%3Ctext x=%2750%27 y=%2760%27 font-family=%27Arial%27 font-size=%2740%27 fill=%27white%27 text-anchor=%27middle%27 font-weight=%27bold%27%3EST%3C/text%3E%3C/svg%3E';">
                        <h3 class="text-xl font-bold">SahelTrace</h3>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Plateforme moderne de traçabilité du bétail. Garantissez l'authenticité et la qualité de votre cheptel.
                    </p>
                </div>

                <div class="fade-in">
                    <h4 class="font-bold text-lg mb-4"><i class="fas fa-link mr-2 text-orange-500"></i>Liens Rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-orange-500 transition transform hover:translate-x-1 inline-block"><i class="fas fa-chevron-right mr-2 text-xs"></i>Accueil</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-orange-500 transition transform hover:translate-x-1 inline-block"><i class="fas fa-chevron-right mr-2 text-xs"></i>Services</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-orange-500 transition transform hover:translate-x-1 inline-block"><i class="fas fa-chevron-right mr-2 text-xs"></i>À Propos</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-orange-500 transition transform hover:translate-x-1 inline-block"><i class="fas fa-chevron-right mr-2 text-xs"></i>Contact</a></li>
                        <li><a href="{{ route('admin.login') }}" class="text-gray-400 hover:text-orange-500 transition transform hover:translate-x-1 inline-block"><i class="fas fa-chevron-right mr-2 text-xs"></i>Espace Client</a></li>
                    </ul>
                </div>

                <div class="fade-in">
                    <h4 class="font-bold text-lg mb-4"><i class="fas fa-gavel mr-2 text-orange-500"></i>Informations Légales</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('privacy') }}" class="text-gray-400 hover:text-orange-500 transition transform hover:translate-x-1 inline-block"><i class="fas fa-shield-alt mr-2 text-xs"></i>Confidentialité</a></li>
                        <li><a href="{{ route('terms') }}" class="text-gray-400 hover:text-orange-500 transition transform hover:translate-x-1 inline-block"><i class="fas fa-file-contract mr-2 text-xs"></i>Conditions</a></li>
                        <li><a href="{{ route('legal') }}" class="text-gray-400 hover:text-orange-500 transition transform hover:translate-x-1 inline-block"><i class="fas fa-balance-scale mr-2 text-xs"></i>Mentions Légales</a></li>
                    </ul>
                </div>

                <div class="fade-in">
                    <h4 class="font-bold text-lg mb-4"><i class="fas fa-phone mr-2 text-orange-500"></i>Nous Contacter</h4>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center space-x-2 text-gray-400"><i class="fas fa-phone text-orange-500"></i><span>+221 77 123 45 67</span></li>
                        <li class="flex items-center space-x-2 text-gray-400"><i class="fas fa-envelope text-orange-500"></i><span>contact@saheltrace.com</span></li>
                        <li class="flex items-center space-x-2 text-gray-400"><i class="fas fa-map-marker-alt text-orange-500"></i><span>Dakar, Sénégal</span></li>
                    </ul>
                    <div class="flex space-x-3">
                        <a href="https://facebook.com" target="_blank" class="w-10 h-10 bg-gray-800 hover:bg-blue-600 rounded-full flex items-center justify-center transition transform hover:scale-110">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="w-10 h-10 bg-gray-800 hover:bg-blue-400 rounded-full flex items-center justify-center transition transform hover:scale-110">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" class="w-10 h-10 bg-gray-800 hover:bg-pink-600 rounded-full flex items-center justify-center transition transform hover:scale-110">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://linkedin.com" target="_blank" class="w-10 h-10 bg-gray-800 hover:bg-blue-700 rounded-full flex items-center justify-center transition transform hover:scale-110">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://wa.me/221771234567" target="_blank" class="w-10 h-10 bg-gray-800 hover:bg-green-500 rounded-full flex items-center justify-center transition transform hover:scale-110">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-6 text-center">
                <p class="text-gray-400 text-sm">&copy; {{ date('Y') }} SahelTrace. Tous droits réservés.</p>
                <p class="text-gray-500 text-sm mt-2">Made with <i class="fas fa-heart text-red-500 pulse-slow"></i> by <a href="https://laracopilot.com/" target="_blank" class="text-orange-500 hover:underline">LaraCopilot</a></p>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent Banner -->
    <div id="cookie-banner" class="bg-gray-900 text-white shadow-2xl">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-start space-x-4">
                    <i class="fas fa-cookie-bite text-4xl text-orange-500"></i>
                    <div>
                        <h3 class="font-bold text-lg mb-1">🍪 Nous utilisons des cookies</h3>
                        <p class="text-gray-300 text-sm">Nous utilisons des cookies pour améliorer votre expérience. En continuant, vous acceptez notre politique de cookies.</p>
                    </div>
                </div>
                <div class="flex space-x-3">
                    <button onclick="acceptCookies()" class="gradient-green px-6 py-2.5 rounded-lg font-medium hover:opacity-90 transition">
                        <i class="fas fa-check mr-2"></i>Accepter
                    </button>
                    <button onclick="closeCookieBanner()" class="bg-gray-700 px-6 py-2.5 rounded-lg font-medium hover:bg-gray-600 transition">
                        <i class="fas fa-times mr-2"></i>Fermer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Cookie consent
        window.addEventListener('load', function() {
            if (!localStorage.getItem('cookieConsent')) {
                setTimeout(function() {
                    document.getElementById('cookie-banner').classList.add('show');
                }, 1000);
            }
        });

        function acceptCookies() {
            localStorage.setItem('cookieConsent', 'accepted');
            document.getElementById('cookie-banner').classList.remove('show');
        }

        function closeCookieBanner() {
            document.getElementById('cookie-banner').classList.remove('show');
        }
    </script>
</body>
</html>
