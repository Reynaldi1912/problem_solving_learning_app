@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5 pb-5 " style="width:500px">
<div class="content text-center">
    <img src="assets/img/logo.png" width="100px" class="pb-4" alt="">
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="text-center"><h1>{{ __('Masuk') }}</h1></div>

                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group col">
                            <label for="username" class="row-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="row-md-6">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col">
                            <label for="password" class="row-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="row-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                            <div class="form-group">
                                <div class="col text-end">
                                    <a class="btn btn-link text-center" style="color:#F67451" href="{{ route('password.request') }}">
                                        {{ __('Lupa Pasword?') }}
                                    </a>
                                </div>      
                            @endif

                        <div class="form-group mt-3 ">
                            <div class="col text-center d-grid gap-2">
                                    <button type="submit" class="btn text-white text-center" style="background-color:#F67451">
                                        {{ __('Masuk') }}
                                    </button>
                            </div>
                            <div class="form-group mt-3 ">
                                <div class="col text-center">
                                    <h6 class="text-center mt-4">
                                        Belum Punya Akun ?
                                        <a href={{url('/register')}}>Daftar</a>
                                    </h6>
                                </div>   
                           
                            <div class="form-group mt-3 ">
                                <div class="col text-center">
                                    <p style="color:#8c8c8c">Atau</p>
                                </div>       
                            <div class="form-group mt-3 pb-3">
                            <div class="col text-center d-grid gap-2">
                                <a href="{{ url('auth/github') }}" class="d-grid gap-2">
                                    <button type="button" class="btn btn-outline-dark text-center">
                                        {{ __('Login dengan Github') }}
                                        <i class="fab fa-github"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
