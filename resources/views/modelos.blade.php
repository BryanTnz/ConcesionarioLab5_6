@extends('layout.main')

@section('title','Personal')

@section('content')
<h1>Nuestros Modelos</h1>
<hr>


<main class="row">
    @foreach ( $autos as $auto)
    <article class="col-12 col-md-4 text-center mb-5 mb-md-0">

        <div class="border border-dark rounded rounded-3 overflow-hidden bg-dark text-white">
            <p class="fw-bold mt-5">{{strtoupper($auto['Nombre'])}}</p>
            <img src="{{$auto['img']}}" alt="" width="100" height="100">
            <p class="mt-3 font-monospace">{{$auto['Web']}}</p>
            <ul class="list-unstyled my-5">
                <li>{{$auto['Contacto']}}</li>
            </ul>
            <a class="bg-secondary text-white py-3 d-block text-decoration-none" href="#">Más Información</a>
        </div>
    </article>
    @endforeach
</main>

@endsection()



