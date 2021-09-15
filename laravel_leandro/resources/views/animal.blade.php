@extends("app")

@section("body")

    <h1>Tela de Animais</h1>
    <a href="{{ route('animal.new') }}" class="btn btn-success">Novo Animal</a>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Animal</th>
            <th scope="col">Porte</th>
            <th scope="col">Qtd</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($animais as $animal)
            <tr>
                <td>{{ $animal->id }}</td>
                <td>{{ $animal->animal }}</td>
                <td>{{ $animal ->porte}}</td>
                <td>{{ $animal ->qtd}}</td>
                <td><a href="{{route('animal.edit',$animal->id)}}" class="btn btn-success">Editar</a>
          </tr>    
            @endforeach
          
        </tbody>
    </table>

@endsection

