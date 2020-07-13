<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userauthentication extends Controller
{
    public function index(){
        return view('Login');
    }

    public function register(){
        return view('Register');
    }
}
