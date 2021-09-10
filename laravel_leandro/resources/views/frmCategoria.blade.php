@extends("app")

@section("body")
<h1>Cadastro de Categoria</h1>

<div class="card">
    <div class="card-header">
      Dados da Categoria
    </div>
    <div class="card-body">
        @isset($categoria) <!-- se for passado categoria para a view, então está editando -->
            <form method="post" action="{{ route('categoria.update',$categoria->id_categoria) }}">
        @else
            <form method="post" action="{{ route('categoria.store') }}">
         @endisset

            @csrf <!--gera o token de segurança. é obrigatório-->

            <div class="mb-3">
                <label for="nome" class="form-label">Nome da Categoria</label>
                <input type="text" name="categoria" value="{{old('categoria',$categoria->categoria ?? '')}}"  class="form-control">
                <!--o atributo name contém o nome do campo que será validado na request-->

                <!-- mostra os erros -->
                @foreach ($errors->get('categoria') as $message) 
                        {{$message}}
                @endforeach
          </div>

          <input type="submit" value="Enviar" class="btn btn-primary">

        </form>
    </div>
</div>

@endsection