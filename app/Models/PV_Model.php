<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use K_Laravel_Creator\Models\Base_Model;

class PV_Model extends Base_Model
{
    protected $table = 'PV';

    public function media(){
        return $this->hasMany('App\Media_Model','media_id','id');
    }


}
