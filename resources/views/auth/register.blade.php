<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="stylesheet" href="<?php echo asset('css/CadastroUsuario.css')?>" type="text/css">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <h2>Cadastro</h2>
                <div class="card-body">
                    <form class="form-group" action="{{ route('register') }}" method="POST">
                        {{ csrf_field() }}
                        <div>
                            <label for="name">Nome: </label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 

                        </div>
                        <div>
                            <label for="email">E-mail: </label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div>
                            <label for="">CPF/CNPJ: </label>
                            <input type="text" class="form-control" name="cpfcnpj">
                        </div>
                        <div>
                            <label for="">Tipo de Pessoa: </label>
                            <select class="form-control" name="tipousuario" id="tipousuario">
                                <option value="1">-SELECIONE-</option>
                                <option value="1">Usuario</option>
                                <option value="2">Revenda</option>
                                <option value="3">Mecanico</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <label for="password">Senha: </label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div>
                            <label for="password-confirm">Repita sua Senha: </label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-success btn-block">Salvar</button>
                        </div>
                    </form>
                    <br>
                    <div class="d-grid gap-2 mx-auto">
                        <a href="{{route('login')}}" class="btn btn-danger btn-block">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>