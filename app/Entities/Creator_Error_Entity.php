<?php

namespace App\Entities;

use K_Laravel_Creator\Entities\Base_Entity;

class Creator_Error_Entity extends Base_Entity{

    public static $entity = [
        "Error" => "错误收集"
    ];

    public static function get_attribute(){
        return array_merge(parent::get_attribute(),[
            'message' => parent::set_attribute('信息','string'),
            'url' => parent::set_attribute('出错文件','string'),
            'line' => parent::set_attribute('行数'),
            'column' => parent::set_attribute('列数'),
            'error_object' => parent::set_attribute('错误对象'),
            'pv_id' => parent::set_attribute('pv_id')
        ]);
    }


}