<?php
return "INSERT INTO `".$BIAOTOU."seo` (`id`, `mod`, `act`, `title`, `keyword`, `desc`, `label`, `sys`, `addtime`) VALUES
(1, 'index', 'index', '{WEBNAME}-网购返利第一站!独家爆料特卖天天抢,400家商城购物返利！', '{WEBNAME},购物返利,返利网,值得买,9.9包邮,19.9包邮', '{WEBNAME}是最大的网购省钱平台，{WEBNAME}每天百款独家特卖商品九点准时开抢，淘宝网天猫等400家商城购物返利，各种返利无处不在！', '{WEBNAME}-网站名称', 1, 1335529021),
(2, 'tao', 'index', '{WEBNAME}-淘宝返利', '{WEBNAME} 淘宝返利', '{WEBNAME} 淘宝返利', '{WEBNAME}-网站名称', 1, 1406167560),
(4, 'tao', 'view', '{\$goods[''title'']}-{WEBNAME}', '{\$goods[''title'']},{WEBNAME}', '{\$goods[''title'']}，淘宝价：{\$goods[''price'']}，{WEBNAME}', '{\$goods[''title'']}-商品名称|{\$goods[''price'']}-商品价格|{\$shop[''shop_title'']}-店铺名|{\$shop[''seller_nick'']}-淘宝掌柜', 1, 1335529021),
(7, 'article', 'index', '购物资讯 - {WEBNAME}', '购物资讯,{WEBNAME}', '购物资讯,{WEBNAME}', '{WEBNAME}-网站名称', 1, 1335529021),
(8, 'article', 'list', '{\$catname} - 购物资讯 - {WEBNAME}', '{WEBNAME},{\$catname}', '{\$catname}共有{\$total}篇文章', '{WEBNAME}-网站名称|{\$total}-文章数量|{\$catname}-分类名称', 1, 1335529021),
(9, 'article', 'view', '{\$article[''title'']} - {WEBNAME}', '{\$article[''keyword'']}', '{\$article[''desc'']}', '{\$article[''title'']}-文章标题|{\$article[''keyword'']}-关键字|{\$article[''desc'']}-介绍|{WEBNAME}-网站名称', 1, 1335529021),
(12, 'huan', 'view', '{\$good[''title'']} - 商品兑换 - {WEBNAME}', '{\$good[''title'']},{WEBNAME}', '兑换商品{\$good[''title'']}，所需金额{\$good[''money'']}{if \$good[''jifen'']>0}，所需积分{\$good[''jifen'']}{/if}，{WEBNAME}', '{\$good[''title'']}-商品名称|{\$good[''money'']}-所需金额|{\$good[''jifen'']}-所需积分|{WEBNAME}-网站标题', 1, 1335529021),
(13, 'huan', 'list', '兑换中心 - {WEBNAME}', '兑换中心 - {WEBNAME}', '兑换中心，{WEBNAME}，商品数量{\$total}，第{\$page}页', '{WEBNAME}-网站名称|{\$total}-商品数量|{\$page}-当前页码', 1, 1335529021),
(16, 'mall', 'index', '购物返利，{WEBNAME}汇聚400多家正品商城提供返利购物！', '购物返利,{WEBNAME},,正品商城,返利购物', '购物返利，{WEBNAME}汇聚400多家正品商城提供返利购物！', '{WEBNAME}-网站名称', 1, 1405405524),
(3, 'tao', 'jifenbao', '100个集分宝 = 1元！淘宝购物，还款缴费，直接当钱花！{WEBNAME}', '集分宝,{WEBNAME}', '100个集分宝 = 1元！淘宝购物，还款缴费，直接当钱花！{WEBNAME}', '', 0, 1438361133),
(17, 'mall', 'view', '{\$mall[''title'']} 最高返{\$mall[''fan'']} - 商城返利 - {WEBNAME}', '{\$mall[''title'']} 最高返{\$mall[''fan'']} - 商城返利 - {WEBNAME}', '{\$mall[''title'']} 最高返{\$mall[''fan'']} - 商城返利 - {WEBNAME}', '{\$mall[''des'']}-商城描述|{\$mall[''title'']}-商城名字|{\$mall[''fan'']}-最高返|{WEBNAME}-网站名称', 1, 1335529021),
(18, 'mall', 'goods', '{\$q} - 商城返利 - {WEBNAME}', '{\$q},{WEBNAME}', '{if \$start_price!=''''}起始价格{\$start_price}-{/if}{if \$end_price!=''''}结束价格{\$end_price}-{/if}{\$q}', '{\$q}-分类名称|{\$start_price}-开始价格|{\$end_price}-结束价格|{\$page}-页数|{WEBNAME}-网站名称', 1, 1340627398),
(20, 'user', 'register', '用户注册 - {WEBNAME}', '{WEBNAME},用户注册', '{WEBNAME},用户注册', '{WEBNAME} - 网站名称', 1, 1335529021),
(21, 'user', 'login', '用户登录 - {WEBNAME}', '{WEBNAME},用户登录', '{WEBNAME},用户登录', '{WEBNAME}-网站名称', 1, 1335529021),
(22, 'baobei', 'index', '晒单分享 - {WEBNAME}', '淘宝购物分享,淘宝购物晒单,淘宝返利网,淘宝返利网,购物返利网,购物返利网{WEBNAME}', '淘宝购物分享网站是提供购物分享交流以及返利金服务的购物分享返利网站。在这里可以分享宝贝交朋友以外还可以购物返利金.与百万MM一起修炼变美秘笈。众多扮美达人与你分享美人心计、购物经验、搭配秘笈、购物晒单，记录你的美丽成长。快来分享你的变美秘笈吧！', '{WEBNAME}-网站名称', 1, 1335529021),
(23, 'baobei', 'view', '{\$user[''ddusername'']}买的{\$baobei[''title'']}仅{\$baobei[''price'']}元，返了{\$baobei[''fxje'']}{TBMONEY} - {WEBNAME}', '{\$user[''ddusername'']},{\$baobei[''title'']},晒单分享,{WEBNAME}', '{\$user[''ddusername'']}买的{\$baobei[''title'']}仅{\$baobei[''price'']}元，返了{\$baobei[''fxje'']}{TBMONEY}，TA说{\$baobei[''content'']}', '{\$baobei[''title'']}-宝贝名|{\$user[''ddusername'']}-会员名|{\$baobei[''content'']}-分享的话', 1, 1335529021),
(24, 'baobei', 'user', '{\$user[''ddusername'']}的宝贝 - 晒单分享', '{\$user[''ddusername'']}的宝贝 - 晒单分享', '{\$user[''ddusername'']}的宝贝 - 晒单分享', '{\$user[''ddusername'']}-会员名', 1, 1335529021),
(25, 'help', 'index', '网站帮助_{WEBNAME}', '网站帮助,{WEBNAME}', '网站帮助,{WEBNAME}', '{WEBNAME}-网站名称', 1, 1343823837),
(26, 'paipai', 'index', '拍拍返利网站 - {WEBNAME}', '拍拍返利网站', '拍拍返利网站', '{WEBNAME}-网站名称', 1, 1348928585),
(27, 'paipai', 'list', '{\$q} - 拍拍返利 - {WEBNAME}', '{\$q},{WEBNAME}', '{\$q},{WEBNAME}', '{\$q}-搜索关键词|{WEBNAME}-网站名称', 1, 1347551595),
(35, 'task', 'index', '任务赚钱 - {WEBNAME}', '任务赚钱 - {WEBNAME}', '任务赚钱 - {WEBNAME}', '{WEBNAME}-网站名称', 1, 1403698709),
(38, 'about', 'index', '{\$article[''title'']} - {WEBNAME}', '{\$article[''title'']} - {WEBNAME}', '{\$article[''title'']} - {WEBNAME}', '{\$article[''title'']}-页面标题|{WEBNAME}-网站名称', 1, 1405750586),
(40, 'goods', 'index', '{\$bankuai_title} - {WEBNAME}', '{\$bankuai_title} - {WEBNAME}', '{\$bankuai_title} - {WEBNAME}', '{\$bankuai_title}-页面标题|{WEBNAME}-网站名称', 1, 1430836865),
(41, 'goods', 'view', '{\$goods[''title'']} - {WEBNAME}', '{\$goods[''title'']} - {WEBNAME}', '{\$goods[''title'']} - {WEBNAME}', '{\$goods[''title'']}-页面标题|{WEBNAME}-网站名称', 1, 1430836936),
(19, 'user', 'getpasswor', '找回密码-{WEBNAME}', '找回密码,{WEBNAME}', '找回密码-{WEBNAME}', '', 1, 1438361186);";