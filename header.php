<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>

<head>

    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('%s'),
            'tag'       =>  _t('%s'),
            'author'    =>  _t('%s')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- CSS style -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/daw.header.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/daw.icon.css'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/daw.main.css'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/daw.post.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/daw.footer.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/mdui.min.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/disqusjs@1.1.1/dist/disqusjs.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.14.2/build/styles/default.min.css">
    
    <!-- About IOS -->
    <meta name="format-detection" content="telephone=no">

    <!-- IOS Config -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <meta name="apple-mobile-web-app-title" content="<?php $this->options->title() ?>">
    <meta name="theme-color" content="<?php $this->options->themeColor ? $this->options->themeColor() : _e('#fff') ?>">
    <link rel="apple-touch-icon" sizes="32x32 58x58 72x72 96x96 114x114" href="<?php $this->options->IOSIcon(); ?>">
   
    <!-- Disable Baidu transformation -->
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <!-- Disable Baidu snapshot -->
    <meta name="Baiduspider" content="noarchive">
    
    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>

<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

    <header class = "header">
        <nav class = "header-line mdui-appbar-scroll-hide">
            <div class="menu only-mobile">
                <div class = "menu-buttom">
                    <span class="line1"></span>
                    <span class="line2"></span>
                    <span class="line3"></span>
                </div>
		    </div>
        </nav>
        
        <style type="text/css">
            @media (max-width: 700px){
                .header-line-color{
                    background-color: <?php $this->options->mainColor(); ?>!important;
                }
            }
            .sidebar-menu {
                background-color: <?php $this->options->mainColor(); ?>;
            }
            <?php if($this->is('post') | $this->is('page')): ?>
                .main-img{
                    background-image: url("<?php randomImg($this); ?>");
                }
                .h-title{
                    height:350px!important;
                }
                <?php else: ?>
                .main-img{
                    background-image: url("<?php $this->options->headerImg(); ?>");
                }
                <?php endif; ?>
            }
        </style>
        
        <div class="main-img"></div>
        
			<div class = "h-title">
			    <div>
			        <?php if($this->is('index')): ?>
				        <p class = "h-page-name"><?php $this->options->title() ?></p>
				        <p class = "h-description"><?php $this->options->description() ?></p>
				    <?php elseif($this->is('post') | $this->is('page')): ?>
				        <p class = "h-page-name"><?php $this->title() ?></p>
				    <?php elseif($this->is('category')): ?>
				        <p class = "h-page-name"><?php $this->category(','); ?></p>
				    <?php endif; ?>
				</div>
			</div>
            
    </header><!-- end #header -->
    
    <div class = 'sidebar-menu only-mobile'>
    </div>