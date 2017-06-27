<?php
namespace Admin\Model;
use Think\Model;

class CatModel extends Model{
    public function gettree(){
        return $this->select();

        /*   $t = array();
        foreach($this->select() as $k=>$v){
            if($v['pid'] == $p){
                $v['url'] = $lv;
                $t[] = $v;
                //检查
                $t = array_merge($t,$this->gettree($v['lid'],$lv+1));
            }
        }
        return $t;*/
    }


}
