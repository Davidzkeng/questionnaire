<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/20
 * Time: 12:51
 */

namespace app\index\model;


use think\Model;

class EntryFormModel extends Model{

    protected $table = 'bus_entry_form';

    public function add_new($data){
    	$res = $this->allowField(true)->save($data);
    	if($res){
    		return true;
    	}else{
    		return false;
    	}
    }

} 