<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddonController extends Controller
{
    public function index(){
        return view('Addon');
    }  
}
