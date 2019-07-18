        <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        <footer class = "footer">
            
            <style type = "text/css">
                
                .footer-right a:hover{
                    color: <?php $this->options->urlColor(); ?>;
                }
            </style>
            
            <div class = "footer-left-items">
                <?php if($this->options->bilibili != NULL): ?><a class = "footer-left-item" href = "<?php $this->options->bilibili(); ?>" target = "_blank"><i class = "icon-footer-item icon-bilibili"></i></a><?php endif; ?>
                <?php if($this->options->github != NULL): ?><a class = "footer-left-item" href = "<?php $this->options->github(); ?>" target = "_blank"><i class = "icon-footer-item icon-github"></i></a><?php endif; ?>
                <?php if($this->options->facebook != NULL): ?><a class = "footer-left-item" href = "<?php $this->options->facebook(); ?>" target = "_blank"><i class = "icon-footer-item icon-facebook"></i></a><?php endif; ?>
                <?php if($this->options->googleplus != NULL): ?><a class = "footer-left-item" href = "<?php $this->options->googleplus(); ?>" target = "_blank"><i class = "icon-footer-item icon-googleplus"></i></a><?php endif; ?>
                <?php if($this->options->twitter != NULL): ?><a class = "footer-left-item" href = "<?php $this->options->twitter(); ?>" target = "_blank"><i class = "icon-footer-item icon-twitter"></i></a><?php endif; ?>
            </div>
            
            <div class = "copyright" id = "copyright"></div>
            
            <div class = "footer-right">
                <div>Powered by <a href = "http://typecho.org/" target = "_blank">Typecho</a> • Theme by <a href = "https://github.com/dawnmoe/typecho-theme-daw" target = "_blank">daw</a></div>
                <span>本站已勉强运行</span>
                <span id = "runTime"></span>
                <script type = "text/javascript">
                    function siteRuntime(){
	                    window.setTimeout("siteRuntime()",1000);
	                    a=new Date("<?php $this->options->webTime(); ?>");
	                    b=new Date();
	                    webYear=a.getFullYear();
	                    T=(b.getTime()-a.getTime());
	                    i=24*60*60*1000;
	                    d=T/i;
	                    D=Math.floor(d);
	                    h=(d-D)*24;
	                    H=Math.floor(h);
	                    m=(h-H)*60;
	                    M=Math.floor(m);
	                    s=(m-M)*60;
	                    S=Math.floor(s);
	                    runTime.innerHTML = D + " 天 " + H + " 小时 " + M + " 分 " + S + " 秒 ";
	                    return webYear;
                    }
                    var webYear = siteRuntime();
                    document.getElementById("copyright").innerHTML= "© " + webYear + " - <?php echo date("Y")?> • <?php $this->options->title() ?>";
                    
                </script>
                
                <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery-2.1.1.min.js'); ?>"></script>
	           
                <script type="text/javascript">
                    var menucount = 0;
		            $(function(){
			            $('.menu').on('click', function() {
			                menucount++;
			            $('.line1').toggleClass('overL1')
			            $('.line2').toggleClass('overL2')
			            $('.line3').toggleClass('overL3')
			            $('.header-line').toggleClass('mdui-appbar-scroll-hide');
			            $('.header-line').toggleClass('mdui-headroom');
			            $('.header-line').toggleClass('header-line-color');
			            $('.sidebar-menu').toggleClass('covero');
			            $('.sidebar-menu').toggleClass('coverc', menucount % 2 == 0);
			            $('.sidebar-menu').toggleClass('sidebar-menu-p', menucount % 2 == 0);
			            });
		            })
	            </script>
	            
	            
                <script>
                    function topNavScroll(){
                    var topScroll = Math.floor($(window).scrollTop());
                    if(topScroll>200){
                        $('.main-img').css({"filter":"blur(5px)","transition": "filter 1s"});
                        }
                    else{
                        $('.main-img').css({"filter":"blur(0px)","transition": "filter 1s"});
                        }
                    }
                    $(window).on('scroll',function() {
                    topNavScroll();
                    });
                </script>
            </div>
            
            <!-- Javascript -->
            <script type="text/javascript" src="<?php $this->options->themeUrl('js/mdui.min.js'); ?>"></script>
            <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.14.2/build/highlight.min.js"></script>
            <script >hljs.initHighlightingOnLoad();</script>
    
        </footer><!-- end #footer -->

        <?php $this->footer(); ?>
    </body>
</html>