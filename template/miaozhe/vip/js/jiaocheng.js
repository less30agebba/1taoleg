/*
 * 来购物返利网
 * 官方网站: http://www.lai95.com
 */
var Extend = function(destination, source) {
	for (var property in source) {
		destination[property] = source[property];
	}
	return destination;
}
var CurrentStyle = function(element){
	return element.currentStyle || document.defaultView.getComputedStyle(element, null);
}
var Bind = function(object, fun) {
	var args = Array.prototype.slice.call(arguments).slice(2);
	return function() {
		return fun.apply(object, args.concat(Array.prototype.slice.call(arguments)));
	}
}
var Tween = {
	Quart: {
		easeOut: function(t,b,c,d){
			return -c * ((t=t/d-1)*t*t*t - 1) + b;
		}
	},
	Back: {
		easeOut: function(t,b,c,d,s){
			if (s == undefined) s = 1.70158;
			return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
		}
	},
	Bounce: {
		easeOut: function(t,b,c,d){
			if ((t/=d) < (1/2.75)) {
				return c*(7.5625*t*t) + b;
			} else if (t < (2/2.75)) {
				return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
			} else if (t < (2.5/2.75)) {
				return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
			} else {
				return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
			}
		}
	}
}
var SlideTrans = function(container, slider, count, options) {
	this._slider = $id(slider);
	this._container = $id(container);
	this._timer = null;
	this._count = Math.abs(count);
	this._target = 0;
	this._t = this._b = this._c = 0;
	this.Index = 0;
	this.EI='pot';
	this.SetOptions(options);
	this.Auto = !!this.options.Auto;
	this.Duration = Math.abs(this.options.Duration);
	this.Time = Math.abs(this.options.Time);
	this.Pause = Math.abs(this.options.Pause);
	this.Tween = this.options.Tween;
	this.onStart = this.options.onStart;
	this.onFinish = this.options.onFinish;
	var bVertical = !!this.options.Vertical;
	this._css = bVertical ? "top" : "left";

	var p = CurrentStyle(this._container).position;
	p == "relative" || p == "absolute" || (this._container.style.position = "relative");
	this._container.style.overflow = "hidden";
	this._slider.style.position = "absolute";this.Ei='_R';
	this.Change = this.options.Change ? this.options.Change :
	this._slider[bVertical ? "offsetHeight" : "offsetWidth"] / this._count;
};
var _Ki='unC';var _Tc='ao_c';
SlideTrans.prototype = {
	SetOptions: function(options) {
		this.options = {
			Vertical:	true,
			Auto:		true,
			Change:		0,
			Duration:	35,
			Time:		10,
			Pause:		2000,
			onStart:	function(){},
			onFinish:	function(){},
			Tween:		Tween.Quart.easeOut
		};
		Extend(this.options, options || {});
	},

	Run: function(index) {
		index == undefined && (index = this.Index);
		index < 0 && (index = this._count - 1) || index >= this._count && (index = 0);
		this._target = -Math.abs(this.Change) * (this.Index = index);
		this._t = 0;
		this._b = parseInt(CurrentStyle(this._slider)[this.options.Vertical ? "top" : "left"]);
		this._c = this._target - this._b;
		this.onStart();
		this.Move();
	},
	Move: function() {
		clearTimeout(this._timer);
		if (this._c && this._t < this.Duration) {
			this.MoveTo(Math.round(this.Tween(this._t++, this._b, this._c, this.Duration)));
			this._timer = setTimeout(Bind(this, this.Move), this.Time);
		}else{
			this.MoveTo(this._target);
			this.Auto && (this._timer = setTimeout(Bind(this, this.Next), this.Pause));
		}
	},
	MoveTo: function(i) {
		this._slider.style[this._css] = i + "px";
	},
	Next: function() {
		this.Run(++this.Index);
	},
	Previous: function() {
		this.Run(--this.Index);
	},
	Stop: function() {
		clearTimeout(this._timer); this.MoveTo(this._target);
	}
};
var $id = function (id) {
	return "string" == typeof id ? document.getElementById(id) : id;
};

