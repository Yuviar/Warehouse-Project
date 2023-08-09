<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function index(){
        $stok = product::count();
        return view('dashboard.main', compact('stok'));
    }
}
