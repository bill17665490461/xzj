<?php /*a:2:{s:58:"E:\phpstudy\WWW\xzj\application\admin\view\field\edit.html";i:1511946873;s:54:"E:\phpstudy\WWW\xzj\application\admin\view\layout.html";i:1537961176;}*/ ?>
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
        <a href="#base" data-toggle="tab">
            基础设置
        </a>
    </li>
    <li>
        <a href="#attribute" data-toggle="tab">
            属性设置
        </a>
    </li>
    <li>
        <a id="modeCon" href="#extend" data-toggle="tab">
            拓展设置
        </a>
    </li>
    <li class="pull-xs-right label label-primary">"<?php echo htmlentities($modelTitle); ?>"模型<?php if($info['ifmain']): ?>主表<?php else: ?>附表<?php endif; ?>字段编辑</li>
</ul>
<form method="post" action="<?php echo url('edit',['id'=>$info['id']]); ?>">
    <div class="tab-content tab-content-bordered">
        <div class="tab-pane fade in active" id="base">
            <div class="panel">
                <div class="panel-body">
                    <fieldset class="form-group">
                        <label>字段名称*</label>
                        <input type="text" class="form-control" name="name" placeholder="字段英文名称" value="<?php echo htmlentities($info['name']); ?>">
                    </fieldset>
                    <fieldset class="form-group">
                        <label>字段标题*</label>
                        <input type="text" class="form-control" name="title" placeholder="字段中文标题" value="<?php echo htmlentities($info['title']); ?>">
                    </fieldset>
                    <fieldset class="form-group">
                        <label>字段备注说明</label>
                        <textarea class="form-control" rows="3" name="remark" placeholder="填写字段说明"><?php echo htmlentities($info['remark']); ?></textarea>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>排序</label>
                        <input type="number" class="form-control" name="orders" placeholder="只能是正整数" value="<?php echo htmlentities($info['orders']); ?>">
                    </fieldset>
                    <input type="hidden" name="model_id"  value="<?php echo htmlentities($info['model_id']); ?>">
                    <div class="panel-footer text-right">
                        <input type="submit" class="btn btn-primary" value="确认修改">
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade in" id="attribute">
            <div class="panel">
                <div class="panel-body">
                    <fieldset class="form-group">
                        <label >字段类型*</label>
                        <select id="type" name="type" class="form-control select2-example select2-hidden-accessible" style="width: 100%" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                            <option></option>
                            <?php if(is_array($fieldType) || $fieldType instanceof \think\Collection || $fieldType instanceof \think\Paginator): $i = 0; $__LIST__ = $fieldType;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option <?php if($info['type']==$vo['name']): ?>selected<?php endif; ?> value="<?php echo htmlentities($vo['name']); ?>" data-define="<?php echo htmlentities($vo['default_define']); ?>" data-ifoption="<?php echo htmlentities($vo['ifoption']); ?>" data-ifstring="<?php echo htmlentities($vo['ifstring']); ?>"><?php echo htmlentities($vo['title']); ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>字段定义*</label>
                        <input type="text" class="form-control" id="define" name="define" placeholder="字段长度定义" value="<?php echo htmlentities($info['define']); ?>">
                    </fieldset>
                    <div id="imgset" <?php if('image'==$info['type']||'images'==$info['type']): else: ?>style="display:none"<?php endif; ?>>
                         <fieldset class="form-group">
                            <label>是否生成缩略图</label>
                            <label for="switcher-thumb" class="switcher switcher-primary">
                                <input type="checkbox" name="jsonrule[thumb][ifon]" value="1" id="switcher-thumb" <?php if(isset($info['jsonrule']['thumb']['ifon'])): ?>checked=""<?php endif; ?>>
                                       <div class="switcher-indicator">
                                    <div class="switcher-yes">是</div>
                                    <div class="switcher-no">否</div>
                                </div>
                                &nbsp;
                            </label>
                        </fieldset>
                        <div id="thumbset" <?php if(isset($info['jsonrule']['thumb']['ifon'])): else: ?>style="display:none"<?php endif; ?> >
                             <fieldset class="form-group">
                                <label>缩略图大小</label>
                                <input type="text" class="form-control" name="jsonrule[thumb][size]" placeholder="长,宽" value="<?php if(isset($info['jsonrule']['thumb']['size'])): ?><?php echo htmlentities($info['jsonrule']['thumb']['size']); else: ?><?php echo config('upload_image_thumb'); endif; ?>">
                            </fieldset>
                            <fieldset class="form-group">
                                <label style="clear:both; display: block">缩略图裁剪位置</label>
                                <?php $thumb_type=isset($info['jsonrule']['thumb']['type'])?$info['jsonrule']['thumb']['type']:config('upload_image_thumb_type'); ?>
                                <select name="jsonrule[thumb][type]" class="form-control">
                                    <option value="1" <?php if(1==$thumb_type): ?> selected <?php endif; ?>>等比例缩放</option>
                                    <option value="2" <?php if(2==$thumb_type): ?> selected <?php endif; ?>>缩放后填充</option>
                                    <option value="3" <?php if(3==$thumb_type): ?> selected <?php endif; ?>>居中裁剪</option>
                                    <option value="4" <?php if(4==$thumb_type): ?> selected <?php endif; ?>>左上角裁剪</option>
                                    <option value="5" <?php if(5==$thumb_type): ?> selected <?php endif; ?>>右下角裁剪</option>
                                    <option value="6" <?php if(6==$thumb_type): ?> selected <?php endif; ?>>固定尺寸缩放</option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    <div id="fileset" <?php if(isset($info['jsonrule']['file']['type'])): else: ?>style="display:none"<?php endif; ?>>
                        <fieldset class="form-group">
                            <label>文件类型*</label>
                            <input id="filetype" type="text" class="form-control" name="jsonrule[file][type]" placeholder="" value="<?php if(isset($info['jsonrule']['file']['type'])): ?><?php echo htmlentities($info['jsonrule']['file']['type']); endif; ?>">
                            <small class="text-muted">不得超出系统配置：<?php echo config('upload_file_ext'); ?>范围</small>
                        </fieldset>
                        <fieldset class="form-group">
                            <label>文件大小限制</label>
                            <input type="number" class="form-control" name="jsonrule[file][size]" placeholder="" value="<?php if(isset($info['jsonrule']['file']['size'])): ?><?php echo htmlentities($info['jsonrule']['file']['size']); endif; ?>">
                            <small class="text-muted">不得超过系统配置：<?php echo config('upload_file_size'); ?>，0为不限制，单位：kb</small>
                        </fieldset>
                    </div>
                    <ul class="nav nav-tabs nav-tabs-simple">
                        <li class="active">
                            <a href="#manual" data-toggle="tab">
                                手动指定
                            </a>
                        </li>
                        <li>
                            <a href="#fields" data-toggle="tab">
                                字段关联
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content ">
                        <div class="tab-pane fade in active" id="manual">
                            <fieldset class="form-group" id="options" <?php if(!$fieldType[$info['type']]['ifoption']): ?>style="display:none"<?php endif; ?>>
                                      <label>选项</label>
                                <textarea class="form-control" rows="4" name="options" placeholder="值:描述
