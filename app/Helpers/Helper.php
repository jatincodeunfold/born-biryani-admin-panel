<?php
namespace App\Helpers;

use Config;
use Session;

class Helper{
    public static function callAPI($method, $url, $data ){
        $curl = curl_init();
        switch ($method){
           case "POST":
              curl_setopt($curl, CURLOPT_POST, 1);
              if ($data)
                 curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
              break;
           case "PUT":
              curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
              if ($data)
                 curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));			 					
              break;
           default:
              if ($data)
                 $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        //    'APIKEY: 111111111111111111111',
           'Content-Type: application/json',
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // EXECUTE:
        $result = curl_exec($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $return = array(); 
        if($http_code == '200' || $http_code == '201'){
            $decode           = json_decode($result,true);
            return $decode;
         }else{
            $return['success'] = false;
            $return['result'] = array();
            return $return;
         }
        curl_close($curl);
    }

    public static function get_all_category(){
      $restaurant_id              = '1';
      $base_url                   = Config::get('constant.BASE_URL').'categories?restaurant_id='.$restaurant_id; 
      $method                     = 'GET';
      $get_result                 = Helper::callAPI($method, $base_url, array());
      if($get_result['success']){
         return $get_result['result'];
      }else{
         return array();
      }
    } 
   public static function get_all_products($productid='',$categoryid=''){
      $restaurant_id              = '1';
      $base_url                   = Config::get('constant.BASE_URL').'products?restaurant_id='.$restaurant_id.'&categoryId='.$categoryid.'&productId='.$productid; 
      $method                     = 'GET';
      $get_result                 = Helper::callAPI($method, $base_url, array());
      if($get_result['success']){
         return $get_result['result'];
      }else{
         return array();
      }
   }
   
   public static function get_all_addongroup($productid='',$groupaddonid=''){
      $restaurant_id              = '1';
      $base_url                   = Config::get('constant.BASE_URL').'addon_groups?restaurant_id='.$restaurant_id.'&productId='.$productid.'&groupaddonid='.$groupaddonid; 
      $method                     = 'GET';
      $get_result                 = Helper::callAPI($method, $base_url, array());
      if($get_result['success']){
         return $get_result['result'];
      }else{
         return array();
      }
   }
   
   public static function image_base_url(){
      $url = "file:///C:/xampp/htdocs/born-biryani-admin-panel/";
      return $url;
   }
}
?>