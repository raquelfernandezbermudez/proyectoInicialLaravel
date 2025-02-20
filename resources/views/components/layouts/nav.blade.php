<nav class="md:h-10v bg-nav flex flex-col md:flex-row justify-center items-center px-4 space-y-2 md:space-y-0 md:space-x-3">
    <button class="btn btn-sm text-white bg-[#896a92] hover:bg-[#9c7fa6] transition-colors">About</button>
    <button class="btn btn-sm text-white bg-[#896a92] hover:bg-[#9c7fa6] transition-colors">Noticias</button>
    <button class="btn btn-sm text-white bg-[#896a92] hover:bg-[#9c7fa6] transition-colors">Contacta</button>
    @auth
        <a href="{{route('alumnos')}}" class="btn btn-sm text-white bg-[#896a92] hover:bg-[#9c7fa6] transition-colors">Alumnos</a>
    @endauth
</nav>

