<?php 
$article_all=$duoduo->select_all('type','*','tag="article" and pid="0" order by sort asc');
foreach($article_all as $k=>$v){
	if($v['id']==28 || $v['id']==1){
		continue;
	}
	$list_arr[$k]['title']=$v['title'];
	$list_arr[$k]['id']=$v['id'];
	$list_arr[$k]['url']=u('article','list',array('cid'=>$v['id']));
	$info_arr=$duoduo->select_all('type','*','tag="article" and pid="'.$v['id'].'" order by sort asc');
	foreach($info_arr as $l=>$r){
		$info_arr[$l]['url']=u('article','list',array('cid'=>$r['id']));
	}
	$list_arr[$k]['info']=$info_arr;
	
}
$help_arr=$duoduo->select_all('type','*','tag="article" and pid="1" order by sort asc');
foreach($help_arr as $l=>$r){
	$help_arr[$l]['url']=u('help','index',array('cid'=>$r['id']));
}
$type_name='热门文章';
$hotnew=$hotnews;
if(ACT=='view'){
	$type_name=$type[$article['cid']];
}
foreach($hotnew as $k=>$r){
	$hotnew[$k]['url']=u('article','view',array('id'=>$r['id']));
}
$about_url=u('about','index');
?>

<style>
.mall2qa ul
{
	padding-bottom:10px;
	padding-left:11px;
}
.mall2qa ul li.one
{
	margin:10px;
	font-weight:bold;
}
.mall2qa ul li
{
	margin-left:30px;
	margin-top:10px;
	width:208px;
}
</style>
<div class="news_txt_xg2">
      <div class="news_txt_xg_bt">
   <h3>文章分类</h3>
</div>
 <div class="mall2qas" style="background-image:none; height:auto;">
    <ul>
        <li class="one">帮助中心</li> <?php foreach($help_arr as $l){?>
      	 <li><a href="<?=$l['url']?>"><?=$l['title']?></a></li>
       <?php }?>
        
      <?php foreach($list_arr as $v){?>
        <li class="one"><a <?php if(empty($v['info'])){?> href="<?=$v['url']?>" <?php }?>><?=$v['title']?></a></li>
			<?php foreach($v['info'] as $l){?>
            <li><a href="<?=$l['url']?>"><?=$l['title']?></a></li>
            <?php }?>
        <?php }?>
        <li class="one"><a href="<?=$about_url?>">关于我们</a></li>
      </ul>
        </div>
    </div>
<!--Q&A结束-->
<?php if(ACT=='view' || ACT=='index'){?>
<div class="news_txt_xg">
      <div class="news_txt_xg_bt">
           <h3>推荐热门文章</h3>
      </div>
      <ul>
      <?php foreach($hotnew as $row){?>
        <li><a title="<?=$row['title']?>" href="<?=$row['url']?>"><?=$row['title']?></a></li>
      <?php }?>
      </ul>
      
    </div>
<?php }?>
<div style="margin-right:-7px; margin-top:10px"><?=AD(9)?></div></div>