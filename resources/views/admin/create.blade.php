<x-admin_layout>

    <x-slot:title>Publicar una nueva Noticia</x-slot:title>
    <section class="create">
        <h2 class="text-center mt-3">Publicar una Nueva Noticia</h2>

        @if($errors->any())
        <div class="alert alert-danger container">Hay errores en los datos ingresados</div>
        @endif

        <x-forms.tinymce-editor/>
        
    </section>
    
</x-admin_layout>