<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;
use App\Avaliacao;
use App\Servico;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $query = Veiculo::getQuery();

        $query->where('proprietario', auth()->user()->name);

        $veiculos = $query->get();

        return view('home')
        ->with(compact('veiculos'));
    }

    public function busca()
    {
        return view('pesquisas.index');
    }

    public function buscaDireta($id)
    {
        $veiculo = Veiculo::find($id);

        if ($veiculo) {
            $avaliacoes = Avaliacao::where('idVeiculo', $veiculo->id)->get();
            $servicos = Servico::where('idVeiculo', $veiculo->id)->get();

            return view("veiculo.index", ["veiculo" => $veiculo, "avaliacoes" => $avaliacoes, "servicos" => $servicos]);
        }

        return view('pesquisas.index');
    }

    public function search(Request $request)
    {
        $placa = $request->placa;
        $renavam = $request->renavam;

        $veiculo = Veiculo::where('placa', $placa)->where('renavam', $renavam)->first();

        if ($veiculo) {
            $avaliacoes = Avaliacao::where('idVeiculo', $veiculo->id)->get();
            $servicos = Servico::where('idVeiculo', $veiculo->id)->get();

            return view("veiculo.index", ["veiculo" => $veiculo, "avaliacoes" => $avaliacoes, "servicos" => $servicos]);
        }

        return view('pesquisas.index');
    }
}
