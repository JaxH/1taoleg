<?php
/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('ADMIN')){
	exit('Access Denied');
}
include(ADMINTPL.'/baobiao/statement.php');

$id_arr=$_GET['ids'];
if($id_arr==''){
    jump('-1','无效参数');
}
else{
	plugin_statement_update($id_arr);
    jump('-1','更新完成');
}
?>