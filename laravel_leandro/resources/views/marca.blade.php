@extends("app")

@section("title", "Bem-vindo as Marcas")

@section("body")


<h1>Tela de Marcas</h1>
<a href="{{ route('marca.new') }}" class="btn btn-success">Nova Marca</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Marca</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($marcas as $marca)
        <tr>
            <td>{{ $marca->id }}</td>
            <td>{{ $marca->marca }}</td>
            <td><a href="{{route('marca.edit',$marca->id)}}" class="btn btn-success">Editar</a>
        </tr>    
        @endforeach
      
    </tbody>
@endsection