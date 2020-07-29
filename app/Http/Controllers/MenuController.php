<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Helper;
use Config;
use Session;
use Redirect;

class MenuController extends Controller
{
    public function index(){
        $restaurant_id              = '1';
        $base_url                   = Config::get('constant.BASE_URL').'menu?restaurant_id='.$restaurant_id;
        $method                     = 'GET';
        $get_result                 = Helper::callAPI($method, $base_url, array());
        if($get_result['success']) {
            $return                 = $get_result;
        }else{
            $return                 = array();
        }
        return view('Menu')->with(['result' => $return]);
    }  
}
