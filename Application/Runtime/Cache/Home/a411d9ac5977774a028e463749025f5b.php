<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>联系我们</title>
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
<div class="header page-hed">
	<div class="container">
	<div class="logo p-log">
		<a href="/"><img src="/Public/Home/images/logo.png"></a>
	</div>
	</div>
</div>
<div class="navigation">
	<span class="menu"></span>
	<ul class="navig">
		<li><a href="/">首页</a></li>
		<li><a href="<?php echo U('Our/about');?>">我们</a></li>
		<li><a href="<?php echo U('Index/gallery');?>">画廊</a></li>
		<li><a href="<?php echo U('Index/blog');?>">永恒</a></li>
		<li><a href="/Public/TOP" target="_blank">TOP</a></li>
		<li><a href="javascript:;">商店</a></li>
		<li><a href="javascript:;">蜜月计划</a></li>
		<li><a href="<?php echo U('Our/our');?>" class="active">联系我们</a></li>
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
			<h3>我们在这里等着你</h3>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1510409.9441035846!2d43.3713615!3d42.3207845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd7e64f626b%3A0x4f907964122d4ac2!2sGeorgia!5e0!3m2!1sen!2sin!4v1419301288570"  frameborder="0" style="border:0"></iframe>
				<div class="address">
					<h4>Address Here</h4>
					<p>Nulla sollicitudin nulla nibh, non dapibus ex ornare eu. Duis convallis at orci at eleifend. Etiam sodales ante at erat fermentum</p>
					<p>arius ut at mi. Nullam in blandit ante. Quisque molestie diam </p>
					<p><a href="mailto:example@email.com">123example@email.com</a></p>
					<p>+101 0000 888 888</p>
				</div>
				<div class="clearfix"></div>
			</div>
						<div class="contact-box">
				<div class="text">
					<input type="text" placeholder="姓名" required="">
					<input type="text" placeholder="电子邮件地址" required="">
					<input type="text" placeholder="标题" required="">
				</div>
				<div class="text">
					<textarea placeholder="信息内容" required=""></textarea>
				</div>
				<div class="text">
					<input type="submit" value="发送"/>
				</div>
			</div>
		</div>
	</div>
</div>
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