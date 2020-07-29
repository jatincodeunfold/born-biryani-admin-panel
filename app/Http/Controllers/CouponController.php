<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Helper;
use Config;
use Session;
use Redirect;

class CouponController extends Controller
{
    public function index(){
        $restaurant_id              = '1';
        $base_url                   = Config::get('constant.BASE_URL').'coupons?restaurant_id='.$restaurant_id;
        $method                     = 'GET';
        $get_result                 = Helper::callAPI($method, $base_url, array());
        if($get_result['success']) {
            $return                 = $get_result;
        }else{
            $return                 = array();
        }
        return view('Coupons')->with(['result' => $return]);
    }  

    public function addcoupon(){
        $this->validate(request(), [
            'Coupon'           => 'required',
            'price'            => 'required',
            'CouponType'       => 'required',
            'ExpiryDate'       => 'required',
            'MaxLimit'         => 'required',
            'MinLimit'         => 'required'
        ]);
        $data                       = array(); 
        $base_url                   = Config::get('constant.BASE_URL').'coupon';
        $data['coupon_name']        = request('Coupon');
        $coucode                    = request('Code');
        if(isset($coucode) && !empty($coucode) ){
            $data['code']        = $coucode;
        }
        $data['coupon_price']       = request('price');
        $data['coupon_type']        = request('CouponType');
        $data['expiry_date']        = request('ExpiryDate');
        $data['max_limit']          = request('MaxLimit');
        $data['min_total']          = request('MinLimit');
        $data['restaurant_id']      = '1';
        $method                     = 'POST';
        $get_result                 = Helper::callAPI($method, $base_url, $data);
        if($get_result['success']){
            Session::flash('message', "<div id='toast-success' class='alert'>Coupon Added Successfully...</div>");
            return Redirect::to('addcoupon');
        }else{  
            Session::flash('message', "<div id='toast-danger' class='alert error-by-form'>Error to create a Coupon...</div>");
            return Redirect::back();
        }
    }  
}
