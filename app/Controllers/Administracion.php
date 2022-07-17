<?php

namespace App\Controllers;

use App\Libraries\RestClient;

class Administracion extends BaseController{

    function __construct(){
        $this->api = new RestClient([
            'base_url' => 'https://api.lamat.pro/public/api',
            'headers' => ['Ephylone'=>'pronos'],'format' => ""
        ]);
    }

    public function index(){
        echo json_encode(array('status'=>200,'msg'=>"Saludos Millones"));
    }

    public function save_canal(){
        echo $this->api->post('insertar/canales',$_POST)->response;
    }

}
