<x-app-layout>
    <!-- Hero Section -->
    <x-home.hero-section />

    <!-- Features Section -->
    <x-home.features-section />

    <!-- Unique Interactive Section -->
    <section class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left">
                    <h2 class="text-4xl font-bold text-gray-900">🚀 Instant Short Links</h2>
                    <p class="text-gray-600 mt-4">
                        Transform any long URL into a powerful short link that looks great and is easy to remember.
                    </p>
                    <a href="{{ route('dashboard') }}" class="mt-6 inline-block bg-[#2C2A4A] text-white font-bold px-8 py-3 rounded-lg shadow-lg hover:bg-[#413D6C] transition-all duration-300">
                        Start Now →
                    </a>
                </div>
                <div class="bg-gradient-to-r from-[#F7F8FC] to-[#F1F3FA] p-6 rounded-lg shadow-lg mx-auto">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_mobile_English_Wikipedia.svg" alt="QR Code Example" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-24 text-center bg-[#2C2A4A] text-white">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-4xl font-bold">Create Your First Short Link in Seconds</h2>
            <p class="text-lg opacity-90 mt-4">
                Sign up for free and start optimizing your links today.
            </p>
            <a href="{{ route('dashboard') }}"
                class="mt-6 inline-block bg-white text-[#2C2A4A] font-bold px-10 py-4 rounded-full shadow-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-110">
                Get Started →
            </a>
        </div>
    </section>

    <!-- Footer -->
    <x-footer />
</x-app-layout>
