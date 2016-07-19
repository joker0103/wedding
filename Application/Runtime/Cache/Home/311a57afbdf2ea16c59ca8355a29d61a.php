<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>TOP</title>
		
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<script type="text/javascript" src="/Public/Home/flash/38041-swfobject.js"></script>
        <script type="text/javascript" src="/Public/Home/flash/38041-motoResize.js"></script>
		<script type="text/javascript">

			var minWidth = 980;
			var minHeight = 750;

			var params = {
				menu: "false",
				allowScriptAccess: "always",
				scale: "noscale",
				allowFullScreen: "true"
				
			};

			swfobject.embedSWF("/Public/Home/flash/38041.swf", "flashcontent", "100%", "100%", "10.0.0", "/Public/Home/flash/38041-expressinstall.swf", {}, params, {});

			if (swfobject.hasFlashPlayerVersion("6.0.0")) {
				swfobject.addDomLoadEvent(createFullBrowserFlash);
			}
		</script>
       <link href="/Public/Home/flash/38041-style.css" rel="stylesheet" type="text/css"/>
		<meta charset="UTF-8"/>
	</head>
	<body>
	<div id="container">
		<div id="flashcontent">
			<br /><br /><strong>Please update your Flash Player</strong><br /><br />
			This site makes use of the Adobe Flash Player.<br /><br />
			The latest versions of browsers such as Firefox, Netscape or Internet Explorer usually have the Flash Player pre-installed.<br /><br />
			If your browser doesn't or has an older version of the player, you can <a href="http://www.adobe.com/go/getflashplayer" target="_blank"><b>download it here</b></a>.<br /><br />
			Flash Player enables us to provide you with a dynamic website with video clips and full screen images.<br /><br />
			<a href="http://www.adobe.com/go/getflashplayer" target="_blank"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash Player" title="Get Adobe Flash Player" border="0" /></a><br /><br/>
		</div>
	</div>
</body>
</html>