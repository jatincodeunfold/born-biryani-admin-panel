<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Helper;
use Config;
use Session;
use Redirect;

class PaymentmethodController extends Controller
{
    public function index(){
        return view('Paymentmethods');
    }
    
    public function addpayment(){
            $this->validate(request(), [
                'Method'           => 'required'
            ]);
            $data                       = array(); 
            $base_url                   = Config::get('constant.BASE_URL').'add_payment'; 
            $data['name']               = request('Method');
            $data['restaurant_id']      = '1';
            $method                     = 'POST';
            $get_result                 = Helper::callAPI($method, $base_url, $data);
            if($get_result['success']){
                Session::flash('message', "<div id='toast-success' class='alert'>Payment Method Created Successfully...</div>");
                return Redirect::to('addpayment');
            }else{  
                Session::flash('message', "<div id='toast-danger' class='alert error-by-form'>Error to create a Payment Method...</div>");
                return Redirect::back();
            }
    }
}
