<?php

namespace app\home\model;
use think\Db;

/**
 * 附件模型
 * @package app\index\model
 */
class Attachment extends  \app\common\model\Attachment {


    //获取图片 传图片ID
    public function getImg($id = 0){
        if (empty($id)) {
            return false;
        }

        $getImg = Db::name('attachment')->where('id',$id)->field('path')->find();
        
        if($getImg){
            return $getImg['path'];
        }
        return false;
    }
}