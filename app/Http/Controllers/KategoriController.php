<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function index(){
        $categories = Category::get();
        $aksi = 'tambah';
        return view('dashboard.barang.kategori', compact('categories', 'aksi'));
    }
    function tambah(Request $request){
        Category::create([
            'name' => $request->nama
        ]);
        return redirect()->back();
    }
    function edit(Category $category){
        $aksi = 'edit';
        $target = $category;
        $categories = Category::get();
        return view('dashboard.barang.kategori', compact(['categories', 'aksi', 'target']));
    }
    function editJadi(Request $request, Category $category){
        Category::where('id', $category->id)->update([
            'name' => $request->nama
        ]);
        return redirect('/kategori-barang');
    }
    function hapus(Category $category){
        $aksi = 'hapus';
        $target = $category;
        $categories = Category::get();
        return view('dashboard.barang.kategori', compact(['categories', 'aksi', 'target']));
    }
    function hapusJadi(Request $request, Category $category){
        Category::where('id', $category->id)->delete();
        return redirect('/kategori-barang');
    }
}
