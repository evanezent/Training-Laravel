@extends('layouts.app')

@section('content')
<h1>{{Session::get('nama')}}</h1>
<a href="{{ url('logout') }}">LOGOUT</a>
<table class="ui celled table">
    <thead>
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>JURUSAN</th>
            <th>ANGKATAN</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr>
            <td data-label="NIM">{{ $item->nim }}</td>
            <td data-label="NAMA">{{ $item->nama }}</td>
            <td data-label="JURUSAN">{{ $item->jurusan }}</td>
            <td data-label="ANGKATAN">{{ $item->angkatan }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection