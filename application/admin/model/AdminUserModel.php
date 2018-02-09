<?php

/**
 * Created by PhpStorm.
 * User: ling
 * Date: 2017/11/15
 * Time: 23:22
 */
namespace app\admin\model;

use think\Model;

class AdminUserModel extends Model{

    protected $table = 'bus_admin';
    protected $autoWriteTimestamp = true;
    protected $updateTime = false;
    public $salt = '1234567890!@#$%^&*+'; //安全码随机字符串
    public $eachPage = 10;//每页显示记录

}