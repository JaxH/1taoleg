<?php exit;?>
DROP TABLE IF EXISTS `duoduo_msgset`;
CREATE TABLE `duoduo_msgset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `web` text,
  `email` text,
  `sms` text,
  `title` varchar(255) DEFAULT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `web_open` tinyint(1) NOT NULL DEFAULT '0',
  `email_open` tinyint(1) NOT NULL DEFAULT '0',
  `sms_open` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_msgset` (`id`,`web`,`email`,`sms`,`title`,`addtime`,`web_open`,`email_open`,`sms_open`) VALUES('1','尊敬的{username}您好:欢迎注册{webnick}，去淘宝网、淘宝商城购物最高返利35%。当当网、卓越网、凡客等上百家网上知名商城购物！{webnick}让你省得多，活得更好，谢谢！','尊敬的{username}您好:欢迎注册{webnick}，去淘宝网、淘宝商城购物最高返利35%。当当网、卓越网、凡客等上百家网上知名商城购物！{webnick}让你省得多，活得更好，谢谢！','尊敬的{username}您好:欢迎注册{webnick}，去淘宝网、淘宝商城、当当网、卓越网、凡客等上百家网上知名商城购物，最高返利35%。','网站注册','1335529021','1','1','0');
INSERT INTO `duoduo_msgset` (`id`,`web`,`email`,`sms`,`title`,`addtime`,`web_open`,`email_open`,`sms_open`) VALUES('2','您好：您的提现申请已经受理完毕！本次提现{money}已经支付到您提供的{txtool}，查看明细进入“我的账户明细”！','您好：您的提现申请已经受理完毕！本次提现{money}已经支付到您提供的支付宝{txtool}，查看明细进入“我的账户明细”！','您好：您的申请已经受理完毕！本次申请提取{money}已经支付到您提供的{txtool}，查看明细进入“我的账户明细”！','提现成功','1335529021','1','0','1');
INSERT INTO `duoduo_msgset` (`id`,`web`,`email`,`sms`,`title`,`addtime`,`web_open`,`email_open`,`sms_open`) VALUES('3','您有一笔提现申请失败，提现{money}已返回您的账户。{why}','您有一笔提现申请失败，提现{money}已返回您的账户。{why}','您有一笔申请失败，提取的{money}已返回您的账户。{why}','提现失败','1335529021','1','0','1');
INSERT INTO `duoduo_msgset` (`id`,`web`,`email`,`sms`,`title`,`addtime`,`web_open`,`email_open`,`sms_open`) VALUES('4','您好：您的兑换申请（{goods_title}）已受理完毕。{code}','您好：您的兑换申请（{goods_title}）已受理完毕。{code}','您好：您的兑换申请（{goods_title}）已受理完毕。{code}','兑换成功','1335529021','1','0','1');
INSERT INTO `duoduo_msgset` (`id`,`web`,`email`,`sms`,`title`,`addtime`,`web_open`,`email_open`,`sms_open`) VALUES('5','您好：您的兑换申请（{goods_title}）已审核失败。{why}。','您好：您的兑换申请（{goods_title}）已审核失败。{why}。','您好：您的兑换申请（{goods_title}）已审核失败。{why}。','兑换失败','1335529021','1','1','0');
INSERT INTO `duoduo_msgset` (`id`,`web`,`email`,`sms`,`title`,`addtime`,`web_open`,`email_open`,`sms_open`) VALUES('6','尊敬的会员{name}您好，您{date}的金额（{money}元）和积分（{jifen}点）已核对有效，感谢您对网站的支持！','尊敬的会员{name}您好，您{date}的金额（{money}元）和积分（{jifen}点）已核对有效，感谢您对网站的支持！','尊敬的会员{name}您好，您{date}的金额（{money}元）和积分（{jifen}点）已核对有效，感谢您对网站的支持！','解冻通知','1343147219','0','0','0');
INSERT INTO `duoduo_msgset` (`id`,`web`,`email`,`sms`,`title`,`addtime`,`web_open`,`email_open`,`sms_open`) VALUES('7','您的淘宝订单{trade_id}发生异常，现给您减去此订单的返利金额，积分和等级。','您的淘宝订单{trade_id}发生异常，现给您减去此订单的返利金额，积分和等级。','您的淘宝订单{trade_id}发生异常，现给您减去此订单的返利金额，积分和等级。','退款通知','1344101761','1','0','0');
INSERT INTO `duoduo_msgset` (`id`,`web`,`email`,`sms`,`title`,`addtime`,`web_open`,`email_open`,`sms_open`) VALUES('8','','您的网站激活链接<a target=\'_blank\' href=\'{jihuo_url}\'>{jihuo_url}</a>','','网站激活','1349359385','0','1','0');
INSERT INTO `duoduo_msgset` (`id`,`web`,`email`,`sms`,`title`,`addtime`,`web_open`,`email_open`,`sms_open`) VALUES('9','站长奖励：{money}。<br/>原因：{why}。','站长奖励：{money}。<br/>原因：{why}。','站长奖励：{money}。原因：{why}。','站长奖励','1355814783','1','0','1');
INSERT INTO `duoduo_msgset` (`id`,`web`,`email`,`sms`,`title`,`addtime`,`web_open`,`email_open`,`sms_open`) VALUES('10','站长扣除：{money}。<br/>原因：{why}。','站长扣除：{money}。<br/>原因：{why}。','站长扣除：{money}。原因：{why}。','站长扣除','1355814868','1','0','0');
INSERT INTO `duoduo_msgset` (`id`,`web`,`email`,`sms`,`title`,`addtime`,`web_open`,`email_open`,`sms_open`) VALUES('11','','','亲，您好，您申请的短信校验码为：{yzm}，请在页面填写。如非本人操作，请忽略。','短信验证码','1358495361','0','0','1');
