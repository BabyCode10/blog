@include('layouts.partials._head')

<body>
    <div class="min-h-screen h-screen flex flex-col container mx-auto">
        <div class="flex items-center justify-between py-2">
            <div class="w-64 flex justify-center">
                <a href="{{ url('/') }}" class="text-2xl font-bold font-poppins text-yellow-500">{{ config('app.name', 'Laravel') }}</a>  
            </div>

            @auth
            <a href="#" class="text-sm font-semibold font-poppins text-blue-800 bg-yellow-500 rounded-full py-3 px-8">
                {{ Auth::user()->name }}
            </a>
            @endauth
        </div>
        
        <div class="flex-1 flex pt-4">
            @include('layouts.partials._side-bar')
            
            <div class="flex-1">

                @include('layouts.partials._alerts')

                @yield('content')
            </div>
        </div>
    </div>

    @include('layouts.partials._footer')
</body>
</html>
