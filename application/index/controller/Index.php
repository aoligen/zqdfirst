<?php
namespace app\index\controller;
class index extends \think\Controller
//上面这句话模板渲染提前要声明的
{
    public function index()
    {
        return $this->fetch();
    }
}
