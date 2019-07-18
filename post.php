<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class = "post-main">
    
    <div class = "post-main-info">
        
        <style type="text/css">
            .post-author-avatar{
                background-image: url("<?php $this->options->avatarUrl(); ?>");
            }
            .post-main-article a{
                color: <?php $this->options->urlColor(); ?>;
            }
        </style>
        
        <div class = "post-author-avatar">
        </div>
        
        <div class = "post-info-top">
			<span class = "post-info-i-top" style = "color: rgb(25, 25, 25);"><?php $this->author(); ?></span>
			<span class = "post-info-i-top"><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time></span>
		</div>
		
		<div class = "post-top-space"></div>
		
		<button class = "daw-button post-share icon-share" mdui-menu="{target: '#post-share'}"></button>
        <ul class="mdui-menu" id = "post-share" style = "text-align: left;">
                            
            <li class="mdui-menu-item">
                <a class="mdui-ripple" href="https://www.facebook.com/sharer/sharer.php?u=<?php $this->permalink() ?>">分享到FaceBook</a>
            </li>
            
            <li class="mdui-menu-item">
                <a class="mdui-ripple" href="https://twitter.com/intent/tweet?text=<?php $this->title() ?>&url=<?php $this->permalink() ?>&via=">分享到Twitter</a>
            </li>
            
            <li class="mdui-menu-item">
                <a class="mdui-ripple" href="https://telegram.me/share/url?url=<?php $this->permalink() ?>&text=<?php $this->title() ?>">分享到Telegram</a>
            </li>
            
            <li class="mdui-menu-item">
                <a class="mdui-ripple" href="https://plus.google.com/share?url=<?php $this->permalink() ?>">分享到Google+</a>
            </li>
            
            <li class="mdui-menu-item">
                <a class="mdui-ripple" href="http://service.weibo.com/share/share.php?appkey=&title=<?php $this->title() ?>&url=<?php $this->permalink() ?>&pic=&searchPic=false&style=simple">分享到微博</a>
            </li>
                
        </ul>
    </div>
    
    <div class = "post-main-article">
        <?php $this->content(); ?>
        </br>
        <span class = "last-time">本文最后修改于<?php echo date('Y年m月d日h:i a' , $this->modified); ?></span>
        <blockquote style = "margin:20px auto 10px auto;padding: 7px 14px;border-left: 3px solid #F44336;list-style: none;word-break: break-all;">
            <div>
                <strong style = "display: block">本文链接:<a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a></strong>
                <strong style = "display: block"><?php $this->options->cc(); ?></strong>
            </div>
        </blockquote>
        
    </div>
    
    <div class = "comments">
        <?php $this->need('comments.php'); ?>
    </div>
    
</div>

<?php $this->need('footer.php'); ?>