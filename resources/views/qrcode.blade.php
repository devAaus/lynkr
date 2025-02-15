<x-app-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="p-6 bg-white rounded-xl space-y-4">
            <div class="mt-4">
                <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-800">
                    ← Back to Dashboard
                </a>
            </div>

            <div class="text-center">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">QR Code</h2>

                <div class="flex justify-center my-6">
                    {!! $qrCode !!}
                </div>

                <p class="font-medium break-all mb-2">
                    <strong>URL: </strong>
                    {{ $fullUrl }}
                </p>

                <x-link-button
                    href="{{ $fullUrl }}"
                    targetBlank="true">
                    Open Link
                </x-link-button>
            </div>
        </div>
    </div>
</x-app-layout>
