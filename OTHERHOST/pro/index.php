<?php
header('content-type:text/html;charset=utf-8');
//token验证
if (!empty($_POST['token']) && $_POST['token'] === md5("self_code{$_POST['time']}")) {
	if (!empty($_FILES['file'])) {
		$now = date('Y-m-d', time());
		$dir = "images/{$now}/";
		if (!file_exists($dir)) {
			mkdir($dir);
		}
		$src = $_FILES['file']['tmp_name'];
		$dst = $dir . uniqid() . '.' . $_POST['ext'];
		move_uploaded_file($src, $dst);
		exit($dst);
	}
	exit('<h1 style="color:red;text-align:center;">404 该页面不存在</h1>');
}
exit('<h1 style="color:red;text-align:center;">404 该页面不存在</h1>');