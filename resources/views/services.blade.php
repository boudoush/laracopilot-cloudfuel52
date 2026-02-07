@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="gradient-green text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold mb-4">🎯 Nos Services</h1>
        <p class="text-xl text-green-100">Solutions complètes pour la traçabilité de votre bétail</p>
    </div>
</section>

<!-- Main Services Grid -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Service 1: Registration -->
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover-lift fade-in">
                <div class="gradient-green p-8 text-white text-center">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clipboard-list text-5xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold">Enregistrement</h3>
                </div>
                <div class="p-8">
                    <p class="text-gray-600 mb-6">Enregistrez facilement tous vos animaux avec leurs informations complètes</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Fiche complète par animal (espèce, race, âge, poids)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Upload de photos et documents</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Carnet de santé numérique</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Historique des soins et traitements</span>
                        </li>
                    </ul>
                    <div class="bg-green-50 rounded-xl p-4">
                        <div class="font-bold text-green-700 mb-2">Tarif: 5,000 FCFA/animal</div>
                        <p class="text-sm text-gray-600">Enregistrement à vie</p>
                    </div>
                </div>
            </div>

            <!-- Service 2: QR Codes -->
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover-lift fade-in" style="animation-delay: 0.2s;">
                <div class="gradient-orange p-8 text-white text-center">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-qrcode text-5xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold">QR Codes Uniques</h3>
                </div>
                <div class="p-8">
                    <p class="text-gray-600 mb-6">Générez des QR codes uniques et sécurisés pour chaque animal</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-orange-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">QR code unique inviolable</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-orange-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Téléchargement PDF haute qualité</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-orange-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Export en lot (fichier ZIP)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-orange-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Impression sur étiquettes</span>
                        </li>
                    </ul>
                    <div class="bg-orange-50 rounded-xl p-4">
                        <div class="font-bold text-orange-700 mb-2">Inclus dans l'enregistrement</div>
                        <p class="text-sm text-gray-600">Génération illimitée</p>
                    </div>
                </div>
            </div>

            <!-- Service 3: Verification -->
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover-lift fade-in" style="animation-delay: 0.4s;">
                <div class="bg-gradient-to-br from-blue-600 to-blue-800 p-8 text-white text-center">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-5xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold">Vérification Instantanée</h3>
                </div>
                <div class="p-8">
                    <p class="text-gray-600 mb-6">Vérifiez l'authenticité de n'importe quel animal en quelques secondes</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Scan avec smartphone</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Accès instantané aux informations</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Historique complet de santé</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Validation de propriétaire</span>
                        </li>
                    </ul>
                    <div class="bg-blue-50 rounded-xl p-4">
                        <div class="font-bold text-blue-700 mb-2">Gratuit</div>
                        <p class="text-sm text-gray-600">Vérifications illimitées</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Features -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Fonctionnalités Avancées</h2>
            <p class="text-xl text-gray-600">Des outils professionnels pour une gestion optimale</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Health Management -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-3xl p-8 hover-lift">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 gradient-green rounded-2xl flex items-center justify-center mr-4">
                        <i class="fas fa-notes-medical text-white text-3xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Gestion Sanitaire</h3>
                        <p class="text-green-700">Carnet de santé numérique</p>
                    </div>
                </div>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-syringe text-green-600 mr-3"></i>
                        Historique des vaccinations
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-pills text-green-600 mr-3"></i>
                        Suivi des traitements
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-calendar-alt text-green-600 mr-3"></i>
                        Rappels automatiques
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-stethoscope text-green-600 mr-3"></i>
                        Consultations vétérinaires
                    </li>
                </ul>
            </div>

            <!-- Document Management -->
            <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-3xl p-8 hover-lift">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 gradient-orange rounded-2xl flex items-center justify-center mr-4">
                        <i class="fas fa-folder-open text-white text-3xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Gestion Documentaire</h3>
                        <p class="text-orange-700">Tous vos documents centralisés</p>
                    </div>
                </div>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-camera text-orange-600 mr-3"></i>
                        Photos haute résolution
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-file-pdf text-orange-600 mr-3"></i>
                        Certificats et attestations
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-id-card text-orange-600 mr-3"></i>
                        Documents d'identification
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-cloud text-orange-600 mr-3"></i>
                        Stockage sécurisé cloud
                    </li>
                </ul>
            </div>

            <!-- Analytics -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-3xl p-8 hover-lift">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl flex items-center justify-center mr-4">
                        <i class="fas fa-chart-line text-white text-3xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Statistiques & Rapports</h3>
                        <p class="text-blue-700">Analyses détaillées de votre cheptel</p>
                    </div>
                </div>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-chart-pie text-blue-600 mr-3"></i>
                        Répartition par espèce
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-weight text-blue-600 mr-3"></i>
                        Suivi de croissance
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-file-export text-blue-600 mr-3"></i>
                        Export Excel/PDF
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-chart-bar text-blue-600 mr-3"></i>
                        Tableaux de bord personnalisés
                    </li>
                </ul>
            </div>

            <!-- Support -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-3xl p-8 hover-lift">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-purple-800 rounded-2xl flex items-center justify-center mr-4">
                        <i class="fas fa-headset text-white text-3xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Support Premium</h3>
                        <p class="text-purple-700">Assistance 24/7</p>
                    </div>
                </div>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-700">
                        <i class="fab fa-whatsapp text-purple-600 mr-3"></i>
                        Support WhatsApp direct
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-phone text-purple-600 mr-3"></i>
                        Hotline téléphonique
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-graduation-cap text-purple-600 mr-3"></i>
                        Formation incluse
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-user-tie text-purple-600 mr-3"></i>
                        Conseiller dédié
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Tarification Simple et Transparente</h2>
            <p class="text-xl text-gray-600">Un seul paiement, accès à vie</p>
        </div>

        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
            <div class="gradient-green p-8 text-white text-center">
                <div class="text-6xl font-bold mb-2">5,000 FCFA</div>
                <div class="text-2xl mb-2">par animal</div>
                <div class="text-green-100">Paiement unique - Accès à vie</div>
            </div>
            <div class="p-8">
                <div class="mb-8">
                    <h3 class="font-bold text-xl mb-4 text-gray-800">✅ Tout inclus:</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span class="text-gray-700">Enregistrement complet</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span class="text-gray-700">QR code unique</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span class="text-gray-700">Carnet de santé numérique</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span class="text-gray-700">Stockage illimité</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span class="text-gray-700">Mises à jour gratuites</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span class="text-gray-700">Support 24/7</span>
                        </div>
                    </div>
                </div>

                <div class="bg-green-50 rounded-2xl p-6 mb-6">
                    <h4 class="font-bold text-lg mb-3 text-green-800">💳 Modes de Paiement</h4>
                    <div class="space-y-2 text-gray-700">
                        <div class="flex items-center">
                            <i class="fab fa-whatsapp text-green-600 mr-3"></i>
                            <span>WhatsApp (+221 77 123 45 67)</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-mobile-alt text-orange-600 mr-3"></i>
                            <span>Mobile Money (Orange Money, Wave, Free Money)</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-money-bill-wave text-blue-600 mr-3"></i>
                            <span>Virement bancaire</span>
                        </div>
                    </div>
                </div>

                <a href="{{ route('register') }}" class="block gradient-green text-white text-center py-4 rounded-xl text-lg font-bold hover:opacity-90 transition transform hover:scale-105">
                    <i class="fas fa-rocket mr-2"></i>Commencer Maintenant
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-orange text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-6">Prêt à Moderniser Votre Élevage?</h2>
        <p class="text-xl mb-8 text-orange-100">Rejoignez des centaines d'éleveurs qui nous font confiance</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('register') }}" class="bg-white text-orange-600 px-8 py-4 rounded-xl text-lg font-bold hover:bg-gray-100 transition inline-flex items-center transform hover:scale-105">
                <i class="fas fa-user-plus mr-2"></i>S'inscrire Gratuitement
            </a>
            <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-xl text-lg font-bold hover:bg-white hover:text-orange-600 transition inline-flex items-center transform hover:scale-105">
                <i class="fas fa-envelope mr-2"></i>Nous Contacter
            </a>
        </div>
    </div>
</section>
@endsection
