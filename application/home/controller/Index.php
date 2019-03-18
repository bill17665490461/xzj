<?php

namespace app\home\controller;

use think\Db;

class Index extends Common {

    public function index() {
        return $this->display('index/index');
    }

    public function search($keyword = '') {
        $data = $this->request->post();
        if (empty($data['keywords']))$this->error("请填写关键词");
        $array = array();
        //园区查询
        $array['investmentpark'] = Db::name('investmentpark')->where('title','like',"%".$data['keywords']."%")->field('id,title,cname,create_time')->select();
        
        //政府优惠
        $array['government'] = Db::name('government')->where('title','like',"%".$data['keywords']."%")->field('id,title,cname,create_time')->select();
        
        //招商峰会
        $array['articles'] = Db::name('articles')->where('title','like',"%".$data['keywords']."%")->field('id,title,cname,create_time')->select();
  
        $this->assign([
                'searchList' => $array,
            ]);
        return $this->display('index/search');
    }

}
