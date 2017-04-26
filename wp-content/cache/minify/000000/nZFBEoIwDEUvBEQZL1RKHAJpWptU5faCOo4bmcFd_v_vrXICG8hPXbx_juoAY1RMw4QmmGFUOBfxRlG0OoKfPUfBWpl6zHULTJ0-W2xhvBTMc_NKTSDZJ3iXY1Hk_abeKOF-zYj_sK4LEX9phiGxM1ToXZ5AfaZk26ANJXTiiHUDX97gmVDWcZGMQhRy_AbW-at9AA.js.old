if(typeof tb_pathToImage!='string'){var tb_pathToImage=thickboxL10n.loadingAnimation;}
/*!!!!!!!!!!!!!!!! edit below this line at your own risk !!!!!!!!!!!!!!!!!!!!!!!*/
jQuery(document).ready(function(){tb_init('a.thickbox, area.thickbox, input.thickbox');imgLoader=new Image();imgLoader.src=tb_pathToImage;});function tb_init(domChunk){jQuery('body').on('click',domChunk,tb_click);}
function tb_click(){var t=this.title||this.name||null;var a=this.href||this.alt;var g=this.rel||false;tb_show(t,a,g);this.blur();return false;}
function tb_show(caption,url,imageGroup){try{if(typeof document.body.style.maxHeight==="undefined"){jQuery("body","html").css({height:"100%",width:"100%"});jQuery("html").css("overflow","hidden");if(document.getElementById("TB_HideSelect")===null){jQuery("body").append("<iframe id='TB_HideSelect'>"+thickboxL10n.noiframes+"</iframe><div id='TB_overlay'></div><div id='TB_window'></div>");jQuery("#TB_overlay").click(tb_remove);}}else{if(document.getElementById("TB_overlay")===null){jQuery("body").append("<div id='TB_overlay'></div><div id='TB_window'></div>");jQuery("#TB_overlay").click(tb_remove);jQuery('body').addClass('modal-open');}}
if(tb_detectMacXFF()){jQuery("#TB_overlay").addClass("TB_overlayMacFFBGHack");}else{jQuery("#TB_overlay").addClass("TB_overlayBG");}
if(caption===null){caption="";}
jQuery("body").append("<div id='TB_load'><img src='"+imgLoader.src+"' width='208' /></div>");jQuery('#TB_load').show();var baseURL;if(url.indexOf("?")!==-1){baseURL=url.substr(0,url.indexOf("?"));}else{baseURL=url;}
var urlString=/\.jpg$|\.jpeg$|\.png$|\.gif$|\.bmp$/;var urlType=baseURL.toLowerCase().match(urlString);if(urlType=='.jpg'||urlType=='.jpeg'||urlType=='.png'||urlType=='.gif'||urlType=='.bmp'){TB_PrevCaption="";TB_PrevURL="";TB_PrevHTML="";TB_NextCaption="";TB_NextURL="";TB_NextHTML="";TB_imageCount="";TB_FoundURL=false;if(imageGroup){TB_TempArray=jQuery("a[rel="+imageGroup+"]").get();for(TB_Counter=0;((TB_Counter<TB_TempArray.length)&&(TB_NextHTML===""));TB_Counter++){var urlTypeTemp=TB_TempArray[TB_Counter].href.toLowerCase().match(urlString);if(!(TB_TempArray[TB_Counter].href==url)){if(TB_FoundURL){TB_NextCaption=TB_TempArray[TB_Counter].title;TB_NextURL=TB_TempArray[TB_Counter].href;TB_NextHTML="<span id='TB_next'>&nbsp;&nbsp;<a href='#'>"+thickboxL10n.next+"</a></span>";}else{TB_PrevCaption=TB_TempArray[TB_Counter].title;TB_PrevURL=TB_TempArray[TB_Counter].href;TB_PrevHTML="<span id='TB_prev'>&nbsp;&nbsp;<a href='#'>"+thickboxL10n.prev+"</a></span>";}}else{TB_FoundURL=true;TB_imageCount=thickboxL10n.image+' '+(TB_Counter+1)+' '+thickboxL10n.of+' '+(TB_TempArray.length);}}}
imgPreloader=new Image();imgPreloader.onload=function(){imgPreloader.onload=null;var pagesize=tb_getPageSize();var x=pagesize[0]-150;var y=pagesize[1]-150;var imageWidth=imgPreloader.width;var imageHeight=imgPreloader.height;if(imageWidth>x){imageHeight=imageHeight*(x/imageWidth);imageWidth=x;if(imageHeight>y){imageWidth=imageWidth*(y/imageHeight);imageHeight=y;}}else if(imageHeight>y){imageWidth=imageWidth*(y/imageHeight);imageHeight=y;if(imageWidth>x){imageHeight=imageHeight*(x/imageWidth);imageWidth=x;}}
TB_WIDTH=imageWidth+30;TB_HEIGHT=imageHeight+60;jQuery("#TB_window").append("<a href='' id='TB_ImageOff'><span class='screen-reader-text'>"+thickboxL10n.close+"</span><img id='TB_Image' src='"+url+"' width='"+imageWidth+"' height='"+imageHeight+"' alt='"+caption+"'/></a>"+"<div id='TB_caption'>"+caption+"<div id='TB_secondLine'>"+TB_imageCount+TB_PrevHTML+TB_NextHTML+"</div></div><div id='TB_closeWindow'><a href='#' id='TB_closeWindowButton'><span class='screen-reader-text'>"+thickboxL10n.close+"</span><div class='tb-close-icon'></div></a></div>");jQuery("#TB_closeWindowButton").click(tb_remove);if(!(TB_PrevHTML==="")){function goPrev(){if(jQuery(document).unbind("click",goPrev)){jQuery(document).unbind("click",goPrev);}
jQuery("#TB_window").remove();jQuery("body").append("<div id='TB_window'></div>");tb_show(TB_PrevCaption,TB_PrevURL,imageGroup);return false;}
jQuery("#TB_prev").click(goPrev);}
if(!(TB_NextHTML==="")){function goNext(){jQuery("#TB_window").remove();jQuery("body").append("<div id='TB_window'></div>");tb_show(TB_NextCaption,TB_NextURL,imageGroup);return false;}
jQuery("#TB_next").click(goNext);}
jQuery(document).bind('keydown.thickbox',function(e){if(e.which==27){tb_remove();}else if(e.which==190){if(!(TB_NextHTML=="")){jQuery(document).unbind('thickbox');goNext();}}else if(e.which==188){if(!(TB_PrevHTML=="")){jQuery(document).unbind('thickbox');goPrev();}}
return false;});tb_position();jQuery("#TB_load").remove();jQuery("#TB_ImageOff").click(tb_remove);jQuery("#TB_window").css({'visibility':'visible'});};imgPreloader.src=url;}else{var queryString=url.replace(/^[^\?]+\??/,'');var params=tb_parseQuery(queryString);TB_WIDTH=(params['width']*1)+30||630;TB_HEIGHT=(params['height']*1)+40||440;ajaxContentW=TB_WIDTH-30;ajaxContentH=TB_HEIGHT-45;if(url.indexOf('TB_iframe')!=-1){urlNoQuery=url.split('TB_');jQuery("#TB_iframeContent").remove();if(params['modal']!="true"){jQuery("#TB_window").append("<div id='TB_title'><div id='TB_ajaxWindowTitle'>"+caption+"</div><div id='TB_closeAjaxWindow'><a href='#' id='TB_closeWindowButton'><span class='screen-reader-text'>"+thickboxL10n.close+"</span><div class='tb-close-icon'></div></a></div></div><iframe frameborder='0' hspace='0' src='"+urlNoQuery[0]+"' id='TB_iframeContent' name='TB_iframeContent"+Math.round(Math.random()*1000)+"' onload='tb_showIframe()' style='width:"+(ajaxContentW+29)+"px;height:"+(ajaxContentH+17)+"px;' >"+thickboxL10n.noiframes+"</iframe>");}else{jQuery("#TB_overlay").unbind();jQuery("#TB_window").append("<iframe frameborder='0' hspace='0' src='"+urlNoQuery[0]+"' id='TB_iframeContent' name='TB_iframeContent"+Math.round(Math.random()*1000)+"' onload='tb_showIframe()' style='width:"+(ajaxContentW+29)+"px;height:"+(ajaxContentH+17)+"px;'>"+thickboxL10n.noiframes+"</iframe>");}}else{if(jQuery("#TB_window").css("visibility")!="visible"){if(params['modal']!="true"){jQuery("#TB_window").append("<div id='TB_title'><div id='TB_ajaxWindowTitle'>"+caption+"</div><div id='TB_closeAjaxWindow'><a href='#' id='TB_closeWindowButton'><div class='tb-close-icon'></div></a></div></div><div id='TB_ajaxContent' style='width:"+ajaxContentW+"px;height:"+ajaxContentH+"px'></div>");}else{jQuery("#TB_overlay").unbind();jQuery("#TB_window").append("<div id='TB_ajaxContent' class='TB_modal' style='width:"+ajaxContentW+"px;height:"+ajaxContentH+"px;'></div>");}}else{jQuery("#TB_ajaxContent")[0].style.width=ajaxContentW+"px";jQuery("#TB_ajaxContent")[0].style.height=ajaxContentH+"px";jQuery("#TB_ajaxContent")[0].scrollTop=0;jQuery("#TB_ajaxWindowTitle").html(caption);}}
jQuery("#TB_closeWindowButton").click(tb_remove);if(url.indexOf('TB_inline')!=-1){jQuery("#TB_ajaxContent").append(jQuery('#'+params['inlineId']).children());jQuery("#TB_window").bind('tb_unload',function(){jQuery('#'+params['inlineId']).append(jQuery("#TB_ajaxContent").children());});tb_position();jQuery("#TB_load").remove();jQuery("#TB_window").css({'visibility':'visible'});}else if(url.indexOf('TB_iframe')!=-1){tb_position();jQuery("#TB_load").remove();jQuery("#TB_window").css({'visibility':'visible'});}else{jQuery("#TB_ajaxContent").load(url+="&random="+(new Date().getTime()),function(){tb_position();jQuery("#TB_load").remove();tb_init("#TB_ajaxContent a.thickbox");jQuery("#TB_window").css({'visibility':'visible'});});}}
if(!params['modal']){jQuery(document).bind('keydown.thickbox',function(e){if(e.which==27){tb_remove();return false;}});}}catch(e){}}
function tb_showIframe(){jQuery("#TB_load").remove();jQuery("#TB_window").css({'visibility':'visible'});}
function tb_remove(){jQuery("#TB_imageOff").unbind("click");jQuery("#TB_closeWindowButton").unbind("click");jQuery("#TB_window").fadeOut("fast",function(){jQuery('#TB_window,#TB_overlay,#TB_HideSelect').trigger("tb_unload").unbind().remove();});jQuery('body').removeClass('modal-open');jQuery("#TB_load").remove();if(typeof document.body.style.maxHeight=="undefined"){jQuery("body","html").css({height:"auto",width:"auto"});jQuery("html").css("overflow","");}
jQuery(document).unbind('.thickbox');return false;}
function tb_position(){var isIE6=typeof document.body.style.maxHeight==="undefined";jQuery("#TB_window").css({marginLeft:'-'+parseInt((TB_WIDTH/2),10)+'px',width:TB_WIDTH+'px'});if(!isIE6){jQuery("#TB_window").css({marginTop:'-'+parseInt((TB_HEIGHT/2),10)+'px'});}}
function tb_parseQuery(query){var Params={};if(!query){return Params;}
var Pairs=query.split(/[;&]/);for(var i=0;i<Pairs.length;i++){var KeyVal=Pairs[i].split('=');if(!KeyVal||KeyVal.length!=2){continue;}
var key=unescape(KeyVal[0]);var val=unescape(KeyVal[1]);val=val.replace(/\+/g,' ');Params[key]=val;}
return Params;}
function tb_getPageSize(){var de=document.documentElement;var w=window.innerWidth||self.innerWidth||(de&&de.clientWidth)||document.body.clientWidth;var h=window.innerHeight||self.innerHeight||(de&&de.clientHeight)||document.body.clientHeight;arrayPageSize=[w,h];return arrayPageSize;}
function tb_detectMacXFF(){var userAgent=navigator.userAgent.toLowerCase();if(userAgent.indexOf('mac')!=-1&&userAgent.indexOf('firefox')!=-1){return true;}};(function($){var body=$('body'),_window=$(window);$(function(){if(body.is('.sidebar')){var sidebar=$('#secondary .widget-area'),secondary=(0==sidebar.length)?-40:sidebar.height(),margin=$('#tertiary .widget-area').height()-$('#content').height()-secondary;if(margin>0&&_window.innerWidth()>999)
$('#colophon').css('margin-top',margin+'px');}});(function(){var nav=$('#site-navigation'),button,menu;if(!nav)
return;button=nav.find('.menu-toggle');if(!button)
return;menu=nav.find('.nav-menu');if(!menu||!menu.children().length){button.hide();return;}
$('.menu-toggle').on('click.josephketner',function(){nav.toggleClass('toggled-on');});})();_window.on('hashchange.josephketner',function(){var element=document.getElementById(location.hash.substring(1));if(element){if(!/^(?:a|select|input|button|textarea)$/i.test(element.tagName))
element.tabIndex=-1;element.focus();}});if($.isFunction($.fn.masonry)){var columnWidth=body.is('.sidebar')?228:245;$('#secondary .widget-area').masonry({itemSelector:'.widget',columnWidth:columnWidth,gutterWidth:20,isRTL:body.is('.rtl')});}})(jQuery);;(function(e){"use strict";function t(e){return(e||"").toLowerCase()}var i="20130725";e.fn.cycle=function(i){var n;return 0!==this.length||e.isReady?this.each(function(){var n,s,o,c,r=e(this),l=e.fn.cycle.log;if(!r.data("cycle.opts")){(r.data("cycle-log")===!1||i&&i.log===!1||s&&s.log===!1)&&(l=e.noop),l("--c2 init--"),n=r.data();for(var a in n)n.hasOwnProperty(a)&&/^cycle[A-Z]+/.test(a)&&(c=n[a],o=a.match(/^cycle(.*)/)[1].replace(/^[A-Z]/,t),l(o+":",c,"("+typeof c+")"),n[o]=c);s=e.extend({},e.fn.cycle.defaults,n,i||{}),s.timeoutId=0,s.paused=s.paused||!1,s.container=r,s._maxZ=s.maxZ,s.API=e.extend({_container:r},e.fn.cycle.API),s.API.log=l,s.API.trigger=function(e,t){return s.container.trigger(e,t),s.API},r.data("cycle.opts",s),r.data("cycle.API",s.API),s.API.trigger("cycle-bootstrap",[s,s.API]),s.API.addInitialSlides(),s.API.preInitSlideshow(),s.slides.length&&s.API.initSlideshow()}}):(n={s:this.selector,c:this.context},e.fn.cycle.log("requeuing slideshow (dom not ready)"),e(function(){e(n.s,n.c).cycle(i)}),this)},e.fn.cycle.API={opts:function(){return this._container.data("cycle.opts")},addInitialSlides:function(){var t=this.opts(),i=t.slides;t.slideCount=0,t.slides=e(),i=i.jquery?i:t.container.find(i),t.random&&i.sort(function(){return Math.random()-.5}),t.API.add(i)},preInitSlideshow:function(){var t=this.opts();t.API.trigger("cycle-pre-initialize",[t]);var i=e.fn.cycle.transitions[t.fx];i&&e.isFunction(i.preInit)&&i.preInit(t),t._preInitialized=!0},postInitSlideshow:function(){var t=this.opts();t.API.trigger("cycle-post-initialize",[t]);var i=e.fn.cycle.transitions[t.fx];i&&e.isFunction(i.postInit)&&i.postInit(t)},initSlideshow:function(){var t,i=this.opts(),n=i.container;i.API.calcFirstSlide(),"static"==i.container.css("position")&&i.container.css("position","relative"),e(i.slides[i.currSlide]).css("opacity",1).show(),i.API.stackSlides(i.slides[i.currSlide],i.slides[i.nextSlide],!i.reverse),i.pauseOnHover&&(i.pauseOnHover!==!0&&(n=e(i.pauseOnHover)),n.hover(function(){i.API.pause(!0)},function(){i.API.resume(!0)})),i.timeout&&(t=i.API.getSlideOpts(i.nextSlide),i.API.queueTransition(t,t.timeout+i.delay)),i._initialized=!0,i.API.updateView(!0),i.API.trigger("cycle-initialized",[i]),i.API.postInitSlideshow()},pause:function(t){var i=this.opts(),n=i.API.getSlideOpts(),s=i.hoverPaused||i.paused;t?i.hoverPaused=!0:i.paused=!0,s||(i.container.addClass("cycle-paused"),i.API.trigger("cycle-paused",[i]).log("cycle-paused"),n.timeout&&(clearTimeout(i.timeoutId),i.timeoutId=0,i._remainingTimeout-=e.now()-i._lastQueue,(0>i._remainingTimeout||isNaN(i._remainingTimeout))&&(i._remainingTimeout=void 0)))},resume:function(e){var t=this.opts(),i=!t.hoverPaused&&!t.paused;e?t.hoverPaused=!1:t.paused=!1,i||(t.container.removeClass("cycle-paused"),0===t.slides.filter(":animated").length&&t.API.queueTransition(t.API.getSlideOpts(),t._remainingTimeout),t.API.trigger("cycle-resumed",[t,t._remainingTimeout]).log("cycle-resumed"))},add:function(t,i){var n,s=this.opts(),o=s.slideCount,c=!1;"string"==e.type(t)&&(t=e.trim(t)),e(t).each(function(){var t,n=e(this);i?s.container.prepend(n):s.container.append(n),s.slideCount++,t=s.API.buildSlideOpts(n),s.slides=i?e(n).add(s.slides):s.slides.add(n),s.API.initSlide(t,n,--s._maxZ),n.data("cycle.opts",t),s.API.trigger("cycle-slide-added",[s,t,n])}),s.API.updateView(!0),c=s._preInitialized&&2>o&&s.slideCount>=1,c&&(s._initialized?s.timeout&&(n=s.slides.length,s.nextSlide=s.reverse?n-1:1,s.timeoutId||s.API.queueTransition(s)):s.API.initSlideshow())},calcFirstSlide:function(){var e,t=this.opts();e=parseInt(t.startingSlide||0,10),(e>=t.slides.length||0>e)&&(e=0),t.currSlide=e,t.reverse?(t.nextSlide=e-1,0>t.nextSlide&&(t.nextSlide=t.slides.length-1)):(t.nextSlide=e+1,t.nextSlide==t.slides.length&&(t.nextSlide=0))},calcNextSlide:function(){var e,t=this.opts();t.reverse?(e=0>t.nextSlide-1,t.nextSlide=e?t.slideCount-1:t.nextSlide-1,t.currSlide=e?0:t.nextSlide+1):(e=t.nextSlide+1==t.slides.length,t.nextSlide=e?0:t.nextSlide+1,t.currSlide=e?t.slides.length-1:t.nextSlide-1)},calcTx:function(t,i){var n,s=t;return i&&s.manualFx&&(n=e.fn.cycle.transitions[s.manualFx]),n||(n=e.fn.cycle.transitions[s.fx]),n||(n=e.fn.cycle.transitions.fade,s.API.log('Transition "'+s.fx+'" not found.  Using fade.')),n},prepareTx:function(e,t){var i,n,s,o,c,r=this.opts();return 2>r.slideCount?(r.timeoutId=0,void 0):(!e||r.busy&&!r.manualTrump||(r.API.stopTransition(),r.busy=!1,clearTimeout(r.timeoutId),r.timeoutId=0),r.busy||(0!==r.timeoutId||e)&&(n=r.slides[r.currSlide],s=r.slides[r.nextSlide],o=r.API.getSlideOpts(r.nextSlide),c=r.API.calcTx(o,e),r._tx=c,e&&void 0!==o.manualSpeed&&(o.speed=o.manualSpeed),r.nextSlide!=r.currSlide&&(e||!r.paused&&!r.hoverPaused&&r.timeout)?(r.API.trigger("cycle-before",[o,n,s,t]),c.before&&c.before(o,n,s,t),i=function(){r.busy=!1,r.container.data("cycle.opts")&&(c.after&&c.after(o,n,s,t),r.API.trigger("cycle-after",[o,n,s,t]),r.API.queueTransition(o),r.API.updateView(!0))},r.busy=!0,c.transition?c.transition(o,n,s,t,i):r.API.doTransition(o,n,s,t,i),r.API.calcNextSlide(),r.API.updateView()):r.API.queueTransition(o)),void 0)},doTransition:function(t,i,n,s,o){var c=t,r=e(i),l=e(n),a=function(){l.animate(c.animIn||{opacity:1},c.speed,c.easeIn||c.easing,o)};l.css(c.cssBefore||{}),r.animate(c.animOut||{},c.speed,c.easeOut||c.easing,function(){r.css(c.cssAfter||{}),c.sync||a()}),c.sync&&a()},queueTransition:function(t,i){var n=this.opts(),s=void 0!==i?i:t.timeout;return 0===n.nextSlide&&0===--n.loop?(n.API.log("terminating; loop=0"),n.timeout=0,s?setTimeout(function(){n.API.trigger("cycle-finished",[n])},s):n.API.trigger("cycle-finished",[n]),n.nextSlide=n.currSlide,void 0):(s&&(n._lastQueue=e.now(),void 0===i&&(n._remainingTimeout=t.timeout),n.paused||n.hoverPaused||(n.timeoutId=setTimeout(function(){n.API.prepareTx(!1,!n.reverse)},s))),void 0)},stopTransition:function(){var e=this.opts();e.slides.filter(":animated").length&&(e.slides.stop(!1,!0),e.API.trigger("cycle-transition-stopped",[e])),e._tx&&e._tx.stopTransition&&e._tx.stopTransition(e)},advanceSlide:function(e){var t=this.opts();return clearTimeout(t.timeoutId),t.timeoutId=0,t.nextSlide=t.currSlide+e,0>t.nextSlide?t.nextSlide=t.slides.length-1:t.nextSlide>=t.slides.length&&(t.nextSlide=0),t.API.prepareTx(!0,e>=0),!1},buildSlideOpts:function(i){var n,s,o=this.opts(),c=i.data()||{};for(var r in c)c.hasOwnProperty(r)&&/^cycle[A-Z]+/.test(r)&&(n=c[r],s=r.match(/^cycle(.*)/)[1].replace(/^[A-Z]/,t),o.API.log("["+(o.slideCount-1)+"]",s+":",n,"("+typeof n+")"),c[s]=n);c=e.extend({},e.fn.cycle.defaults,o,c),c.slideNum=o.slideCount;try{delete c.API,delete c.slideCount,delete c.currSlide,delete c.nextSlide,delete c.slides}catch(l){}return c},getSlideOpts:function(t){var i=this.opts();void 0===t&&(t=i.currSlide);var n=i.slides[t],s=e(n).data("cycle.opts");return e.extend({},i,s)},initSlide:function(t,i,n){var s=this.opts();i.css(t.slideCss||{}),n>0&&i.css("zIndex",n),isNaN(t.speed)&&(t.speed=e.fx.speeds[t.speed]||e.fx.speeds._default),t.sync||(t.speed=t.speed/2),i.addClass(s.slideClass)},updateView:function(e,t){var i=this.opts();if(i._initialized){var n=i.API.getSlideOpts(),s=i.slides[i.currSlide];!e&&t!==!0&&(i.API.trigger("cycle-update-view-before",[i,n,s]),0>i.updateView)||(i.slideActiveClass&&i.slides.removeClass(i.slideActiveClass).eq(i.currSlide).addClass(i.slideActiveClass),e&&i.hideNonActive&&i.slides.filter(":not(."+i.slideActiveClass+")").hide(),i.API.trigger("cycle-update-view",[i,n,s,e]),e&&i.API.trigger("cycle-update-view-after",[i,n,s]))}},getComponent:function(t){var i=this.opts(),n=i[t];return"string"==typeof n?/^\s*[\>|\+|~]/.test(n)?i.container.find(n):e(n):n.jquery?n:e(n)},stackSlides:function(t,i,n){var s=this.opts();t||(t=s.slides[s.currSlide],i=s.slides[s.nextSlide],n=!s.reverse),e(t).css("zIndex",s.maxZ);var o,c=s.maxZ-2,r=s.slideCount;if(n){for(o=s.currSlide+1;r>o;o++)e(s.slides[o]).css("zIndex",c--);for(o=0;s.currSlide>o;o++)e(s.slides[o]).css("zIndex",c--)}else{for(o=s.currSlide-1;o>=0;o--)e(s.slides[o]).css("zIndex",c--);for(o=r-1;o>s.currSlide;o--)e(s.slides[o]).css("zIndex",c--)}e(i).css("zIndex",s.maxZ-1)},getSlideIndex:function(e){return this.opts().slides.index(e)}},e.fn.cycle.log=function(){window.console&&console.log&&console.log("[cycle2] "+Array.prototype.join.call(arguments," "))},e.fn.cycle.version=function(){return"Cycle2: "+i},e.fn.cycle.transitions={custom:{},none:{before:function(e,t,i,n){e.API.stackSlides(i,t,n),e.cssBefore={opacity:1,display:"block"}}},fade:{before:function(t,i,n,s){var o=t.API.getSlideOpts(t.nextSlide).slideCss||{};t.API.stackSlides(i,n,s),t.cssBefore=e.extend(o,{opacity:0,display:"block"}),t.animIn={opacity:1},t.animOut={opacity:0}}},fadeout:{before:function(t,i,n,s){var o=t.API.getSlideOpts(t.nextSlide).slideCss||{};t.API.stackSlides(i,n,s),t.cssBefore=e.extend(o,{opacity:1,display:"block"}),t.animOut={opacity:0}}},scrollHorz:{before:function(e,t,i,n){e.API.stackSlides(t,i,n);var s=e.container.css("overflow","hidden").width();e.cssBefore={left:n?s:-s,top:0,opacity:1,display:"block"},e.cssAfter={zIndex:e._maxZ-2,left:0},e.animIn={left:0},e.animOut={left:n?-s:s}}}},e.fn.cycle.defaults={allowWrap:!0,autoSelector:".cycle-slideshow[data-cycle-auto-init!=false]",delay:0,easing:null,fx:"fade",hideNonActive:!0,loop:0,manualFx:void 0,manualSpeed:void 0,manualTrump:!0,maxZ:100,pauseOnHover:!1,reverse:!1,slideActiveClass:"cycle-slide-active",slideClass:"cycle-slide",slideCss:{position:"absolute",top:0,left:0},slides:"> img",speed:500,startingSlide:0,sync:!0,timeout:4e3,updateView:-1},e(document).ready(function(){e(e.fn.cycle.defaults.autoSelector).cycle()})})(jQuery),function(e){"use strict";function t(t,n){var s,o,c,r=n.autoHeight;if("container"==r)o=e(n.slides[n.currSlide]).outerHeight(),n.container.height(o);else if(n._autoHeightRatio)n.container.height(n.container.width()/n._autoHeightRatio);else if("calc"===r||"number"==e.type(r)&&r>=0){if(c="calc"===r?i(t,n):r>=n.slides.length?0:r,c==n._sentinelIndex)return;n._sentinelIndex=c,n._sentinel&&n._sentinel.remove(),s=e(n.slides[c].cloneNode(!0)),s.removeAttr("id name rel").find("[id],[name],[rel]").removeAttr("id name rel"),s.css({position:"static",visibility:"hidden",display:"block"}).prependTo(n.container).addClass("cycle-sentinel cycle-slide").removeClass("cycle-slide-active"),s.find("*").css("visibility","hidden"),n._sentinel=s}}function i(t,i){var n=0,s=-1;return i.slides.each(function(t){var i=e(this).height();i>s&&(s=i,n=t)}),n}function n(t,i,n,s){var o=e(s).outerHeight(),c=i.sync?i.speed/2:i.speed;i.container.animate({height:o},c)}function s(i,o){o._autoHeightOnResize&&(e(window).off("resize orientationchange",o._autoHeightOnResize),o._autoHeightOnResize=null),o.container.off("cycle-slide-added cycle-slide-removed",t),o.container.off("cycle-destroyed",s),o.container.off("cycle-before",n),o._sentinel&&(o._sentinel.remove(),o._sentinel=null)}e.extend(e.fn.cycle.defaults,{autoHeight:0}),e(document).on("cycle-initialized",function(i,o){function c(){t(i,o)}var r,l=o.autoHeight,a=e.type(l),d=null;("string"===a||"number"===a)&&(o.container.on("cycle-slide-added cycle-slide-removed",t),o.container.on("cycle-destroyed",s),"container"==l?o.container.on("cycle-before",n):"string"===a&&/\d+\:\d+/.test(l)&&(r=l.match(/(\d+)\:(\d+)/),r=r[1]/r[2],o._autoHeightRatio=r),"number"!==a&&(o._autoHeightOnResize=function(){clearTimeout(d),d=setTimeout(c,50)},e(window).on("resize orientationchange",o._autoHeightOnResize)),setTimeout(c,30))})}(jQuery),function(e){"use strict";e.extend(e.fn.cycle.defaults,{caption:"> .cycle-caption",captionTemplate:"{{slideNum}} / {{slideCount}}",overlay:"> .cycle-overlay",overlayTemplate:"<div>{{title}}</div><div>{{desc}}</div>",captionModule:"caption"}),e(document).on("cycle-update-view",function(t,i,n,s){"caption"===i.captionModule&&e.each(["caption","overlay"],function(){var e=this,t=n[e+"Template"],o=i.API.getComponent(e);o.length&&t?(o.html(i.API.tmpl(t,n,i,s)),o.show()):o.hide()})}),e(document).on("cycle-destroyed",function(t,i){var n;e.each(["caption","overlay"],function(){var e=this,t=i[e+"Template"];i[e]&&t&&(n=i.API.getComponent("caption"),n.empty())})})}(jQuery),function(e){"use strict";var t=e.fn.cycle;e.fn.cycle=function(i){var n,s,o,c=e.makeArray(arguments);return"number"==e.type(i)?this.cycle("goto",i):"string"==e.type(i)?this.each(function(){var r;return n=i,o=e(this).data("cycle.opts"),void 0===o?(t.log('slideshow must be initialized before sending commands; "'+n+'" ignored'),void 0):(n="goto"==n?"jump":n,s=o.API[n],e.isFunction(s)?(r=e.makeArray(c),r.shift(),s.apply(o.API,r)):(t.log("unknown command: ",n),void 0))}):t.apply(this,arguments)},e.extend(e.fn.cycle,t),e.extend(t.API,{next:function(){var e=this.opts();if(!e.busy||e.manualTrump){var t=e.reverse?-1:1;e.allowWrap===!1&&e.currSlide+t>=e.slideCount||(e.API.advanceSlide(t),e.API.trigger("cycle-next",[e]).log("cycle-next"))}},prev:function(){var e=this.opts();if(!e.busy||e.manualTrump){var t=e.reverse?1:-1;e.allowWrap===!1&&0>e.currSlide+t||(e.API.advanceSlide(t),e.API.trigger("cycle-prev",[e]).log("cycle-prev"))}},destroy:function(){this.stop();var t=this.opts(),i=e.isFunction(e._data)?e._data:e.noop;clearTimeout(t.timeoutId),t.timeoutId=0,t.API.stop(),t.API.trigger("cycle-destroyed",[t]).log("cycle-destroyed"),t.container.removeData(),i(t.container[0],"parsedAttrs",!1),t.retainStylesOnDestroy||(t.container.removeAttr("style"),t.slides.removeAttr("style"),t.slides.removeClass(t.slideActiveClass)),t.slides.each(function(){e(this).removeData(),i(this,"parsedAttrs",!1)})},jump:function(e){var t,i=this.opts();if(!i.busy||i.manualTrump){var n=parseInt(e,10);if(isNaN(n)||0>n||n>=i.slides.length)return i.API.log("goto: invalid slide index: "+n),void 0;if(n==i.currSlide)return i.API.log("goto: skipping, already on slide",n),void 0;i.nextSlide=n,clearTimeout(i.timeoutId),i.timeoutId=0,i.API.log("goto: ",n," (zero-index)"),t=i.currSlide<i.nextSlide,i.API.prepareTx(!0,t)}},stop:function(){var t=this.opts(),i=t.container;clearTimeout(t.timeoutId),t.timeoutId=0,t.API.stopTransition(),t.pauseOnHover&&(t.pauseOnHover!==!0&&(i=e(t.pauseOnHover)),i.off("mouseenter mouseleave")),t.API.trigger("cycle-stopped",[t]).log("cycle-stopped")},reinit:function(){var e=this.opts();e.API.destroy(),e.container.cycle()},remove:function(t){for(var i,n,s=this.opts(),o=[],c=1,r=0;s.slides.length>r;r++)i=s.slides[r],r==t?n=i:(o.push(i),e(i).data("cycle.opts").slideNum=c,c++);n&&(s.slides=e(o),s.slideCount--,e(n).remove(),t==s.currSlide?s.API.advanceSlide(1):s.currSlide>t?s.currSlide--:s.currSlide++,s.API.trigger("cycle-slide-removed",[s,t,n]).log("cycle-slide-removed"),s.API.updateView())}}),e(document).on("click.cycle","[data-cycle-cmd]",function(t){t.preventDefault();var i=e(this),n=i.data("cycle-cmd"),s=i.data("cycle-context")||".cycle-slideshow";e(s).cycle(n,i.data("cycle-arg"))})}(jQuery),function(e){"use strict";function t(t,i){var n;return t._hashFence?(t._hashFence=!1,void 0):(n=window.location.hash.substring(1),t.slides.each(function(s){if(e(this).data("cycle-hash")==n){if(i===!0)t.startingSlide=s;else{var o=s>t.currSlide;t.nextSlide=s,t.API.prepareTx(!0,o)}return!1}}),void 0)}e(document).on("cycle-pre-initialize",function(i,n){t(n,!0),n._onHashChange=function(){t(n,!1)},e(window).on("hashchange",n._onHashChange)}),e(document).on("cycle-update-view",function(e,t,i){i.hash&&"#"+i.hash!=window.location.hash&&(t._hashFence=!0,window.location.hash=i.hash)}),e(document).on("cycle-destroyed",function(t,i){i._onHashChange&&e(window).off("hashchange",i._onHashChange)})}(jQuery),function(e){"use strict";e.extend(e.fn.cycle.defaults,{loader:!1}),e(document).on("cycle-bootstrap",function(t,i){function n(t,n){function o(t){var o;"wait"==i.loader?(r.push(t),0===a&&(r.sort(c),s.apply(i.API,[r,n]),i.container.removeClass("cycle-loading"))):(o=e(i.slides[i.currSlide]),s.apply(i.API,[t,n]),o.show(),i.container.removeClass("cycle-loading"))}function c(e,t){return e.data("index")-t.data("index")}var r=[];if("string"==e.type(t))t=e.trim(t);else if("array"===e.type(t))for(var l=0;t.length>l;l++)t[l]=e(t[l])[0];t=e(t);var a=t.length;a&&(t.hide().appendTo("body").each(function(t){function c(){0===--l&&(--a,o(d))}var l=0,d=e(this),u=d.is("img")?d:d.find("img");return d.data("index",t),u=u.filter(":not(.cycle-loader-ignore)").filter(':not([src=""])'),u.length?(l=u.length,u.each(function(){this.complete?c():e(this).load(function(){c()}).error(function(){0===--l&&(i.API.log("slide skipped; img not loaded:",this.src),0===--a&&"wait"==i.loader&&s.apply(i.API,[r,n]))})}),void 0):(--a,r.push(d),void 0)}),a&&i.container.addClass("cycle-loading"))}var s;i.loader&&(s=i.API.add,i.API.add=n)})}(jQuery),function(e){"use strict";function t(t,i,n){var s,o=t.API.getComponent("pager");o.each(function(){var o=e(this);if(i.pagerTemplate){var c=t.API.tmpl(i.pagerTemplate,i,t,n[0]);s=e(c).appendTo(o)}else s=o.children().eq(t.slideCount-1);s.on(t.pagerEvent,function(e){e.preventDefault(),t.API.page(o,e.currentTarget)})})}function i(e,t){var i=this.opts();if(!i.busy||i.manualTrump){var n=e.children().index(t),s=n,o=s>i.currSlide;i.currSlide!=s&&(i.nextSlide=s,i.API.prepareTx(!0,o),i.API.trigger("cycle-pager-activated",[i,e,t]))}}e.extend(e.fn.cycle.defaults,{pager:"> .cycle-pager",pagerActiveClass:"cycle-pager-active",pagerEvent:"click.cycle",pagerTemplate:"<span>&bull;</span>"}),e(document).on("cycle-bootstrap",function(e,i,n){n.buildPagerLink=t}),e(document).on("cycle-slide-added",function(e,t,n,s){t.pager&&(t.API.buildPagerLink(t,n,s),t.API.page=i)}),e(document).on("cycle-slide-removed",function(t,i,n){if(i.pager){var s=i.API.getComponent("pager");s.each(function(){var t=e(this);e(t.children()[n]).remove()})}}),e(document).on("cycle-update-view",function(t,i){var n;i.pager&&(n=i.API.getComponent("pager"),n.each(function(){e(this).children().removeClass(i.pagerActiveClass).eq(i.currSlide).addClass(i.pagerActiveClass)}))}),e(document).on("cycle-destroyed",function(e,t){var i=t.API.getComponent("pager");i&&(i.children().off(t.pagerEvent),t.pagerTemplate&&i.empty())})}(jQuery),function(e){"use strict";e.extend(e.fn.cycle.defaults,{next:"> .cycle-next",nextEvent:"click.cycle",disabledClass:"disabled",prev:"> .cycle-prev",prevEvent:"click.cycle",swipe:!1}),e(document).on("cycle-initialized",function(e,t){if(t.API.getComponent("next").on(t.nextEvent,function(e){e.preventDefault(),t.API.next()}),t.API.getComponent("prev").on(t.prevEvent,function(e){e.preventDefault(),t.API.prev()}),t.swipe){var i=t.swipeVert?"swipeUp.cycle":"swipeLeft.cycle swipeleft.cycle",n=t.swipeVert?"swipeDown.cycle":"swipeRight.cycle swiperight.cycle";t.container.on(i,function(){t.API.next()}),t.container.on(n,function(){t.API.prev()})}}),e(document).on("cycle-update-view",function(e,t){if(!t.allowWrap){var i=t.disabledClass,n=t.API.getComponent("next"),s=t.API.getComponent("prev"),o=t._prevBoundry||0,c=void 0!==t._nextBoundry?t._nextBoundry:t.slideCount-1;t.currSlide==c?n.addClass(i).prop("disabled",!0):n.removeClass(i).prop("disabled",!1),t.currSlide===o?s.addClass(i).prop("disabled",!0):s.removeClass(i).prop("disabled",!1)}}),e(document).on("cycle-destroyed",function(e,t){t.API.getComponent("prev").off(t.nextEvent),t.API.getComponent("next").off(t.prevEvent),t.container.off("swipeleft.cycle swiperight.cycle swipeLeft.cycle swipeRight.cycle swipeUp.cycle swipeDown.cycle")})}(jQuery),function(e){"use strict";e.extend(e.fn.cycle.defaults,{progressive:!1}),e(document).on("cycle-pre-initialize",function(t,i){if(i.progressive){var n,s,o=i.API,c=o.next,r=o.prev,l=o.prepareTx,a=e.type(i.progressive);if("array"==a)n=i.progressive;else if(e.isFunction(i.progressive))n=i.progressive(i);else if("string"==a){if(s=e(i.progressive),n=e.trim(s.html()),!n)return;if(/^(\[)/.test(n))try{n=e.parseJSON(n)}catch(d){return o.log("error parsing progressive slides",d),void 0}else n=n.split(RegExp(s.data("cycle-split")||"\n")),n[n.length-1]||n.pop()}l&&(o.prepareTx=function(e,t){var s,o;return e||0===n.length?(l.apply(i.API,[e,t]),void 0):(t&&i.currSlide==i.slideCount-1?(o=n[0],n=n.slice(1),i.container.one("cycle-slide-added",function(e,t){setTimeout(function(){t.API.advanceSlide(1)},50)}),i.API.add(o)):t||0!==i.currSlide?l.apply(i.API,[e,t]):(s=n.length-1,o=n[s],n=n.slice(0,s),i.container.one("cycle-slide-added",function(e,t){setTimeout(function(){t.currSlide=1,t.API.advanceSlide(-1)},50)}),i.API.add(o,!0)),void 0)}),c&&(o.next=function(){var e=this.opts();if(n.length&&e.currSlide==e.slideCount-1){var t=n[0];n=n.slice(1),e.container.one("cycle-slide-added",function(e,t){c.apply(t.API),t.container.removeClass("cycle-loading")}),e.container.addClass("cycle-loading"),e.API.add(t)}else c.apply(e.API)}),r&&(o.prev=function(){var e=this.opts();if(n.length&&0===e.currSlide){var t=n.length-1,i=n[t];n=n.slice(0,t),e.container.one("cycle-slide-added",function(e,t){t.currSlide=1,t.API.advanceSlide(-1),t.container.removeClass("cycle-loading")}),e.container.addClass("cycle-loading"),e.API.add(i,!0)}else r.apply(e.API)})}})}(jQuery),function(e){"use strict";e.extend(e.fn.cycle.defaults,{tmplRegex:"{{((.)?.*?)}}"}),e.extend(e.fn.cycle.API,{tmpl:function(t,i){var n=RegExp(i.tmplRegex||e.fn.cycle.defaults.tmplRegex,"g"),s=e.makeArray(arguments);return s.shift(),t.replace(n,function(t,i){var n,o,c,r,l=i.split(".");for(n=0;s.length>n;n++)if(c=s[n]){if(l.length>1)for(r=c,o=0;l.length>o;o++)c=r,r=r[l[o]]||i;else r=c[i];if(e.isFunction(r))return r.apply(c,s);if(void 0!==r&&null!==r&&r!=i)return r}return i})}})}(jQuery);;(function(e){"use strict";e(document).on("cycle-bootstrap",function(e,i,t){"carousel"===i.fx&&(t.getSlideIndex=function(e){var i=this.opts()._carouselWrap.children(),t=i.index(e);return t%i.length},t.next=function(){var e=i.reverse?-1:1;i.allowWrap===!1&&i.currSlide+e>i.slideCount-i.carouselVisible||(i.API.advanceSlide(e),i.API.trigger("cycle-next",[i]).log("cycle-next"))})}),e.fn.cycle.transitions.carousel={preInit:function(i){i.hideNonActive=!1,i.container.on("cycle-destroyed",e.proxy(this.onDestroy,i.API)),i.API.stopTransition=this.stopTransition;for(var t=0;i.startingSlide>t;t++)i.container.append(i.slides[0])},postInit:function(i){var t,n,s,o,l=i.carouselVertical;i.carouselVisible&&i.carouselVisible>i.slideCount&&(i.carouselVisible=i.slideCount-1);var r=i.carouselVisible||i.slides.length,c={display:l?"block":"inline-block",position:"static"};if(i.container.css({position:"relative",overflow:"hidden"}),i.slides.css(c),i._currSlide=i.currSlide,o=e('<div class="cycle-carousel-wrap"></div>').prependTo(i.container).css({margin:0,padding:0,top:0,left:0,position:"absolute"}).append(i.slides),i._carouselWrap=o,l||o.css("white-space","nowrap"),i.allowWrap!==!1){for(n=0;(void 0===i.carouselVisible?2:1)>n;n++){for(t=0;i.slideCount>t;t++)o.append(i.slides[t].cloneNode(!0));for(t=i.slideCount;t--;)o.prepend(i.slides[t].cloneNode(!0))}o.find(".cycle-slide-active").removeClass("cycle-slide-active"),i.slides.eq(i.startingSlide).addClass("cycle-slide-active")}i.pager&&i.allowWrap===!1&&(s=i.slideCount-r,e(i.pager).children().filter(":gt("+s+")").hide()),i._nextBoundry=i.slideCount-i.carouselVisible,this.prepareDimensions(i)},prepareDimensions:function(i){var t,n,s,o=i.carouselVertical,l=i.carouselVisible||i.slides.length;if(i.carouselFluid&&i.carouselVisible?i._carouselResizeThrottle||this.fluidSlides(i):i.carouselVisible&&i.carouselSlideDimension?(t=l*i.carouselSlideDimension,i.container[o?"height":"width"](t)):i.carouselVisible&&(t=l*e(i.slides[0])[o?"outerHeight":"outerWidth"](!0),i.container[o?"height":"width"](t)),n=i.carouselOffset||0,i.allowWrap!==!1)if(i.carouselSlideDimension)n-=(i.slideCount+i.currSlide)*i.carouselSlideDimension;else{s=i._carouselWrap.children();for(var r=0;i.slideCount+i.currSlide>r;r++)n-=e(s[r])[o?"outerHeight":"outerWidth"](!0)}i._carouselWrap.css(o?"top":"left",n)},fluidSlides:function(i){function t(){clearTimeout(s),s=setTimeout(n,20)}function n(){i._carouselWrap.stop(!1,!0);var e=i.container.width()/i.carouselVisible;e=Math.ceil(e-l),i._carouselWrap.children().width(e),i._sentinel&&i._sentinel.width(e),r(i)}var s,o=i.slides.eq(0),l=o.outerWidth()-o.width(),r=this.prepareDimensions;e(window).on("resize",t),i._carouselResizeThrottle=t,n()},transition:function(i,t,n,s,o){var l,r={},c=i.nextSlide-i.currSlide,a=i.carouselVertical,d=i.speed;if(i.allowWrap===!1){s=c>0;var u=i._currSlide,p=i.slideCount-i.carouselVisible;c>0&&i.nextSlide>p&&u==p?c=0:c>0&&i.nextSlide>p?c=i.nextSlide-u-(i.nextSlide-p):0>c&&i.currSlide>p&&i.nextSlide>p?c=0:0>c&&i.currSlide>p?c+=i.currSlide-p:u=i.currSlide,l=this.getScroll(i,a,u,c),i.API.opts()._currSlide=i.nextSlide>p?p:i.nextSlide}else s&&0===i.nextSlide?(l=this.getDim(i,i.currSlide,a),o=this.genCallback(i,s,a,o)):s||i.nextSlide!=i.slideCount-1?l=this.getScroll(i,a,i.currSlide,c):(l=this.getDim(i,i.currSlide,a),o=this.genCallback(i,s,a,o));r[a?"top":"left"]=s?"-="+l:"+="+l,i.throttleSpeed&&(d=l/e(i.slides[0])[a?"height":"width"]()*i.speed),i._carouselWrap.animate(r,d,i.easing,o)},getDim:function(i,t,n){var s=e(i.slides[t]);return s[n?"outerHeight":"outerWidth"](!0)},getScroll:function(e,i,t,n){var s,o=0;if(n>0)for(s=t;t+n>s;s++)o+=this.getDim(e,s,i);else for(s=t;s>t+n;s--)o+=this.getDim(e,s,i);return o},genCallback:function(i,t,n,s){return function(){var t=e(i.slides[i.nextSlide]).position(),o=0-t[n?"top":"left"]+(i.carouselOffset||0);i._carouselWrap.css(i.carouselVertical?"top":"left",o),s()}},stopTransition:function(){var e=this.opts();e.slides.stop(!1,!0),e._carouselWrap.stop(!1,!0)},onDestroy:function(){var i=this.opts();i._carouselResizeThrottle&&e(window).off("resize",i._carouselResizeThrottle),i.slides.prependTo(i.container),i._carouselWrap.remove()}}})(jQuery);;
/* Plugin for Cycle2; Copyright (c) 2012 M. Alsup; ver: 20121120 */
(function(a){"use strict";var b="ontouchend"in document;a.event.special.swipe=a.event.special.swipe||{scrollSupressionThreshold:10,durationThreshold:1e3,horizontalDistanceThreshold:30,verticalDistanceThreshold:75,setup:function(){var b=a(this);b.bind("touchstart",function(c){function g(b){if(!f)return;var c=b.originalEvent.touches?b.originalEvent.touches[0]:b;e={time:(new Date).getTime(),coords:[c.pageX,c.pageY]},Math.abs(f.coords[0]-e.coords[0])>a.event.special.swipe.scrollSupressionThreshold&&b.preventDefault()}var d=c.originalEvent.touches?c.originalEvent.touches[0]:c,e,f={time:(new Date).getTime(),coords:[d.pageX,d.pageY],origin:a(c.target)};b.bind("touchmove",g).one("touchend",function(c){b.unbind("touchmove",g),f&&e&&e.time-f.time<a.event.special.swipe.durationThreshold&&Math.abs(f.coords[0]-e.coords[0])>a.event.special.swipe.horizontalDistanceThreshold&&Math.abs(f.coords[1]-e.coords[1])<a.event.special.swipe.verticalDistanceThreshold&&f.origin.trigger("swipe").trigger(f.coords[0]>e.coords[0]?"swipeleft":"swiperight"),f=e=undefined})})}},a.event.special.swipeleft=a.event.special.swipeleft||{setup:function(){a(this).bind("swipe",a.noop)}},a.event.special.swiperight=a.event.special.swiperight||a.event.special.swipeleft})(jQuery);;(function(e){"use strict";e.fn.cycle.transitions.tileSlide=e.fn.cycle.transitions.tileBlind={before:function(t,i,n,s){t.API.stackSlides(i,n,s),e(i).show(),t.container.css("overflow","hidden"),t.tileDelay=t.tileDelay||"tileSlide"==t.fx?100:125,t.tileCount=t.tileCount||7,t.tileVertical=t.tileVertical!==!1,t.container.data("cycleTileInitialized")||(t.container.on("cycle-destroyed",e.proxy(this.onDestroy,t.API)),t.container.data("cycleTileInitialized",!0))},transition:function(t,i,n,s,o){function r(e){p.eq(e).animate(I,{duration:t.speed,easing:t.easing,complete:function(){(s?v-1===e:0===e)&&t._tileAniCallback()}}),setTimeout(function(){(s?v-1!==e:0!==e)&&r(s?e+1:e-1)},t.tileDelay)}t.slides.not(i).not(n).hide();var c,l,a,d,u,p=e(),f=e(i),y=e(n),v=t.tileCount,h=t.tileVertical,g=t.container.height(),m=t.container.width();h?(l=Math.floor(m/v),d=m-l*(v-1),a=u=g):(l=d=m,a=Math.floor(g/v),u=g-a*(v-1)),t.container.find(".cycle-tiles-container").remove();var I,A={left:0,top:0,overflow:"hidden",position:"absolute",margin:0,padding:0};I=h?"tileSlide"==t.fx?{top:g}:{width:0}:"tileSlide"==t.fx?{left:m}:{height:0};var S=e('<div class="cycle-tiles-container"></div>');S.css({zIndex:f.css("z-index"),overflow:"visible",position:"absolute",top:0,left:0,direction:"ltr"}),S.insertBefore(n);for(var x=0;v>x;x++)c=e("<div></div>").css(A).css({width:v-1===x?d:l,height:v-1===x?u:a,marginLeft:h?x*l:0,marginTop:h?0:x*a}).append(f.clone().css({position:"relative",maxWidth:"none",width:f.width(),margin:0,padding:0,marginLeft:h?-(x*l):0,marginTop:h?0:-(x*a)})),p=p.add(c);S.append(p),f.hide(),y.show().css("opacity",1),r(s?0:v-1),t._tileAniCallback=function(){y.show(),f.hide(),S.remove(),o()}},stopTransition:function(e){e.container.find("*").stop(!0,!0),e._tileAniCallback&&e._tileAniCallback()},onDestroy:function(){var e=this.opts();e.container.find(".cycle-tiles-container").remove()}}})(jQuery);;(function(e){"use strict";function t(){try{this.playVideo()}catch(e){}}function i(){try{this.pauseVideo()}catch(e){}}var n='<div class=cycle-youtube><object width="640" height="360"><param name="movie" value="{{url}}"></param><param name="allowFullScreen" value="{{allowFullScreen}}"></param><param name="allowscriptaccess" value="always"></param><embed src="{{url}}" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="{{allowFullScreen}}"></embed></object></div>';e.extend(e.fn.cycle.defaults,{youtubeAllowFullScreen:!0,youtubeAutostart:!1,youtubeAutostop:!0}),e(document).on("cycle-bootstrap",function(s,o){o.youtube&&(o.hideNonActive=!1,o.container.find(o.slides).each(function(t){if(this.href){var i,s=e(this),l=s.attr("href"),c=o.youtubeAllowFullScreen?"true":"false";l+=(/\?/.test(l)?"&":"?")+"enablejsapi=1",o.youtubeAutostart&&o.startingSlide===t&&(l+="&autoplay=1"),i=o.API.tmpl(n,{url:l,allowFullScreen:c}),s.replaceWith(i)}}),o.slides=o.slides.replace(/(\b>?a\b)/,"div.cycle-youtube"),o.youtubeAutostart&&o.container.on("cycle-initialized cycle-after",function(i,n){var s="cycle-initialized"==i.type?n.currSlide:n.nextSlide;e(n.slides[s]).find("object,embed").each(t)}),o.youtubeAutostop&&o.container.on("cycle-before",function(t,n){e(n.slides[n.currSlide]).find("object,embed").each(i)}))})})(jQuery);;(function(){var speed='fast';var slides_selector='.cycloneslider-template-dark .cycloneslider-slides';jQuery(document).on('cycle-before',slides_selector,function(event,optionHash,outgoingSlideEl,incomingSlideEl,forwardFlag){jQuery(this).find('.cycloneslider-caption-title').stop().fadeOut(0).end().find('.cycloneslider-caption-description').stop().fadeOut(0).end().find('.cycloneslider-caption-more').stop().fadeOut(0);});jQuery(document).on('cycle-initialized cycle-after',slides_selector,function(event,optionHash,outgoingSlideEl,incomingSlideEl,forwardFlag){var index=(event.type=='cycle-initialized')?optionHash.currSlide:optionHash.nextSlide;var slide=jQuery(optionHash.slides[index]);slide.find('.cycloneslider-caption-title').fadeIn(speed,function(){slide.find('.cycloneslider-caption-description').fadeIn(speed,function(){slide.find('.cycloneslider-caption-more').fadeIn(speed);});});});})();;(function(){var main='.cycloneslider-template-thumbnails';jQuery(document).on('cycle-initialized',main+' .cycloneslider-slides',function(event,optionHash){jQuery(this).parent().next().find('li').eq(optionHash.currSlide).addClass('current');});jQuery(document).on('cycle-before','.cycloneslider-template-thumbnails .cycloneslider-slides',function(event,optionHash,outgoingSlideEl,incomingSlideEl,forwardFlag){var i=optionHash.nextSlide;jQuery(this).parent().next().find('li').removeClass('current').eq(i).addClass('current');});jQuery(document).on('click','.cycloneslider-thumbnails li',function(){var i=jQuery(this).index();jQuery(this).parents('.cycloneslider-thumbnails').prev().find('.cycloneslider-slides').cycle('goto',i);});})();;jQuery(document).ready(function($){(function(){try{$('.magnific-pop').magnificPopup({type:'image'});}catch(ignore){}})();});(function(){var slides_selector='.cycloneslider-template-dark .cycloneslider-slides';slides_selector+=',.cycloneslider-template-default .cycloneslider-slides';slides_selector+=',.cycloneslider-template-standard .cycloneslider-slides';slides_selector+=',.cycloneslider-template-thumbnails .cycloneslider-slides';slides_selector+=',.cycloneslider-template-galleria .cycloneslider-slides';slides_selector+=',.cycloneslider-template-text .cycloneslider-slides';slides_selector+=',.cycloneslider-template-dos .cycloneslider-slides';jQuery(document).on('cycle-before',slides_selector,function(event,optionHash,outgoingSlideEl,incomingSlideEl,forwardFlag){var slide=jQuery(outgoingSlideEl),curHeight=0,nextHeight=0;if("on"==optionHash.dynamicHeight){curHeight=jQuery(outgoingSlideEl)[0].getBoundingClientRect().height;if(undefined==curHeight||0==curHeight){curHeight=jQuery(outgoingSlideEl).outerHeight();}
nextHeight=jQuery(incomingSlideEl)[0].getBoundingClientRect().height;if(undefined==nextHeight||0==nextHeight){nextHeight=jQuery(incomingSlideEl).outerHeight();}
if(nextHeight!=curHeight)jQuery(this).animate({height:nextHeight},optionHash.autoHeightSpeed,optionHash.autoHeightEasing);}
if(slide.hasClass('cycloneslider-slide-youtube'))pauseYoutube(slide);if(slide.hasClass('cycloneslider-slide-vimeo'))pauseVimeo(slide);});jQuery(document).on('cycle-initialized cycle-after',slides_selector,function(event,optionHash,outgoingSlideEl,incomingSlideEl,forwardFlag){var index=(event.type=='cycle-initialized')?optionHash.currSlide:optionHash.nextSlide;var slide=jQuery(optionHash.slides[index]);if(false==optionHash.hideNonActive)slide.css('zIndex',parseInt(slide.css('zIndex'))+20);});function pauseYoutube(slide){var data={"event":"command","func":"pauseVideo","args":[],"id":""}
postMessage(slide.find('iframe'),data,'*');}
function pauseVimeo(slide){postMessage(slide.find('iframe'),{method:'pause'},slide.find('iframe').attr('src'));}
function postMessage(iframe,data,url){try{if(iframe[0]){iframe[0].contentWindow.postMessage(JSON.stringify(data),url);}}catch(ignore){}}})();;(function($){if($.fn.testiMonial)
{return;}
$.fn.testimonial=$.fn.testiMonial=function(options,configs)
{if(this.length==0)
{debug(true,'No element found for "'+this.selector+'".');return this;}
if(this.length>1)
{return this.each(function(){$(this).testiMonial(options,configs);});}
var $cfs=this,$tt0=this[0],starting_position=false;if($cfs.data('_cfs_isCarousel'))
{starting_position=$cfs.triggerHandler('_cfs_triggerEvent','currentPosition');$cfs.trigger('_cfs_triggerEvent',['destroy',true]);}
var FN={};FN._cfs_init=function(o,setOrig,start)
{o=go_getObject($tt0,o);o.items=go_getItemsObject($tt0,o.items);o.scroll=go_getScrollObject($tt0,o.scroll);o.auto=go_getAutoObject($tt0,o.auto);o.prev=go_getPrevNextObject($tt0,o.prev);o.next=go_getPrevNextObject($tt0,o.next);o.pagination=go_getPaginationObject($tt0,o.pagination);o.swipe=go_getSwipeObject($tt0,o.swipe);o.mousewheel=go_getMousewheelObject($tt0,o.mousewheel);if(setOrig)
{opts_orig=$.extend(true,{},$.fn.testiMonial.defaults,o);}
opts=$.extend(true,{},$.fn.testiMonial.defaults,o);opts.d=cf_getDimensions(opts);crsl.direction=(opts.direction=='up'||opts.direction=='left')?'next':'prev';var a_itm=$cfs.children(),avail_primary=ms_getParentSize($wrp,opts,'width');if(is_true(opts.cookie))
{opts.cookie='testimonial_cookie_'+conf.serialNumber;}
opts.maxDimension=ms_getMaxDimension(opts,avail_primary);opts.items=in_complementItems(opts.items,opts,a_itm,start);opts[opts.d['width']]=in_complementPrimarySize(opts[opts.d['width']],opts,a_itm);opts[opts.d['height']]=in_complementSecondarySize(opts[opts.d['height']],opts,a_itm);if(opts.responsive)
{if(!is_percentage(opts[opts.d['width']]))
{opts[opts.d['width']]='100%';}}
if(is_percentage(opts[opts.d['width']]))
{crsl.upDateOnWindowResize=true;crsl.primarySizePercentage=opts[opts.d['width']];opts[opts.d['width']]=ms_getPercentage(avail_primary,crsl.primarySizePercentage);if(!opts.items.visible)
{opts.items.visibleConf.variable=true;}}
if(opts.responsive)
{opts.usePadding=false;opts.padding=[0,0,0,0];opts.align=false;opts.items.visibleConf.variable=false;}
else
{if(!opts.items.visible)
{opts=in_complementVisibleItems(opts,avail_primary);}
if(!opts[opts.d['width']])
{if(!opts.items.visibleConf.variable&&is_number(opts.items[opts.d['width']])&&opts.items.filter=='*')
{opts[opts.d['width']]=opts.items.visible*opts.items[opts.d['width']];opts.align=false;}
else
{opts[opts.d['width']]='variable';}}
if(is_undefined(opts.align))
{opts.align=(is_number(opts[opts.d['width']]))?'center':false;}
if(opts.items.visibleConf.variable)
{opts.items.visible=gn_getVisibleItemsNext(a_itm,opts,0);}}
if(opts.items.filter!='*'&&!opts.items.visibleConf.variable)
{opts.items.visibleConf.org=opts.items.visible;opts.items.visible=gn_getVisibleItemsNextFilter(a_itm,opts,0);}
opts.items.visible=cf_getItemsAdjust(opts.items.visible,opts,opts.items.visibleConf.adjust,$tt0);opts.items.visibleConf.old=opts.items.visible;if(opts.responsive)
{if(!opts.items.visibleConf.min)
{opts.items.visibleConf.min=opts.items.visible;}
if(!opts.items.visibleConf.max)
{opts.items.visibleConf.max=opts.items.visible;}
opts=in_getResponsiveValues(opts,a_itm,avail_primary);}
else
{opts.padding=cf_getPadding(opts.padding);if(opts.align=='top')
{opts.align='left';}
else if(opts.align=='bottom')
{opts.align='right';}
switch(opts.align)
{case'center':case'left':case'right':if(opts[opts.d['width']]!='variable')
{opts=in_getAlignPadding(opts,a_itm);opts.usePadding=true;}
break;default:opts.align=false;opts.usePadding=(opts.padding[0]==0&&opts.padding[1]==0&&opts.padding[2]==0&&opts.padding[3]==0)?false:true;break;}}
if(!is_number(opts.scroll.duration))
{opts.scroll.duration=500;}
if(is_undefined(opts.scroll.items))
{opts.scroll.items=(opts.responsive||opts.items.visibleConf.variable||opts.items.filter!='*')?'visible':opts.items.visible;}
opts.auto=$.extend(true,{},opts.scroll,opts.auto);opts.prev=$.extend(true,{},opts.scroll,opts.prev);opts.next=$.extend(true,{},opts.scroll,opts.next);opts.pagination=$.extend(true,{},opts.scroll,opts.pagination);opts.auto=go_complementAutoObject($tt0,opts.auto);opts.prev=go_complementPrevNextObject($tt0,opts.prev);opts.next=go_complementPrevNextObject($tt0,opts.next);opts.pagination=go_complementPaginationObject($tt0,opts.pagination);opts.swipe=go_complementSwipeObject($tt0,opts.swipe);opts.mousewheel=go_complementMousewheelObject($tt0,opts.mousewheel);if(opts.synchronise)
{opts.synchronise=cf_getSynchArr(opts.synchronise);}
if(opts.auto.onPauseStart)
{opts.auto.onTimeoutStart=opts.auto.onPauseStart;deprecated('auto.onPauseStart','auto.onTimeoutStart');}
if(opts.auto.onPausePause)
{opts.auto.onTimeoutPause=opts.auto.onPausePause;deprecated('auto.onPausePause','auto.onTimeoutPause');}
if(opts.auto.onPauseEnd)
{opts.auto.onTimeoutEnd=opts.auto.onPauseEnd;deprecated('auto.onPauseEnd','auto.onTimeoutEnd');}
if(opts.auto.pauseDuration)
{opts.auto.timeoutDuration=opts.auto.pauseDuration;deprecated('auto.pauseDuration','auto.timeoutDuration');}};FN._cfs_build=function(){$cfs.data('_cfs_isCarousel',true);var a_itm=$cfs.children(),orgCSS=in_mapCss($cfs,['textAlign','float','position','top','right','bottom','left','zIndex','width','height','marginTop','marginRight','marginBottom','marginLeft']),newPosition='relative';switch(orgCSS.position)
{case'absolute':case'fixed':newPosition=orgCSS.position;break;}
if(conf.wrapper=='parent')
{sz_storeOrigCss($wrp);}
else
{$wrp.css(orgCSS);}
$wrp.css({'overflow':'hidden','position':newPosition});sz_storeOrigCss($cfs);$cfs.data('_cfs_origCssZindex',orgCSS.zIndex);$cfs.css({'textAlign':'left','float':'none','position':'absolute','top':0,'right':'auto','bottom':'auto','left':0,'marginTop':0,'marginRight':0,'marginBottom':0,'marginLeft':0});sz_storeMargin(a_itm,opts);sz_storeOrigCss(a_itm);if(opts.responsive)
{sz_setResponsiveSizes(opts,a_itm);}};FN._cfs_bind_events=function(){FN._cfs_unbind_events();$cfs.bind(cf_e('stop',conf),function(e,imm){e.stopPropagation();if(!crsl.isStopped)
{if(opts.auto.button)
{opts.auto.button.addClass(cf_c('stopped',conf));}}
crsl.isStopped=true;if(opts.auto.play)
{opts.auto.play=false;$cfs.trigger(cf_e('pause',conf),imm);}
return true;});$cfs.bind(cf_e('finish',conf),function(e){e.stopPropagation();if(crsl.isScrolling)
{sc_stopScroll(scrl);}
return true;});$cfs.bind(cf_e('pause',conf),function(e,imm,res){e.stopPropagation();tmrs=sc_clearTimers(tmrs);if(imm&&crsl.isScrolling)
{scrl.isStopped=true;var nst=getTime()-scrl.startTime;scrl.duration-=nst;if(scrl.pre)
{scrl.pre.duration-=nst;}
if(scrl.post)
{scrl.post.duration-=nst;}
sc_stopScroll(scrl,false);}
if(!crsl.isPaused&&!crsl.isScrolling)
{if(res)
{tmrs.timePassed+=getTime()-tmrs.startTime;}}
if(!crsl.isPaused)
{if(opts.auto.button)
{opts.auto.button.addClass(cf_c('paused',conf));}}
crsl.isPaused=true;if(opts.auto.onTimeoutPause)
{var dur1=opts.auto.timeoutDuration-tmrs.timePassed,perc=100-Math.ceil(dur1*100/opts.auto.timeoutDuration);opts.auto.onTimeoutPause.call($tt0,perc,dur1);}
return true;});$cfs.bind(cf_e('play',conf),function(e,dir,del,res){e.stopPropagation();tmrs=sc_clearTimers(tmrs);var v=[dir,del,res],t=['string','number','boolean'],a=cf_sortParams(v,t);dir=a[0];del=a[1];res=a[2];if(dir!='prev'&&dir!='next')
{dir=crsl.direction;}
if(!is_number(del))
{del=0;}
if(!is_boolean(res))
{res=false;}
if(res)
{crsl.isStopped=false;opts.auto.play=true;}
if(!opts.auto.play)
{e.stopImmediatePropagation();return debug(conf,'Carousel stopped: Not scrolling.');}
if(crsl.isPaused)
{if(opts.auto.button)
{opts.auto.button.removeClass(cf_c('stopped',conf));opts.auto.button.removeClass(cf_c('paused',conf));}}
crsl.isPaused=false;tmrs.startTime=getTime();var dur1=opts.auto.timeoutDuration+del;dur2=dur1-tmrs.timePassed;perc=100-Math.ceil(dur2*100/dur1);if(opts.auto.progress)
{tmrs.progress=setInterval(function(){var pasd=getTime()-tmrs.startTime+tmrs.timePassed,perc=Math.ceil(pasd*100/dur1);opts.auto.progress.updater.call(opts.auto.progress.bar[0],perc);},opts.auto.progress.interval);}
tmrs.auto=setTimeout(function(){if(opts.auto.progress)
{opts.auto.progress.updater.call(opts.auto.progress.bar[0],100);}
if(opts.auto.onTimeoutEnd)
{opts.auto.onTimeoutEnd.call($tt0,perc,dur2);}
if(crsl.isScrolling)
{$cfs.trigger(cf_e('play',conf),dir);}
else
{$cfs.trigger(cf_e(dir,conf),opts.auto);}},dur2);if(opts.auto.onTimeoutStart)
{opts.auto.onTimeoutStart.call($tt0,perc,dur2);}
return true;});$cfs.bind(cf_e('resume',conf),function(e){e.stopPropagation();if(scrl.isStopped)
{scrl.isStopped=false;crsl.isPaused=false;crsl.isScrolling=true;scrl.startTime=getTime();sc_startScroll(scrl,conf);}
else
{$cfs.trigger(cf_e('play',conf));}
return true;});$cfs.bind(cf_e('prev',conf)+' '+cf_e('next',conf),function(e,obj,num,clb,que){e.stopPropagation();if(crsl.isStopped||$cfs.is(':hidden'))
{e.stopImmediatePropagation();return debug(conf,'Carousel stopped or hidden: Not scrolling.');}
var minimum=(is_number(opts.items.minimum))?opts.items.minimum:opts.items.visible+1;if(minimum>itms.total)
{e.stopImmediatePropagation();return debug(conf,'Not enough items ('+itms.total+' total, '+minimum+' needed): Not scrolling.');}
var v=[obj,num,clb,que],t=['object','number/string','function','boolean'],a=cf_sortParams(v,t);obj=a[0];num=a[1];clb=a[2];que=a[3];var eType=e.type.slice(conf.events.prefix.length);if(!is_object(obj))
{obj={};}
if(is_function(clb))
{obj.onAfter=clb;}
if(is_boolean(que))
{obj.queue=que;}
obj=$.extend(true,{},opts[eType],obj);if(obj.conditions&&!obj.conditions.call($tt0,eType))
{e.stopImmediatePropagation();return debug(conf,'Callback "conditions" returned false.');}
if(!is_number(num))
{if(opts.items.filter!='*')
{num='visible';}
else
{var arr=[num,obj.items,opts[eType].items];for(var a=0,l=arr.length;a<l;a++)
{if(is_number(arr[a])||arr[a]=='page'||arr[a]=='visible'){num=arr[a];break;}}}
switch(num){case'page':e.stopImmediatePropagation();return $cfs.triggerHandler(cf_e(eType+'Page',conf),[obj,clb]);break;case'visible':if(!opts.items.visibleConf.variable&&opts.items.filter=='*')
{num=opts.items.visible;}
break;}}
if(scrl.isStopped)
{$cfs.trigger(cf_e('resume',conf));$cfs.trigger(cf_e('queue',conf),[eType,[obj,num,clb]]);e.stopImmediatePropagation();return debug(conf,'Carousel resumed scrolling.');}
if(obj.duration>0)
{if(crsl.isScrolling)
{if(obj.queue)
{if(obj.queue=='last')
{queu=[];}
if(obj.queue!='first'||queu.length==0)
{$cfs.trigger(cf_e('queue',conf),[eType,[obj,num,clb]]);}}
e.stopImmediatePropagation();return debug(conf,'Carousel currently scrolling.');}}
tmrs.timePassed=0;$cfs.trigger(cf_e('slide_'+eType,conf),[obj,num]);if(opts.synchronise)
{var s=opts.synchronise,c=[obj,num];for(var j=0,l=s.length;j<l;j++){var d=eType;if(!s[j][2])
{d=(d=='prev')?'next':'prev';}
if(!s[j][1])
{c[0]=s[j][0].triggerHandler('_cfs_triggerEvent',['configuration',d]);}
c[1]=num+s[j][3];s[j][0].trigger('_cfs_triggerEvent',['slide_'+d,c]);}}
return true;});$cfs.bind(cf_e('slide_prev',conf),function(e,sO,nI){e.stopPropagation();var a_itm=$cfs.children();if(!opts.circular)
{if(itms.first==0)
{if(opts.infinite)
{$cfs.trigger(cf_e('next',conf),itms.total-1);}
return e.stopImmediatePropagation();}}
sz_resetMargin(a_itm,opts);if(!is_number(nI))
{if(opts.items.visibleConf.variable)
{nI=gn_getVisibleItemsPrev(a_itm,opts,itms.total-1);}
else if(opts.items.filter!='*')
{var xI=(is_number(sO.items))?sO.items:gn_getVisibleOrg($cfs,opts);nI=gn_getScrollItemsPrevFilter(a_itm,opts,itms.total-1,xI);}
else
{nI=opts.items.visible;}
nI=cf_getAdjust(nI,opts,sO.items,$tt0);}
if(!opts.circular)
{if(itms.total-nI<itms.first)
{nI=itms.total-itms.first;}}
opts.items.visibleConf.old=opts.items.visible;if(opts.items.visibleConf.variable)
{var vI=cf_getItemsAdjust(gn_getVisibleItemsNext(a_itm,opts,itms.total-nI),opts,opts.items.visibleConf.adjust,$tt0);if(opts.items.visible+nI<=vI&&nI<itms.total)
{nI++;vI=cf_getItemsAdjust(gn_getVisibleItemsNext(a_itm,opts,itms.total-nI),opts,opts.items.visibleConf.adjust,$tt0);}
opts.items.visible=vI;}
else if(opts.items.filter!='*')
{var vI=gn_getVisibleItemsNextFilter(a_itm,opts,itms.total-nI);opts.items.visible=cf_getItemsAdjust(vI,opts,opts.items.visibleConf.adjust,$tt0);}
sz_resetMargin(a_itm,opts,true);if(nI==0)
{e.stopImmediatePropagation();return debug(conf,'0 items to scroll: Not scrolling.');}
debug(conf,'Scrolling '+nI+' items backward.');itms.first+=nI;while(itms.first>=itms.total)
{itms.first-=itms.total;}
if(!opts.circular)
{if(itms.first==0&&sO.onEnd)
{sO.onEnd.call($tt0,'prev');}
if(!opts.infinite)
{nv_enableNavi(opts,itms.first,conf);}}
$cfs.children().slice(itms.total-nI,itms.total).prependTo($cfs);if(itms.total<opts.items.visible+nI)
{$cfs.children().slice(0,(opts.items.visible+nI)-itms.total).clone(true).appendTo($cfs);}
var a_itm=$cfs.children(),i_old=gi_getOldItemsPrev(a_itm,opts,nI),i_new=gi_getNewItemsPrev(a_itm,opts),i_cur_l=a_itm.eq(nI-1),i_old_l=i_old.last(),i_new_l=i_new.last();sz_resetMargin(a_itm,opts);var pL=0,pR=0;if(opts.align)
{var p=cf_getAlignPadding(i_new,opts);pL=p[0];pR=p[1];}
var oL=(pL<0)?opts.padding[opts.d[3]]:0;var hiddenitems=false,i_skp=$();if(opts.items.visible<nI)
{i_skp=a_itm.slice(opts.items.visibleConf.old,nI);if(sO.fx=='directscroll')
{var orgW=opts.items[opts.d['width']];hiddenitems=i_skp;i_cur_l=i_new_l;sc_hideHiddenItems(hiddenitems);opts.items[opts.d['width']]='variable';}}
var $cf2=false,i_siz=ms_getTotalSize(a_itm.slice(0,nI),opts,'width'),w_siz=cf_mapWrapperSizes(ms_getSizes(i_new,opts,true),opts,!opts.usePadding),i_siz_vis=0,a_cfs={},a_wsz={},a_cur={},a_old={},a_new={},a_lef={},a_lef_vis={},a_dur=sc_getDuration(sO,opts,nI,i_siz);switch(sO.fx)
{case'cover':case'cover-fade':i_siz_vis=ms_getTotalSize(a_itm.slice(0,opts.items.visible),opts,'width');break;}
if(hiddenitems)
{opts.items[opts.d['width']]=orgW;}
sz_resetMargin(a_itm,opts,true);if(pR>=0)
{sz_resetMargin(i_old_l,opts,opts.padding[opts.d[1]]);}
if(pL>=0)
{sz_resetMargin(i_cur_l,opts,opts.padding[opts.d[3]]);}
if(opts.align)
{opts.padding[opts.d[1]]=pR;opts.padding[opts.d[3]]=pL;}
a_lef[opts.d['left']]=-(i_siz-oL);a_lef_vis[opts.d['left']]=-(i_siz_vis-oL);a_wsz[opts.d['left']]=w_siz[opts.d['width']];var _s_wrapper=function(){},_a_wrapper=function(){},_s_paddingold=function(){},_a_paddingold=function(){},_s_paddingnew=function(){},_a_paddingnew=function(){},_s_paddingcur=function(){},_a_paddingcur=function(){},_onafter=function(){},_moveitems=function(){},_position=function(){};switch(sO.fx)
{case'crossfade':case'cover':case'cover-fade':case'uncover':case'uncover-fade':$cf2=$cfs.clone(true).appendTo($wrp);break;}
switch(sO.fx)
{case'crossfade':case'uncover':case'uncover-fade':$cf2.children().slice(0,nI).remove();$cf2.children().slice(opts.items.visibleConf.old).remove();break;case'cover':case'cover-fade':$cf2.children().slice(opts.items.visible).remove();$cf2.css(a_lef_vis);break;}
$cfs.css(a_lef);scrl=sc_setScroll(a_dur,sO.easing,conf);a_cfs[opts.d['left']]=(opts.usePadding)?opts.padding[opts.d[3]]:0;if(opts[opts.d['width']]=='variable'||opts[opts.d['height']]=='variable')
{_s_wrapper=function(){$wrp.css(w_siz);};_a_wrapper=function(){scrl.anims.push([$wrp,w_siz]);};}
if(opts.usePadding)
{if(i_new_l.not(i_cur_l).length)
{a_cur[opts.d['marginRight']]=i_cur_l.data('_cfs_origCssMargin');if(pL<0)
{i_cur_l.css(a_cur);}
else
{_s_paddingcur=function(){i_cur_l.css(a_cur);};_a_paddingcur=function(){scrl.anims.push([i_cur_l,a_cur]);};}}
switch(sO.fx)
{case'cover':case'cover-fade':$cf2.children().eq(nI-1).css(a_cur);break;}
if(i_new_l.not(i_old_l).length)
{a_old[opts.d['marginRight']]=i_old_l.data('_cfs_origCssMargin');_s_paddingold=function(){i_old_l.css(a_old);};_a_paddingold=function(){scrl.anims.push([i_old_l,a_old]);};}
if(pR>=0)
{a_new[opts.d['marginRight']]=i_new_l.data('_cfs_origCssMargin')+opts.padding[opts.d[1]];_s_paddingnew=function(){i_new_l.css(a_new);};_a_paddingnew=function(){scrl.anims.push([i_new_l,a_new]);};}}
_position=function(){$cfs.css(a_cfs);};var overFill=opts.items.visible+nI-itms.total;_moveitems=function(){if(overFill>0)
{$cfs.children().slice(itms.total).remove();i_old=$($cfs.children().slice(itms.total-(opts.items.visible-overFill)).get().concat($cfs.children().slice(0,overFill).get()));}
sc_showHiddenItems(hiddenitems);if(opts.usePadding)
{var l_itm=$cfs.children().eq(opts.items.visible+nI-1);l_itm.css(opts.d['marginRight'],l_itm.data('_cfs_origCssMargin'));}};var cb_arguments=sc_mapCallbackArguments(i_old,i_skp,i_new,nI,'prev',a_dur,w_siz);_onafter=function(){sc_afterScroll($cfs,$cf2,sO);crsl.isScrolling=false;clbk.onAfter=sc_fireCallbacks($tt0,sO,'onAfter',cb_arguments,clbk);queu=sc_fireQueue($cfs,queu,conf);if(!crsl.isPaused)
{$cfs.trigger(cf_e('play',conf));}};crsl.isScrolling=true;tmrs=sc_clearTimers(tmrs);clbk.onBefore=sc_fireCallbacks($tt0,sO,'onBefore',cb_arguments,clbk);switch(sO.fx)
{case'none':$cfs.css(a_cfs);_s_wrapper();_s_paddingold();_s_paddingnew();_s_paddingcur();_position();_moveitems();_onafter();break;case'fade':scrl.anims.push([$cfs,{'opacity':0},function(){_s_wrapper();_s_paddingold();_s_paddingnew();_s_paddingcur();_position();_moveitems();scrl=sc_setScroll(a_dur,sO.easing,conf);scrl.anims.push([$cfs,{'opacity':1},_onafter]);sc_startScroll(scrl,conf);}]);break;case'crossfade':$cfs.css({'opacity':0});scrl.anims.push([$cf2,{'opacity':0}]);scrl.anims.push([$cfs,{'opacity':1},_onafter]);_a_wrapper();_s_paddingold();_s_paddingnew();_s_paddingcur();_position();_moveitems();break;case'cover':scrl.anims.push([$cf2,a_cfs,function(){_s_paddingold();_s_paddingnew();_s_paddingcur();_position();_moveitems();_onafter();}]);_a_wrapper();break;case'cover-fade':scrl.anims.push([$cfs,{'opacity':0}]);scrl.anims.push([$cf2,a_cfs,function(){$cfs.css({'opacity':1});_s_paddingold();_s_paddingnew();_s_paddingcur();_position();_moveitems();_onafter();}]);_a_wrapper();break;case'uncover':scrl.anims.push([$cf2,a_wsz,_onafter]);_a_wrapper();_s_paddingold();_s_paddingnew();_s_paddingcur();_position();_moveitems();break;case'uncover-fade':$cfs.css({'opacity':0});scrl.anims.push([$cfs,{'opacity':1}]);scrl.anims.push([$cf2,a_wsz,_onafter]);_a_wrapper();_s_paddingold();_s_paddingnew();_s_paddingcur();_position();_moveitems();break;default:scrl.anims.push([$cfs,a_cfs,function(){_moveitems();_onafter();}]);_a_wrapper();_a_paddingold();_a_paddingnew();_a_paddingcur();break;}
sc_startScroll(scrl,conf);cf_setCookie(opts.cookie,$cfs,conf);$cfs.trigger(cf_e('updatePageStatus',conf),[false,w_siz]);return true;});$cfs.bind(cf_e('slide_next',conf),function(e,sO,nI){e.stopPropagation();var a_itm=$cfs.children();if(!opts.circular)
{if(itms.first==opts.items.visible)
{if(opts.infinite)
{$cfs.trigger(cf_e('prev',conf),itms.total-1);}
return e.stopImmediatePropagation();}}
sz_resetMargin(a_itm,opts);if(!is_number(nI))
{if(opts.items.filter!='*')
{var xI=(is_number(sO.items))?sO.items:gn_getVisibleOrg($cfs,opts);nI=gn_getScrollItemsNextFilter(a_itm,opts,0,xI);}
else
{nI=opts.items.visible;}
nI=cf_getAdjust(nI,opts,sO.items,$tt0);}
var lastItemNr=(itms.first==0)?itms.total:itms.first;if(!opts.circular)
{if(opts.items.visibleConf.variable)
{var vI=gn_getVisibleItemsNext(a_itm,opts,nI),xI=gn_getVisibleItemsPrev(a_itm,opts,lastItemNr-1);}
else
{var vI=opts.items.visible,xI=opts.items.visible;}
if(nI+vI>lastItemNr)
{nI=lastItemNr-xI;}}
opts.items.visibleConf.old=opts.items.visible;if(opts.items.visibleConf.variable)
{var vI=cf_getItemsAdjust(gn_getVisibleItemsNextTestCircular(a_itm,opts,nI,lastItemNr),opts,opts.items.visibleConf.adjust,$tt0);while(opts.items.visible-nI>=vI&&nI<itms.total)
{nI++;vI=cf_getItemsAdjust(gn_getVisibleItemsNextTestCircular(a_itm,opts,nI,lastItemNr),opts,opts.items.visibleConf.adjust,$tt0);}
opts.items.visible=vI;}
else if(opts.items.filter!='*')
{var vI=gn_getVisibleItemsNextFilter(a_itm,opts,nI);opts.items.visible=cf_getItemsAdjust(vI,opts,opts.items.visibleConf.adjust,$tt0);}
sz_resetMargin(a_itm,opts,true);if(nI==0)
{e.stopImmediatePropagation();return debug(conf,'0 items to scroll: Not scrolling.');}
debug(conf,'Scrolling '+nI+' items forward.');itms.first-=nI;while(itms.first<0)
{itms.first+=itms.total;}
if(!opts.circular)
{if(itms.first==opts.items.visible&&sO.onEnd)
{sO.onEnd.call($tt0,'next');}
if(!opts.infinite)
{nv_enableNavi(opts,itms.first,conf);}}
if(itms.total<opts.items.visible+nI)
{$cfs.children().slice(0,(opts.items.visible+nI)-itms.total).clone(true).appendTo($cfs);}
var a_itm=$cfs.children(),i_old=gi_getOldItemsNext(a_itm,opts),i_new=gi_getNewItemsNext(a_itm,opts,nI),i_cur_l=a_itm.eq(nI-1),i_old_l=i_old.last(),i_new_l=i_new.last();sz_resetMargin(a_itm,opts);var pL=0,pR=0;if(opts.align)
{var p=cf_getAlignPadding(i_new,opts);pL=p[0];pR=p[1];}
var hiddenitems=false,i_skp=$();if(opts.items.visibleConf.old<nI)
{i_skp=a_itm.slice(opts.items.visibleConf.old,nI);if(sO.fx=='directscroll')
{var orgW=opts.items[opts.d['width']];hiddenitems=i_skp;i_cur_l=i_old_l;sc_hideHiddenItems(hiddenitems);opts.items[opts.d['width']]='variable';}}
var $cf2=false,i_siz=ms_getTotalSize(a_itm.slice(0,nI),opts,'width'),w_siz=cf_mapWrapperSizes(ms_getSizes(i_new,opts,true),opts,!opts.usePadding),i_siz_vis=0,a_cfs={},a_cfs_vis={},a_cur={},a_old={},a_lef={},a_dur=sc_getDuration(sO,opts,nI,i_siz);switch(sO.fx)
{case'uncover':case'uncover-fade':i_siz_vis=ms_getTotalSize(a_itm.slice(0,opts.items.visibleConf.old),opts,'width');break;}
if(hiddenitems)
{opts.items[opts.d['width']]=orgW;}
if(opts.align)
{if(opts.padding[opts.d[1]]<0)
{opts.padding[opts.d[1]]=0;}}
sz_resetMargin(a_itm,opts,true);sz_resetMargin(i_old_l,opts,opts.padding[opts.d[1]]);if(opts.align)
{opts.padding[opts.d[1]]=pR;opts.padding[opts.d[3]]=pL;}
a_lef[opts.d['left']]=(opts.usePadding)?opts.padding[opts.d[3]]:0;var _s_wrapper=function(){},_a_wrapper=function(){},_s_paddingold=function(){},_a_paddingold=function(){},_s_paddingcur=function(){},_a_paddingcur=function(){},_onafter=function(){},_moveitems=function(){},_position=function(){};switch(sO.fx)
{case'crossfade':case'cover':case'cover-fade':case'uncover':case'uncover-fade':$cf2=$cfs.clone(true).appendTo($wrp);$cf2.children().slice(opts.items.visibleConf.old).remove();break;}
switch(sO.fx)
{case'crossfade':case'cover':case'cover-fade':$cfs.css('zIndex',1);$cf2.css('zIndex',0);break;}
scrl=sc_setScroll(a_dur,sO.easing,conf);a_cfs[opts.d['left']]=-i_siz;a_cfs_vis[opts.d['left']]=-i_siz_vis;if(pL<0)
{a_cfs[opts.d['left']]+=pL;}
if(opts[opts.d['width']]=='variable'||opts[opts.d['height']]=='variable')
{_s_wrapper=function(){$wrp.css(w_siz);};_a_wrapper=function(){scrl.anims.push([$wrp,w_siz]);};}
if(opts.usePadding)
{var i_new_l_m=i_new_l.data('_cfs_origCssMargin');if(pR>=0)
{i_new_l_m+=opts.padding[opts.d[1]];}
i_new_l.css(opts.d['marginRight'],i_new_l_m);if(i_cur_l.not(i_old_l).length)
{a_old[opts.d['marginRight']]=i_old_l.data('_cfs_origCssMargin');}
_s_paddingold=function(){i_old_l.css(a_old);};_a_paddingold=function(){scrl.anims.push([i_old_l,a_old]);};var i_cur_l_m=i_cur_l.data('_cfs_origCssMargin');if(pL>0)
{i_cur_l_m+=opts.padding[opts.d[3]];}
a_cur[opts.d['marginRight']]=i_cur_l_m;_s_paddingcur=function(){i_cur_l.css(a_cur);};_a_paddingcur=function(){scrl.anims.push([i_cur_l,a_cur]);};}
_position=function(){$cfs.css(a_lef);};var overFill=opts.items.visible+nI-itms.total;_moveitems=function(){if(overFill>0)
{$cfs.children().slice(itms.total).remove();}
var l_itm=$cfs.children().slice(0,nI).appendTo($cfs).last();if(overFill>0)
{i_new=gi_getCurrentItems(a_itm,opts);}
sc_showHiddenItems(hiddenitems);if(opts.usePadding)
{if(itms.total<opts.items.visible+nI){var i_cur_l=$cfs.children().eq(opts.items.visible-1);i_cur_l.css(opts.d['marginRight'],i_cur_l.data('_cfs_origCssMargin')+opts.padding[opts.d[1]]);}
l_itm.css(opts.d['marginRight'],l_itm.data('_cfs_origCssMargin'));}};var cb_arguments=sc_mapCallbackArguments(i_old,i_skp,i_new,nI,'next',a_dur,w_siz);_onafter=function(){$cfs.css('zIndex',$cfs.data('_cfs_origCssZindex'));sc_afterScroll($cfs,$cf2,sO);crsl.isScrolling=false;clbk.onAfter=sc_fireCallbacks($tt0,sO,'onAfter',cb_arguments,clbk);queu=sc_fireQueue($cfs,queu,conf);if(!crsl.isPaused)
{$cfs.trigger(cf_e('play',conf));}};crsl.isScrolling=true;tmrs=sc_clearTimers(tmrs);clbk.onBefore=sc_fireCallbacks($tt0,sO,'onBefore',cb_arguments,clbk);switch(sO.fx)
{case'none':$cfs.css(a_cfs);_s_wrapper();_s_paddingold();_s_paddingcur();_position();_moveitems();_onafter();break;case'fade':scrl.anims.push([$cfs,{'opacity':0},function(){_s_wrapper();_s_paddingold();_s_paddingcur();_position();_moveitems();scrl=sc_setScroll(a_dur,sO.easing,conf);scrl.anims.push([$cfs,{'opacity':1},_onafter]);sc_startScroll(scrl,conf);}]);break;case'crossfade':$cfs.css({'opacity':0});scrl.anims.push([$cf2,{'opacity':0}]);scrl.anims.push([$cfs,{'opacity':1},_onafter]);_a_wrapper();_s_paddingold();_s_paddingcur();_position();_moveitems();break;case'cover':$cfs.css(opts.d['left'],$wrp[opts.d['width']]());scrl.anims.push([$cfs,a_lef,_onafter]);_a_wrapper();_s_paddingold();_s_paddingcur();_moveitems();break;case'cover-fade':$cfs.css(opts.d['left'],$wrp[opts.d['width']]());scrl.anims.push([$cf2,{'opacity':0}]);scrl.anims.push([$cfs,a_lef,_onafter]);_a_wrapper();_s_paddingold();_s_paddingcur();_moveitems();break;case'uncover':scrl.anims.push([$cf2,a_cfs_vis,_onafter]);_a_wrapper();_s_paddingold();_s_paddingcur();_position();_moveitems();break;case'uncover-fade':$cfs.css({'opacity':0});scrl.anims.push([$cfs,{'opacity':1}]);scrl.anims.push([$cf2,a_cfs_vis,_onafter]);_a_wrapper();_s_paddingold();_s_paddingcur();_position();_moveitems();break;default:scrl.anims.push([$cfs,a_cfs,function(){_position();_moveitems();_onafter();}]);_a_wrapper();_a_paddingold();_a_paddingcur();break;}
sc_startScroll(scrl,conf);cf_setCookie(opts.cookie,$cfs,conf);$cfs.trigger(cf_e('updatePageStatus',conf),[false,w_siz]);return true;});$cfs.bind(cf_e('slideTo',conf),function(e,num,dev,org,obj,dir,clb){e.stopPropagation();var v=[num,dev,org,obj,dir,clb],t=['string/number/object','number','boolean','object','string','function'],a=cf_sortParams(v,t);obj=a[3];dir=a[4];clb=a[5];num=gn_getItemIndex(a[0],a[1],a[2],itms,$cfs);if(num==0)
{return false;}
if(!is_object(obj))
{obj=false;}
if(dir!='prev'&&dir!='next')
{if(opts.circular)
{dir=(num<=itms.total/2)?'next':'prev';}
else
{dir=(itms.first==0||itms.first>num)?'next':'prev';}}
if(dir=='prev')
{num=itms.total-num;}
$cfs.trigger(cf_e(dir,conf),[obj,num,clb]);return true;});$cfs.bind(cf_e('prevPage',conf),function(e,obj,clb){e.stopPropagation();var cur=$cfs.triggerHandler(cf_e('currentPage',conf));return $cfs.triggerHandler(cf_e('slideToPage',conf),[cur-1,obj,'prev',clb]);});$cfs.bind(cf_e('nextPage',conf),function(e,obj,clb){e.stopPropagation();var cur=$cfs.triggerHandler(cf_e('currentPage',conf));return $cfs.triggerHandler(cf_e('slideToPage',conf),[cur+1,obj,'next',clb]);});$cfs.bind(cf_e('slideToPage',conf),function(e,pag,obj,dir,clb){e.stopPropagation();if(!is_number(pag))
{pag=$cfs.triggerHandler(cf_e('currentPage',conf));}
var ipp=opts.pagination.items||opts.items.visible,max=Math.ceil(itms.total/ipp)-1;if(pag<0)
{pag=max;}
if(pag>max)
{pag=0;}
return $cfs.triggerHandler(cf_e('slideTo',conf),[pag*ipp,0,true,obj,dir,clb]);});$cfs.bind(cf_e('jumpToStart',conf),function(e,s){e.stopPropagation();if(s)
{s=gn_getItemIndex(s,0,true,itms,$cfs);}
else
{s=0;}
s+=itms.first;if(s!=0)
{if(itms.total>0)
{while(s>itms.total)
{s-=itms.total;}}
$cfs.prepend($cfs.children().slice(s,itms.total));}
return true;});$cfs.bind(cf_e('synchronise',conf),function(e,s){e.stopPropagation();if(s)
{s=cf_getSynchArr(s);}
else if(opts.synchronise)
{s=opts.synchronise;}
else
{return debug(conf,'No carousel to synchronise.');}
var n=$cfs.triggerHandler(cf_e('currentPosition',conf)),x=true;for(var j=0,l=s.length;j<l;j++)
{if(!s[j][0].triggerHandler(cf_e('slideTo',conf),[n,s[j][3],true]))
{x=false;}}
return x;});$cfs.bind(cf_e('queue',conf),function(e,dir,opt){e.stopPropagation();if(is_function(dir))
{dir.call($tt0,queu);}
else if(is_array(dir))
{queu=dir;}
else if(!is_undefined(dir))
{queu.push([dir,opt]);}
return queu;});$cfs.bind(cf_e('insertItem',conf),function(e,itm,num,org,dev){e.stopPropagation();var v=[itm,num,org,dev],t=['string/object','string/number/object','boolean','number'],a=cf_sortParams(v,t);itm=a[0];num=a[1];org=a[2];dev=a[3];if(is_object(itm)&&!is_jquery(itm))
{itm=$(itm);}
else if(is_string(itm))
{itm=$(itm);}
if(!is_jquery(itm)||itm.length==0)
{return debug(conf,'Not a valid object.');}
if(is_undefined(num))
{num='end';}
sz_storeMargin(itm,opts);sz_storeOrigCss(itm);var orgNum=num,before='before';if(num=='end')
{if(org)
{if(itms.first==0)
{num=itms.total-1;before='after';}
else
{num=itms.first;itms.first+=itm.length;}
if(num<0)
{num=0;}}
else
{num=itms.total-1;before='after';}}
else
{num=gn_getItemIndex(num,dev,org,itms,$cfs);}
var $cit=$cfs.children().eq(num);if($cit.length)
{$cit[before](itm);}
else
{debug(conf,'Correct insert-position not found! Appending item to the end.');$cfs.append(itm);}
if(orgNum!='end'&&!org)
{if(num<itms.first)
{itms.first+=itm.length;}}
itms.total=$cfs.children().length;if(itms.first>=itms.total)
{itms.first-=itms.total;}
$cfs.trigger(cf_e('updateSizes',conf));$cfs.trigger(cf_e('linkAnchors',conf));return true;});$cfs.bind(cf_e('removeItem',conf),function(e,num,org,dev){e.stopPropagation();var v=[num,org,dev],t=['string/number/object','boolean','number'],a=cf_sortParams(v,t);num=a[0];org=a[1];dev=a[2];var removed=false;if(num instanceof $&&num.length>1)
{$removed=$();num.each(function(i,el){var $rem=$cfs.trigger(cf_e('removeItem',conf),[$(this),org,dev]);if($rem)
{$removed=$removed.add($rem);}});return $removed;}
if(is_undefined(num)||num=='end')
{$removed=$cfs.children().last();}
else
{num=gn_getItemIndex(num,dev,org,itms,$cfs);var $removed=$cfs.children().eq(num);if($removed.length)
{if(num<itms.first)
{itms.first-=$removed.length;}}}
if($removed&&$removed.length)
{$removed.detach();itms.total=$cfs.children().length;$cfs.trigger(cf_e('updateSizes',conf));}
return $removed;});$cfs.bind(cf_e('onBefore',conf)+' '+cf_e('onAfter',conf),function(e,fn){e.stopPropagation();var eType=e.type.slice(conf.events.prefix.length);if(is_array(fn))
{clbk[eType]=fn;}
if(is_function(fn))
{clbk[eType].push(fn);}
return clbk[eType];});$cfs.bind(cf_e('currentPosition',conf),function(e,fn){e.stopPropagation();if(itms.first==0)
{var val=0;}
else
{var val=itms.total-itms.first;}
if(is_function(fn))
{fn.call($tt0,val);}
return val;});$cfs.bind(cf_e('currentPage',conf),function(e,fn){e.stopPropagation();var ipp=opts.pagination.items||opts.items.visible,max=Math.ceil(itms.total/ipp-1),nr;if(itms.first==0)
{nr=0;}
else if(itms.first<itms.total%ipp)
{nr=0;}
else if(itms.first==ipp&&!opts.circular)
{nr=max;}
else
{nr=Math.round((itms.total-itms.first)/ipp);}
if(nr<0)
{nr=0;}
if(nr>max)
{nr=max;}
if(is_function(fn))
{fn.call($tt0,nr);}
return nr;});$cfs.bind(cf_e('currentVisible',conf),function(e,fn){e.stopPropagation();var $i=gi_getCurrentItems($cfs.children(),opts);if(is_function(fn))
{fn.call($tt0,$i);}
return $i;});$cfs.bind(cf_e('slice',conf),function(e,f,l,fn){e.stopPropagation();if(itms.total==0)
{return false;}
var v=[f,l,fn],t=['number','number','function'],a=cf_sortParams(v,t);f=(is_number(a[0]))?a[0]:0;l=(is_number(a[1]))?a[1]:itms.total;fn=a[2];f+=itms.first;l+=itms.first;if(items.total>0)
{while(f>itms.total)
{f-=itms.total;}
while(l>itms.total)
{l-=itms.total;}
while(f<0)
{f+=itms.total;}
while(l<0)
{l+=itms.total;}}
var $iA=$cfs.children(),$i;if(l>f)
{$i=$iA.slice(f,l);}
else
{$i=$($iA.slice(f,itms.total).get().concat($iA.slice(0,l).get()));}
if(is_function(fn))
{fn.call($tt0,$i);}
return $i;});$cfs.bind(cf_e('isPaused',conf)+' '+cf_e('isStopped',conf)+' '+cf_e('isScrolling',conf),function(e,fn){e.stopPropagation();var eType=e.type.slice(conf.events.prefix.length),value=crsl[eType];if(is_function(fn))
{fn.call($tt0,value);}
return value;});$cfs.bind(cf_e('configuration',conf),function(e,a,b,c){e.stopPropagation();var reInit=false;if(is_function(a))
{a.call($tt0,opts);}
else if(is_object(a))
{opts_orig=$.extend(true,{},opts_orig,a);if(b!==false)reInit=true;else opts=$.extend(true,{},opts,a);}
else if(!is_undefined(a))
{if(is_function(b))
{var val=eval('opts.'+a);if(is_undefined(val))
{val='';}
b.call($tt0,val);}
else if(!is_undefined(b))
{if(typeof c!=='boolean')c=true;eval('opts_orig.'+a+' = b');if(c!==false)reInit=true;else eval('opts.'+a+' = b');}
else
{return eval('opts.'+a);}}
if(reInit)
{sz_resetMargin($cfs.children(),opts);FN._cfs_init(opts_orig);FN._cfs_bind_buttons();var sz=sz_setSizes($cfs,opts);$cfs.trigger(cf_e('updatePageStatus',conf),[true,sz]);}
return opts;});$cfs.bind(cf_e('linkAnchors',conf),function(e,$con,sel){e.stopPropagation();if(is_undefined($con))
{$con=$('body');}
else if(is_string($con))
{$con=$($con);}
if(!is_jquery($con)||$con.length==0)
{return debug(conf,'Not a valid object.');}
if(!is_string(sel))
{sel='a.testimonial';}
$con.find(sel).each(function(){var h=this.hash||'';if(h.length>0&&$cfs.children().index($(h))!=-1)
{$(this).unbind('click').click(function(e){e.preventDefault();$cfs.trigger(cf_e('slideTo',conf),h);});}});return true;});$cfs.bind(cf_e('updatePageStatus',conf),function(e,build,sizes){e.stopPropagation();if(!opts.pagination.container)
{return;}
var ipp=opts.pagination.items||opts.items.visible,pgs=Math.ceil(itms.total/ipp);if(build)
{if(opts.pagination.anchorBuilder)
{opts.pagination.container.children().remove();opts.pagination.container.each(function(){for(var a=0;a<pgs;a++)
{var i=$cfs.children().eq(gn_getItemIndex(a*ipp,0,true,itms,$cfs));$(this).append(opts.pagination.anchorBuilder.call(i[0],a+1));}});}
opts.pagination.container.each(function(){$(this).children().unbind(opts.pagination.event).each(function(a){$(this).bind(opts.pagination.event,function(e){e.preventDefault();$cfs.trigger(cf_e('slideTo',conf),[a*ipp,-opts.pagination.deviation,true,opts.pagination]);});});});}
var selected=$cfs.triggerHandler(cf_e('currentPage',conf))+opts.pagination.deviation;if(selected>=pgs)
{selected=0;}
if(selected<0)
{selected=pgs-1;}
opts.pagination.container.each(function(){$(this).children().removeClass(cf_c('selected',conf)).eq(selected).addClass(cf_c('selected',conf));});return true;});$cfs.bind(cf_e('updateSizes',conf),function(e){var vI=opts.items.visible,a_itm=$cfs.children(),avail_primary=ms_getParentSize($wrp,opts,'width');itms.total=a_itm.length;if(crsl.primarySizePercentage)
{opts.maxDimension=avail_primary;opts[opts.d['width']]=ms_getPercentage(avail_primary,crsl.primarySizePercentage);}
else
{opts.maxDimension=ms_getMaxDimension(opts,avail_primary);}
if(opts.responsive)
{opts.items.width=opts.items.sizesConf.width;opts.items.height=opts.items.sizesConf.height;opts=in_getResponsiveValues(opts,a_itm,avail_primary);vI=opts.items.visible;sz_setResponsiveSizes(opts,a_itm);}
else if(opts.items.visibleConf.variable)
{vI=gn_getVisibleItemsNext(a_itm,opts,0);}
else if(opts.items.filter!='*')
{vI=gn_getVisibleItemsNextFilter(a_itm,opts,0);}
if(!opts.circular&&itms.first!=0&&vI>itms.first){if(opts.items.visibleConf.variable)
{var nI=gn_getVisibleItemsPrev(a_itm,opts,itms.first)-itms.first;}
else if(opts.items.filter!='*')
{var nI=gn_getVisibleItemsPrevFilter(a_itm,opts,itms.first)-itms.first;}
else
{var nI=opts.items.visible-itms.first;}
debug(conf,'Preventing non-circular: sliding '+nI+' items backward.');$cfs.trigger(cf_e('prev',conf),nI);}
opts.items.visible=cf_getItemsAdjust(vI,opts,opts.items.visibleConf.adjust,$tt0);opts.items.visibleConf.old=opts.items.visible;opts=in_getAlignPadding(opts,a_itm);var sz=sz_setSizes($cfs,opts);$cfs.trigger(cf_e('updatePageStatus',conf),[true,sz]);nv_showNavi(opts,itms.total,conf);nv_enableNavi(opts,itms.first,conf);return sz;});$cfs.bind(cf_e('destroy',conf),function(e,orgOrder){e.stopPropagation();tmrs=sc_clearTimers(tmrs);$cfs.data('_cfs_isCarousel',false);$cfs.trigger(cf_e('finish',conf));if(orgOrder)
{$cfs.trigger(cf_e('jumpToStart',conf));}
sz_restoreOrigCss($cfs.children());sz_restoreOrigCss($cfs);FN._cfs_unbind_events();FN._cfs_unbind_buttons();if(conf.wrapper=='parent')
{sz_restoreOrigCss($wrp);}
else
{$wrp.replaceWith($cfs);}
return true;});$cfs.bind(cf_e('debug',conf),function(e){debug(conf,'Carousel width: '+opts.width);debug(conf,'Carousel height: '+opts.height);debug(conf,'Item widths: '+opts.items.width);debug(conf,'Item heights: '+opts.items.height);debug(conf,'Number of items visible: '+opts.items.visible);if(opts.auto.play)
{debug(conf,'Number of items scrolled automatically: '+opts.auto.items);}
if(opts.prev.button)
{debug(conf,'Number of items scrolled backward: '+opts.prev.items);}
if(opts.next.button)
{debug(conf,'Number of items scrolled forward: '+opts.next.items);}
return conf.debug;});$cfs.bind('_cfs_triggerEvent',function(e,n,o){e.stopPropagation();return $cfs.triggerHandler(cf_e(n,conf),o);});};FN._cfs_unbind_events=function(){$cfs.unbind(cf_e('',conf));$cfs.unbind(cf_e('',conf,false));$cfs.unbind('_cfs_triggerEvent');};FN._cfs_bind_buttons=function(){FN._cfs_unbind_buttons();nv_showNavi(opts,itms.total,conf);nv_enableNavi(opts,itms.first,conf);if(opts.auto.pauseOnHover)
{var pC=bt_pauseOnHoverConfig(opts.auto.pauseOnHover);$wrp.bind(cf_e('mouseenter',conf,false),function(){$cfs.trigger(cf_e('pause',conf),pC);}).bind(cf_e('mouseleave',conf,false),function(){$cfs.trigger(cf_e('resume',conf));});}
if(opts.auto.button)
{opts.auto.button.bind(cf_e(opts.auto.event,conf,false),function(e){e.preventDefault();var ev=false,pC=null;if(crsl.isPaused)
{ev='play';}
else if(opts.auto.pauseOnEvent)
{ev='pause';pC=bt_pauseOnHoverConfig(opts.auto.pauseOnEvent);}
if(ev)
{$cfs.trigger(cf_e(ev,conf),pC);}});}
if(opts.prev.button)
{opts.prev.button.bind(cf_e(opts.prev.event,conf,false),function(e){e.preventDefault();$cfs.trigger(cf_e('prev',conf));});if(opts.prev.pauseOnHover)
{var pC=bt_pauseOnHoverConfig(opts.prev.pauseOnHover);opts.prev.button.bind(cf_e('mouseenter',conf,false),function(){$cfs.trigger(cf_e('pause',conf),pC);}).bind(cf_e('mouseleave',conf,false),function(){$cfs.trigger(cf_e('resume',conf));});}}
if(opts.next.button)
{opts.next.button.bind(cf_e(opts.next.event,conf,false),function(e){e.preventDefault();$cfs.trigger(cf_e('next',conf));});if(opts.next.pauseOnHover)
{var pC=bt_pauseOnHoverConfig(opts.next.pauseOnHover);opts.next.button.bind(cf_e('mouseenter',conf,false),function(){$cfs.trigger(cf_e('pause',conf),pC);}).bind(cf_e('mouseleave',conf,false),function(){$cfs.trigger(cf_e('resume',conf));});}}
if(opts.pagination.container)
{if(opts.pagination.pauseOnHover)
{var pC=bt_pauseOnHoverConfig(opts.pagination.pauseOnHover);opts.pagination.container.bind(cf_e('mouseenter',conf,false),function(){$cfs.trigger(cf_e('pause',conf),pC);}).bind(cf_e('mouseleave',conf,false),function(){$cfs.trigger(cf_e('resume',conf));});}}
if(opts.prev.key||opts.next.key)
{$(document).bind(cf_e('keyup',conf,false,true,true),function(e){var k=e.keyCode;if(k==opts.next.key)
{e.preventDefault();$cfs.trigger(cf_e('next',conf));}
if(k==opts.prev.key)
{e.preventDefault();$cfs.trigger(cf_e('prev',conf));}});}
if(opts.pagination.keys)
{$(document).bind(cf_e('keyup',conf,false,true,true),function(e){var k=e.keyCode;if(k>=49&&k<58)
{k=(k-49)*opts.items.visible;if(k<=itms.total)
{e.preventDefault();$cfs.trigger(cf_e('slideTo',conf),[k,0,true,opts.pagination]);}}});}
if($.fn.swipe)
{var isTouch='ontouchstart'in window;if((isTouch&&opts.swipe.onTouch)||(!isTouch&&opts.swipe.onMouse))
{var scP=$.extend(true,{},opts.prev,opts.swipe),scN=$.extend(true,{},opts.next,opts.swipe),swP=function(){$cfs.trigger(cf_e('prev',conf),[scP])},swN=function(){$cfs.trigger(cf_e('next',conf),[scN])};switch(opts.direction)
{case'up':case'down':opts.swipe.options.swipeUp=swN;opts.swipe.options.swipeDown=swP;break;default:opts.swipe.options.swipeLeft=swN;opts.swipe.options.swipeRight=swP;}
if(crsl.swipe)
{$cfs.swipe('destroy');}
$wrp.swipe(opts.swipe.options);$wrp.css('cursor','move');crsl.swipe=true;}}
if($.fn.mousewheel)
{if(opts.mousewheel)
{var mcP=$.extend(true,{},opts.prev,opts.mousewheel),mcN=$.extend(true,{},opts.next,opts.mousewheel);if(crsl.mousewheel)
{$wrp.unbind(cf_e('mousewheel',conf,false));}
$wrp.bind(cf_e('mousewheel',conf,false),function(e,delta){e.preventDefault();if(delta>0)
{$cfs.trigger(cf_e('prev',conf),[mcP]);}
else
{$cfs.trigger(cf_e('next',conf),[mcN]);}});crsl.mousewheel=true;}}
if(opts.auto.play)
{$cfs.trigger(cf_e('play',conf),opts.auto.delay);}
if(crsl.upDateOnWindowResize)
{var resizeFn=function(e){$cfs.trigger(cf_e('finish',conf));if(opts.auto.pauseOnResize&&!crsl.isPaused)
{$cfs.trigger(cf_e('play',conf));}
sz_resetMargin($cfs.children(),opts);$cfs.trigger(cf_e('updateSizes',conf));};var $w=$(window),onResize=null;if($.debounce&&conf.onWindowResize=='debounce')
{onResize=$.debounce(200,resizeFn);}
else if($.throttle&&conf.onWindowResize=='throttle')
{onResize=$.throttle(300,resizeFn);}
else
{var _windowWidth=0,_windowHeight=0;onResize=function(){var nw=$w.width(),nh=$w.height();if(nw!=_windowWidth||nh!=_windowHeight)
{resizeFn();_windowWidth=nw;_windowHeight=nh;}};}
$w.bind(cf_e('resize',conf,false,true,true),onResize);}};FN._cfs_unbind_buttons=function(){var ns1=cf_e('',conf),ns2=cf_e('',conf,false);ns3=cf_e('',conf,false,true,true);$(document).unbind(ns3);$(window).unbind(ns3);$wrp.unbind(ns2);if(opts.auto.button)
{opts.auto.button.unbind(ns2);}
if(opts.prev.button)
{opts.prev.button.unbind(ns2);}
if(opts.next.button)
{opts.next.button.unbind(ns2);}
if(opts.pagination.container)
{opts.pagination.container.unbind(ns2);if(opts.pagination.anchorBuilder)
{opts.pagination.container.children().remove();}}
if(crsl.swipe)
{$cfs.swipe('destroy');$wrp.css('cursor','default');crsl.swipe=false;}
if(crsl.mousewheel)
{crsl.mousewheel=false;}
nv_showNavi(opts,'hide',conf);nv_enableNavi(opts,'removeClass',conf);};if(is_boolean(configs))
{configs={'debug':configs};}
var crsl={'direction':'next','isPaused':true,'isScrolling':false,'isStopped':false,'mousewheel':false,'swipe':false},itms={'total':$cfs.children().length,'first':0},tmrs={'auto':null,'progress':null,'startTime':getTime(),'timePassed':0},scrl={'isStopped':false,'duration':0,'startTime':0,'easing':'','anims':[]},clbk={'onBefore':[],'onAfter':[]},queu=[],conf=$.extend(true,{},$.fn.testiMonial.configs,configs),opts={},opts_orig=$.extend(true,{},options),$wrp=(conf.wrapper=='parent')?$cfs.parent():$cfs.wrap('<'+conf.wrapper.element+' class="'+conf.wrapper.classname+'" />').parent();conf.selector=$cfs.selector;conf.serialNumber=$.fn.testiMonial.serialNumber++;conf.transition=(conf.transition&&$.fn.transition)?'transition':'animate';FN._cfs_init(opts_orig,true,starting_position);FN._cfs_build();FN._cfs_bind_events();FN._cfs_bind_buttons();if(is_array(opts.items.start))
{var start_arr=opts.items.start;}
else
{var start_arr=[];if(opts.items.start!=0)
{start_arr.push(opts.items.start);}}
if(opts.cookie)
{start_arr.unshift(parseInt(cf_getCookie(opts.cookie),10));}
if(start_arr.length>0)
{for(var a=0,l=start_arr.length;a<l;a++)
{var s=start_arr[a];if(s==0)
{continue;}
if(s===true)
{s=window.location.hash;if(s.length<1)
{continue;}}
else if(s==='random')
{s=Math.floor(Math.random()*itms.total);}
if($cfs.triggerHandler(cf_e('slideTo',conf),[s,0,true,{fx:'none'}]))
{break;}}}
var siz=sz_setSizes($cfs,opts),itm=gi_getCurrentItems($cfs.children(),opts);if(opts.onCreate)
{opts.onCreate.call($tt0,{'width':siz.width,'height':siz.height,'items':itm});}
$cfs.trigger(cf_e('updatePageStatus',conf),[true,siz]);$cfs.trigger(cf_e('linkAnchors',conf));if(conf.debug)
{$cfs.trigger(cf_e('debug',conf));}
return $cfs;};$.fn.testiMonial.serialNumber=1;$.fn.testiMonial.defaults={'synchronise':false,'infinite':true,'circular':true,'responsive':false,'direction':'left','items':{'start':0},'scroll':{'easing':'swing','duration':500,'pauseOnHover':false,'event':'click','queue':false}};$.fn.testiMonial.configs={'debug':false,'transition':false,'onWindowResize':'throttle','events':{'prefix':'','namespace':'cfs'},'wrapper':{'element':'div','classname':'testimonial_wrapper'},'classnames':{}};$.fn.testiMonial.pageAnchorBuilder=function(nr){return'<a href="#"><span>'+nr+'</span></a>';};$.fn.testiMonial.progressbarUpdater=function(perc){$(this).css('width',perc+'%');};$.fn.testiMonial.cookie={get:function(n){n+='=';var ca=document.cookie.split(';');for(var a=0,l=ca.length;a<l;a++)
{var c=ca[a];while(c.charAt(0)==' ')
{c=c.slice(1);}
if(c.indexOf(n)==0)
{return c.slice(n.length);}}
return 0;},set:function(n,v,d){var e="";if(d)
{var date=new Date();date.setTime(date.getTime()+(d*24*60*60*1000));e="; expires="+date.toGMTString();}
document.cookie=n+'='+v+e+'; path=/';},remove:function(n){$.fn.testiMonial.cookie.set(n,"",-1);}};function sc_setScroll(d,e,c){if(c.transition=='transition')
{if(e=='swing')
{e='ease';}}
return{anims:[],duration:d,orgDuration:d,easing:e,startTime:getTime()};}
function sc_startScroll(s,c){for(var a=0,l=s.anims.length;a<l;a++)
{var b=s.anims[a];if(!b)
{continue;}
b[0][c.transition](b[1],s.duration,s.easing,b[2]);}}
function sc_stopScroll(s,finish){if(!is_boolean(finish))
{finish=true;}
if(is_object(s.pre))
{sc_stopScroll(s.pre,finish);}
for(var a=0,l=s.anims.length;a<l;a++)
{var b=s.anims[a];b[0].stop(true);if(finish)
{b[0].css(b[1]);if(is_function(b[2]))
{b[2]();}}}
if(is_object(s.post))
{sc_stopScroll(s.post,finish);}}
function sc_afterScroll($c,$c2,o){if($c2)
{$c2.remove();}
switch(o.fx){case'fade':case'crossfade':case'cover-fade':case'uncover-fade':$c.css('filter','');$c.css('opacity',1);break;}}
function sc_fireCallbacks($t,o,b,a,c){if(o[b])
{o[b].call($t,a);}
if(c[b].length)
{for(var i=0,l=c[b].length;i<l;i++)
{c[b][i].call($t,a);}}
return[];}
function sc_fireQueue($c,q,c){if(q.length)
{$c.trigger(cf_e(q[0][0],c),q[0][1]);q.shift();}
return q;}
function sc_hideHiddenItems(hiddenitems){hiddenitems.each(function(){var hi=$(this);hi.data('_cfs_isHidden',hi.is(':hidden')).hide();});}
function sc_showHiddenItems(hiddenitems){if(hiddenitems)
{hiddenitems.each(function(){var hi=$(this);if(!hi.data('_cfs_isHidden'))
{hi.show();}});}}
function sc_clearTimers(t){if(t.auto)
{clearTimeout(t.auto);}
if(t.progress)
{clearInterval(t.progress);}
return t;}
function sc_mapCallbackArguments(i_old,i_skp,i_new,s_itm,s_dir,s_dur,w_siz){return{'width':w_siz.width,'height':w_siz.height,'items':{'old':i_old,'skipped':i_skp,'visible':i_new},'scroll':{'items':s_itm,'direction':s_dir,'duration':s_dur}};}
function sc_getDuration(sO,o,nI,siz){var dur=sO.duration;if(sO.fx=='none')
{return 0;}
if(dur=='auto')
{dur=o.scroll.duration/o.scroll.items*nI;}
else if(dur<10)
{dur=siz/dur;}
if(dur<1)
{return 0;}
if(sO.fx=='fade')
{dur=dur/2;}
return Math.round(dur);}
function nv_showNavi(o,t,c){var minimum=(is_number(o.items.minimum))?o.items.minimum:o.items.visible+1;if(t=='show'||t=='hide')
{var f=t;}
else if(minimum>t)
{debug(c,'Not enough items ('+t+' total, '+minimum+' needed): Hiding navigation.');var f='hide';}
else
{var f='show';}
var s=(f=='show')?'removeClass':'addClass',h=cf_c('hidden',c);if(o.auto.button)
{o.auto.button[f]()[s](h);}
if(o.prev.button)
{o.prev.button[f]()[s](h);}
if(o.next.button)
{o.next.button[f]()[s](h);}
if(o.pagination.container)
{o.pagination.container[f]()[s](h);}}
function nv_enableNavi(o,f,c){if(o.circular||o.infinite)return;var fx=(f=='removeClass'||f=='addClass')?f:false,di=cf_c('disabled',c);if(o.auto.button&&fx)
{o.auto.button[fx](di);}
if(o.prev.button)
{var fn=fx||(f==0)?'addClass':'removeClass';o.prev.button[fn](di);}
if(o.next.button)
{var fn=fx||(f==o.items.visible)?'addClass':'removeClass';o.next.button[fn](di);}}
function go_getObject($tt,obj){if(is_function(obj))
{obj=obj.call($tt);}
else if(is_undefined(obj))
{obj={};}
return obj;}
function go_getItemsObject($tt,obj){obj=go_getObject($tt,obj);if(is_number(obj))
{obj={'visible':obj};}
else if(obj=='variable')
{obj={'visible':obj,'width':obj,'height':obj};}
else if(!is_object(obj))
{obj={};}
return obj;}
function go_getScrollObject($tt,obj){obj=go_getObject($tt,obj);if(is_number(obj))
{if(obj<=50)
{obj={'items':obj};}
else
{obj={'duration':obj};}}
else if(is_string(obj))
{obj={'easing':obj};}
else if(!is_object(obj))
{obj={};}
return obj;}
function go_getNaviObject($tt,obj){obj=go_getObject($tt,obj);if(is_string(obj))
{var temp=cf_getKeyCode(obj);if(temp==-1)
{obj=$(obj);}
else
{obj=temp;}}
return obj;}
function go_getAutoObject($tt,obj){obj=go_getNaviObject($tt,obj);if(is_jquery(obj))
{obj={'button':obj};}
else if(is_boolean(obj))
{obj={'play':obj};}
else if(is_number(obj))
{obj={'timeoutDuration':obj};}
if(obj.progress)
{if(is_string(obj.progress)||is_jquery(obj.progress))
{obj.progress={'bar':obj.progress};}}
return obj;}
function go_complementAutoObject($tt,obj){if(is_function(obj.button))
{obj.button=obj.button.call($tt);}
if(is_string(obj.button))
{obj.button=$(obj.button);}
if(!is_boolean(obj.play))
{obj.play=true;}
if(!is_number(obj.delay))
{obj.delay=0;}
if(is_undefined(obj.pauseOnEvent))
{obj.pauseOnEvent=true;}
if(!is_boolean(obj.pauseOnResize))
{obj.pauseOnResize=true;}
if(!is_number(obj.timeoutDuration))
{obj.timeoutDuration=(obj.duration<10)?2500:obj.duration*5;}
if(obj.progress)
{if(is_function(obj.progress.bar))
{obj.progress.bar=obj.progress.bar.call($tt);}
if(is_string(obj.progress.bar))
{obj.progress.bar=$(obj.progress.bar);}
if(obj.progress.bar)
{if(!is_function(obj.progress.updater))
{obj.progress.updater=$.fn.testiMonial.progressbarUpdater;}
if(!is_number(obj.progress.interval))
{obj.progress.interval=50;}}
else
{obj.progress=false;}}
return obj;}
function go_getPrevNextObject($tt,obj){obj=go_getNaviObject($tt,obj);if(is_jquery(obj))
{obj={'button':obj};}
else if(is_number(obj))
{obj={'key':obj};}
return obj;}
function go_complementPrevNextObject($tt,obj){if(is_function(obj.button))
{obj.button=obj.button.call($tt);}
if(is_string(obj.button))
{obj.button=$(obj.button);}
if(is_string(obj.key))
{obj.key=cf_getKeyCode(obj.key);}
return obj;}
function go_getPaginationObject($tt,obj){obj=go_getNaviObject($tt,obj);if(is_jquery(obj))
{obj={'container':obj};}
else if(is_boolean(obj))
{obj={'keys':obj};}
return obj;}
function go_complementPaginationObject($tt,obj){if(is_function(obj.container))
{obj.container=obj.container.call($tt);}
if(is_string(obj.container))
{obj.container=$(obj.container);}
if(!is_number(obj.items))
{obj.items=false;}
if(!is_boolean(obj.keys))
{obj.keys=false;}
if(!is_function(obj.anchorBuilder)&&!is_false(obj.anchorBuilder))
{obj.anchorBuilder=$.fn.testiMonial.pageAnchorBuilder;}
if(!is_number(obj.deviation))
{obj.deviation=0;}
return obj;}
function go_getSwipeObject($tt,obj){if(is_function(obj))
{obj=obj.call($tt);}
if(is_undefined(obj))
{obj={'onTouch':false};}
if(is_true(obj))
{obj={'onTouch':obj};}
else if(is_number(obj))
{obj={'items':obj};}
return obj;}
function go_complementSwipeObject($tt,obj){if(!is_boolean(obj.onTouch))
{obj.onTouch=true;}
if(!is_boolean(obj.onMouse))
{obj.onMouse=false;}
if(!is_object(obj.options))
{obj.options={};}
if(!is_boolean(obj.options.triggerOnTouchEnd))
{obj.options.triggerOnTouchEnd=false;}
return obj;}
function go_getMousewheelObject($tt,obj){if(is_function(obj))
{obj=obj.call($tt);}
if(is_true(obj))
{obj={};}
else if(is_number(obj))
{obj={'items':obj};}
else if(is_undefined(obj))
{obj=false;}
return obj;}
function go_complementMousewheelObject($tt,obj){return obj;}
function gn_getItemIndex(num,dev,org,items,$cfs){if(is_string(num))
{num=$(num,$cfs);}
if(is_object(num))
{num=$(num,$cfs);}
if(is_jquery(num))
{num=$cfs.children().index(num);if(!is_boolean(org))
{org=false;}}
else
{if(!is_boolean(org))
{org=true;}}
if(!is_number(num))
{num=0;}
if(!is_number(dev))
{dev=0;}
if(org)
{num+=items.first;}
num+=dev;if(items.total>0)
{while(num>=items.total)
{num-=items.total;}
while(num<0)
{num+=items.total;}}
return num;}
function gn_getVisibleItemsPrev(i,o,s){var t=0,x=0;for(var a=s;a>=0;a--)
{var j=i.eq(a);t+=(j.is(':visible'))?j[o.d['outerWidth']](true):0;if(t>o.maxDimension)
{return x;}
if(a==0)
{a=i.length;}
x++;}}
function gn_getVisibleItemsPrevFilter(i,o,s){return gn_getItemsPrevFilter(i,o.items.filter,o.items.visibleConf.org,s);}
function gn_getScrollItemsPrevFilter(i,o,s,m){return gn_getItemsPrevFilter(i,o.items.filter,m,s);}
function gn_getItemsPrevFilter(i,f,m,s){var t=0,x=0;for(var a=s,l=i.length;a>=0;a--)
{x++;if(x==l)
{return x;}
var j=i.eq(a);if(j.is(f))
{t++;if(t==m)
{return x;}}
if(a==0)
{a=l;}}}
function gn_getVisibleOrg($c,o){return o.items.visibleConf.org||$c.children().slice(0,o.items.visible).filter(o.items.filter).length;}
function gn_getVisibleItemsNext(i,o,s){var t=0,x=0;for(var a=s,l=i.length-1;a<=l;a++)
{var j=i.eq(a);t+=(j.is(':visible'))?j[o.d['outerWidth']](true):0;if(t>o.maxDimension)
{return x;}
x++;if(x==l+1)
{return x;}
if(a==l)
{a=-1;}}}
function gn_getVisibleItemsNextTestCircular(i,o,s,l){var v=gn_getVisibleItemsNext(i,o,s);if(!o.circular)
{if(s+v>l)
{v=l-s;}}
return v;}
function gn_getVisibleItemsNextFilter(i,o,s){return gn_getItemsNextFilter(i,o.items.filter,o.items.visibleConf.org,s,o.circular);}
function gn_getScrollItemsNextFilter(i,o,s,m){return gn_getItemsNextFilter(i,o.items.filter,m+1,s,o.circular)-1;}
function gn_getItemsNextFilter(i,f,m,s,c){var t=0,x=0;for(var a=s,l=i.length-1;a<=l;a++)
{x++;if(x>=l)
{return x;}
var j=i.eq(a);if(j.is(f))
{t++;if(t==m)
{return x;}}
if(a==l)
{a=-1;}}}
function gi_getCurrentItems(i,o){return i.slice(0,o.items.visible);}
function gi_getOldItemsPrev(i,o,n){return i.slice(n,o.items.visibleConf.old+n);}
function gi_getNewItemsPrev(i,o){return i.slice(0,o.items.visible);}
function gi_getOldItemsNext(i,o){return i.slice(0,o.items.visibleConf.old);}
function gi_getNewItemsNext(i,o,n){return i.slice(n,o.items.visible+n);}
function sz_storeMargin(i,o,d){if(o.usePadding)
{if(!is_string(d))
{d='_cfs_origCssMargin';}
i.each(function(){var j=$(this),m=parseInt(j.css(o.d['marginRight']),10);if(!is_number(m))
{m=0;}
j.data(d,m);});}}
function sz_resetMargin(i,o,m){if(o.usePadding)
{var x=(is_boolean(m))?m:false;if(!is_number(m))
{m=0;}
sz_storeMargin(i,o,'_cfs_tempCssMargin');i.each(function(){var j=$(this);j.css(o.d['marginRight'],((x)?j.data('_cfs_tempCssMargin'):m+j.data('_cfs_origCssMargin')));});}}
function sz_storeOrigCss(i){i.each(function(){var j=$(this);j.data('_cfs_origCss',j.attr('style')||'');});}
function sz_restoreOrigCss(i){i.each(function(){var j=$(this);j.attr('style',j.data('_cfs_origCss')||'');});}
function sz_setResponsiveSizes(o,all){var visb=o.items.visible,newS=o.items[o.d['width']],seco=o[o.d['height']],secp=is_percentage(seco);all.each(function(){var $t=$(this),nw=newS-ms_getPaddingBorderMargin($t,o,'Width');$t[o.d['width']](nw);if(secp)
{$t[o.d['height']](ms_getPercentage(nw,seco));}});}
function sz_setSizes($c,o){var $w=$c.parent(),$i=$c.children(),$v=gi_getCurrentItems($i,o),sz=cf_mapWrapperSizes(ms_getSizes($v,o,true),o,false);$w.css(sz);if(o.usePadding)
{var p=o.padding,r=p[o.d[1]];if(o.align&&r<0)
{r=0;}
var $l=$v.last();$l.css(o.d['marginRight'],$l.data('_cfs_origCssMargin')+r);$c.css(o.d['top'],p[o.d[0]]);$c.css(o.d['left'],p[o.d[3]]);}
$c.css(o.d['width'],sz[o.d['width']]+(ms_getTotalSize($i,o,'width')*2));$c.css(o.d['height'],ms_getLargestSize($i,o,'height'));return sz;}
function ms_getSizes(i,o,wrapper){return[ms_getTotalSize(i,o,'width',wrapper),ms_getLargestSize(i,o,'height',wrapper)];}
function ms_getLargestSize(i,o,dim,wrapper){if(!is_boolean(wrapper))
{wrapper=false;}
if(is_number(o[o.d[dim]])&&wrapper)
{return o[o.d[dim]];}
if(is_number(o.items[o.d[dim]]))
{return o.items[o.d[dim]];}
dim=(dim.toLowerCase().indexOf('width')>-1)?'outerWidth':'outerHeight';return ms_getTrueLargestSize(i,o,dim);}
function ms_getTrueLargestSize(i,o,dim){var s=0;for(var a=0,l=i.length;a<l;a++)
{var j=i.eq(a);var m=(j.is(':visible'))?j[o.d[dim]](true):0;if(s<m)
{s=m;}}
return s;}
function ms_getTotalSize(i,o,dim,wrapper){if(!is_boolean(wrapper))
{wrapper=false;}
if(is_number(o[o.d[dim]])&&wrapper)
{return o[o.d[dim]];}
if(is_number(o.items[o.d[dim]]))
{return o.items[o.d[dim]]*i.length;}
var d=(dim.toLowerCase().indexOf('width')>-1)?'outerWidth':'outerHeight',s=0;for(var a=0,l=i.length;a<l;a++)
{var j=i.eq(a);s+=(j.is(':visible'))?j[o.d[d]](true):0;}
return s;}
function ms_getParentSize($w,o,d){var isVisible=$w.is(':visible');if(isVisible)
{$w.hide();}
var s=$w.parent()[o.d[d]]();if(isVisible)
{$w.show();}
return s;}
function ms_getMaxDimension(o,a){return(is_number(o[o.d['width']]))?o[o.d['width']]:a;}
function ms_hasVariableSizes(i,o,dim){var s=false,v=false;for(var a=0,l=i.length;a<l;a++)
{var j=i.eq(a);var c=(j.is(':visible'))?j[o.d[dim]](true):0;if(s===false)
{s=c;}
else if(s!=c)
{v=true;}
if(s==0)
{v=true;}}
return v;}
function ms_getPaddingBorderMargin(i,o,d){return i[o.d['outer'+d]](true)-i[o.d[d.toLowerCase()]]();}
function ms_getPercentage(s,o){if(is_percentage(o))
{o=parseInt(o.slice(0,-1),10);if(!is_number(o))
{return s;}
s*=o/100;}
return s;}
function cf_e(n,c,pf,ns,rd){if(!is_boolean(pf))
{pf=true;}
if(!is_boolean(ns))
{ns=true;}
if(!is_boolean(rd))
{rd=false;}
if(pf)
{n=c.events.prefix+n;}
if(ns)
{n=n+'.'+c.events.namespace;}
if(ns&&rd)
{n+=c.serialNumber;}
return n;}
function cf_c(n,c){return(is_string(c.classnames[n]))?c.classnames[n]:n;}
function cf_mapWrapperSizes(ws,o,p){if(!is_boolean(p))
{p=true;}
var pad=(o.usePadding&&p)?o.padding:[0,0,0,0];var wra={};wra[o.d['width']]=ws[0]+pad[1]+pad[3];wra[o.d['height']]=ws[1]+pad[0]+pad[2];return wra;}
function cf_sortParams(vals,typs){var arr=[];for(var a=0,l1=vals.length;a<l1;a++)
{for(var b=0,l2=typs.length;b<l2;b++)
{if(typs[b].indexOf(typeof vals[a])>-1&&is_undefined(arr[b]))
{arr[b]=vals[a];break;}}}
return arr;}
function cf_getPadding(p){if(is_undefined(p))
{return[0,0,0,0];}
if(is_number(p))
{return[p,p,p,p];}
if(is_string(p))
{p=p.split('px').join('').split('em').join('').split(' ');}
if(!is_array(p))
{return[0,0,0,0];}
for(var i=0;i<4;i++)
{p[i]=parseInt(p[i],10);}
switch(p.length)
{case 0:return[0,0,0,0];case 1:return[p[0],p[0],p[0],p[0]];case 2:return[p[0],p[1],p[0],p[1]];case 3:return[p[0],p[1],p[2],p[1]];default:return[p[0],p[1],p[2],p[3]];}}
function cf_getAlignPadding(itm,o){var x=(is_number(o[o.d['width']]))?Math.ceil(o[o.d['width']]-ms_getTotalSize(itm,o,'width')):0;switch(o.align)
{case'left':return[0,x];case'right':return[x,0];case'center':default:return[Math.ceil(x/2),Math.floor(x/2)];}}
function cf_getDimensions(o){var dm=[['width','innerWidth','outerWidth','height','innerHeight','outerHeight','left','top','marginRight',0,1,2,3],['height','innerHeight','outerHeight','width','innerWidth','outerWidth','top','left','marginBottom',3,2,1,0]];var dl=dm[0].length,dx=(o.direction=='right'||o.direction=='left')?0:1;var dimensions={};for(var d=0;d<dl;d++)
{dimensions[dm[0][d]]=dm[dx][d];}
return dimensions;}
function cf_getAdjust(x,o,a,$t){var v=x;if(is_function(a))
{v=a.call($t,v);}
else if(is_string(a))
{var p=a.split('+'),m=a.split('-');if(m.length>p.length)
{var neg=true,sta=m[0],adj=m[1];}
else
{var neg=false,sta=p[0],adj=p[1];}
switch(sta)
{case'even':v=(x%2==1)?x-1:x;break;case'odd':v=(x%2==0)?x-1:x;break;default:v=x;break;}
adj=parseInt(adj,10);if(is_number(adj))
{if(neg)
{adj=-adj;}
v+=adj;}}
if(!is_number(v)||v<1)
{v=1;}
return v;}
function cf_getItemsAdjust(x,o,a,$t){return cf_getItemAdjustMinMax(cf_getAdjust(x,o,a,$t),o.items.visibleConf);}
function cf_getItemAdjustMinMax(v,i){if(is_number(i.min)&&v<i.min)
{v=i.min;}
if(is_number(i.max)&&v>i.max)
{v=i.max;}
if(v<1)
{v=1;}
return v;}
function cf_getSynchArr(s){if(!is_array(s))
{s=[[s]];}
if(!is_array(s[0]))
{s=[s];}
for(var j=0,l=s.length;j<l;j++)
{if(is_string(s[j][0]))
{s[j][0]=$(s[j][0]);}
if(!is_boolean(s[j][1]))
{s[j][1]=true;}
if(!is_boolean(s[j][2]))
{s[j][2]=true;}
if(!is_number(s[j][3]))
{s[j][3]=0;}}
return s;}
function cf_getKeyCode(k){if(k=='right')
{return 39;}
if(k=='left')
{return 37;}
if(k=='up')
{return 38;}
if(k=='down')
{return 40;}
return-1;}
function cf_setCookie(n,$c,c){if(n)
{var v=$c.triggerHandler(cf_e('currentPosition',c));$.fn.testiMonial.cookie.set(n,v);}}
function cf_getCookie(n){var c=$.fn.testiMonial.cookie.get(n);return(c=='')?0:c;}
function in_mapCss($elem,props){var css={};for(var p=0,l=props.length;p<l;p++)
{css[props[p]]=$elem.css(props[p]);}
return css;}
function in_complementItems(obj,opt,itm,sta){if(!is_object(obj.visibleConf))
{obj.visibleConf={};}
if(!is_object(obj.sizesConf))
{obj.sizesConf={};}
if(obj.start==0&&is_number(sta))
{obj.start=sta;}
if(is_object(obj.visible))
{obj.visibleConf.min=obj.visible.min;obj.visibleConf.max=obj.visible.max;obj.visible=false;}
else if(is_string(obj.visible))
{if(obj.visible=='variable')
{obj.visibleConf.variable=true;}
else
{obj.visibleConf.adjust=obj.visible;}
obj.visible=false;}
else if(is_function(obj.visible))
{obj.visibleConf.adjust=obj.visible;obj.visible=false;}
if(!is_string(obj.filter))
{obj.filter=(itm.filter(':hidden').length>0)?':visible':'*';}
if(!obj[opt.d['width']])
{if(opt.responsive)
{debug(true,'Set a '+opt.d['width']+' for the items!');obj[opt.d['width']]=ms_getTrueLargestSize(itm,opt,'outerWidth');}
else
{obj[opt.d['width']]=(ms_hasVariableSizes(itm,opt,'outerWidth'))?'variable':itm[opt.d['outerWidth']](true);}}
if(!obj[opt.d['height']])
{obj[opt.d['height']]=(ms_hasVariableSizes(itm,opt,'outerHeight'))?'variable':itm[opt.d['outerHeight']](true);}
obj.sizesConf.width=obj.width;obj.sizesConf.height=obj.height;return obj;}
function in_complementVisibleItems(opt,avl){if(opt.items[opt.d['width']]=='variable')
{opt.items.visibleConf.variable=true;}
if(!opt.items.visibleConf.variable){if(is_number(opt[opt.d['width']]))
{opt.items.visible=Math.floor(opt[opt.d['width']]/opt.items[opt.d['width']]);}
else
{opt.items.visible=Math.floor(avl/opt.items[opt.d['width']]);opt[opt.d['width']]=opt.items.visible*opt.items[opt.d['width']];if(!opt.items.visibleConf.adjust)
{opt.align=false;}}
if(opt.items.visible=='Infinity'||opt.items.visible<1)
{debug(true,'Not a valid number of visible items: Set to "variable".');opt.items.visibleConf.variable=true;}}
return opt;}
function in_complementPrimarySize(obj,opt,all){if(obj=='auto')
{obj=ms_getTrueLargestSize(all,opt,'outerWidth');}
return obj;}
function in_complementSecondarySize(obj,opt,all){if(obj=='auto')
{obj=ms_getTrueLargestSize(all,opt,'outerHeight');}
if(!obj)
{obj=opt.items[opt.d['height']];}
return obj;}
function in_getAlignPadding(o,all){var p=cf_getAlignPadding(gi_getCurrentItems(all,o),o);o.padding[o.d[1]]=p[1];o.padding[o.d[3]]=p[0];return o;}
function in_getResponsiveValues(o,all,avl){var visb=cf_getItemAdjustMinMax(Math.floor(o[o.d['width']]/o.items[o.d['width']]),o.items.visibleConf);if(visb>all.length)
{visb=all.length;}
var newS=Math.floor(o[o.d['width']]/visb);o.items.visible=visb;o.items[o.d['width']]=newS;o[o.d['width']]=visb*newS;return o;}
function bt_pauseOnHoverConfig(p){if(is_string(p))
{var i=(p.indexOf('immediate')>-1)?true:false,r=(p.indexOf('resume')>-1)?true:false;}
else
{var i=r=false;}
return[i,r];}
function bt_mousesheelNumber(mw){return(is_number(mw))?mw:null}
function is_null(a){return(a===null);}
function is_undefined(a){return(is_null(a)||typeof a=='undefined'||a===''||a==='undefined');}
function is_array(a){return(a instanceof Array);}
function is_jquery(a){return(a instanceof jQuery);}
function is_object(a){return((a instanceof Object||typeof a=='object')&&!is_null(a)&&!is_jquery(a)&&!is_array(a));}
function is_number(a){return((a instanceof Number||typeof a=='number')&&!isNaN(a));}
function is_string(a){return((a instanceof String||typeof a=='string')&&!is_undefined(a)&&!is_true(a)&&!is_false(a));}
function is_function(a){return(a instanceof Function||typeof a=='function');}
function is_boolean(a){return(a instanceof Boolean||typeof a=='boolean'||is_true(a)||is_false(a));}
function is_true(a){return(a===true||a==='true');}
function is_false(a){return(a===false||a==='false');}
function is_percentage(x){return(is_string(x)&&x.slice(-1)=='%');}
function getTime(){return new Date().getTime();}
function deprecated(o,n){debug(true,o+' is DEPRECATED, support for it will be removed. Use '+n+' instead.');}
function debug(d,m){if(!is_undefined(window.console)&&!is_undefined(window.console.log))
{if(is_object(d))
{var s=' ('+d.selector+')';d=d.debug;}
else
{var s='';}
if(!d)
{return false;}
if(is_string(m))
{m='testiMonial'+s+': '+m;}
else
{m=['testiMonial'+s+':',m];}
window.console.log(m);}
return false;}
$.extend($.easing,{'quadratic':function(t){var t2=t*t;return t*(-t2*t+4*t2-6*t+4);},'cubic':function(t){return t*(4*t*t-9*t+6);},'elastic':function(t){var t2=t*t;return t*(33*t2*t2-106*t2*t+126*t2-67*t+15);}});})(jQuery);