<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <style>
        .login {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('{{ asset('images/header.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .login-heading {
            font-weight: 300;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
            background: rgb(24, 24, 105);
            color: white;
        }

        .btn-login:hover {
            color: white;
            background: rgb(40, 40, 140);
        }
    </style>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
                <center>
                    <img src="{{ asset('images/icon.png') }}"
                        style="width: 350px; margin: 150px; height: 350px; margin: 150px;" alt="">
                </center>
            </div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Login Admin</h3>
                                <p>Silahkan Login</p>

                                <!-- Sign In Form -->
                                <form action="{{ __('login') }}" method="POST">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Masukan email" id="floatingInput">
                                        <label for="floatingInput">Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Masukan Password" id="floatingPassword">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-login text-uppercase fw-bold mb-2"
                                            type="submit">Login</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
