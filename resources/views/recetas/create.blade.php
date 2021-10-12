@extends('layouts.app')

@section('botones')

<a href="{{route('recetas.index')}}" class="btn btn-primary mr-2 text-white">volver</a>

@endsection

@section('content')

<h2 class="text-center mb-5">Crear una receta</h2>



<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <form action="{{route('recetas.store')}}" method="POST" novalidate>

            @csrf

            <div class="form-group">
                <label for="titulo">Titulo de la receta</label>
                <input type="text"
                        name="titulo"
                        class="form-control @error('titulo') is-invalid @enderror "
                        id="titulo"
                        placeholder="Titulo Receta"
                        value="{{old('titulo')}}"
                >

                @error('titulo')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="from-group">
                <label for="categoria">Categoria</label>

                <select
                    name="categoria"
                    id="categoria"
                    class="form-control"
                >

                <option value="">--Selecciones--</option>
                @foreach ($categorias as $id => $categoria )

                    <option value="{{$id}}"
                        {{old('categoria')== $id ? 'Selected': ''}}>
                        {{$categoria}}
                     </option>
                @endforeach
                </select>

                @error('categoria')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit"
                    class="btn btn-primary"
                    value="Agregar Receta">
            </div>

        </form>
    </div>
</div>

@endsection
