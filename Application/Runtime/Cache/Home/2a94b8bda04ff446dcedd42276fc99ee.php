<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>首页</title>
    <link href="/Public/Home/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="/Public/Home/js/jquery.min.js"></script>
    <link href="/Public/Home/css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta name="keywords" content="Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
    <script type="text/javascript" src="/Public/Home/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="/Public/Home/js/jquery.contentcarousel.js"></script>
    <script src="/Public/Home/js/easing.js"></script>
</head>

<body>
<!-- Header Starts Here -->
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="/"><img src="/Public/Home/images/logo.png"></a>
		</div>
	</div>
</div>
<div class="navigation">
	<span class="menu"></span>
	<ul class="navig">
		<li><a href="/" class="active">首页</a></li>
		<li><a href="<?php echo U('About/about');?>">我们</a></li>
		<li><a href="gallery.html">画廊</a></li>
		<li><a href="blog.html">永恒</a></li>
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
<div class="content">
	<div class="container">
		<div class="col-md-6 content-col">
			<img src="<?php echo ($wedding["file_path"]); ?>" alt="最美新人" width="570" height="300">
		</div>
		<div class="col-md-6 content-col col_2">
			<h2>最美殿堂</h2>
			<p><?php echo ($wedding["bride"]); ?> & <?php echo ($wedding["bridegroom"]); ?></p>
			<p><?php echo (mb_substr($wedding["info"],0,100)); ?></p>
		</div>
		<div class="clearfix"></div>
		<div class="ideas">
			<h3>最新照片</h3>
			<?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="col-md-3 ideas-col">
					<img src="<?php echo ($vol["file_path"]); ?>" title="婚礼地址:<?php echo ($vol["address_name"]); ?>" width="260" height="160">
					<h3><?php echo ($vol["bride"]); ?> & <?php echo ($vol["bridegroom"]); ?></h3>
					<p style="color: grey;font-size: 12px;">婚礼地址:<?php echo ($vol["address_name"]); ?></p>
					<p><?php echo (mb_substr($vol["info"],0,20)); ?>...</p>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="clearfix"></div>
		</div>
		<div class="events">
			<div class="col-md-7 events-col">
				<div id="ca-container" class="ca-container">
				    <div class="ca-wrapper">
						<div class="ca-item ca-item">
						   <div class="ca-item-main">
								<div class="ca-icon" style="background: url(/Public/Home/images/pic12.jpg);">
									<div class="caption">
										<p>Shan & Mary<br>Wedding<br>Jun.02.2014</p>
									</div> 
								</div>
								<div class="ca-icon" style="background: url(/Public/Home/images/pic11.jpg);">
									<div class="caption">
										<p>Shan & Mary<br>Wedding<br>Jun.02.2014</p>
									</div>
								</div>
							   <div class="ca-icon" style="background: url(/Public/Home/images/pic11.jpg);">
								   <div class="caption">
									   <p>Shan & Mary<br>Wedding<br>Jun.02.2014</p>
								   </div>
							   </div>
						   </div>
						</div>
					</div>
					<script type="text/javascript">
						$('#ca-container').contentcarousel();
					</script>
				</div>
			</div>
			<div class="col-md-5 events-col">
				<h3>Latest Events</h3>
				<h4>28.08.2014</h4>
				<p>Cras vel risus sodales tellus blandit porttitor vitae vitae mauris. Etiam rhoncus ultricies dolor facilisis porta. </p>
				<h4>28.08.2014</h4>
				<p>Cras vel risus sodales tellus blandit porttitor vitae vitae mauris. Etiam rhoncus ultricies dolor facilisis porta. </p>
				<h3>News Letter</h3>
				<p>Etiam sit amet ipsum orci. Lorem ipsum dolor sit  amet, consectetur adipiscing elit. Etiam sed arcu ut mi accumsan fringilla. </p>
				<span class="subscribe">
					<input type="text" placeholder="Enter your email..." required=""/>
					<input type="submit" value="Go" />
				</span>
				<h3>Follow Us</h3>
				<ul class="social">
					<li><a href="#"><i class="fa"></i></a></li>
					<li><a href="#"><i class="fb"></i></a></li>
					<li><a href="#"><i class="fc"></i></a></li>
				</ul>
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
</body>
</html>