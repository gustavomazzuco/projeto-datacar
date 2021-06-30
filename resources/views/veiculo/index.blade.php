@extends('layouts.default')

@section('content')
<h2>Veiculo</h2>

<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th class="text-center">Proprietario</th>
      <th class="text-center">Nome do carro</th>
      <th class="text-center">Marca</th>
      <th class="text-center">Porte</th>
      <th class="text-center">Ano</th>
      <th class="text-center">Km</th>
      <th class="text-center">Cor</th>
      <th class="text-center">Fipe</th>
      <th class="text-center">Placa</th>
      <th class="text-center">Renavam</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="text-center">{{$veiculo->proprietario}}</td>
      <td class="text-center">{{$veiculo->modelo}}</td>
      <td class="text-center">{{$veiculo->marca}}</td>
      <td class="text-center">{{$veiculo->porte}}</td>
      <td class="text-center">{{$veiculo->ano}}</td>
      <td class="text-center">{{$veiculo->km}}</td>
      <td class="text-center">{{$veiculo->cor}}</td>
      <td class="text-center">{{$veiculo->fipe}}</td>
      <td class="text-center">{{$veiculo->placa}}</td>
      <td class="text-center">{{$veiculo->renavam}}</td>
    </tr>
  </tbody>
</table>

<h2>Comentários</h2>
<a href="{{ url("/avaliacoes/create/{$veiculo->id}") }}" class="btn btn-success btn-sm">+</a>
<br>
<br>
<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th class="text-center">Texto</th>
      <th class="text-center">Avaliação</th>
    </tr>
  </thead>
  <tbody>
    @Foreach($avaliacoes as $avaliacao)
    <tr>
      <td class="text-center">{{$avaliacao->comentario}}</td>
      <td class="text-center">{{$avaliacao->nota}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<h2>Serviços</h2>
<a href="{{ url("/servicos/create/{$veiculo->id}") }}" class="btn btn-danger btn-sm">+</a>
<br>
<br>
<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th class="text-center">Servico</th>
      <th class="text-center">Data</th>
      <th class="text-center">Valor</th>
      <th class="text-center">Mecanica</th>
    </tr>
  </thead>
  <tbody>
    @Foreach($servicos as $servico)
    <tr>
      <td class="text-center">{{$servico->descricao}}</td>
      <td class="text-center">{{$servico->dataservico}}</td>
      <td class="text-center">{{$servico->valor}}</td>
      <td class="text-center">{{$servico->mecanica}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
