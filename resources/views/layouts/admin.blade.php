<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - SahelTrace</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-green { background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%); }
        .gradient-brown { background: linear-gradient(135deg, #6D4C41 0%, #8D6E63 100%); }
        .gradient-orange { background: linear-gradient(135deg, #F97316 0%, #FB923C 100%); }
        .sidebar-link { transition: all 0.3s ease; }
        .sidebar-link:hover { background: rgba(255, 255, 255, 0.1); padding-left: 1.5rem; }
        .sidebar-link.active { background: rgba(255, 255, 255, 0.15); border-left: 4px solid #F97316; }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 gradient-green text-white flex-shrink-0 hidden md:block">
            <div class="p-6">
                <div class="flex items-center space-x-3 mb-8">
                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
                        <i class="fas fa-cow text-green-700 text-xl"></i>
                    </div>
                    <span class="text-xl font-bold">SahelTrace</span>
                </div>

                <div class="mb-6 p-4 bg-white bg-opacity-10 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-green-700 text-xl"></i>
                        </div>
                        <div>
                            <p class="font-bold">{{ session('user_name') }}</p>
                            <p class="text-xs text-green-200">{{ ucfirst(session('user_role')) }}</p>
                        </div>
                    </div>
                </div>

                <nav class="space-y-2">
                    @if(session('user_role') === 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded">
                            <i class="fas fa-chart-line w-5"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="{{ route('admin.users.index') }}" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded">
                            <i class="fas fa-users w-5"></i>
                            <span>Utilisateurs</span>
                        </a>
                        <a href="{{ route('admin.animals.index') }}" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded">
                            <i class="fas fa-cow w-5"></i>
                            <span>Animaux</span>
                        </a>
                        <a href="{{ route('admin.payments.index') }}" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded">
                            <i class="fas fa-money-bill-wave w-5"></i>
                            <span>Paiements</span>
                        </a>
                    @elseif(session('user_role') === 'breeder')
                        <a href="{{ route('breeder.dashboard') }}" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded">
                            <i class="fas fa-chart-line w-5"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="{{ route('breeder.animals.index') }}" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded">
                            <i class="fas fa-cow w-5"></i>
                            <span>Mes Animaux</span>
                        </a>
                        <a href="{{ route('breeder.payments.index') }}" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded">
                            <i class="fas fa-money-bill-wave w-5"></i>
                            <span>Mes Paiements</span>
                        </a>
                    @elseif(session('user_role') === 'verifier')
                        <a href="{{ route('verifier.dashboard') }}" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded">
                            <i class="fas fa-chart-line w-5"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="{{ route('verifier.scan') }}" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded">
                            <i class="fas fa-qrcode w-5"></i>
                            <span>Scanner QR Code</span>
                        </a>
                    @endif
                </nav>
            </div>

            <div class="absolute bottom-0 w-64 p-6">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center space-x-2 px-4 py-3 bg-red-600 hover:bg-red-700 rounded-lg transition">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Déconnexion</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Bar -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-4">
                    <h1 class="text-2xl font-bold text-gray-800">@yield('page-title', 'Dashboard')</h1>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600">{{ now()->format('d/m/Y') }}</span>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6">
                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded" role="alert">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle mr-3"></i>
                            <p>{{ session('success') }}</p>
                        </div>
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded" role="alert">
                        <div class="flex items-center">
                            <i class="fas fa-exclamation-circle mr-3"></i>
                            <p>{{ session('error') }}</p>
                        </div>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
