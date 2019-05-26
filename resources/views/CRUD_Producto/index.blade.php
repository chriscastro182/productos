@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('info')
        <div class="col-md-10">
            
                
            <div class="card bg-dark ">
                <div class="card-header">
                    <h4 class="text-white">Lista de Productos</h4>
                    <div class="float-right">
                        <a href="{{ route('producto.create') }}">
                            <button type="button" class="btn btn-primary">Nuevo producto</button>
                        </a>                            
                    </div>
                </div>

                <div class="card-body bg-light">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Descripcion</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($productos as $producto)
                                    <tr>
                                        <td>{{ $producto->id}}</td>
                                        <td>{{ $producto->nombre}}</td>
                                        <td>{{ $producto->precio}}</td>
                                        <td>{{ $producto->descripcion}}</td>
                                        <td>
                                            <a href="{{ route('producto.show', $producto->id) }}">
                                                <button type="button" class="btn btn-info">Ver</button>
                                            </a>
                                        </td>
                                    </tr> 
                                @empty
                                    <tr>
                                        <td colspan="4">Sin productos registrados</td>
                                    </tr> 
                                @endforelse
                                                        
                            </tbody>
                        </table>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
