<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use K_Laravel_Creator\Models\Base_Model;

class User_Model extends Base_Model
{
    protected $table = 'User';

    public function activity(){
        return $this->hasMany('App\Activity_Model','activity_id','id');
    }


}
