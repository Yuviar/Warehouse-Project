<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function index(){
        $products = product::select('*')->get();
        return view('dashboard.barang.daftarBarang', compact('products'));
    }
}
