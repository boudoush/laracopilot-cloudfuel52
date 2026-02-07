<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - SahelTrace</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        .gradient-green { background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%); }
        .gradient-orange { background: linear-gradient(135deg, #F97316 0%, #FB923C 100%); }
        .glass-effect { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); }
        .float-animation { animation: float 6s ease-in-out infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-20px); } }
        .fade-in { animation: fadeIn 0.8s ease-in; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .input-focus { transition: all 0.3s ease; }
        .input-focus:focus { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(27, 94, 32, 0.2); }
    </style>
</head>
<body class="gradient-green min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-10 left-10 w-64 h-64 bg-white opacity-5 rounded-full float-animation"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-white opacity-5 rounded-full float-animation" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/4 w-48 h-48 bg-orange-400 opacity-5 rounded-full float-animation" style="animation-delay: 4s;"></div>
    </div>

    <div class="max-w-6xl w-full relative z-10">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <!-- Left Side - Branding -->
            <div class="text-white text-center md:text-left fade-in">
                <div class="flex items-center justify-center md:justify-start space-x-4 mb-6">
                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-2xl transform hover:scale-110 transition duration-300">
                        <i class="fas fa-cow text-green-700 text-3xl"></i>
                    </div>
                    <h1 class="text-4xl font-bold">SahelTrace</h1>
                </div>
                <h2 class="text-3xl font-bold mb-4">Bienvenue sur votre plateforme de traçabilité</h2>
                <p class="text-xl text-green-100 mb-8">Connectez-vous pour gérer votre cheptel en toute sécurité</p>
                
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 bg-white bg-opacity-10 p-4 rounded-xl">
                        <i class="fas fa-qrcode text-3xl text-orange-400"></i>
                        <div class="text-left">
                            <h3 class="font-bold">QR Codes Uniques</h3>
                            <p class="text-sm text-green-100">Traçabilité instantanée</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 bg-white bg-opacity-10 p-4 rounded-xl">
                        <i class="fas fa-shield-alt text-3xl text-orange-400"></i>
                        <div class="text-left">
                            <h3 class="font-bold">100% Sécurisé</h3>
                            <p class="text-sm text-green-100">Vos données protégées</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Login Form -->
            <div class="glass-effect rounded-3xl shadow-2xl p-8 fade-in" style="animation-delay: 0.3s;">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Connexion</h2>
                    <p class="text-gray-600">Accédez à votre espace personnel</p>
                </div>

                @if($errors->any())
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg flex items-center animate-pulse">
                        <i class="fas fa-exclamation-circle mr-3 text-xl"></i>
                        <div>
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg flex items-center">
                        <i class="fas fa-check-circle mr-3 text-xl"></i>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                <form action="{{ route('admin.login') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">
                            <i class="fas fa-envelope mr-2 text-green-600"></i>Adresse Email
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}" required 
                               class="input-focus w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-green-500 focus:outline-none" 
                               placeholder="votre@email.com">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">
                            <i class="fas fa-lock mr-2 text-green-600"></i>Mot de Passe
                        </label>
                        <input type="password" name="password" required 
                               class="input-focus w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-green-500 focus:outline-none" 
                               placeholder="••••••••">
                        <p class="text-xs text-gray-500 mt-2">Pour les comptes enregistrés: utilisez n'importe quel mot de passe</p>
                    </div>

                    <button type="submit" class="w-full gradient-green text-white py-4 rounded-xl font-bold text-lg hover:opacity-90 transition transform hover:scale-105 shadow-lg">
                        <i class="fas fa-sign-in-alt mr-2"></i>Se Connecter
                    </button>
                </form>

                <div class="mt-8 p-6 bg-blue-50 rounded-xl border-l-4 border-blue-500">
                    <h3 class="font-bold text-gray-800 mb-3 flex items-center">
                        <i class="fas fa-info-circle mr-2 text-blue-500"></i>
                        Identifiants de Test
                    </h3>
                    <div class="space-y-2 text-sm">
                        <div class="bg-white p-3 rounded-lg">
                            <p class="font-semibold text-gray-700"><i class="fas fa-user-shield mr-2 text-green-600"></i>Admin</p>
                            <p class="text-gray-600">📧 <code class="bg-gray-100 px-2 py-1 rounded text-xs">admin@saheltrace.com</code></p>
                            <p class="text-gray-600">🔒 <code class="bg-gray-100 px-2 py-1 rounded text-xs">admin123</code></p>
                        </div>
                        <div class="bg-white p-3 rounded-lg">
                            <p class="font-semibold text-gray-700"><i class="fas fa-user mr-2 text-orange-600"></i>Éleveur</p>
                            <p class="text-gray-600">📧 <code class="bg-gray-100 px-2 py-1 rounded text-xs">eleveur@saheltrace.com</code></p>
                            <p class="text-gray-600">🔒 <code class="bg-gray-100 px-2 py-1 rounded text-xs">eleveur123</code></p>
                        </div>
                        <div class="bg-white p-3 rounded-lg">
                            <p class="font-semibold text-gray-700"><i class="fas fa-check-circle mr-2 text-blue-600"></i>Vérificateur</p>
                            <p class="text-gray-600">📧 <code class="bg-gray-100 px-2 py-1 rounded text-xs">verificateur@saheltrace.com</code></p>
                            <p class="text-gray-600">🔒 <code class="bg-gray-100 px-2 py-1 rounded text-xs">verif123</code></p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 text-center">
                    <p class="text-gray-600 mb-3">Pas encore de compte?</p>
                    <a href="{{ route('register') }}" class="text-green-600 hover:text-green-700 font-bold">
                        <i class="fas fa-user-plus mr-2"></i>S'inscrire Gratuitement
                    </a>
                </div>

                <div class="mt-6 text-center">
                    <a href="/" class="text-gray-600 hover:text-green-600 transition">
                        <i class="fas fa-arrow-left mr-2"></i>Retour à l'accueil
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
