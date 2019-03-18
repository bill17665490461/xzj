<?php

namespace app\home\controller;

use think\Controller;
use think\facade\Config;
use think\Db;
use think\cache;
class Common extends Controller {

    protected $columList = [];
    protected $viewDirectoryDefault = 'defaults';
    protected $viewDirectory = '';

    protected function initialize() {
        //$time = 1535696280;
        //dump(date('Y-m-d H:i:s', $time));die;
        parent::initialize();
        if (!config('web_site_status')) {
            exit('站点关闭维护中...');
        }
        if (!$this->request->isAjax()) {
            //指定域名对应模板目录
            $nowDomain = $this->request->host();
            //缓存当前域名信息
            $nowDomainInfo = cache($nowDomain);
            if (false === $nowDomainInfo) {
                $nowDomainInfo = Db::name('domain')->where('name', $nowDomain)->where('status', 1)->find();
                if (!$nowDomainInfo) {
                    $nowDomainInfo['view_directory'] = false;
                }
                cache($nowDomain, $nowDomainInfo);//dump($nowDomainInfo);die;
            }

            if ($nowDomainInfo['view_directory']) {
                $this->viewDirectory = $nowDomainInfo['view_directory'];
            } else {
                $this->viewDirectory = $this->viewDirectoryDefault;
            }
            //域名对应模板
            Config::set('app.dispatch_success_tmpl', APP_PATH . 'home' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . $this->viewDirectory . DIRECTORY_SEPARATOR . 'jump.html');
            Config::set('app.dispatch_error_tmpl', APP_PATH . 'home' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . $this->viewDirectory . DIRECTORY_SEPARATOR . 'jump.html');
            //翻页设置
            $pageClass = 'app\\home\\pagedriver\\' . $this->viewDirectory;
            if ($this->viewDirectory != $this->viewDirectoryDefault && !class_exists($pageClass)) {
                $pageClass = 'app\\home\\pagedriver\\' . $this->viewDirectoryDefault;
            }
            Config::set('paginate.type', $pageClass);
            Config::set('paginate.list_rows', 15);
            $this->columList = model('Column')->getColumn('sort', 'id,path,name,title,type,url,cover_picture', 'name', 0, '');

            $this->assign([
                'title' => config('web_site_title'),
                'keywords' => config('web_site_keywords'),
                'description' => config('web_site_description'),
                //栏目一维数组结构
                'columList' => $this->columList,
//                'templeDir' =>$this->templeDir,
                'rootName' => '',
                'parentName' => ''
            ]);
            //前台控制器初始化钩子
            $behaviorParam = \think\facade\Hook::listen('home_begin');
            if ([] != $behaviorParam) {
                foreach ($behaviorParam as $vo) {
                    //模板变量赋值
                    if (isset($vo['view'])) {
                        $this->assign($vo['view']);
                    }
                }
            }
        }

         //导航及二级导航
        $getNavList = Db::name('column')->where('status',1)->field('id,title,name,path,navname')->order('orders asc')->select();
        $array = array();
        foreach ($getNavList as $key => $value) {
            $str = explode(',', $value['path']);
            if(count($str) <= 2 AND $value['navname'] == 1){
                $array[] = $value;
            }
        }
        foreach ($array as $key => $value) {

            foreach ($getNavList as $k => $v) {
                $str = explode(',', $v['path']);
                if(count($str) == 3 AND $value['navname'] == 1){
                    if (in_array($value['id'], $str)) {
                        $array[$key]['list'][] = $v;
                    }
                }
                
            } 
        }
        $this->assign('navList', $array);
    }

    protected function display($template = '', $vars = [], $config = []) {
        $content = $this->view->fetch($this->viewDirectory . '/' . $template, $vars, $config);
        return defined('__MESSAGE__') ? $content : (isEngine() ? $content . core_message() : $content);
    }

//通过栏目路径获取特定栏目节点
    protected function getColumnName($path, $type = 'root') {
        if (empty($path)) {
            return 0;
        }
        $id = 0;
        $pathArr = explode(',', $path);

        switch ($type) {
            case 'root':
                $rootId = intval($pathArr[1]);
                foreach ($this->columList as $vo) {
                    if($vo['id']==$rootId){
                        return $vo['name'];
                    }
                }
                break;
            case 'parent':
                $lenth = count($pathArr);
                $parentId = intval($pathArr[$lenth - 2]);
                foreach ($this->columList as $vo) {
                    if($vo['id']==$parentId){
                        return $vo['name'];
                    }
                }
                break;
            default:
                return $id;
        }
    }

    public function _empty() {
        abort(404, 'home模块控制器方法不存在~');
    }

}
