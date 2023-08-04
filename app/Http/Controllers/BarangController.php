<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function index(){
        $products = products::select('*')->get();
        return view('barang.daftarBarang', compact('products'));
    }
}
