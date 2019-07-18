<?php if ($this->allow('comment')): ?>

<div id="disqus_thread"></div>

<script src="https://cdn.jsdelivr.net/npm/disqusjs@1.1.1/dist/disqus.js"></script>
<script>
    var dsqjs = new DisqusJS({
        shortname: '<?php $this->options->DisqusShortname(); ?>',
        siteName: "<?php $this->options->DisqusSiteName(); ?>",
        identifier: "<?php $this->cid() ?>",
        url: "<?php $this->permalink() ?>",
        api: "<?php $this->options->DisqusApi(); ?>",
        apikey: '<?php $this->options->DisqusApiKey(); ?>',
        admin: '<?php $this->options->DisqusAdmin(); ?>',
        adminLabel: '<?php $this->options->DisqusAdminLabel(); ?>'
    });
</script>

<?php else: ?>

<div id = "dsqjs">
    <header class="dsqjs-header" id="dsqjs-header">
        <nav class="dsqjs-nav dsqjs-clearfix">
            <ul>
                <li class="dsqjs-nav-tab dsqjs-tab-active">
                    <span>
                        评论已关闭
                    </span>
                </li>
            </ul>
        </nav>
    </header>
    
    <footer>
        <p class="dsqjs-footer">Powered by <a class="dsqjs-disqus-logo" href="https://disqus.com" rel="nofollow noopener noreferrer" target="_blank">
            </a>&nbsp;&amp;&nbsp;
            <a href="https://github.com/SukkaW/DisqusJS" target="_blank">DisqusJS</a>
        </p>
    </footer>
</div>
<?php endif; ?>