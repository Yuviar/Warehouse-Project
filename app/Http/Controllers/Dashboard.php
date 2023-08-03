<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    function index(){
        return view('dashboard.main');
    }
}
