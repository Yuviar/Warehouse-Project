<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function index(){
        $stok = products::count();
        return view('dashboard.main', compact('stok'));
    }
}
