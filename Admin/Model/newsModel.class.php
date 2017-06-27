<?php
namespace Admin\Model;
use Think\Model;

class NewsModel extends Model{
    public function gettop(){
        $content = select();
        return $content;
    }


}
