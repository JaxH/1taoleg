    <!--顶部导航栏开始-->
<div class="vipduo_top screen">
	<div class="vipduo_top_menu">
		<div class="vipduo_top_link">
			 <div class="menu_list" onmouseover="this.className='menu_list active'" onmouseout="this.className='menu_list'">
           <?php if($dd_tpl_data['index-kg']['open']==1){?> 
		   <div class="vipduo_body">
		   <div class="menu_title">
               <div><div class="zy"></div><a href="<?=wap_l()?>">手机返利</a></div>
            </div>   </div>
		  <?php }else{?>
		  <div class="vipduo_body">
		   <div class="menu_title">
               <div><div class="zy"></div>首页切换</div> 
            </div>   </div>
            <div class="menu_content" style="width:122px">
            	<ul>
				<li><a href="<?=wap_l()?>" target="_blank"><div class="menu_list_title"><div class="fu1"></div>WAP手机版</div></a></li>
				<li><a href="plugin/lai95/index.php?do=1"><div class="menu_list_title"><div class="fu2"></div>豪华版首页</div></a></li>
				<li><a href="plugin/lai95/index.php?do=2"><div class="menu_list_title"><div class="fu3"></div>标准版首页</div></a></li>
				<li><a href="plugin/lai95/index.php?do=3"><div class="menu_list_title"><div class="fu4"></div>简版首页</div></a></li>
				<li><a href="plugin/lai95/index.php?do=4"><div class="menu_list_title"><div class="fu5"></div>精华版首页</div></a></li>
				<li><a href="plugin/lai95/index.php?do=5"><div class="menu_list_title"><div class="fu6"></div>活动版首页</div></a></li>
				<li><a href="plugin/lai95/index.php?do=6"><div class="menu_list_title"><div class="fu7"></div>促销版首页</div></a></li>
				<li><a href="plugin/lai95/index.php?do=7"><div class="menu_list_title"><div class="fu8"></div>清爽版首页</div></a></li>
				<li><a href="plugin/lai95/index.php?do=8"><div class="menu_list_title"><div class="fu6"></div>超返版首页</div></a></li>
				<li><a href="plugin/lai95/index.php?do=9"><div class="menu_list_title"><div class="fu4"></div>分类版首页</div></a></li>
				<li class="last"><a href="plugin/lai95/index.php?do=10"><div class="menu_list_title"><div class="fu9"></div>超级版首页</div></a></li></li>
				
              	</ul>
            </div>
           <?php }?> </div>
		    <div class="menu_list" onmouseover="this.className='menu_list active'" onmouseout="this.className='menu_list'">
            <div class="menu_title">
            <div>返利导购</div> <div class="ico_menu"></div>
            </div>
            <div class="menu_content">
            	<ul>
				<li><a href="<?=u('goods','index',array('code'=>chaofan))?>" target="_blank"><div class="menu_list_title"><div class="vipduo_ico ico_share"></div>超级返利</div></a></li>
				<li><a href="<?=u('tao','index')?>" target="_blank"><div class="menu_list_title"><div class="vipduo_ico ico_taobao"></div>宝贝返利</div></a></li>
				<li><a href="<?=u('mall','index')?>" target="_blank"><div class="menu_list_title"><div class="vipduo_ico ico_bc2"></div>商城返利</div></a></li>
				
				<li class="last"><a href="<?=u('baobei','list')?>" target="_blank"><div class="menu_list_title"><div class="vipduo_ico ico_share"></div>晒单分享</div></a></li>
              	</ul>
            </div>
            </div>
			 <div class="menu_list" onmouseover="this.className='menu_list active'" onmouseout="this.className='menu_list'">
            <div class="menu_title">
            <div>在线客服</div> <div class="ico_menu"></div>
            </div>
            <div class="menu_content">
            	<ul>
                	<li><a id="kefu"><div class="menu_list_title"><div class="vipduo_ico ico_online"></div>联系客服</div></a></li>
					<li><a href="<?=u('user','getpassword')?>" target="_blank"><div class="menu_list_title"><div class="vipduo_ico ico_help"></div>找回密码</div></a></li>				
                	<li class="last"><a href="<?=u('help','index')?>" target="_blank"><div class="menu_list_title"><div class="vipduo_ico ico_share"></div>帮助中心</div></a></li>		   			   
            	</ul>
            </div>
            </div>
			  <div class="menu_list" onmouseover="this.className='menu_list active'" onmouseout="this.className='menu_list'">
            <div class="menu_title">
            <div>收藏本站</div> <div class="ico_menu"></div>
            </div>
            <div class="menu_content">
            	<ul>
                	<li><a onclick="AddFavorite('<?=SITEURL?>','<?=WEBNICK?>')" title="收藏<?=WEBNICK?>网，方便下次访问"><div class="menu_list_title"><div class="vipduo_ico ico_collection"></div>加入收藏</div></a></li>			
                	<li class="last"><a  <a href="comm/shortcut.php" title="保存<?=WEBNICK?>网到桌面"><div class="menu_list_title"><div class="vipduo_ico ico_desk"></div>保存桌面</div></a></li>		   			   
            	</ul>
         </div>
            </div>
		  <?php if($webset['shangjia']['status']==1){?>
		  <div  style="margin-left:20px; cursor:pointer"> <a href="<?=u('hezuo','index')?>" target="_blank">
		商家报名</a></div>  <?php }?>
	
		<div  style="margin-left:20px; cursor:pointer"> <a href="<?=u('user','chadan')?>" target="_blank">
		认领订单</a></div>
	
		<?php if($webset['user']['shoutu']==1){?> <div style="margin-left:20px;"><a href="<?=u('yaoqing','index')?>" title="邀请好友拿返利">邀请好友<font color="#FF0000">奖<?=$webset['tgfz']?>元</font></a></div><?php }?>
         
        </div>
	<!--登录前-->
        <div class="vipduo_top_user" style="display:none">
          
            <div class="menu_title">
			 <?php if($app_show==1){?>
		    <?php foreach($apps as $k=>$row){?>
		    <div class="vipduo_reg"><a rel="nofollow" href="<?=u('api',$row['code'],array('do'=>'go'))?>" target="_blank" title="<?=$row['title']?>登录"><div class="ico_<?=$row['code']?>"></div><?=$row['title']?>登录</a></div><span></span><?php }?>	
			 <?php }?>
			 
            <div class="vipduo_login"><a href="<?=u('user','login')?>" title="会员登录">请登录</a></div><span></span>
            <div class="vipduo_reg"><a href="<?=u('user','register')?>" title="立即注册会员">免费注册</a></div>
