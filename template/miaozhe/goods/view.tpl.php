<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
$bankuai_cache=dd_get_cache('bankuai');
if($_GET['code']!=''){
	$bankuai_code=$_GET['code'];
}
else{
	$bankuai_code=$duoduo->select('goods','code','id='.(int)$_GET['id']);
}
$bankuai_tpl=$bankuai_cache[$bankuai_code]['bankuai_tpl'];
if(!is_dir(TPLPATH."/goods/".$bankuai_tpl))
{
	jump(u('index','index'),'板块样式'.$bankuai_tpl."不存在");
}
if($bankuai_tpl==''){
	$bankuai_tpl=$dd_tpl_data['bankuai_tpl'];
}
include(TPLPATH."/goods/".$bankuai_tpl."/view.tpl.php");
?>