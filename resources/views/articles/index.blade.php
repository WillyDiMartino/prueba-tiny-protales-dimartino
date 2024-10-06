<x-layout>
    <x-slot:title> Noticias </x-slot:title>
    <section class="noticias">
        <h2 class="text-center my-5">Noticias</h2>

        <div class="container">
            <div class="row">
                @foreach ($articles as $article)
                <a href="{{ route('articles.show', ['id' => $article->article_id]) }}" class="col-12 col-md-6 col-lg-4 col-xl-3 d-flex flex-column justify-content-end"> 
                        <h3>{{ $article->title }}</h3>
                        <img class="img-fluid" src="<?= url('img/polemica_fia.webp') ?>" alt="foto del articulo <?= e($article->title) ?>">
                        <span class="text-end">{{ $article->release_date }}</span>
                </a>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>