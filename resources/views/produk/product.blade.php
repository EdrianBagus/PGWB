@extends('master')
@section('content')
<a href="{{route('tambahProduk')}}" class="btn btn-success btn-flat table-sm float-right mb-2  ">Tambah</a>
    <table class="table table-bordered table-dark table-borderless table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>PRODUK</th>
            <th>DESKRIPSI</th>
            <th>STOCK</th>
            <th>HARGA</th>
            <th>KATEGORI_ID</th>
            <th>AKSI</th>
        </tr>
        </thead>
        
            
        <tbody>
        @foreach ($getProduk as $produk)
        <tr>
            <td>{{ $produk->id }}</td>
            <td>{{ $produk->produk }}</td>
            <td>{{ $produk->deskripsi }}</td>
            <td>{{ $produk->stock }}</td>
            <td>{{ $produk->harga }}</td>
            <td>{{ $produk->kategori_id }}</td>
            
            <td>
                <a class="btn btn-flat btn-warning text-white">edit</a> 
                <a href="{{route('produkDelete', $produk->id)}}" class="btn btn-flat btn-danger">delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
