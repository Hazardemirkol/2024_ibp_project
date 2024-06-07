<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }
    public function personal()
    {
        // Here you can add any additional logic if needed
        return view('Personal');
    }

}
