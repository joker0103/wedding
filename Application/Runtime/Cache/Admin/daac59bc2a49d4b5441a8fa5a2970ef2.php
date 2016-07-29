<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
<!--    <meta http-equiv="Cache-Control" content="no-siteapp" />-->
    <title>收件箱</title>
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
                                    <a href="/index.php/Admin/Mail/index/type/got"> <i class="fa fa-inbox "></i> 收件箱 <span class="label label-warning pull-right"><?php echo ($new); ?></span>
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
                <div class="mail-box-header">
                    <h2><?php echo ($choose); ?></h2>
                    <div class="mail-tools tooltip-demo m-t-md">
                        <button class="btn btn-white btn-sm" title="标为已读" id="readed"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-white btn-sm" title="删除" id="btndel"><i class="fa fa-trash-o"></i></button>
                    </div>
                </div>
                <div class="mail-box">

                    <table class="table table-hover table-mail">
                        <tbody>
                        <!--顾客来信-->
                        <?php if(is_array($customer)): $i = 0; $__LIST__ = $customer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['status'] == 0 ): ?><tr class="unread">
                                    <?php else: ?>
                                <tr class="read"><?php endif; ?>
                            <td class="check-mail">
                                <input type="checkbox" class="i-checks" value="<?php echo ($vo["id"]); ?>">
                            </td>
                            <td class="mail-ontact"><a href="/index.php/Admin/Mail/mail_detail/id/<?php echo ($vo["id"]); ?>/type/1">重要信息</a>
                                <span class="label label-danger pull-right">顾客</span>
                                <?php if($vo['status'] == 0 ): ?><span class="label label-warning pull-right">未读</span><?php endif; ?>
                            </td>
                            <td class="mail-subject"><a href="/index.php/Admin/Mail/mail_detail/id/<?php echo ($vo["id"]); ?>/type/1"><?php echo ($vo["c_title"]); ?></a>
                            </td>
                            <td class=""></td>
                            <td class="text-right mail-date"><?php echo (date("Y-m-d H:i:s", $vo["send_date"])); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--站内信-->
                        <?php if(is_array($massage)): $i = 0; $__LIST__ = $massage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['status'] == 0 ): ?><tr class="unread">
                                <?php else: ?>
                                <tr class="read"><?php endif; ?>
                                    <td class="check-mail">
                                        <input type="checkbox" class="i-checks" value="<?php echo ($vo["id"]); ?>">
                                    </td>
                                    <td class="mail-ontact"><a href="/index.php/Admin/Mail/mail_detail/id/<?php echo ($vo["id"]); ?>/type/2"><?php echo ($vo["name"]); ?></a>
                                        <?php if($vo['status'] == 0 ): ?><span class="label label-warning pull-right">未读</span><?php endif; ?>
                                    </td>
                                    <td class="mail-subject"><a href="/index.php/Admin/Mail/mail_detail/id/<?php echo ($vo["id"]); ?>/type/2"><?php echo ($vo["c_title"]); ?></a>
                                    </td>
                                    <td class=""></td>
                                    <td class="text-right mail-date"><?php echo (date("Y-m-d H:i:s", $vo["send_date"])); ?></td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
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


    <?php switch($_SESSION['theMail']): case "1": ?><script>var url = '/index.php/Admin/Mail/Del/ids/';</script><?php break;?>
        <?php case "2": ?><script>var url = '/index.php/Admin/Mail/myDel/ids/';</script><?php break;?>
        <?php case "3": ?><script>var url = '/index.php/Admin/Mail/realDel/ids/';</script><?php break; endswitch;?>
    <script>
        $(function () {
            $('#btndel').on('click', function () {
                var id = $(':checkbox:checked');
                var ids = '';
                for (var i = 0; i < id.length ; ++i) {
                  ids += id[i].value + ',';
                }
                ids = ids.substring(0, ids.length - 1);
                location.href = url + ids;
            });
        });
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green"})});
    </script>
</body>
</html>