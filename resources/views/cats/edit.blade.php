<x-layouts.layout title="Editar Gato">
    <div class="hero min-h-full" style="background-image: url('{{ asset('images/fondo.jpg') }}');">
        <div class="bg-white p-4 rounded-xl">
            <h2 class="text-2xl font-bold mb-4">Editar Gato</h2>
            <form method="POST" action="{{ route('cats.update', $cat->id) }}" class="space-y-4" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <!-- Nombre y Edad en una fila -->
                <div class="flex space-x-4">
                    <!-- Nombre -->
                    <div class="flex-1">
                        <x-input-label for="name" :value="__('Nombre')" />
                        <x-text-input
                             id="name"
                             class="block mt-1 w-full"
                             type="text"
                             name="name"
                             :value="old('name', $cat->name)"
                             required
                             autofocus
                         />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    
                    <!-- Edad -->
                    <div class="flex-1">
                        <x-input-label for="age" :value="__('Edad')" />
                        <x-text-input
                             id="age"
                             class="block mt-1 w-full"
                             type="number"
                             name="age"
                             :value="old('age', $cat->age)"
                             required
                             min="0"
                             max="30"
                        />
                        <x-input-error :messages="$errors->get('age')" class="mt-2" />
                    </div>
                </div>
                
                <!-- Imagen -->
                <div>
                    <x-input-label for="image" :value="__('Imagen')" />
                    <input
                         type="file"
                         id="image"
                         name="image"
                         class="block mt-1 w-full text-sm text-slate-500
                         file:mr-4 file:py-2 file:px-4
                         file:rounded-full file:border-0
                         file:text-sm file:font-semibold
                         file:bg-violet-50 file:text-violet-700
                         hover:file:bg-violet-100"
                         accept="image/*"
                    />
                    @if($cat->image)
                        <div class="mt-2">
                            <p class="text-sm text-gray-600 mb-1">Imagen actual:</p>
                            <img src="{{ asset($cat->image) }}" alt="Imagen de {{ $cat->name }}" class="w-32 h-auto rounded" />
                        </div>
                    @endif
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>
                
                <!-- Botón -->
                <div class="flex justify-end">
                    <x-primary-button class="mt-4">
                        {{ __('Actualizar Gato') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.layout>