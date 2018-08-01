<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/31
 * Time: 16:19
 */

namespace app\common\controller;
use think\facade\Request;

class Home extends Common
{
    protected $css;
    protected $js;
    public function __construct()
    {
        parent::__construct();
        $this->getControName();

    }
    //获取控制器的名字
    public function getControName(){
        $controller_name = Request::controller();
        $this->assign('controller_name',$controller_name);
    }
}