@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="gradient-green text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Contactez-Nous</h1>
        <p class="text-xl text-green-100 max-w-3xl mx-auto">
            Notre équipe est à votre écoute pour répondre à toutes vos questions
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div>
                <h2 class="text-4xl font-bold text-gray-800 mb-8">Nos Coordonnées</h2>
                
                <div class="space-y-6 mb-12">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 gradient-green rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Adresse</h3>
                            <p class="text-gray-600">Avenue Cheikh Anta Diop<br>Dakar, Sénégal<br>BP 12345</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 gradient-brown rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Téléphone</h3>
                            <p class="text-gray-600">+221 77 123 45 67<br>+221 33 123 45 67</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 gradient-orange rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Email</h3>
                            <p class="text-gray-600">contact@saheltrace.com<br>support@saheltrace.com</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 gradient-green rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fab fa-whatsapp text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">WhatsApp</h3>
                            <p class="text-gray-600">+221 77 123 45 67</p>
                            <a href="https://wa.me/221771234567" target="_blank" class="inline-block mt-2 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                                <i class="fab fa-whatsapp mr-2"></i>Démarrer une Conversation
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-2xl p-8">
                    <h3 class="font-bold text-xl text-gray-800 mb-4">Horaires d'Ouverture</h3>
                    <div class="space-y-2 text-gray-600">
                        <div class="flex justify-between">
                            <span>Lundi - Vendredi:</span>
                            <span class="font-semibold">8h00 - 18h00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Samedi:</span>
                            <span class="font-semibold">9h00 - 13h00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Dimanche:</span>
                            <span class="font-semibold text-red-600">Fermé</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <div class="bg-gray-50 rounded-2xl p-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Envoyez-nous un Message</h2>
                    
                    @if(session('contact_success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle mr-3"></i>
                                <p>{{ session('contact_success') }}</p>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Nom Complet *</label>
                            <input type="text" name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Votre nom">
                            @error('name')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Email *</label>
                            <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="votre@email.com">
                            @error('email')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Téléphone</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="+221 77 123 45 67">
                            @error('phone')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Sujet *</label>
                            <select name="subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option value="">Choisir un sujet</option>
                                <option value="information">Demande d'Information</option>
                                <option value="support">Support Technique</option>
                                <option value="partenariat">Partenariat</option>
                                <option value="autre">Autre</option>
                            </select>
                            @error('subject')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Message *</label>
                            <textarea name="message" required rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Votre message...">{{ old('message') }}</textarea>
                            @error('message')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <button type="submit" class="w-full gradient-orange text-white py-4 rounded-lg font-bold text-lg hover:opacity-90 transition">
                            <i class="fas fa-paper-plane mr-2"></i>Envoyer le Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-gray-800 mb-8 text-center">Notre Localisation</h2>
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="h-96 bg-gray-200 flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-map-marked-alt text-6xl text-gray-400 mb-4"></i>
                    <p class="text-gray-600 text-lg">Avenue Cheikh Anta Diop, Dakar, Sénégal</p>
                    <p class="text-gray-500 mt-2">Carte interactive à venir</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
