@extends('layouts.app')

@section('content')
<section class="gradient-green text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold">Politique de Confidentialité</h1>
        <p class="text-xl text-green-100 mt-4">Dernière mise à jour: {{ date('d/m/Y') }}</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">1. Collecte des Données</h2>
            <p class="text-gray-600 mb-6">SahelTrace collecte et traite les données personnelles suivantes:</p>
            <ul class="list-disc pl-6 text-gray-600 mb-6">
                <li>Informations d'identification (nom, email, téléphone)</li>
                <li>Données relatives au bétail (race, âge, poids, santé)</li>
                <li>Documents et fichiers téléversés</li>
                <li>Informations de paiement</li>
            </ul>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">2. Utilisation des Données</h2>
            <p class="text-gray-600 mb-6">Vos données sont utilisées pour:</p>
            <ul class="list-disc pl-6 text-gray-600 mb-6">
                <li>Assurer le service de traçabilité du bétail</li>
                <li>Générer et gérer les QR codes</li>
                <li>Traiter les paiements</li>
                <li>Améliorer nos services</li>
                <li>Communiquer avec vous</li>
            </ul>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">3. Protection des Données</h2>
            <p class="text-gray-600 mb-6">Nous mettons en œuvre des mesures de sécurité appropriées pour protéger vos données contre tout accès non autorisé, modification, divulgation ou destruction.</p>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">4. Partage des Données</h2>
            <p class="text-gray-600 mb-6">Vos données ne sont partagées qu'avec les vérificateurs autorisés via le système de QR code. Nous ne vendons jamais vos données à des tiers.</p>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">5. Vos Droits</h2>
            <p class="text-gray-600 mb-6">Vous disposez des droits suivants:</p>
            <ul class="list-disc pl-6 text-gray-600 mb-6">
                <li>Droit d'accès à vos données</li>
                <li>Droit de rectification</li>
                <li>Droit de suppression</li>
                <li>Droit d'opposition au traitement</li>
                <li>Droit à la portabilité des données</li>
            </ul>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">6. Contact</h2>
            <p class="text-gray-600">Pour toute question concernant cette politique, contactez-nous à: <a href="mailto:privacy@saheltrace.com" class="text-green-600 hover:underline">privacy@saheltrace.com</a></p>
        </div>
    </div>
</section>
@endsection
