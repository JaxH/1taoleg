<?php
$taopid_arr=dd_get_cache('taopid');
if(isset($taopid_arr[CUR_WEB])){
	$pid=$taopid_arr[CUR_WEB]['pid'];
	$pid_url=HTTP.$taopid_arr[CUR_WEB]['url'];
}
else{
	$pid=$webset['taodianjin_pid'];
	$pid_url=TDJ_URL;
}
?>
<script type="text/javascript">
(function(win,doc){
	var s = doc.createElement("script"), h = doc.getElementsByTagName("head")[0];
    if (!win.alimamatk_show) {
        s.charset = "gbk";
        s.async = true;
		<?php if(file_exists(DDROOT.'/data/tkapi/tkapi.js')){?>
        s.src = "<?=SITEURL?>/data/tkapi/tkapi.js";
		<?php }else{?>
		s.src = "http://a.alimama.cn/tkapi.js";
		<?php }?>
        h.insertBefore(s, h.firstChild);
    };
    var o = {
        pid: "<?=$pid?>",
        appkey: "",
        unid: "<?=$dduser['id']?>",
        type: "click" 
    };
    win.alimamatk_onload = win.alimamatk_onload || [];
    win.alimamatk_onload.push(o);
})(window,document);

function get_click_url($t){
	var url=$t.attr('href');
	if(typeof url!='undefined' && url!='' && url.indexOf('g.click.taobao.com')>0 && url.indexOf('mod=jump')<0){
		if(!url.match(/^http/)){
			url='http:'+url;
		}
		var ddhref=$t.attr('dd-href');
		if(ddhref.indexOf('http')<0){
			<?php if(CURURL==SITEURL){?>
			ddhref='<?=CURURL?>/m/'+ddhref;
			<?php }else{?>
			ddhref='<?=CURURL?>/'+ddhref;
			<?php }?>
		}
		ddhref+=encodeURIComponent(url);
		$t.attr('href',ddhref);
	}
}

$(function(){
	var ua = navigator.userAgent.toLowerCase();
	if(ua.match(/MicroMessenger/i)=="micromessenger" && /iphone|ipad|ipod/.test(ua)) {
		$('.click_url[isconvert=1]').click(function() {
			get_click_url($(this));
		});
	}	   
	$('body').on('click','.click_url[isconvert=1]',function() {
		get_click_url($(this));
	});	
})
</script>