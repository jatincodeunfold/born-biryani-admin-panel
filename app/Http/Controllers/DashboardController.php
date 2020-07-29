<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Helper;
use Config;
use Session;
use Redirect;
class DashboardController extends Controller
{
    
    public function index(){
       return view('Dashboard');
    }  
}



?>