@extends('app')
@section('body')
    <h1>Cadastro de Produto</h1>


    <div class="card">
        <div class="card-header">
          Dados do Produto
        </div>
        <div class="card-body">
            @isset($produto)
                <form method="post" action="{{ route('produto.update',$produto->id) }}">
            @else
                <form method="post" action="{{ route('produto.store') }}">
            @endisset
            
                @csrf

                <div class="mb-3">
                    <label for="nome" class="form-label">{{trans('app.nome_produto')}}</label>
                    <input type="nome" name="nome" value="{{old('nome',$produto->nome ?? '')}}" class="form-control" id="nome" >
                    @foreach ($errors->get('nome') as $message) 
                        {{$message}}
                    @endforeach
              </div>
              <div class="mb-3">
                <label for="descricao" class="form-label">Descricao do produto</label>
                <textarea class="form-control" name="descricao"id="descricao" rows="3"> {{old('descricao',$produto->descricao ?? '')}} </textarea>
                @foreach ($errors->get('descricao') as $message) 
                        {{$message}}
                    @endforeach
              </div>
              <div class="mb-3">
                <label for="preco" class="form-label">Preço do Produto</label>
                <input type="number" name="preco" value="{{old('preco',$produto->preco ?? '')}}" class="form-control" id="preco" >
                @foreach ($errors->get('preco') as $message) 
                        {{$message}}
                    @endforeach
          </div>
               <input type="submit" value="Enviar" class="btn btn-primary">
            </form>
        </div>
      </div>
@endsection