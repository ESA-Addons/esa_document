<?php
namespace addons\esa_document\controller\admin;

class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }
}