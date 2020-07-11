<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingmethodController extends Controller
{
    public function index(){
        return view('Shippingmethod');
    }

    public function addshipping(){
        return view('addShippingMethod');
    }
}
