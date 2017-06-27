<?php
namespace Admin\Model;
use Think\Model;

class ListModel extends Model{
    public function gettree($p = 0 ,$lv=0){
        $t = array();
        foreach($this->select() as $k=>$v){
            if($v['pid'] == $p){
                $v['lv'] = $lv;
                $t[] = $v;
                //检查
                $t = array_merge($t,$this->gettree($v['lid'],$lv+1));
            }
        }
        return $t;
    }


}
