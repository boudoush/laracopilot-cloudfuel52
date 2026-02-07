@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="gradient-green text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">À Propos de SahelTrace</h1>
        <p class="text-xl text-green-100 max-w-3xl mx-auto">
            Pionnier de la traçabilité numérique du bétail en Afrique de l'Ouest
        </p>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-800 mb-6">Notre Mission</h2>
                <p class="text-lg text-gray-600 mb-6">
                    SahelTrace a été créé pour répondre aux défis de traçabilité et d'authenticité dans l'élevage au Sahel. Notre mission est de fournir aux éleveurs, vérificateurs et acheteurs une plateforme moderne, sécurisée et facile d'utilisation pour garantir la qualité et l'origine du bétail.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    Nous croyons que la technologie peut transformer l'industrie de l'élevage en apportant transparence, confiance et efficacité à tous les acteurs de la chaîne de valeur.
                </p>
                <div class="flex space-x-4">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check-circle text-green-600 text-2xl"></i>
                        <span class="font-semibold">Traçabilité Complète</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check-circle text-green-600 text-2xl"></i>
                        <span class="font-semibold">100% Sécurisé</span>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1500595046743-cd271d694d30?w=800&h=600&fit=crop" alt="Élevage au Sahel" class="rounded-2xl shadow-2xl w-full h-96 object-cover">
                <div class="absolute -bottom-6 -left-6 bg-orange-500 text-white p-6 rounded-xl shadow-lg">
                    <div class="text-3xl font-bold">2024</div>
                    <div class="text-sm">Année de Lancement</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Nos Valeurs</h2>
            <p class="text-xl text-gray-600">Ce qui guide notre action au quotidien</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift">
                <div class="w-16 h-16 gradient-green rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Confiance</h3>
                <p class="text-gray-600">Nous établissons la confiance entre éleveurs, acheteurs et vérificateurs grâce à une traçabilité transparente et vérifiable.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift">
                <div class="w-16 h-16 gradient-brown rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-lightbulb text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Innovation</h3>
                <p class="text-gray-600">Nous adoptons les technologies modernes pour simplifier et moderniser la gestion du bétail au Sahel.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift">
                <div class="w-16 h-16 gradient-orange rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-hands-helping text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Accessibilité</h3>
                <p class="text-gray-600">Notre plateforme est simple, intuitive et accessible à tous les éleveurs, quelle que soit leur taille.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Notre Équipe</h2>
            <p class="text-xl text-gray-600">Des experts passionnés au service des éleveurs</p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center hover-lift">
                <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop" alt="Team member" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-1">Amadou Diallo</h3>
                <p class="text-gray-600 mb-2">Directeur Général</p>
                <div class="flex justify-center space-x-2">
                    <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <div class="text-center hover-lift">
                <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&h=200&fit=crop" alt="Team member" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-1">Fatou Sow</h3>
                <p class="text-gray-600 mb-2">Responsable Technique</p>
                <div class="flex justify-center space-x-2">
                    <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <div class="text-center hover-lift">
                <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop" alt="Team member" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-1">Mamadou Ba</h3>
                <p class="text-gray-600 mb-2">Chef Développement</p>
                <div class="flex justify-center space-x-2">
                    <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <div class="text-center hover-lift">
                <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=200&h=200&fit=crop" alt="Team member" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-1">Aïssatou Ndiaye</h3>
                <p class="text-gray-600 mb-2">Responsable Commercial</p>
                <div class="flex justify-center space-x-2">
                    <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Section -->
<section class="py-20 gradient-brown text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Notre Impact</h2>
            <p class="text-xl text-brown-100">Des résultats concrets pour nos utilisateurs</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white bg-opacity-10 rounded-2xl p-8">
                <i class="fas fa-chart-line text-4xl mb-4"></i>
                <h3 class="text-2xl font-bold mb-3">Croissance Continue</h3>
                <p class="text-brown-100">Plus de 500 nouveaux éleveurs rejoignent SahelTrace chaque mois, témoignant de la confiance croissante dans notre solution.</p>
            </div>

            <div class="bg-white bg-opacity-10 rounded-2xl p-8">
                <i class="fas fa-globe-africa text-4xl mb-4"></i>
                <h3 class="text-2xl font-bold mb-3">Expansion Régionale</h3>
                <p class="text-brown-100">Présents dans 5 pays du Sahel, nous travaillons à étendre notre couverture dans toute l'Afrique de l'Ouest.</p>
            </div>
        </div>
    </div>
</section>
@endsection
