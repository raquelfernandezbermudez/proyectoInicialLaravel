<x-layouts.layout>
    @guest
    <div class="hero min-h-full" style="background-image: url('{{ asset('images/fondo.jpg') }}');">
        <div class="hero-overlay bg-opacity-10"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-4xl font-bold text-black">Bienvenid@</h1>
                <p class="mb-5 text-xl text-black">
                    Este pequeño espacio está dedicado a los animales que tenemos en adopción.
                </p>
            </div>
        </div>
    </div>
    @endguest

    @auth
    <div class="hero min-h-full" style="background-image: url('{{ asset('images/fondo.jpg') }}');">
    <img class="w-[40vw] h-[40h] object-cover" src="{{ asset('images/gato_mirandoArriba.png') }}" alt="fondoMain">
    @endauth
</x-layouts.layout>