</div></div>
       <!--登录后-->
				<script type="text/javascript">
				function topHtml() {/*<div class="vipduo_user_login" onmouseover="this.className='vipduo_user_login active'" onmouseout="this.className='vipduo_user_login'">
					<div class="menu_title">
						<div style="float:left;">
							<a href="<?=u('user')?>"><div class="user_head"><img src="{$avatar}" width="18" height="18"/></div></a>{$name}</div>
							<div class="ico_menu" style="float:left;"></div>
						</div>
						<div class="menu_content">
							<ul>
								<li><a href="<?=u('user','index')?>"><div class="menu_list_title"><div class="vipduo_ico ico_manager"></div>我的后台</div></a></li>
								<li><a href="<?=u('user','tixian',array('type'=>1))?>"><div class="menu_list_title"><div class="vipduo_ico ico_mall"></div><?=TBMONEY?>提取</div></a></li>
								<li><a href="<?=u('user','tradelist')?>"><div class="menu_list_title"><div class="vipduo_ico ico_order"></div>我的订单</div></a></li>
								<li><a href="<?=u('user','mingxi')?>"><div class="menu_list_title"><div class="vipduo_ico ico_onshare"></div>收入明细</div></a></li>
								<li><a href="<?=u('user','huan')?>"><div class="menu_list_title"><div class="vipduo_ico ico_score"></div>我的兑换</div></a></li>
								<li><a href="<?=u('baobei','user',array('uid'=>$dduser['id']))?>"><div class="menu_list_title"><div class="vipduo_ico ico_like"></div>我的分享</div></a></li>
								<li class="last"><a href="<?=u('yaoqing','index')?>"><div class="menu_list_title"><div class="vipduo_ico ico_invite"></div>邀请好友</div></a></li>
							</ul>
						</div>
					</div>
							<div style="float:left;padding-left:5px; padding-right:5px;"><a href="<?=u('user','mingxi')?>"><font color="ff6699"><?=TBMONEY?>：{$jifenbao}个</font></a></div>
						
					<a href="<?=u('user','msg')?>"><?php if($msgnum==0){?> <div style="float:left;padding-left:5px;padding-top:14px; padding-right:5px;"> {$msgsrc}</div> <?php }else{?><div style="float:left;padding-left:5px;padding-right:5px;color:#FF0000">{$msgsrc}</div><?php }?></a>
			
					<div class="vipduo_user_login" onmouseover="this.className='vipduo_user_login active'" onmouseout="this.className='vipduo_user_login'">
						<div class="menu_title" style="width:22px; padding-left:5px; padding-right:5px;">
							<div style="padding-top:8px; height:32px;"><div class="menu_set"></div></div>
						</div>
						<div class="menu_content">
							<ul>
								<li><a href="<?=u('user','info')?>"><div class="menu_list_title"><div class="vipduo_ico ico_profile"></div>账户资料</div></a></li>
								<li><a href="<?=u('user','avatar')?>"><div class="menu_list_title"><div class="vipduo_ico ico_head"></div>修改头像</div></a></li>
								<li class="last"><a href="<?=u('user','info',array('do'=>'apilogin'))?>"><div class="menu_list_title"><div class="vipduo_ico ico_safe"></div>帐号绑定</div></a></li>
							</ul>
						</div>
					</div>			
					<a href="<?=u('user','exit',array('t'=>TIME))?>"><div class="menu_logout" title="退出登录"></div></a>			
				</div>*/;}
				$.ajax({
	            url: '<?=l('ajax','userinfo')?>',
	            dataType:'jsonp',
	            jsonp:"callback",
	             success: function(data){
		if(data.s==1){
			topHtml=getTplObj(topHtml,data.user);
			$('.vipduo_top_user').html(topHtml).show();
		}
		else{
			$('.vipduo_top_user').show();
		}
	}
});
</script>
    <!-- 顶部导航结束 -->
	</div></div>
