<?php
namespace app\admin\controller;


use app\common\controller\Adminbase;
use think\Db;
use think\Controller;

class Index extends Controller{
    public function index(){
        return $this -> fetch('index');
    }
}
