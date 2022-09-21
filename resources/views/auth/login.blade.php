<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link href="{{ asset('dist/css/adminlte.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/styles.css') }}" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/home') }}"> <img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }}"> </a>
    </div>
    <!-- /.login-logo -->

    <!-- /.login-box-body -->
    <div class="card borderded">
        <div class="card-body login-card-body borderded">
            <form method="post" action="{{ url('/login') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="Email"
                           class="form-control @error('email') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password"
                           name="password"
                           placeholder="Password"
                           class="form-control @error('password') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block text-white">Se connecter <i class="fa fa-arrow-right"></i></button>
                    </div>

                </div>
            </form>

            <p class="mb-1 mt-3 float-right">
                <a href="{{ route('password.request') }}">Mot de passe oublier</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>

</div>
<!-- /.login-box -->


<script src="{{ asset('dist/js/adminlte.js') }}" defer></script>

</body>
</html>
