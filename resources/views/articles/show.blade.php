<x-layout>
    <x-slot:title>{{ $article->title }}</x-slot:title>
    <section class="articulo">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>{{ $article->title }}</h2>
                    <span class="fw-bold">{{ $article->release_date }}</span>
                </div>
                <img class="img-fluid col-12 mt-3" src="<?= url('img/polemica_fia.webp') ?>" alt="foto del articulo {{$article->title}}">
                <p class="col-12 mt-3">{!! $article->content !!}</p>
            </div>
        </div>
    </section>
</x-layout>

