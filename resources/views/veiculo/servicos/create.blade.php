@extends('layouts.default')

@section('content')
<h2>Adicionar avaliação</h2>

<form action="{{ url("/servicos/create/{$id}") }}" method="post">
{{ csrf_field() }}

  <input type="hidden" name="id" value="{{ $id }}">

  <div class="mb-3">
    <label for="descricao" class="form-label">Serviço</label>
    <input type="text" name="descricao" class="form-control" id="descricao" required>

    <label for="dataservico" class="form-label">Data</label>
    <input type="date" name="dataservico" class="form-control" id="dataservico" required>

    <label for="valor" class="form-label">Valor</label>
    <input type="text" name="valor" class="form-control" id="valor" required>

    <label for="mecanica" class="form-label">Mecanica</label>
    <input type="text" name="mecanica" class="form-control" id="mecanica" required>
  </div>
  <button class="btn btn-success">Salvar</button>
</form>
<br>
<div style="margin-bottom: 16px;">
  <a href="{{ url("/buscaId/{$id}") }}" class="btn btn-primary">Cancelar</a>
</div>
@endsection