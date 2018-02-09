<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/15
 * Time: 15:06
 */

namespace app\admin\controller;
use app\admin\model\AdminUserModel;
use think\captcha\Captcha;
use think\Controller;
use think\Request;

class Login extends Controller{

    public function index(){
        return $this->fetch('index');
    }

    //登陆处理
    public function login(Request $req){

        if($req->isPost()){

            $code = $req->param('captcha');
            $captcha = new Captcha();
            if(!$captcha->check($code)){
                return ['err'=>1,'msg'=>'验证码输入错误！'];
            }else{
                $adminUserModel = new AdminUserModel();
                $user_name = $req->param('admin_name');
                $pwd = $req->param('admin_pwd');

                $adminUser = $adminUserModel->where(['admin_name'=>$user_name])->find();
                if(empty($adminUser)){
                    return ['err'=>1,'msg'=>'用户名不存在！'];
                }

                if($adminUser['status']!=1){
                    return ['err'=>1,'msg'=>'对不起，该账号已经被禁用！'];
                }

                $pwd = md5($adminUser['salt'].$pwd);

                if($pwd==$adminUser['admin_pwd']){
                    session('admin_id',$adminUser['id']);
                    session('admin_user',$adminUser);
                    return ['err'=>0,'msg'=>'登录成功！'];
                }else{
                    return ['err'=>1,'msg'=>'密码错误！'];
                }
            }
        }

    }

    //退出登录
    public function logout(){
        \think\Session::clear();
        return $this->redirect('admin/login/index');
    }

} 