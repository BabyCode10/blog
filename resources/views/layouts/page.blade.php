@include('layouts.partials._head')
<body>
    <div class="min-h-screen h-screen flex flex-col">
        <main class="flex-1 flex flex-col overflow-hidden">
            <div class="border-b border-gray-300">
                <div class="container mx-auto flex items-center justify-between py-4">
                    <a href="{{ url('/') }}" class="text-2xl font-bold font-poppins text-yellow-500">{{ config('app.name', 'Laravel') }}</a>
                
                    <div>
                        @auth
                            <a href="{{ route('home') }}" class="bg-yellow-500 text-blue-800 text-xs font-semibold font-poppins px-8 py-3 rounded-full">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="bg-blue-800 text-white text-xs font-semibold font-poppins px-8 py-3 rounded-full" type="submit">{{ __('Login') }}</a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="flex-1 bg-gray-200 py-4 overflow-y-auto">
                <div class="container mx-auto">
                    @include('layouts.partials._alerts')
    
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    @include('layouts.partials._footer')
</body>
</html>
