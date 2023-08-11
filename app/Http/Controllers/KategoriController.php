<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function index(){
        $categories = Category::get();
        return view('dashboard.barang.kategori', compact('categories'));
    }
    function tambah(Request $request){
        Category::create([
            'name' => $request->nama
        ]);
        return redirect()->back();
    }
}
