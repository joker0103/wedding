<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
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
                                    <a href="/index.php/Admin/Mail/mailbox/type/got"> <i class="fa fa-inbox "></i> 收件箱 <span class="label label-warning pull-right">16</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/index.php/Admin/Mail/mailbox/type/sent"> <i class="fa fa-envelope-o"></i> 发件箱</a>
                                </li>
                                <li>
                                    <a href="/index.php/Admin/Mail/mailbox/type/threw"> <i class="fa fa-trash-o"></i> 垃圾箱</a>
                                </li>
                            </ul>
                            <a class="btn btn-block btn-primary compose-mail" href="<?php echo U('mail_compose');?>">写信</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 animated fadeInRight">
                <div class="mail-box-header">
                    <h2>
                    收件箱 (16)
                </h2>
                    <div class="mail-tools tooltip-demo m-t-md">
                        <button class="btn btn-white btn-sm" title="标为已读"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-white btn-sm" title="删除"><i class="fa fa-trash-o"></i></button>
                    </div>
                </div>
                <div class="mail-box">

                    <table class="table table-hover table-mail">
                        <tbody>
                            <tr class="unread">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="/index.php/Admin/Mail/mail_detail">支付宝</a>
                                </td>
                                <td class="mail-subject"><a href="/index.php/Admin/Mail/mail_detail">支付宝提醒</a>
                                </td>
                                <td class=""><i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right mail-date">昨天 10:20</td>
                            </tr>
                            <tr class="unread">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks" checked>
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">Amaze UI</a>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">Amaze UI Beta2 发布</a>
                                </td>
                                <td class=""></td>
                                <td class="text-right mail-date">上午10:57</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">WordPress</a> <span class="label label-warning pull-right">验证邮件</span>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">wp-user-frontend-pro v2.1.9</a>
                                </td>
                                <td class=""></td>
                                <td class="text-right mail-date">上午9:21</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">淘宝网</a>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">史上最全！淘宝双11红包疯抢攻略！</a>
                                </td>
                                <td class=""></td>
                                <td class="text-right mail-date">中午12:24</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">淘宝网</a> <span class="label label-danger pull-right">AD</span>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">亲，双11来啦！帮你挑货，还送你4999元红包！仅此一次！</a>
                                </td>
                                <td class=""><i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right mail-date">上午6:48</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">支付宝</a>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">支付宝提醒</a>
                                </td>
                                <td class=""><i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right mail-date">昨天 10:20</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">Amaze UI</a>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">Amaze UI Beta2 发布</a>
                                </td>
                                <td class=""></td>
                                <td class="text-right mail-date">上午10:57</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">WordPress</a> <span class="label label-warning pull-right">验证邮件</span>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">wp-user-frontend-pro v2.1.9</a>
                                </td>
                                <td class=""></td>
                                <td class="text-right mail-date">上午9:21</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">淘宝网</a>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">史上最全！淘宝双11红包疯抢攻略！</a>
                                </td>
                                <td class=""></td>
                                <td class="text-right mail-date">中午12:24</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">淘宝网</a> <span class="label label-danger pull-right">AD</span>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">亲，双11来啦！帮你挑货，还送你4999元红包！仅此一次！</a>
                                </td>
                                <td class=""><i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right mail-date">上午6:48</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">支付宝</a>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">支付宝提醒</a>
                                </td>
                                <td class=""><i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right mail-date">昨天 10:20</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">Amaze UI</a>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">Amaze UI Beta2 发布</a>
                                </td>
                                <td class=""></td>
                                <td class="text-right mail-date">上午10:57</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">WordPress</a> <span class="label label-warning pull-right">验证邮件</span>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">wp-user-frontend-pro v2.1.9</a>
                                </td>
                                <td class=""></td>
                                <td class="text-right mail-date">上午9:21</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">淘宝网</a>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">史上最全！淘宝双11红包疯抢攻略！</a>
                                </td>
                                <td class=""></td>
                                <td class="text-right mail-date">中午12:24</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks">
                                </td>
                                <td class="mail-ontact"><a href="mail_detail.html">淘宝网</a> <span class="label label-danger pull-right">AD</span>
                                </td>
                                <td class="mail-subject"><a href="mail_detail.html">亲，双11来啦！帮你挑货，还送你4999元红包！仅此一次！</a>
                                </td>
                                <td class=""><i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right mail-date">上午6:48</td>
                            </tr>
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


    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green"})});
    </script>
</body>
</html>