<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
$pagesize=$dd_tpl_data['pagesize'];
include_once(DDROOT.'/mod/goods/public.act.php');
$bankuai_code=$bankuai_code?$bankuai_code:$_GET['code'];
$parameter=act_goods_list($bankuai_code,$_GET['do'],$ajax_load_num,$pagesize,$_GET['page'],$_GET['cid'],$goods_total);
extract($parameter);
if(defined('VIEW_PAGE')||$_GET['page']<=1){
?>

<div style="padding-top:15px;">
<div class="goods_list_315">
<!--这里必须定义一个goods_items-->
<ul class="goods_items">
<?php }?>
<?php if(!empty($goods_list)){?>
<?php foreach($goods_list as $row){?>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:400px; "<?php }?>>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:370px; "<?php }?>>
<?php }?>
<div class="list-good">
<div class="left">
<a class="click_url" dd-href="?mod=jump&act=s8&iid=<?=iid_encode($row['data_id'])?>&url=" data-itemid="<?=$row['data_id']?>" isconvert=1 href="<?=$row['url']?>" target="_blank"><?=dd_html_img($row['img'],$row['title'],310)?>
<?php if($row['top']>0){?><span class="tuijian"></span><?php }?>
<?php if($row['is_starttime']){?>
<span class="yugao2"></span>
<?php }else{?>
<?php if($row['is_new']){?><span class="new-icon"></span><?php }?>
<?php }?>
<?php if($row['is_starttime']){?>
<?php }elseif($row['oversell']==1){?>
<div class="yimaiguang"></div>
<?php }elseif($row['is_endtime']){?>
<div class="end_time" title="于<?=$row['endtime']?>结束"></div>
<?php }?>
</a>
<div class="tp_ab">
	<?php if($row['price_man']>0){?>
	<div class="tp_bq tp_1 dd_cure">
        <a href="<?=$row['lq_url']?$row['lq_url']:'javascript:void(0)'?>" target="_blank"> <span class="span_1">满<?=$row['price_man']?>元</span><br /><span>减<?=$row['price_jian']?>元</span> </a>
    </div>
    <?php }?>
    <?php if($row['shouji_price']>0 && $row['shouji_price']<$row['discount_price']){?>
    <div class="tp_bq tp_2 erweima dd_cure"  id="<?=$row['id']?>&uid=<?=$dduser['id']?>" url="<?=$row['url']?>" youhui="<?=$row['discount_price']-$row['shouji_price']?>">
    	<div class="inline" style="color:#fff;">
            <span>手机买再省</span><br />
            <b class="span_1"><?=$row['discount_price']-$row['shouji_price']?>元</b>
        </div>
    </div>
    <?php }?>
    <?php if($row['is_fanli_ico']){?>
    <div class="tp_bq tp_3">
        <span>超级返利</span>
    </div>
    <?php }?>
</div>
<?php if($row['top']>0){?><div class="n_top"></div><?php }?>
</div>
<?php if($row['opca']){?>
<div class="opca"></div>
<?php }?>
<a href="<?=$row['url']?>" target="_blank"> <div class="jy_title">[包邮] <?=$row['title']?></div></a>
<div class="jy_nr">
<div class="jy_price">
	<div class="inblock">
	<?php if($row['is_starttime']){?>
<font color="#008800">¥</font><span><font color="#008800"><?php if($row['laiyuan_type']==3){?><?=number_format($row['discount_price'])?><?php }else{?><?=number_format($row['discount_price'],2)?><?php }?></font></span>
<?php }else{?>
¥<span><?php if($row['laiyuan_type']==3){?><?=number_format($row['discount_price'])?><?php }else{?><?=number_format($row['discount_price'],2)?><?php }?></span>

<?php }?>
    </div>
    <div class="inblock2">
			<div style="width:80px"> <span class="dazhe"><del>￥<?=$row['price']?></del></span></div>
    </div></div>
	<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<?php }else{?>
	<div class="jy_del">
 <div class="inblock guan" style="float:right; margin-right:10px">
	<div class="jy_w_buy" style=" margin-top:-33px;*margin-top:-26px;">
	<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i></div><?php }?>
            <?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i></div><?php }?>
            <?php if($row['laiyuan_type']==3){?><div title="京东商城" class="jd"><i></i></div><?php }?>
            <?php if($row['laiyuan_type']==4){?><div title="拍拍" class="paipai"><i></i></div><?php }?>
			  </div>  </div>
			  </div>  
<?php }?>
   <div class="inblock guan" style="float:right; margin-right:10px">
    
    	<div class="jy_w_buy" style=" margin-top:-33px;*margin-top:-25px;">
			<?php if($row['is_starttime']){?>
<div class="yishou2"><?=$row['starttime_tag']?>开始</div>
<?php }else{?>

<?php if($row['sell']){?>   <div class="yishou">已售<?=$row['sell']?>件</div> <?php }?>

<?php }?>
        </div>
    </div>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<div class="jy_del">
<?php if(FANLI==1&&$row['fanli']){?> <div class="f_money"><span class="fuhao" style="padding-top:5px">返</span><span class="f_num"><?=$row['fanli_je']?></span><span class="f_word">到手价<?php
$a=$row['discount_price'];
$b=$row['fanli_je'];
$fanliba=$a-$b;
echo $fanliba;
?></span></div><?php }else{?><div class="yfl">有返利</div>
                    <?php }?>

 <div class="inblock guan" style="float:right; margin-right:10px">
	<div class="jy_w_buy" style=" margin-top:-28px;*margin-top:-26px;">
	<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i></div><?php }?>
            <?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i></div><?php }?>
            <?php if($row['laiyuan_type']==3){?><div title="京东商城" class="jd"><i></i></div><?php }?>
            <?php if($row['laiyuan_type']==4){?><div title="拍拍" class="paipai"><i></i></div><?php }?>
			  </div>  </div>
			  </div>  <?php }?>
</div>
<a class="y-like my-like" title="<?=$row['is_shoucang']==1?'已收藏':'加入收藏'?>" data_id="<?=$row['id']?$row['id']:$row['data_id']?>">
	<span class="like-ico <?=$row['is_shoucang']==1?'l-active':''?>"></span>
</a>

</div>
 <a class="tejia click_url c_bgcolor" dd-href="?mod=jump&act=s8&iid=<?=iid_encode($row['data_id'])?>&url=" data-itemid="<?=$row['data_id']?>" isconvert=1 href="<?=$row['jump']?>" isconvert=1 title="去淘宝购买" target="_blank">去抢购</a>
</li>
<?php }?>
<?php }elseif(defined('VIEW_PAGE')){?>
       	<div class="empty_data">
          <div class="empty_ico">&nbsp;</div>
          <div class="empty_word">抱歉，没有找到相关商品。</div>
		  <div style="clear:both"></div>
        </div>
        <?php }?>
<?php if(defined('VIEW_PAGE')||$_GET['page']<=1){?>
</ul>
<div style="clear:both"></div>
</div></div>
<?php include(TPLPATH.'/inc/tdj.tpl.php');?>
<?php }?>



