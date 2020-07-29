<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Helper;
use Config;
use Session;
use Redirect;

class CategoryController extends Controller
{

    public function index(){
        $this->validate(request(), [
            'category'    => 'required',
            'description' => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        
        $data                       = array(); 
        $image = request()->file('image');
        $img_link = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/restaurent/images');
        $image->move($destinationPath, $img_link);
        $return_url = Helper::image_base_url()."public/restaurent/images/".$img_link;

        $method                     = 'POST';
        ### category api call
        $base_url                   = Config::get('constant.BASE_URL').'category'; 
        $data['categoryname']       = request('category');
        $data['longDescription']    = request('description');
        $data['restaurant_id']      = '1';
        $data['img_link']           = $return_url;

        
        $get_result                 = Helper::callAPI($method, $base_url, $data);
        if($get_result['success']){
            Session::flash('message', "<div id='toast-success' class='alert'>Category Created Successfully...</div>");
            return Redirect::to('category');
        }else{  
            Session::flash('message', "<div id='toast-danger' class='alert error-by-form'>Error to create a category...</div>");
            return Redirect::back();
        }
    }  
}
