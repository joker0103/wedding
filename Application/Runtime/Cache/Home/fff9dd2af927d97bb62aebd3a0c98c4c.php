<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>永恒</title>
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
		<li><a href="<?php echo U('Our/about');?>">我们</a></li>
		<li><a href="<?php echo U('Index/gallery');?>">画廊</a></li>
		<li><a href="<?php echo U('Index/blog');?>" class="active">永恒</a></li>
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
		<div class="gallery">
			<h3>最近大事记</h3>
			<div class="blog-sidebar">
    <h4>美好回忆</h4>
    <ul class="cat-list">
        <script>
            var title = <?php echo ($title); ?>;
            var len = title.length;
            var li = '';
            for (var i = 0; i < len; ++i) {
                li += '<li><a href="/index.php/Home/About/single/id/' +title[i].id+ '">' +title[i].title+ '</a></li>';
            }
            document.write(li);
        </script>
    </ul>
    <h4>新鲜款式</h4>
    <ul class="cat-list">
        <li><a href="#"><img src="/Public/Home/images/bl.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
        <li><a href="#"><img src="/Public/Home/images/bl2.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
        <li><a href="#"><img src="/Public/Home/images/bl3.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
        <li><a href="#"><img src="/Public/Home/images/bl4.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
        <li><a href="#"><img src="/Public/Home/images/bl.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
        <li><a href="#"><img src="/Public/Home/images/bl4.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
        <li><a href="#"> <img src="/Public/Home/images/bl3.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
    </ul>
</div>
			<div class="blog-content">
				<script>
					var article = <?php echo ($article); ?>;
					var len = article.length;
					var content = '';
					for (var i = 0; i < len; ++i) {
						var timer = new Date(article[i].send_date * 1000).toLocaleString();
						var info = article[i].content.substr(0, 1000);
						content += '<div class="blog-post" style="background-color: #FCFCFC;padding:0 30px 0;"><p>&nbsp;</p><a href="/index.php/Home/About/single/id/' +article[i].id+ '"><h4>' +article[i].title+ '</h4></a>';
						content += '<div class="post-details"><p>发布者：<a href="javascript:;">' +article[i].name+ '</a> &nbsp;&nbsp; 发布时间： <span>' +timer+ '</span> &nbsp;&nbsp; 地址：<span>' +article[i].address_name+ '</span></p></div>';
						content += '<p>' +article[i].synopsis+ '</p>';
						content += info+ '<p>&nbsp;</p><p>&nbsp;</p></div>';
					}
					document.write(content);
				</script>
	<!--			<div class="pag-nations">
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
				<?php echo ($show); ?>
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

</body>
</html>