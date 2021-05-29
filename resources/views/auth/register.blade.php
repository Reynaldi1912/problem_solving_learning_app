@extends('layouts.app')

@section('content')
<div class=" container pt-5 pb-5 mt-5 mb-5" style="width:550px">
<div class="content text-center">
    <img src="assets/img/logo.png" width="100px" class="pb-4" alt="">
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="text-center"><h1>{{ __('Daftar') }}</h1></div>

                <div class="pt-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group col mt-3">
                            <label for="name" class="row-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="row-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col mt-3">
                            <label for="email" class="row-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="row-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- username -->
                        <div class="form-group col mt-3">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="row-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- endusername -->

                        <div class="form-group col mt-3">
                            <label for="password" class="row-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="row-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col mt-3">
                            <label for="password-confirm" class="row-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="row-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group mt-3 ">
                            <div class="col text-center d-grid gap-2">
                                    <button type="submit" class="btn text-center text-white" style="background-color:#F67451;">
                                        {{ __('Daftar') }}
                                    </button>
                            </div>
                            <div class="form-group mt-3 ">
                                <div class="col text-center">
                                    <h6 class="text-center mt-4">
                                        Sudah Mendaftar ?
                                        <a href={{url('/login')}}>Masuk</a>
                                    </h6>
                                </div>   
                            <div class="form-group mt-3 ">
                                <div class="col text-center">
                                    <p style="color:#8c8c8c">Atau</p>
                                </div>       
                            <div class="form-group mt-3">
                            <div class="col text-center ">
                                <a href="{{ url('auth/github') }}" class="d-grid gap-2">
                                    <button type="button" class="btn btn-outline-dark text-center">
                                        <i class="fab fa-github"></i>
                                        {{ __('Login dengan Github') }}
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
