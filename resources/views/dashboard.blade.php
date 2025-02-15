<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-8">

                <div class="flex flex-col items-center justify-center bg-white py-8 gap-2 rounded-xl">
                    <h1 class="font-semibold text-2xl text-gray-800 leading-tight">
                        Shorten a URL
                    </h1>

                    <form method="POST" action="{{ route('shorten') }}">
                        @csrf

                        <input
                            type="url"
                            name="long_url"
                            required
                            placeholder="Enter URL"
                            class="rounded-xl bg-gray-100 border border-gray-100 px-5 py-4 w-full">

                        <x-primary-button class="mt-4">
                            Shorten
                        </x-primary-button>
                    </form>
                </div>

                <div class="flex flex-col justify-center bg-white py-8 px-4 gap-4 rounded-xl">
                    <h3 class="font-semibold text-2xl text-gray-800 leading-tight">
                        Your Shortened URLs
                    </h3>

                    <div class="space-y-4">
                        @if (!empty($urls) && count($urls) > 0)
                            @foreach ($urls as $url)
                                <div class="bg-gray-100 px-3 py-2 rounded-xl flex justify-between items-center">
                                    <a
                                        href="{{ url($url->short_code) }}" target="_blank"
                                        class="hover:underline">
                                        {{ url($url->short_code) }}
                                    </a>
                                    <span class="bg-white px-2 rounded-full">
                                        {{ $url->clicks }}
                                    </span>
                                </div>
                            @endforeach
                        @else
                            <li>No URLs found.</li>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
