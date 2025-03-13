<x-layouts.layout title="Crear Gato">
    <div class="hero min-h-full" style="background-image: url('{{ asset('images/fondo.jpg') }}');">
        <div class="bg-white p-4 rounded-xl">
            <h2 class="text-2xl font-bold mb-4">Crear Gato</h2>
            <form id="create-cat-form" method="POST" action="{{ route('cats.store') }}" class="space-y-4" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <!-- Nombre -->
                <div>
                    <x-input-label for="name" :value="__('Nombre')" />
                    <x-text-input
                        id="name"
                        class="block mt-1 w-full"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                    />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Edad -->
                <div>
                    <x-input-label for="age" :value="__('Edad')" />
                    <x-text-input
                        id="age"
                        class="block mt-1 w-full"
                        type="number"
                        name="age"
                        :value="old('age')"
                        required
                        min="0"
                        max="30"
                    />
                    <x-input-error :messages="$errors->get('age')" class="mt-2" />
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
                        required
                        accept="image/*"
                    />
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

                <!-- Botón -->
                <div class="flex justify-end">
                    <x-primary-button class="mt-4" id="create-button">
                        {{ __('Crear Gato') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('create-button').addEventListener('click', function(event) {
                event.preventDefault(); // Previene el envío del formulario para mostrar la alerta primero

                Swal.fire({
                    title: '¿Confirmar creación?',
                    text: '¿Estás seguro de que deseas crear este gato?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, crear',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('create-cat-form').submit(); // Envía el formulario después de que el usuario confirme
                    }
                });
            });
        });
    </script>
</x-layouts.layout>
