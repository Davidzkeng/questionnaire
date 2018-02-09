<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/20
 * Time: 12:51
 */

namespace app\admin\model;


use think\Model;

class UserModel extends Model{

    protected $table = 'cj_users';
    public $salt = '1234567890!@#$%^&*+'; //安全码随机字符串
    public $eachPage = 10;//每页显示记录

    public function getGenderAttr($val){
        $arr = ['1'=>'男','2'=>'女'];
        return $arr[$val];
    }

} 