<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>职员管理</title>
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
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>婚礼列表</h5>
                    <div class="ibox-tools">
                        <a  href="<?php echo U('add');?>" title="新增职员" target="_blank"><i class="glyphicon glyphicon-plus"></i></a>
                        &emsp;&emsp;&emsp;
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>头像</th>
                            <th>箴言</th>
                            <th>姓名</th>
                            <th>性别</th>
                            <th>年龄</th>
                            <th>入职日期</th>
                            <th>职位</th>
                            <th>薪资</th>
                            <th>联系方式</th>
                            <th>状态</th>
                            <th>登陆时间</th>
                            <th>权限</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($vol["id"]); ?></td>
                                <td>
                                    <?php if($vol['has_avatar'] == 0): ?><img src="/Public/Admin/img/null.jpg" width="100">
                                        <?php else: ?>
                                        <img src="<?php echo ($vol["avatar"]); ?>" width="100"><?php endif; ?>
                                </td>
                                <td><?php echo (mb_substr($vol["maxim"],0,10)); ?></td>
                                <td><?php echo ($vol["name"]); ?></td>
                                <td><?php if($vol['sex'] == 1): ?>男<?php else: ?>女<?php endif; ?></td>
                                <td><?php echo ($vol["age"]); ?></td>
                                <td><?php echo (date('Y-m-d H:i:s', $vol["join_time"])); ?></td>
                                <td><?php echo ($vol["position_name"]); ?></td>
                                <td><?php echo ($vol["salary"]); ?></td>
                                <td><?php echo ($vol["mobile_number"]); ?></td>
                                <td><?php echo ($vol["status_name"]); ?></td>
                                <td><?php echo (date('Y-m-d H:i:s', $vol["last_time"])); ?></td>
                                <td><?php echo ($vol["authority"]); ?></td>
                                <td>
                                    <a  href="/index.php/Admin/User/edit/id/<?php echo ($vol["id"]); ?>" title="编辑" target="_blank"><i class="glyphicon glyphicon-pencil"></i></a>
                                    &emsp;
                                    <a href="javascript:;" title="删除" onclick="ask('<?php echo ($vol["id"]); ?>')"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
      location.href = '/index.php/Admin/User/del/id/'+id;
    });
}
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green"})});
</script>
</body>
</html>