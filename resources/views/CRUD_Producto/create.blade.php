@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear nuevo producto</div>
                <div class="card-body">
                    <form  action="{{ route('producto.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" id="nombre">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio:</label>
                            <input type="text" name="precio" class="form-control" id="precio">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion:</label>
                            <textarea type="text" name="descripcion" rows="3" class="form-control" id="descripcion"></textarea>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-success float-right">Guardar</button>         
                    </form>                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
