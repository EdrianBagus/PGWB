@extends('master')
@section('content')
<form method="POST" action="/produk/store" >
  @csrf
    <div class="mb-3">
      <label for="" class="form-label" placeholder="produk">Nama Produk</label>
      <input type="text" class="form-control" name="produk" id="produk" aria-describedby="">
    <div class="mb-3">
      <label for="" class="form-label" placeholder="Deskripsi Produk">Deskripsi</label>
      <input type="text" class="form-control" name="deskripsi" id="deskripsi">
    </div>
    <div class="mb-3">
        <label for="" class="form-label" placeholder="Stock Produk">Stock</label>
        <input type="text" class="form-control" name="stock" id="stock">
      </div>
      <div class="mb-3">
        <label for="" class="form-label" placeholder="Harga Produk">Harga</label>
        <input type="text" class="form-control" name="harga" id="harga">
      </div>
      <div class="mb-3">
        <label for="" class="form-label" placeholder="ID Produk">Kategori_Id</label>
        <input type="text" class="form-control" name="kategori_id" id="kategori_id">
      </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
@endsection
