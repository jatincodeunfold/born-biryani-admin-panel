<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Helper;
use Config;
use Session;
use Redirect;

class AddongroupController extends Controller
{
    public function index(){
        $this->validate(request(), [
            'groupname'       => 'required',
            'product'         => 'required',
            'Type'            => 'required',
            'description'     => 'required',
            'required'        => 'required'
        ]);
        $data                       = array(); 
        $base_url                   = Config::get('constant.BASE_URL').'addon_group'; 
        $data['product_code']       = request('product');
        $data['groupname']          = request('groupname');
        $data['type']               = request('Type');
        $data['isRequired']         = request('required');
        $data['description']        = request('description');
        $data['restaurant_id']      = '1';
        $method                     = 'POST';
        $get_result                 = Helper::callAPI($method, $base_url, $data);
        if($get_result['success']){
            Session::flash('message', "<div id='toast-success' class='alert'>Addon Group Created Successfully...</div>");
            return Redirect::to('addongroup');
        }else{  
            Session::flash('message', "<div id='toast-danger' class='alert error-by-form'>Error to create a Addon Group...</div>");
            return Redirect::back();
        }
    }  

    public function getproducts(){
        $this->validate(request(), [
            'catid'       => 'required'
        ]);
        $categoryid       = request('catid');
        $result = Helper::get_all_products('',$categoryid);
        $html = '';
        if(!empty($result)){
            foreach($result as $value){
                $html .= '<option value="'.$value['productId'].'">'.$value['name'].'</option>';
            }
        }else{
            $html .= '<option value="">choose any one</option>';
        }    
        return $html;
    }
}
