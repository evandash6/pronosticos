<?php

namespace App\Controllers;

use App\Libraries\RestClient;

class Administracion extends BaseController{

    function __construct(){
        $this->api = new RestClient([
            //API V2 PRODUCCION
            'base_url' => 'https://api.lamat.pro/public/api',
            'headers' => ['Ephylone'=>'pronos'],
            'format' => ""]);
    }

    public function index(){
        echo "Hola Pronosticos";
    }

}
