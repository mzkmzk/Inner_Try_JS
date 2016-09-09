<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use K_Laravel_Creator\Http\Controllers\Base_Controller;
use App\Models\PV_Model;

class PV_Controller extends Base_Controller
{

     public function __construct(Request $request){
        parent::__construct($request);
        $this->model =new PV_Model();
     }
}
