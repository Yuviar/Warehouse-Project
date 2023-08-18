<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function index(){
        $products = product::select('*')->get();
        $categories = Category::select('*')->get();
        return view('dashboard.barang.daftarBarang', compact(['products', 'categories']));
    }
    function tambah(Request $request){
        product::create([
            'name' => $request->nama,
            'category_id' => $request->kateg,
            'img' => $request->gambar,
            'qty' => $request->jumlah,
            'price' => $request->harga
        ]);
        return redirect()->back();
    }
}
