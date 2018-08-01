<?php namespace app\common\controller;
use think\Controller;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/31
 * Time: 16:18
 */
class Common extends Controller
{
  public function __construct()
    {
        parent::__construct();
        $this->getControName();

    }
    //获取控制器的名字
    public function getControName(){
        $controller_name = \think\facade\Request::controller();
        $this->assign('controller_name',$controller_name);
    }
}