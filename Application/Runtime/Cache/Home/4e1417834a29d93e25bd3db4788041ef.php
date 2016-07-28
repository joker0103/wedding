<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>我们</title>
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
<div class="header page-hed" >
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
		<li><a href="<?php echo U('Our/about');?>" class="active">我们</a></li>
		<li><a href="<?php echo U('Index/gallery');?>">画廊</a></li>
		<li><a href="<?php echo U('Index/blog');?>">永恒</a></li>
		<li><a href="/Public/TOP" target="_blank">TOP</a></li>
		<li><a href="<?php echo U('WeddingStore/index');?>">商店</a></li>
		<li><a href="<?php echo U('Traveling/index');?>">蜜月计划</a></li>
		<li><a href="<?php echo U('Our/our');?>">联系我们</a></li>
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
			<div class="col-md-4 about-col">
				<h3>我们的文化</h3>
				<img src="<?php echo ($synopsis["synopsis_photo"]); ?>" alt="">
				<?php echo ($synopsis["synopsis"]); ?>
			</div>
			<div class="col-md-5 about-col">
				<h3>成长&幸福的记录</h3>
				<ul class="history">
					<li><span>2004</span>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
					</li>

				</ul>
			</div>
			<div class="col-md-3 about-col">
				<h3>我们的宗旨</h3>
				<?php echo ($synopsis["tenet"]); ?>
			</div>
			<div class="clearfix"></div>
			<div class="ideas">
				<div class="col-md-3 ideas-col">
					<img src="/Public/Home/images/pic3.jpg" alt="">
					<h3>Donec finibus et liberovel imperdiet.</h3>
					<p>Pellentesque sed rutrum ante. Morbi dignissim ut urna eu luctus. </p>
				</div>
				<div class="col-md-3 ideas-col">
					<img src="/Public/Home/images/pic2.jpg" alt="">
					<h3>Donec finibus et liberovel imperdiet.</h3>
					<p>Pellentesque sed rutrum ante. Morbi dignissim ut urna eu luctus. </p>
				</div>
				<div class="col-md-3 ideas-col">
					<img src="/Public/Home/images/pic5.jpg" alt="">
					<h3>Donec finibus et liberovel imperdiet.</h3>
					<p>Pellentesque sed rutrum ante. Morbi dignissim ut urna eu luctus. </p>
				</div>
				<div class="col-md-3 ideas-col">
					<img src="/Public/Home/images/pic4.jpg" alt="">
					<h3>Donec finibus et liberovel imperdiet.</h3>
					<p>Pellentesque sed rutrum ante. Morbi dignissim ut urna eu luctus. </p>
				</div>
				<div class="clearfix"></div>
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

<script>
	//记录
	var Chistory = <?php echo ($history); ?>;
	var Hlen = Chistory.length;
	var Hcontent = '';
	for (var i = 0; i < Hlen; ++i) {
		var timer = new Date(Chistory[i].time * 1000).toLocaleDateString().substr(0, 4);
		Hcontent += '<li><span>' +timer+ '</span><p>' +Chistory[i].history+ '</p></li>';
	}
	$('.history').html(Hcontent);
	//名人榜
	var personal = <?php echo ($personal); ?>;
	var Plen = personal.length;
	var Pcontent = '';
	for (var j = 0; j < Plen; ++j) {
		Pcontent += '<h2>OUR名人榜</h2>';
		Pcontent += '<div class="col-md-3 ideas-col"><img src="' +personal[j].photo+ '"><h3>' +personal[j].name+ '</h3><p>' +personal[j].personal_synopsis+ '</p></div>';
	}
	$('.ideas').html(Pcontent);
</script>
</body>
</html>