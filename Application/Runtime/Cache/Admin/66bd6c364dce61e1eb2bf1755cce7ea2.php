<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>公司文化</title>
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
            
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>成长&幸福的记录</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                        <div class="ibox-tools">
                        <a  href="/index.php/Admin/Ourhistory/add/type/1" title="添加纪录"><i class="glyphicon glyphicon-plus"></i></a>
                        &emsp;
                    </div>
                    </div>
                    
                    <div class="ibox-content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>日期</th>
                                    <th>记录</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($history)): $i = 0; $__LIST__ = $history;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($vo["id"]); ?></td>
                                    <td><?php echo (date('Y-m-d H:i:s', $vo["time"])); ?></td>
                                    <td><?php echo (mb_substr($vo["history"],0,20)); ?></td>
                                    <td>
                                        <span title="记录信息" class="look" data="<?php echo ($vo["id"]); ?>" which="history"><i class="glyphicon glyphicon-search"></i></span>
                                        &emsp;
                                        <a  href="/index.php/Admin/Ourhistory/historyEdit/id/<?php echo ($vo["id"]); ?>" title="编辑"><i class="glyphicon glyphicon-pencil"></i></a>
                                        &emsp;
                                        <a href="javascript:;" title="删除" onclick="ask('<?php echo ($vo["id"]); ?>', 'history')"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>文化与宗旨</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                        <div class="ibox-tools">
                            <a  href="/index.php/Admin/Ourhistory/add/type/2" title="添加文化/宗旨"><i class="glyphicon glyphicon-plus"></i></a>
                            &emsp;
                        </div>
                    </div>
                    
                    <div class="ibox-content">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>简介</th>
                                <th>简介宣传照</th>
                                <th>宗旨</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($synopsis)): $i = 0; $__LIST__ = $synopsis;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($vo["id"]); ?></td>
                                    <td><?php echo (mb_substr($vo["synopsis"],0,20)); ?></td>
                                    <td><img src="<?php echo ($vo["synopsis_photo"]); ?>" style="width: 100px;height: 100px;"></td>
                                    <td><?php echo (mb_substr($vo["tenet"],0,20)); ?></td>
                                    <td>
                                        <span title="简介" class="look" data="<?php echo ($vo["id"]); ?>" which="synopsis"><i class="glyphicon glyphicon-search"></i></span>
                                        &emsp;
                                        <span title="简介" class="look" data="<?php echo ($vo["id"]); ?>" which="tenet"><i class="glyphicon glyphicon-flag"></i></span>
                                        &emsp;
                                        <a  href="/index.php/Admin/Ourhistory/synopsisEdit/id/<?php echo ($vo["id"]); ?>" title="编辑"><i class="glyphicon glyphicon-pencil"></i></a>
                                        &emsp;
                                        <a href="javascript:;" title="删除" onclick="ask('<?php echo ($vo["id"]); ?>', 'synopsis')"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>名人榜</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                        <div class="ibox-tools">
                            <a  href="/index.php/Admin/Ourhistory/add/type/3" title="添加名人"><i class="glyphicon glyphicon-plus"></i></a>
                            &emsp;
                        </div>
                    </div>
                    
                    <div class="ibox-content">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>姓名</th>
                                <th>简介</th>
                                <th>照片</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($personal)): $i = 0; $__LIST__ = $personal;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($vo["id"]); ?></td>
                                    <td><?php echo ($vo["name"]); ?></td>
                                    <td><?php echo ($vo["personal_synopsis"]); ?></td>
                                    <td><img src="<?php echo ($vo["photo"]); ?>" style="width: 100px;height: 100px;"></td>
                                    <td><?php if($vo['status'] == 1 ): ?>是<?php else: ?>否<?php endif; ?></td>
                                    <td>
                                        <span title="个人简介" class="look" data="<?php echo ($vo["id"]); ?>" which="personal"><i class="glyphicon glyphicon-search"></i></span>
                                        &emsp;
                                        <a  href="/index.php/Admin/Ourhistory/personalEdit/id/<?php echo ($vo["id"]); ?>" title="编辑"><i class="glyphicon glyphicon-pencil"></i></a>
                                        &emsp;
                                        <a href="javascript:;" title="删除" onclick="ask('<?php echo ($vo["id"]); ?>', 'personal')"><i class="glyphicon glyphicon-trash"></i></a>
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
        function ask(id, which) {
            layer.confirm('确定删除吗？', {
                btn: ['是','否'] //按钮
            }, function(){
                location.href = '/index.php/Admin/Ourhistory/' +which+ 'Del/id/'+id;
            });
        }
        $('.look').on('click',function () {
            var id = $(this).attr('data');
            var which = $(this).attr('which');
            $.ajax({
                url:'/index.php/Admin/Ourhistory/' +which+ 'Show',
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
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>
</html>