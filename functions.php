<?php
    
    function themeConfig($form) {
        
        function paul_update($name, $version){
            $update = file_get_contents("https://blog.irikka.com/api/update/index.php?name=".$name."&current=".$version);
            $update = json_decode($update, true);
            echo "
                <style>
                    .info{height: auto; width: auto; margin:1em 0; background-color: rgb(250, 250, 250);box-shadow: 0px 3px 7px 0px rgba(0, 0, 0, 0.3);padding: 10px 15px 5px 15px}
                    .buttons a{background:#467b96; color:#fff; border-radius:4px; padding:.5em .75em; display:inline-block; text-decoration: none}
                    .buttons a:hover{transition-duration: .4s; background-color: #3c6a81;}
                </style>";
            echo "<div class='info'>";
            echo "<h1 style = 'text-align:center;'>daw Theme (".$version.")</h1>";
            echo "<p>By: <a style='text-decoration: none' href='https://github.com/dawnmoe'>PixelYoki</a></p>";
            if(isset($update['message'])){echo "<p>".$update['message']."</p>"; };
            if(isset($update['description'])){echo $update['description']; };
            echo "<p class='buttons' style='text-align:right;'><a href='https://github.com/dawnmoe/typecho-theme-daw'>项目介绍</a>
                    <a href='https://github.com/dawnmoe/typecho-theme-daw/releases'>更新日志</a></p>";
            echo "</div>";
        }
        paul_update("daw", "1.0.0");
        
        
        
        //设置
        
        $avatarUrl = new Typecho_Widget_Helper_Form_Element_Text('avatarUrl', NULL, NULL, _t('<h1>主题设置</h1><br/>个人头像'), _t('你可以在这里填入一个图片URL, 需要带http(s)://'));
        $form->addInput($avatarUrl);
        
        $headerImg = new Typecho_Widget_Helper_Form_Element_Text('headerImg', NULL, NULL, _t('站点Header图片地址'), _t('你可以在这里填入一个Header图片地址, 需要带http(s)://'));
        $form->addInput($headerImg);
        
        $mainColor = new Typecho_Widget_Helper_Form_Element_Text('mainColor', NULL, NULL, _t('站点主题色'), _t('你可以在这里填入十六进制颜色代码, 需要带#'));
        $form->addInput($mainColor);
        
        $urlColor = new Typecho_Widget_Helper_Form_Element_Text('urlColor', NULL, NULL, _t('文章内超链接颜色'), _t('你可以在这里填入十六进制颜色代码, 需要带#'));
        $form->addInput($urlColor);
        
        $imgNumber = new Typecho_Widget_Helper_Form_Element_Text('imgNumber', NULL, 10, _t('主题缩略图数量'), _t('你可以在这里填入主题缩略图数量, 即random文件夹内图片数量'));
        $form->addInput($imgNumber);
        
        $webTime = new Typecho_Widget_Helper_Form_Element_Text('webTime', NULL, NULL, _t('网站创建时间'), _t('格式: Mounth/Day/Year Hour:Minute:Second ,如2/10/2019 13:12:30'));
        $form->addInput($webTime);
        
        $cc = new Typecho_Widget_Helper_Form_Element_Text('cc', NULL, NULL, _t('文章版权'), _t('你可以在文章结尾版权说明，支持 HTML 标签。如，本文采用<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/deed.zh">知识共享署名-非商业性使用 4.0 国际许可协议</a>进行许可。'));
        $form->addInput($cc);
        
        $CDNselect = new Typecho_Widget_Helper_Form_Element_Radio('CDNselect',
            array('defaultCDN' => _t('默认CDN'),
                'jsDelivrCDN' => _t('jsDelivrCDN'),
                'customCDN' => _t('自定义CDN'),
            ),
            'defaultCDN', _t('CDN设置'), _t('CDN源选择'));
        $form->addInput($CDNselect);
        
        $ctCDN = new Typecho_Widget_Helper_Form_Element_Text('ctCDN', NULL, NULL, _t('自定义CDN'), _t('上面单选框选择自定义在这里填入自定义CDN的Url, 需要带http(s)://'));
        $form->addInput($ctCDN);
        
        //SNS
        
        $bilibili = new Typecho_Widget_Helper_Form_Element_Text('bilibili', NULL, NULL, _t('<br/><h1>Footer SNS</h1><br/>bilibili'), _t('你可以在这里填入bilibili个人空间Url, 需要带http(s)://'));
        $form->addInput($bilibili);
        
        $github = new Typecho_Widget_Helper_Form_Element_Text('github', NULL, NULL, _t('Github'), _t('你可以在这里填入Github个人空间Url, 需要带http(s)://'));
        $form->addInput($github);
        
        $facebook = new Typecho_Widget_Helper_Form_Element_Text('facebook', NULL, NULL, _t('Facebook'), _t('你可以在这里填入Facebook个人空间Url, 需要带http(s)://'));
        $form->addInput($facebook);
        
        $googleplus = new Typecho_Widget_Helper_Form_Element_Text('googleplus', NULL, NULL, _t('Google+'), _t('你可以在这里填入Google+个人空间地址Url, 需要带http(s)://'));
        $form->addInput($googleplus);
        
        $twitter = new Typecho_Widget_Helper_Form_Element_Text('twitter', NULL, NULL, _t('Twitter'), _t('你可以在这里填入Twitter个人空间地址Url, 需要带http(s)://'));
        $form->addInput($twitter);
        
        //Disqus
        
        $DisqusShortname = new Typecho_Widget_Helper_Form_Element_Text('DisqusShortname', NULL, NULL, _t('<br/><h1>Disqus</h1><br/>DisqusShortname'), _t('在这里填入DisqusShortname'));
        $form->addInput($DisqusShortname);
        
        $DisqusSiteName = new Typecho_Widget_Helper_Form_Element_Text('DisqusSiteName', NULL, NULL, _t('DisqusSiteName'), _t('在这里填入DisqusSiteName'));
        $form->addInput($DisqusSiteName);
        
        $DisqusApi = new Typecho_Widget_Helper_Form_Element_Text('DisqusApi', NULL, NULL, _t('DisqusApi'), _t('在这里填入DisqusApi'));
        $form->addInput($DisqusApi);
        
        $DisqusApiKey = new Typecho_Widget_Helper_Form_Element_Text('DisqusApiKey', NULL, NULL, _t('DisqusApiKey'), _t('在这里填入DisqusApiKey'));
        $form->addInput($DisqusApiKey);
        
        $DisqusAdmin = new Typecho_Widget_Helper_Form_Element_Text('DisqusAdmin', NULL, NULL, _t('DisqusAdmin'), _t('在这里填入DisqusAdmin'));
        $form->addInput($DisqusAdmin);
        
        $DisqusAdminLabel = new Typecho_Widget_Helper_Form_Element_Text('DisqusAdminLabel', NULL, NULL, _t('DisqusAdminLabel'), _t('在这里填入DisqusAdminLabel'));
        $form->addInput($DisqusAdminLabel);
    }
    
    function themeFields($layout) {
        
        $postImg = new Typecho_Widget_Helper_Form_Element_Text('postImg', NULL, NULL, _t('图片地址'), _t('在这里填入一个图片 URL 地址, 作为文章的头图'));
        $layout->addItem($postImg);
    
        $description = new Typecho_Widget_Helper_Form_Element_Text('description', NULL, NULL, _t('描述'), _t('此文章的描述，用于 SEO 优化'));
        $layout->addItem($description);
    
    }
    
    function cdn($widget){
        $rand = rand(1,$widget->widget('Widget_Options')->imgNumber);
        if($widget->widget('Widget_Options')->CDNselect == "customCDN"){
            return $widget->widget('Widget_Options')->ctCDN . '/img/random/' . $rand . '.png';
        }else if($widget->widget('Widget_Options')->CDNselect == "jsDelivrCDN"){
            return 'https://cdn.jsdelivr.net/gh/dawnmoe/typecho-theme-daw@1.0.0/img/random/' . $rand . '.png';
        }else{
            return $widget->widget('Widget_Options')->themeUrl . '/img/random/' . $rand . '.png';
        }
    }
    
    function articleCount($cid){
        $db=Typecho_Db::get ();
        $rs=$db->fetchRow ($db->select ('table.contents.text')->from ('table.contents')->where ('table.contents.cid=?',$cid)->order ('table.contents.cid',Typecho_Db::SORT_ASC)->limit (1));
        $text = preg_replace("/[^\x{4e00}-\x{9fa5}]/u", "", $rs['text']);
        echo mb_strlen($text,'UTF-8');
    }
    
    function getImg($widget) {
         preg_match_all( "/<[img|IMG].*?src=[\'|\"](.*?)[\'|\"].*?[\/]?>/", $widget->content, $matches );
        if(isset($matches[1][0])){
            $thumb = $matches[1][0];
        }
        return $thumb;
    }
    
    function randomImg($widget){
        $imget = getImg($widget);
        if($widget->fields->postImg != NULL){
            echo $widget->fields->postImg;
        }elseif($imget != NULL){
            echo $imget;
        }else{
            $random =  cdn($widget);
            echo $random;
        }
    }

?>