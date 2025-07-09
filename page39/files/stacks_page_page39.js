
// 'stacks' is the Stacks global object.
// All of the other Stacks related Javascript will 
// be attatched to it.
var stacks = {};


// this call to jQuery gives us access to the globaal
// jQuery object. 
// 'noConflict' removes the '$' variable.
// 'true' removes the 'jQuery' variable.
// removing these globals reduces conflicts with other 
// jQuery versions that might be running on this page.
stacks.jQuery = jQuery.noConflict(true);

// Javascript for com_joeworkman_stacks_foundation_topbar
// ---------------------------------------------------------------------

// Each stack has its own object with its own namespace.  The name of
// that object is the same as the stack's id.
stacks.com_joeworkman_stacks_foundation_topbar = {};

// A closure is defined and assigned to the stack's object.  The object
// is also passed in as 'stack' which gives you a shorthand for referring
// to this object from elsewhere.
stacks.com_joeworkman_stacks_foundation_topbar = (function(stack) {

	// When jQuery is used it will be available as $ and jQuery but only
	// inside the closure.
	var jQuery = stacks.jQuery;
	var $ = jQuery;
	
;(function($){"use strict";var version='20140730.1100',debug=function(msg,obj){if(window.debug===true&&window.console&&console.log){console.log('[rwflexnav] '+msg);if(obj)console.log(obj);}};$.fn.divideNav=function(options){var opts=$.extend(true,{},$.fn.rwflexnav.defaults,options||{});var container=$(this);$('> li.'+opts.className.divider,container).remove();var items=$('> li',container);$('<li>').addClass(opts.className.divider).insertBefore(items);$('<li>').addClass(opts.className.divider).insertAfter(items.last());return $(container);};$.fn.hackRWFlexNav=function(options){var opts=$.extend(true,{},$.fn.rwflexnav.defaults,options||{});var container=$(this);$('> ul.'+opts.className.menu,container).first().removeClass(opts.className.dropdown).find('ul').removeClass(opts.className.menu);$('> ul.'+opts.className.menu,container).find('li').each(function(){if($(this).find('ul').length===0)$(this).removeClass(opts.className.hasDropdown);});return $(container);};$.fn.processRWFlexNav=function(options){var opts=$.extend(true,{},$.fn.rwflexnav.defaults,options||{});var container=$(this);$('li a header',container).parent().attr('href','javascript:void(0)').parent().addClass(opts.className.heading);$('li a label',container).unwrap();$('li a button',container).each(function(){var classes=$(this).attr('class');var text=$(this).text();$(this).parent().addClass(opts.className.button).addClass(classes).html(text).parent().addClass(opts.className.hasButton);});$('li a hr',container).unwrap().parent().addClass(opts.className.divider).html('');return $(container);};$.fn.rwflexnav=function(options){var opts=$.extend(true,{},$.fn.rwflexnav.defaults,options||{});return this.each(function(){if($('> ul.'+opts.className.menu,this).length===0){console.error('RWFlexNav Aborting! Unable to locate menu with class "'+opts.className.menu+'"');return false;}
var method=$.fn.rwflexnav[opts.scope],container=typeof method==='function'?method(opts,this):false;if(opts.hackNav)container.hackRWFlexNav(opts);container.processRWFlexNav(opts);if(opts.divide)$('> ul.'+opts.className.menu,container).divideNav(opts);debug('Processing Complete',container);return $(container);});};$.fn.rwflexnav.all=function(opts,container){return $(container);};$.fn.rwflexnav.top=function(opts,container){$('> ul.'+opts.className.menu,container).find('ul').remove();return $(container);};$.fn.rwflexnav.subnav=function(opts,container){var menu=$('> ul.'+opts.className.menu,container).first(),submenu=$('> ul.'+opts.className.menu+'> li:nth-child('+opts.subNavIndex+') > ul',container),classes=menu.attr('class');debug('Scope SubNav',submenu);if(submenu.length===0){console.error('RWFlexNav Error! No subnav found at index '+opts.subNavIndex);}
else{submenu.addClass(opts.className.menu).addClass(classes).insertAfter(menu);submenu.find('>li.js-generated').remove();menu.remove();}
return $(container);};$.fn.rwflexnav.active=function(opts,container){var menu=$('> ul.'+opts.className.menu,container).first(),submenu=$('> ul.'+opts.className.menu+' > li.'+opts.className.active+' > ul',container),classes=menu.attr('class');debug('Scope Active',submenu);if(submenu.length===0){console.error('RWFlexNav Error! No active subnav found with class "'+opts.className.active+'"');}
else{submenu.addClass(opts.className.menu).addClass(classes).insertAfter(menu);submenu.find('>li.js-generated').remove();menu.remove();}
return $(container);};$.fn.rwflexnav.defaults={scope:'all',hackNav:true,divide:false,subNavIndex:0,className:{menu:'menu',heading:'heading',divider:'divider',active:'active',dropdown:'dropdown',button:'button',hasButton:'has-form',hasDropdown:'has-dropdown'}};})(jQuery);

	return stack;
})(stacks.com_joeworkman_stacks_foundation_topbar);


