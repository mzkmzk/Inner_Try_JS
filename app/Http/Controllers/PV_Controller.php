<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Creator_PV_Model;

class PV_Controller extends Creator_PV_Controller
{

     public function __construct(Request $request){
        parent::__construct($request, 'Creator_PV');
     }

    public function insert(){
        $this->request->merge([
           'IP' => $this->getIP(),
        ]);
        return parent::insert();
    }

    private function getIP() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
