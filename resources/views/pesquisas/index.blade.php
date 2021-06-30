@extends('layouts.default')

@section('content')
<h2>Pesquisar</h2>

<form action="{{ url("/busca/search") }}" method="get">
{{ csrf_field() }}

  <div class="mb-3">
    <label for="placa" class="form-label">Placa</label>
    <input type="text" name="placa" class="form-control" id="placa" required>

    <label for="renavam" class="form-label">Renavam</label>
    <input type="text" name="renavam" class="form-control" id="renavam" required>
  </div>
  <button class="btn btn-success">Buscar</button> <br> <br>
  <img src="img/base.jpg" width="1700px" height="750px" alt="searchCar">
</form>
  <div>
@endsection


