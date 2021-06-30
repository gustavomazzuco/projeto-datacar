<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  private function validatorUpdate(Request $request)
  {
    // validation rules.
    $rules = array(
      'name' => 'required|string|max:255',
      'email' => 'email|string|max:255',
      'password' => 'confirmed',
      'cpfcnpj' => 'required|string|max:20',
      'tipousuario' => 'int',
    );

    // custom validation error messages.
    $messages = array(
      'name.required' => 'Por favor informe um nome válido',
      'email.required' => 'Por favor informe um e-mail válido',
      'cpfcnpj.required' => 'Por favor informe um CPF/CNPJ válido',
      'email.email' => 'Por favor informe um e-mail válido',
      'email.unique' => 'Este usuário já se encontra em uso',
      'password.confirmed' => 'Confirme a repetição de senha correta',
    );

    $labels = array(
      "name" => "nome",
      "email" => "e-mail",
      "password" => "senha",
      "cpfcnpj" => "cpf/cnpj",
      "tipousuario" => "tipo de usuario",
    );

    // validate the request.
    $request->validate($rules, $messages, $labels);
  }

  public function edit(User $user)
  {
    return view('users.edit', array('user' => $user));
  }

  public function update(Request $request, User $user)
  {
    
    $this->validatorUpdate($request);

    $user->name = $request->name;
    $user->cpfcnpj = $request->cpfcnpj;
    $user->email = $user->email;
    $user->tipousuario = $user->tipousuario;
    if(!empty($request->password))
    {
      $user->password = Hash::make($request->password);
    }
    $user->save();

    return redirect()
      ->route('home')
      ->with('success', 'Usuário alterado com sucesso!');
  }

}