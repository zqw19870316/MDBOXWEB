<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1
 * Time: 9:07
 * 组织架构
 */

namespace app\index\controller;


use app\common\controller\Home;

class Organization extends Home
{
    /**
     * 组织机构-首页
     */
    public function index(){

        return $this->fetch();
    }

}