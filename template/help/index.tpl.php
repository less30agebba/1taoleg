<?php
$parameter=act_help_index();
extract($parameter);
$css[]=TPLURL."/inc/css/help2.css";
include(TPLPATH.'/inc/header3.tpl.php');
?>
<script>
function addBorder(id){
	$('.helpright_help_qa_q').css('border','0px').next('div').css('background','none');
 	$('#'+id).next('div').css('border-bottom','#ff6699 2px solid').next('div').css('background','#ECF5FF');
}

var DOM = (document.getElementById) ? 1 : 0; 
var NS4 = (document.layers) ? 1 : 0; 
var IE4 = 0; 
if (document.all) { 
	IE4 = 1; 
	DOM = 0; 
} 
var win = window; 
var n = 0; 

function findInPage(str) { 
	var txt, i, found; 
	if (str == "") 
	return false; 
	if (DOM){ 
		win.find(str, false, true); 
		return true; 
	} 
	if (NS4) { 
		if (!win.find(str)) 
			while(win.find(str, false, true)) 
			n++; 
		else 
			n++; 
		if (n == 0) 
		alert("未找到指定内容."); 
	} 
	if (IE4) { 
		txt = win.document.body.createTextRange(); 
		for (i = 0; i <= n && (found = txt.findText(str)) != false; i++) { 
			txt.moveStart("character", 1); 
			txt.moveEnd("textedit"); 
		} 
		if (found) { 
			txt.moveStart("character", -1); 
			txt.findText(str); 
			txt.select(); 
			txt.scrollIntoView(); 
			n++; 
		} 
		else { 
			if (n > 0) { 
			n = 0; 
			findInPage(str); 
		} 
		else 
			alert("未找到指定内容."); 
		} 
	} 
	return false; 
} 
</script>
<div class="mainbody">
	<div class="mainbody1200">
    	<div class="helpmain">
        	<div class="helpleft">
                <div class="helpleft1">
                        <div class="helpmenu">
                        <div class="helpmenu_bt">
                            <div class="helpmenu_bt_font">帮助中心</div>
                            
                        </div>
                        <ul>
                          <?php foreach($help_types as $k=>$v){?>
                            <li><div class="adminmenu_a"><a href="<?=$v['url']?>"><?=$v['title']?></a></div></li>
                            <?php }?>
                          
                        </ul>
                        </div>
                </div> 	
                <div class="helpleft2">
                		<div class="helpmenu">
                        <div class="helpmenu_bt">
                            <div class="helpmenu_bt_font">在线客服</div>
                        </div>
                        <a target="_blank" id="kefu3"><div class="help_kf"></div></a>
                        <div class="help_txt">通过在线解答的方式为您提供咨询服务。</div>
                        </div>
                </div>
           </div>

        	<div class="helpright">
       	<div class="help_search">
	 <div class="vv">
	  <a href="<?=u('help','taobao')?>" alt="新手返利教程" target="_blank">淘宝返利教程？</a>
		 <a href="<?=u('help','mall')?>" alt="返利是怎么来的？" target="_blank">商城返利教程？</a>
                </div>
			</div>

                <div class="helpright_wenti">
                <h3>
                <?=$help_type[$cid]?>
                </h3>
                <ul>
                <?php foreach($article as $row){?>
                <li><a href="javascript:scroller('a<?=$row['id']?>',500,15);addBorder('a<?=$row['id']?>')"><?=$row['title']?></a></li>
                <?php }?>
                </ul>
                </div>
            
        	  <div class="helpright_help">
                	<div class="helpright_help_qa">
                    <?php foreach($article as $row){?>
                    <a name="a<?=$row['id']?>" id="a<?=$row['id']?>"></a>
                        <div class="helpright_help_qa_q"><div class="tubiao_ask"></div><p><?=$row['title']?></p><div class="tree_on"></div></div>
                        <div style="width:940px;"><div class="tubiao_answer"></div><div class="helpright_help_qa_a"><p><?=$row['content']?></p></div><div style="clear:both"></div></div>
                     <?php }?> 
                    </div>
             </div>

            </div>
        
        </div>
  </div>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>