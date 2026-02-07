@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="gradient-green text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold mb-4">📞 Contactez-Nous</h1>
        <p class="text-xl text-green-100">Notre équipe est à votre écoute 24/7</p>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Envoyez-nous un Message</h2>
                
                @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded">
                    <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
                </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Nom Complet</label>
                            <input type="text" name="name" required class="w-full border-2 border-gray-300 rounded-xl px-4 py-3 focus:border-green-500 focus:outline-none transition" placeholder="Votre nom">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Email</label>
                            <input type="email" name="email" required class="w-full border-2 border-gray-300 rounded-xl px-4 py-3 focus:border-green-500 focus:outline-none transition" placeholder="votre@email.com">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Téléphone</label>
                            <input type="tel" name="phone" class="w-full border-2 border-gray-300 rounded-xl px-4 py-3 focus:border-green-500 focus:outline-none transition" placeholder="+221 XX XXX XX XX">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Sujet</label>
                            <select name="subject" required class="w-full border-2 border-gray-300 rounded-xl px-4 py-3 focus:border-green-500 focus:outline-none transition">
                                <option value="">Choisir un sujet</option>
                                <option value="information">Demande d'Information</option>
                                <option value="support">Support Technique</option>
                                <option value="partenariat">Partenariat</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Message</label>
                            <textarea name="message" rows="5" required class="w-full border-2 border-gray-300 rounded-xl px-4 py-3 focus:border-green-500 focus:outline-none transition" placeholder="Votre message..."></textarea>
                        </div>
                        <button type="submit" class="w-full gradient-green text-white py-4 rounded-xl font-bold hover:opacity-90 transition transform hover:scale-105">
                            <i class="fas fa-paper-plane mr-2"></i>Envoyer le Message
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Info & Map -->
            <div class="space-y-8">
                <!-- Contact Cards -->
                <div class="space-y-4">
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover-lift">
                        <div class="flex items-center">
                            <div class="w-14 h-14 gradient-green rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-white text-2xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-gray-800 mb-1">Téléphone</div>
                                <a href="tel:+221771234567" class="text-green-600 hover:underline">+221 77 123 45 67</a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-lg p-6 hover-lift">
                        <div class="flex items-center">
                            <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mr-4">
                                <i class="fab fa-whatsapp text-white text-2xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-gray-800 mb-1">WhatsApp</div>
                                <a href="https://wa.me/221771234567" target="_blank" class="text-green-600 hover:underline">+221 77 123 45 67</a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-lg p-6 hover-lift">
                        <div class="flex items-center">
                            <div class="w-14 h-14 gradient-orange rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-white text-2xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-gray-800 mb-1">Email</div>
                                <a href="mailto:contact@saheltrace.com" class="text-orange-600 hover:underline">contact@saheltrace.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-lg p-6 hover-lift">
                        <div class="flex items-center">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-gray-800 mb-1">Adresse</div>
                                <p class="text-gray-600">Dakar, Sénégal</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interactive Map -->
                <div class="bg-white rounded-2xl shadow-lg p-4 overflow-hidden">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">📍 Notre Localisation</h3>
                    <div class="relative w-full h-80 rounded-xl overflow-hidden">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245755.28629409266!2d-17.47824648781934!3d14.716554989593793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10d3dce44e3c5%3A0x7d892f9b3e65d4f!2sDakar%2C%20Senegal!5e0!3m2!1sen!2s!4v1234567890123!5m2!1sen!2s" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-xl">
                        </iframe>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="https://goo.gl/maps/dakar" target="_blank" class="text-blue-600 hover:underline font-bold">
                            <i class="fas fa-external-link-alt mr-2"></i>Ouvrir dans Google Maps
                        </a>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="bg-gradient-to-br from-green-500 to-green-700 text-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-bold mb-4">Suivez-nous</h3>
                    <div class="flex space-x-4">
                        <a href="https://facebook.com" target="_blank" class="w-12 h-12 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center transition transform hover:scale-110">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="w-12 h-12 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center transition transform hover:scale-110">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" class="w-12 h-12 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center transition transform hover:scale-110">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="https://linkedin.com" target="_blank" class="w-12 h-12 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center transition transform hover:scale-110">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
