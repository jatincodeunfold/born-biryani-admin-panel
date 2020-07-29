<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Helper;
use Config;
use Session;
use Redirect;

class ShippingmethodController extends Controller
{
    public function index(){
        return view('Shippingmethod');
    }

    public function addshipping(){
        $this->validate(request(), [
            'Method'           => 'required',
            'price'            => 'required',
            'Tax'              => 'required',
            'Type'             => 'required'
        ]);
        $data                       = array(); 
        $base_url                   = Config::get('constant.BASE_URL').'add_shipping'; 
        $data['name']               = request('Method');
        $data['shippingprice']      = request('price');
        $data['shippingtax']        = request('Tax');
        $data['shippingtype']       = request('Type');
        $data['restaurant_id']      = '1';
        $method                     = 'POST';
        $get_result                 = Helper::callAPI($method, $base_url, $data);
        if($get_result['success']){
            Session::flash('message', "<div id='toast-success' class='alert'>Shipping Method Created Successfully...</div>");
            return Redirect::to('addshipping');
        }else{  
            Session::flash('message', "<div id='toast-danger' class='alert error-by-form'>Error to create a Shipping Method...</div>");
            return Redirect::back();
        }
    }
}
