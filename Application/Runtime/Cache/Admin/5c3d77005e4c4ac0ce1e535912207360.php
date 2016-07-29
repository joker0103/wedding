<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
<!--    <meta http-equiv="Cache-Control" content="no-siteapp" />-->
    <title>查看邮件</title>
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
<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-content mailbox-content">
                        <div class="file-manager">
                            <h5>文件夹</h5>
                            <ul class="folder-list m-b-md" style="padding: 0">
                                <li>
                                    <a href="/index.php/Admin/Mail/index/type/got"> <i class="fa fa-inbox"></i> 收件箱 <span class="label label-warning pull-right">16</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/index.php/Admin/Mail/index/type/sent"> <i class="fa fa-envelope-o"></i> 发件箱</a>
                                </li>
                                <li>
                                    <a href="/index.php/Admin/Mail/index/type/threw"> <i class="fa fa-trash-o"></i> 垃圾箱</a>
                                </li>
                            </ul>
                            <a class="btn btn-block btn-primary compose-mail" href="<?php echo U('mail_compose');?>">写信</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 animated fadeInRight">
                <?php switch($type): case "1": ?><div class="mail-box-header">
                            <h2>顾客简讯</h2>
                            <div class="mail-tools tooltip-demo m-t-md">
                                <h3><span class="font-noraml">主题： </span><?php echo ($massage["c_title"]); ?></h3>
                                <h5><span class="pull-right font-noraml"><?php echo (date("Y-m-d H:i:s", $massage["send_date"])); ?></span>
                                    <span class="font-noraml">发件人： </span><?php echo ($massage["c_name"]); ?>&emsp;&emsp;
                                    Email：<?php echo ((isset($massage["c_email"]) && ($massage["c_email"] !== ""))?($massage["c_email"]):"暂无"); ?>&emsp;&emsp;IP：<?php echo ($massage["c_ip"]); ?></h5>
                            </div>
                        </div>
                        <div class="mail-box">
                            <div class="mail-body">
                                <?php echo ($massage["c_content"]); ?>
                            </div><?php break;?>
                    <?php case "2": ?><div class="mail-box-header">
                            <h2>查看邮件</h2>
                            <div class="mail-tools tooltip-demo m-t-md">
                                <h3><span class="font-noraml">主题： </span><?php echo ($massage["c_title"]); ?></h3>
                                <h5><span class="pull-right font-noraml"><?php echo (date("Y-m-d H:i:s", $massage["send_date"])); ?></span><span class="font-noraml">发件人： </span><?php echo ($massage["name"]); ?></h5>
                            </div>
                        </div>
                        <div class="mail-box">
                            <div class="mail-body">
                                <?php echo ($massage["c_content"]); ?>
                            </div>
                            <?php if($massage['hasfile'] == 1 ): ?><div class="mail-attachment">
                                <p>
                                    <span><i class="fa fa-paperclip"></i> -- 共 <?php echo ($count); ?> 个附件 --</span><br>
                                    <p>&emsp;点击可下载附件</p>
                                </p>
                                <div class="attachment">
                                    <?php if(is_array($file)): $i = 0; $__LIST__ = $file;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="file-box">
                                            <div class="file">
                                                <a href="/index.php/Admin/Mail/downLoad/id/<?php echo ($vo["id"]); ?>">
                                                    <span class="corner"></span>
                                                    <div class="image" style="width: 200px;height: 200px;">
                                                        <img alt="image" class="img-responsive" style="width: 200px;height: 200px;" src="<?php echo ($vo["file_path"]); ?>">
                                                    </div>
                                                    <div class="file-name"><?php echo ($vo["file_name"]); ?></div>
                                                </a>
                                            </div>
                                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div><?php endif; break; endswitch;?>
                    <div class="mail-body text-right tooltip-demo">
                        <a class="btn btn-sm btn-white" href="mail_compose.html"><i class="fa fa-reply"></i> 回复</a>
                        <button title="" data-placement="top" data-toggle="tooltip" data-original-title="删除邮件" class="btn btn-sm btn-white" onclick="del('<?php echo ($massage["id"]); ?>')"><i class="fa fa-trash-o"></i> 删除</button>
                    </div>
                    <div class="clearfix"></div>
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


    <?php switch($_SESSION['theMail']): case "1": ?><script>var url = '/index.php/Admin/Mail/DelOne/id/';</script><?php break;?>
        <?php case "2": ?><script>var url = '/index.php/Admin/Mail/myDelOne/id/';</script><?php break;?>
        <?php case "3": ?><script>var url = '/index.php/Admin/Mail/realDelOne/id/';</script><?php break; endswitch;?>
    <script>
        function del(id) {
            location.href = url + id;
        }
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green"})});
    </script>
</body>
</html>