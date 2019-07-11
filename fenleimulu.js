(function(a){
	a.fn.menuAim=function(c){this.each(function(){b.call(this,c)});return this};
	function b(c){
		var d=a(this),p=null,g=[],q=null,o=null,r=a.extend({
			rowSelector:"> li",submenuSelector:"*",submenuDirection:"right",tolerance:75,enter:a.noop,exit:a.noop,activate:a.noop,deactivate:a.noop,exitMenu:a.noop
		},c);
		var j=3,f=300;
		var e=function(s){g.push({x:s.pageX,y:s.pageY});if(g.length>j){g.shift()}};
		var n=function(){if(o){clearTimeout(o)}if(r.exitMenu(this)){if(p){r.deactivate(p)}p=null}};
		var l=function(){
			if(o){clearTimeout(o)}
			r.enter(this);
			h(this)
		},k=function(){
			r.exit(this)
		};
		var i=function(s){
			if(s==p){}
			if(p){r.deactivate(p)}
			r.activate(s);p=s
		};
		var h=function(t){
			var s=m();
			if(s){
				o=setTimeout(function(){h(t)},s)
			}else{
				i(t)
			}
		};
		var m=function(){
			if(!p||!a(p).is(r.submenuSelector)){return 0}
			var w=d.offset(),s={x:w.left,y:w.top-r.tolerance},D={x:w.left+d.outerWidth(),y:s.y},F={x:w.left,y:w.top+d.outerHeight()+r.tolerance},x={x:w.left+d.outerWidth(),y:F.y},y=g[g.length-1],C=g[0];
			if(!y){return 0}
			if(!C){C=y}
			if(C.x<w.left||C.x>x.x||C.y<w.top||C.y>x.y){return 0}
			if(q&&y.x==q.x&&y.y==q.y){return 0}
			function z(H,G){return(G.y-H.y)/(G.x-H.x)}
			var B=D,t=x;if(r.submenuDirection=="left"){
				B=F;t=s
			}else{
				if(r.submenuDirection=="below"){
					B=x;t=F
				}else{
					if(r.submenuDirection=="above"){B=s;t=D}
				}
			}
			var u=z(y,B),A=z(y,t),E=z(C,B),v=z(C,t);
			if(u<E&&A>v){q=y;return f}q=null;return 0
		};
		d.mouseleave(n).find(r.rowSelector).mouseenter(l).mouseleave(k);
		a(document).mousemove(e)
	}
})(jQuery);
(function($){
	var $cat=$(".tb-categories");
	var $menu=$(".tb-cat");
	var $menusub=$(".tb-subcat,.tb-subcat2");
	var isMenuShow=$cat.css("overflow")=="hidden";
	//if(!$('html').hasClass('mobile')){TopFocus.showOpenid();}
	$menu.menuAim({activate:activateSubmenu,deactivate:deactivateSubmenu});
	function activateSubmenu(row){var $row=$(row),$submenu=$("#"+$row.data("submenuId"));$submenu.css({display:"block"});$row.addClass("maintainHover");}
	function deactivateSubmenu(row){var $row=$(row),$submenu=$("#"+$row.data("submenuId"));$submenu.css("display","none");$row.removeClass("maintainHover");}
	isMenuShow?$cat.find("h3").find("i").css("overflow","visible"):function(){};
	var menushowFlag=false;
	$cat.click(
		function(){
			if(menushowFlag){
				isMenuShow?$cat.css("overflow","hidden"):function(){};menushowFlag=false;
			}else{
				isMenuShow?$cat.css("overflow","visible"):function(){};
				menushowFlag=true;
			}
		}).hover(function(){
		},function(){
			setTimeout(function(){
			$menusub.css("display","none");
		},20);
		$cat.find("li.maintainHover").removeClass("maintainHover");
	});
})(jQuery);
(function($) {
	var $btn = $(".switch");
	var $wrap = $btn.parent();
	$wrap.css("visibility", "visible");
	$btn.hover(function() {
		if (!$btn.hasClass("switchclose")) {
			$wrap.prop("class", "switch-wrap").addClass("switch-wrap-userhover");
		} else {
			$wrap.prop("class", "switch-wrap switch-wrap-chong").addClass("switch-wrap-chonghover");
		}
	},
	function() {
		if (!$btn.hasClass("switchclose")) {
			$wrap.prop("class", "switch-wrap");
		} else {
			$wrap.prop("class", "switch-wrap switch-wrap-chong");
		}
	})
	$btn.click(function(ev) {
		ev.preventDefault();
		if ($btn.hasClass("switchclose")) {
			$(".tb-fs-r").css('right','-247px');
			$(".tb-fs-perinfo").css('right','0');
			$btn.removeClass("switchclose").trigger("mouseenter");
		} else {
			$(".tb-fs-r").css('right','0');
			$(".tb-fs-perinfo").css('right','-250px');
			$btn.addClass("switchclose").trigger("mouseenter");
		}
	})
})(jQuery);