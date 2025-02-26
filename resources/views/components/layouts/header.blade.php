{{--Diseño para pantalla grande--}}
<header class="hidden md:flex h-15v bg-header flex flex-row justify-between items-center p-3">
    {{--    --}}
    <!--   -->
    <img class="h-16 max-h-full" src="{{asset('images/logo.png')}}" alt="logo">
    <h1 class="text-5xl text-white font-CocoBubble">GatoTeca</h1>
    <div>
        @guest
            <form action="">
                <a href="{{route('login')}}" class="btn btn-sm text-black bg-[#d5c1db] hover:bg-[#c4aacd] transition-colors">Login</a>
                <a href="{{route('register')}}" class="btn btn-sm text-black bg-[#d5c1db] hover:bg-[#c4aacd] transition-colors">Register</a>    
            </form>
        @endguest
        @auth
        <div class="flex items-center space-x-4 text-white">
            <p>Hola {{ auth()->user()->name }}</p>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-sm text-black bg-[#d5c1db] hover:bg-[#c4aacd] transition-colors px-4 py-1 rounded">
                    Logout
                </button>
            </form>
        </div>
        @endauth
    </div>
</header>

{{--Diseño para móviles--}}
<header class="md:hidden bg-header flex justify-between items-center p-3 relative">
    <!-- Logo -->
    <img class="h-16 max-h-full" src="{{ asset('images/logo.png') }}" alt="logo">

    <!-- Menú hamburguesa -->
    <div>
        <input type="checkbox" id="menu-toggler" class="peer hidden">
        <label for="menu-toggler" class="text-3xl cursor-pointer text-white">
            &#9776;
        </label>

        <!-- Menú desplegable -->
        <div class="hidden peer-checked:flex flex-col absolute top-full right-0 bg-gray-200 p-4 rounded-xl shadow-lg">
            @guest
                <a href="{{ route('login') }}" class="btn btn-sm text-black bg-[#d5c1db] hover:bg-[#c4aacd] transition-colors mb-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-sm text-black bg-[#d5c1db] hover:bg-[#c4aacd] transition-colors">Register</a>
            @endguest
            @auth
                <div class="flex flex-col items-center space-y-2">
                    <p>Hola, {{ auth()->user()->name }}</p>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-sm text-black bg-[#d5c1db] hover:bg-[#c4aacd] transition-colors px-4 py-1 rounded">
                            Logout
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</header>

