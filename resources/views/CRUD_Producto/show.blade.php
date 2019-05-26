@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('producto.index')}}">
        <button type="button" class="btn btn-primary">Volver al listado de productos</button>
    </a>
    <div class="row justify-content-center">
        @include('info')
        <div class="col-md-10">
            <div class="card mb-3">
            <img src="{{ asset('img/product.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre }} </h5>
                    <p class="card-text">{{ $producto->descripcion }}.</p>
                    <p class="card-text"><small class="text-muted"> {{ $producto->created_at }}</small></p>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection
