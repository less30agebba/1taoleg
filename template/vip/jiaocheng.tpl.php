<!--新手教程-->
<script src="<?=TPLURL?>/vip/js/jiaocheng.js" type="text/javascript"></script>
<div id="divc" style="display:none;position:absolute;top:0;left:0;z-index:1000;background-color:#000;filter:alpha(opacity=70);opacity:0.7;">&nbsp;
</div>
<div id="divcc" style="display:none;position:absolute;z-index:1000;top:0;left:0;">
    <div id="step1" style="display:none;position:relative;width:1000px;margin:0 auto;margin-top:125px; text-align:right;right:250px;">
        <img src="<?=TPLURL?>/vip/images/shipin/tao-1.png" border="0" usemap="#Map2">
<map name="Map2">
<area shape="rect" coords="275,196,417,247" href="javascript:closestep();void(0);">
</map>
  </div>
   
</div>
<script type="text/javascript">
if(getCookie('closestep')!=1){
    gpin();
    window.onresize=gpin;
    $("#divc").fadeIn(600);
    $("#divcc").show();
    $("#step1").show();
}
</script>