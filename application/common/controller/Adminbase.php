<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/15
 * Time: 14:43
 */

namespace app\common\controller;
use think\Controller;

class Adminbase extends Controller{

    public function _initialize() {
        parent::_initialize();

        // 检测是否登陆
        if($this->isLogin()){
            //$this->checkAuth();

        }else{
            $this->redirect('admin/login/index');
        }
    }


    // 检测是否登陆
    public function isLogin()
    {
        $admin_id = session('admin_id');
        if(!empty($admin_id)){
            return true;
        }else{
            return false;
        }
    }

} 