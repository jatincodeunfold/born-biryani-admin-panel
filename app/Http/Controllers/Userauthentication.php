<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Helper;
use Config;
use Session;
use Redirect;


class Userauthentication extends Controller
{


    public function index(){
         return view('Login');
    }

    public function register(){
        return view('Register');
    }

    public function login_process(){
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $data               = array(); 
        $base_url           = Config::get('constant.BASE_URL').'login'; 
        $data['useremail']  = request('email');
        $data['password']   = request('password');
        $method             = 'POST';
        $get_result         = Helper::callAPI($method, $base_url, $data);
        if($get_result['success']){
            $token = $get_result['result']['token'];
            Session::put('auth', $token);
            Session::flash('message', "<div id='toast-success' class='alert'>Logged In Successfully</div>");
            return Redirect::to('dashboard');
        }else{  
            Session::flash('message', "<div id='toast-danger' class='alert error-by-form'>You are not a valid user!!</div>");
            return Redirect::back();
        }
    }
}
