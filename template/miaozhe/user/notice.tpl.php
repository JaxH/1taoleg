<?php
$notice=$duoduo->select_all('article','id,title','cid="26" order by id desc limit 10');
?>
<?php if(!empty($notice)){?>
<script src="js/jcarousellite_1.0.1.pack.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
	$("#user_notice").jCarouselLite({
		speed: 500,
		visible: 1,
		onMouse:true,
		scroll: 1,
		auto: 4000,
		vertical: true
	}); 	
});
</script>
<div class="adminright_gg" id="user_notice">
<ul>
  <?php foreach($notice as $not){?>
  <li>
    <div class="gonggaotubiao"></div>
    <b>网站公告：</b> <a style="text-decoration:underline; font-size:16px" href="<?=u('article','view',array('id'=>$not['id']))?>" target="_blank"><?=$not['title']?></a>
  </li>
  <?php }?>
</ul>

</div>
<?php }?>