<div class="search">
<div class="search1000">
<div class="logo">
  <a href="<?=SITEURL?>"><img src="<?=$dd_tpl_data['logo']?>" alt="<?=WEBNAME?>" style="height:80px; width:250px"/></a></div>
<div class="searchR"><div class='searchbox' id="searchbox">
<div style="TEXT-AliGN: left;">
<FORM style="FLOAT: left" class='frombox' method='get' name='formname' action='index.php' target="_blank" autocomplete="off" onsubmit="return checkSubFrom('#s-txt');">
<input type="hidden" id="mod" name="mod" value="inc" class="mod" /><input type="hidden" id="act" name="act" value="check" class="act" />
<SPAN class="box-middle c_border">
<INPUT id=s-txt class=s-txt name='q' x-webkit-speech value='请输入任意商城名、淘宝/天猫商品名称搜索拿返利~' moren="<?=$webset['search_key']['head']?>"/>

<INPUT class="sbutton c_bgcolor" type=submit value="<?php if(FANLI==1){?>购物拿返利<?php }else{?>去购物<?php }?>">
</SPAN> 
<SPAN class=box-right></SPAN>
</FORM>
<p></p>
</div>
</div>
<div class="reso">热门搜索: 
<a href="<?=u('tao','list',array('cid'=>0,'q'=>''.$dd_tpl_data["seo_1"].''))?>" target="_blank"><?=$dd_tpl_data["seo_1"]?></a>
<a href="<?=u('tao','list',array('cid'=>0,'q'=>''.$dd_tpl_data["seo_2"].''))?>" target="_blank"><?=$dd_tpl_data["seo_2"]?></a>
<a href="<?=u('tao','list',array('cid'=>0,'q'=>''.$dd_tpl_data["seo_3"].''))?>" target="_blank"><?=$dd_tpl_data["seo_3"]?></a>
<a href="<?=u('tao','list',array('cid'=>0,'q'=>''.$dd_tpl_data["seo_4"].''))?>" target="_blank"><?=$dd_tpl_data["seo_4"]?></a>
<a href="<?=u('tao','list',array('cid'=>0,'q'=>''.$dd_tpl_data["seo_5"].''))?>" target="_blank"><?=$dd_tpl_data["seo_5"]?></a>
<a href="<?=u('tao','list',array('cid'=>0,'q'=>''.$dd_tpl_data["seo_6"].''))?>" target="_blank"><?=$dd_tpl_data["seo_6"]?></a>

<a href="<?=u('tao','daohang')?>" target="_blank" class="hh">更多>></a>
</div>
</div>
<div class="jc">
<a href="<?=u('help','taobao')?>" target="_blank"><img src="<?=TPLURL?>/inc/images/vip/help.gif" style="margin-right:30px"/></a>

<div class="header-fa">

   <?php if($dd_tpl_data['foot_vipduo']==1){?>
<?php 
if($app_status==1){
	$phone_url='href="'.u('app','index').'" target="_blank"';
}
else{
	$phone_url='href="'.u('shouji','index').'" target="_blank"';
}
?><? }else{?>
<?php 
if($app_status==1){
	$phone_url='href="'.u('app','index').'" target="_blank"';
}
else{
	$phone_url='href="javascript:alert(\'开发中，敬请期待\');"';
}
?>
 <?php }?>
<a class="fa-link" <?=$phone_url?> ><img src="<?=TPLURL?>/inc/images/right_sj_1.png" /></a>
</div></div>
</div>
</div>

