<?php
/**
 * Created by PhpStorm.
 * User: ling
 * Date: 2017/11/19
 * Time: 21:37
 */

namespace app\common\controller;


class Util{

    //单文件上传
    public function upload($file){
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                return ['err'=>0,'msg'=>$info->getSaveName()];
            }else{
                // 上传失败获取错误信息
                return ['err'=>1,'msg'=>$file->getError()];
            }
        }
    }

    /**
     * 生成验证码
     * @param $count 验证码位数
     * @return string 验证码
     */
    public static function generatecode($count){
        $code = '';
        for($i=0;$i<$count;$i++){
            $code .= rand(0,9);
        }
        return $code;
    }

}