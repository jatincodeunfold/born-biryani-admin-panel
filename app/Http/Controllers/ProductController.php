<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Helper;
use Config;
use Session;
use Redirect;

class ProductController extends Controller
{
    public function index(){
        $this->validate(request(), [
            'productname'       => 'required',
            'category'          => 'required',
            'shortDescription'  => 'required',
            'description'       => 'required',
            'price'             => 'required',
            'image'             => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $data                       = array(); 

        $image = request()->file('image');
        $img_link = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/restaurent/images');
        $image->move($destinationPath, $img_link);
        $return_url = Helper::image_base_url()."public/restaurent/images/".$img_link;


        $base_url                   = Config::get('constant.BASE_URL').'product'; 
        $data['category_code']      = request('category');
        $data['productname']        = request('productname');
        $data['shortDescription']   = request('shortDescription');
        $data['description']        = request('description');
        $data['price']              = request('price');
        $data['image']              = $return_url;
        $data['restaurant_id']      = '1';
        $method                     = 'POST';
        $get_result                 = Helper::callAPI($method, $base_url, $data);
        if($get_result['success']){
            Session::flash('message', "<div id='toast-success' class='alert'>Product Created Successfully...</div>");
            return Redirect::to('product');
        }else{  
            Session::flash('message', "<div id='toast-danger' class='alert error-by-form'>Error to create a Product...</div>");
            return Redirect::back();
        }
    }  
}
