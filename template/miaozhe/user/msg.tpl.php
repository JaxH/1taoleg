<?php
$parameter=act_user_msg($pagesize=10,$field="*");
extract($parameter);
$css[]=TPLURL."/inc/css/usercss.css";
include(TPLPATH."/inc/header.tpl.php");
?>
<style type="text/css">
table,table td,table th{border:1px solid #e1e1e1;border-collapse:collapse; height:50px; font-size:16px}
</style>
<div class="mainbody">
	<div class="mainbody1200">
    	<div class="adminmain">
    <?php include(TPLPATH."/user/top.tpl.php");?>
        	<div class="adminleft">
                <?php include(TPLPATH."/user/left.tpl.php");?>
            </div>
        	<div class="adminright">
                <?php include(TPLPATH."/user/notice.tpl.php");?>
                <div class="userdaohang">
                    <ul>
                    <li id="in"><a href="<?=u('user','msg',array('do'=>'in'))?>">收到的消息</a> </li>
                    <li id="out"><a href="<?=u('user','msg',array('do'=>'out'))?>">发出的消息</a> </li>
                    <li id="send"><a href="<?=u('user','msg',array('do'=>'send'))?>">联系客服</a> </li>
                    </ul>
                    <script>
                    $(function(){
					    $('.userdaohang li#<?=$do?>').addClass('userdaohang_xz');
					})
                    </script>
              	</div>
                <?php if($do=='in' || $do=='out'){?>
                <div class="admin_table" style="border:none; padding:0">
                
                <form>
      <input type="hidden" name="mod" value="user" /><input type="hidden" name="act" value="msg" /><input type="hidden" name="do" value="del" />
                    <table width="928" border="0" cellpadding="0" cellspacing="1">
                      <tr style="font-size:14px;">
                        <th width="50" height="26">&nbsp;</th>
                        <th width="50">选中</th>
                        <th>消息内容</th>
                        <th width="140">发送时间</th>
                        <th width="90">执行操作</th>
                      </tr>
                      <?php foreach($mgs_row as $r){?>
                      <tr>
                        <td height="33" align="center"><img src="<?=TPLURL?>/inc/images/msg<?=$r['see']?>.gif" width="14" height="10" /></td>
                        <td><input class="checkbox" type='checkbox' name='ids[]' value='<?=$r["id"]?>' id='content_<?=$r["id"]?>' /></td>
                        <td align="left"><a class="read" id="<?=$r["id"]?>" href="<?=u('ajax','get_msg',array('id'=>$r["id"]))?>"><?=utf_substr($r["content"],64)?>......</a></td>
                        <td><?=$r["addtime"]?></td>
                        <td><a class="read" id="<?=$r["id"]?>" href="<?=u('ajax','get_msg',array('id'=>$r["id"]))?>">阅读</a></td>
                      </tr>
                      <?php }?>
                    </table>
                    <div class="item" style=" margin-top:10px"><a href="javascript:selAll('.checkbox')">全选</a> <a href="javascript:selNone('.checkbox')">取消全选</a> <a href="javascript:selfan('.checkbox')">反选</a> <input type="submit" value="删除" onclick='return confirm("确定要删除?")' style="background:none; border:0px; cursor:pointer" /></div>
                    </form>
                    <div class="page" style="clear:both;"><?=pageft($total,$pagesize,u(MOD,ACT,array('do'=>$do)));?></div>
              </div>
              <?php }?>
                    <?php if($do=='send'){?>
                 <div class="admin_table" style="width:500; overflow:hidden"> <div class="admin_form1">
                <FORM onsubmit="if($('#content').val()==''){alert('内容不能为空');return false;}else{return true;}" method=post action="<?=u('user','msg',array('do'=>'save_send'))?>">
		  <LI style="LINE-HEIGHT: 40px; HEIGHT: 40px; CLEAR: both;width:570px; border-bottom:0px;"><LABEL>收件人：</LABEL><INPUT id="ddusername" size="60" type=text name="ddusername" style="width:300px;BORDER-BOTTOM: #ddd 1px solid; BORDER-LEFT: #ddd 1px solid; LINE-HEIGHT: 35px; HEIGHT: 35px; FONT-SIZE: 14px; background:#FDFCE8; BORDER-TOP: #ddd 1px solid; BORDER-RIGHT: #ddd 1px solid" value="   提交留言给客服" readonly="true" disabled="disabled">
		  </LI>
		  <div class="blank12px"></div>
		  <LI style="LINE-HEIGHT: 40px; HEIGHT: 170px; CLEAR: both; width:600px; border-bottom:0px;"><LABEL>内　容：</LABEL><TEXTAREA style=" HEIGHT: 160px; width:500px; BORDER-BOTTOM: #c9c9c9 1px solid; BORDER-LEFT: #c9c9c9 1px solid; LINE-HEIGHT: 26px; FONT-SIZE: 14px; BORDER-TOP: #c9c9c9 1px solid;padding:7px 0 0 10px; BORDER-RIGHT: #c9c9c9 1px solid"  rows=10 cols=50 name="content" id="content" onblur="checkcontent(document.getElementById('content').value);"></TEXTAREA> 
		  <LABEL id="ckcontent" style="WIDTH: 100px; COLOR: #f00">*</LABEL></LI>
		  	  <LI style="LINE-HEIGHT: 40px; margin-top:15px; HEIGHT: 40px; CLEAR: both;width:600px; border-bottom:0px;"><LABEL>验证码：</LABEL><INPUT name="captcha" type="text" id="captcha" size="6" maxlength="4" style="width:50px;BORDER-BOTTOM: #c9c9c9 1px solid; BORDER-LEFT: #c9c9c9 1px solid; LINE-HEIGHT: 25px; HEIGHT: 25px; FONT-SIZE: 12px; BORDER-TOP: #c9c9c9 1px solid; BORDER-RIGHT: #c9c9c9 1px solid" />&nbsp;&nbsp;<?=yzm()?>
		   <div class="blank12px"></div>
		  <LI style="LINE-HEIGHT: 40px; HEIGHT: 40px;margin-top:15px; CLEAR: both; border-bottom:0px; width:300px"><LABEL></LABEL><INPUT style="BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; BORDER-TOP: 0px; BORDER-RIGHT: 0px; margin-left:65px;"  class="bbtt2"  value=提交留言 type=submit>
		  </LI></FORM>
          	</div>	</div>
                    <?php }?>
              

              
            </div>
    	</div>
  </div>
</div>

<script>
$(function(){
    $('.read').jumpBox({  
	    title: '阅读站内信',
		LightBox:'show',
		height:400,
		width:400
    });
});
</script>

<?php include(TPLPATH."/inc/footer.tpl.php"); ?>