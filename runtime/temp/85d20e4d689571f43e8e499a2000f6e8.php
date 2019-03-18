<?php /*a:1:{s:61:"E:\phpstudy\WWW\xzj\application\admin\view\prompt_dialog.html";i:1536313760;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <title>信之家对话提示</title>
        <link href="/public/static/admin/assets/static/font-awesome.min.css" rel="stylesheet" >
        <!-- DEMO ONLY: Function for the proper stylesheet loading according to the demo settings -->
        <script>function _pxDemo_loadStylesheet(a, b, c) {
                var c = c || decodeURIComponent((new RegExp(";\\s*" + encodeURIComponent("px-demo-theme") + "\\s*=\\s*([^;]+)\\s*;", "g").exec(";" + document.cookie + ";") || [])[1] || "clean"), d = "rtl" === document.getElementsByTagName("html")[0].getAttribute("dir");
                document.write(a.replace(/^(.*?)((?:\.min)?\.css)$/, '<link href="$1' + (c.indexOf("dark") !== -1 && a.indexOf("/css/") !== -1 && a.indexOf("/themes/") === -1 ? "-dark" : "") + (!d || 0 !== a.indexOf("assets/css") && 0 !== a.indexOf("assets/demo") ? "" : ".rtl") + '$2" rel="stylesheet" type="text/css"' + (b ? 'class="' + b + '"' : "") + ">"))
            }</script>

        <!-- DEMO ONLY: Load PixelAdmin core stylesheets -->
        <script>
            _pxDemo_loadStylesheet('/public/static/admin/assets/css/bootstrap.min.css', 'px-demo-stylesheet-bs');
            _pxDemo_loadStylesheet('/public/static/admin/assets/css/pixeladmin.min.css', 'px-demo-stylesheet-core');
        </script>
        <!-- / Custom styling -->
    </head>
    <body>
        <div class="px-content ">
            <div class="modal fade modal-alert modal-<?php echo htmlentities($style['color']); ?> in" style="display: block;background-color: #ededec">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header"><i class="fa <?php echo htmlentities($style['icon']); ?>"></i></div>
                        <div class="modal-title"><h4><?php echo strip_tags($msg); ?></h4></div>
                        <div class="modal-footer">
                            <?php if(is_array($urls) || $urls instanceof \think\Collection || $urls instanceof \think\Paginator): $i = 0; $__LIST__ = $urls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                               <a type="button right" class="btn btn-<?php echo htmlentities($vo['class']); ?> " data-dismiss="modal" href="<?php echo htmlentities($vo['url']); ?>" ><?php echo htmlentities($vo['title']); ?> </a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
