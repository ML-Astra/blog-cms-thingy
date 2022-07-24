<x-no-log>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ config('app.name', 'Error Reading ENV') }}
        </h2>
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-black dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-black dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-black dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </x-slot>

    <x-slot name="slot">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg">
                    <h1 class="text-xxl">L9</h1>
                    @auth
                        <p>User Logged In</p>
                    @endauth
                </div>
            </div>
        </div>
    </x-slot>
</x-no-log>
