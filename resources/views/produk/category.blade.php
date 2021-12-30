@extends('master')
@section('content')
<table class="table table-bordered table-dark table-borderless table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>nama</th>
            <th>DESKRIPSI</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($getKategori as $kategori)
        <tr>
            <td>{{ $kategori->id }}</td>
            <td>{{ $kategori->nama }}</td>
            <td>{{ $kategori->deskripsi }}</td>
            <td>
                <a href="{{route('kategoriDelete', $kategori->id)}}" class="btn btn-flat btn-danger">delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
