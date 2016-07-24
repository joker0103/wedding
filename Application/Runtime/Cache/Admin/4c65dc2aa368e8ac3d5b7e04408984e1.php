<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>相册</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="shortcut icon" href="/Public/Admin/favicon.ico">
    <link href="/Public/Admin/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/Public/Admin/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="/Public/Admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/Public/Admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="/Public/Admin/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/style.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/login.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/plugins/webuploader/webuploader.css">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/demo/webuploader-demo.min.css">
    <link href="/Public/Admin/css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="/Public/Admin/css/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="/Public/Admin/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/uploadify/uploadify.css">
    <link href="/Public/Admin/js/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
    </head>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <?php if(is_array($wed)): $i = 0; $__LIST__ = $wed;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="col-sm-4">
                <div class="contact-box">
                    <a href="/index.php/Admin/Picture/pictures/id/<?php echo ($vol["id"]); ?>" target="_blank">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <?php if($vol["count"] == 0 ): ?><img alt="image" class="img-circle m-t-xs img-responsive" src="/Public/Admin/img/null.jpg"  style="width: 138px;height: 136px;">
                                    <?php else: ?>
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="<?php echo ($vol["photo"]); ?>" style="width: 138px;height: 136px;"><?php endif; ?>
                                <div class="m-t-xs font-bold">     </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong><?php echo ($vol["bride"]); ?>&<?php echo ($vol["bridegroom"]); ?></strong></h3>
                            <hr>
                            <div class="m-t-xs font-bold">地址:<?php echo ($vol["address_name"]); ?></div>
                            <hr>
                            <div class="m-t-xs font-bold">日期:<?php echo (date("Y-m-d H:i:s", $vol["wedding_date"])); ?></div>
                            <hr>
                            <div>照片数量：<?php echo ($vol["count"]); ?></div>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
<script src="/Public/Admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/Public/Admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/Public/Admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/Public/Admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/Public/Admin/js/plugins/layer/layer.min.js"></script>
<script src="/Public/Admin/js/hplus.min.js?v=4.1.0"></script>
<script src="/Public/Admin/js/contabs.min.js"></script>
<script src="/Public/Admin/js/plugins/pace/pace.min.js"></script>
<script src="/Public/Admin/js/content.min.js?v=1.0.0"></script>
<script src="/Public/Admin/js/plugins/iCheck/icheck.min.js"></script>
<script src="/Public/Admin/js/plugins/flot/jquery.flot.js"></script>
<script src="/Public/Admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="/Public/Admin/js/plugins/flot/jquery.flot.spline.js"></script>
<!--<script src="/Public/Admin/js/plugins/flot/jquery.flot.resize.js"></script>-->
<script src="/Public/Admin/js/plugins/flot/jquery.flot.pie.js"></script>
<script src="/Public/Admin/js/plugins/peity/jquery.peity.min.js"></script>
<script src="/Public/Admin/js/demo/peity-demo.min.js"></script>
<script src="/Public/Admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/Public/Admin/js/plugins/gritter/jquery.gritter.min.js"></script>
<script src="/Public/Admin/js/plugins/easypiechart/jquery.easypiechart.js"></script>
<script src="/Public/Admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="/Public/Admin/js/demo/sparkline-demo.min.js"></script>
<script src="/Public/Admin/js/plugins/dropzone/dropzone.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Admin/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Admin/umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="/Public/Admin/umeditor/lang/zh-cn/zh-cn.js"></script>
<script src="/Public/Admin/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
<script src="/Public/Admin/js/plugins/fancybox/jquery.fancybox.js"></script>


    <script>
        function ask(id) {
            layer.confirm('确定删除吗？', {
                btn: ['是','否'] //按钮
            }, function(){
                location.href = '/index.php/Admin/Picture/del/id/'+id;
            });
        }
        $(document).ready(function(){$(".contact-box").each(function(){animationHover(this,"pulse")})});
    </script>
</body>
</html>