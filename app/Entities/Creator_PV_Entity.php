<?php

namespace App\Entities;

use K_Laravel_Creator\Entities\Base_Entity;

class Creator_PV_Entity extends Base_Entity{

    public static $entity = [
        "PV" => "PV"
    ];

    public static function get_attribute(){
        $attribute = array();
        $attribute['IP'] = parent::set_attribute("IP","string");
        $attribute['user_agent'] = parent::set_attribute("user_agent","string");
        $attribute['url'] = parent::set_attribute("url","string");
        $attribute['referer'] = parent::set_attribute("Referer","string");
        return array_merge([
            'id' => self::set_attribute("随机码","string"),
            'created_at' => self::set_attribute("创建时间","date_time"),
            'updated_at' => self::set_attribute("修改时间","date_time"),
            'deleted_at' => self::set_attribute("删除时间","date_time"),
        ],$attribute);
    }


}