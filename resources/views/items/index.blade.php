@extends('layout.plantilla')

@section('tittle' , 'Productos')

@section('body')
    <div>
        @include('layout.header')
    </div>
    <main>
        <section class="col-9">
            @foreach ($items as $item )
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header"> {{ $item -> name_item }}</div>
                <div class="card-body">
                    <img src=" {{ asset( $item -> picture ) }}" alt="">
                  <h4 class="card-title">  {{ $item -> price}}</h4>
                  <p class="card-text"> {{ $item -> description }} </p>
                </div>
              </div>
            @endforeach 
        </section>
    </main>

@endsection