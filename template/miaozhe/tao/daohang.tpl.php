<?php
$chongzhi_url=$ddTaoapi->tdj_zujian(1,$dduser['id']);
$css[]=TPLURL."/inc/css/tao_index.css";
include(TPLPATH.'/inc/header.tpl.php');
?></div>
<style>
body { background:#fffaea; }
</style>
<div class="search-wrap">
	<div class="bc pt20 w980">
		<div class="clearfix nav-tutorial"><a href="<?=u('help','taobao')?>" target="_blank">新手上路</a></div>
		<ul class="tb-search clearfix">
			<li><a class="current" href="javascript:void(0)">找宝贝<i></i></a></li>
			<li><a id="cz" style="cursor:pointer">充值返利<i></i></a></li>
			<li><a href="<?=u('tao','daohang')?>" style="cursor:pointer">分类导航<i></i></a></li>
		</ul>
		<div class="pane-tb">
			<div class="pane">
				<form action="index.php" amethod="get" class="t_frombox" target="_blank">
<input type="hidden" id="mod" name="mod" value="inc" class="mod" /><input type="hidden" id="act" name="act" value="check" class="act" />
					<p class="clearfix">
						<input x-webkit-speech id="search-fanli" class="search-input" type="text" placeholder="输入任意淘宝/天猫宝贝标题开始购物拿返利！" onfocus="if(this.value=='输入任意淘宝/天猫宝贝标题开始购物拿返利')this.value='';" onblur="if(this.value=='')this.value='输入任意淘宝/天猫宝贝标题开始购物拿返利';" autocomplete="off" name="q" />
						<input type="submit" value="" class="btn">
					</p>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="m_cat">
			<dl class="one" onmouseover="this.className='onone'" onmouseout="this.className='one'">
			<dt><a class="tt">服装服饰</a><span class="text orange"><em><span>我的服饰我做主，春装新品8折包邮！
			</span></em></span></dt>
			<dd>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'女装'))?>" target="_blank" class="big">女装</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'连衣裙'))?>" target="_blank">连衣裙</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'T恤'))?>" target="_blank">短袖T恤</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'背心裙'))?>" target="_blank" class="orange">背心裙</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'开衫'))?>" target="_blank">开衫</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'男装'))?>" target="_blank" class="big">男装</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'男士T恤'))?>" target="_blank">T恤</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'POLO'))?>" target="_blank">POLO</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'衬衫'))?>" target="_blank">衬衫</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'背心'))?>" target="_blank">背心</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'牛仔裤'))?>" target="_blank">牛仔裤</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'内衣'))?>" target="_blank" class="big">内衣</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'文胸'))?>" target="_blank">文胸</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'塑身'))?>" target="_blank">塑身</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'睡衣'))?>" target="_blank">睡衣</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'内裤'))?>" target="_blank">内裤</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'袜子'))?>" target="_blank">袜子</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'每日上新'))?>" target="_blank" class="big">每日上新</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'雪纺衫'))?>" target="_blank">雪纺衫</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'衬衫'))?>" target="_blank">衬衫</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'半裙'))?>" target="_blank">半裙</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'裤'))?>" target="_blank">裤</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'男休闲裤'))?>" target="_blank" class="big">男休闲裤</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'西裤'))?>" target="_blank">西裤</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'牛仔裤'))?>" target="_blank">牛仔裤</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'运动'))?>" target="_blank" class="orange">运动</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'卫衣'))?>" target="_blank">卫衣</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'男鞋'))?>" target="_blank" class="big">男鞋</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'凉鞋'))?>" target="_blank">凉鞋</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'拖鞋'))?>" target="_blank">拖鞋</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'板鞋'))?>" target="_blank">板鞋</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'休闲'))?>" target="_blank">休闲</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'皮鞋'))?>" target="_blank">皮鞋</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'女鞋'))?>" target="_blank" class="big">女鞋</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'新品'))?>" target="_blank">新品</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'罗马'))?>" target="_blank">罗马</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'凉鞋'))?>" target="_blank">凉鞋</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'拖鞋'))?>" target="_blank">拖鞋</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'单鞋'))?>" target="_blank">单鞋</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'运动鞋'))?>" target="_blank" class="big">运动鞋</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'运动'))?>" target="_blank">运动</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'帆布'))?>" target="_blank">帆布</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'板鞋'))?>" target="_blank">板鞋</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'跑步'))?>" target="_blank">跑步</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'篮球'))?>" target="_blank">篮球</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'童装'))?>" target="_blank" class="big">童装</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'童鞋'))?>" target="_blank">童鞋</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'套装'))?>" target="_blank" class="orange">套装</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'裤子'))?>" target="_blank">裤子</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'T恤'))?>" target="_blank">T恤</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'孕装'))?>" target="_blank">孕装</a>
				</div>
				<div class="clear"></div>
			</dd>
			</dl>
 
			<dl onmouseover="this.className='on'" onmouseout="this.className=''">
			<dt>
            <a href="<?=u('tao','list',array('cid'=>0,'q'=>'箱包配饰'))?>" target="_blank" class="tt t_1">箱包配饰</a>
            <span class="text orange"><em><span>精选包包每日上新，多重折扣享受！
			</span></em></span></dt>
			<dd>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'箱包'))?>" target="_blank" class="big">箱包</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'女包'))?>" target="_blank">女包</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'单肩'))?>" target="_blank">单肩</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'男包'))?>" target="_blank">男包</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'旅行'))?>" target="_blank">旅行</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'双肩'))?>" target="_blank">双肩</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'珠宝'))?>" target="_blank" class="big">珠宝</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'钻戒'))?>" target="_blank">钻戒</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'翡翠'))?>" target="_blank">翡翠</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'施华洛'))?>" target="_blank">施华洛</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'千足金'))?>" target="_blank" class="orange">千足金</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'手表'))?>" target="_blank" class="big">手表</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'Casio'))?>" target="_blank">Casio</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'天梭'))?>" target="_blank">天梭</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'迪士尼'))?>" target="_blank">迪士尼</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'西铁城'))?>" target="_blank">西铁城</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'配饰'))?>" target="_blank" class="big">配饰</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'围巾披肩'))?>" target="_blank">围巾披肩</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'遮阳帽'))?>" target="_blank">遮阳帽</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'草帽'))?>" target="_blank">草帽</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'皮带'))?>" target="_blank">皮带</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'饰品'))?>" target="_blank" class="big">饰品</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'项链'))?>" target="_blank">项链</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'耳饰'))?>" target="_blank">耳饰</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'发饰'))?>" target="_blank">发饰</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'手镯'))?>" target="_blank">手镯</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'手链'))?>" target="_blank">手链</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'眼镜'))?>" target="_blank" class="big">眼镜</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'太阳镜'))?>" target="_blank" class="orange">太阳镜</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'眼镜架'))?>" target="_blank">眼镜架</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'戒烟'))?>" target="_blank">戒烟</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'Zippo'))?>" target="_blank">Zippo</a>
				</div>
				<div class="clear"></div>
			</dd>
			</dl>
 
			
 
			<dl onmouseover="this.className='on'" onmouseout="this.className=''">
			<dt><a href="<?=u('tao','list',array('cid'=>0,'q'=>'美容护发'))?>" target="_blank" class="tt t_3">美容护发</a><span class="text orange"><em><span>她跟他还有它都瘦啦！今夏HOT瘦身单品全搜罗
			</span></em></span></dt>
			<dd>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'护肤'))?>" target="_blank" class="big">护肤</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'眼霜'))?>" target="_blank">眼霜</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'爽肤水'))?>" target="_blank">爽肤水</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'面霜'))?>" target="_blank">面霜</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'面膜'))?>" target="_blank">面膜</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'彩妆'))?>" target="_blank" class="big">彩妆</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'香水'))?>" target="_blank">香水</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'BB霜'))?>" target="_blank" class="orange">BB霜</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'隔离'))?>" target="_blank">隔离</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'指甲油'))?>" target="_blank">指甲油</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'美发'))?>" target="_blank" class="big">美发</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'洗发水'))?>" target="_blank">洗发水</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'假发'))?>" target="_blank">假发</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'造型'))?>" target="_blank">造型</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'染发膏'))?>" target="_blank">染发膏</a>
				</div>
				<div class="clear"></div>
			</dd>
			</dl>
 
			<dl onmouseover="this.className='on'" onmouseout="this.className=''">
			<dt><a class="tt t_4">母婴用品</a><span class="text orange"><em><span>各种各样婴儿跟孕妇用品/玩具/天天上新
			</span></em></span></dt>
			<dd>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'奶粉'))?>" target="_blank" class="big">奶粉</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'牛奶'))?>" target="_blank">牛奶</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'惠氏'))?>" target="_blank">惠氏</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'鱼油'))?>" target="_blank">鱼油</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'补钙'))?>" target="_blank">补钙</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'美素'))?>" target="_blank">美素</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'用品'))?>" target="_blank" class="big">用品</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'红PP'))?>" target="_blank">红PP</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'湿巾'))?>" target="_blank">湿巾</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'推车'))?>" target="_blank">推车</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'驱蚊'))?>" target="_blank">驱蚊</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'孕妈'))?>" target="_blank">孕妈</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'潜能开发'))?>" target="_blank" class="big">潜能开发</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'早教'))?>" target="_blank">早教</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'玩具'))?>" target="_blank" class="orange">玩具</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'童车'))?>" target="_blank">童车</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'纪念品'))?>" target="_blank">纪念品</a>
				</div>
				<div class="clear"></div>
			</dd>
			</dl>
 
			<dl onmouseover="this.className='on'" onmouseout="this.className=''">
			<dt><a href="<?=u('tao','list',array('cid'=>0,'q'=>'家居建材'))?>" target="_blank" class="tt t_5">家居建材</a><span class="text orange"><em><span>超低折扣家具！家居装饰轻松搞定
			</span></em></span></dt>
			<dd>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'建材'))?>" target="_blank" class="big">建材</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'卫浴'))?>" target="_blank">卫浴</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'灯饰'))?>" target="_blank">灯饰</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'开关'))?>" target="_blank">开关</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'五金'))?>" target="_blank">五金</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'服务'))?>" target="_blank">服务</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'家具'))?>" target="_blank" class="big">家具</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'床'))?>" target="_blank">床</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'沙发'))?>" target="_blank">沙发</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'衣柜'))?>" target="_blank">衣柜</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'宜家'))?>" target="_blank">宜家</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'办公家具'))?>" target="_blank">办公家具</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'家饰'))?>" target="_blank" class="big">家饰</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'十字绣'))?>" target="_blank">十字绣</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'装饰画'))?>" target="_blank">装饰画</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'窗帘'))?>" target="_blank">窗帘</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'仿真花'))?>" target="_blank">仿真花</a>
				</div>
				<div class="clear"></div>
			</dd>
			</dl>
 <dl onmouseover="this.className='on'" onmouseout="this.className=''">
			<dt><a href="<?=u('tao','list',array('cid'=>0,'q'=>'数码家电'))?>" target="_blank" class="tt t_2">数码家电</a><span class="text orange"><em><span>数码相机新品展销会 各类时尚新品全面到货
			</span></em></span></dt>
			<dd>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'手机'))?>" target="_blank" class="big">手机</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'安卓'))?>" target="_blank" class="orange">安卓</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'Nokia'))?>" target="_blank">Nokia</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'三星'))?>" target="_blank">三星</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'HTC'))?>" target="_blank">HTC</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'Moto'))?>" target="_blank">Moto</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'正品国货'))?>" target="_blank" class="big">正品国货</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'联想'))?>" target="_blank">联想</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'智能手机'))?>" target="_blank">智能手机</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'双模双待'))?>" target="_blank">双模双待</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'相机'))?>" target="_blank" class="big">相机</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'卡片机'))?>" target="_blank">卡片机</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'单反'))?>" target="_blank">单反</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'镜头'))?>" target="_blank">镜头</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'佳能'))?>" target="_blank">佳能</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'MP4'))?>" target="_blank">MP4</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'本本'))?>" target="_blank" class="big">本本</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'联想'))?>" target="_blank">联想</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'苹果'))?>" target="_blank">苹果</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'索尼'))?>" target="_blank">索尼</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'华硕'))?>" target="_blank">华硕</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'惠普'))?>" target="_blank">惠普</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'平板电脑'))?>" target="_blank" class="big">平板电脑</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'黑莓'))?>" target="_blank">黑莓</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'三星'))?>" target="_blank">三星</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'iPad2'))?>" target="_blank" class="orange">iPad2</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'安卓'))?>" target="_blank">安卓</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'电脑'))?>" target="_blank" class="big">电脑</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'显示器'))?>" target="_blank">显示器</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'键盘'))?>" target="_blank">键盘</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'内存'))?>" target="_blank">内存</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'显卡'))?>" target="_blank">显卡</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'整机'))?>" target="_blank">整机</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'小家电'))?>" target="_blank" class="big">小家电</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'厨房'))?>" target="_blank">厨房</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'生活'))?>" target="_blank">生活</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'个人护理'))?>" target="_blank">个人护理</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'影音'))?>" target="_blank">影音</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'大家电'))?>" target="_blank" class="big">大家电</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'电视机'))?>" target="_blank">电视机</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'音响'))?>" target="_blank">音响</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'洗衣机'))?>" target="_blank">洗衣机</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'冰箱'))?>" target="_blank">冰箱</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'数码配件'))?>" target="_blank" class="big">数码配件</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'手机配件'))?>" target="_blank">手机配件</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'笔记本配件'))?>" target="_blank">笔记本配件</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'保健按摩'))?>" target="_blank" class="big">保健按摩</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'剃须刀'))?>" target="_blank">剃须刀</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'脱毛器'))?>" target="_blank">脱毛器</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'瘦腿带'))?>" target="_blank">瘦腿带</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'Apple'))?>" target="_blank" class="big">Apple</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'iPhone4'))?>" target="_blank">iPhone4</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'iPod'))?>" target="_blank">iPod</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'苹果配件'))?>" target="_blank">苹果配件</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'打印机'))?>" target="_blank" class="big">打印机</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'路由器'))?>" target="_blank" class="orange">路由器</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'U盘'))?>" target="_blank">U盘</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'3G上网卡'))?>" target="_blank">3G上网卡</a>
				</div>
				<div class="clear"></div>
			</dd>
			</dl>
			<dl onmouseover="this.className='on'" onmouseout="this.className=''">
			<dt><a class="tt t_6">食品百货</a><span class="text orange"><em><span>一站式购物，大型综合百货超市为您服务
			</span></em></span></dt>
			<dd>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'零食'))?>" target="_blank" class="big">零食</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'猪肉脯'))?>" target="_blank">猪肉脯</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'牛肉'))?>" target="_blank">牛肉</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'鸭脖'))?>" target="_blank">鸭脖</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'红枣'))?>" target="_blank">红枣</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'茶'))?>" target="_blank" class="orange">茶</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'菜场'))?>" target="_blank" class="big">菜场</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'蔬果'))?>" target="_blank">蔬果</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'即食'))?>" target="_blank">即食</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'樱桃'))?>" target="_blank">樱桃</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'三文鱼'))?>" target="_blank">三文鱼</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'干货'))?>" target="_blank">干货</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'保健'))?>" target="_blank" class="big">保健</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'安利'))?>" target="_blank">安利</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'燕窝'))?>" target="_blank">燕窝</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'胶原蛋白'))?>" target="_blank">胶原蛋白</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'螺旋藻'))?>" target="_blank">螺旋藻</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'厨房'))?>" target="_blank" class="big">厨房</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'杯具'))?>" target="_blank">杯具</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'茶具'))?>" target="_blank">茶具</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'餐具'))?>" target="_blank">餐具</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'锅煲'))?>" target="_blank">锅煲</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'刀具'))?>" target="_blank">刀具</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'洗浴'))?>" target="_blank" class="big">洗浴</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'拖把'))?>" target="_blank">拖把</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'卫生巾'))?>" target="_blank">卫生巾</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'洗衣水'))?>" target="_blank">洗衣水</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'牙膏'))?>" target="_blank">牙膏</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'家纺'))?>" target="_blank" class="big">家纺</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'毛巾'))?>" target="_blank">毛巾</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'拖鞋'))?>" target="_blank">拖鞋</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'四件套'))?>" target="_blank" class="orange">四件套</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'凉席'))?>" target="_blank">凉席</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'蚊帐'))?>" target="_blank">蚊帐</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'文具'))?>" target="_blank" class="big">文具</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'钢笔'))?>" target="_blank">钢笔</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'电玩'))?>" target="_blank" class="orange">电玩</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'PSP'))?>" target="_blank">PSP</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'PS3'))?>" target="_blank">PS3</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'Wii'))?>" target="_blank">Wii</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'收纳'))?>" target="_blank" class="big">收纳</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'伞'))?>" target="_blank">伞</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'扇'))?>" target="_blank">扇</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'首饰盒'))?>" target="_blank">首饰盒</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'压缩袋'))?>" target="_blank">压缩袋</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'相册'))?>" target="_blank">相册</a>
				</div>
				<div class="clear"></div>
			</dd>
			</dl>
 
			<dl onmouseover="this.className='on'" onmouseout="this.className=''">
			<dt><a class="tt t_7">户外&amp;汽车</a><span class="text orange"><em><span>假日出游、户外活动整装待发
			</span></em></span></dt>
			<dd>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'运动'))?>" target="_blank" class="big">运动</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'骑行'))?>" target="_blank">骑行</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'轮滑'))?>" target="_blank" class="orange">轮滑</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'肌肉'))?>" target="_blank">肌肉</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'美体'))?>" target="_blank">美体</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'武术'))?>" target="_blank">武术</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'户外'))?>" target="_blank" class="big">户外</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'服装'))?>" target="_blank">服装</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'户外鞋'))?>" target="_blank">户外鞋</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'背包'))?>" target="_blank">背包</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'逃生'))?>" target="_blank">逃生</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'手电'))?>" target="_blank">手电</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'汽车'))?>" target="_blank" class="big">汽车</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'内饰'))?>" target="_blank">内饰</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'座垫'))?>" target="_blank">座垫</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'车贴'))?>" target="_blank">车贴</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'GPS'))?>" target="_blank">GPS</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'外饰'))?>" target="_blank">外饰</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'游泳'))?>" target="_blank" class="big">游泳</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'瑜伽'))?>" target="_blank">瑜伽</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'羽毛球'))?>" target="_blank">羽毛球</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'乒乓'))?>" target="_blank">乒乓</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'篮球'))?>" target="_blank">篮球</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'舞蹈'))?>" target="_blank">舞蹈</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'垂钓'))?>" target="_blank" class="big">垂钓</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'鱼竿'))?>" target="_blank">鱼竿</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'烧烤'))?>" target="_blank">烧烤</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'军迷'))?>" target="_blank">军迷</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'防身'))?>" target="_blank">防身</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'望远镜'))?>" target="_blank">望远镜</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'车品'))?>" target="_blank" class="big">车品</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'改装'))?>" target="_blank">改装</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'车灯'))?>" target="_blank">车灯</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'影音'))?>" target="_blank" class="orange">影音</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'洗车'))?>" target="_blank">洗车</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'动力'))?>" target="_blank">动力</a>
				</div>
				<div class="clear"></div>
			</dd>
			</dl>
 
			<dl onmouseover="this.className='on'" onmouseout="this.className=''">
			<dt><a class="tt t_8">文化玩乐</a><span class="text orange"><em><span>为爱宠打扮打扮，Show出你萌萌的宠物宝宝
			</span></em></span></dt>
			<dd>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'宠物'))?>" target="_blank" class="big">宠物</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'狗狗'))?>" target="_blank" class="orange">狗狗</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'猫咪'))?>" target="_blank">猫咪</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'小宠'))?>" target="_blank">小宠</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'水族'))?>" target="_blank">水族</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'鸟类'))?>" target="_blank">鸟类</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'收藏'))?>" target="_blank" class="big">收藏</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'古玩街'))?>" target="_blank">古玩街</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'和田玉'))?>" target="_blank">和田玉</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'邮品'))?>" target="_blank">邮品</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'钱币'))?>" target="_blank">钱币</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'玩具'))?>" target="_blank" class="big">玩具</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'毛绒'))?>" target="_blank">毛绒</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'娃娃'))?>" target="_blank">娃娃</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'模型'))?>" target="_blank">模型</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'电动'))?>" target="_blank">电动</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'桌游'))?>" target="_blank">桌游</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'影视'))?>" target="_blank" class="big">影视</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'音乐CD'))?>" target="_blank">音乐CD</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'电影'))?>" target="_blank">电影</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'高清'))?>" target="_blank">高清</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'午夜'))?>" target="_blank">午夜</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'减肥'))?>" target="_blank">减肥</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'书籍'))?>" target="_blank" class="big">书籍</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'考试'))?>" target="_blank">考试</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'杂志'))?>" target="_blank">杂志</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'保养'))?>" target="_blank">保养</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'童书'))?>" target="_blank" class="orange">童书</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'小说'))?>" target="_blank">小说</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'吉他'))?>" target="_blank" class="big">吉他</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'钢琴'))?>" target="_blank">钢琴</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'乐器'))?>" target="_blank">乐器</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'CD/DVD'))?>" target="_blank">CD/DVD</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'胎教CD'))?>" target="_blank">胎教CD</a>
				</div>
				<div class="clear"></div>
			</dd>
			</dl>
 
			<dl class="last" onmouseover="this.className='on'" onmouseout="this.className='last'">
			<dt><a class="tt t_9">生活服务</a><span class="text orange"><em><span>享受生活便捷！电影新片在线抢票
			</span></em></span></dt>
			<dd>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'网店服务'))?>" target="_blank" class="big">网店服务</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'拍摄'))?>" target="_blank">拍摄</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'纸箱'))?>" target="_blank">纸箱</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'定制设计'))?>" target="_blank">定制设计</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'折扣券'))?>" target="_blank" class="big">折扣券</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'面包蛋糕'))?>" target="_blank">面包蛋糕</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'餐饮'))?>" target="_blank">餐饮</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'演出赛事'))?>" target="_blank">演出赛事</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'个性定制'))?>" target="_blank" class="big">个性定制</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'鲜花园艺'))?>" target="_blank">鲜花园艺</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'水培'))?>" target="_blank">水培</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'翻译'))?>" target="_blank">翻译</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'房产'))?>" target="_blank" class="big">房产</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'租房'))?>" target="_blank">租房</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'房东房源'))?>" target="_blank">房东房源</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'二手房'))?>" target="_blank">二手房</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'生活服务'))?>" target="_blank" class="big">生活服务</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'外卖'))?>" target="_blank">外卖</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'健身券'))?>" target="_blank">健身券</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'交通卡券'))?>" target="_blank">交通卡券</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'吃喝玩乐'))?>" target="_blank" class="big">吃喝玩乐</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'上海'))?>" target="_blank">上海</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'北京'))?>" target="_blank">北京</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'香港'))?>" target="_blank">香港</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'广东'))?>" target="_blank">广东</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'创意站'))?>" target="_blank" class="big">创意站</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'新奇'))?>" target="_blank" class="orange">新奇</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'国际快递'))?>" target="_blank">国际快递</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'冲印'))?>" target="_blank">冲印</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'台湾馆'))?>" target="_blank" class="big">台湾馆</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'国际品牌'))?>" target="_blank">国际品牌</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'夜市'))?>" target="_blank">夜市</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'海外代购'))?>" target="_blank" class="orange">海外代购</a>
				</div>
				<div class="box">
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'工艺品'))?>" target="_blank" class="big">工艺品</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'少数民族'))?>" target="_blank">少数民族</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'海外'))?>" target="_blank">海外</a>
					<a href="<?=u('tao','list',array('cid'=>0,'q'=>'宗教'))?>" target="_blank">宗教</a>
				</div>
				<div class="clear"></div>
			</dd>
			</dl>
 
		</div>
		
		  <script>
$(function(){
    $('#cz').jumpBox({  
		LightBox:'show',
	    contain: '<iframe frameborder="0" style="height:200px; width:300px;margin-top:30px;" src="<?=$chongzhi_url?>"></iframe>',
		height:250,
		width:300
    });
});
</script>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>