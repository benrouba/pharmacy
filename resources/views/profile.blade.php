<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Pharmacie Elchifaa</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{asset('assets/img/logo.svg')}}" type="image/x-icon">
</head>
<body>
    @include('includes.header')
    {{Session::get('name')}}
    {{Session::get('first_name')}}
    @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('utilisateur Profile') }}</div>

                <div class="card-body">
             
                        @csrf
                        @method('PUT')
                        
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="family_name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
        
                                <div class="col-md-6">
                                    <input id="family_name" type="text" class="form-control" name="family_name" value="{{ Auth::user()->family_name }}" required autocomplete="family_name" autofocus disabled>
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Numero de telephone') }}</label>
    
                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ Auth::user()->phone_number}}" required autocomplete="phone_number" disabled>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>
    
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ Auth::user()->address}}" required autocomplete="address" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>