<h1>Pagina de recetas</h1>

@foreach ($recetas as $receta )
    <li>{{$receta}}</li>
@endforeach
<hr>

<h2>Categorias</h2>
@foreach ($categorias as $categoria )
    <li>{{$categoria}}</li>
@endforeach