值:描述
值:描述
......"><?php echo htmlentities($info['options']); ?></textarea>
                                <small class="text-muted" >用于单选、多选、下拉等类型</small>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>字段默认值</label>
                                <textarea class="form-control" rows="2" name="value" placeholder="未指定值时默认插入字段的值"><?php echo htmlentities($info['value']); ?></textarea>
                            </fieldset>
                        </div>
                        <div class="tab-pane fade in" id="fields">
                            <div id="autoOptions" <?php if(!$fieldType[$info['type']]['ifoption']): ?>style="display:none"<?php endif; ?>>
                                 <fieldset class="form-group">
                                    <label >表名</label>
                                    <input name="jsonrule[choose][table]" value="<?php if(isset($info['jsonrule']['choose'])): ?><?php echo htmlentities($info['jsonrule']['choose']['table']); endif; ?>"  class="form-control typeahead-table" type="text" data-provide="typeahead" autocomplete="on">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label >值字段</label>
                                    <input name="jsonrule[choose][key]" value="<?php if(isset($info['jsonrule']['choose'])): ?><?php echo htmlentities($info['jsonrule']['choose']['key']); endif; ?>"  class="form-control typeahead-key" type="text" data-provide="typeahead" autocomplete="on">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>描述字段</label>
                                    <input name="jsonrule[choose][value]" value="<?php if(isset($info['jsonrule']['choose'])): ?><?php echo htmlentities($info['jsonrule']['choose']['value']); endif; ?>"  class="form-control typeahead-value" type="text" data-provide="typeahead" autocomplete="on">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>筛选条件</label>
                                    <input name="jsonrule[choose][where]" value="<?php if(isset($info['jsonrule']['choose'])): ?><?php echo htmlentities($info['jsonrule']['choose']['where']); endif; ?>"  class="form-control" type="text" placeholder="where条件">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>数量</label>
                                    <input name="jsonrule[choose][limit]" value="<?php if(isset($info['jsonrule']['choose'])): ?><?php echo htmlentities($info['jsonrule']['choose']['limit']); endif; ?>"  class="form-control" type="text" placeholder="limit条件">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>排序</label>
                                    <input name="jsonrule[choose][order]" value="<?php if(isset($info['jsonrule']['choose'])): ?><?php echo htmlentities($info['jsonrule']['choose']['order']); endif; ?>" class="form-control" type="text" placeholder="order条件">
                                </fieldset>
                            </div>
                            <div id="autoString" <?php if(!$fieldType[$info['type']]['ifstring']): ?>style="display:none"<?php endif; ?>>
                                 <fieldset class="form-group">
                                    <label >表名</label>
                                    <input name="jsonrule[string][table]" value="<?php if(isset($info['jsonrule']['string'])): ?><?php echo htmlentities($info['jsonrule']['string']['table']); endif; ?>"   class="form-control typeahead-table" type="text" data-provide="typeahead" autocomplete="on">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>字段</label>
                                    <input name="jsonrule[string][key]" value="<?php if(isset($info['jsonrule']['string'])): ?><?php echo htmlentities($info['jsonrule']['string']['key']); endif; ?>"  id="typeahead-key" class="form-control" type="text" data-provide="typeahead" autocomplete="on">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>分隔符</label>
                                    <input name="jsonrule[string][delimiter]" value="<?php if(isset($info['jsonrule']['string'])): ?><?php echo htmlentities($info['jsonrule']['string']['delimiter']); endif; ?>"  class="form-control" type="text" placeholder="字段值组合成字符的分隔符">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>筛选条件</label>
                                    <input name="jsonrule[string][where]" value="<?php if(isset($info['jsonrule']['string'])): ?><?php echo htmlentities($info['jsonrule']['string']['where']); endif; ?>"  class="form-control" type="text" placeholder="where条件">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>数量</label>
                                    <input name="jsonrule[string][limit]" value="<?php if(isset($info['jsonrule']['string'])): ?><?php echo htmlentities($info['jsonrule']['string']['limit']); endif; ?>"  class="form-control" type="text" placeholder="limit条件">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>排序</label>
                                    <input name="jsonrule[string][order]" value="<?php if(isset($info['jsonrule']['string'])): ?><?php echo htmlentities($info['jsonrule']['string']['order']); endif; ?>" class="form-control" type="text" placeholder="order条件">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <input type="submit" class="btn btn-primary" value="确认修改">
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade in" id="extend">
            <div class="panel">
                <div class="panel-body">
                    <input type="hidden" name="ifmain"  value="<?php echo htmlentities($info['ifmain']); ?>">
                    <fieldset class="form-group" id="ifrequire">
                        <label>是否必填</label>
                        <label for="switcher-ifrequire" class="switcher switcher-primary">
                            <input type="checkbox" name="ifrequire" value="1" id="switcher-ifrequire" <?php if($info['ifrequire']): ?>checked=""<?php endif; ?>>
                                   <div class="switcher-indicator">
                                <div class="switcher-yes">是</div>
                                <div class="switcher-no">否</div>
                            </div>
                            &nbsp;
                        </label>
                    </fieldset>
                    <?php if($info['ifmain']): ?>
                    <fieldset class="form-group" id="ifsearch" <?php if(!in_array($info['type'],['text', 'textarea', 'tags', 'Ueditor'])): ?>style="display:none"<?php endif; ?>>
                              <label>是否可搜索</label>
                        <label for="switcher-ifsearch" class="switcher switcher-primary">
                            <input type="checkbox" name="ifsearch" value="1" id="switcher-ifsearch" <?php if($info['ifsearch']): ?>checked=""<?php endif; ?>>
                                   <div class="switcher-indicator">
                                <div class="switcher-yes">是</div>
                                <div class="switcher-no">否</div>
                            </div>
                            &nbsp;
                        </label>
                        <small class="text-muted" style="clear:both; display: block">只有主表字段支持搜索</small>
                    </fieldset>
                    <?php endif; ?>
                    <fieldset class="form-group">
                        <label>是否显示</label>
                        <label for="switcher-ifeditable" class="switcher switcher-primary">
                            <input type="checkbox" name="ifeditable" value="1" id="switcher-ifeditable" <?php if($info['ifeditable']): ?>checked=""<?php endif; ?>>
                                   <div class="switcher-indicator">
                                <div class="switcher-yes">是</div>
                                <div class="switcher-no">否</div>
                            </div>
                            &nbsp;
                        </label>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>状态</label>
                        <label for="switcher-status" class="switcher switcher-primary">
                            <input type="checkbox" name="status" value="1" id="switcher-status" <?php if($info['status']): ?>checked=""<?php endif; ?>>
                                   <div class="switcher-indicator">
                                <div class="switcher-yes">启用</div>
                                <div class="switcher-no">停用</div>
                            </div>
                            &nbsp;
                        </label>
                    </fieldset>
                    <div class="panel-footer text-right">
                        <input type="submit" class="btn btn-primary" value="确认修改">
                    </div>
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

