@extends('layout.main')

@section('title', 'Finances')

@section('body')
    <h1>Finances</h1>
<table class="table table-bordered">
  <thead>
    <tr>
        <th scope="col">Dia</th>
        <th scope="col">Semana</th>
        <th scope="col">Diária</th>
        <th scope="col">Depesa</th>
        <th scope="col">Horas</th>
        <th scope="col">Km</th>
        <th scope="col">Lucro</th>
        <th scope="col">R$ / Hr</th>
        <th scope="col">R$ / Km</th>
    </tr>
  </thead>

  
  <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Segunda</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td input>Terça</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>

    </tr>
  </tbody>
</table>



@endsection