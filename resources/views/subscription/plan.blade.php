<x-layout>
    <x-slot name="title">Planes de suscripción</x-slot>
    <section class="suscripcion">
    <h2 class="text-center my-5">Planes de suscripción</h2>
    <div class="container">
        <div class="row justify-content-center  plan-cont">
            @foreach ($plan as $p)
            <a href="#" class="plan-item col-12 col-md-6 col-lg-4 col-xl-3 d-flex flex-column justify-content-end gap-5">
                <h3>{{$p->title}}</h3>
                <p>{{$p->access_to}}</p>
                <p>${{number_format($p->price / 100, 2, ",", ".")}}</p>
            </a>
            @endforeach
        </div>
    </div>
    </section>
</x-layout>