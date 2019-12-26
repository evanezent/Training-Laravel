@extends('layouts.app')

@section('content')
<div class="row mx-2">
    <div class="col-md justify-content-center profil-box">
        <div class="row">
            <div class="col-lg-5">
                <div class="profil-foto">
                    <img class="ui medium circular image" src="{{ asset('image/me.jpg') }}">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="form-profil">
                    <h1>{{$data[0]->nim}}</h1>
                    <form method="POST" action="{{ url('/updateProfil') }}">
                        @csrf
                        <input type="hidden" name="nim" value="{{$data[0]->nim}}" />
                        <input type="text" name="name" class="question" id="nme" required autocomplete="off" value="{{$data[0]->nama}}" />
                        <label for="nme"></label>

                        <input type="text" name="angkatan" class="question" id="nme" required autocomplete="off" value="{{$data[0]->angkatan}}" />
                        <label for="nme"></label>

                        <input type="text" name="jurusan" class="question" id="nme" required autocomplete="off" value="{{$data[0]->jurusan}}" />
                        <label for="nme"></label>
                        <div class="row mb-0 mt-5">
                            <div class="col-md-10" style="text-align: left">
                                <button type="submit" class="btn my-btn login-btn shadow">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection