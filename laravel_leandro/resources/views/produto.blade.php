@extends('app')

@section('body')

<h1>lista de produtos</h1>
<a href="{{ route('produto.new') }}" class="btn btn-success">Novo Produto</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
            <tr>
                <th scope="row">{{ $produto->id }}</th>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->preco}}</td>
                <td><a href="{{route('produto.edit',$produto->id)}}" class="btn btn-info">Editar</a>
          </tr>
                
        @endforeach
      
    </tbody>
  </table>

@endsection