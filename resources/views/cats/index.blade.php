<x-layouts.layout>

<div class="hero min-h-full" style="background-image: url('{{ asset('images/fondo.jpg') }}');">
    <div class="container mx-auto p-4 sm:p-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">

            @foreach ($cats as $cat)
                <div class="bg-[#d5c1db] rounded-lg shadow-md p-4 text-center">
                    <img src="{{ asset('images/cats/' . $cat->image) }}" alt="{{ $cat->name }}" class="w-full h-32 sm:h-40 object-cover rounded-md">
                    <div class="mt-3">
                        <p><span class="font-bold">Nombre:</span> {{ $cat->name }}</p>
                        <p><span class="font-bold">Edad:</span> {{ $cat->age }}</p>
                    </div>
                    <div class="flex justify-center space-x-2 mt-4">
                        <a href="{{ route('cats.edit', $cat->id) }}" class="btn btn-sm text-white bg-[#896a92] hover:bg-[#9c7fa6] transition-colors px-2 py-1 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </a>
                        <form action="{{ route('cats.destroy', $cat->id) }}" method="POST" id="delete-cat-form-{{ $cat->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-sm text-white bg-[#896a92] hover:bg-[#9c7fa6] transition-colors px-2 py-1 text-center delete-button" data-id="{{ $cat->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 inline-block">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.querySelectorAll('.delete-button').forEach(button => {
                        button.addEventListener('click', function(event) {
                            event.preventDefault(); // Previene el envío del formulario para mostrar la alerta primero

                            const catId = this.getAttribute('data-id');
                            Swal.fire({
                                title: '¿Segura?',
                                text: 'No podrás recuperar este gato una vez eliminado.',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Sí, eliminar',
                                cancelButtonText: 'Cancelar'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    document.getElementById('delete-cat-form-' + catId).submit(); // Envía el formulario después de que el usuario confirme
                                }
                            });
                        });
                    });
                });
            </script>

        </div>
    </div>
</div>

</x-layouts.layout>
