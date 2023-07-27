@section('style-header')
    <style>
        .header {
            background: url('{{ asset('storage/img/ImagenInicio.jpg') }}');
            background-position: center;
            background-size: cover;
        }
    </style>
@endsection

@section('titulo-header')
    <div class="titulo-inicio">
        <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo possimus earum, soluta aliquid nobis minus!
        </h1>
    </div>
@endsection

@extends('layout.plantilla')
@section('tittle', 'Home')

@section('body')
    <div>
        @include('layout.header')
    </div>
    <main class="row container mt-4">
        <section class="col-9">
            <article class="art-1-inicio">
                <img src=" {{asset('storage/img/naruto-evolucion.jpg')}}" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta pariatur molestias commodi eos vero accusantium at placeat illum nisi error.</p>
            </article>
            <article>
                <img src=" {{asset('storage/img/MangaMyHero.jpg')}}" alt="">
                <img src=" {{asset('storage/img/MangaMyHero.jpg')}}" alt="">
            </article>
        </section>
        <aside class="col-3 aside">
            <img src=" {{ asset('storage/img/Lee.jpg')}}" alt="">
            <img src=" {{ asset('storage/img/lee2.jpg')}}" alt="">
        </aside>
    </main>

@endsection
