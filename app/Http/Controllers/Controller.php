<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function Json($code,$msg,$data){
        $json=[
            "code"=>$code,
            "msg"=>$msg,
            "data"=>$data,
        ];
        $json=json_encode($json);
        return $json;
    }
}
