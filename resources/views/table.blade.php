@extends('layouts.navbar')

@section('content')
<div class="d-flex justify-content-center">
    <table class="table table-responsive">
        <thead class="thead-dark mx-auto">
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Angkatan</th>
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
</div>
@endsection