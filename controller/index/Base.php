<?php
namespace addons\esa_document\controller\admin;

use addons\esa_document\Main;

class Base extends Main
{
    protected $ESA_TYPE     = "INDEX";
    protected $EXPOSURE     = [];
    
    public function __construct()
    {
        parent::__construct();
    }
}