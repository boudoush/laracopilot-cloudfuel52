<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SahelTrace - Espace Vérificateur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        .gradient-blue { background: linear-gradient(135deg, #1E40AF 0%, #3B82F6 100%); }
        .hover-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .hover-lift:hover { transform: translateY(-4px); box-shadow: 0 10px 30px rgba(0,0,0,0.15); }
        .fade-in { animation: fadeIn 0.5s ease-in; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- Sidebar -->
        <div class="fixed inset-y-0 left-0 w-64 gradient-blue text-white z-50">
            <div class="p-6">
                <div class="flex items-center space-x-3 mb-8">
                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
                        <i class="fas fa-shield-alt text-blue-700"></i>
                    </div>
                    <span class="text-xl font-bold">SahelTrace</span>
                </div>
                <nav class="space-y-2">
                    <a href="{{ route('verifier.dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-white hover:bg-opacity-10 transition">
                        <i class="fas fa-home"></i>
                        <span>Tableau de Bord</span>
                    </a>
                    <a href="{{ route('verifier.scan') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-white hover:bg-opacity-10 transition">
                        <i class="fas fa-qrcode"></i>
                        <span>Scanner QR Code</span>
                    </a>
                </nav>
            </div>
            <div class="absolute bottom-0 left-0 right-0 p-6">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-white hover:bg-opacity-10 transition">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Déconnexion</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="ml-64 p-8">
            @yield('content')
        </div>
    </div>
</body>
</html>
