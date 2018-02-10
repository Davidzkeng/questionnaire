<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\model\EntryFormModel;
use think\Db;

class Index extends Controller{
	public function index(){
        
        return $this->fetch();
    }

    public function add_do(Request $req){
    	$entryformModel = new EntryFormModel();
    	if($req->param()){
            $message = $req->param('c_3/a');
            $data['c_3'] = serialize($message);
            
    		$message =  $req->param('c_37/a');
            $data['c_37'] = serialize([ $message[0].":".$message[1],$message[2].":".$message[3], $message[4].":".$message[5], $message[6].":".$message[7] ]);
    		
            
            
    		$res = $entryformModel->add_new($data);
    		if($res){
    			return ['err'=>0,'msg'=>'提交成功'];
    		}else{
    			return ['err'=>1,'msg'=>'提交失败'];
    		}
    	}
    }

    public function search(Request $req){
    	
    	if($req->param()){
    		$c_3 = serialize($req->param('c_3/a'));

            
    		$list1 = Db::name('entry_form')->where(['c_3'=>$c_3])->select();
            $list = array();
            foreach ($list1 as $k => $v) {
                $v['c_3'] = unserialize($v['c_3'])[0];
                $v['c_37'] = unserialize($v['c_37']);
                array_push($list, $v);

            }
    	}else{
    		$list1 = Db::name('entry_form')->order('id')->limit(0,20)->field('c_3,c_37')->select();
            $list = array();
            foreach ($list1 as $k => $v) {
                $v['c_3'] = unserialize($v['c_3'])[0];
                $v['c_37'] = unserialize($v['c_37']);
                array_push($list, $v);

            }
    	}
    	$this->assign('list',$list);
    	return $this->fetch();
    }

    
}
