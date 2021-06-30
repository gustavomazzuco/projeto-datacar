@extends('layouts.default')

@section('content')
<h2>Adicionar avaliação</h2>

<form action="{{ url("/avaliacoes/create/{$id}") }}" method="post">
{{ csrf_field() }}

  <input type="hidden" name="id" value="{{ $id }}">

  <div class="mb-3">
    <label for="comentario" class="form-label">Comentário</label>
    <input type="text" name="comentario" class="form-control" id="ano" required>

    <label for="nota" class="form-label">Nota</label>
    <input type="text" name="nota" class="form-control" id="cor" required>
  </div>
  <button class="btn btn-success">Salvar</button>
</form>
<br>
<div style="margin-bottom: 16px;">
  <a href="{{ url("/buscaId/{$id}") }}" class="btn btn-primary">Cancelar</a>
</div>
@endsection