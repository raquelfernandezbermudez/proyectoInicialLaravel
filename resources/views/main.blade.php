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
    <div class="container mx-auto p-4 sm:p-6">
        <!-- Cambié grid-cols-4 a un diseño responsive -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <!-- Card 1 -->
            <div class="bg-[#d5c1db] rounded-lg shadow-md p-4 text-center">
                <img src="https://i0.wp.com/puppis.blog/wp-content/uploads/2020/02/Particularidades-de-los-felinos.jpg?resize=1024%2C683&ssl=1" 
                alt="Gato 1" class="w-full h-32 sm:h-40 object-cover rounded-md">
                <div class="mt-3">
                    <p><span class="font-bold">Nombre:</span> Foobar</p>
                    <p><span class="font-bold">Edad:</span> 4 años</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#d5c1db] rounded-lg shadow-md p-4 text-center">
                <img src="https://images.ctfassets.net/denf86kkcx7r/4IPlg4Qazd4sFRuCUHIJ1T/f6c71da7eec727babcd554d843a528b8/gatocomuneuropeo-97?fm=webp&w=913" 
                alt="Gato 2" class="w-full h-32 sm:h-40 object-cover rounded-md">
                <div class="mt-3">
                    <p><span class="font-bold">Nombre:</span> Foobar</p>
                    <p><span class="font-bold">Edad:</span> 2 años</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#d5c1db] rounded-lg shadow-md p-4 text-center">
                <img src="https://www.infobae.com/resizer/v2/VCVWSMNYEFDCXADXEIP7JZXIXY.jpg?auth=4271062f4ba9cb1195b77007d77aea2057edfbd0b7e74f6475d865c13cfb9302&smart=true&width=1200&height=800&quality=85" 
                alt="Gato 3" class="w-full h-32 sm:h-40 object-cover rounded-md">
                <div class="mt-3">
                    <p><span class="font-bold">Nombre:</span> Foobar</p>
                    <p><span class="font-bold">Edad:</span> 5 años</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-[#d5c1db] rounded-lg shadow-md p-4 text-center">
                <img src="https://media-eu.husse.com/media/d1/3f/ba/1607080844/iStock-1146054699.jpg"
                alt="Gato 4" class="w-full h-32 sm:h-40 object-cover rounded-md">
                <div class="mt-3">
                    <p><span class="font-bold">Nombre:</span> Foobar</p>
                    <p><span class="font-bold">Edad:</span> 7 años</p>
                </div>
            </div>
        </div>
    </div>
</div>
    @endauth
</x-layouts.layout>
