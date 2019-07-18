<?php
/**
 * @package Daw Theme
 * @author PixelYoki
 * @version 1.0.0
 * @link https://blog.irikka.com/
 */
    if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    $this->need('header.php'); ?>

<div class = "main">
		
	<div class= "post-list">
	    
	    <?php $c = 0; ?>
	    
		<?php while($this->next()): ?>
		
		<div class = "post">
				
			<?php $c++; ?>
			    
			<style type="text/css">
                #post-img-<?php echo "$c"; ?>{
                    background-image: url("<?php randomImg($this); ?>");
                }
                .author-avatar{
                    background-image: url("<?php $this->options->avatarUrl(); ?>");
                }
                .post-read-more,.post-right-info-i,.post-title:hover,.current{
	                color: <?php $this->options->mainColor(); ?>;
                }
                .post-brief a{
                    color: <?php $this->options->urlColor(); ?>;
                }
            </style>
					
			<a href = "<?php $this->permalink() ?>">
			    <div class = "post-title"><?php $this->title() ?></div>
				<div class = "post-img" id = "post-img-<?php echo "$c"; ?>"></div>
			</a>
					
			<div class = "post-brief">
				<span><?php $this->content(); ?></span>
				<a href = "<?php $this->permalink() ?>"><span class = "post-read-more">阅读更多</span></a>
			</div>
					
			<div class = "post-info">
					
				<div class = "post-left-info">
					<div class = "author-info">
						
						<div class = "author-avatar">
						</div>
					    <div class = "p-info">
							<span class = "p-info-i" style = "color: rgb(25, 25, 25);"><?php $this->author(); ?></span>
							<span class = "p-info-i"><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time></span>
						</div>
					</div>
				</div>
				<div class = "post-right-info">
					<span class = "post-right-info-i"><?php $this->category(','); ?></span>
					<span class = "post-right-info-i"> | </span>
					<a href = "<?php $this->permalink() ?>"><span class = "post-right-info-i"><?php articleCount($this->cid); ?>字</span></a>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
		
	</div>
	
    <div class = "page-nav">
        <?php $this->pageLink('<div class = "page-prev"><i class = "page-prev-img"></i></div>'); ?>
        
        <span class="page-number current">
            <?php echo $this->_currentPage; ?> of <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?>
        </span>
        
        <?php $this->pageLink('<div class = "page-next"><i class = "page-next-img"></i></div>','next'); ?>
    </div>
		
</div>

 <?php $this->need('footer.php'); ?>