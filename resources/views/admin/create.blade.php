<x-admin_layout>

    <x-slot:title>Publicar una nueva Noticia</x-slot:title>
    <section class="create">
        <h2 class="text-center mt-3">Publicar una Nueva Noticia</h2>

        @if($errors->any())
        <div class="alert alert-danger container">Hay errores en los datos ingresados</div>
        @endif

        <form action="{{ url('/admin/publicar') }}" method="post" class="container">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" @error("title") aria-errormessage="error-title" @enderror>
                @error('title')
                <div class="text-danger" id="error-title">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Contenido</label>
                <textarea id="content" name="content" class="form-control" @error("content") aria-errormessage="error-content" @enderror>{{ old('content') }}</textarea>
                @error('content')
                <div class="text-danger" id="error-content">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="release_date" class="form-label">Fecha de publicación</label>
                <input type="date" id="release_date" name="release_date" class="form-control" value="{{ old('release_date') }}" @error("release_date") aria-errormessage="error-release_date" @enderror>
                @error('release_date')
                <div class="text-danger" id="error-release_date">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Publicar</button>
        </form>

    </section>

</x-admin_layout>