USE `{dataname}`;
Set character_set_connection=utf8, character_set_results=utf8, character_set_client=utf8;
CREATE TABLE IF NOT EXISTS `{tableprefix}cate` (  `cate_id` int(11) NOT NULL AUTO_INCREMENT,  `cate_name` varchar(50) NOT NULL,  `cate_desc` varchar(200) NOT NULL,  `cate_face` varchar(100) NOT NULL,  `cate_url` varchar(100) NOT NULL,  `sortorder` tinyint(5) NOT NULL,  `weixin_id` varchar(32) NOT NULL,  `uid` int(11) NOT NULL,  PRIMARY KEY (`cate_id`),  KEY `weixin_id` (`weixin_id`),  KEY `uid` (`uid`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}info` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `info_type` tinyint(1) NOT NULL,  `uid` int(11) NOT NULL,  `weixin_id` varchar(32) NOT NULL,  `keywords` varchar(300) NOT NULL,  `title` varchar(100) NOT NULL,  `intro` varchar(200) NOT NULL,  `content` text NOT NULL,  `viewtimes` int(5) NOT NULL,  `cateid` int(11) NOT NULL,  `updatetime` int(11) NOT NULL,  `face` varchar(100) NOT NULL,  `showindex` tinyint(1) NOT NULL,  `ext_info` varchar(50) NOT NULL,  `ext_recommend` varchar(50) NOT NULL,  `url` varchar(100) NOT NULL,  `sortorder` int(5) NOT NULL,  `music` varchar(100) NOT NULL,  `hq_music` varchar(100) NOT NULL,  PRIMARY KEY (`id`),  KEY `uid` (`uid`,`cateid`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}info_keywords` (  `info_id` int(11) NOT NULL,  `keyword` varchar(50) NOT NULL,  `mattch` tinyint(1) NOT NULL,  `weixin_id` varchar(32) NOT NULL,  `api_type` tinyint(1) NOT NULL COMMENT '0为一般接口，1为第三方接口') ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `{tableprefix}notice_info` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `uid` int(11) NOT NULL,  `weixin_id` varchar(32) NOT NULL,  `content` varchar(500) NOT NULL,  `home` tinyint(1) NOT NULL,  PRIMARY KEY (`id`),  KEY `uid` (`uid`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}rand_info` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `uid` int(11) NOT NULL,  `weixin_id` varchar(32) NOT NULL,  `content` varchar(500) NOT NULL,  `updatetime` int(11) NOT NULL,  PRIMARY KEY (`id`),  KEY `uid` (`uid`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}setting` (  `variable` varchar(32) NOT NULL,  `content` text NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='系统设置表';
CREATE TABLE IF NOT EXISTS `{tableprefix}user_plugins` (  `weixin_id` varchar(32) NOT NULL,  `plugins_id` int(5) NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `{tableprefix}user_weixin` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `uid` int(11) NOT NULL,  `weixin_id` varchar(32) NOT NULL,  `weixin_num` varchar(32) NOT NULL,  `weixin_name` varchar(32) NOT NULL,  `weixin_avatar` varchar(200) NOT NULL,  `weixin_home` varchar(200) NOT NULL,  `weixin_api` varchar(100) NOT NULL,  `weixin_user_api` varchar(100) NOT NULL,  `weixin_token` varchar(32) NOT NULL,  `weixin_qq` varchar(32) NOT NULL,  `weixin_weibo` varchar(50) NOT NULL,  `vip_level` tinyint(2) NOT NULL,  `starttime` int(11) NOT NULL,  `lasttime` int(11) NOT NULL,  `text_count` int(11) NOT NULL,  `image_count` int(11) NOT NULL,  `audio_count` int(11) NOT NULL,  `free_count` int(11) NOT NULL,  `given_count` int(11) NOT NULL,  `price_count` int(11) NOT NULL,  `all_send` int(11) NOT NULL,  `month_send` int(11) NOT NULL,  PRIMARY KEY (`id`),  KEY `uid` (`uid`,`weixin_id`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=218 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}user_weixin_ext` (  `uwxid` int(11) NOT NULL,  `weixin_qe` varchar(100) NOT NULL,  `weixin_province` varchar(32) NOT NULL,  `weixin_city` varchar(32) NOT NULL,  `weixin_area` varchar(50) NOT NULL,  `weixin_fans` int(5) NOT NULL,  `weixin_level` varchar(2) NOT NULL,  `weixin_type` int(2) NOT NULL,  `weixin_content` varchar(400) NOT NULL,  `weixin_statistics` varchar(200) NOT NULL,  KEY `uid` (`uwxid`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `{tableprefix}weixin_log` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `weixin_sid` int(11) NOT NULL,  `send_infoid` int(11) NOT NULL,  `send_time` int(11) NOT NULL,  `uid` int(11) NOT NULL,  `msg` text NOT NULL,  PRIMARY KEY (`id`),  KEY `weixin_sid` (`weixin_sid`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=361 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}weixin_plugins` (  `plugins_id` int(5) NOT NULL,  `plugins_title` varchar(32) NOT NULL,  `plugins_intro` varchar(300) NOT NULL,  `plugins_level` tinyint(2) NOT NULL,  `plugins_status` tinyint(1) NOT NULL,  KEY `plugins_id` (`plugins_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `{tableprefix}weixin_template` (  `weixin_id` varchar(32) NOT NULL,  `index_tpl` tinyint(4) NOT NULL,  `list_tpl` tinyint(4) NOT NULL,  `article_tpl` tinyint(4) NOT NULL,  UNIQUE KEY `weixin_id_2` (`weixin_id`),  KEY `weixin_id` (`weixin_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `{tableprefix}setting` (`variable`, `content`) VALUES('site_logo', 'data/logo/logo.gif'),('site_cache_dir', 'data/cache'),('site_upload_dir', 'data/upload'),('site_email', 'bidcms@gmail.com'),('site_address', '山西省太原市'),('site_worktime', '09:00-23:00'),('site_qq', '253947468'),('site_benai', '晋ICP备001354号'),('site_tel', '15135096561'),('site_copyright', '版权归BidCms系统所有'),('seo_rewrite', '0'),('seo_title', 'BidCms图片分享系统，图片分享程序，开源图片分享，国内首家开源图片分享'),('seo_keyword', '图片分享系统，图片分享程序，开源图片分享'),('seo_description', '国内首家开源图片分享');