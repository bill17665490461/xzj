<?php /*a:1:{s:59:"E:\phpstudy\WWW\xzj\application\admin\view\prompt_jump.html";i:1536313767;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <title>信之家跳转提示</title>
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
            <div class="modal fade modal-alert modal-<?php if($code): ?>success<?php else: ?>warning<?php endif; ?> in" style="display: block;background-color: #ededec">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header"><i class="fa fa-<?php if($code): ?>check-circle<?php else: ?>warning<?php endif; ?>"></i></div>
                        <div class="modal-title"><h4 style="line-height: 28px"><?php echo $msg; ?></h4></div>
                        <div class="modal-body"><b id="wait"><?php echo htmlentities($wait); ?></b>秒后页面自动跳转</div>
                        <div class="modal-footer">
                            <a type="button right" class="btn btn-<?php if($code): ?>success<?php else: ?>warning<?php endif; ?> " data-dismiss="modal" href="<?php echo htmlentities($url); ?>" id="href">返回</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/public/static/jquery.min.js"></script>
        <script>
        $(function () {
            var wait = document.getElementById('wait'),
                    href = document.getElementById('href').href;
            var interval = setInterval(function () {
                var time = --wait.innerHTML;
                if (time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                }
                ;
            }, 1000);
        });
        </script>

    </body>
</html>
