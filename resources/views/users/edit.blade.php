@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-sm-center">

        <form class="col-sm-8" action="{{ route('users.update', $user) }}" method="post">
            @csrf
            @method('PUT')
            <fieldset>
                <h2 class="title">Meu Perfil</h2>
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" required value="{{ old("name", $user->name) }}" >
                
                    <!-- @if ($errors->has('name'))
                    <span class="invalid-feedback help-block" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif -->

                </div>
                <div class="form-group">
                    <label for="cpfcnpj">CPJ/CNPJ</label>
                    <input type="text" class="form-control decimal" name="cpfcnpj" id="cpfcnpj" required value="{{ old("cpfcnpj", $user->cpfcnpj) }}">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control decimal" name="email" disabled="disabled" id="email" value="{{ old("email", $user->email) }}">
                
                    <!-- @if ($errors->has('email'))
                    <span class="invalid-feedback help-block" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif -->
                
                </div>
                <div>
                    <label for="tipousuario">Tipo de Pessoa: </label>
                    <input class="form-control" name="tipousuario" id="tipousuario" disabled="disabled" value="{{ old("tipousuario", $user->tipousuario) }}">
                </div>
                <div>
                    <label for="password">Senha: </label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div>
                    <label for="password-confirm">Repita sua Senha: </label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                </div>
                <!-- <div class="form-group @if ($errors->has('password')) has-error @endif">
                    <label class="control-label" for="password">Nova Senha de Acesso</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @if ($errors->has('password'))
                    <span class="invalid-feedback help-block" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    </div>
                    <div class="form-group">
                    <label class="control-label" for="password_confirmation">Repitir a Nova Senha</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div> -->
                <br>
                <button class="btn btn-success">Salvar</button>
                <a href="{{url('home')}}" class="btn btn-primary">Voltar</a>
            </fieldset>
        </form>
    </div>
</div>
@endsection