<?php

namespace app\member\controller;

use think\Controller;
use think\facade\Cache;
use think\Db;
class Investmentpark extends Common {


    public function index() {
        
        $list = Db::name('investmentpark')
            ->alias('a')
            ->join('member w','a.uid = w.id')
            ->field('a.id,a.title,a.hits,a.update_time,a.orders,a.status,w.nickname,a.cname')
            ->where('uid',session('member_id'))
            ->order('status asc')
            ->paginate(5);
            $this->assign([
                'list' => $list,
                'page' => $list->render(),
            ]);
        
        return $this->fetch();
    }

    public function add($cname = 'investmentpark')
    {
        if (empty($cname)) {
            $this->error('参数错误~');
        }
        $columnInfo = Db::view('column', 'title,model_id')
            ->view('model', 'table', 'column.model_id=model.id', 'LEFT')
            ->where('column.name', $cname)
            ->where('column.status', 1)
            ->where('model.status', 1)
            ->find();
        
        if (empty($columnInfo)) {
            return $this->error('栏目或内容模型不存在或被冻结');
        }
        if ($this->request->isPost()) {

            $name = Db::name('member')->where('account',session('member_acc'))->field('id,nickname')->find();
            
            $data = $this->request->post();

            $ModelField = model('ModelField');
            $data['modelField']['cname'] = $cname;
            $data['modelField']['uid'] = $name['id'];
            $data['modelField']['status'] = 0;
            $data['modelFieldExt'] = isset($data['modelFieldExt']) ? $data['modelFieldExt'] : [];
            try {
                //dump($data);die;
                $ModelField->addModelData($columnInfo['model_id'], $data['modelField'], $data['modelFieldExt']);
            } catch (\Exception $ex) {
                $this->error($ex->getMessage());
            }
            Cache::clear('db_' . $columnInfo['table']);
           // dump($cname);die;
           //  $this->dialog('内容添加成功~', [
           //      ['title' => '返回列表', 'class' => 'member', 'url' => url($cname)],
           //      ['title' => '继续添加', 'class' => 'success', 'url' => url('add', ['cname' => $cname])]
           //  ]);
            $this->success('新增成功！','index');
        } else {
            //省

            $province = Db::name('area')->where('parent_id',0)->field('id,name')->select();
            $placeList = Db::name('place')->where('mid', $columnInfo['model_id'])->whereOr('mid', 0)->order('orders,id desc')->column('id,title');
            $fieldList = model('ModelField')->getFieldList($columnInfo['model_id']);
            $this->assign([
                'placeList' => $placeList,
                'fieldList' => $fieldList,
                'province'  =>$province,
                'cname' => $cname,
                'columnTitle' => $columnInfo['title']
            ]);
            return $this->fetch();
        }
    }

    //删除
    public function del(){
        
        if ($this->request->isPost()) {
            $data = $this->request->post();
            if ($data['del']) {
                $del = Db::name('journalism')->where('id',$data['id'])->delete();
                if ($del) {
                    return 'true';                }
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    //修改
    public function edit($cname = '', $id = 0)
    {
        if (empty($cname)) {
            $this->error('参数错误~');
        }
        $columnInfo = Db::view('column', 'title,model_id')
            ->view('model', 'table', 'column.model_id=model.id', 'LEFT')
            ->where('column.name', $cname)
            ->where('column.status', 1)
            ->where('model.status', 1)
            ->find();
        if (empty($columnInfo)) {
            return $this->error('栏目或内容模型不存在或被冻结');
        }
        if ($this->request->isPost()) {
            $data = $this->request->post();
            
            $ModelField = model('ModelField');
            $data['modelFieldExt'] = isset($data['modelFieldExt']) ? $data['modelFieldExt'] : [];
            try {
                $ModelField->editModelData($columnInfo['model_id'], $data['modelField'], $data['modelFieldExt'], ['cname']);
            } catch (\Exception $ex) {
                $this->error($ex->getMessage());
            }
            Cache::clear('db_' . $columnInfo['table']);

            $this->success('内容编辑成功', 'index');
        } else {
            $contentId = intval($id);
            if (!$contentId) {
                $this->error('参数错误cid~');
            }
            $province = Db::name('area')->where('parent_id',0)->field('id,name')->select();
            $placeList = Db::name('place')->where('mid', $columnInfo['model_id'])->whereOr('mid', 0)->order('orders,id desc')->column('id,title');
            $fieldList = model('ModelField')->getFieldList($columnInfo['model_id'], $contentId);
            $area = Db::name('investmentpark')->where('id',$contentId)->field('province,city,district')->find();
            //dump($area);die;
            $this->assign([
                'placeList' => $placeList,
                'fieldList' => $fieldList,
                'id' => $contentId,
                'article' => $area,
                'province' => $province,
                'columnTitle' => $columnInfo['title']
            ]);
            return $this->fetch();
        }
    }
}
