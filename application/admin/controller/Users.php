<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/16
 * Time: 12:26
 */

namespace app\admin\controller;

use app\common\controller\Adminbase;
use app\admin\model\UserModel;
use think\Request;
use think\Db;

class Users extends Adminbase{

    public function index(Request $request){

        $search = trim($request -> param('search'));
        if(!empty($search)){
            $this->assign('search', $search);
            $condition = '%'.$search.'%';
            $user = new UserModel();
            $list = $user->searchUserList($condition);

        }else{
            $user = new UserModel();
            $list = $user->getUserList();
        }
        foreach($list as $k => $v){
            $credit = Db::table('cj_user_credit uc, cj_credit_category cc') -> where('uc.category_id = cc.id') -> where('uc.uid', $v['id']) -> field('cc.score') -> sum('cc.score');
            $list[$k]['credit'] = $credit;

            $reservation = Db::table('cj_user_reservation') -> where('uid', $v['id']) -> count();
            $list[$k]['reservation'] = $reservation;
        }
        $this->assign('currentPage',$list->currentPage());
        $this->assign('eachPage',$user->eachPage);
        $this->assign('list',$list);
        return $this->fetch('index');
    }

    //用户编辑
    public function edit(Request $request){
        $id = $request -> param('id');
        $find = Db::table('cj_users') -> find($id);

        $arrSex = array();
        $arrSex[0]['id'] = 1;
        $arrSex[0]['name'] = '男';
        $arrSex[1]['id'] = 2;
        $arrSex[1]['name'] = '女';

        $this -> assign('find', $find);
        $this -> assign('arrSex', $arrSex);
        return $this -> fetch('edit');
    }

    public function edit_do(Request $request){
        $id = $request -> param('id');

        $data['realname'] = $request -> param('realname');
        $data['nickname'] = $request -> param('nickname');
        $data['mobile'] = $request -> param('mobile');
        $data['gender'] = $request -> param('gender');
        $data['plate_number'] = $request -> param('plate_number');

        $res = Db::table('cj_users') -> where('id', $id) -> update($data);
        if($res){
            return ['err'=>0, 'msg'=>'编辑成功！'];
        }else{
            return ['err'=>1, 'msg'=>'编辑失败！'];
        }
    }

    public function del(Request $request){
        $id = $request->param('id');
        if(!empty($id)){
            $reservation = Db::table('cj_user_reservation') -> where('uid', $id) -> select();
            if($reservation){
                return ['err'=>1,'msg'=>'无法删除！该用户有预约存在！'];
            }else{
                $userModel = new UserModel();
                if($userModel->delUser($id)){
                    return ['err'=>0,'msg'=>'删除成功！'];
                }else{
                    return ['err'=>1,'msg'=>'删除失败！'];
                }
            }
        }
    }
} 