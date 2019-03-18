<?php /*a:2:{s:86:"E:\phpstudy\WWW\xzj\application\home\view\defaults\column\index\investmentService.html";i:1536396657;s:62:"E:\phpstudy\WWW\xzj\application\home\view\defaults\layout.html";i:1536635065;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Standard Meta -->
        <meta charset="utf-8" />
        
        <title><?php echo htmlentities($title); ?></title>	
        <meta name="keywords" content="<?php echo htmlentities($keywords); ?>" />
        <meta name="description" content="<?php echo htmlentities($description); ?>" />
        
        <meta name="author" content="YX">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
        <script type="text/javascript">
            window.onload = function () {
                if (navigator.appName == "Microsoft Internet Explorer" && parseInt(navigator.appVersion.split(";")[1].replace(/[ ]/g, "").replace("MSIE", "")) < 9) {
                    document.body.innerHTML = "";
                    alert("你的浏览器太古老,网页不支持IE9以下版本~");
                }
               //顶部搜索触发
                $('#searchicon').click(function () {
                    $('#search').submit();
                });
            };
        </script> 
        <link href="/public/static/home/css/basic.css" rel="stylesheet" type="text/css">
        <link href="/public/static/home/css/ind2017.css" rel="stylesheet" type="text/css">

        <link href="/public/static/home/css/new2016.css" rel="stylesheet" type="text/css">
        <link href="/public/static/home/css/footer.css" rel="stylesheet" type="text/css">
        <!-- 园区 -->
        <link href="/public/static/home/css/basic.css" rel="stylesheet" type="text/css">
        <link href="/public/static/home/css/park2014.css" rel="stylesheet" type="text/css">
        <link href="/public/static/home/css/comp2016.css" rel="stylesheet" type="text/css">
        <link href="/public/static/home/css/box.css" rel="stylesheet" type="text/css">
        <!-- 园区 -->
        <!-- 园区详情 -->
        <link href="/public/static/home/css/xq2016.css" rel="stylesheet" type="text/css">
        <!-- 园区详情 -->

        <!-- 新闻列表 -->
        <link href="/public/static/home/css/new2014.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="/public/static/home/js/bigpicroll.js"></script>
        <script type="text/javascript" src="/public/static/home/js/pagination.js"></script>
        <!-- 新闻列表 -->

        <!-- 联系我们 -->
        <link href="/public/static/home/css/qyxm.css" rel="stylesheet" type="text/css">
        <!-- 联系我们 -->
        <script src="/public/static/home/js/push.js"></script>
        <script src="/public/static/home/js/hm.js"></script>
        <script src="/public/static/home/js/redirect.js" type="text/javascript"></script>
        
        <script type="text/javascript" src="/public/static/home/js/city.js"></script>
        <script type="text/javascript" src="/public/static/home/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="/public/static/home/js/jquery.yx_rotaion.js"></script>
        <script type="text/javascript" src="/public/static/home/js/jquery.SuperSlide.2.1.1.js"></script>

        <!--tab-->
        <script type="text/javascript" src="/public/static/home/tab/js/jquery.featureList-1.0.0.js"></script>
        <link href="/public/static/home/tab/css/lanrenzhijia.css" type="text/css" rel="stylesheet" />
        <!--tab-->
        <!-- layui -->
        <link rel="stylesheet" href="/public/static/layui/css/layui.css">
        <script src="/public/static/layui/layui.js" type="text/javascript"></script>
        <!-- layui -->
        <style type="text/css">
    .tbinfo{padding:10px 20px;border:1px dotted #EAEAEA;color:#333;background-color:#FAFAFA;    border-radius: 3px;}
    .tbinfo ul li{padding:5px 0;font-size:16px}
    .tbinfo ul li span{color:#333;font-size:16px}
.zs_lyshow { width:840px;}
.zs_lytop { height:48px; background:#bc0f22; font-size:18px; text-align:center; color:#fff; line-height:48px; font-weight:700; position:relative;}
.zs_lyclose { position:absolute; top:0; right:0; width:48px; height:48px; cursor:pointer;} 
.zs_lymain {height:475px; position:relative;}
.zs_lymain .bk1_table { width:415px; position:absolute; left:20px; top:65px;}
.zs_lymain .bk1_table li { float:left; margin-top:10px;}
.zs_lymain .bk1_info2{ width:90px; text-align:right; line-height:28px; margin-right:10px; font-size:14px;}
.zs_lymain .bk1_imp { line-height:30px; margin-left:5px; font-size:18px; color:#F00;}
.zs_lymain .bk1_input1 { width:298px; height:30px; border:1px solid #e4e4e4;}
.zs_lymain .bk1_fbly { position:absolute; left:140px; bottom:90px; width:90px; height:36px; color:#fff; line-height:36px; text-align:center; background-color:#bc0f22; border-radius:5px;}
.zs_lymain .bk1_mszc { position:absolute; left:290px; bottom:90px; width:90px; height:36px; color:#fff; line-height:36px; text-align:center; background-color:#bc0f22; border-radius:5px;}
.zs_center {
  height:80%;
  margin: auto;
  position: fixed;
  top: 0; left: 0; bottom: 0; right: 0;
  z-index:1000;
}
</style>
<style>
span.link{cursor:pointer;}
span.link:hover{color:red;}
.width70 { width:70px;}
.Tsearch { height:117px !important; padding-top: 10px;}
.Tsearch .logo a { margin-top:6px !important; height:91px;}
.Tsearch ,.Tsearch .sitesearch { overflow:inherit;}
    .Tsearch .sitesearch { width: 755px !important;}
    .Tsearch .sitesearch .sitesearbox { width:470px; height:42px; float:left; margin-top:32px; position:relative; z-index:44;}
    .Tsearch .sitesearch .sitemffb { float:right; margin-top:0px;}
    .Tsearch .sitesearch .sitemffb a { margin-right:6px;}
    .Tsearch .sitesearch .sitesearbox .sc { background-color:#ce0002; height:36px; border:3px solid #ce0002; border-radius:5px;}
    
    .Tsearch .sitesearch .sitesearbox .hy p { padding-left:10px; cursor:pointer; line-height:36px; font-size:14px; text-align:left;}
    .Tsearch .sitesearch .sitesearbox .ss { width:375px; overflow:hidden; height:36px;}
    .Tsearch .sitesearch .sitesearbox .ss input { display:inline-block; border:0 none; height:36px;}
    .Tsearch .sitesearch .sitesearbox .ss .text { background-color:#FFF; padding:8px 5px; height:20px; line-height:20px; width:282px;}
    .Tsearch .sitesearch .sitesearbox .ss .smit { font-weight:normal; color:#FFF; background:none; width:82px; text-align:center; font-size:20px; font-family:"微软雅黑"; cursor:pointer;}
    .Tsearch .sitesearch .sitesearbox .xz { display:none; position:absolute; left:3px; top:39px; padding:0; border:1px solid #DDD; z-index:22; background-color:#FFF;}
    .Tsearch .sitesearch .sitesearbox .xz li { font-size:14px; line-height:30px; padding-left:10px; border-bottom:1px solid #EEE; width:67px; cursor:pointer; color:#000; text-align:left;}
    .fl {float: left;display: inline;}
    .fr {float: right;display: inline;}
    #end { border-bottom:none;}

.logo_area{position:relative;}
.logo_area .pro{position:absolute;left:300px;top:33px;font-size:18px;font-family:'微软雅黑';color:#333;z-index: 55;}
.logo_area .pro2{position: absolute; left: 250px;top: -10px; z-index: 55;}
.hotsear { position:absolute; z-index:1; top:-25px; left:0;}
.hotgjz { position:absolute; z-index:1; top:50px; left:0;}
.hotsear a ,.hotgjz a { padding:3px;}

.newtool { border-bottom: 1px dashed #ddd !important;}
.headcity { overflow: hidden; width: auto; min-width: 1200px; border-bottom: 1px dashed #ddd; padding-bottom:10px;}
.headcity .citty { width:1200px; margin:0 auto; padding:5px 0; text-align:left; font-size:14px; line-height:20px;}
.headcity .citty a { padding-right:2px;}
.logo_area .pro select { width:93px; height:40px; line-height:30px; padding:5px; font-size:14px;}
.logo_area .pro option { padding:5px; line-height:30px;}
.logo_area .pro .head_city { width:80px; height:26px; line-height:26px; padding:5px; font-size:14px; border:1px solid #ccc; text-align:left; position:relative; z-index:22; cursor:pointer; margin-top: 1px;}
.citylink { position:absolute; z-index:33; top:36px; left:-1px; overflow:hidden; border:1px solid #ccc; display:none; background:#fff;/* max-height:180px; overflow:auto;*/ width: 350px; background:#fff;} 
.logo_area .pro .head_city:hover .citylink { display:block;}
.citylink li { line-height:26px;/* padding:0 5px;*/ cursor:pointer; width: 50px; float: left; display: inline; text-align: center; border-bottom: 1px solid #EEE; background:#fff;}
.citylink li:hover { background:#f6f6f6;}
.citylink li a:hover { text-decoration:none;}
.topwx ,.topwb ,.toptx ,.topyd { font-style:normal; padding-left:27px; line-height:39px; display: inline-block; height:39px; padding-right:5px;}
.park_passport .mailLink A { padding:0 !important;}
.park_passport .mailLink A:hover { background:none !important; text-decoration:underline !important; COLOR: #333 !important;}
.topwx { background-position:-2px -43px;}
.topyd { background-position:2px 2px;}
.dvshow { position:relative;}
.dvshow a img { display:none;}
.dvshow a:hover img { display:block;}
.showydd { position:absolute; z-index:99; top:37px; left:-5px;}
.showewm { position:absolute; z-index:99; top:37px; left:-10px;}
.park_passport { position:relative; z-index:55; overflow:inherit !important;}
.park_passport .main { overflow:inherit !important;}
.park_passport .mailLink { overflow:inherit !important;}
    /*new2017.12.15*/
.sit_zxphone { width: 217px; color: #cd0001; line-height: 27px; margin-top: 20px;}

.sit_zxphone p { font-size: 24px; text-align: center; font-weight: 700; }
.park_passport .leftlink a.gjfb em{color:red}
.park_passport .leftlink a.gjfb:hover  em{color:#FFF}

    .Tsearch { position:relative; height:136px; padding-top:10px;}
    .Tsearch .brlogo { display:block !important;}
    .l330{width:365px;}
    .l382 {width: 365px;padding-right: 20px;margin-right: 20px;}
    .ul02 li,.ul03 li,.ul04 li{width:365px}
    .l330 .upd{display:inline-block;width:20px;height:20px;margin-top:12px;}
    .l330 .upd-1{background: url(/public/static/home/image/jt01.png) no-repeat;}
    .l330 .upd-2{background: url(/public/static/home/image/jt02.png) no-repeat;}
    .l330 .upd-3{background: url(/public/static/home/image/jt03.png) no-repeat;}
    .ul02 li .rt, .ul03 li .rt, .ul04 li .rt,.rt{color:#f60;font-size:14px;font-family:arial;float:right}
    span.link{cursor:pointer;}
    span.link:hover{color:red;}
    .width70 { width:70px;}
    .Tsearch { height:117px !important; padding-top: 10px;}
    .Tsearch .logo a { margin-top:6px !important; height:91px;}
    .Tsearch ,.Tsearch .sitesearch { overflow:inherit;}
        .Tsearch .sitesearch .sitesearbox { width:580px; height:42px; float:left; margin-top:32px; position:relative; z-index:44;}
        .Tsearch .sitesearch .sitemffb { float:right; margin-top:0px;}
        .Tsearch .sitesearch .sitemffb a { margin-right:6px;}
        .Tsearch .sitesearch .sitesearbox .sc { background-color:#ce0002; height:36px; border:3px solid #ce0002; border-radius:5px;}
        .Tsearch .sitesearch .sitesearbox .hy { background:url(/public/static/home/image/jt.jpg) no-repeat right center #fff; width:88px; height:36px; border-right:1px solid #ccc;}
        .Tsearch .sitesearch .sitesearbox .hy p { padding-left:10px; cursor:pointer; line-height:36px; font-size:14px; text-align:left;}
        .Tsearch .sitesearch .sitesearbox .ss { width:575px; overflow:hidden; height:36px;}
        .Tsearch .sitesearch .sitesearbox .ss input { display:inline-block; border:0 none; height:36px;}
        .Tsearch .sitesearch .sitesearbox .ss .text { background-color:#FFF; padding:8px 5px; height:20px; line-height:20px; width:483px;}
        .Tsearch .sitesearch .sitesearbox .ss .smit { font-weight:normal; color:#FFF; background:none; width:82px; text-align:center; font-size:20px; font-family:"微软雅黑"; cursor:pointer;}
        .Tsearch .sitesearch .sitesearbox .xz { display:none; position:absolute; left:3px; top:39px; padding:0; border:1px solid #DDD; z-index:22; background-color:#FFF;}
        .Tsearch .sitesearch .sitesearbox .xz li { font-size:14px; line-height:30px; padding-left:10px; border-bottom:1px solid #EEE; width:67px; cursor:pointer; color:#000; text-align:left;}
        .fl {float: left;display: inline;}
        .fr {float: right;display: inline;}
        #end { border-bottom:none;}

    .logo_area{position:relative;}
    .logo_area .pro{position:absolute;left:300px;top:33px;font-size:18px;font-family:'微软雅黑';color:#333;z-index: 55;}
    .logo_area .pro2{position: absolute; left: 250px;top: -10px; z-index: 55; }
    .hotsear { position:absolute; z-index:1; top:-25px; left:0;}
    .hotgjz { position:absolute; z-index:1; top:50px; left:0;}
    .hotsear a ,.hotgjz a { padding:3px;}
    .newtoolnr { position: relative;}
    .newtoolnr ul li{float: left;width: 120px;color: #fff;line-height: 35px;}
    .newtoolnr ul li a{color: #fff;font-size: 16px}
    .headcity { overflow: hidden; width: auto; min-width: 1200px; border-bottom: 1px dashed #ddd; padding-bottom:10px;}
    .headcity .citty { width:1200px; margin:0 auto; padding:5px 0; text-align:left; font-size:14px; line-height:20px;}
    .headcity .citty a { padding-right:2px;}
    .logo_area .pro select { width:93px; height:40px; line-height:30px; padding:5px; font-size:14px;}
    .logo_area .pro option { padding:5px; line-height:30px;}
    .logo_area .pro .head_city { width:80px; height:26px; line-height:26px; padding:5px; font-size:14px; border:1px solid #ccc; background:url(/public/static/home/image/jt.jpg) no-repeat right center; text-align:left; position:relative; z-index:22; cursor:pointer; margin-top: 1px;}
    .citylink { position:absolute; z-index:33; top:36px; left:-1px; overflow:hidden; border:1px solid #ccc; display:none; background:#fff;/* max-height:180px; overflow:auto;*/ width: 350px; background:#fff;} 
    .logo_area .pro .head_city:hover .citylink { display:block;}
    .citylink li { line-height:26px;/* padding:0 5px;*/ cursor:pointer; width: 50px; float: left; display: inline; text-align: center; border-bottom: 1px solid #EEE; background:#fff;}
    .citylink li:hover { background:#f6f6f6;}
    .citylink li a:hover { text-decoration:none;}
    .topwx ,.topwb ,.toptx ,.topyd { font-style:normal; padding-left:27px; line-height:30px; display: inline-block; height:30px; padding-right:5px;}
    .park_passport .mailLink A { padding:0 !important;}
    .park_passport .mailLink A:hover { background:none !important; text-decoration:underline !important; COLOR: #333 !important;}
    .topwx { background-position:-2px -43px;}
    .topyd { background-position:2px 2px;}
    .dvshow { position:relative;}
    .dvshow a img { display:none;}
    .dvshow a:hover img { display:block;}
    .showydd { position:absolute; z-index:99; top:37px; left:-5px;}
    .showewm { position:absolute; z-index:99; top:37px; left:-10px;}
    .park_passport { position:relative; z-index:55; overflow:inherit !important;}
    .park_passport .main { overflow:inherit !important;}
    .park_passport .mailLink { overflow:inherit !important;}
        /*new2017.12.15*/
    .sit_zxphone { width: 217px; color: #cd0001; line-height: 27px; margin-top: 20px;}
    .sit_zxphone .sit_zxptop { background:url(/public/static/home/image/zx_07.jpg) 0 no-repeat; margin-left: 25px; font-size: 16px; }
    .sit_zxphone p { font-size: 24px; text-align: center; font-weight: 700; }
    .park_passport .leftlink a.gjfb em{color:red}
    .park_passport .leftlink a.gjfb:hover  em{color:#FFF}
    .nav-div{width: 100px;}
    .layui-nav .layui-nav-item{line-height: 50px;margin-left: 45px;}
    .layui-nav .layui-nav-item a{font-size: 16px;color: #fff;}
    .layui-tab-content img{width: 100%;margin: 0 auto}
    .layui-form-label{width: 100px;}
    .nav-title{background: #9c1818;color: #cecece;}
    .buttons{display: flex;flex-direction: row;margin-left: 45%;}
    .buttons a{padding: 5px 10px;background: #eee;margin-left: 2px;}
    .buttons .button{padding: 5px 10px; background: #eee;margin-left: 2px;}
    .buttons .active{background: #e6cbcb}
</style>
        
    </head>
    <body>
    <script>
    function checkClick(id){
                $('#ctg').val(id);

                if(id==1){
                    document.index_search.action="/zs"; 
                }   
                if(id==2){
                    document.index_search.action="/dichan";
                }
                if(id==3){
                    document.index_search.action="/pdnewslist";
                }   
                
                    
            }
                
                $(function(){
                    $(".sc .hy").click(function(){
                        $(".citylink").slideDown(50);   
                    })
                    
                    $(".sitesearch").mouseleave(function(){
                        $(".citylink").slideUp(50); 
                    })
                    
                    $(".citylink li").hover(
                        function(){
                            $(this).css("background-color","#f2f2f2");
                            },function(){
                            $(this).css("background-color","#FFF");
                        })
                        
                        
                    $(".citylink li").click(function(){
                            $(".sc .hy p").html($(this).text());
                            /*$(".xz").css("display","none")*/
                            $(".citylink").hide();
                        })  
                        
                    
                    
                })
    
    function zs_jump(url){
        location.href = url;
    }

</script>
<div class="park_passport">
   <div class="main">
     <span style="float: left; line-height: 30px;"><a href="/index.php" target="">欢迎您访问<font color="red">全国政企招商服务平台</font></a>
      </span>
     <!-- <span class="mailLink1" style="float:right">
        
        <i class="topwx dvshow">
        <a>你好</a></i>
        <?php if($memberInfo): ?>
            <?php echo htmlentities($memberInfo); ?> 
            <a href="/member.php" rel="nofollow">个人中心</a>
            <a href="<?php echo appUrl('member','open/loginout'); ?>" rel="nofollow">退出</a>
        <?php else: ?>
            <a href="<?php echo appUrl('member','open/login'); ?>" rel="nofollow">请登录</a>
            <a href="<?php echo appUrl('member','open/register'); ?>" rel="nofollow">马上注册</a>
        <?php endif; ?>
      </span> -->
   </div>
</div>
<div class="area blank10"></div>
<!--顶部通栏开始-->

<!--顶部searchTsearch-->
<div class="Tsearch">


<!-- LOGO 改为单独CSS-->
     <div class="logo_area">
        <div class="logo">
            <a href="/index.php" style="height:65px;background:url(/public/uploads/<?php echo config('web_site_logo')['path']; ?>)"></a>
            <p style=" height: 24px; line-height: 24px; font-size: 14px; text-align: right; color: #666666; width: 250px;">信&nbsp;&nbsp;之&nbsp;&nbsp;家&nbsp;&nbsp;商&nbsp;&nbsp;引&nbsp;&nbsp;资&nbsp;&nbsp;门&nbsp;&nbsp;户&nbsp;&nbsp;网&nbsp;&nbsp;站</p>
        </div>
                <div class="pro2"></div>
                    <div class="pro">
                

            
        </div>
     </div>
     
<!--Search end-->
 <script type="text/javascript">
    function menuList2(num)
    {
        for (var i = 0; i<=5; i++) 
        {
        try{
            if(document.getElementById('viewcont'+i))
            {
                document.getElementById('menu_'+i).className = '';
                document.getElementById('viewcont'+i).style.display='none';
            }
            }
            catch(e){continue;}         
        }
            document.getElementById('menu_'+num).className ='alSactive';
            document.getElementById('viewcont'+num).style.display='block';
    }

</script>
<!--Search start-->

     <div class="sitesearch">
      <div class="sitesearbox">
            
        <div class="hotsear">招商项目：
            <?php $sql_list=model('ModelField')->getDataList("catetype", "status=1 and create_time <1537939919", "*", "", "orders asc", "", null, 0, "");  $sum=count($sql_list);  foreach($sql_list as $key=>$vo): ?>
            <a href="/index.php/column?type=catetype&id=<?php echo htmlentities($vo['id']); ?>" target="_self"><?php echo htmlentities($vo['title']); ?></a>
            <?php endforeach; ?>
        </div>
            
        <div class="sc">
           
            <div class="ss fl">
            <form action="<?php echo url('index/search'); ?>" id="index_search" name="index_search" method="post">
                <input type="text" name="keywords" class="text fl" placeholder="请输入关键字">
                <input type="submit" class="smit fl" value="搜 索">
            </form>    
                
            </div>
        </div>
       
     </div>

     
     </div>
</div>
<!--顶部search end-->
<div class="area blank10"></div>
<!-- 工具 begin -->
<div style="background: #ce0002">
<ul class="layui-nav" style="width: 1200px; height: 50px;margin: 0 auto;text-align: left;background: #ce0002;line-height: 50px">
    <li class="layui-nav-item">
        <a href="/index.php" <?php if($crumbs == ''): ?> class="nav-title" <?php endif; ?>>首页</a>
    </li>

  <?php if(is_array($navList) || $navList instanceof \think\Collection || $navList instanceof \think\Paginator): $k = 0; $__LIST__ = $navList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>

  <li class="layui-nav-item" style="line-height: 50px!important;" <?php if($vo['name'] == $info['name']): ?>ddd<?php endif; ?>>
  <?php if($crumbs != ''): if(is_array($crumbs) || $crumbs instanceof \think\Collection || $crumbs instanceof \think\Paginator): $k1 = 0; $__LIST__ = $crumbs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k1 % 2 );++$k1;if($k1 == 1): ?>
            <a <?php if($v['title'] == $vo['title']): ?> class="nav-title"<?php endif; if($vo['id'] != 19): ?> href="/index.php/<?php echo htmlentities($vo['name']); ?>"<?php endif; ?>><?php echo htmlentities($vo['title']); ?></a>
        <?php endif; endforeach; endif; else: echo "" ;endif; else: ?>
        <a <?php if($vo['id'] != 19): ?> href="/index.php/<?php echo htmlentities($vo['name']); ?>"<?php endif; ?>><?php echo htmlentities($vo['title']); ?></a>
    <?php endif; if($vo['list'] != '' AND $vo['id'] == 19): ?>
      <dl class="layui-nav-child" style="background: #ce0002;border: 0">
        <?php if(is_array($vo['list']) || $vo['list'] instanceof \think\Collection || $vo['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
            <dd><a href="/index.php/<?php echo htmlentities($vo1['name']); ?>"><?php echo htmlentities($vo1['title']); ?></a></dd>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </dl>
    <?php endif; ?>
  </li>
  <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
<!--end-->

<div class="cp-top">
    <div class="layui-container" style="padding: 0px;width: 1200px;">
        <div class="layui-row">
            <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                <div class="grid-demo grid-demo-bg1">
                    <p style="font-size: 20px;font-weight: bold;padding: 50px 0px;margin: 50px 0 20px 0">服务特性</p>
                </div>
            </div>
            <?php $sql_list=model('ModelField')->getDataList("article", "status=1 and create_time <1537939919", "id,cname,title,cover", "content", "orders asc", "12", null, 31, "");  $sum=count($sql_list);  foreach($sql_list as $key=>$vo): ?>
            <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
                <div class="grid-demo grid-demo-bg1">
                    <div class="in-div">
                        <img src="/public/uploads/<?php echo htmlentities($vo['cover']['path']); ?>">
                        <h3><?php echo htmlentities($vo['title']); ?></h3>
                        <?php echo htmlspecialchars_decode($vo['content']); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>


</div>
<div class="cp-button" style="background: #f5f3f3;margin: 50px 0px;padding-bottom: 50px">
    <div class="layui-container" style="padding: 0px;width: 1200px;">
        <div class="layui-row">
            <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                <div class="grid-demo grid-demo-bg1">
                    <p style="font-size: 20px;font-weight: bold;padding: 50px 0px;">服务对象</p>
                </div>
            </div>
            <?php $sql_list=model('ModelField')->getDataList("article", "status=1 and create_time <1537939919", "id,cname,title,cover", "content", "orders asc", "", null, 32, "");  $sum=count($sql_list);  foreach($sql_list as $key=>$vo): ?>
            <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
                <div class="grid-demo grid-demo-bg1">
                    <div class="in-div-fw">
                        <img src="/public/uploads/<?php echo htmlentities($vo['cover']['path']); ?>">
                        <h3><?php echo htmlentities($vo['title']); ?></h3>
                        <?php echo htmlspecialchars_decode($vo['content']); ?>
                        
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<link href="/public/static/home/css/basic.css" rel="stylesheet" type="text/css">
<link href="/public/static/home/css/footer.css" rel="stylesheet" type="text/css">

<!--footer-->
<div class="fw_link clearfix">

    <div class="fw_gg fl">
        <h4><i></i>联系我们</h4>

        <p style="text-align:center;margin-top:5px">
            <img src="/public/static/home/image/zx_11.jpg" alt="全国统一咨询热线">
        </p>
        <p style="font-size:30px; color:#ec3d00; font-weight:bolder; text-align:center; padding: 0;">400-900-7979</p>
        <p style="font-size:15px; color:#999; text-align:left;margin-left: 53px;padding-bottom: 5px; line-height:22px;">手机联系：13062625088<br>微信联系：13062625088<br>QQ&nbsp;&nbsp;联系：1252519183</p>
        
    </div>
    
    <div class="fw_xq fl">
        <h4>我们做什么</h4>
        <p style="line-height:24px">中国招商网-中国招商引资门户网站<br>
        专注招商引资服务10年<br>
拥有全球千万招商投资信息大数据<br>
线上招商推广，线下项目推介<br>
为政府、园区、企业提供一站式招商代理服务<br>
让招商引资更简单 更精准 更高效</p>
    
    </div>
    
    <div class="fw_dt fl">
        <h4><i></i><span class="more"><a href="/index.php/journalism">更多</a></span>公司动态</h4>
        <div class="fw_dt_info">
            <ul class="clearfix">
                <?php $sql_list=model('ModelField')->getDataList("journalism", "status=1 and create_time <1537939919", "id,cname,title", "", "create_time desc", "6", null, 0, "");  $sum=count($sql_list);  foreach($sql_list as $key=>$vo): ?>
                    <li><a href="/index.php/journalism/<?php echo htmlentities($vo['id']); ?>" title="<?php echo htmlentities($vo['title']); ?>"><?php echo htmlentities($vo['title']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    
    
    
</div>

<div id="footer">

    <div class="clear"></div>
    <!--links代码开始-->
    <!-- 是否不显示友情链接，默认为显示，如果设为不显示，请对变量$isShowLink赋值即可 -->
            
</div>
</div>
    <div class="clear"></div>
    <!--links代码结束-->
    <p style="text-align:center;">版权所有  上海百程商务服务有限公司 &nbsp;
    <a rel="nofollow" target="_blank" title="icp证" href="http://www.miitbeian.gov.cn/">沪ICP备16044607号-2</a>   Copyright © 2018 www.zhongguozhaoshang.com Corporation, All Rights Reserved</p>
    



    
    <?php echo config('web_site_statistics'); ?>
    </body>
</html>
<script>
layui.use('element', function(){
  var $ = layui.jquery
  ,element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块
  //触发事件
  var active = {
    setPercent: function(){
      //设置50%进度
      element.progress('demo', '50%')
    }
    ,loading: function(othis){
      var DISABLED = 'layui-btn-disabled';
      if(othis.hasClass(DISABLED)) return;
    
      //模拟loading
      var n = 0, timer = setInterval(function(){
        n = n + Math.random()*10|0;  
        if(n>100){
          n = 100;
          clearInterval(timer);
          othis.removeClass(DISABLED);
        }
        element.progress('demo', n+'%');
      }, 300+Math.random()*1000);
      
      othis.addClass(DISABLED);
    }
  };
  
  $('.site-demo-active').on('click', function(){
    var othis = $(this), type = $(this).data('type');
    active[type] ? active[type].call(this, othis) : '';
  });
});
</script>