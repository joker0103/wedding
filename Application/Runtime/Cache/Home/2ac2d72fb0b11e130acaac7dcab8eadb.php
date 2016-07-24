<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>画廊</title>
    <link href="/Public/Home/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="/Public/Home/js/jquery.min.js"></script>
    <link href="/Public/Home/css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta name="keywords" content="Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
    <script type="text/javascript" src="/Public/Home/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="/Public/Home/js/jquery.contentcarousel.js"></script>
    <script src="/Public/Home/js/easing.js"></script>
    <link href="/Public/Admin/js/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
</head>

<body>
<!-- Header Starts Here -->
<div class="header page-hed">
	<div class="container">
	<div class="logo  p-log">
        <a href="/"><img src="/Public/Home/images/logo.png"></a>
	</div>
	</div>
</div>
<div class="navigation">
    <span class="menu"></span>
    <ul class="navig">
        <li><a href="/">首页</a></li>
        <li><a href="<?php echo U('About/about');?>">我们</a></li>
        <li><a href="<?php echo U('Index/gallery');?>" class="active">画廊</a></li>
        <li><a href="<?php echo U('Index/blog');?>">永恒</a></li>
        <li><a href="/Public/TOP" target="_blank">TOP</a></li>
        <li><a href="contact.html">商店</a></li>
        <li><a href="contact.html">蜜月计划</a></li>
        <li><a href="contact.html">联系我们</a></li>
        <li><a href="contact.html">联系我们</a></li>
    </ul>
	<script>
		$( "span.menu" ).click(function() {
		  $( "ul.navig" ).slideToggle( "slow", function() {
		    // Animation complete.
		  });
		});
	</script>
</div>
<!-- Header Ends Here -->
<!-- Page Starts Here -->
<div class="content">
	<div class="container">
		<div class="gallery">
			<h3>ROMANTIC 画廊</h3>
			<p>幸福的瞬间将永远留在这里让世人见证，并成为永恒的幸福，期待你们就是下一对让世人见证的永恒！</p>
            <div class="gallery-top" id="wedding_photo">
                <div class="clearfix"></div>
            </div>
<!--			<div class="pag-nations">
                <?php echo ($show); ?>
				<ul class="p_n-list">
					<li><a href="#">Prev</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">More</a></li>
					<li><a href="#">19</a></li>
					<li><a href="#">20</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</div>-->
		</div>
	</div>
    <div class="pag-nations">
        <?php echo ($show); ?>
    </div>
</div>
<script>
    var photo = <?php echo ($photo); ?>;
    var len = photo.length;
    var content = '';
    for (var i = 0; i < len; ++i) {
        var info = photo[i].info.substr(0,60);
        content +='<div class="view view-tenth"><a class="fancybox" href="' +photo[i].file_path+ '" title="' +photo[i].bride+ ' & ' +photo[i].bridegroom+ '">';
        content +='<img src="' +photo[i].file_path+ '" style="width: 100%;height: 100%;"/><div class="mask"><h2>' +photo[i].bride+ ' & ' +photo[i].bridegroom+ '</h2>';
        content +='<p>' +info+ '</p></div></a></div>';
    }
    $('#wedding_photo').html(content);
    //特效
$(document).ready(function(){$(".fancybox").fancybox({openEffect:"none",closeEffect:"none"})});
</script>
<script src="/Public/Admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/Public/Admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/Public/Admin/js/plugins/fancybox/jquery.fancybox.js"></script>
<div class="footer">
    <div class="container">
        <p>Copyright &copy; 2016 WEDDING文化股份有限公司 <a href="http://www.wedding.com/">www.wedding.com</a> | 京ICP备12012010号-1  公安备案号：京公网安备1010101407号</p>
    </div>
</div>
<!--<script>$(document).ready(function(){$(".fancybox").fancybox({openEffect:"none",closeEffect:"none"})});</script>
<script src="/Public/Admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/Public/Admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/Public/Admin/js/plugins/fancybox/jquery.fancybox.js"></script>-->

</body>
</html>