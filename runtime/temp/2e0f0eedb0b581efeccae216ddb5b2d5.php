<?php /*a:2:{s:59:"E:\phpstudy\WWW\xzj\application\admin\view\column\edit.html";i:1535679567;s:54:"E:\phpstudy\WWW\xzj\application\admin\view\layout.html";i:1537961176;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title><?php echo htmlentities($title); ?></title>
    <meta name="description" content="">
    <meta name="author" content="YX">
    <script type="text/javascript">
        window.onload = function () {
            if (navigator.appName == "Microsoft Internet Explorer" && parseInt(navigator.appVersion.split(";")[1].replace(/[ ]/g, "").replace("MSIE", "")) < 9) {
                document.body.innerHTML = "";
                alert("你的浏览器太古老,网页不支持IE9以下版本~");
            }
        };
    </script>
    <link href="/public/static/admin/assets/static/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="/public/static/admin/assets/static/font-awesome.min.css" rel="stylesheet">

    <!-- DEMO ONLY: Function for the proper stylesheet loading according to the demo settings -->
    <script>function _pxDemo_loadStylesheet(a, b, c) {
        var c = c || decodeURIComponent((new RegExp(";\\s*" + encodeURIComponent("px-demo-theme") + "\\s*=\\s*([^;]+)\\s*;", "g").exec(";" + document.cookie + ";") || [])[1] || "default"),
            d = "rtl" === document.getElementsByTagName("html")[0].getAttribute("dir");
        document.write(a.replace(/^(.*?)((?:\.min)?\.css)$/, '<link href="$1' + (c.indexOf("dark") !== -1 && a.indexOf("/css/") !== -1 && a.indexOf("/themes/") === -1 ? "-dark" : "") + (!d || 0 !== a.indexOf("/public/static/admin/assets/css") && 0 !== a.indexOf("/public/static/admin/assets/demo") ? "" : ".rtl") + '$2" rel="stylesheet" type="text/css"' + (b ? 'class="' + b + '"' : "") + ">"))
    }</script>

    <!-- DEMO ONLY: Set RTL direction -->
    <script>"ltr" !== document.getElementsByTagName("html")[0].getAttribute("dir") && "1" === decodeURIComponent((new RegExp(";\\s*" + encodeURIComponent("px-demo-rtl") + "\\s*=\\s*([^;]+)\\s*;", "g").exec(";" + document.cookie + ";") || [])[1] || "0") && document.getElementsByTagName("html")[0].setAttribute("dir", "rtl");</script>

    <!-- DEMO ONLY: Load PixelAdmin core stylesheets -->
    <script>
        _pxDemo_loadStylesheet('/public/static/admin/assets/css/bootstrap.min.css', 'px-demo-stylesheet-bs');
        _pxDemo_loadStylesheet('/public/static/admin/assets/css/pixeladmin.min.css', 'px-demo-stylesheet-core');
        _pxDemo_loadStylesheet('/public/static/admin/assets/css/widgets.min.css', 'px-demo-stylesheet-widgets');
    </script>

    <!-- DEMO ONLY: Load theme -->
    <script>
        function _pxDemo_loadTheme(a) {
            var b = decodeURIComponent((new RegExp(";\\s*" + encodeURIComponent("px-demo-theme") + "\\s*=\\s*([^;]+)\\s*;", "g").exec(";" + document.cookie + ";") || [])[1] || "default");
            _pxDemo_loadStylesheet(a + b + ".min.css", "px-demo-stylesheet-theme", b)
        }

        _pxDemo_loadTheme('/public/static/admin/assets/css/themes/');
    </script>

    <!-- Demo assets -->
    <script>_pxDemo_loadStylesheet('/public/static/admin/assets/demo/demo.css');</script>
    <!-- / Demo assets -->
    <!-- holder.js -->
    <script type="text/javascript" src="/public/static/admin/assets/js/holder.js"></script>
    <!-- Pace.js -->
    <script src="/public/static/admin/assets/js/pace.min.js"></script>
    <script id="demo" src="/public/static/admin/assets/demo/demo.js" data-bind="/public/static"></script>
    <!-- jQuery -->
    <script src="/public/static/jquery.min.js"></script>

    <script src="/public/static/admin/assets/js/bootstrap.min.js"></script>
    <script src="/public/static/admin/assets/js/pixeladmin.min.js"></script>
    <script src="/public/static/admin/assets/js/summernote-zh-CN.js" charset="utf-8"></script>

    <!-- 省份js开始 -->
        <script src="/public/static/area/distpicker.data.js"></script>
        <script src="/public/static/area/distpicker.js"></script>
        <script src="/public/static/area/main.js"></script>
        <!-- 省份js结束 -->
    
<script type="text/javascript" charset="utf-8" src="/public/static/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/static/ueditor/editor_api.js" data-bind="/public/static/ueditor/_src/"  id="uapi"></script>
<style>
    .configImage{min-height:100px; padding-bottom: 20px; }
    .dz-default.dz-message{
        right: auto;
        left: 50%;
        top: 25px;
        transform: none;
        padding-left: 0;
        font-size: 35px;
        font-weight: 400;
        line-height: 35px;
        position: relative
    }
    .fieldhide{display: none}
</style>
<script>
    //解决ajax获取时候id冲突问题
    window.ueditid='';
</script>

</head>
<body>
<nav class="px-nav px-nav-left">
    <button type="button" class="px-nav-toggle" data-toggle="px-nav">
        <span class="px-nav-toggle-arrow"></span>
        <span class="navbar-toggle-icon"></span>
        <span class="px-nav-toggle-label font-size-11">隐藏菜单</span>
    </button>

    <ul class="px-nav-content" id="leftmenu">

    </ul>
</nav>

<nav class="navbar px-navbar">
    <!-- Header -->
    <div class="navbar-header">
        <a class="navbar-brand px-demo-brand" href="<?php echo url('admin/index/index'); ?>">信之家</a>
    </div>

    <!-- Navbar togglers -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-demo-navbar-collapse"
            aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="px-demo-navbar-collapse">
        <ul class="nav navbar-nav" id="topmenu">

        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    <?php if(app('session')->get('user_info.head_path')): ?><img src="/public/uploads/<?php echo htmlentities(app('session')->get('user_info.head_path')); ?>"
                                                                alt="" class="px-navbar-image"><?php else: ?><i
                        class="fa fa-user-circle"></i><?php endif; ?>
                    <span class="hidden-md"><?php echo htmlentities(app('session')->get('user_info.realname')); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo url('admin/index/userInfo'); ?>"><i class="dropdown-icon fa fa-user-o"></i>&nbsp;&nbsp;个人设置</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php echo url('admin/open/loginout'); ?>"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;退出</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="fa fa-trash-o"></i>&nbsp;<span class="hidden-md">清空缓存</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="clear-data" data-bind="data" href="#"><i class="fa fa-database"></i>&nbsp;数据缓存</a>
                    </li>
                    <li><a class="clear-data" data-bind="temple" href="#"><i
                            class="fa fa-file-code-o"></i>&nbsp;模板缓存</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo htmlentities($rootUrl); ?>index.php" target="_blank"><i class="fa fa-laptop"></i>&nbsp;<span class="hidden-md">前台</span></a>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
<div class="px-content">
    <ol class="breadcrumb page-breadcrumb">
        <?php if(is_array($NowMenuPath) || $NowMenuPath instanceof \think\Collection || $NowMenuPath instanceof \think\Paginator): $i = 0; $__LIST__ = $NowMenuPath;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
        <li><a href="<?php echo htmlentities($data['furl']); ?>" <?php if($data['id'] == $NowMenuId): ?>class="active" <?php endif; ?>>
            <!--i class="<?php echo htmlentities($data['icon']); ?>"></i--> <?php echo htmlentities($data['title']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>
    
<ul class="nav nav-tabs">
    <li class="active">
        <a href="#tabs-info" data-toggle="tab">
            基础设置
        </a>
    </li>
    <li>
        <a href="#tabs-menu" data-toggle="tab">
            其他设置
        </a>
    </li>
    <li id="modeTab">
        <a id="modeCon" href="#content" data-toggle="tab">
            栏目扩展设置
        </a>
    </li>
</ul>
<form method="post" action="<?php echo url('edit',['id'=>$info['id']]); ?>">
    <div class="tab-content tab-content-bordered">
        <div class="tab-pane fade in active" id="tabs-info">
            <div class="panel">
                <div class="panel-body">
                    <fieldset class="form-group">
                        <label>所属栏目*</label>
                        <select id="path" name="path" class="form-control  select2-hidden-accessible" style="width: 100%" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                            <option></option>
                            <option value="0," selected>顶级栏目</option>
                            <?php if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($vo['path']); ?><?php echo htmlentities($vo['id']); ?>," <?php if($info['path']==$vo['path'].$vo['id'].','): ?>selected<?php endif; ?>><?php echo str_repeat('┝┈┈', $vo['deep']-1); ?><?php echo htmlentities($vo['title']); ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <label style="clear:both; display: block">所属导航*<?php echo htmlentities($info['navname']); ?></label>
                        <label class="custom-control custom-radio radio-inline">
                            <input type="radio" name="navname" class="custom-control-input" value="1" <?php if($info['navname'] == 1): ?>checked=""<?php endif; ?>>
                            <span class="custom-control-indicator"></span>
                            头部导航
                        </label>
                        <label class="custom-control custom-radio radio-inline">
                            <input type="radio" name="navname" class="custom-control-input" value="2" <?php if($info['navname'] == 12): ?>checked=""<?php endif; ?>>
                            <span class="custom-control-indicator"></span>
                            底部导航
                        </label>
                        <label class="custom-control custom-radio radio-inline">
                            <input type="radio" name="navname" class="custom-control-input" value="3" <?php if($info['navname'] == 3): ?>checked=""<?php endif; ?>>
                            <span class="custom-control-indicator"></span>
                            不显示
                        </label>
                    </fieldset>
                    <fieldset class="form-group">
                        <label style="clear:both; display: block">栏目类型*</label>
                        <label class="custom-control custom-radio radio-inline">
                            <input type="radio" name="type" class="custom-control-input" value="2" <?php if(2==$info['type']): ?>checked=""<?php endif; ?>>
                                   <span class="custom-control-indicator"></span>
                            列表
                        </label>
                        <label class="custom-control custom-radio radio-inline">
                            <input type="radio" name="type" class="custom-control-input" value="1" <?php if(1==$info['type']): ?>checked=""<?php endif; ?>>
                                   <span class="custom-control-indicator"></span>
                            频道
                        </label>
                        <label class="custom-control custom-radio radio-inline">
                            <input type="radio" name="type" class="custom-control-input" value="3" <?php if(3==$info['type']): ?>checked=""<?php endif; ?>>
                                   <span class="custom-control-indicator"></span>
                            链接
                        </label>
                        <small class="text-muted" style="clear:both; display: block"></small>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>栏目名称*</label>
                        <input type="text" class="form-control" name="title" placeholder="栏目中文名称" value="<?php echo htmlentities($info['title']); ?>">
                    </fieldset>
                    <fieldset class="form-group">
                        <label>栏目标识*</label>
                        <input type="text" class="form-control" name="name" placeholder="栏目唯一英文标识" value="<?php echo htmlentities($info['name']); ?>">
                    </fieldset>
                    <fieldset class="form-group listcolumn">
                        <label>内容模型*</label>
                        <select id="model_id" name="model_id" class="form-control  select2-hidden-accessible" style="width: 100%" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                            <option></option>
                            <?php if(is_array($modelList) || $modelList instanceof \think\Collection || $modelList instanceof \think\Paginator): $i = 0; $__LIST__ = $modelList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($key); ?>" <?php if($info['model_id']==$key): ?> selected <?php endif; ?>><?php echo htmlentities($vo); ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <small class="text-muted text-danger"  id="contentmodel" data-modelid="<?php echo htmlentities($info['model_id']); ?>"></small>
                    </fieldset>
                    <fieldset class="form-group listApagecolumn">
                        <label>栏目模板*</label>
                        <select id="template_list" name="template_list" class="form-control  select2-hidden-accessible" style="width: 100%" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                            <option></option>
                            <?php if(is_array($template_list) || $template_list instanceof \think\Collection || $template_list instanceof \think\Paginator): $i = 0; $__LIST__ = $template_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($key); ?>" <?php if($info['template_list']==$key): ?> selected <?php endif; ?>  data-mid="<?php echo htmlentities($vo['mid']); ?>"><?php echo htmlentities($vo['name']); ?> <?php echo htmlentities($vo['title']); ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </fieldset>
                    <fieldset class="form-group listcolumn">
                        <label>内容模板*</label>
                        <select id="template_content" name="template_content" class="form-control  select2-hidden-accessible" style="width: 100%" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                            <option></option>
                            <?php if(is_array($template_content) || $template_content instanceof \think\Collection || $template_content instanceof \think\Paginator): $i = 0; $__LIST__ = $template_content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($key); ?>" <?php if($info['template_content']==$key): ?> selected <?php endif; ?>  data-mid="<?php echo htmlentities($vo['mid']); ?>"><?php echo htmlentities($vo['name']); ?> <?php echo htmlentities($vo['title']); ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <small class="text-muted text-danger"  id="contentmodel" data-modelid="<?php echo htmlentities($info['model_id']); ?>"></small>
                    </fieldset>
                    <fieldset class="form-group listcolumn">
                        <label>列表翻页行数*</label>
                        <input type="number" class="form-control" name="list_row" placeholder="只能是正整数" value="<?php echo htmlentities($info['list_row']); ?>">
                    </fieldset>
                    <fieldset class="form-group linkcolumn">
                        <label>栏目链接地址*</label>
                        <input type="text" class="form-control" name="url" placeholder="自定义栏目跳转地址" value="<?php if(3==$info['type']): ?><?php echo htmlentities($info['url']); endif; ?>">
                        <small class="text-muted clearfix">如果是内部链接，填写：模块/控制器/操作。如果是http链接，则直接填写http开头的url地址</small>
                    </fieldset>
                    <div class="panel-footer text-right">
                        <input type="submit" class="btn btn-primary" value="编辑栏目">
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade in" id="tabs-menu">
            <div class="panel">
                <div class="panel-body">
                    <fieldset class="form-group">
                        <label>封面图</label>
                        <input type="hidden" name="cover_picture"  value="<?php echo htmlentities($info['cover_picture']); ?>" >
                        <div id="cover_picture" class="configImage b-a-2 border-default" <?php if($info['picinfo']!=[]): ?> data-imgurl="/public/uploads/<?php echo htmlentities($info['picinfo']['path']); ?>" data-imgsize="<?php echo htmlentities($info['picinfo']['size']); ?>" data-imgname="<?php echo htmlentities($info['picinfo']['name']); ?>"<?php endif; ?>>
                             <div class="dz-default dz-message text-light ">
                                <i class="fa fa-plus-square"></i>
                            </div>
                        </div>
                    </fieldset>
                     <div class="row listcolumn">
                        <fieldset class="form-group col-sm-6">
                            <label>列表排序</label>
                            <select class="form-control" name="listorder" id="listorder">
                                <option value="orders" <?php if('orders'==$info['listorder']['0']): ?>selected<?php endif; ?>>排序值</option>
                                <option value="id" <?php if('id'==$info['listorder']['0']): ?>selected<?php endif; ?>>ID编号</option>
                                <option value="create_time" <?php if('create_time'==$info['listorder']['0']): ?>selected<?php endif; ?>>创建时间</option>
                                <option value="update_time" <?php if('update_time'==$info['listorder']['0']): ?>selected<?php endif; ?>>更新时间</option>
                                <option value="hits" <?php if('hits'==$info['listorder']['0']): ?>selected<?php endif; ?>>点击量</option>
                                <option value="rand" <?php if('[rand]'==$info['listorder']['0']): ?>selected<?php endif; ?>>随机</option>
                            </select>
                        </fieldset>
                        <fieldset class="form-group col-sm-6">
                            <label> &nbsp;</label>
                            <select class="form-control" name="listorderway" id="listorderway" <?php if(!isset($info['listorder']['1'])): ?>disabled<?php endif; ?>>
                                <option value="desc" <?php if(isset($info['listorder']['1'])&&'desc'==$info['listorder']['1']): ?>selected<?php endif; ?>>从大到小</option>
                                <option value="asc"  <?php if(isset($info['listorder']['1'])&&'asc'==$info['listorder']['1']): ?>selected<?php endif; ?>>从小到大</option>
                            </select>
                        </fieldset>
                    </div>
                    <fieldset class="form-group listcolumn">
                        <label  style="clear:both; display: block">列表筛选字段条件</label>
                        <div id="listcondition">
                            <small> 无</small>
                        </div>
                    </fieldset>
                    <fieldset class="form-group listApagecolumn">
                        <label>网页标题</label>
                        <input type="text" class="form-control" name="meta_title" placeholder="显示在网页title标签中" value="<?php echo htmlentities($info['meta_title']); ?>">
                    </fieldset>
                    <fieldset class="form-group listApagecolumn">
                        <label>网页关键词</label>
                        <input type="text" class="form-control" name="meta_keywords" placeholder="显示在网页keywords标签中" value="<?php echo htmlentities($info['meta_keywords']); ?>">
                    </fieldset>
                    <fieldset class="form-group listApagecolumn">
                        <label>网页描述</label>
                        <textarea class="form-control" rows="3" name="meta_description" placeholder="显示在网页description标签中" ><?php echo htmlentities($info['meta_description']); ?></textarea>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>排序</label>
                        <input type="number" class="form-control" name="orders" placeholder="只能是正整数" value="<?php echo htmlentities($info['orders']); ?>">
                    </fieldset>
                    <fieldset class="form-group">
                        <label>状态</label>
                        <label for="switcher-primary" class="switcher switcher-primary">
                            <input type="checkbox" name="status" value="1" id="switcher-primary" <?php if($info['status']): ?> checked=""<?php endif; ?>>
                                   <div class="switcher-indicator">
                                <div class="switcher-yes">启用</div>
                                <div class="switcher-no">禁用</div>
                            </div>
                            &nbsp;
                        </label>
                    </fieldset>
                    <div class="panel-footer text-right">
                        <input type="submit" class="btn btn-primary" value="编辑栏目">
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade in" id="content">
            <div class="panel">
                <div class="panel-body">
                    <fieldset class="form-group">
                        <label>扩展模型</label>
                        <select id="ext_model_id" name="ext_model_id" class="form-control  select2-hidden-accessible" style="width: 100%" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                            <option></option>
                            <?php if(is_array($modelList) || $modelList instanceof \think\Collection || $modelList instanceof \think\Paginator): $i = 0; $__LIST__ = $modelList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($key); ?>" <?php if($info['ext_model_id']==$key): ?> selected <?php endif; ?>><?php echo htmlentities($vo); ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </fieldset>
                    <div id="modelFields">
                        <div class="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            请先选择扩展模型~
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-right">
                    <input type="submit" class="btn btn-primary" value="编辑栏目">
                </div>
            </div>
        </div>
    </div>
</form>

</div>
<footer class="px-footer px-footer-bottom">
    <span class="text-muted">
    <a><?php echo config('sysinfo'); ?></a> </span>
</footer>

<script type="text/javascript">
    window.menu = <?php echo $MenuJson; ?>;
    window.NowMenuId = <?php echo htmlentities($NowMenuId); ?>;
    window.RootId = <?php echo htmlentities($RootId); ?>;

    //递归输出左侧菜单
    function printLmenu(lever) {
        var leftmenu = '';
        var hideclass = '';
        for (var i in lever) {
            hideclass = 1 == lever[i].ifvisible ? '' : 'hidden';
            if (lever[i].cnode === undefined) {
                leftmenu += '<li class="px-nav-item ' + hideclass + '" id="' + lever[i].id + '"><a target="' + lever[i].url_target + '" href="' + lever[i].furl + '"><i class="px-nav-icon ' + lever[i].icon + '"></i><span class="px-nav-label">' + lever[i].title + '</span></a></li>';
            } else {
                leftmenu += '<li class="px-nav-item px-nav-dropdown ' + hideclass + '" id="' + lever[i].id + '"><a target="' + lever[i].url_target + '" href="' + lever[i].furl + '"><i class="px-nav-icon ' + lever[i].icon + '"></i><span class="px-nav-label">' + lever[i].title + '</span></a><ul class="px-nav-dropdown-menu">';
                leftmenu += printLmenu(lever[i].cnode);
                leftmenu += '</ul></li>';
            }
        }
        return leftmenu;
    }

    function activeDom(dom,startId) {
        if(dom.length>0){
            if (!dom.hasClass('hidden')){
                dom.addClass('active');
            }
            if(startId!=dom.attr('id') && dom.hasClass('px-nav-dropdown')){
                dom.addClass('px-open');
            }
            activeDom(dom.parent('ul').parent('li'));
        }else{
            return;
        }
    }

    $(function () {
        bootbox.setLocale("zh_CN");
        //顶部菜单
        var topmenu = '';
        for (var i in menu) {
            if (menu[i].ifvisible) {
                if (menu[i].id == RootId) {
                    var active = 'active';
                    var leftid = i;
                } else {
                    var active = '';
                }
                topmenu += '<li id="' + menu[i].id + '" class="' + active + '"><a href="' + menu[i].furl + '" class="font-size-14" target="' + menu[i].url_target + '"><i class="px-nav-icon ' + menu[i].icon + '"></i> ' + menu[i].title + '</a></li>';
            }
        }
        var topbox = $('#topmenu');
        topbox.html(topmenu);
        //左侧菜单
        if (leftid !== undefined) {
            var leftmenu = printLmenu(menu[leftid].cnode);
            var leftdom = $('#leftmenu');
            leftdom.html(leftmenu);
            if (NowMenuId) {
                var nowdom = $('#' + NowMenuId);
                activeDom(nowdom,NowMenuId);
            }
            leftdom.find('.px-nav-dropdown').each(function () {
                //清除下级空元素
                var targ = $(this).children('ul.px-nav-dropdown-menu');
                if (targ.find('li:not(.hidden)').length == 0) {
                    $(this).removeClass('px-nav-dropdown');
                    targ.remove();
                }
                //a跳转事件恢复
                $(this).children('a').children('span.px-nav-label').click(function (event) {
                    var jumpurl = $(this).parent().attr('href');
                    if ('#' != jumpurl) {
                        //阻止父节点点击展开事件
                        event.stopPropagation();
                        if ('_self' == $(this).parent().attr('target')) {
                            window.location.href = jumpurl;
                        } else {
                            window.open(jumpurl);
                        }
                    }
                });
            });
        }

        $('body > .px-nav').pxNav();
        $('body > .px-footer').pxFooter();
        // Initialize DEMO sidebar
        pxDemo.initializeDemoSidebar();
        $('#px-demo-sidebar').pxSidebar();
        pxDemo.initializeDemo();
    });
    //清空缓存
    $('.clear-data').click(function () {
        var classify = $(this).data('bind');
        bootbox.confirm({
            message: '确认需要清空缓存么？',
            className: 'bootbox-sm',
            callback: function (result) {
                if (result) {
                    $.ajax({
                        url: "<?php echo url('admin/index/clear'); ?>",
                        type: "GET",
                        data: {classify: classify},
                        dataType: 'text',
                        success: function (data) {
                            if (data === 'true') {
                                toastr['success']('清空缓存成功~', '', {
                                    closeButton: true
                                });
                            } else {
                                toastr['warning'](data, '', {
                                    closeButton: true
                                });
                            }
                        }
                    });
                }
            }
        });
    });
</script>

<script>
    var choosefield = ",<?php echo htmlentities($info['url']); ?>,";
     function getfield(mid) {
            $.get("<?php echo url('getoptionfield'); ?>", {mid: mid},
                    function (data) {
                        if ('' != data) {
                            var checkString = '';
                            var jdata = jQuery.parseJSON(data);
                            for (var vo in jdata) {
                                var ifchoosed = choosefield.indexOf(',' + vo + ',') >= 0 ? 'checked' : '';
                                checkString += '<label class="custom-control custom-checkbox checkbox-inline"><input type="checkbox" name="urls[]" class="custom-control-input" value="' + vo + '" ' + ifchoosed + '><span class="custom-control-indicator"></span>' + vo + '(' + jdata[vo] + ')</label>';
                            }
                            $('#listcondition').html(checkString);
                        } else {
                            $('#listcondition').html('无');
                        }
                    },
                    "json"
             );
        }
    function getModelField(mid, cname) {
        $.ajax({
            async: false,
            url: "<?php echo url('column/extfields'); ?>",
            type: "GET",
            data: {
                mid: mid,
                cname: cname
            },
            dataType: 'html',
            success: function (data) {
//                alert($.parseJSON(data));
                $('#modelFields').html($.parseJSON(data));
            }
        });
    }
    function setFieldOption(typeid) {
         //单页
            if (1 == typeid) {
                $('.listcolumn').hide();
                $('.linkcolumn').hide();
                $('.listApagecolumn').show();
                $('#modeTab').show();
            }
            //列表
            if (2 == typeid) {
                $('.linkcolumn').hide();
                $('.listApagecolumn').show();
                $('.listcolumn').show();
                $('#modeTab').show();
            }
            //链接
            if (3 == typeid) {
                $('.listApagecolumn').hide();
                $('.listcolumn').hide();
                $('.linkcolumn').show();
                $('#modeTab').hide();
            }
    }
    $(function () {
        setFieldOption($('input:radio[name="type"]:checked').val());
        //栏目拓展初始化
        <?php if($info['ext_model_id']): ?>
            getModelField('<?php echo htmlentities($info['ext_model_id']); ?>', '<?php echo htmlentities($info['name']); ?>');
        <?php endif; ?>
        //栏目拓展初始化
        <?php if($info['model_id']): ?>
            getfield(<?php echo htmlentities($info['model_id']); ?>);
        <?php endif; ?>
        $('#path').select2({
            placeholder: '选择栏目'
        });
       var template_list= $('#template_list').select2({
            placeholder: '选择栏目模板'
        });
        var template_content=$('#template_content').select2({
            placeholder: '选择内容模板'
        });
        $('input:radio[name="type"]').change(function () {
           setFieldOption($(this).val());
        });
        //排序选择
        $('#listorder').change(function(){
            if('rand'==$(this).val()){
                $('#listorderway').prop('disabled',true);
            }else{
                $('#listorderway').prop('disabled',false);
            }
        });
        $('#model_id').select2({
            placeholder: '选择内容模型'
        }).on("select2:select", function (e) {
            var mid = $(this).val();
            var modeldata = $('#contentmodel');
             if (mid != modeldata.attr('data-modelid')) {
                modeldata.html('警告：更换扩展模型后，之前模型下的内容将会被删除');
            } else {
                modeldata.html('');
            }
           //列表筛选设置
            getfield(mid);
            $("#template_list,#template_content").find("option").prop("selected",false);
            $("#template_list").find("option[data-mid="+mid+"]").eq(0).prop("selected",true);
            $("#template_content").find("option[data-mid="+mid+"]").eq(0).prop("selected",true);
            template_list.change();
            template_content.change();
        }).on("select2:unselect", function (e) {
            $('#listcondition').html('无');
        });
         
        $('#ext_model_id').select2({
            placeholder: '选择拓展模型'
        }).on("select2:select", function (e) {
            if(''!=ueditid){
                //去掉百度编辑器
                var ids=ueditid.split(","); 
                for (i=0;i<ids.length ;i++ ) 
                { 
                    if(ids[i]){
                      UE.getEditor(ids[i],{
                          toolbars:[]
                      }).destroy();
                      $('#'+ids[i]).remove();
                    }
                }
            }
            ueditid='';        
            var mid = $(this).val();
            getModelField(mid, '<?php echo htmlentities($info['name']); ?>');
        });
        var thisdom = $('#cover_picture');
        var inputdom = thisdom.prev('input');
        thisdom.dropzone({
            url: "<?php echo url('filemanage/upload',['dir'=>'images','module'=>'admin','watermark'=>0]); ?>",
            dictRemoveFile: "删除图片",
            init: function () {
                //回调已上传图片
                if (thisdom.attr('data-imgsize')) {
                    var mockFile = {
                        name: thisdom.attr('data-imgname'),
                        size: thisdom.attr('data-imgsize'),
                        accepted: true,
                        status: 'success',
                        processing: false
                    };
                    this.options.addedfile.call(this, mockFile);
                    this.options.thumbnail.call(this, mockFile, thisdom.attr('data-imgurl'));
                    this.files[0] = mockFile;
                    delImgEvent(thisdom);
                }
            },
            resize: function (file) {
                return {
                    srcX: 0,
                    srcY: 0,
                    srcWidth: file.width,
                    srcHeight: file.height,
                    trgWidth: file.width,
                    trgHeight: file.height
                };
            },
            maxFiles: 1,
            maxfilesexceeded: function (file) {
                this.removeAllFiles();
                this.addFile(file);
            },
            success: function (file, response, e) {
                //移除当前图片  
//                thisdom.find('div.dz-preview:not(.dz-processing)').remove();
                if (response.status == 1) {
                    inputdom.attr('value', response.id);
                    delImgEvent(thisdom);
                    toastr['success'](response.info, '', {
                        closeButton: true
                    });
                } else {
                    var data = response.info;
                    if (!data) {
                        data = '未知错误：' + response;
                    }
                    toastr['error'](data, '', {
                        closeButton: true
                    });
                }
            }
        });
        function delImgEvent(dom) {
            dom.find('.dz-remove').click(function () {
                bootbox.confirm({
                    message: '同时从服务器删除图片么？',
                    className: 'bootbox-sm',
                    callback: function (result) {
                        if (result) {
                            var id = inputdom.attr('value');
                            $.get("<?php echo url('filemanage/delete'); ?>", {id: id},
                                    function (data) {
                                        if (data === 'true') {
                                            toastr['success']('图片删除成功~', '', {
                                                closeButton: true
                                            });
                                        } else {
                                            toastr['error'](data, '', {
                                                closeButton: true
                                            });
                                        }
                                    },
                                    "text"
                                    );
                        }
                    }
                });
            });
        }
    });
</script>

</body>
</html>