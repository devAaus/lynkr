<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

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

                <p class="font-medium break-all">{{ $fullUrl }}</p>

                <a href="{{ $fullUrl }}" target="_blank">
                    <x-primary-button>
                        Open Link
                    </x-primary-button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
