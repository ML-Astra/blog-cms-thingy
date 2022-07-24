<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ config('app.name', 'Error Reading ENV') }}
        </h2>
        {{-- @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-2 gap-4 place-content-evenly">
                    <div><h2 class="text-xl">CMS Controls</h2></div>
                    <div><p class="text-right">Version 0.0.1</p></div>
                    <div class=""><button onclick="location.href='/horizon'" class="bg-purple-600 text-white rounded-full text-xl"><p class="m-4">Open Horizon</p></button></div>
                    <div class=""><button onclick="location.href='/telescope'" class="bg-blue-600 text-white rounded-full text-xl"><p class="m-4">Open Telescope</p></button></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
