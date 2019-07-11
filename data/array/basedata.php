<?php
 return array (
  'ad' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'img' => 'varchar(255) default NULL',
    'link' => 'text default NULL',
    'title' => 'varchar(100) default NULL',
    'height' => 'varchar(5) default NULL',
    'width' => 'varchar(5) default NULL',
    'content' => 'text default NULL',
    'adtype' => 'varchar(255) default NULL',
    'addtime' => 'int(11) NOT NULL default "0"',
    'sys' => 'tinyint(1) NOT NULL default "0"',
    'edate' => 'int(10) NOT NULL default "0"',
    'type' => 'tinyint(1) NOT NULL default "1"',
    'tag' => 'varchar(200) default NULL',
    'bgcolor' => 'varchar(200) default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'adminlog' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'admin_name' => 'varchar(50) NOT NULL',
    'ip' => 'varchar(15) NOT NULL',
    'mod' => 'varchar(50) NOT NULL',
    'do' => 'varchar(20) NOT NULL',
    'addtime' => 'int(10) NOT NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `admin_name` (`admin_name`),KEY `mod` (`mod`),KEY `addtime` (`addtime`)',
  ),
  'api' => 
  array (
    'id' => 'int(5) NOT NULL auto_increment',
    'key' => 'varchar(100) NOT NULL',
    'secret' => 'varchar(100) NOT NULL',
    'title' => 'varchar(50) NOT NULL',
    'code' => 'varchar(10) NOT NULL',
    'open' => 'int(1) NOT NULL default "0"',
    'sort' => 'int(11) NOT NULL default "0"',
    'addtime' => 'int(10) NOT NULL default "0"',
    'sys' => 'tinyint(1) NOT NULL default "0"',
    'back_url' => 'varchar(200) default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'apilogin' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'uid' => 'int(11) NOT NULL',
    'webid' => 'varchar(50) NOT NULL',
    'webname' => 'varchar(50) NOT NULL',
    'web' => 'varchar(20) NOT NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `uid` (`uid`),KEY `webid` (`webid`),KEY `web` (`web`)',
  ),
  'article' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'cid' => 'int(11)',
    'title' => 'varchar(200) default NULL',
    'img' => 'varchar(200) default NULL',
    'source' => 'varchar(200) default NULL',
    'content' => 'text default NULL',
    'hits' => 'int(11) default "0"',
    'sort' => 'int(11) default "0"',
    'keyword' => 'varchar(255) default NULL',
    'desc' => 'varchar(255) default NULL',
    'addtime' => 'int(10) NOT NULL default "0"',
    'del' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `cid` (`cid`),KEY `title` (`title`),KEY `sort` (`sort`),KEY `addtime` (`addtime`),KEY `del` (`del`)',
  ),
  'bankuai' => 
  array (
    'id' => 'int(10) unsigned NOT NULL auto_increment',
    'title' => 'varchar(255) default NULL',
    'code' => 'varchar(255) default NULL',
    'banner_img' => 'varchar(255) default NULL',
    'banner_color' => 'varchar(20) default NULL',
    'bg_color' => 'varchar(255) default NULL',
    'bankuai_tpl' => 'varchar(255) default NULL',
    'fenlei' => 'int(11) default "0"',
    'api_cid' => 'int(11) default "0"',
    'baoming' => 'tinyint(4) default "1"',
    'bankuai_img' => 'varchar(255) default NULL',
    'bankuai_desc' => 'varchar(255) default NULL',
    'tuijian' => 'tinyint(1) default "0"',
    'addtime' => 'int(11)',
    'status' => 'tinyint(1) default "0"',
    'web_cid' => 'text default NULL',
    'sort' => 'int(11) default "0"',
    'mobile_status' => 'int(1) NOT NULL default "0"',
    'mobile_logo' => 'varchar(250) NOT NULL',
    'mobile_title' => 'varchar(100) NOT NULL',
    'del' => 'tinyint(1) default "0"',
    'quanju' => 'tinyint(1) default "0"',
    'yugao' => 'tinyint(1) default "0"',
    'data_from' => 'tinyint(1) default "0"',
    'dan_api' => 'varchar(255) default NULL',
    'yun_cid' => 'text default NULL',
    'time_type' => 'tinyint(1) default "0"',
    'zj_stime' => 'int(11) default "0"',
    'gd_stime' => 'tinyint(1) default "0"',
    'gd_minute' => 'varchar(255) default "0"',
    'etime' => 'int(11) default "0"',
    'yugao_time' => 'varchar(255) default NULL',
    'huodong_time' => 'varchar(255) default NULL',
    'url' => 'varchar(255) default NULL',
    'sys' => 'tinyint(1) default "0"',
    'api_sort' => 'varchar(50) default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),UNIQUE KEY `code` (`code`),KEY `sort` (`sort`)',
  ),
  'baobei' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'uid' => 'int(11) NOT NULL',
    'tao_id' => 'bigint(12) NOT NULL',
    'trade_id' => 'int(11) NOT NULL default "0"',
    'img' => 'varchar(255) default NULL',
    'title' => 'varchar(100) default NULL',
    'nick' => 'varchar(50) default NULL',
    'price' => 'double(10,2) NOT NULL default "0.00"',
    'commission' => 'double(10,2) NOT NULL default "0.00"',
    'jifen' => 'int(11) NOT NULL default "0"',
    'jifenbao' => 'double(10,2) NOT NULL default "0.00"',
    'cid' => 'int(2) NOT NULL default "1"',
    'click_url' => 'text default NULL',
    'keywords' => 'varchar(100) default NULL',
    'content' => 'text NOT NULL',
    'hart' => 'int(10) NOT NULL default "0"',
    'hits' => 'int(11) NOT NULL default "0"',
    'addtime' => 'int(10) NOT NULL',
    'fabu_time' => 'datetime default NULL',
    'sort' => 'int(11) NOT NULL default "0"',
    'shop_title' => 'varchar(255) default NULL',
    'logo' => 'varchar(255) default NULL',
    'user_id' => 'bigint(20) NOT NULL default "0"',
    'del' => 'tinyint(1) NOT NULL default "0"',
    'userimg' => 'varchar(200) default "NULL"',
    'status' => 'int(1) default "0"',
    'reason' => 'varchar(255) default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `tao_id` (`tao_id`),KEY `trade_id` (`trade_id`),KEY `title` (`title`),KEY `cid` (`cid`),KEY `sort` (`sort`),KEY `del` (`del`),KEY `status` (`status`)',
  ),
  'baobei_comment' => 
  array (
    'id' => 'int(10) NOT NULL auto_increment',
    'baobei_id' => 'int(11) NOT NULL',
    'comment' => 'varchar(140) NOT NULL',
    'addtime' => 'int(10) NOT NULL default "0"',
    'uid' => 'int(11) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `baobei_id` (`baobei_id`)',
  ),
  'baobei_hart' => 
  array (
    'id' => 'int(10) NOT NULL auto_increment',
    'baobei_id' => 'int(11) NOT NULL default "0"',
    'addtime' => 'int(10) NOT NULL default "0"',
    'uid' => 'int(11) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `baobei_id` (`baobei_id`)',
  ),
  'buy_log' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'uid' => 'bigint(15) NOT NULL default "0"',
    'iid' => 'bigint(15)',
    'day' => 'datetime default NULL',
    'keyword' => 'varchar(200) default NULL',
    'fxje' => 'double(11,2) NOT NULL default "0.00"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `uid` (`uid`),KEY `iid` (`iid`),KEY `day` (`day`),KEY `keyword` (`keyword`)',
  ),
  'collect' => 
  array (
    'id' => 'int(10) unsigned NOT NULL auto_increment',
    'status' => 'tinyint(1) default "0"',
    'title' => 'varchar(255) default NULL',
    'beizhu' => 'varchar(255) default NULL',
    'code' => 'varchar(255) default NULL',
    'laiyuan' => 'tinyint(1) default "0"',
    'api_url' => 'varchar(255) default NULL',
    'sprice' => 'double(10,2) default "0.00"',
    'eprice' => 'double(10,2) default "0.00"',
    'cid_arr' => 'text default NULL',
    'update_time' => 'int(11) default "0"',
    'web_cid' => 'int(11) default "0"',
    'api_kwd' => 'varchar(255) default NULL',
    'api_cid' => 'int(11) default "0"',
    'yun_cid' => 'text default NULL',
    'api_sort' => 'char(20) default NULL',
    'is_mall' => 'char(50) default NULL',
    'start_price' => 'int(11) default "0"',
    'end_price' => 'int(11) default "0"',
    'start_tk_rate' => 'int(11) default "0"',
    'end_tk_rate' => 'int(11) default "0"',
    'page_no' => 'int(11) default "0"',
    'page_size' => 'int(11) default "0"',
    'admin_name' => 'varchar(255) default NULL',
    'sys' => 'int(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'cron' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'title' => 'varchar(50) default NULL',
    'status' => 'int(1) NOT NULL default "0"',
    'leixing' => 'int(1) NOT NULL default "0"',
    'plugin_name' => 'varchar(30) default NULL',
    'filename' => 'varchar(50) default NULL',
    'fangshi' => 'int(1) NOT NULL default "0"',
    'execute_time' => 'int(5) NOT NULL default "0"',
    'last_time' => 'varchar(30) default NULL',
    'jindu' => 'int(1) NOT NULL default "0"',
    'dd' => 'int(1) NOT NULL default "0"',
    'msg' => 'varchar(200) default NULL',
    'dev' => 'varchar(200) default NULL',
    'interval_time' => 'int(10) NOT NULL default "0"',
    'random' => 'int(10) NOT NULL default "0"',
    'sys' => 'int(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'cron_content' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'val' => 'text NOT NULL',
    'type' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `type` (`type`)',
  ),
  'ddtuiguang' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'fuid' => 'int(11) NOT NULL default "0"',
    'uid' => 'int(11) NOT NULL default "0"',
    'order_id' => 'int(11) NOT NULL default "0"',
    'mall' => 'int(2) NOT NULL default "0"',
    'status' => 'int(1) NOT NULL default "0"',
    'code' => 'varchar(10) NOT NULL',
    'shuju_id' => 'int(11) NOT NULL default "0"',
    'title' => 'varchar(255) default NULL',
    'date' => 'int(10) NOT NULL default "0"',
    'goods_id' => 'varchar(32) default NULL',
    'money' => 'double(10,2) NOT NULL default "0.00"',
    'weiyi' => 'varchar(16) NOT NULL',
    'pay_time' => 'datetime default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `fuid` (`fuid`),KEY `status` (`status`),KEY `code` (`code`),KEY `shuju_id` (`shuju_id`),KEY `date` (`date`),KEY `goods_id` (`goods_id`),UNIQUE KEY `weiyi` (`weiyi`),KEY `pay_time` (`pay_time`)',
  ),
  'domain' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'mod' => 'varchar(20) default NULL',
    'code' => 'varchar(20) default NULL',
    'url' => 'varchar(50) NOT NULL',
    'close' => 'int(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'duihuan' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'uid' => 'int(11) NOT NULL default "0"',
    'spend' => 'double(11,2) NOT NULL default "0.00"',
    'ip' => 'varchar(20) default NULL',
    'huan_goods_id' => 'int(11) NOT NULL default "0"',
    'realname' => 'varchar(30) NOT NULL',
    'address' => 'varchar(100) NOT NULL',
    'email' => 'varchar(50) default NULL',
    'mobile' => 'bigint(15) NOT NULL default "0"',
    'qq' => 'varchar(20) default NULL',
    'content' => 'text default NULL',
    'addtime' => 'int(10) NOT NULL default "0"',
    'shoptime' => 'int(10) NOT NULL default "0"',
    'status' => 'int(1) NOT NULL default "0"',
    'mode' => 'tinyint(1) NOT NULL default "1"',
    'why' => 'varchar(255) default NULL',
    'num' => 'int(11) NOT NULL default "1"',
    'alipay' => 'varchar(50) default NULL',
    'code' => 'text default NULL',
    'del' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `uid` (`uid`),KEY `huan_goods_id` (`huan_goods_id`),KEY `del` (`del`)',
  ),
  'duoduo2010' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'adminname' => 'varchar(30) default NULL',
    'adminpass' => 'varchar(50) default NULL',
    'lastlogintime' => 'int(10) NOT NULL default "0"',
    'addtime' => 'int(10) NOT NULL default "0"',
    'lastloginip' => 'varchar(15) default NULL',
    'loginnum' => 'int(11) default "0"',
    'logintime' => 'int(10) NOT NULL default "0"',
    'loginip' => 'varchar(15) default NULL',
    'role' => 'int(5) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),UNIQUE KEY `adminname` (`adminname`)',
  ),
  'file' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'path' => 'varchar(255) default NULL',
    'size' => 'int(11) NOT NULL default "0"',
    'time' => 'int(10) NOT NULL default "0"',
    'md5' => 'varchar(50) default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),UNIQUE KEY `path` (`path`)',
  ),
  'goods' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'url' => 'varchar(255) default NULL',
    'laiyuan' => 'varchar(20) default NULL',
    'laiyuan_type' => 'tinyint(1) default "0"',
    'cid' => 'int(11) NOT NULL default "0"',
    'code' => 'varchar(10) default NULL',
    'title' => 'varchar(255) default NULL',
    'img' => 'varchar(255) default NULL',
    'discount_price' => 'double(10,2) NOT NULL default "0.00"',
    'price' => 'double(10,2) NOT NULL default "0.00"',
    'shouji_price' => 'double(10,2) NOT NULL default "0.00"',
    'content' => 'text default NULL',
    'starttime' => 'int(11)',
    'endtime' => 'int(11)',
    'fanli_bl' => 'double(4,2) default "0.00"',
    'fanli_ico' => 'tinyint(1) default "0"',
    'price_man' => 'double(10,2) default "0.00"',
    'price_jian' => 'double(10,2) default "0.00"',
    'lq_url' => 'text default NULL',
    'nick' => 'varchar(50) default NULL',
    'sell' => 'int(11) NOT NULL default "0"',
    'tg_url' => 'text default NULL',
    'auditor' => 'varchar(50) default NULL',
    'uid' => 'int(11) default "0"',
    'data_id' => 'varchar(255) NOT NULL',
    'addtime' => 'int(11) NOT NULL default "0"',
    'del' => 'int(1) NOT NULL default "0"',
    'top' => 'tinyint(1) default "0"',
    'top_stime' => 'int(11) default "0"',
    'top_etime' => 'int(11) default "0"',
    'goods_attribute' => 'text default NULL',
    'oversell' => 'tinyint(1) default "0"',
    'pinglun' => 'int(11) default "0"',
    'ding' => 'int(11) default "0"',
    'cai' => 'int(11) default "0"',
    'sort' => 'int(11) default "0"',
    'spread' => 'tinyint(1) default "0"',
    'xiajia' => 'int(1) NOT NULL default "0"',
    'domain' => 'varchar(255) default NULL',
    'yun_jump' => 'int(1) NOT NULL default "0"',
    'web_id' => 'int(11) NOT NULL default "0"',
    'quan_total' => 'int(11) default "0"',
    'quan_surplus' => 'int(11) default "0"',
    'quan_receive' => 'int(11) default "0"',
    'quan_condition' => 'varchar(255) default NULL',
    'quan_stime' => 'int(11) default "0"',
    'quan_etime' => 'int(11) default "0"',
	'quan_price' => 'double(10,2) NOT NULL default "0.00"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `laiyuan_type` (`laiyuan_type`),KEY `cid` (`cid`),KEY `code` (`code`),KEY `title` (`title`),KEY `discount_price` (`discount_price`),KEY `price` (`price`),KEY `shouji_price` (`shouji_price`),KEY `starttime` (`starttime`),KEY `endtime` (`endtime`),KEY `nick` (`nick`),KEY `data_id` (`data_id`),KEY `addtime` (`addtime`),KEY `del` (`del`),KEY `top` (`top`),KEY `top_stime` (`top_stime`),KEY `top_etime` (`top_etime`),KEY `oversell` (`oversell`),KEY `sort` (`sort`),KEY `xiajia` (`xiajia`),KEY `domain` (`domain`),KEY `web_id` (`web_id`),KEY `quan_stime` (`quan_stime`),KEY `quan_etime` (`quan_etime`)',
  ),
  'goods_attribute' => 
  array (
    'id' => 'int(10) unsigned NOT NULL auto_increment',
    'title' => 'varchar(255) default NULL',
    'font_color' => 'varchar(255) default NULL',
    'bg_color' => 'varchar(255) default NULL',
    'ico' => 'varchar(255) default NULL',
    'beizhu' => 'varchar(255) default NULL',
    'sort' => 'int(11) default "0"',
    'sys' => 'int(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `sort` (`sort`)',
  ),
  'goods_comment' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'data_id' => 'int(11) NOT NULL default "0"',
    'uid' => 'int(11) NOT NULL default "0"',
    'username' => 'varchar(20) NOT NULL',
    'addtime' => 'int(11) NOT NULL default "0"',
    'content' => 'varchar(255) NOT NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `data_id` (`data_id`),KEY `username` (`username`)',
  ),
  'goods_vote' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'data_id' => 'int(11) NOT NULL default "0"',
    'uid' => 'int(11) NOT NULL default "0"',
    'addtime' => 'int(11) NOT NULL default "0"',
    'type' => 'int(1) NOT NULL default "1"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `data_id` (`data_id`)',
  ),
  'hezuo' => 
  array (
    'id' => 'int(10) unsigned NOT NULL auto_increment',
    'uid' => 'int(11)',
    'content' => 'text default NULL',
    'addtime' => 'int(11)',
    'status' => 'tinyint(1) default "0"',
    'code' => 'char(10) default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'huan_goods' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'cid' => 'int(11) NOT NULL default "0"',
    'img' => 'varchar(255) default NULL',
    'jifen' => 'int(10) NOT NULL default "0"',
    'jifenbao' => 'double(10,2) NOT NULL default "0.00"',
    'title' => 'varchar(100) default NULL',
    'hide' => 'tinyint(1) NOT NULL default "0"',
    'addtime' => 'int(10) NOT NULL default "0"',
    'sort' => 'int(10) default "0"',
    'content' => 'text default NULL',
    'num' => 'int(11) NOT NULL default "1"',
    'array' => 'text default NULL',
    'auto' => 'tinyint(1) NOT NULL default "0"',
    'sdate' => 'int(10) NOT NULL default "0"',
    'edate' => 'bigint(11) NOT NULL default "0"',
    'limit' => 'int(11) NOT NULL default "0"',
    'del' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `cid` (`cid`),KEY `title` (`title`),KEY `hide` (`hide`),KEY `sort` (`sort`),KEY `sdate` (`sdate`),KEY `edate` (`edate`),KEY `del` (`del`)',
  ),
  'income' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'uid' => 'int(11) NOT NULL',
    'money' => 'double(10,2) NOT NULL default "0.00"',
    'jifen' => 'int(11) NOT NULL default "0"',
    'date' => 'int(6) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `uid` (`uid`),KEY `date` (`date`)',
  ),
  'kuaijie' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'title' => 'varchar(50) default NULL',
    'url' => 'varchar(255) default NULL',
    'addtime' => 'datetime default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'link' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'url' => 'varchar(255) default NULL',
    'title' => 'varchar(255) default NULL',
    'addtime' => 'int(10) NOT NULL default "0"',
    'type' => 'int(1) NOT NULL default "0"',
    'img' => 'varchar(255) default NULL',
    'sort' => 'int(11) default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `type` (`type`)',
  ),
  'mall' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'title' => 'varchar(30) default NULL',
    'pinyin' => 'varchar(100) default NULL',
    'merchant' => 'varchar(20) default NULL',
    'url' => 'varchar(255) default NULL',
    'pindao_url' => 'varchar(255) default NULL',
    'img' => 'varchar(255) default NULL',
    'cid' => 'int(11) NOT NULL default "0"',
    'fan' => 'varchar(15) default NULL',
    'des' => 'varchar(255) default "暂无"',
    'content' => 'text default NULL',
    'addtime' => 'int(10) NOT NULL default "0"',
    'sort' => 'int(11) NOT NULL default "0"',
    'yiqifaurl' => 'varchar(255) default NULL',
    'lm' => 'tinyint(2) NOT NULL default "0"',
    'edate' => 'bigint(11) NOT NULL default "0"',
    'renzheng' => 'tinyint(1) NOT NULL default "1"',
    'duomaiid' => 'int(11) default "0"',
    'yiqifaid' => 'int(11) default "0"',
    'chanetid' => 'int(11) default "0"',
    'chanet_draftid' => 'int(11) default "0"',
    'chaneturl' => 'varchar(255) default NULL',
    'weiyiid' => 'varchar(20) default NULL',
    'wujiumiaoid' => 'int(10) NOT NULL default "0"',
    'wujiumiaourl' => 'varchar(255) default NULL',
    'yqhid' => 'int(11) NOT NULL default "0"',
    'type' => 'tinyint(1) NOT NULL default "1"',
    'merchantId' => 'int(11) default "0"',
    'score' => 'double(3,2) NOT NULL default "0.00"',
    'pjnum' => 'int(11) NOT NULL default "0"',
    'fuwu' => 'varchar(255) default "货到付款：有 正规发票：有 运费政策：购满XX免"',
    'del' => 'tinyint(1) NOT NULL default "0"',
    'domain' => 'varchar(30) default NULL',
    'uid' => 'int(11) default "0"',
    'tbnick' => 'varchar(50) default NULL',
    'is_search' => 'tinyint(1) default "0"',
    'banner' => 'varchar(255) default NULL',
    'host' => 'varchar(255) default NULL',
    'suoding' => 'tinyint(1) default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `merchant` (`merchant`),KEY `cid` (`cid`),KEY `sort` (`sort`),KEY `edate` (`edate`),KEY `duomaiid` (`duomaiid`),KEY `yiqifaid` (`yiqifaid`),KEY `chanetid` (`chanetid`),KEY `wujiumiaoid` (`wujiumiaoid`),KEY `yqhid` (`yqhid`),KEY `del` (`del`),KEY `domain` (`domain`),KEY `host` (`host`)',
  ),
  'mall_comment' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'mall_id' => 'int(11) NOT NULL',
    'uid' => 'int(11) NOT NULL',
    'fen' => 'tinyint(1) NOT NULL default "0"',
    'content' => 'text default NULL',
    'addtime' => 'int(10) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `mall_id` (`mall_id`)',
  ),
  'mall_order' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'order_time' => 'int(10) NOT NULL default "0"',
    'mall_name' => 'varchar(30) default NULL',
    'mall_id' => 'int(11) NOT NULL default "0"',
    'adid' => 'varchar(15) NOT NULL',
    'uid' => 'int(11) default "0"',
    'order_code' => 'varchar(50) default NULL',
    'item_count' => 'int(5) default "0"',
    'item_price' => 'double(10,2) NOT NULL default "0.00"',
    'sales' => 'double(15,2) NOT NULL default "0.00"',
    'commission' => 'double(10,2) NOT NULL default "0.00"',
    'fxje' => 'double(10,2) NOT NULL default "0.00"',
    'jifen' => 'int(10) NOT NULL default "0"',
    'tgyj' => 'double(8,2) NOT NULL default "0.00"',
    'addtime' => 'int(10) NOT NULL default "0"',
    'status' => 'tinyint(1) NOT NULL default "0"',
    'qrsj' => 'int(10) NOT NULL default "0"',
    'product_code' => 'varchar(50) default NULL',
    'lm' => 'tinyint(1) NOT NULL default "0"',
    'platform' => 'tinyint(1) NOT NULL default "1"',
    'unique_id' => 'varchar(100) default NULL',
    'del' => 'tinyint(1) NOT NULL default "0"',
    'domain' => 'varchar(20) default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `order_time` (`order_time`),KEY `mall_id` (`mall_id`),KEY `adid` (`adid`),KEY `uid` (`uid`),KEY `status` (`status`),KEY `platform` (`platform`),UNIQUE KEY `unique_id` (`unique_id`),KEY `del` (`del`),KEY `domain` (`domain`)',
  ),
  'menu' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'parent_id' => 'int(11) NOT NULL default "0"',
    'node' => 'varchar(20) NOT NULL',
    'mod' => 'varchar(50) NOT NULL',
    'act' => 'varchar(15) NOT NULL',
    'listorder' => 'int(11) NOT NULL default "0"',
    'sort' => 'int(5) NOT NULL default "0"',
    'title' => 'varchar(20) NOT NULL',
    'url' => 'varchar(255) default NULL',
    'hide' => 'tinyint(1) NOT NULL default "0"',
    'sys' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `mod` (`mod`),KEY `act` (`act`),KEY `sort` (`sort`)',
  ),
  'menu_access' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'role_id' => 'int(11) NOT NULL',
    'menu_id' => 'int(11) NOT NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `role_id` (`role_id`),KEY `menu_id` (`menu_id`)',
  ),
  'mingxi' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'uid' => 'int(11) NOT NULL default "0"',
    'shijian' => 'varchar(50) NOT NULL',
    'money' => 'double(10,2) default "0.00"',
    'jifen' => 'int(5) NOT NULL default "0"',
    'addtime' => 'datetime default NULL',
    'source' => 'varchar(250) default NULL',
    'relate_id' => 'int(11) NOT NULL default "0"',
    'leave_money' => 'double(10,2) default "0.00"',
    'jifenbao' => 'double(10,2) NOT NULL default "0.00"',
    'leave_jifenbao' => 'double(10,2) NOT NULL default "0.00"',
    'leave_jifen' => 'int(11) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `uid` (`uid`),KEY `shijian` (`shijian`)',
  ),
  'msg' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'title' => 'varchar(100) default NULL',
    'content' => 'varchar(255) default NULL',
    'addtime' => 'datetime default NULL',
    'see' => 'int(11) default "0"',
    'uid' => 'int(11) NOT NULL default "0"',
    'senduser' => 'int(11) NOT NULL default "0"',
    'sid' => 'int(11) NOT NULL default "0"',
    'admin' => 'varchar(100) default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `uid` (`uid`),KEY `senduser` (`senduser`),KEY `admin` (`admin`)',
  ),
  'msgset' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'web' => 'text default NULL',
    'email' => 'text default NULL',
    'sms' => 'text default NULL',
    'title' => 'varchar(255) default NULL',
    'addtime' => 'int(10) NOT NULL default "0"',
    'web_open' => 'tinyint(1) NOT NULL default "0"',
    'email_open' => 'tinyint(1) NOT NULL default "0"',
    'sms_open' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'nav' => 
  array (
    'id' => 'int(5) NOT NULL auto_increment',
    'title' => 'varchar(20) NOT NULL',
    'url' => 'text default NULL',
    'tip' => 'tinyint(1) NOT NULL default "0"',
    'sort' => 'int(5) NOT NULL default "0"',
    'hide' => 'tinyint(1) NOT NULL default "0"',
    'type' => 'tinyint(4) NOT NULL default "0"',
    'auto' => 'tinyint(1) NOT NULL default "0"',
    'target' => 'tinyint(1) NOT NULL default "0"',
    'custom' => 'varchar(255) default NULL',
    'mod' => 'varchar(50) default NULL',
    'act' => 'varchar(50) default NULL',
    'code' => 'varchar(20) default NULL',
    'tag' => 'varchar(10) default NULL',
    'addtime' => 'int(10) NOT NULL default "0"',
    'pid' => 'int(11) NOT NULL default "0"',
    'alt' => 'varchar(30) default NULL',
    'sys' => 'tinyint(1) NOT NULL default "0"',
    'plugin' => 'tinyint(1) NOT NULL default "0"',
    'lianjie' => 'int(1) NOT NULL default "0"',
    'bankuai_name' => 'varchar(50) default NULL',
    'mod_name' => 'varchar(50) default NULL',
    'diaoyong' => 'int(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'noword' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'title' => 'varchar(255) NOT NULL',
    'replace' => 'varchar(50) default NULL',
    'title_arr' => 'varchar(255) default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),UNIQUE KEY `title` (`title`)',
  ),
  'pai_words' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'wordName' => 'varchar(200) default NULL',
    'sClassid' => 'int(11) NOT NULL default "0"',
    'addtime' => 'datetime default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `wordName` (`wordName`),KEY `sClassid` (`sClassid`)',
  ),
  'paipai_order' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'dealId' => 'int(11) NOT NULL default "0"',
    'discount' => 'double(3,2) NOT NULL default "0.00"',
    'careAmount' => 'double(10,2) NOT NULL default "0.00"',
    'commission' => 'double(8,2) NOT NULL default "0.00"',
    'realCost' => 'double(8,2) NOT NULL default "0.00"',
    'bargainState' => 'tinyint(1) NOT NULL default "0"',
    'chargeTime' => 'int(11) NOT NULL default "0"',
    'commNum' => 'int(11) NOT NULL',
    'commId' => 'varchar(50) default NULL',
    'commName' => 'varchar(100) default NULL',
    'classId' => 'int(11) NOT NULL default "0"',
    'className' => 'varchar(20) default NULL',
    'shopId' => 'bigint(20) NOT NULL default "0"',
    'shopName' => 'varchar(100) NOT NULL',
    'outInfo' => 'varchar(50) default NULL',
    'uid' => 'int(11) NOT NULL default "0"',
    'fxje' => 'double(8,2) NOT NULL default "0.00"',
    'jifen' => 'int(11) NOT NULL default "0"',
    'tgyj' => 'double(5,2) NOT NULL default "0.00"',
    'addtime' => 'int(11) NOT NULL default "0"',
    'checked' => 'tinyint(10) NOT NULL default "0"',
    'del' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),UNIQUE KEY `dealId` (`dealId`),KEY `uid` (`uid`),KEY `addtime` (`addtime`),KEY `checked` (`checked`),KEY `del` (`del`)',
  ),
  'plugin' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'code' => 'varchar(20) NOT NULL',
    'status' => 'tinyint(1) NOT NULL default "0"',
    'title' => 'varchar(50) NOT NULL',
    'addtime' => 'int(10) NOT NULL default "0"',
    'price' => 'double(10,2) NOT NULL default "0.00"',
    'key' => 'varchar(50) default NULL',
    'authcode' => 'varchar(200) default NULL',
    'mod' => 'varchar(20) default NULL',
    'act' => 'varchar(20) default NULL',
    'tag' => 'varchar(20) default NULL',
    'admin_set' => 'tinyint(1) NOT NULL default "0"',
    'endtime' => 'datetime default NULL',
    'search_open' => 'tinyint(1) NOT NULL default "0"',
    'search_name' => 'varchar(10) default NULL',
    'search_width' => 'int(11) NOT NULL default "40"',
    'search_tip' => 'varchar(30) default NULL',
    'toper_name' => 'varchar(30) default NULL',
    'toper_qq' => 'varchar(30) default NULL',
    'banben' => 'int(11) NOT NULL default "0"',
    'install' => 'tinyint(1) NOT NULL default "0"',
    'jiaocheng' => 'varchar(255) default NULL',
    'need_include' => 'tinyint(1) NOT NULL default "0"',
    'version' => 'double(10,1) default "0.0"',
    'level' => 'int(1) NOT NULL default "1"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),UNIQUE KEY `code` (`code`)',
  ),
  'plugin_file' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'code' => 'varchar(50) NOT NULL',
    'file' => 'varchar(255) NOT NULL',
    'update_tag' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `code` (`code`),KEY `update_tag` (`update_tag`)',
  ),
  'qunfa_tag' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'sign' => 'int(11) default "0"',
    'title' => 'varchar(200) default NULL',
    'num' => 'int(11) default "0"',
    'ynum' => 'int(11) default "0"',
    'msg' => 'varchar(200) default NULL',
    'content' => 'text default NULL',
    'addtime' => 'datetime default NULL',
    'reset' => 'int(11) default "0"',
    'status' => 'int(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `sign` (`sign`),KEY `title` (`title`),KEY `status` (`status`)',
  ),
  'record_goods' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'uid' => 'int(11) NOT NULL default "0"',
    'laiyuan' => 'varchar(20) default NULL',
    'laiyuan_type' => 'tinyint(1) default "0"',
    'cid' => 'int(11) NOT NULL default "0"',
    'code' => 'varchar(10) default NULL',
    'title' => 'varchar(255) default NULL',
    'img' => 'varchar(255) default NULL',
    'discount_price' => 'double(10,2) NOT NULL default "0.00"',
    'price' => 'double(10,2) NOT NULL default "0.00"',
    'shouji_price' => 'double(10,2) NOT NULL default "0.00"',
    'starttime' => 'int(11)',
    'endtime' => 'int(11)',
    'fanli_bl' => 'double(4,2) default "0.00"',
    'fanli_ico' => 'tinyint(1) default "0"',
    'price_man' => 'double(10,2) default "0.00"',
    'price_jian' => 'double(10,2) default "0.00"',
    'sell' => 'int(11) NOT NULL default "0"',
    'goods_attribute' => 'text default NULL',
    'type' => 'int(1) NOT NULL default "0"',
    'goods_id' => 'int(11) NOT NULL default "0"',
    'data_id' => 'varchar(255) NOT NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `uid` (`uid`),KEY `cid` (`cid`),KEY `title` (`title`),KEY `discount_price` (`discount_price`),KEY `price` (`price`),KEY `shouji_price` (`shouji_price`),KEY `starttime` (`starttime`),KEY `endtime` (`endtime`),KEY `type` (`type`),KEY `goods_id` (`goods_id`),KEY `data_id` (`data_id`)',
  ),
  'role' => 
  array (
    'id' => 'int(6) unsigned NOT NULL auto_increment',
    'title' => 'varchar(50) NOT NULL',
    'status' => 'tinyint(1) unsigned NOT NULL',
    'sys' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'seo' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'mod' => 'varchar(10) NOT NULL',
    'act' => 'varchar(10) default NULL',
    'title' => 'varchar(255) default NULL',
    'keyword' => 'varchar(255) default NULL',
    'desc' => 'varchar(255) default NULL',
    'label' => 'text default NULL',
    'sys' => 'tinyint(1) NOT NULL default "0"',
    'addtime' => 'int(10) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'service' => 
  array (
    'id' => 'int(5) NOT NULL auto_increment',
    'title' => 'varchar(50) NOT NULL',
    'code' => 'varchar(50) NOT NULL',
    'type' => 'tinyint(1) NOT NULL',
    'sort' => 'int(10) NOT NULL default "0"',
    'addtime' => 'int(10) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'slides' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'img' => 'varchar(255) default NULL',
    'url' => 'text default NULL',
    'title' => 'varchar(100) default NULL',
    'hide' => 'int(11) default "0"',
    'addtime' => 'int(11) NOT NULL default "0"',
    'sort' => 'int(11) NOT NULL default "10"',
    'cid' => 'varchar(10) default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'statement' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'date' => 'varchar(20) default NULL',
    'taocj' => 'double(10,2) NOT NULL default "0.00"',
    'taoyj' => 'double(10,2) NOT NULL default "0.00"',
    'taolr' => 'double(10,2) NOT NULL default "0.00"',
    'paicj' => 'double(10,2) NOT NULL default "0.00"',
    'paiyj' => 'double(10,2) NOT NULL default "0.00"',
    'pailr' => 'double(10,2) NOT NULL default "0.00"',
    'mallcj' => 'double(10,2) NOT NULL default "0.00"',
    'mallyj' => 'double(10,2) NOT NULL default "0.00"',
    'malllr' => 'double(10,2) NOT NULL default "0.00"',
    'taskyj' => 'double(10,2) NOT NULL default "0.00"',
    'tasklr' => 'double(10,2) NOT NULL default "0.00"',
    'gameyj' => 'double(10,2) NOT NULL default "0.00"',
    'gamelr' => 'double(10,2) NOT NULL default "0.00"',
    'stime' => 'datetime default NULL',
    'dtime' => 'datetime default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `date` (`date`)',
  ),
  'taopid' => 
  array (
    'id' => 'int(10) unsigned NOT NULL auto_increment',
    'pid' => 'varchar(50) NOT NULL',
    'title' => 'varchar(100) NOT NULL',
    'url' => 'varchar(255) default NULL',
    'addtime' => 'int(11)',
    'default' => 'tinyint(1) default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'task' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'memberid' => 'int(11)',
    'programname' => 'varchar(100) default NULL',
    'point' => 'double(10,2) NOT NULL default "0.00"',
    'commission' => 'double(10,2) NOT NULL default "0.00"',
    'eventid' => 'varchar(100) default NULL',
    'immediate' => 'tinyint(1) NOT NULL default "0"',
    'addtime' => 'datetime default NULL',
    'del' => 'tinyint(1) NOT NULL default "0"',
    'type' => 'varchar(20) default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `memberid` (`memberid`),UNIQUE KEY `eventid` (`eventid`),KEY `del` (`del`),KEY `type` (`type`)',
  ),
  'tgyj' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'tjrid' => 'int(11) NOT NULL',
    'uid' => 'int(11) NOT NULL',
    'money' => 'double(10,2) NOT NULL default "0.00"',
    'hytx' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `tjrid` (`tjrid`),UNIQUE KEY `uid` (`uid`)',
  ),
  'tixian' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'uid' => 'int(11) NOT NULL',
    'money' => 'double(10,2) NOT NULL default "0.00"',
    'money2' => 'double(10,2) NOT NULL default "0.00"',
    'code' => 'varchar(50) default NULL',
    'addtime' => 'int(10) NOT NULL',
    'ip' => 'varchar(20) default NULL',
    'status' => 'tinyint(1) default "0"',
    'realname' => 'varchar(30) default NULL',
    'mobile' => 'bigint(20) NOT NULL default "0"',
    'why' => 'varchar(255) default NULL',
    'remark' => 'text default NULL',
    'type' => 'tinyint(1) NOT NULL default "2"',
    'api_return' => 'varchar(100) default NULL',
    'tool' => 'int(1) NOT NULL default "1"',
    'wait' => 'tinyint(1) NOT NULL default "0"',
    'dotime' => 'int(10) default "0"',
    'del' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `uid` (`uid`),KEY `code` (`code`),KEY `ip` (`ip`),KEY `del` (`del`)',
  ),
  'tpl' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'title' => 'varchar(50) NOT NULL',
    'data' => 'mediumtext NOT NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),UNIQUE KEY `title` (`title`)',
  ),
  'trade_uid' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'trade_uid' => 'varchar(4) NOT NULL',
    'uid' => 'varchar(100) NOT NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),UNIQUE KEY `trade_uid` (`trade_uid`)',
  ),
  'trade_time' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'trade_id' => 'varchar(50) NOT NULL',
    'status' => 'tinyint(1) NOT NULL',
    'time' => 'datetime NOT NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `trade_id` (`trade_id`)',
  ),
  'tradelist' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'pay_time' => 'datetime default NULL',
    'item_title' => 'varchar(255) default NULL',
    'shop_title' => 'varchar(255) default NULL',
    'num_iid' => 'bigint(15) NOT NULL default "0"',
    'seller_nick' => 'varchar(50) default NULL',
    'pay_price' => 'double(10,2) NOT NULL default "0.00"',
    'real_pay_fee' => 'double(10,2) NOT NULL default "0.00"',
    'commission_rate' => 'double(6,3) NOT NULL default "0.000"',
    'commission' => 'double(10,2) NOT NULL default "0.00"',
    'item_num' => 'int(11) NOT NULL default "0"',
    'trade_id' => 'varchar(40) NOT NULL',
    'trade_id_former' => 'bigint(20) NOT NULL default "0"',
    'outer_code' => 'varchar(12) default NULL',
    'qrsj' => 'int(10) NOT NULL default "0"',
    'fxje' => 'double default "0"',
    'jifenbao' => 'double(10,2) NOT NULL default "0.00"',
    'checked' => 'int(1) default "0"',
    'ddjt' => 'varchar(255) default NULL',
    'uid' => 'int(11) NOT NULL default "0"',
    'app_key' => 'int(11) NOT NULL default "0"',
    'category_id' => 'int(11) NOT NULL default "0"',
    'category_name' => 'varchar(20) default NULL',
    'jifen' => 'int(11) NOT NULL default "0"',
    'tgyj' => 'double(5,2) NOT NULL default "0.00"',
    'platform' => 'tinyint(1) NOT NULL default "1"',
    'status' => 'int(2) default "0"',
    'guanlian' => 'varchar(255) default NULL',
    'addtime' => 'int(11) default "0"',
    'create_time' => 'datetime default NULL',
    'mini_trade_id' => 'bigint(20) NOT NULL default "0"',
    'pic_url' => 'varchar(255) default NULL',
    'del' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `pay_time` (`pay_time`),KEY `num_iid` (`num_iid`),UNIQUE KEY `trade_id` (`trade_id`),KEY `trade_id_former` (`trade_id_former`),KEY `checked` (`checked`),KEY `uid` (`uid`),KEY `mini_trade_id` (`mini_trade_id`),KEY `del` (`del`)',
  ),
  'tradelist2' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'trade_id' => 'bigint(20) unsigned default NULL',
    'reason' => 'varchar(255) NOT NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),UNIQUE KEY `trade_id` (`trade_id`)',
  ),
  'tradelist_temp' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'pay_time' => 'datetime default NULL',
    'item_title' => 'varchar(255) default NULL',
    'shop_title' => 'varchar(255) default NULL',
    'num_iid' => 'bigint(15) NOT NULL default "0"',
    'seller_nick' => 'varchar(50) default NULL',
    'pay_price' => 'double(10,2) NOT NULL default "0.00"',
    'real_pay_fee' => 'double(10,2) NOT NULL default "0.00"',
    'commission_rate' => 'double(6,3) NOT NULL default "0.000"',
    'commission' => 'double(10,2) NOT NULL default "0.00"',
    'item_num' => 'int(11) NOT NULL default "0"',
    'trade_id' => 'varchar(40) NOT NULL',
    'trade_id_former' => 'bigint(20) NOT NULL default "0"',
    'outer_code' => 'varchar(12) default NULL',
    'qrsj' => 'int(10) NOT NULL default "0"',
    'fxje' => 'double default "0"',
    'jifenbao' => 'double(10,2) NOT NULL default "0.00"',
    'checked' => 'int(1) default "0"',
    'ddjt' => 'varchar(255) default NULL',
    'uid' => 'int(11) NOT NULL default "0"',
    'app_key' => 'int(11) NOT NULL default "0"',
    'category_id' => 'int(11) NOT NULL default "0"',
    'category_name' => 'varchar(20) default NULL',
    'jifen' => 'int(11) NOT NULL default "0"',
    'tgyj' => 'double(5,2) NOT NULL default "0.00"',
    'platform' => 'tinyint(1) NOT NULL default "1"',
    'status' => 'int(2) default "0"',
    'guanlian' => 'varchar(255) default NULL',
    'addtime' => 'int(11) default "0"',
    'create_time' => 'datetime default NULL',
    'mini_trade_id' => 'bigint(20) NOT NULL default "0"',
    'pic_url' => 'varchar(255) default NULL',
    'del' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `pay_time` (`pay_time`),KEY `num_iid` (`num_iid`),UNIQUE KEY `trade_id` (`trade_id`),KEY `trade_id_former` (`trade_id_former`),KEY `checked` (`checked`),KEY `uid` (`uid`),KEY `mini_trade_id` (`mini_trade_id`),KEY `del` (`del`)',
  ),
  'type' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'pid' => 'int(11) default "0"',
    'title' => 'varchar(50) default NULL',
    'sort' => 'int(11) default "0"',
    'tag' => 'varchar(20) NOT NULL',
    'addtime' => 'int(10) NOT NULL default "0"',
    'sys' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`)',
  ),
  'user' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'ddusername' => 'varchar(30) default NULL',
    'ddpassword' => 'varchar(50) default NULL',
    'realname' => 'varchar(50) default NULL',
    'regtime' => 'datetime default NULL',
    'regip' => 'varchar(20) default NULL',
    'logip' => 'varchar(20) default NULL',
    'loginnum' => 'int(11) default "0"',
    'lastlogintime' => 'datetime default NULL',
    'lasttixian' => 'int(10) NOT NULL default "0"',
    'alipay' => 'varchar(50) default NULL',
    'email' => 'varchar(50) default NULL',
    'money' => 'double(10,2) default "0.00"',
    'jifenbao' => 'double(10,2) NOT NULL default "0.00"',
    'jifen' => 'int(11) NOT NULL default "0"',
    'txstatus' => 'tinyint(1) default "0"',
    'dhstate' => 'tinyint(1) NOT NULL default "0"',
    'level' => 'int(11) NOT NULL default "0"',
    'tjr' => 'int(11) NOT NULL default "0"',
    'tjr_over' => 'int(11) NOT NULL default "0"',
    'mobile' => 'bigint(15) NOT NULL default "0"',
    'mobile_test' => 'tinyint(1) NOT NULL default "0"',
    'qq' => 'varchar(20) default NULL',
    'pass_question' => 'varchar(250) default NULL',
    'pass_answer' => 'varchar(250) default NULL',
    'yitixian' => 'double(10,2) default "0.00"',
    'search' => 'tinyint(1) NOT NULL default "0"',
    'jihuo' => 'tinyint(1) NOT NULL default "0"',
    'hart' => 'int(10) NOT NULL default "0"',
    'tbyitixian' => 'double(11,2) NOT NULL default "0.00"',
    'ucid' => 'int(11) NOT NULL default "0"',
    'hytx' => 'tinyint(1) NOT NULL default "0"',
    'signtime' => 'int(10) NOT NULL default "0"',
    'tenpay' => 'varchar(50) default NULL',
    'bank_name' => 'varchar(20) default NULL',
    'tbtxstatus' => 'tinyint(1) NOT NULL default "0"',
    'txtool' => 'tinyint(1) NOT NULL default "1"',
    'bank_code' => 'varchar(20) default "0"',
    'platform' => 'tinyint(1) NOT NULL default "1"',
    'trade_uid' => 'varchar(200) default "0"',
    'tbnick' => 'varchar(200) default NULL',
    'del' => 'tinyint(1) NOT NULL default "0"',
    'type' => 'int(1) default "0"',
    'signnum' => 'int(2) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),UNIQUE KEY `ddusername` (`ddusername`),KEY `loginnum` (`loginnum`),KEY `lastlogintime` (`lastlogintime`),KEY `alipay` (`alipay`),UNIQUE KEY `email` (`email`),KEY `money` (`money`),KEY `jifenbao` (`jifenbao`),KEY `jifen` (`jifen`),KEY `txstatus` (`txstatus`),KEY `dhstate` (`dhstate`),KEY `level` (`level`),KEY `tjr` (`tjr`),KEY `mobile` (`mobile`),KEY `ucid` (`ucid`),KEY `tbtxstatus` (`tbtxstatus`),KEY `platform` (`platform`),KEY `trade_uid` (`trade_uid`),KEY `del` (`del`),KEY `type` (`type`)',
  ),
  'user_temp' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'msg' => 'varchar(255) default NULL',
    'uid' => 'int(11) default "0"',
    'sign' => 'int(11) default "0"',
    'ddusername' => 'varchar(50) default NULL',
    'mobile' => 'varchar(20) default NULL',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `uid` (`uid`),KEY `sign` (`sign`),KEY `ddusername` (`ddusername`),KEY `mobile` (`mobile`)',
  ),
  'webset' => 
  array (
    'id' => 'int(11) NOT NULL auto_increment',
    'var' => 'varchar(50) NOT NULL',
    'val' => 'text default NULL',
    'type' => 'tinyint(1) NOT NULL default "0"',
    'duoduo_table_index' => 'PRIMARY KEY  (`id`),UNIQUE KEY `var` (`var`)',
  ),
);
?>