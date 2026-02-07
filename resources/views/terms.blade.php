@extends('layouts.app')

@section('content')
<section class="gradient-brown text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold">Conditions d'Utilisation</h1>
        <p class="text-xl text-brown-100 mt-4">Dernière mise à jour: {{ date('d/m/Y') }}</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">1. Acceptation des Conditions</h2>
            <p class="text-gray-600 mb-6">En accédant et en utilisant SahelTrace, vous acceptez d'être lié par ces conditions d'utilisation. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser notre service.</p>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">2. Description du Service</h2>
            <p class="text-gray-600 mb-6">SahelTrace est une plateforme de traçabilité du bétail qui permet aux éleveurs d'enregistrer leurs animaux, de générer des QR codes uniques et aux vérificateurs de consulter les informations.</p>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">3. Inscription et Compte</h2>
            <ul class="list-disc pl-6 text-gray-600 mb-6">
                <li>Vous devez fournir des informations exactes et complètes lors de l'inscription</li>
                <li>Vous êtes responsable de la confidentialité de votre compte</li>
                <li>Vous devez nous informer immédiatement de toute utilisation non autorisée</li>
            </ul>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">4. Paiements et Tarifs</h2>
            <ul class="list-disc pl-6 text-gray-600 mb-6">
                <li>Animal individuel: 5,000 FCFA</li>
                <li>Lot d'animaux: 10,000 FCFA</li>
                <li>Les paiements sont requis avant la génération du QR code</li>
                <li>Les paiements sont non remboursables sauf en cas d'erreur de notre part</li>
            </ul>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">5. Utilisation Acceptable</h2>
            <p class="text-gray-600 mb-6">Vous vous engagez à:</p>
            <ul class="list-disc pl-6 text-gray-600 mb-6">
                <li>Fournir des informations véridiques sur vos animaux</li>
                <li>Ne pas utiliser le service à des fins frauduleuses</li>
                <li>Respecter les droits de propriété intellectuelle</li>
                <li>Ne pas tenter de contourner les mesures de sécurité</li>
            </ul>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">6. Propriété Intellectuelle</h2>
            <p class="text-gray-600 mb-6">Tous les droits de propriété intellectuelle relatifs à SahelTrace appartiennent à notre société. Vous ne pouvez pas copier, modifier ou distribuer notre contenu sans autorisation.</p>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">7. Limitation de Responsabilité</h2>
            <p class="text-gray-600 mb-6">SahelTrace n'est pas responsable des pertes indirectes, consécutives ou punitives résultant de l'utilisation de notre service.</p>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">8. Modifications</h2>
            <p class="text-gray-600 mb-6">Nous nous réservons le droit de modifier ces conditions à tout moment. Les modifications seront publiées sur cette page.</p>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">9. Contact</h2>
            <p class="text-gray-600">Pour toute question, contactez-nous à: <a href="mailto:legal@saheltrace.com" class="text-brown-600 hover:underline">legal@saheltrace.com</a></p>
        </div>
    </div>
</section>
@endsection
