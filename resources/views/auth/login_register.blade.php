@extends('layouts.app')

@section('content')
<div class="row mx-2">
    <div class="col-md justify-content-center card-box">
        <div class="row">
            <div class="col-lg-6 d-flex text-center" style="color:#27abc2 ;align-items: center; font-size: 1.5em; line-height: 1.5; font-family: 'Anton', sans-serif;">
                <b>Halo masa depan bangsa! <br> Silahkan login atau register jika belum memiliki akun ya !</b>
            </div>
            <div class="col-lg-6">
                <div class="logreg-box">
                    <div class="logreg-tab mb-4">
                        <ul class="list-group list-group-horizontal-sm justify-content-between text-center">
                            <li class="li-item active" onclick="funSesi1()"><strong>Login</strong></li>
                            <li class="li-item" onclick="funSesi2()"><strong>Register</strong></li>
                        </ul>
                    </div>
                    <div class="logreg-body">
                        <div id="login">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <input id="nme number" type="text" class="question mt-3 @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autofocus>
                                <label class="nme"><span>{{ __('NIM') }}</span></label>

                                <input id="nme password" type="password" class="question mt-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <label for="password" class="nme"><span>{{ __('Password') }}</span></label>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <div class="form-group row mb-0">
                                    <div class="col-md-10" style="text-align: right">
                                        <button type="submit" class="btn my-btn login-btn shadow">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="register">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <input id="nme name" type="text" class="question mt-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <label for="name" class="nme"><span>{{ __('Nama') }}</span></label>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <input id="nme nim" type="number" class="question mt-3 @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autocomplete="nim" autofocus>
                                <label for="email" class="nme"><span>{{ __('NIM') }}</span></label>

                                @error('nim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <input id="nme angkatan" type="number" class="question mt-3 @error('angkatan') is-invalid @enderror" name="angkatan" value="{{ old('angkatan') }}" required autocomplete="angkatan" autofocus>
                                <label for="angkatan" class="nme"><span>{{ __('Angkatan') }}</span></label>

                                @error('angkatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <input id="nme jurusan" type="text" class="question mt-3 @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ old('jurusan') }}" required autocomplete="jurusan" autofocus>
                                <label for="jurusan" class="nme"><span>{{ __('Jurusan') }}</span></label>

                                @error('jurusan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <input id="nme password-reg" type="password" class="question mt-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <label for="password" class="nme"><span>{{ __('Password') }}</span></label>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <input id="nme password-confirm" type="password" class="question mt-3" name="password_confirmation" required autocomplete="new-password">
                                <label for="password-confirm" class="nme"><span>{{ __('Confirm Password') }}</span></label>

                                <div class="form-group row mb-0">
                                    <div class="col-md-10" style="text-align: right">
                                        <button type="submit" class="btn my-btn login-btn shadow">
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