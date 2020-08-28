<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    public function index(){
        $url="http://local.shop1.com/api/goods/index";
        $data=file_get_contents($url);
        $data=json_decode($data,true);
        if($data){
            return $this->Json(0,"OK",$data["data"]);
        }

    }
}
