<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Helper;
use Config;
use Session;
use Redirect;

class AddonController extends Controller
{
    public function index(){
        $this->validate(request(), [
            'addon'           => 'required',
            'product'         => 'required',
            'addgroup'        => 'required',
            'Taxable'         => 'required',
            'Quantitative'    => 'required',
            'price'           => 'required'
        ]);
        $data                       = array(); 
        $base_url                   = Config::get('constant.BASE_URL').'addon'; 
        $data['addongroup_code']    = request('addgroup');
        $data['addonname']          = request('addon');
        $data['taxable']            = request('Taxable');
        $data['quantitative']       = request('Quantitative');
        $data['unitPrice']          = request('price');
        $data['restaurant_id']      = '1';
        $method                     = 'POST';
        $get_result                 = Helper::callAPI($method, $base_url, $data);
        if($get_result['success']){
            Session::flash('message', "<div id='toast-success' class='alert'>Addon Created Successfully...</div>");
            return Redirect::to('addon');
        }else{  
            Session::flash('message', "<div id='toast-danger' class='alert error-by-form'>Unable to create addon!!</div>");
            return Redirect::back();
        }
    }  

    public function getaddongroup(){
        $this->validate(request(), [
            'proid'       => 'required'
        ]);
        $productid       = request('proid');
        $result = Helper::get_all_addongroup($productid,'');
        $html = '';
        if(!empty($result)){
            foreach($result as $value){
                $html .= '<option value="'.$value['addOnGroupId'].'">'.$value['name'].'</option>';
            }
        }else{
            $html .= '<option value="">choose any one</option>';
        }    
        return $html;
    }  
}
