<x-layouts.layout>

<div class="hero min-h-full" style="background-image: url('{{ asset('images/fondo.jpg') }}');">
    <div class="container mx-auto p-4 sm:p-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        @foreach ($cats as $cat)
        <div class="bg-[#d5c1db] rounded-lg shadow-md p-4 text-center">
                <img src="{{asset("images/cats/$cat->image")}}" 
                alt="{{$cat->name}}" class="w-full h-32 sm:h-40 object-cover rounded-md">
                <div class="mt-3">
                    <p><span class="font-bold">Nombre:</span> {{$cat->name}}</p>
                    <p><span class="font-bold">Edad:</span> {{$cat->age}}</p>
                </div>
            </div>

        @endforeach


        </div>
    </div>
</div>


</x-layouts.layout>