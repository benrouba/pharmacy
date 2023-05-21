<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="shortcut icon" href="{{asset('assets/img/logo.svg')}}" type="image/x-icon">
</head>

<body>
    @include('includes.header')
    <section>
        <div class="my_account_back_img">
            <div class="container">
                <div class="my_account d-flex align-items-center">
                    <span class="AvenirNextWorld f35 black_color fw_700">Mon compte
                    </span>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
         
                <div class="col-md-6 ">
                    @foreach ($errors as $error)
                        <p>please choose a region</p>
                    @endforeach
                    <form method="POST" action="{{ route('login.custom') }}" class="login p-4 ">
                        <span class="fw_700 AvenirNextWorld f20 black_color">connexion </span>
                        @csrf

                        <div class="form-group mt-3">
                            <label for="email" class="f14 AvenirNextWorld black_color">Adresse email
                            </label>
                            <input type="email" class="form-control f15 AvenirNextWorld black_color" id="email"
                                name="email" placeholder="Entrer votre email">
                        </div>
                        <div class="form-group mt-3">
                            <label for="password"class="f14 AvenirNextWorld black_color">Mot de pass</label>
                            <input type="password" class="form-control f15 AvenirNextWorld black_color"
                                id="password" name="password" placeholder="Entre votre mot de passe">
                        </div>
                        <div class="form-group mt-3 form-check d-flex align-items-center">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label f14 AvenirNextWorld black_color" name="remember"
                                for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="btn shop_now_btn w-100 text-white">connexion</button>
                       
                    </form>
                </div>

            </div>
        </div>
    </section>
    <script>
    </script>
    {{-- <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center ">Login</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                        autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me {{$errors}}
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button class="btn btn-dark btn-block">Signin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> --}}
   

</body>

</html>
