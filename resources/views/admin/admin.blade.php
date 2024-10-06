@php
use Illuminate\Support\Str;
@endphp
<x-admin_layout>
    <x-slot:title> Administrador </x-slot:title>
    <section class="administrador">
        <h2 class="text-center my-5">Administrador</h2>

        <div class="container">
        @auth  
        <div>
        <a class="btn btn-danger" href="{{ route('articles.create')}}">Publicar</a>
        </div>  
        @endauth
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Contenido</th>
                        <th>Fecha de publicación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->article_id }}</td>
                        <td>{{ Str::limit($article->title, 50, '...') }}</td>
                        <td>{!! Str::limit($article->content, 50, '...') !!}</td>
                        <td>{{$article->release_date}}</td>
                        <td>
                            @auth
                            <a href="{{ route ('articles.edit', ['id' => $article->article_id])}}"><i class="bi bi-pencil-square"></i><span class="sr-only">Editar</span></a>
                            <a href="{{ route ('articles.delete', ['id' => $article->article_id])}}"><i class="bi bi-trash3"></i><span class="sr-only">Eliminar</span></a>
                            @endauth
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-admin_layout>