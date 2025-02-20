{{--Diseño para pantalla grande--}}
<header class="hidden md:flex h-15v bg-header flex flex-row justify-between items-center p-3">
    {{--    --}}
    <!--   -->
    <img class="h-16 max-h-full bg-white" src="{{asset('images/logo.png')}}" alt="logo">
    <h1 class="text-5xl text-white font-CocoBubble">GattoTeca</h1>
    <div>
        @guest
            <form action="">
                <a href="{{route('login')}}" class="btn btn-sm text-black bg-[#d5c1db] hover:bg-[#c4aacd] transition-colors">Login</a>
                <a href="{{route('register')}}" class="btn btn-sm text-black bg-[#d5c1db] hover:bg-[#c4aacd] transition-colors">Register</a>
                
            </form>
        @endguest
        @auth
    <div class="flex items-center space-x-4">
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
<header class="md:hidden bg-header flex flex-col justify-between items-center p-3">
    {{--    --}}
    <!--   -->
    <img class="m-4 h-16 max-h-full bg-white" src="{{asset('images/logo.png')}}" alt="logo">
    <div>
        @guest
            <form action="">
                <a href="{{route('login')}}" class="btn btn-sm text-black bg-[#d5c1db] hover:bg-[#c4aacd] transition-colors">Login</a>
                <button class="btn btn-sm text-black bg-[#d5c1db] hover:bg-[#c4aacd] transition-colors">Register</button>
            </form>
        @endguest
        @auth
            {{auth()->user()->name}}
            <form action="{{route('logout')}}" method="post">
                @csrf
                <input class="btn btn-sm text-black bg-[#d5c1db] hover:bg-[#c4aacd] transition-colors" type="submit" value="Logout">
            </form>
        @endauth
    </div>
</header>
