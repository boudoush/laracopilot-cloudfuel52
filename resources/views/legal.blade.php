@extends('layouts.app')

@section('content')
<section class="gradient-orange text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold">Mentions Légales</h1>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Éditeur du Site</h2>
            <div class="bg-gray-50 p-6 rounded-lg mb-8">
                <p class="text-gray-600 mb-2"><strong>Raison sociale:</strong> SahelTrace SARL</p>
                <p class="text-gray-600 mb-2"><strong>Adresse:</strong> Avenue Cheikh Anta Diop, Dakar, Sénégal</p>
                <p class="text-gray-600 mb-2"><strong>NINEA:</strong> 123456789</p>
                <p class="text-gray-600 mb-2"><strong>Téléphone:</strong> +221 77 123 45 67</p>
                <p class="text-gray-600 mb-2"><strong>Email:</strong> contact@saheltrace.com</p>
                <p class="text-gray-600"><strong>Directeur de publication:</strong> Amadou Diallo</p>
            </div>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">Hébergement</h2>
            <div class="bg-gray-50 p-6 rounded-lg mb-8">
                <p class="text-gray-600 mb-2"><strong>Hébergeur:</strong> [Nom de l'hébergeur]</p>
                <p class="text-gray-600 mb-2"><strong>Adresse:</strong> [Adresse de l'hébergeur]</p>
                <p class="text-gray-600"><strong>Site web:</strong> [URL de l'hébergeur]</p>
            </div>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">Propriété Intellectuelle</h2>
            <p class="text-gray-600 mb-6">Le site SahelTrace et l'ensemble de son contenu (textes, images, logos, icônes) sont la propriété exclusive de SahelTrace SARL et sont protégés par les lois sur la propriété intellectuelle.</p>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">Données Personnelles</h2>
            <p class="text-gray-600 mb-6">Conformément à la loi sur la protection des données personnelles, vous disposez d'un droit d'accès, de rectification et de suppression de vos données. Pour exercer ce droit, contactez-nous à: privacy@saheltrace.com</p>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">Cookies</h2>
            <p class="text-gray-600 mb-6">Ce site utilise des cookies pour améliorer l'expérience utilisateur et analyser le trafic. En continuant à naviguer, vous acceptez l'utilisation de cookies.</p>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">Responsabilité</h2>
            <p class="text-gray-600 mb-6">SahelTrace met tout en œuvre pour fournir des informations exactes et à jour, mais ne peut être tenu responsable des erreurs ou omissions.</p>

            <h2 class="text-3xl font-bold text-gray-800 mb-4">Droit Applicable</h2>
            <p class="text-gray-600">Le présent site et ses conditions d'utilisation sont régis par le droit sénégalais. En cas de litige, les tribunaux de Dakar seront seuls compétents.</p>
        </div>
    </div>
</section>
@endsection
