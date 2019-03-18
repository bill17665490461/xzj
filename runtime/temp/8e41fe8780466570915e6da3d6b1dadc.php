<?php /*a:1:{s:60:"E:\phpstudy\WWW\xzj\application\home\view\defaults\jump.html";i:1536395713;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <title>信之家跳转提示</title>
        <link rel="stylesheet" type="text/css" href="/public/static/semantic/semantic.min.css">
    </head>
    <body>
        <div class="ui first coupled modal transition visible active" style="top:20px">
            <div class="header " style="font-size:18px">信之家提示信息</div>
            <div class="content">
                <div class="description">
                    <p style="font-size:16px"><i class="<?php if($code): ?>check circle green<?php else: ?>warning sign yellow<?php endif; ?> icon"></i><?php echo strip_tags($msg); ?></p>
                </div>
            </div>
            <div class="actions">
                <b id="wait"><?php echo htmlentities($wait); ?></b>秒后<a id="href" class="primary ui button" href="<?php echo htmlentities($url); ?>">返回</a>
            </div>
        </div>
        <!-- jQuery -->
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