<div class="c_bgcolor daohang" id="navdaohang">
  <div class="daohang1000">
    <ul class="ulnav">
	
	  <?php if($dd_tpl_data['fenlei-kg']['open']==1){?> <?php }else{?> <li class="linav1">   <!--首页分类开始--> 
		  <?php include(TPLPATH.'/vip/fenlei.tpl.php');?>
  </li>   <?php }?> 
   <?php 
	$nav_c=count($nav);
	if($dd_tpl_data['fenlei-kg']['open']==1){
	$nav_num=8; //导航个数
	}
	else{
	$nav_num=6; //导航个数
	}
	$nav_c=$nav_c>=$nav_num?$nav_num:$nav_c;
	
	$nav_cur_ok=0;
	if($_GET['code']!=''){
		for($i=0;$i<$nav_c;$i++){
			$dom_id = "";
			if ($nav[$i]['code'] == $_GET['code'] && $nav_cur_ok==0) {
				$nav[$i]['dom_id'] = "id='fontc'";
				$nav_cur_ok=1;
			}
			else{
				$nav[$i]['dom_id'] = "";
			}
		}
	}
	
	for($i=0;$i<$nav_c;$i++){
		$have_child_class='';
		if($nav_cur_ok==0){
			$dom_id = "";
			if ($nav[$i]['tag'] == PAGETAG && $nav_cur_ok==0) {
				$dom_id = "id='fontc'";
				$nav_cur_ok=1;
			}
		}
		else{
			$dom_id=$nav[$i]['dom_id'];
		}
	    
		if(!empty($nav[$i]['child'])){
			$have_child_class=' have_child';
			$em='<em></em>';
		}
		else{
			$have_child_id='';
			$em='';
		}
		if($i==$nav_c-1){
			$lastclass=' last';
		}
		else{
			$lastclass=' ';
		}
	?>
      <li class="c_bgcolor linav<?=$have_child_class?><?=$lastclass?>" <?=$dom_id?>> <a <?=$nav[$i]['target']?> class="anav c_fcolor" href="<?=$nav[$i]['link']?>"><font color="#FFFFFF"><?=$nav[$i]['title']?></font><?=$nav[$i]['type_img']?><?=$em?></a>
      <?php if($em!=''){?>
      <ul class="n-h-list c_hborder" style="background:#fff;border-style:solid; border-width:0px 1px 1px 1px;">
        <?php foreach($nav[$i]['child'] as $row){?>
        <li><a class="c_border" <?=$row['target']?> href="<?=$row['link']?>"><?=$row['title']?></a> </li>
        <?php }?>
	  </ul>
      <?php }?>
      </li>
    <?php }?>
    
            <li class="linav2 have_child"><img src="<?=TPLURL?>/inc/images/vip/sj.png" id="checkin-img" style="vertical-align:middle;margin-right:5px;"><font color="#FFFFFF" style=" font-size:18px; cursor:pointer">手机返利</font>
    <ul class="n-h-list2">
		           <div style="margin-left:8px; font-size:14px; margin-bottom:5px;color:#FF6699;">扫描手机WAP站</div>
		     <a href="<?=wap_l('index')?>" target="_blank"><img src="<?=$dd_tpl_data['wap']?>" alt="扫一扫，把<?=WEBNAME?>装进手机" width="140" height="140" /></a>
			</ul>	
			</li>	
	  <?php if($webset['sign']['open']==1){?> <li class="linav2"> <a href="<?=u('user','index')?>" id="check-in" title="每日签到领奖" style="font-weight:normal;"><img src="<?=TPLURL?>/inc/images/vip/checkin-will.png" id="checkin-img" style="vertical-align:middle;margin-right:5px;">签到领奖</a></li> <? }else{?>
	   <li class="linav2"> <a href="<?=$dd_tpl_data["qdlj"]?>" target="_blank" id="check-in"  style="font-weight:normal; margin-left:15px"><?=$dd_tpl_data["qdmc"]?></a></li><?php }?>
	 </ul>
	 </div>
  </div> 
<script>
var sousuoxiala=new Array();
sousuoxiala[0]=new Array("tao","view","淘宝相关宝贝"); 
<?php if(BIJIA>1){?>
sousuoxiala[1]=new Array("mall","goods","全网比价");
<?php }?>
<?php if($webset['paipai']['open']==1){?>
sousuoxiala[2]=new Array("paipai","list","拍拍相关宝贝"); 
<?php }?>
//sousuoxiala[3]=new Array("tao","list","站内精选宝贝"); 
/*sousuoxiala[4]=new Array("zhidemai","index","值得买精选宝贝"); */

$searchInput=$("#s-txt");

$(".have_child").hover(function() {
	thisId=$(this).attr('id');
	$(this).attr('id','navc');
    $(this).find("a").eq(0).addClass("sub_on").removeClass("sub");
    $(this).find("ul").show();
},function() {
	if(typeof(thisId) == "undefined"){
		thisId='';	
	}
	$(this).attr('id',thisId);
    $(this).find("a").eq(0).addClass("sub").removeClass("sub_on");
    $(this).find("ul").hide()
});
$searchInput.focusClear();
</script>
<div id="header-bottom" style="height:0px; overflow:hidden"></div>