<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
<!--    <meta http-equiv="Cache-Control" content="no-siteapp" />-->
    <title>婚礼管理</title>
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
<!--    <link href="/Public/Admin/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/Public/Admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">-->
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
                        <a  href="<?php echo U('add');?>" title="新增婚礼" target="_blank"><i class="glyphicon glyphicon-plus"></i></a>
                        &emsp;&emsp;&emsp;
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>新娘姓名</th>
                            <th>新郎姓名</th>
                            <th>新娘信息</th>
                            <th>新郎信息</th>
                            <th>婚礼地址</th>
                            <th>举办日期</th>
                            <th>详细信息</th>
                            <th>婚礼状态</th>
                            <th>是/否头条</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($vol["id"]); ?></td>
                                <td><?php echo ($vol["bride"]); ?></td>
                                <td><?php echo ($vol["bridegroom"]); ?></td>
                                <td><?php echo (mb_substr($vol["bride_info"],0,10)); ?></td>
                                <td><?php echo (mb_substr($vol["bridegroom_info"],0,10)); ?></td>
                                <td><?php echo ($vol["address_name"]); ?></td>
                                <td><?php echo (date('Y-m-d H:i:s', $vol["wedding_date"])); ?></td>
                                <td><?php echo (mb_substr($vol["info"],0,20)); ?></td>
                                <td><?php echo ($vol["status_name"]); ?></td>
                                <td><?php if($vol['top'] == 0 ): ?>否<?php else: ?>是<?php endif; ?></td>
                                <td>
                                    <span title="详细信息" class="look" data="<?php echo ($vol["id"]); ?>" ><i class="glyphicon glyphicon-search"></i></span>
                                    &emsp;
                                    <a  href="/index.php/Admin/Wedding/edit/id/<?php echo ($vol["id"]); ?>" title="编辑"><i class="glyphicon glyphicon-pencil"></i></a>
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
      location.href = '/index.php/Admin/Wedding/del/id/'+id;
    });
}
$('.look').on('click',function () {
    var id = $(this).attr('data');
    $.ajax({
        url:'/index.php/Admin/Wedding/show',
        data:{'id':id},
        success:function (data) {
            layer.open({
                title:'详细信息',
                type: 1,
                skin: 'layui-layer-demo', //样式类名
                closeBtn: 0, //不显示关闭按钮
                shift: 2,
                area: ['400px', '380px'],
                shadeClose: true, //开启遮罩关闭
                content: data
            });
        }
    });
});
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green"})});
</script>

</body>

</html>