// Javascript for com_joeworkman_stacks_foundation_styles
// ---------------------------------------------------------------------

// Each stack has its own object with its own namespace.  The name of
// that object is the same as the stack's id.
stacks.com_joeworkman_stacks_foundation_styles = {};

// A closure is defined and assigned to the stack's object.  The object
// is also passed in as 'stack' which gives you a shorthand for referring
// to this object from elsewhere.
stacks.com_joeworkman_stacks_foundation_styles = (function(stack) {

	// When jQuery is used it will be available as $ and jQuery but only
	// inside the closure.
	var jQuery = stacks.jQuery;
	var $ = jQuery;
	
 jQuery.fn.exists=function(){return jQuery(this).length>0;}
jQuery.debug=function(msg,obj){if(window.debug===true&&window.console&&console.log){console.log('[jwstacks] '+msg);if(obj)console.log(obj);}};jQuery.isMobile=function(){return"ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch;};var triggerWindowResize=function(){$(window).trigger('resize')};if(typeof(orientationEvent)==undefined){var orientationEvent=0;}
$(window).bind(orientationEvent,triggerWindowResize).load(triggerWindowResize);jQuery.clearBrowserCache=function(){$(window).bind("pageshow",function(event){if(event.originalEvent.persisted){window.location.reload()}});};jQuery.preloadImages=function(){for(var i=0;i<arguments.length;i++){$("<img />").attr("src",arguments[i]);}};
!function(a,b){"undefined"!=typeof module?module.exports=b():"function"==typeof define&&define.amd?define(a,b):this[a]=b()}("vein",function(){var a=function(){},b=function(a){a=a||{};for(var b=1;b<arguments.length;b++)if(arguments[b])for(var c in arguments[b])arguments[b].hasOwnProperty(c)&&(a[c]=arguments[b][c]);return a},c=function(a,b,c){var d,e,f=[],g=b[document.all?"rules":"cssRules"],h=a.replace(/\s/g,"");for(d=0,e=g.length;e>d;d++)(g[d].selectorText===a||4===g[d].type&&g[d].cssText.replace(/\s/g,"").substring(0,h.length)==h)&&(null===c?b.deleteRule(d):f.push(g[d]));return f},d=function(a){cssArray=[];for(property in a)a.hasOwnProperty(property)&&cssArray.push(property+": "+a[property]+";");return cssText=cssArray.join(""),cssText};a.getStylesheet=function(){var a,b=this;if(!b.element)for(b.element=document.createElement("style"),b.element.setAttribute("type","text/css"),b.element.setAttribute("id","vein"),document.getElementsByTagName("head")[0].appendChild(b.element),a=document.styleSheets.length-1;a>=0;a--)if(document.styleSheets[a].ownerNode===b.element){b.stylesheet=document.styleSheets[a];break}return b.stylesheet};var e=function(a){return a[document.all?"rules":"cssRules"]},f=function(a,b,c){var d=e(c);if(c.insertRule)try{c.insertRule(a+"{"+b+"}",d.length)}catch(f){"IndexSizeError"===f.message&&c.insertRule(a+"{"+b+"}",0)}else c.addRule(a,b,d.length)};return a.inject=function(a,g,h){h=b({},h);{var i,j,k,l,m,n,o,p,q,r,s=this,t=h.stylesheet||s.getStylesheet();e(t)}for("string"==typeof a&&(a=[a]),i=0,j=a.length;j>i;i++)if("object"==typeof a[i]&&t.insertRule)for(k in a[i])if(l=c(k,t,g),0===l.length)for(m=d(g),q=0,r=a[i][k].length;r>q;q++)f(k,a[i][k][q]+"{"+m+"}",t);else for(o=0,p=l.length;p>o;o++)s.inject(a[i][k],g,{stylesheet:l[o]});else{if(l=c(a[i],t,g),null===g)return;if(0===l.length)m=d(g),f(a[i],m,t);else for(o=0,p=l.length;p>o;o++)for(n in g)g.hasOwnProperty(n)&&l[o].style.setProperty(n,g[n],"")}return s},a}),!function(a,b){var c=function(a){for(var c=[];a&&a.tagName!==b;a=a.parentNode){if(a.className){var d=a.className.split(" ");for(var e in d)d.hasOwnProperty(e)&&d[e]&&(c.unshift(d[e]),c.unshift("."))}a.id&&!/\s/.test(a.id)&&(c.unshift(a.id),c.unshift("#")),c.unshift(a.tagName),c.unshift(" > ")}return c.slice(1).join("")};a.fn.getSelector=function(b){return!0===b?c(this[0]):a.map(this,function(a){return c(a)})}}(jQuery),function(a){"use strict";var b=function(a){var b=a.replace(/\s/g,"").match(/^rgb\((\d+)\,(\d+)\,(\d+)\)/);if(b)return{r:parseInt(b[1]),g:parseInt(b[2]),b:parseInt(b[3])};var c=/^#?([a-f\d])([a-f\d])([a-f\d])$/i;a=a.replace(c,function(a,b,c,d){return b+b+c+c+d+d});var d=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(a);return d?{r:parseInt(d[1],16),g:parseInt(d[2],16),b:parseInt(d[3],16)}:null},c=function(a,b,c){return c="undefined"!=typeof c?c:0,b="undefined"!=typeof b?b:1,b=b>1?b/100:b,"rgba("+(a.r+c)+","+(a.g+c)+","+(a.b+c)+","+b+")"},d=function(a,b,c,d){var e=a.selector,f={};return f[c]=d,e||(e=b.getSelector(),a.hover&&(e+=":hover")),vein.inject(e,f)},e=function(a,b){for(var c=[],d=0;d<a.length;d++){var e=b[d]===parseInt(b[d],10)?a[d]+" "+b[d]+"%":a[d];c.push(e)}return c.join(",")},f=function(a,b){var f,g,h,i=[],j=0;if(0===a.stops.length)for(j=0;j<a.colors.length;j++)f=a.offsets[j]||0,g=a.opacity[j]||a.opacity[a.opacity.length-1],i.push(c(h[j],g,f));else for(j=0;j<a.stops.length;j++)f=a.offsets[j]||0,g=a.opacity[j]||a.opacity[a.opacity.length-1],h=a.colors[j]||a.colors[a.colors.length-1],i.push(c(h,g,f));var k=e(i,a.stops),l="linear-gradient(to "+a.linear+","+k+")";"radial-circle"===a.gradient?l="radial-gradient(circle at "+a.radial.x+"% "+a.radial.y+"%,"+k+")":"radial-ellipse"===a.gradient&&(l="radial-gradient(ellipse at "+a.radial.x+"% "+a.radial.y+"%,"+k+")"),d(a,b,"background",l)};a.glass=function(c){for(var d=a.extend(!0,{},a.fn.glass.defaults,c||{}),e=0;e<d.colors.length;e++)d.colors[e]=b(d.colors[e]);if(d.selector){var f=a.fn.glass[d.preset];if("function"==typeof f)return f(d,a(d.selector))}return!1},a.fn.glass=function(c){for(var d=a.extend(!0,{},a.fn.glass.defaults,c||{}),e=0;e<d.colors.length;e++)d.colors[e]=b(d.colors[e]);return this.each(function(){var b=a(this),c=a.fn.glass[d.preset];"function"==typeof c&&c(d,b)})},a.fn.glass.border=function(a,b){var e=c(a.colors[0],a.opacity[0]);d(a,b,"border-color",e)},a.fn.glass.solid=function(a,b){var e=c(a.colors[0],a.opacity[0]);d(a,b,"background",e)},a.fn.glass.custom=function(a,b){return f(a,b)},a.fn.glass.faded=function(a,b){return 0===a.stops.length&&(a.stops=[0,95]),2!==a.opacity.length&&(a.opacity=[100,80]),a.colors=a.colors.slice(0,1),f(a,b)},a.fn.glass.twocolor=function(a,b){return 0===a.stops.length&&(a.stops=[20,100]),a.colors=a.colors.slice(0,2),a.opacity=a.opacity.slice(0,1),f(a,b)},a.fn.glass.twotone=function(a,b){return 0===a.stops.length&&(a.stops=[0,45,50,50,100]),0===a.offsets.length&&(a.offsets=[20,10,5,0,-10]),a.offsets[3]=0,a.colors=a.colors.slice(0,1),a.opacity=a.opacity.slice(0,1),f(a,b)},a.fn.glass.onecolor=function(a,b){return 0===a.stops.length&&(a.stops=[0,85]),0===a.offsets.length&&(a.offsets=[40,0]),a.colors=a.colors.slice(0,1),a.opacity=a.opacity.slice(0,1),f(a,b)},a.fn.glass.defaults={preset:"solid",gradient:"linear",linear:"bottom",radial:{x:50,y:50},colors:["#ffffff","#777777"],offsets:[],stops:[],opacity:[100,80],selector:!1,hover:!1}}(jQuery);

	return stack;
})(stacks.com_joeworkman_stacks_foundation_styles);


// Javascript for com_joeworkman_stacks_foundation_form_base
// ---------------------------------------------------------------------

// Each stack has its own object with its own namespace.  The name of
// that object is the same as the stack's id.
stacks.com_joeworkman_stacks_foundation_form_base = {};

// A closure is defined and assigned to the stack's object.  The object
// is also passed in as 'stack' which gives you a shorthand for referring
// to this object from elsewhere.
stacks.com_joeworkman_stacks_foundation_form_base = (function(stack) {

	// When jQuery is used it will be available as $ and jQuery but only
	// inside the closure.
	var jQuery = stacks.jQuery;
	var $ = jQuery;
	
 jQuery.fn.exists=function(){return jQuery(this).length>0;}
jQuery.debug=function(msg,obj){if(window.debug===true&&window.console&&console.log){console.log('[jwstacks] '+msg);if(obj)console.log(obj);}};jQuery.isMobile=function(){return"ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch;};var triggerWindowResize=function(){$(window).trigger('resize')};if(typeof(orientationEvent)==undefined){var orientationEvent=0;}
$(window).bind(orientationEvent,triggerWindowResize).load(triggerWindowResize);jQuery.clearBrowserCache=function(){$(window).bind("pageshow",function(event){if(event.originalEvent.persisted){window.location.reload()}});};jQuery.preloadImages=function(){for(var i=0;i<arguments.length;i++){$("<img />").attr("src",arguments[i]);}};

	return stack;
})(stacks.com_joeworkman_stacks_foundation_form_base);


// Javascript for stacks_in_126_page39
// ---------------------------------------------------------------------

// Each stack has its own object with its own namespace.  The name of
// that object is the same as the stack's id.
stacks.stacks_in_126_page39 = {};

// A closure is defined and assigned to the stack's object.  The object
// is also passed in as 'stack' which gives you a shorthand for referring
// to this object from elsewhere.
stacks.stacks_in_126_page39 = (function(stack) {

	// When jQuery is used it will be available as $ and jQuery but only
	// inside the closure.
	var jQuery = stacks.jQuery;
	var $ = jQuery;
	

document.documentElement.lang='en';window.wowjsmobile=true;window.revealAnimation='fadeAndPop';$(document).ready(function(){if($.isMobile())
$('.show-for-touch').fadeIn('fast');});function loadCSS(href,before,media,callback){"use strict";var ss=window.document.createElement("link");var ref=before||window.document.getElementsByTagName("script")[0];var sheets=window.document.styleSheets;ss.rel="stylesheet";ss.href=href;ss.media="only x";if(callback){ss.onload=callback}ref.parentNode.insertBefore(ss,ref);function toggleMedia(){var defined;for(var i=0;i<sheets.length;i++){if(sheets[i].href&&sheets[i].href.indexOf(ss.href)>-1){defined=true}}if(defined){ss.media=media||"all"}else{setTimeout(toggleMedia)}}toggleMedia();return ss}
var useCustomSelector='False',stacksTrue='True',headerFamily='Verdana, Geneva, sans-serif'==='custom'?'':"Verdana, Geneva, sans-serif",headerFamilyFallback='sans-serif',headerSelector='h1'+',.font-family-h1',headerStyle='normal',headerGoogle=headerFamily==='Open Sans'?stacksTrue:'Verdana, Geneva, sans-serif'==='custom'?'False':'false',headerWeight=headerStyle==='italic'?'900italic':'900',headerWeight=headerWeight+','.replace(/\s/g,''),header2Family='Verdana, Geneva, sans-serif'==='custom'?'':'Verdana, Geneva, sans-serif',header2FamilyFallback='sans-serif',header2Selector='h2, h3, h4, h5, h6'+',.font-family-h2',header2Style='normal',header2Google=header2Family==='Open Sans'?stacksTrue:'Verdana, Geneva, sans-serif'==='custom'?'False':'false',header2Weight=header2Style==='italic'?'400italic':'400',header2Weight=header2Weight+','.replace(/\s/g,''),fontFamily='\'Helvetica Neue\', Helvetica, Arial, sans-serif'==='custom'?'':'\'Helvetica Neue\', Helvetica, Arial, sans-serif',fontFamilyFallback='sans-serif',fontSelector='p,a'+',.font-family-text',fontGoogle=fontFamily==='Open Sans'?stacksTrue:'\'Helvetica Neue\', Helvetica, Arial, sans-serif'==='custom'?'False':'false',fontWeight='400,'.replace(/\s/g,''),icons='fontawesome',fontAwesome='../rw_common/plugins/stacks/fontawesome/font-awesome.css',getGoogleUrls=function(fontStore){var googleFonts=[];for(var family in fontStore){var weights=fontStore[family].join().replace(/,,/g,',').replace(/,$/,'');googleFonts.push('https://fonts.googleapis.com/css?family='+family+':'+weights);}
return googleFonts;},isGFont=function(family,google){console.log(family+'::'+google);if(google===stacksTrue)return family;return false;},getGoogleFonts=function(data){var fonts=data.fonts,weights=data.weights,google=data.google,fontStore=new Object();for(var i=0;i<fonts.length;i++){if(isGFont(fonts[i],google[i])===false)continue;(fontStore[fonts[i]]=fontStore[fonts[i]]||[]).push(weights[i]);}
return getGoogleUrls(fontStore);};var cssFontFiles=getGoogleFonts({fonts:[headerFamily,header2Family,fontFamily],weights:[headerWeight,header2Weight,fontWeight],google:[headerGoogle,header2Google,fontGoogle]});if(icons==='fontawesome'){cssFontFiles.push(fontAwesome);}
for(var i=0;i<cssFontFiles.length;i++){loadCSS(decodeURIComponent(cssFontFiles[i]));}
if(useCustomSelector===stacksTrue){var customFontStyles={'font-family':[fontFamily,fontFamilyFallback].join()+'!important','font-weight':fontWeight.split(',')[0]+'!important'},customHeaderSyles={'font-family':[headerFamily,headerFamilyFallback].join()+'!important','font-weight':headerWeight.split(',')[0]+'!important','font-style':headerStyle+'!important'},customHeader2Syles={'font-family':[header2Family,header2FamilyFallback].join()+'!important','font-weight':header2Weight.split(',')[0]+'!important','font-style':header2Style+'!important'};$.debug('Custom Font Selectors:'+fontSelector,customFontStyles);vein.inject(fontSelector,customFontStyles);$.debug('Custom Header Selectors:'+headerSelector,customHeaderSyles);vein.inject(headerSelector,customHeaderSyles);$.debug('Custom Header2 Selectors:'+header2Selector,customHeader2Syles);vein.inject(header2Selector,customHeader2Syles);}

	return stack;
})(stacks.stacks_in_126_page39);


// Javascript for stacks_in_3505_page39
// ---------------------------------------------------------------------

// Each stack has its own object with its own namespace.  The name of
// that object is the same as the stack's id.
stacks.stacks_in_3505_page39 = {};

// A closure is defined and assigned to the stack's object.  The object
// is also passed in as 'stack' which gives you a shorthand for referring
// to this object from elsewhere.
stacks.stacks_in_3505_page39 = (function(stack) {

	// When jQuery is used it will be available as $ and jQuery but only
	// inside the closure.
	var jQuery = stacks.jQuery;
	var $ = jQuery;
	
 var opacity=95,opacityBottom=85,hoverOpacity=50,subNavIndex=1,divide=1,zoneDivider=0,fullWidthMenu='full-width',scope='all',style='solid',menuAlign='centered',baseColor='#E6E6E6',baseColorTop='#737373',activeColor='#333333',hoverColor='#0080FF',styleActive='styleActive'==='styleActive'?true:false,rwmenu='rw'==='rw'?true:false,magellan='rw'==='magellan'?true:false,menuItems='#stacks_in_3505_page39 ul:not(.title-area) li:hover > a:not(.button)',dropdowns='#stacks_in_3505_page39 ul:not(.title-area) li.has-dropdown';if(opacity<100||style=="faded"){$.glass({colors:[baseColor,baseColorTop],preset:style,gradient:'linear',opacity:[opacity,opacityBottom],selector:'#stacks_in_3505_page39 .top-bar-wrapper'});$.glass({colors:[baseColor],opacity:[opacity],selector:'#stacks_in_3505_page39 ul:not(.title-area) ul.dropdown'});}
if(hoverOpacity<100){if(styleActive){var active=magellan?'#stacks_in_3505_page39 .top-bar-wrapper.styleActive .magellanList li.active > a':'#stacks_in_3505_page39 .top-bar-wrapper.styleActive li.active > a';$.glass({colors:[activeColor],opacity:[hoverOpacity],selector:active});}
$.glass({colors:[hoverColor],opacity:[hoverOpacity],selector:menuItems});$.glass({colors:[hoverColor],opacity:[hoverOpacity],selector:dropdowns+'> a.hovered:not(.button)'});}
$(document).ready(function(){var stack=$('#stacks_in_3505_page39');stack.parent().css({overflow:'visible'});$('.top-bar-section:not(.menu-magellan):not(.menu-none)',stack).rwflexnav({scope:scope,subNavIndex:subNavIndex,divide:divide});if(magellan){if(divide)$('ul.magellanList',stack).divideNav();$('.magellanList li',stack).each(function(){var id=$(this).data('magellan-arrival');$('a',this).attr('href','#'+id);});}
if($('ul.zone',stack).exists()){if(zoneDivider)$('ul.zone',stack).divideNav();}
if($('.zone-align-left ul.zone',stack).exists()||!$('ul.zone',stack).exists()){$('ul.menu',stack).addClass(menuAlign);}
if(fullWidthMenu==='full-width'&&menuAlign==='centered'){var calcMenuItemWidth=function(){var items=$('.menu-align-centered ul.menu > li:not(.divider)',stack),dividers=$('.menu-align-centered ul.menu > li.divider',stack);if($('.top-bar .toggle-topbar',stack).is(':visible')){items.removeAttr('style');}
else{var count=items.length;if(count>0){var width=dividers.length>0?100/count-0.2:100/count;items.width(width+"%");}}};calcMenuItemWidth();$(window).on('resize',calcMenuItemWidth);}
$(dropdowns).hover(function(){$('> a:not(.button)',this).addClass('hovered');},function(){$('> a:not(.button)',this).removeClass('hovered');});});

	return stack;
})(stacks.stacks_in_3505_page39);


// Javascript for stacks_in_803_page39
// ---------------------------------------------------------------------

// Each stack has its own object with its own namespace.  The name of
// that object is the same as the stack's id.
stacks.stacks_in_803_page39 = {};

// A closure is defined and assigned to the stack's object.  The object
// is also passed in as 'stack' which gives you a shorthand for referring
// to this object from elsewhere.
stacks.stacks_in_803_page39 = (function(stack) {

	// When jQuery is used it will be available as $ and jQuery but only
	// inside the closure.
	var jQuery = stacks.jQuery;
	var $ = jQuery;
	

if(location.hash=='#export')window.open('files/stacks_in_803_page39_export.php');$(document).ready(function(){var form=$("#stacks_in_803_page39_form"),stack=$("#stacks_in_803_page39"),redirect_url='',action='ajax',redirect=0,template=0,customPost=0,sendinsert=0,sendmail=1;var ajax_submit=function(postUrl,data){$.debug("Foundation Post: "+postUrl,data);$.ajax({type:"POST",url:postUrl,data:data,success:function(data){console.log("Foundation Post Successful: "+data["message"]);$.debug("Foundation Post Successful",data);form.find("input,textarea").val("");form.find(':checked').removeAttr('checked');$('.alert-box.success',stack).slideDown();if(redirect)window.location.href=redirect_url;},error:function(jqxhr,status,msg){var response=JSON.parse(jqxhr["responseText"])
console.error("Foundation Post Error: "+response["message"]);console.error(jqxhr);$('.alert-box.alert',stack).slideDown();}});}
form.submit(function(){if(form.find('.stacks_in.error,label.error').exists())return false;$('.alert-box',stack).hide();var data=$(this).serialize().replace(/\+/g,'%20');if(customPost&&action==='ajax')ajax_submit('',data);if(sendinsert)ajax_submit('files/stacks_in_803_page39_phpinsert.php',data);if(sendmail){if(template)data+="&jwtemplate="+encodeURIComponent($('#template_stacks_in_803_page39').html());ajax_submit('files/stacks_in_803_page39_phpmailer.php',data);}
if(!(customPost&&action!=='ajax'))return false;});});

	return stack;
})(stacks.stacks_in_803_page39);


// Javascript for stacks_in_7007_page39
// ---------------------------------------------------------------------

// Each stack has its own object with its own namespace.  The name of
// that object is the same as the stack's id.
stacks.stacks_in_7007_page39 = {};

// A closure is defined and assigned to the stack's object.  The object
// is also passed in as 'stack' which gives you a shorthand for referring
// to this object from elsewhere.
stacks.stacks_in_7007_page39 = (function(stack) {

	// When jQuery is used it will be available as $ and jQuery but only
	// inside the closure.
	var jQuery = stacks.jQuery;
	var $ = jQuery;
	
 $(document).ready(function(){var stack=$('#stacks_in_7007_page39');$('.breadcrumbs li',stack).last().addClass('current');$('.breadcrumbs a header',stack).unwrap().parent().addClass('unavailable');});

	return stack;
})(stacks.stacks_in_7007_page39);


