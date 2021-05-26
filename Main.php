<?php
namespace addons\esa_document;

use ESA\Addons;

class Main extends Addons
{
    /**
     * 插件安装方法
     * @return bool
     */
    public function install()
    {
        return true;
    }

    /**
     * 插件卸载方法
     * @return bool
     */
    public function uninstall()
    {
        return true;
    }
    
    public function my_model($model){
        $models = [
            "classes" => "\addons\\esa_document\model\Classes",
            "carousel"=> "\addons\\esa_document\model\Carousel",
        ];
        return model($models[$model]);
    }
}