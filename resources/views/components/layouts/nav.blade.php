@auth
<nav class="md:h-10v bg-nav flex flex-wrap justify-center items-center px-4 gap-4">

<a href="{{ route('cats.create') }}" class="btn btn-sm text-white bg-[#896a92] hover:bg-[#9c7fa6] transition-colors min-w-[120px] px-4 py-2 text-center">Crear gatos</a>    
<a href="{{ route('cats.index') }}" class="btn btn-sm text-white bg-[#896a92] hover:bg-[#9c7fa6] transition-colors min-w-[120px] px-4 py-2 text-center">Gatos</a>
    <a href="{{ route('about.index') }}" class="btn btn-sm text-white bg-[#896a92] hover:bg-[#9c7fa6] transition-colors min-w-[120px] px-4 py-2 text-center">About</a>

    <!-- Alternativa si la ruta directa es /cats -->
    <!-- <a href="/cats" class="btn btn-sm text-white bg-[#896a92] hover:bg-[#9c7fa6] transition-colors min-w-[120px] px-4 py-2 text-center">Gatos</a> -->
        
</nav>
@endauth

