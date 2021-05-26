<?php
namespace addons\esa_document\controller\index;

class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }
}