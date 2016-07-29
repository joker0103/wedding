<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  'localhost', // 服务器地址
	'DB_NAME'               =>  'wedding',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PREFIX'             =>  'wed_',    // 数据库表前缀
	'RBAC_AUTHS'  =>[
		0=>['core/*', 'index/*', 'mail/*', 'edit/*'],
		1=>['core/*', 'index/*', 'mail/*', 'blog/*', 'picture/*', 'edit/*'],
		2=>['*/*'],
	],
);