<script >
    $(function () {
        $('.select2-example').select2({
            placeholder: '选择字段类型',
        });
        $('#filetype').tagsinput({tagClass: 'label label-primary'});
        $('#switcher-thumb').change(function () {
            if ($(this).prop('checked')) {
                $('#thumbset').show();
            } else {
                $('#thumbset').hide();
            }
        });
        $('#type').change(function () {
            $('#define').val($(this).find("option:selected").attr("data-define"));
            var ifoption = $(this).find("option:selected").attr("data-ifoption");
            var ifstring = $(this).find("option:selected").attr("data-ifstring");
            //图片字段设置显隐
            if ('image' == $(this).val() || 'images' == $(this).val()) {
                $('#imgset').show();
            } else {
                $('#imgset').hide();
            }
            //文件字段设置显隐
            if ('files' == $(this).val()) {
                $('#fileset').show();
            } else {
                $('#fileset').hide();
            }
            //选项字段手动和关联隐显
            if (ifoption == '1') {
                $('#options').show();
                $('#autoOptions').show();
            } else {
                $('#options').hide();
                $('#autoOptions').hide();
            }
            //字符串字段关联显隐
            if (ifstring == '1') {
                $('#autoString').show();
            } else {
                $('#autoString').hide();
            }
            
            //搜索隐显
            if (ifstring == '1') {
                $('#ifsearch').show();
            } else {
                $('#ifsearch').hide();
            }
            //清除提示窗口
            if ($(this).val()) {
                $('#type_waring').hide();
            } else {
                $('#type_waring').show();
            }
        });
        $('.typeahead-table').typeahead({source: <?php echo $tables; ?>, minLength: 0});
    });
</script>

</body>
</html>