<?php
namespace addons\esa_document;

use ESA\AddonsHook;

class Hook extends AddonsHook
{
    
    public function wx_message($param){
        $wechat = $param['wechat'];
        $content = $param['content'];
        $wechat->customer_service->message("回复index应用消息！")->to($content['FromUserName'])->send();
    }

}