@include('layouts.partials._head')

<body>
    <div class="min-h-screen h-screen flex flex-col container mx-auto">
        <main class="flex-1 flex">
            <div class="w-1/3 flex flex-col items-center justify-center">
                <form class="w-3/4" method="POST" action="{{ route('login') }}">
                    <h3 class="font-semibold font-poppins text-4xl text-blue-800 mb-8">
                        WELCOME BACK
                
                        <br>
                
                        <span class="text-yellow-500 ">TO BLOG.</span>
                    </h3>
        
                    @csrf
        
                    <div class="mb-4">
                        <input name="email" class="w-full bg-transparent border @error('email') border-red-500 @enderror rounded p-3 text-xs text-blue-800 font-semibold font-poppins" type="text" placeholder="Email" />
        
                        @error('email')
                            <span class="text-xs text-red-500 font-medium font-poppins" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        
        
                    <div class="mb-4">
                        <input name="password" class="w-full bg-transparent border @error('password') border-red-500 @enderror rounded p-3 text-xs text-blue-800 font-semibold font-poppins" type="password" placeholder="Password" />
        
                        @error('password')
                            <span class="text-xs text-red-500 font-medium font-poppins" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        
                    <button class="bg-blue-800 text-white text-xs font-semibold font-poppins px-8 py-3 rounded-full" type="submit">{{ __('Login') }}</button>
                </form>
            </div>
        
            <div class="w-2/3 flex items-center justify-center">
                <div class="w-2/3 flex items-center justify-center bg-yellow-500 rounded-xl p-12">
                    <img class="w-full h-full" src="{{ asset('assets/images/login.svg') }}" alt="login">
                </div>
            </div>
        </main>
    </div>

    @include('layouts.partials._footer')
</body>
</html>
