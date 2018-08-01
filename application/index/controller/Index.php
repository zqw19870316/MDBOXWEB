<?php
namespace app\index\controller;
use app\common\controller\Home;

class Index extends Home
{
    /**
     * 首页
     */
    public function index()
    {
        return $this->fetch();
    }
}
