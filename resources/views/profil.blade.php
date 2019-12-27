@extends('layouts.navbar')

@section('content')
<div class="row mx-2">
    <div class="col-md justify-content-center profil-box">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="profil-foto">
                    <div class="profil-img">
                        <img class="image" src="{{ asset('uploads/'.$data[0]->foto_profil) }}">
                        <div class="profil-modal">
                            <button type="button" class="btn my-btn login-btn shadow" data-toggle="modal" data-target="#exampleModalCenter">Edit foto</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" style="background-color: unset; border:unset">
                        <div class="wrapper">
                            <form action="{{url('uploadd')}}" method="POST" enctype="multipart/form-data">
                                <div class="file-upload">
                                    {{ csrf_field() }}
                                    <input type="file" name="file" />
                                    <i class="fa fa-arrow-up"></i>
                                    <input type="hidden" value="{{$data[0]->nim}}" name="nim">
                                </div>
                                <div class="text-upload text-center mt-2">
                                    <button type="submit" style="background-color: transparent; border: none;">UPLOAD</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
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
                            <div class="col-md-12" style="text-align: right">
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