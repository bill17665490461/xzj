<?php /*a:2:{s:59:"E:\phpstudy\WWW\xzj\application\admin\view\model\index.html";i:1526437412;s:54:"E:\phpstudy\WWW\xzj\application\admin\view\layout.html";i:1537961176;}*/ ?>
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
    .custom-control {
        margin-left: 18px
    }

    .pagination {
        margin: 0;
        float: right
    }
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
    
<div class="panel">
    <div class="panel-heading">
        <span class="panel-title">模型列表</span>
        <div class="panel-heading-controls">
            <a class="btn btn-xs btn-primary" href="<?php echo url('add'); ?>"><i class="fa fa-plus"></i> 新增模型</a>
        </div>
    </div>
    <div class="panel-body">
        <form action="<?php echo url('delete'); ?>" method="post" id="tabledeal">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th width="60">ID</th>
                        <th>模型名称</th>
                        <th>表名</th>
                        <th width="70">类型</th>
                        <th width="80">用途</th>
                        <th width="160">创建时间</th>
                        <th width="80">数据管理</th>
                        <th width="60">投稿</th>
                        <th width="60">状态</th>
                        <th width="120">操作</th>
                    </tr>
                    <?php if(is_array($mlist) || $mlist instanceof \think\Collection || $mlist instanceof \think\Paginator): $i = 0; $__LIST__ = $mlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr id="<?php echo htmlentities($vo['id']); ?>">
                        <td><?php echo htmlentities($vo['id']); ?></td>
                        <td><?php echo htmlentities($vo['title']); ?></td>
                        <td><?php echo htmlentities($vo['table']); ?></td>
                        <td><?php if($vo['type']==1): ?>独立表<?php elseif($vo['type']==2): ?>主附表<?php endif; ?></td>
                        <td><?php if($vo['purpose']=='column'): ?>栏目内容<?php elseif($vo['purpose']=='independence'): ?>独立内容<?php endif; ?></td>
                        <td><?php echo htmlentities($vo['create_time']); ?></td>
                        <td>
                            <a class="btn btn-xs btn-primary" href="<?php echo url('importdata',['mid'=>$vo['id']]); ?>" data-toggle="tooltip" data-placement="top" data-original-title="导入模型数据"><i class="fa fa-plus-square"></i></a>
                            <a class="btn btn-xs btn-primary" href="<?php echo url('exportdata',['mid'=>$vo['id']]); ?>" data-toggle="tooltip" data-placement="top" data-original-title="导出模型数据"><i class="fa fa-share"></i></a>
                        </td>
                        <td>
                            <?php if($vo['ifsub']): ?>
                            <button data-id="0" type="button" class="btn btn-sm btn-primary btn-rounded ifsub">允许</button>
                            <?php else: ?>
                            <button data-id="1" type="button" class="btn btn-sm btn-default btn-rounded ifsub">禁止</button>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($vo['status']): ?>
                            <button data-id="0" type="button" class="btn btn-sm btn-primary btn-rounded status">启用</button>
                            <?php else: ?>
                            <button data-id="1" type="button" class="btn btn-sm btn-default btn-rounded status">冻结</button>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo url('edit',['id'=>$vo['id']]); ?>"><i class="fa fa-edit btn  btn-sm btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="编辑"></i></a>
                            <a href="<?php echo url('field/index',['mid'=>$vo['id']]); ?>"><i class="fa fa-server btn  btn-sm btn-info" data-toggle="tooltip" data-placement="top" data-original-title="字段管理"></i></a>
                            <i class="fa fa-times btn btn-sm btn-warning del" data-toggle="tooltip" data-placement="top" data-original-title="删除"></i>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; if(!empty($page)): ?>
                    <tr>
                        <td colspan="9">
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
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('.del').click(function () {
            var nowdom = $(this).parent().parent();
            bootbox.confirm({
                message: '确认删除吗？删除后不可恢复',
                className: 'bootbox-sm',
                callback: function (result) {
                    if (result) {
                        var id = nowdom.attr('id');
                        $.ajax({
                            url: "<?php echo url('model/delete'); ?>",
                            type: "GET",
                            data: {
                                id: id
                            },
                            dataType: 'text',
                            success: function (data) {
                                if (data === 'true') {
                                    nowdom.remove();
                                    toastr['success']('模型删除成功~', '', {
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
        $('.status').click(function () {
            var nowdom = $(this);
            var id = nowdom.parent().parent().attr('id');
            var status = nowdom.attr('data-id');
            $.ajax({
                url: "<?php echo url('setstate'); ?>",
                type: "GET",
                data: {
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
                            nowdom.html('冻结');
                        }
                    } else {
                        toastr['warning'](data, '', {
                            closeButton: true
                        });
                    }
                }
            });
        });
        $('.ifsub').click(function () {
            var nowdom = $(this);
            var id = nowdom.parent().parent().attr('id');
            var status = nowdom.attr('data-id');
            $.ajax({
                url: "<?php echo url('setsub'); ?>",
                type: "GET",
                data: {
                    id: id,
                    status: status
                },
                dataType: 'text',
                success: function (data) {
                    if (data === 'true') {
                        if (status == 1) {
                            nowdom.addClass('btn-primary');
                            nowdom.attr('data-id', '0');
                            nowdom.html('允许');
                        }
                        if (status == 0) {
                            nowdom.removeClass('btn-primary');
                            nowdom.attr('data-id', '1');
                            nowdom.html('禁止');
                        }
                    } else {
                        toastr['warning'](data, '', {
                            closeButton: true
                        });
                    }
                }
            });
        });
    });
</script>

</body>
</html>