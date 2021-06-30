@extends('layouts.default')

@section('content')
<h2>Adicionando carro</h2>

<form action="{{ route('veiculo.update', $veiculo) }}" method="post">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <input type="hidden" name="proprietario" value="{{ Auth::guard()->user()->name }}">

    <label for="modelo" class="form-label">Modelo</label>
    <input type="text" name="modelo" class="form-control" id="modelo" value="{{ $veiculo->modelo }}" required>

    <label for="marca" class="form-label">Marca</label>
    <input type="text" name="marca" class="form-control" id="marca" value="{{ $veiculo->marca }}" required>

    <label for="porte" class="form-label">Porte</label>
    <input type="text" name="porte" class="form-control" id="porte" value="{{ $veiculo->porte }}" required>

    <label for="cor" class="form-label">Cor</label>
    <input type="text" name="cor" class="form-control" id="cor" value="{{ $veiculo->cor }}" required>

    <label for="ano" class="form-label">Ano</label>
    <input type="number" name="ano" class="form-control" id="ano" value="{{ $veiculo->ano }}" required>

    <label for="fipe" class="form-label">Fipe</label>
    <input type="number" name="fipe" class="form-control" id="fipe" value="{{ $veiculo->fipe }}" required>
    
    <label for="km" class="form-label">Quilometragem</label>
    <input type="number" name="km" class="form-control" id="km" value="{{ $veiculo->km }}" required>
        
    <label for="placa" class="form-label">Placa</label>
    <input type="text" name="placa" class="form-control" id="placa" value="{{ $veiculo->placa }}" required

    <label for="renavam" class="form-label">Renavam</label>
    <input type="text" name="renavam" class="form-control" id="renavam" value="{{ $veiculo->renavam }}" required>
  </div>
  <button class="btn btn-success">Salvar</button>
  <a href="{{ url("/home") }}" class="btn btn-primary">Cancelar</a>
  <a onclick="return confirm('Você confirma a exclusão?')" href="{{ url("/veiculo/destroy/{$veiculo->id}") }}" class="btn btn-danger">Deletar</a>
</form> 

@endsection