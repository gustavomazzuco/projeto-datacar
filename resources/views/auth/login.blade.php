<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="sortcut icon" href="Logo1.png" type="image/x-icon" />;
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    
    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
</head>
<body>
    <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div>
                        <h2>DataCar</h2>
                    </div>
                    <div class="card-body">
                        <h4>Login</h4>
                        <form action="{{route('login')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Informe seu e-mail..." autofocus>
                            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Informe sua senha...">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-block">Entrar</button>
                            </div>
                        </form>
                        <br>
                    <div class="d-grid">
                        <a type="button" class="btn btn-primary btn-block"
                            href="{{ url('/register') }}">Cadastre-se</a>
                    </div>
                </div>
                <!-- <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <a href="#">Esqueceu sua senha?</a>
                    </div>
                </div> -->

            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>