<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}

$parameter=act_wap_msg();
extract($parameter);
include(TPLPATH.'/inc/header_2.tpl.php');
?>
<div class="listHeader">
  <p> <b><?=$title?></b> <a href="javascript:;" onclick="history.back()" class="left">返回</a> <a href='<?=wap_l()?>' class="right">首页</a>  </p>
</div>
<!--b显示列表-->
<?php if(!empty($shuju_data)){?>
<div class="mc radius">
	<ul class="mu-l2w">
<?php foreach($shuju_data as $row){?>
<li style="padding: 10px;border-top: none;overflow: hidden; line-height: 1.6em;border-top: 1px dashed #DED6C9;"> 
  <span style="display: block;overflow: hidden;lear: both;padding: .22em 0;"><span><?=$row['content']?></span>
  <span class="pricecolor" style="display: block;margin-top:10px; color:#666"><?=$row['addtime']?></span></span> 
</li>
<?php }?>
        
			</ul>
</div>
<?=$dd_wap_class->page()?>
<?php }?>
<!-- E -->
<!--b 无数据显示-->
<?php if(empty($shuju_data)){?>
<div class="mc radius">
	<ul class="mu-l2w" ><div style=" width:185px; height:115px; margin:0 auto;"><img src="<?=TPLURL?>/inc/images/img_nocontent.png"/></div></ul>
</div>
<?php }?>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>