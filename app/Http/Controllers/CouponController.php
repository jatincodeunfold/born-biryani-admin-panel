<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(){
        return view('Coupons');
    }  

    public function addcoupon(){
        return view('Addcoupon');
    }  
}
