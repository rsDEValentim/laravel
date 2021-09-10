@extends("app")

@section("body")

<h1>Tela de Categoria</h1>
<a href="{{ route('categoria.new') }}" class="btn btn-success">Nova Categoria</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Categoria</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
        <tr>
            <td>{{ $categoria->id_categoria }}</td>
            <td>{{ $categoria->categoria }}</td>
            <td><a href="{{route('categoria.edit',$categoria->id_categoria)}}" class="btn btn-success">Editar</a>
      </tr>    
        @endforeach
      
    </tbody>
  </table>

@endsection