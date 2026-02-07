<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SahelTrace - Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        .gradient-green { background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%); }
        .gradient-orange { background: linear-gradient(135deg, #F97316 0%, #FB923C 100%); }
    </style>
</head>
<body class="bg-gradient-to-br from-green-50 to-green-100 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full">
        <!-- Logo -->
        <div class="text-center mb-8">
            <div class="flex justify-center mb-4">
                <img src="https://lh3.googleusercontent.com/d/1FC7HSbKK7jPDSj5huaVGqArUtxfmY5a_" alt="SahelTrace Logo" class="h-24 w-auto" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 200 200%27%3E%3Crect fill=%27%231B5E20%27 width=%27200%27 height=%27200%27 rx=%2720%27/%3E%3Ctext x=%27100%27 y=%27120%27 font-family=%27Arial%27 font-size=%2780%27 fill=%27white%27 text-anchor=%27middle%27%3EST%3C/text%3E%3C/svg%3E';">
            </div>
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Bienvenue sur SahelTrace</h1>
            <p class="text-gray-600">Connectez-vous à votre compte</p>
        </div>

        <!-- Login Form -->
        <div class="bg-white rounded-3xl shadow-2xl p-8">
            @if($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded">
                <i class="fas fa-exclamation-circle mr-2"></i>
                {{ $errors->first() }}
            </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" name="email" value="{{ old('email') }}" required class="w-full pl-12 pr-4 py-3 border-2 border-gray-300 rounded-xl focus:border-green-500 focus:outline-none transition" placeholder="votre@email.com">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2">Mot de passe</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" name="password" required class="w-full pl-12 pr-4 py-3 border-2 border-gray-300 rounded-xl focus:border-green-500 focus:outline-none transition" placeholder="••••••••">
                    </div>
                </div>

                <button type="submit" class="w-full gradient-green text-white py-4 rounded-xl font-bold hover:opacity-90 transition transform hover:scale-105 shadow-lg">
                    <i class="fas fa-sign-in-alt mr-2"></i>Se Connecter
                </button>
            </form>

            <!-- Test Credentials -->
            <div class="mt-8 p-6 bg-blue-50 rounded-2xl border-2 border-blue-200">
                <h3 class="font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-key text-blue-600 mr-2"></i>
                    Comptes de Test
                </h3>
                <div class="space-y-3 text-sm">
                    <div class="bg-white p-3 rounded-lg">
                        <div class="font-bold text-blue-600 mb-1">👨‍💼 Administrateur</div>
                        <div class="text-gray-600">📧 admin@saheltrace.com</div>
                        <div class="text-gray-600">🔑 admin123</div>
                    </div>
                    <div class="bg-white p-3 rounded-lg">
                        <div class="font-bold text-green-600 mb-1">👨‍🌾 Éleveur</div>
                        <div class="text-gray-600">📧 breeder@saheltrace.com</div>
                        <div class="text-gray-600">🔑 breeder123</div>
                    </div>
                    <div class="bg-white p-3 rounded-lg">
                        <div class="font-bold text-orange-600 mb-1">👮 Vérificateur</div>
                        <div class="text-gray-600">📧 verifier@saheltrace.com</div>
                        <div class="text-gray-600">🔑 verifier123</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Links -->
        <div class="text-center mt-6">
            <a href="/" class="text-green-600 hover:text-green-700 font-bold">
                <i class="fas fa-arrow-left mr-2"></i>Retour à l'accueil
            </a>
        </div>
    </div>
</body>
</html>
