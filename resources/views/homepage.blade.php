@extends('layouts.app')

@section('content')
<div class="row mx-2">
    <div class="col-md justify-content-center global-box">
        <ul>
            <li>
                <span class="text-center mb-5">
                    <h1 class="mt-5"><strong>Selamat Datang<br>Ini adalah Aplikasi Dummy untuk belajar <br> LARAVEL</strong></h1>
                </span>
            </li>
            <li>
                <div class="d-flex justify-content-center box-user mt-5">
                    <a href="/loginregister" class="btn my-btn login-btn mr-2"><strong>Login</strong></a>
                </div>
            </li>
        </ul>


    </div>
</div>
@endsection