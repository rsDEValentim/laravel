@extends('app')

@section('body')

<h1>Tela de Cadastro de Animais</h1>

<div class="card">
    <div class="card-header">
      Dados do Animal
    </div>
    <div class="card-body">


        @isset($animal)
            <form method="post" action="{{ route('animal.update',$animal->id) }}">
        @else
            <form method="post" action="{{ route('animal.store') }}">
        @endisset

            @csrf
          <tr>
            <div class="mb-3">
                <label for="animal" class="form-label">Tipo de Animal</label>
                <input type="text" name="animal" value="{{old('animal',$animal->animal ?? '')}}"  class="form-control">
              @foreach ($errors->get('animal') as $message) 
                {{$message}}
              @endforeach
            </div>

            <div class="mb-3">
              <label for="porte" class="form-label">Porte do Animal</label>
              <input type="text" name="porte" value="{{old('porte',$animal->porte ?? '')}}"  class="form-control">
            @foreach ($errors->get('porte') as $message) 
              {{$message}}
            @endforeach
            </div>

            <div class="mb-3">
              <label for="qta" class="form-label">Qtd do Animal</label>
              <input type="number" name="qtd" value="{{old('qtd',$animal->qtd ?? '')}}" class="form-control" >
            @foreach ($errors->get('qtd') as $message) 
              {{$message}}
            @endforeach
            </div>
          </tr>
            <input type="submit" value="Enviar" class="btn btn-primary">
          </form>
    </div>
</div>
@endsection