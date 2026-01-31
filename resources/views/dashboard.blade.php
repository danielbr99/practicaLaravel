<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('app.dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    <p>{{ __('app.logged_in_message') }}</p>

                    <a
                        href="{{ route('main') }}"
                        class="inline-block px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700"
                    >
                        {{ __('app.back_to_home') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
