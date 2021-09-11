@extends("app")

@section('title', 'Cadastro de Marcas')

@section("body")

  <div class="card">
    <div class="card-header">
      Dados da Marca
    </div>
    <div class="card-body">
      
      @isset($marca)
        <form method="post" action="{{ route('marca.update',$marca->id) }}">
      @else
        <form method="post" action="{{ route('marca.store') }}">
      @endisset

      @csrf

      <div class="mb-3">
        <label for="nome" class="form-label">Nome da Marca</label>
        <input type="text" name="marca" value="{{old('marca',$marca->marca ?? '')}}"  class="form-control" placeholder="Ex.: Nike">
      

      @foreach ($errors->get('marca') as $message) 
        {{$message}}
      @endforeach

      </div>
      <input type="submit" value="Enviar" class="btn btn-primary">
  
        </form>
  </div>
@endsection