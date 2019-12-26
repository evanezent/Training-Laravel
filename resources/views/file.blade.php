@extends('layouts.app')

@section('content')
<form action="{{url('uploadd')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <b>File Gambar</b><br />
        <input type="file" name="file">
    </div>

    <button type="submit" value="Upload" class="btn my-btn login-btn">UPLOAD</button>
</form>
@endsection