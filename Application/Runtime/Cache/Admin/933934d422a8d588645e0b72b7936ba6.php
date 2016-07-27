<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>添加</title>
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
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal" enctype="multipart/form-data" action="<?php echo U('edited');?>">
                            <input type="hidden" name="id" value="<?php echo ($id); ?>">
                            <?php switch($edit): case "1": ?><input type="hidden" name="edit" value="1">
                                    <!--日期-->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">时间：</label>
                                        <div class="col-sm-10">
                                            <input name="time" class="form-control layer-date" value="<?php echo (date('Y-m-d H:i:s', $history["time"])); ?>" placeholder="年-月-日 时:分:秒" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                                            <label class="laydate-icon"></label>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <!--历程描述-->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">历程描述</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="history"><?php echo ($history["history"]); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div><?php break;?>

                                <?php case "2": ?><input type="hidden" name="edit" value="2">
                                    <!--简介-->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">公司简介</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="synopsis"><?php echo ($synopsis["synopsis"]); ?></textarea>
                                            </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">简介宣传照</label>
                                        <div class="col-sm-10">
                                            <img src="<?php echo ($synopsis["synopsis_photo"]); ?>" style="width: 200px;height: 200px;">
                                            <input type="file" name="synopsis_photo" class="form-control">
                                            <p>&nbsp;</p>
                                            <p style="color: grey;">不修改则使用默认图片</p>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <!--宗旨-->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">宗旨</label>
                                        <div class="col-sm-10">
                                            <script type="text/plain" id="myEditor" style="width:1000px;height:240px;" name="tenet">
                                                <?php echo ($synopsis["tenet"]); ?>
                                            </script>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div><?php break;?>

                                <?php default: ?>
                                <input type="hidden" name="edit" value="3">
                                <!--选择职员-->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">选择职员</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="uid">
                                            <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo['id'] == $personal['uid'] ): ?>selected<?php endif; ?> ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <!--职员简介-->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">职员简介</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="personal_synopsis"><?php echo ($personal["personal_synopsis"]); ?></textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <!--职员照片-->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">职员照片</label>
                                    <div class="col-sm-10">
                                        <img src="<?php echo ($personal["photo"]); ?>" style="width: 200px;height: 200px;">
                                        <input type="file" class="form-control" name="photo" value="<?php echo ($personal["photo"]); ?>">
                                        <p>&nbsp;</p>
                                        <p style="color: grey;">不修改则使用默认图片</p>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <!--状态-->
                                <div class="form-group">
                                <label class="col-sm-2 control-label">是/否上榜</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="status">
                                        <option value="0">否</option>
                                        <option value="1" <?php if($personal['status'] == 1 ): ?>selected<?php endif; ?> >是</option>
                                    </select>
                                </div>
                            </div>
                                <div class="hr-line-dashed"></div><?php endswitch;?>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存</button>
                                </div>
                            </div>
                        </form>
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


    <?php if($edit == 1 ): ?><script src="/Public/Admin/js/plugins/layer/laydate/laydate.js"></script>
    <script>
        laydate({elem:"#hello",event:"focus"});var start={elem:"#start",format:"YYYY-MM-DD hh:mm:ss",min:laydate.now(),max:"2099-06-16 23:59:59",istime:true,istoday:false,choose:function(datas){end.min=datas;end.start=datas}};var end={elem:"#end",format:"YYYY-MM-DD hh:mm:ss",min:laydate.now(),max:"2099-06-16 23:59:59",istime:true,istoday:false,choose:function(datas){start.max=datas}};laydate(start);laydate(end);
    </script>
        <?php elseif($edit == 2): ?>
        <script>
            var um = UM.getEditor('myEditor');
        </script><?php endif; ?>
</body>
</html>