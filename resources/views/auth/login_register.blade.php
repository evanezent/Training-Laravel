@extends('layouts.app')

@section('content')
<div class="row mx-2">
    <div class="col-md justify-content-center card-box">
        <div class="row">
            <div class="col-lg-6 d-flex text-center" style="align-items: center; font-size: 1.5em; font-family: 'Anton', sans-serif;">
                <b>Halo masa depan bangsa! <br> Silahkan login atau regsiter jika belum memiliki akun ya !</b>
            </div>
            <div class="col-lg-6">
                <div class="logreg-box">
                    <div class="logreg-tab mb-4">
                        <ul class="list-group list-group-horizontal-sm justify-content-between text-center">
                            <li class="active" onclick="funSesi1()"><strong>Login</strong></li>
                            <li class="" onclick="funSesi2()"><strong>Register</strong></li>
                        </ul>
                    </div>
                    <div class="logreg-body">
                        <div id="login" style="display: none">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right" style="color:white">{{ __('NIM') }}</label>

                                    <div class="col-md-6">
                                        <input id="number" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right" style="color:white">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-10" style="text-align: right">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="register" style="display: block">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right" style="color:white">{{ __('Nama') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right" style="color:white">{{ __('NIM') }}</label>

                                    <div class="col-md-6">
                                        <input id="nim" type="number" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autocomplete="nim" autofocus>

                                        @error('nim')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="angkatan" class="col-md-4 col-form-label text-md-right" style="color:white">{{ __('Angkatan') }}</label>

                                    <div class="col-md-6">
                                        <input id="angkatan" type="number" class="form-control @error('angkatan') is-invalid @enderror" name="angkatan" value="{{ old('angkatan') }}" required autocomplete="angkatan" autofocus>

                                        @error('angkatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jurusan" class="col-md-4 col-form-label text-md-right" style="color:white">{{ __('Jurusan') }}</label>

                                    <div class="col-md-6">
                                        <input id="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror" name="name" value="{{ old('jurusan') }}" required autocomplete="jurusan" autofocus>

                                        @error('jurusan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right" style="color:white">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color:white">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-10" style="text-align: right">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection