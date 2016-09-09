<?php

namespace App\Entities;

use K_Laravel_Creator\Entities\Base_Entity;

class PV_Entity extends Base_Entity{

    public static $entity = [
        "Activity" => "活动"
    ];

    public static $has_many = ['media'];

    public static function get_attribute(){
        $attribute = array();
        $attribute['MAC'] = parent::set_attribute("MAC地址","string");
        $attribute['IP'] = parent::set_attribute("IP","string");
        $attribute['cookie'] = parent::set_attribute("cookie","string");
        $attribute['user_agent'] = parent::set_attribute("user_agent","string");
        $attribute['url'] = parent::set_attribute("url","string");
        $attribute['referer'] = parent::set_attribute("Referer","string");
        $attribute['longitude'] = parent::set_attribute("经度","string");
        $attribute['latitude'] = parent::set_attribute("纬度","string");
        return array_merge(parent::get_attribute(),$attribute);
    }


}