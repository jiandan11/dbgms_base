/*
 *	soColorPacker 1.0 
 *	made by bujichong 2012-01-04
 *	作者：不羁虫  2012-01-04
 *百度空间： http://hi.baidu.com/bujichong/
 *邮件地址：bujichong@163.com
 */
 (function(a){a.fn.extend({soColorPacker:function(c){c=a.extend({changeTarget:null,textChange:true,colorChange:1,selfBgChange:false,size:2,x:0,y:20,styleClass:null,callback:function(){}},c||{});function b(){var d=a('<div class="colorPackerBox"></div>');var g=["FF","CC","99","66","33","00"];var l=[],m="";for(var h=0;h<6;h++){m+='<div class="div_cellBox">';for(var f=0;f<6;f++){for(var e=0;e<6;e++){var n=g[h]+g[f]+g[e];m+='<span class="span_colorCell" style="background-color:#'+n+'" rel="#'+n+'"></span>'}}m+="</div>"}m+='<div class="overShowbox"><span class="span_overBg"></span><span class="span_overValue"></span><span class="span_close">关闭</span></div>';d.append(m);return d}return this.each(function(){var d;a.data(a(this).get(0),"colorPackSa",{hasColorPacker:false});a(this).click(function(h){var j=a(h.target);if(false==a.data(j.get(0),"colorPackSa").hasColorPacker){a.data(j.get(0),"colorPackSa",{hasColorPacker:true});d=b();a("body").append(d);if(a.fn.bgIframe){a(d).bgiframe()}if(c.styleClass){a(d).addClass(c.styleClass)}if(c.size==1){a(d).width(162);a(".div_cellBox",d).width(54);a(".span_colorCell",d).css({width:"8px",height:"8px"})}if(c.size==3){a(d).width(270);a(".div_cellBox",d).width(90);a(".span_colorCell",d).css({width:"14px",height:"14px"})}var g=j.findPosition();var f=(parseInt(c.x)?parseInt(c.x):0)+g[0];var k=(parseInt(c.y)?parseInt(c.y):0)+g[1];a(d).css({position:"absolute",left:f,top:k});var e;e=(c.changeTarget)?a(c.changeTarget):j;if(e.val().indexOf("#")==0){var i=e.val();a(".span_overBg",d).css("backgroundColor",i);a(".span_overValue",d).text(i)}a(".span_colorCell",d).bind("click",function(){var l=a(this).attr("rel");if(c.colorChange==1){e.css("color",l)}if(c.colorChange==2){e.css("backgroundColor",l)}if(c.selfBgChange){j.css("backgroundColor",l)}if(c.textChange){if(e.is("input")&&"text"==e.attr("type")){e.val(l)}else{e.text(l)}}c.callback({color:l});l=null;d.remove();d=null;a.data(j.get(0),"colorPackSa",{hasColorPacker:false})}).bind("mouseover",function(){var l=a(this).attr("rel");a(".span_overBg",d).css("backgroundColor",l);a(".span_overValue",d).text(l);l=null});a(".span_close",d).bind("click",function(){d.remove();d=null;a.data(j.get(0),"colorPackSa",{hasColorPacker:false})})}})})},findPosition:function(){var b=a(this).get(0);var c=curtop=0;if(b.offsetParent){do{c+=b.offsetLeft;curtop+=b.offsetTop}while(b=b.offsetParent);return[c,curtop]}else{return false}}})})(jQuery);
