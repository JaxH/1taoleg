<?php
return "INSERT INTO `".$BIAOTOU."cron` (`id`, `title`, `status`, `leixing`, `plugin_name`, `filename`, `fangshi`, `execute_time`, `last_time`, `jindu`, `msg`, `dev`, `interval_time`, `random`, `sys`, `dd`) VALUES
(1, '9.9包邮采集', 0, 2, '', 'cron_caiji.php', 1, 10, '2015-07-07 22:59:10', 0, '', '5', 1, 0, 0,1),
(2, '19元购采集', 0, 2, '', 'cron_caiji.php', 1, 21, '2015-05-06 16:07:07', 0, '', '8', 5, 0, 1,1),
(3, '采集京东优选', 0, 2, '', 'cron_caiji.php', 1, 10, '2015-06-19 17:26:23', 0, '', '13', 0, 0, 0,1),
(4, '值得买采集', 0, 2, '', 'cron_caiji.php', 1, 9, '2015-05-02 00:53:54', 0, '', '6', 0, 0, 1,1),
(5, '获取综合商城', 0, 0, '', 'cron_mall.php', 1, 10, '2015-07-09 11:21:21', 0, '', 'a:1:{i:0;b:0;}', 0, 0, 1,1),
(6, '后台发送邮件', 0, 0, '', 'cron_email.php', 2, 0, '2015-06-19 17:09:33', 0, '', 'a:1:{i:0;b:0;}', 2, 0, 1,0),
(7, '获取淘宝订单', 0, 0, '', 'cron_tradelist.php', 2, 0, '2015-06-16 20:11:11', 0, '', 'a:2:{s:13:\"admin_ex_time\";s:19:\"2015-04-23 14:45:14\";s:7:\"ex_time\";s:19:\"2015-04-23 02:00:00\";}', 5, 0, 1,0),
(9, '删除数据库缓存', 0, 0, '', 'cron_delsqlcache.php', 3, 0, '2015-06-19 17:57:20', 0, '', '', 0, 1, 1,0),
(10, '删除淘宝缓存', 0, 0, '', 'cron_deltaocache.php', 3, 0, '2015-06-19 17:07:43', 0, '', 'a:1:{i:0;b:0;}', 0, 1000, 1,0),
(12, '删除远程获取缓存', 0, 0, '', 'cron_delurlcache.php', 3, 0, '2015-06-19 17:57:20', 0, '', '', 0, 1, 1,0),
(13, '删除临时缓存', 0, 0, '', 'cron_delsessioncache.php', 3, 0, '2015-06-19 17:57:20', 0, '', '', 0, 1, 1,0);";