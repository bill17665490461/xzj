<?php /*a:2:{s:60:"E:\phpstudy\WWW\xzj\application\admin\view\content\list.html";i:1541155955;s:54:"E:\phpstudy\WWW\xzj\application\admin\view\layout.html";i:1537961176;}*/ ?>
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
    
<style>
    .custom-control{margin-left: 25px}
    .pagination{margin: 0; float:right}
    #moveColumn,#num{display:none}
</style>

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
    
<?php if(!$modelStatus): ?>
<div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <i class="fa fa-warning"></i> 栏目绑定的内容模型已经被冻结不可操作
</div>
<?php endif; ?>
<div class="panel">
    <div class="panel-heading">
        <span class="panel-title">栏目【<?php echo htmlentities($columnTitle); ?>】下的内容</span>
        <div class="panel-heading-controls">
            <?php if($ExtModelId): ?><a class="btn btn-xs btn-primary" href="<?php echo url('content/'.$columnName,['act'=>'page']); ?>"><i class="fa fa-plus"></i> 栏目拓展内容</a><?php endif; ?>
            <a class="btn btn-xs btn-primary" href="<?php echo url('add',['cname'=>$columnName]); ?>"><i class="fa fa-plus"></i> 新增内容</a>
        </div>
    </div>
    <div class="panel-body">
        <form class="form-inline m-b-2 text-right" method="get">
            <div class="form-group">
                <label class="sr-only" for="form-inline-input-6">搜索关键字</label>
                <input type="text" name="keyword" class="form-control" id="form-inline-input-6" value="<?php echo htmlentities(app('request')->get('keyword')); ?>" placeholder="搜索关键字">
            </div>
            <button type="submit" class="btn btn-primary">搜索</button>
        </form>

        <form action="<?php echo url('delete',['mid'=>$listModelId]); ?>" method="post" id="doform">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th width="85">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="chkAll"  class="custom-control-input" onClick="CheckAll(this.form)">
                                <span class="custom-control-indicator"></span>&nbsp;
                            </label>
                        </th>
                        <th>ID</th>
                        <?php if(is_array($fieldArr) || $fieldArr instanceof \think\Collection || $fieldArr instanceof \think\Paginator): $i = 0; $__LIST__ = $fieldArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        
                        <th><?php echo htmlentities($vo['title']); ?></th>
                        <?php endforeach; endif; else: echo "" ;endif; if(!empty($places)): ?>
                       <th width="70">
                       <div id="locat" class="btn btn-sm btn-default" data-state="0">推荐位</div>
                       </th>
                       <?php endif; ?>
                       <th>发布人</th>
                       <th width="60">点击量</th>
                       <th width="160">更新时间</th>
                       <th width="50">排序</th>
                       <th width="60">状态</th>
                       <th width="100">操作</th>
                    </tr>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['status'] != '2'): ?>
                    <tr id="<?php echo htmlentities($vo['id']); ?>">
                        <td>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="ids[]"  class="custom-control-input" value="<?php echo htmlentities($vo['id']); ?>">
                                <span class="custom-control-indicator"></span>&nbsp;
                            </label>
                        </td>
                        <td width="70"><?php echo htmlentities($vo['id']); ?></td>
                        <?php if(is_array($fieldArr) || $fieldArr instanceof \think\Collection || $fieldArr instanceof \think\Paginator): $i = 0; $__LIST__ = $fieldArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($i==1): ?>
                        <td><a href="<?php if($columnList[$vo['cname']]['type']==2): ?><?php echo appUrl('index',$vo['cname'].'/'.$vo['id']); else: ?><?php echo appUrl('index',$vo['cname']); endif; ?>"
                               target="_blank" ><?php echo htmlentities($vo[$v['name']]); ?></a></td>
                        <?php else: ?>
                        <td><?php echo htmlentities($vo[$v['name']]); ?></td>
                        <?php endif; endforeach; endif; else: echo "" ;endif; if(!empty($places)): ?>
                        <td align="center" class="font-size-16">
                            <?php $vo['places']=substr($vo['places'],1); if(''!=$vo['places']): $nowPlaceArr=explode(',',$vo['places']);$vo['places']=''; foreach($nowPlaceArr as $p): if($p): $vo['places'].=' '.$places[$p]; endif; endforeach; ?>
                            <i  class="fa fa-bookmark-o" data-toggle="tooltip" data-placement="right" data-state="primary"  data-original-title="<?php echo htmlentities($vo['places']); ?>"></i>
                            <?php endif; ?>
                        </td>
                        <?php endif; ?>
                        <td><?php echo getMemberName($vo['uid']); ?></td>
                        <td><?php echo htmlentities($vo['hits']); ?></td>
                        <td><?php echo date('Y-m-d H:i:s',$vo['update_time']); ?></td>
                        <td><table class="editable-table" width="100%" height="100%"><tr><td><?php echo htmlentities($vo['orders']); ?></td></tr></table></td>
                        <td>
                            <?php if($vo['status']): ?>
                            <button  data-id="0" type="button" class="btn btn-sm btn-primary btn-rounded status">启用</button>
                            <?php else: ?>
                            <button  data-id="1"  type="button" class="btn btn-sm btn-default btn-rounded status">禁用</button>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo url('edit',['cname'=>$columnName,'id'=>$vo['id'], 'tableName'=>$tableName]); ?>"><i  class="fa fa-edit btn  btn-sm btn-primary" data-toggle="tooltip" data-placement="top"  data-original-title="编辑"></i></a> 

                            <i  class="fa fa-times btn  btn-sm btn-warning del" data-toggle="tooltip" data-placement="top"  data-original-title="删除"></i>
                        </td>
                    </tr>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    <tr>
                        <td colspan="11">
                            <div class="form-inline">
                                <div class="form-group">
                                    <select  class="form-control" id="dotype">
                                        <option value="delete">删除</option>
                                        <option value="move">移动</option>
                                        <option value="copy">复制</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control"  name="cname"  id="moveColumn">

                                    </select>
                                </div>
                                <div class="form-group"><input class="form-control" type="number" name="num" id="num" value="" size="2" placeholder="复制次数(默认1次)"></div>
                                <button type="button" class="btn btn-primary" id="subform">执行</button>
                            </div>
                        </td>
                    </tr>
                    <?php if($page): ?>
                    <tr>
                        <td colspan="11">
                            <?php echo $page; ?>
                        </td>
                    </tr>
                    <?php endif; ?>
                </table>
            </div>
        </form>
    </div>