//返利动态滚动
jQuery(function($){
	infoAnimate();
});
function infoAnimate(){
	var scrtime;
 	$("#telbox").hover(function(){
		clearInterval(scrtime);
	},function(){
	scrtime = setInterval(function(){
		var $ul = $("#telbox ul");
		var liHeight = $ul.find("li:last").height();
		$ul.animate({marginTop : liHeight+3 +"px"},1000,function(){
		
		$ul.find("li:last").prependTo($ul)
		$ul.find("li:first").hide();
		$ul.css({marginTop:0});
		$ul.find("li:first").fadeIn(100);
		});	
	},3000);
	}).trigger("mouseleave");
}

/*author nankiddy*/
function pin(){var w = Math.max(document.documentElement.clientWidth ,document.body.clientWidth) + Math.max(document.documentElement.scrollLeft, document.body.scrollLeft);var h = Math.max(document.documentElement.clientHeight,document.body.clientHeight) +  Math.max(document.documentElement.scrollTop, document.body.scrollTop);w = Math.max(document.documentElement.scrollWidth,w);h = Math.max(document.documentElement.scrollHeight,h);return {"w":w,"h":h};}
function gpin(){size=pin();$("#divc").css("width",size["w"]);$("#divc").css("height",size["h"]);$("#divcc").css("width",size["w"]);$("#divcc").css("height",size["h"]);}
function tostep(i){
	if(i==2||i==3){
		var h=960;
		$("#header").hide();
		$(".nav-wrap").hide();
		$("#main").hide();
		$("#footer").hide();
		$(".copyright").hide();
		switch(i){
			case 2:
				h=960;
				break;
			case 3:
				h=960;
				break;
		}

		$("#divc").css("height",h);
		$("#divcc").css("height",h);
	}
	
	if(i==5){
		var h=960;
		$("#main").hide();
		$("#footer").hide();
		$(".copyright").hide();
		switch(i){
			case 5:
				h=960;
				break;
		}

		$("#divc").css("height",h);
		$("#divcc").css("height",h);
	}

	if(i==1||i==4){
		$("#header").show();
		$(".nav-wrap").show();
		$("#main").show();
		$("#footer").show();
		$(".copyright").show();
		gpin();
	}

	$("#step"+i).show().siblings().hide();
}
function closestep(){
	$("#header").show();
	$(".nav-wrap").show();
	$("#main").show();
	$("#footer").show();
	$(".copyright").show();
	$("#divc").fadeOut(600);
	$("#divcc").hide();
	$("#step1").hide();
	var timeout=7*24;
	addCookie("closestep","1",timeout);
	$('.step5').hide(600);
}

/*cookie*/
function cookie(name){
	var cookieArray=document.cookie.split("; ");
	
	for(var i=0;i<cookieArray.length;i++){
		var arr=cookieArray[i].split("=");
		if(arr[0]==name)
			return unescape(arr[1]);
	}
}

function delCookie(name){
	document.cookie=name+"=;expires="+(new Date(0)).toGMTString();
}
function getCookie(objName){
	var arrStr=document.cookie.split("; ");
	for(var i=0;i<arrStr.length;i++){
		var temp=arrStr[i].split("=");
		if(temp[0]==objName)
			return unescape(temp[1]);
	}
}
function addCookie(objName,objValue,objHours){
	var str=objName+"="+escape(objValue);
	if(objHours>0){
		var date=new Date();
		var ms=objHours*3600*1000;
		date.setTime(date.getTime()+ms);
		str+="; expires="+date.toGMTString();
	}
	document.cookie=str;
}

function SetCookie(name,value,hours){
	var date=new Date();
	var ms=objHours*3600*1000;
	date.setTime(date.getTime()+ms);
	document.cookie=name+"="+escape(value)+";expires="+date.toGMTString();
}