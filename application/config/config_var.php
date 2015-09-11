<?php

// 各种url	---------------------------------------------------------------------------------------------------
$config['domain']				=	'http://admin.petworld.com/';	// 网站域名
$config['article_image_url']	=	'http://admin.petworld.com/source/image/article/';	// 文章图片url

// 各种路径	---------------------------------------------------------------------------------------------------
$config['article_image_path']	=	FCPATH.'source/image/article/';	// 图片存放路径

// session 的 key 值	---------------------------------------------------------------------------------------------------
$config['admin_sess']		=	'admin_user_info';	// 用户信息session的键名
$config['admin_auth']		=	'admin_auth_info';	// 用户权限session的键名
$config['admin_login_sess']	=	'admin_login_sess';	// 用户登录session的键名
$config['add_article_sess']	=	'admin_add_article';// 用户添加文章session的键名

// redis配置信息	-------------------------------------------------------------------------------------------------------
$config['redis']['host']	=	'10.13.0.12';	// redis服务器地址
$config['redis']['port']	=	6379;			// redis服务器端口
$config['redis']['auth']	=	'';				// redis服务器密码
$config['redis']['time']	=	300;			// 默认过期时间，单位:秒
$config['redis']['auto']	=	TRUE;			// 是否开启redis主动缓存
$config['redis']['remain']	=	10;				// 开始主动缓存的剩余时间，单位:秒，ttl少于此时间则开始执行主动缓存机制
$config['redis']['autokey']	=	'AutoCacheKey';	// 主动缓存队列的键名

?>