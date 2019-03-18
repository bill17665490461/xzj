<?php /*a:1:{s:58:"E:\phpstudy\WWW\xzj\application\admin\view\open\login.html";i:1507171755;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <title>UKcms后台入口</title>
        <meta name="description" content="简洁、灵活、强大的内容管理系统">
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
        <!-- DEMO ONLY: Function for the proper stylesheet loading according to the demo settings -->
        <script>function _pxDemo_loadStylesheet(a, b, c){var c = c || decodeURIComponent((new RegExp(";\\s*" + encodeURIComponent("px-demo-theme") + "\\s*=\\s*([^;]+)\\s*;", "g").exec(";" + document.cookie + ";") || [])[1] || "default"), d = "rtl" === document.getElementsByTagName("html")[0].getAttribute("dir"); document.write(a.replace(/^(.*?)((?:\.min)?\.css)$/, '<link href="$1' + (c.indexOf("dark") !== - 1 && a.indexOf("/css/") !== - 1 && a.indexOf("/themes/") === - 1?"-dark":"") + (!d || 0 !== a.indexOf("assets/css") && 0 !== a.indexOf("assets/demo")?"":".rtl") + '$2" rel="stylesheet" type="text/css"' + (b?'class="' + b + '"':"") + ">"))}</script>


        <!-- DEMO ONLY: Load PixelAdmin core stylesheets -->
        <script>
            _pxDemo_loadStylesheet('/public/static/admin/assets/css/bootstrap.min.css', 'px-demo-stylesheet-bs');
            _pxDemo_loadStylesheet('/public/static/admin/assets/css/pixeladmin.min.css', 'px-demo-stylesheet-core');
        </script>

        <!-- DEMO ONLY: Load theme -->
        <script>
            function _pxDemo_loadTheme(a){var b = decodeURIComponent((new RegExp(";\\s*" + encodeURIComponent("px-demo-theme") + "\\s*=\\s*([^;]+)\\s*;", "g").exec(";" + document.cookie + ";") || [])[1] || "default"); _pxDemo_loadStylesheet(a + b + ".min.css", "px-demo-stylesheet-theme", b)}
            _pxDemo_loadTheme('/public/static/admin/assets/css/themes/');
        </script>

        <!-- Demo assets -->
        <script>_pxDemo_loadStylesheet('/public/static/admin/assets/demo/demo.css');</script>
        <!-- / Demo assets -->

        <!-- Pace.js -->
        <script src="/public/static/admin/assets/js/pace.min.js"></script>

        <script id="demo" src="/public/static/admin/assets/demo/demo.js" data-bind="/public/static"></script>

        <!-- Custom styling -->
        <style>
            .page-signup-modal {
                position: relative;
                top: auto;
                right: auto;
                bottom: auto;
                left: auto;
                z-index: 1;
                display: block;
            }

            .page-signup-form-group { position: relative; }

            .page-signup-icon {
                position: absolute;
                line-height: 21px;
                width: 36px;
                border-color: rgba(0, 0, 0, .14);
                border-right-width: 1px;
                border-right-style: solid;
                left: 1px;
                top: 9px;
                text-align: center;
                font-size: 15px;
            }

            html[dir="rtl"] .page-signup-icon {
                border-right: 0;
                border-left-width: 1px;
                border-left-style: solid;
                left: auto;
                right: 1px;
            }

            html:not([dir="rtl"]) .page-signup-icon + .page-signup-form-control { padding-left: 50px; }
            html[dir="rtl"] .page-signup-icon + .page-signup-form-control { padding-right: 50px; }

            /* Margins */

            .page-signup-modal > .modal-dialog { margin: 30px 10px; }

            @media (min-width: 544px) {
                .page-signup-modal > .modal-dialog {
                    width: 400px;
                    margin: 60px auto;
                }
            }
        </style>
        <!-- / Custom styling -->
    </head>
    <body>
        <div class="page-signup-modal modal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="text-xs-center bg-primary p-y-4">
                        <a class="px-demo-brand px-demo-brand-lg" href="http://www.ukcms.com"><span class="px-demo-logo bg-primary m-t-0"><span class="px-demo-logo-1"></span><span class="px-demo-logo-2"></span><span class="px-demo-logo-3"></span><span class="px-demo-logo-4"></span><span class="px-demo-logo-5"></span><span class="px-demo-logo-6"></span><span class="px-demo-logo-7"></span><span class="px-demo-logo-8"></span><span class="px-demo-logo-9"></span></span><span class="font-size-20 line-height-1">UKcms</span></a>
                        <div class="font-size-15 m-t-1 line-height-1">简洁 . 灵活 . 强大</div>
                    </div>

                    <form action="<?php echo url('login'); ?>"  method="post" class="p-a-4">
                        <fieldset class="page-signup-form-group form-group form-group-lg">
                            <div class="page-signup-icon text-muted"><i class="ion-person"></i></div>
                            <input type="text" name="username" class="page-signup-form-control form-control" placeholder="用户名">
                        </fieldset>

                        <fieldset class="page-signup-form-group form-group form-group-lg">
                            <div class="page-signup-icon text-muted"><i class="ion-asterisk"></i></div>
                            <input type="password" name="password" class="page-signup-form-control form-control" placeholder="密码">
                        </fieldset>
                        <?php if($ifcaptcha): ?>
                        <fieldset class="page-signup-form-group form-group form-group-lg">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="验证码" name="captcha">
                                <span class="input-group-btn">
                                    <img src=""   id="captcha" width="129" height="40" style="cursor: pointer;" onclick="this.src = '<?php echo captcha_src(); ?>?m=' + Math.random();" title="点击刷新" alt="captcha" />
                                </span>
                            </div>
                        </fieldset>
                        <?php endif; ?>
                        <?php echo token(); ?>
                        <button type="submit" class="btn btn-block btn-lg btn-primary m-t-3">进入后台</button>
                    </form>

                    <div class="p-y-3 p-x-4 b-t-1 bg-white darken"><?php echo htmlentities(app('config')->get('sysinfo')); ?></div>
                </div>


            </div>
        </div>

        <!-- jQuery -->
        <script src="/public/static/jquery.min.js"></script>

        <script src="/public/static/admin/assets/js/bootstrap.min.js"></script>
        <script src="/public/static/admin/assets/js/pixeladmin.min.js"></script>

        <script>
                            // -------------------------------------------------------------------------
                            // Initialize page components

                            $(function() {
                            pxDemo.initializeBgsDemo('body', 1, '#000', function(isBgSet) {
                            $('#px-demo-signin-link, #px-demo-signin-link a')
                                    .addClass(isBgSet ? 'text-white' : 'text-muted')
                                    .removeClass(isBgSet ? 'text-muted' : 'text-white');
                            });
                             $('#captcha').attr('src', '<?php echo captcha_src(); ?>?m=' + Math.random());
                            });
        </script>
    </body>
</html>