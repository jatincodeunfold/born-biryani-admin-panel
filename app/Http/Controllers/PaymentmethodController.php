<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentmethodController extends Controller
{
    public function index(){
        return view('Paymentmethods');
    }
    
    public function addpayment(){
        return view('addPaymentMethod');
    }
}
