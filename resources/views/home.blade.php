@extends('layouts.default')

@section('content')
<div>
    <h1>Olá {{Auth::guard()->user()->name}}</h1>

    <h5 style="display: inline; background: rgb(255, 208, 0); border-radius: 5px; padding: 2px">Meus Carros</h5> <br>

    <table class="table table-bordered table-striped table-hover" style="margin-top: 12px">
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
            <th class="text-center">Editar</th>
            <th class="text-center">Comentário</th>
            <th class="text-center">Serviço</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($veiculos as $veiculo)
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
                    <td class="text-center"><a href="{{ url("/veiculo/edit/{$veiculo->id}") }}" class="btn btn-sm"><img src="img/lapis.png" width="17px" height="17px" alt=""></a></td>
                    <td class="text-center"><a href="{{ url("/avaliacoes/create/{$veiculo->id}") }}" class="btn btn-success btn-sm">+</a></td>
                    <td class="text-center"><a href="{{ url("/servicos/create/{$veiculo->id}") }}" class="btn btn-danger btn-sm">+</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
      <div style="margin-bottom: 16px;">
        <a href="{{ url("/veiculo/create") }}" class="btn btn-primary">Adicionar Carro</a>
    </div>
</div>
@endsection