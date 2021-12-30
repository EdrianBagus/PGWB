<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $getProduk = Produk::all();
        return view('produk.product',compact('getProduk'));
    }

    public function destroy($id)
    {
        $getProduk = Produk::find($id);
        $getProduk->delete();
        return redirect()->back();
    }

    public function create()
    {
        return view('produk.create');
    }
    public function store(Produk $produk, Request $request)
    {
        $product = $produk->create($request->all());
        return redirect('/produk');
    }
}
