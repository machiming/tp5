<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\response\Json;

class Index extends Controller
{
    public function index()
    {
       $result= Db::table("bank")->select();
       $re=json($result);
       $re2=json_encode($result);
       $this->assign("result",$result);
       $this->assign("re",$re);
       $this->assign("re2",$re2);
       return $this->fetch();
    }
}
