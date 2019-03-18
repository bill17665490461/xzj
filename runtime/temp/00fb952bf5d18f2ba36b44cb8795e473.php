<?php /*a:3:{s:60:"E:\phpstudy\WWW\xzj\application\admin\view\content\edit.html";i:1536562387;s:54:"E:\phpstudy\WWW\xzj\application\admin\view\layout.html";i:1537961176;s:57:"E:\phpstudy\WWW\xzj\application\admin\view\inputItem.html";i:1536561739;}*/ ?>
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
    
<div class="panel">
    <div class="panel-heading">
        <div class="panel-title">编辑【<?php echo htmlentities($columnTitle); ?>】下ID-<?php echo htmlentities($id); ?>的内容</div>
    </div>
    <form class="panel-body" method="post" action="<?php echo url('edit',['cname'=>$fieldList['cname']['value']]); ?>">
        <?php if($cname=='government' OR $cname=='investmentpark'): ?>
           <fieldset class="form-group">
                <label style="clear:both; display: block">项目类型：</label>
                <select class="form-control" name="cate_id">
                    <option>请选择</option>
                    <?php if(is_array($catetypeList) || $catetypeList instanceof \think\Collection || $catetypeList instanceof \think\Paginator): $i = 0; $__LIST__ = $catetypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo['id']); ?>" <?php if($vo['id'] == $cateInfo['id']): ?>  selected = "selected"<?php endif; ?>><?php echo htmlentities($vo['title']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </fieldset>
            <fieldset class="form-inline">
                <label style="clear:both; display: block">项目地址：</label>
                <div id="distpicker">
                    <div class="form-group">
                      <label class="sr-only" for="province">Province</label>
                      <select class="form-control" data-province="<?php echo area($article['province']); ?>" id="province" name="province"></select>
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="city" >City</label>
                      <select class="form-control"  data-city="<?php echo area($article['city']); ?>" id="city" name="city"></select>
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="district">District</label>
                      <select class="form-control" data-district="<?php echo area($article['district']); ?>" id="district" name="district"></select>
                    </div>
                </div>
                <script>
                    $("#distpicker").distpicker({
                      autoSelect: false;
                    });
                </script>
            </fieldset>
            
        <?php endif; ?>
        <style>
    .configImage,.configFile{min-height:100px; padding-bottom: 20px; }
    .configFile .dz-thumbnail{display:none}
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
    .edui-default * {color:#333}
</style>

<?php if(is_array($fieldList) || $fieldList instanceof \think\Collection || $fieldList instanceof \think\Paginator): $i = 0; $__LIST__ = $fieldList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!isset($vo['ifeditable'])||$vo['ifeditable']): switch($vo['type']): case "hidden": if($vo['value']): ?><input type="hidden" class="form-control" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]"  value="<?php echo htmlentities($vo['value']); ?>"><?php endif; break; case "text": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="text" class="form-control" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>" value="<?php echo htmlentities($vo['value']); ?>">
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "textarea": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <textarea class="form-control" rows="5" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>"><?php echo htmlentities($vo['value']); ?></textarea>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "checkbox": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <?php if(is_array($vo['options']) || $vo['options'] instanceof \think\Collection || $vo['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <label class="custom-control custom-checkbox checkbox-inline">
        <input type="checkbox" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>][]" class="custom-control-input" value="<?php echo htmlentities($key); ?>" <?php if(in_array($key,$vo['value'])): ?>checked=''<?php endif; ?>>
               <span class="custom-control-indicator"></span><?php echo htmlentities($v); ?>
    </label>
    <?php endforeach; endif; else: echo "" ;endif; if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "radio": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <?php if(is_array($vo['options']) || $vo['options'] instanceof \think\Collection || $vo['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <label class="custom-control custom-radio radio-inline">
        <input type="radio" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" class="custom-control-input" value="<?php echo htmlentities($key); ?>" <?php if($key==$vo ['value']): ?>checked=''<?php endif; ?>>
               <span class="custom-control-indicator"></span><?php echo htmlentities($v); ?>
    </label>
    <?php endforeach; endif; else: echo "" ;endif; if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "switch": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <label for="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" class="switcher switcher-primary">
        <input type="checkbox" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" value="1" id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" <?php if(1==$vo['value']): ?>checked=''<?php endif; ?>>
        <div class="switcher-indicator">
            <div class="switcher-yes">开</div>
            <div class="switcher-no">关</div>
        </div>
        &nbsp;
    </label>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "array": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <textarea class="form-control" rows="5" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="<?php echo htmlentities($vo['title']); ?>"><?php echo htmlentities($vo['value']); ?></textarea>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "select": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    
    <!-- <?php if($vo['name'] == 'province'): ?>
        <fieldset class="form-inline">
            <label style="clear:both; display: block"></label>
            <div id="distpicker">
                <div class="form-group">
                  <label class="sr-only" for="province">Province</label>
                  <select class="form-control" data-province="<?php echo area($article['province']); ?>" id="province" name="province"></select>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="city" >City</label>
                  <select class="form-control"  data-city="<?php echo area($article['city']); ?>" id="city" name="city"></select>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="district">District</label>
                  <select class="form-control" data-district="<?php echo area($article['district']); ?>" id="district" name="district"></select>
                </div>
            </div>
            <script>
                $("#distpicker").distpicker({
                  autoSelect: false
                });
            </script>
        </fieldset>
    
    <?php else: ?>
    <select name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" class="form-control">
        <?php if(is_array($vo['options']) || $vo['options'] instanceof \think\Collection || $vo['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <option value="<?php echo htmlentities($key); ?>"  <?php if($key==$vo['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v); ?></option>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
    <?php endif; ?> -->
    <select name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" class="form-control">
        <?php if(is_array($vo['options']) || $vo['options'] instanceof \think\Collection || $vo['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <option value="<?php echo htmlentities($key); ?>"  <?php if($key==$vo['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v); ?></option>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "image": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="hidden" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]"  value="<?php echo htmlentities($vo['value']); ?>" >
    <div id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" class="configImage b-a-2 border-default" >
         <div class="dz-default dz-message text-light">
            <i class="fa fa-plus"></i>
        </div>
    </div>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
    <script>
        $(function () {
            var thisdom = $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>');
            var inputdom = thisdom.prev('input');
            var nowPicid=inputdom.val();
            
            var files={};
            if(''!=inputdom.val()){
                
                     $.ajax({
                            url : "<?php echo url('/member/filemanage/ajaxGetFileInfo'); ?>",
                            type : 'post',
                            dataType: "json",
                            async: false,
                            data : {ids: nowPicid},
                            success : function(data){
                                
                               if (''!=data) {
                                  files=data;
                               }
                            }
                     });
            }
            thisdom.dropzone({
                url: "<?php echo url('filemanage/upload',$vo['param']); ?>",
                dictRemoveFile: "删除图片",
                init: function () {
                    //回调已上传图片
                     if (!jQuery.isEmptyObject(files)) {
                        var mockFile = {
                            name: files.name,
                            size: files.size,
                            accepted: true,
                            status: 'success',
                            processing: false
                        };
                        this.options.addedfile.call(this, mockFile);
                        this.options.thumbnail.call(this, mockFile, '/public/uploads/'+files.path);
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
                        //移除当前图片恢复之前图片
                        this.removeFile(file);
                         if (!jQuery.isEmptyObject(files)) {
                            var mockFile = {
                                  name: files.name,
                                  size: files.size,
                                  accepted: true,
                                  status: 'success',
                                  processing: false
                            };
                            this.options.addedfile.call(this, mockFile);
                            this.options.thumbnail.call(this, mockFile, '/public/uploads/'+files.path);
                            this.files[0] = mockFile;
                            delImgEvent(thisdom);
                        }
                    }
                }
            });
            function delImgEvent(dom) {
                dom.find('.dz-remove').click(function () {
                    bootbox.confirm({
                        message: '只从这里删除,但仍然保留在服务器中？',
                        className: 'bootbox-sm',
                        buttons: {
                               confirm: {
                                    label: '是的',
                                    className: 'btn-success'
                                },
                                cancel: {
                                    label: '从服务器删除',
                                    className: 'btn-default'
                                }
                        },
                        callback: function (result) {
                            if (!result) {
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
                            inputdom.attr('value','');
                        }
                    });
                });
            }
        });
    </script>
</fieldset>
<?php break; case "images": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="hidden" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]"  value="<?php echo htmlentities($vo['value']); ?>" >
    <div id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" class="configImage b-a-2 border-default" >
        <div class="dz-default dz-message text-light ">
            <i class="fa fa-plus-circle"></i>
        </div>
    </div>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
    <script>
        $(function () {
            var thisdom = $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>');
            var inputdom = thisdom.prev('input');
            var nowPicid=inputdom.val();
            var files={};
            if(''!=nowPicid){

                    $.ajax({
                            url : "<?php echo url('filemanage/ajaxgetfileinfo'); ?>",
                            type : 'post',
                            dataType: "json",
                            async: false,
                            data : {ids: nowPicid},
                            success : function(data){
                               if (''!=data) {
                                  files=data;
                               }
                            }
                     });
            }
            
            thisdom.dropzone({
                url: "<?php echo url('filemanage/upload',$vo['param']); ?>",
                dictRemoveFile: "删除图片",
                init: function () {
                    var mockFile = {};
                    //回调已上传图片
                    if (!jQuery.isEmptyObject(files)) {
                        var n = 0;
                        for (var i in files) {
                            mockFile = {
                                name: files[i].name,
                                size: files[i].size,
                                status: 'success',
                                processing: false,
                                accepted: true,
                            };
                            this.options.addedfile.call(this, mockFile);
                            this.options.thumbnail.call(this, mockFile, '/public/uploads/' + files[i].path);
                            this.files[n] = mockFile;
                            //增加图片id属性用于删除
                            mockFile.previewElement.id = files[i].id;
                            n++;
                        }
                    }
                    //移除文件时清空图片id
                    this.on("removedfile", function (file) {
                        if(file.previewElement.id){
                        var nowids = inputdom.attr('value');
                        var nowidArr = nowids.split(",");
                        nowids = '';
                        for (var i = 0; i < nowidArr.length; i++) {
                            if (nowidArr[i] != file.previewElement.id && nowidArr[i] != '') {
                                nowids += nowidArr[i] + ',';
                            }
                        }
                        inputdom.attr('value', nowids);
                        bootbox.confirm({
                             message: '只从这里删除,但仍然保留在服务器中？',
                             className: 'bootbox-sm',
                             buttons: {
                               confirm: {
                                    label: '是的',
                                    className: 'btn-success'
                                },
                                cancel: {
                                    label: '从服务器删除',
                                    className: 'btn-default'
                                }
                             },
                            callback: function (result) {
                                if (!result) {
                                    $.get("<?php echo url('filemanage/delete'); ?>", {id: file.previewElement.id},
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
                    }
                    });
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
                success: function (file, response, e) {
                    if (response.status == 1) {
                        var nowids = inputdom.attr('value');
                        inputdom.attr('value', nowids + response.id + ',');
                        //增加图片id属性
                        file.previewElement.id = response.id;
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
                        this.removeFile(file);
                    }
                }
            });
        });
    </script>
</fieldset>
<?php break; case "files": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="hidden" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]"  value="<?php echo htmlentities($vo['value']); ?>" >
    <div id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" class="configFile b-a-2 border-default" >
        <div class="dz-default dz-message text-light ">
            <i class="fa fa-plus-circle"></i>
        </div>
    </div>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
    <script>
        $(function () {
            var thisdom = $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>');
            var inputdom = thisdom.prev('input');
            var nowPicid=inputdom.val();
            var files={};
            if(''!=nowPicid){
                     $.ajax({
                            url : "<?php echo url('filemanage/ajaxgetfileinfo'); ?>",
                            type : 'post',
                            dataType: "json",
                            async: false,
                            data : {ids: nowPicid},
                            success : function(data){
                               if (''!=data) {
                                  files=data;
                               }
                            }
                     });
            }
            thisdom.dropzone({
                url: "<?php echo url('filemanage/upload',$vo['param']); ?>",
                dictRemoveFile: "删除文件",
                init: function () {
                    var mockFile = {};
                    //回调已上传文件
                    if (!jQuery.isEmptyObject(files)) {
                        var n = 0;
                        for (var i in files) {
                            mockFile = {
                                name: files[i].name,
                                size: files[i].size,
                                status: 'success',
                                processing: false,
                                accepted: true,
                            };
                            this.options.addedfile.call(this, mockFile);
                            this.files[n] = mockFile;
                            //增加图片id属性用于删除
                            mockFile.previewElement.id = files[i].id;
                            n++;
                        }
                    }
                    //移除文件时清空图片id
                    this.on("removedfile", function (file) {
                        if(file.previewElement.id){
                        var nowids = inputdom.attr('value');
                        var nowidArr = nowids.split(",");
                        nowids = '';
                        for (var i = 0; i < nowidArr.length; i++) {
                            if (nowidArr[i] != file.previewElement.id && nowidArr[i] != '') {
                                nowids += nowidArr[i] + ',';
                            }
                        }
                        inputdom.attr('value', nowids);
                        bootbox.confirm({
                            message: '只从这里删除,但仍然保留在服务器中？',
                             className: 'bootbox-sm',
                             buttons: {
                               confirm: {
                                    label: '是的',
                                    className: 'btn-success'
                                },
                                cancel: {
                                    label: '从服务器删除',
                                    className: 'btn-default'
                                }
                             },
                            callback: function (result) {
                                if (!result) {
                                    $.get("<?php echo url('filemanage/delete'); ?>", {id: file.previewElement.id},
                                            function (data) {
                                                if (data === 'true') {
                                                    toastr['success']('文件删除成功~', '', {
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
                        }
                    });
                },
                success: function (file, response, e) {
                    if (response.status == 1) {
                        var nowids = inputdom.attr('value');
                        inputdom.attr('value', nowids + response.id + ',');
                        //增加图片id属性
                        file.previewElement.id = response.id;
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
                        this.removeFile(file);
                    }
                }
            });
        });
    </script>
</fieldset>
<?php break; case "tags": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" type="text" value="<?php echo htmlentities($vo['value']); ?>"  class="form-control select2-primary">
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
    <script>
        $(function () {
            $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>').tagsinput({tagClass: 'label label-primary'});
        });
    </script>
</fieldset>
<?php break; case "number": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="number" class="form-control" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>" value="<?php echo htmlentities($vo['value']); ?>">
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "datetime": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="text" class="form-control" id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>" value="<?php echo htmlentities($vo['value']); ?>">
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
    <script>
        $(function () {
            $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                timePicker: true, //是否显示小时和分钟  
                timePickerIncrement: 1, //时间的增量，单位为分钟  
                timePicker12Hour: false, //是否使用12小时制来显示时间  
                locale: {
                    format: 'YYYY-MM-DD HH:mm:ss',
                    daysOfWeek: ['日', '一', '二', '三', '四', '五', '六'],
                    monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
                    applyLabel: '确定',
                    cancelLabel: '取消',
                    firstDay: 1
                }
            }, function (start, end, label) {
            }).on('cancel.daterangepicker', function () {
                $(this).val('');
            });
        });
    </script>
</fieldset>
<?php break; case "color": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="text" id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" class="form-control" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" value="<?php echo htmlentities($vo['value']); ?>"  placeholder="请选择<?php echo htmlentities($vo['title']); ?>">
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<script>
    $(function () {
        $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>').minicolors({
            control: 'hue',
            position: 'bottom left',
        });
    })
</script>
<?php break; case "Ueditor": ?>
<script type="text/javascript">
    if("undefined" == typeof UE){ 
        document.write('<scr'+'ipt type="text/javascript" src="/public/static/ueditor/ueditor.config.js"></sc'+'ript>');
        document.write('<scr'+'ipt type="text/javascript" src="/public/static/ueditor/editor_api.js" data-bind="/public/static/ueditor/_src/"  id="uapi"></sc'+'ript>');
    }
    $(function () {
// 百度编辑器ajax注销
       if("undefined" != typeof ueditid){
           ueditid+='<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>,';
        }
        var <?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?> = UE.getEditor('<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>', {
            initialFrameWidth: null,
            initialFrameHeight: 250,
            serverUrl: "<?php echo url('filemanage/upload',['module'=>'admin','from'=>'ueditor']); ?>"
        });

        //图片本地化
        $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>getimg').click(function(){
    var now=$(this);
    now.addClass('btn-loading');
    var con=<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>.getContent();
    $.post("<?php echo url('filemanage/geturlfile'); ?>", {'content':con,'type':'images'},
    function(data){
        <?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>.setContent(data);
        now.removeClass('btn-loading');
        toastr['success']('图片本地化完成', '', {
                            closeButton: true
                      });
    },'html');
        })
        //标签增加链接
        var num=0;
        $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>getlink').click(function(){
    var now=$(this);
    now.addClass('btn-loading');
    var con=<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>.getContent();
    $.post("<?php echo url('tag/gettaglink'); ?>", {'content':con,'mid':<?php if(isset($mid)): ?><?php echo htmlentities($mid); else: ?>0<?php endif; ?>,'num':num},
    function(data){
        <?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>.setContent(data);
        now.removeClass('btn-loading');
        num++;
        toastr['success']('链接添加完成'+num+'次', '', {
                           closeButton: true
                      });
    },'html');
        })
    })
</script>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <script type="text/plain" id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" >
        <?php echo $vo['value']; ?>
    </script>
    <div class="m-t-1">
        <div id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>getimg" class="btn btn-default"><i class="fa fa-image"></i> 图片本地化</div>
        <div id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>getlink" class="btn btn-default"><i class="fa fa-link"></i> 内容TAG链接</div>
    </div>
</fieldset>
<?php break; case "summernote": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <textarea class="form-control"  id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>"><?php echo htmlentities($vo['value']); ?></textarea>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo htmlentities($vo['remark']); ?></small><?php endif; ?>
</fieldset>
<script>
  $(function() {
      $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>').summernote({
        height: 200,
        toolbar: [
          ['parastyle', ['style']],
          ['fontstyle', ['fontname', 'fontsize']],
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          ['insert', ['picture', 'link', 'video', 'table', 'hr']],
          ['history', ['undo', 'redo']],
          ['misc', ['codeview', 'fullscreen']],
          ['help', ['help']]
        ],
        lang: 'zh-CN'
      });
    });
</script>
<?php break; endswitch; endif; endforeach; endif; else: echo "" ;endif; if(isset($placeList) && !empty($placeList)): ?>
        <fieldset class="form-group">
            <label  style="clear:both; display: block">推荐位</label>
            <?php if(is_array($placeList) || $placeList instanceof \think\Collection || $placeList instanceof \think\Paginator): $i = 0; $__LIST__ = $placeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <label class="custom-control custom-checkbox checkbox-inline">
                <input type="checkbox" name="modelField[places][]" class="custom-control-input" value="<?php echo htmlentities($key); ?>" <?php if(in_array($key,$fieldList['places']['value'])): ?>checked=''<?php endif; ?>>
                <span class="custom-control-indicator"></span><?php echo htmlentities($vo); ?>
            </label>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </fieldset>
        <?php endif; ?>
        <div class="panel-footer text-right">
            <input type="submit" class="btn btn-primary" value="确认编辑">
        </div>
    </form>
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

</body>
</html>