</div>

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
    var modelId = '<?php echo htmlentities($listModelId); ?>';
    var ColumnContentNode = new Object();
    function CheckAll(form) {
        for (var i = 0; i < form.elements.length; i++) {
            var e = form.elements[i];
            if (e.Name !== "chkAll" && e.disabled !== true)
                e.checked = form.chkAll.checked;
        }
    }
    function delEvevt() {
        $('#doform').attr('action', "<?php echo url('delete',['mid'=>$listModelId]); ?>");
        $('#subform').unbind();
        $('#subform').click(function () {
            bootbox.confirm({
                message: '删除后不可恢复~确定要执行吗？',
                className: 'bootbox-sm',
                callback: function (result) {
                    if (result) {
                        $('#doform').submit();
                    }
                }
            });
        });
        $('#num').hide();
        $('#moveColumn').hide();
    }
    function moveEvevt() {
        $('#doform').attr('action', "<?php echo url('move',['mid'=>$listModelId]); ?>");
        $('#subform').unbind();
        $('#subform').click(function () {
            bootbox.confirm({
                message: '移动栏目后不可恢复~确定要执行吗？',
                className: 'bootbox-sm',
                callback: function (result) {
                    if (result) {
                        $('#doform').submit();
                    }
                }
            });
        });
        $('#num').hide();
        $('#moveColumn').show();
    }
    function copyEvevt() {
        $('#doform').attr('action', "<?php echo url('copy',['mid'=>$listModelId]); ?>");
        $('#subform').unbind();
        $('#subform').click(function () {
            bootbox.confirm({
                message: '复制会在数据库中重复生成信息~确定要执行吗？',
                className: 'bootbox-sm',
                callback: function (result) {
                    if (result) {
                        $('#doform').submit();
                    }
                }
            });
        });
        $('#moveColumn').show();
        $('#num').show();
    }

    function findColumnContentNode(menuNode) {
        for (var i in menuNode) {
            if (57==menuNode[i].id) {
                ColumnContentNode = menuNode[i].cnode;
                return;
            }
            if(menuNode[i].cnode !== undefined){
                findColumnContentNode(menuNode[i].cnode);
            }
        }
    }

    function MoveColumnOption(ColumnContentNode,num) {
        var deepNum=num?num:0;
        var columnOption = '';
        for (var i in ColumnContentNode) {
            if(ColumnContentNode[i].ifvisible && ColumnContentNode[i].url_value){
                var urlArr=ColumnContentNode[i].url_value.split("/");
                var deepStr=new String("┝┈┈").repeat(deepNum);
                if('admin'==urlArr[0] && 'content'==urlArr[1]){
                    columnOption+='<option value="'+urlArr[2]+'">'+deepStr+ColumnContentNode[i].title+'</option>';
                }
            }
            if(ColumnContentNode[i].cnode !== undefined){
                columnOption+=MoveColumnOption(ColumnContentNode[i].cnode,deepNum+1);
            }
        }
        return columnOption;
    }

    $(function () {
        //设置移动栏目选项
        findColumnContentNode(menu);
        var optionContent=MoveColumnOption(ColumnContentNode);
        $('#moveColumn').html(optionContent);

        $('[data-toggle="tooltip"]').tooltip();
        delEvevt();
        $('#dotype').change(function () {
            if ('delete' === $(this).val()) {
                delEvevt();
            } else if ('move' === $(this).val()) {
                moveEvevt();
            } else if ('copy' === $(this).val()) {
                copyEvevt();
            }
        });
        //排序
        $('.editable-table').each(function () {
            $(this).editableTableWidget({
                editor: $('<input class="form-control">')
            });
        });
        //定位标签隐显
        $('#locat').click(function () {
            if (0 == $(this).attr('data-state')) {
                $(".fa-bookmark-o").tooltip('show');
                $(this).attr('data-state','1');
                $(this).addClass('btn-primary');
                $(this).removeClass('btn-default');
            }else{
                $(".fa-bookmark-o").tooltip('hide');
                $(this).attr('data-state','0');
                $(this).addClass('btn-default');
                $(this).removeClass('btn-primary');
            }
        });
        $('.editable-table td').on('change', function (evt, newValue) {
            var id = $(this).parent().parent().parent().parent().parent().attr('id');
            var ifchange = false;
            $.ajax({
                async: false,
                url: "<?php echo url('changeorder'); ?>",
                type: "GET",
                data: {
                    mid: modelId,
                    id: id,
                    num: newValue
                },
                dataType: 'text',
                success: function (data) {
                    if (data === 'true') {
                        ifchange = true;
                        // alert(ifchange);
                    } else {
                        toastr['warning'](data, '', {
                            closeButton: true
                        });
                    }
                }
            });
            return ifchange;
        });
        $('#del').click(function () {
            bootbox.confirm({
                message: '确认删除吗？删除后不可恢复',
                className: 'bootbox-sm',
                callback: function (result) {
                    if (result) {
                        $('#tabledeal').submit();
                    }
                }
            });
        });
        $('.status').click(function () {
            var nowdom = $(this);
            var id = nowdom.parent().parent().attr('id');
            var status = nowdom.attr('data-id');
            $.ajax({
                url: "<?php echo url('setstate'); ?>",
                type: "GET",
                data: {
                    mid: modelId,
                    id: id,
                    status: status
                },
                dataType: 'text',
                success: function (data) {
                    if (data === 'true') {
                        if (status == 1) {
                            nowdom.addClass('btn-primary');
                            nowdom.attr('data-id', '0');
                            nowdom.html('启用');
                        }
                        if (status == 0) {
                            nowdom.removeClass('btn-primary');
                            nowdom.attr('data-id', '1');
                            nowdom.html('禁用');
                        }
                    } else {
                        toastr['warning'](data, '', {
                            closeButton: true
                        });
                    }
                }
            });
        });

        $('.del').click(function () {
            var nowdom = $(this).parent().parent();
            bootbox.confirm({
                message: '确认删除吗？删除后不可恢复000',
                className: 'bootbox-sm',
                callback: function (result) {
                    if (result) {
                        var id = nowdom.attr('id');
                        $.ajax({
                            url: "<?php echo url('delete'); ?>",
                            type: "GET",
                            data: {
                                mid: modelId,
                                id: id
                            },
                            dataType: 'text',
                            success: function (data) {
                                if (data === 'true') {
                                   
                                    nowdom.remove();
                                    toastr['success']('信息删除成功~', '', {
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
    });
</script>

</body>
</html>