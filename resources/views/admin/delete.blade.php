<x-admin_layout>
    <x-slot:title>Confirmacón de eliminación</x-slot:title>
    <section class="delete">
        <h2 class="text-center mt-3">Confirmación de eliminación</h2>
    
            <form action="{{url ('admin/' .  $article->article_id . '/borrar')}}" method="POST" class="container text-center">
                @csrf
                <h3 class="mt-5 mb-3">¿Está seguro que desea eliminar la noticia?</h3>
                <p><strong>Titulo:</strong> {{ $article->title }}</p>
                <p><strong>Fecha de publicación:</strong> {{ $article->release_date }}</p>
                <p><strong>Contenido: </strong>{{ $article->content}}</p>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
    
    </section>
</x-admin_layout>