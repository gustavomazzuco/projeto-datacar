<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;

class VeiculoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("veiculo.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veiculo = new Veiculo();
        $veiculo->modelo = $request->modelo;
        $veiculo->marca = $request->marca;
        $veiculo->cor = $request->cor;
        $veiculo->ano = $request->ano;
        $veiculo->fipe = $request->fipe;
        $veiculo->km = $request->km;
        $veiculo->placa = $request->placa;
        $veiculo->renavam = $request->renavam;
        $veiculo->porte = $request->porte;
        $veiculo->proprietario = $request->proprietario;

        $veiculo->save();
        return redirect("/buscaId/{$veiculo -> id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veiculo = Veiculo::find($id);
        return view('veiculo.edit', ["veiculo" => $veiculo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::find($id);
        $veiculo->proprietario = $request->proprietario;
        $veiculo->modelo = $request->modelo;
        $veiculo->marca = $request->marca;
        $veiculo->porte = $request->porte;
        $veiculo->cor = $request->cor;
        $veiculo->ano = $request->ano;
        $veiculo->fipe = $request->fipe;
        $veiculo->km = $request->km;
        $veiculo->placa = $request->placa;
        $veiculo->renavam = $request->renavam;
        $veiculo->save();

        return redirect("/home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculo = Veiculo::find($id);
        $veiculo->delete();

        return redirect("/home");
    }
}
