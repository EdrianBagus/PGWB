<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $getKategori = Kategori::all();
        return view('produk.category',compact('getKategori'));
    }

    public function destroy($id)
    {
        $getKategori = Kategori::find($id);
        $getKategori->delete();
        return redirect()->back();
    }
}
