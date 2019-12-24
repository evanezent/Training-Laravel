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
                    <h1>1301170073</h1>
                    <form>
                        <input type="text" name="name" class="question" id="nme" required autocomplete="off" value="Nama"/>
                        <label for="nme"></label>

                        <input type="text" name="angkatan" class="question" id="nme" required autocomplete="off" value="Angkatan"/>
                        <label for="nme"></label>

                        <input type="text" name="jurusan" class="question" id="nme" required autocomplete="off" value="Jurusan"/>
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