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

<div class="ui basic modal">
    <div class="ui icon header">
        <i class="archive icon"></i>
        Archive Old Messages
    </div>
    <div class="content">
        <p>Your inbox is getting full, would you like us to enable automatic archiving of old messages?</p>
    </div>
    <div class="actions">
        <div class="ui red basic cancel inverted button">
            <i class="remove icon"></i>
            No
        </div>
        <div class="ui green ok inverted button">
            <i class="checkmark icon"></i>
            Yes
        </div>
    </div>
</div>
@endsection