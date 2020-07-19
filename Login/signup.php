<!DOCTYPE HTML>
<html>
<head>
<title>New user signup </title>
<meta charset="UTF-8">
<script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
<script async="" src="https://www.google-analytics.com/analytics.js"></script>
<script type="text/javascript">!function(e){var o;try{o=window[e];var t="__storage_test__";return o.setItem(t,t),o.removeItem(t),!0}catch(e){return e instanceof DOMException&&(22===e.code||1014===e.code||"QuotaExceededError"===e.name||"NS_ERROR_DOM_QUOTA_REACHED"===e.name)&&o&&0!==o.length}}("localStorage")||localStorage.removeItem("google_ama_config");</script>
<script data-ezscrex="false" data-cfasync="false" data-pagespeed-no-defer="">var __ez=__ez||{};__ez.stms=Date.now();__ez.evt={};__ez.script={};__ez.ck={};__ez.template={};__ez.template.isOrig=false;__ez.evt.add=function(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent?e.attachEvent("on"+t,n):e["on"+t]=n()},__ez.evt.remove=function(e,t,n){e.removeEventListener?e.removeEventListener(t,n,!1):e.detachEvent?e.detachEvent("on"+t,n):delete e["on"+t]};__ez.ck.get=function(cname,did){if(did!==null)cname=cname+"_"+did;var name=cname+"=";var decodedCookie=decodeURIComponent(document.cookie);var ca=decodedCookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)===' '){c=c.substring(1)}
if(c.indexOf(name)===0){return c.substring(name.length,c.length)}}
return ""};__ez.ck.setByCat=function(cookie,categoryId){if(location.protocol==='https:'){cookie=cookie+"; Secure; SameSite=Lax;";}
if(cookie.indexOf('path=')===-1){cookie+='; path=/';}
if(typeof cmpIsOn==="undefined"){document.cookie=cookie;return;}
if(typeof categoryId==="undefined"||categoryId===null){return;}
var cmpCookie=__ez.ck.get("ezCMPCookieConsent",null);cmpCookie=cmpCookie.substring(1,cmpCookie.length);if(cmpCookie.indexOf(categoryId+"=1")!==-1){document.cookie=cookie;}else if(cmpCookie===""){if(typeof cmpCookies!=="undefined"){if(typeof cmpCookies[categoryId]==="undefined"){cmpCookies[categoryId]=[];}
cmpCookies[categoryId].push(cookie);}}};__ez.queue=(function(){var count=0,incr=0,items=[],timeDelayFired=false,hpItems=[],lpItems=[],allowLoad=true;var obj={func:function(name,funcName,parameters,isBlock,blockedBy,deleteWhenComplete,proceedIfError){var self=this;this.name=name;this.funcName=funcName;this.parameters=parameters===null?null:(parameters instanceof Array)?parameters:[parameters];this.isBlock=isBlock;this.blockedBy=blockedBy;this.deleteWhenComplete=deleteWhenComplete;this.isError=false;this.isComplete=false;this.isInitialized=false;this.proceedIfError=proceedIfError;this.isTimeDelay=false;this.process=function(){log("... func = "+name);self.isInitialized=true;self.isComplete=true;log("... func.apply: "+name);var funcs=self.funcName.split('.');var func=null;if(funcs.length>3){}else if(funcs.length===3){func=window[funcs[0]][funcs[1]][funcs[2]];}else if(funcs.length===2){func=window[funcs[0]][funcs[1]];}else{func=window[self.funcName];}
if(typeof func!=='undefined'&&func!==null){func.apply(null,this.parameters);}
if(self.deleteWhenComplete===true)delete items[name];if(self.isBlock===true){log("----- F'D: "+self.name);processAll();}}},file:function(name,path,isBlock,blockedBy,async,defer,proceedIfError){var self=this;this.name=name;this.path=path;this.async=async;this.defer=defer;this.isBlock=isBlock;this.blockedBy=blockedBy;this.isInitialized=false;this.isError=false;this.isComplete=false;this.proceedIfError=proceedIfError;this.isTimeDelay=false;this.process=function(){self.isInitialized=true;log("... file = "+name);var scr=document.createElement('script');scr.src=path;if(async===true)scr.async=true;else if(defer===true)scr.defer=true;scr.onerror=function(){log("----- ERR'D: "+self.name);self.isError=true;if(self.isBlock===true){processAll();}};scr.onreadystatechange=scr.onload=function(){var state=scr.readyState;log("----- F'D: "+self.name);if((!state||/loaded|complete/.test(state))){self.isComplete=true;if(self.isBlock===true){processAll();}}};document.getElementsByTagName('head')[0].appendChild(scr);}}};function init(){window.addEventListener("load",function(){setTimeout(function(){timeDelayFired=true;log('TDELAY -----');processAll();},5000);},false);}
function addFile(name,path,isBlock,blockedBy,async,defer,proceedIfError,priority){var item=new obj.file(name,path,isBlock,blockedBy,async,defer,proceedIfError);if(priority===true){hpItems[name]=item}else{lpItems[name]=item}
items[name]=item;checkIfBlocked(item);}
function setallowLoad(settobool){allowLoad=settobool}
function addFunc(name,func,parameters,isBlock,blockedBy,autoInc,deleteWhenComplete,proceedIfError,priority){if(autoInc===true)name=name+"_"+incr++;var item=new obj.func(name,func,parameters,isBlock,blockedBy,deleteWhenComplete,proceedIfError);if(priority===true){hpItems[name]=item}else{lpItems[name]=item}
items[name]=item;checkIfBlocked(item);}
function addTimeDelayFile(name,path){var item=new obj.file(name,path,false,[],false,false,true);item.isTimeDelay=true;log(name+' ... '+' FILE! TDELAY');lpItems[name]=item;items[name]=item;checkIfBlocked(item);}
function addTimeDelayFunc(name,func,parameters){var item=new obj.func(name,func,parameters,false,[],true,true);item.isTimeDelay=true;log(name+' ... '+' FUNCTION! TDELAY');lpItems[name]=item;items[name]=item;checkIfBlocked(item);}
function checkIfBlocked(item){if(isBlocked(item)===true||allowLoad==false)return;item.process();}
function isBlocked(item){if(item.isTimeDelay===true&&timeDelayFired===false){log(item.name+" blocked = TIME DELAY!");return true;}
if(item.blockedBy instanceof Array){for(var i=0;i<item.blockedBy.length;i++){var block=item.blockedBy[i];if(items.hasOwnProperty(block)===false){log(item.name+" blocked = "+block);return true;}else if(item.proceedIfError===true&&items[block].isError===true){return false;}else if(items[block].isComplete===false){log(item.name+" blocked = "+block);return true;}}}
return false;}
function log(msg){var href=window.location.href;var reg=new RegExp('[?&]ezq=([^&#]*)','i');var string=reg.exec(href);var res=string?string[1]:null;if(res==="1")console.debug(msg);}
function processAll(){count++;if(count>200)return;log("let's go");processItems(hpItems);processItems(lpItems);}
function processItems(list){for(var i in list){if(list.hasOwnProperty(i)===false)continue;var item=list[i];if(item.isComplete===true||isBlocked(item)||item.isInitialized===true||item.isError===true){if(item.isError===true){log(item.name+': error')}else if(item.isComplete===true){log(item.name+': complete already')}else if(item.isInitialized===true){log(item.name+': initialized already')}}else{item.process();}}}
init();return{addFile:addFile,addDelayFile:addTimeDelayFile,addFunc:addFunc,addDelayFunc:addTimeDelayFunc,items:items,processAll:processAll,setallowLoad:setallowLoad};})();__ez.script.add=function(e){var t=document.createElement("script");t.src=e,t.async=!0,t.type="text/javascript",document.getElementsByTagName("head")[0].appendChild(t)};</script>
<script data-ezscrex="false" type="text/javascript" data-cfasync="false">var _ezaq = {"ad_cache_level":2,"ad_count_adjustment":0,"ad_lazyload_version":1,"ad_location_ids":"","ad_transform_level":0,"adx_ad_count":0,"bidder_method":3,"bidder_version":5,"city":"Kampala","country":"UG","days_since_last_visit":0,"display_ad_count":0,"domain_id":27244,"ds_adsize_opt_id":-1,"engaged_time_visit":0,"ezcache_level":2,"forensiq_score":-1,"form_factor_id":1,"framework_id":1,"has_bad_image":0,"has_bad_words":0,"iab_category":"","is_from_recommended_pages":false,"is_return_visitor":true,"is_sitespeed":0,"last_page_load":"1589460775711","last_pageview_id":"0e6e68af-de89-4e4d-51b0-cbb1c93ae6be","lt_cache_level":0,"max_ads":2,"metro_code":0,"optimization_version":4,"page_ad_positions":"","page_view_count":0,"page_view_id":"926bc686-1d31-4e49-4178-4599f1867e5d","position_selection_id":32,"postal_code":"","pv_event_count":0,"response_time_orig":4,"serverid":"13.233.145.208:7693","state":"102","sub_page_ad_positions":"","t_epoch":1589464395,"template_id":147,"time_on_site_visit":0,"url":"https://studentstutorial.com/project/signuser/signup.php","user_id":0,"weather_precipitation":0,"weather_summary":"","weather_temperature":0,"word_count":10,"worst_bad_word_level":0};var _ezim_d = {};var _ezat = {"domain_id":27244,"form_factor_id":1,"framework_id":1,"pageview_date":"2020-05-14","pageview_id":"926bc686-1d31-4e49-4178-4599f1867e5d","template_id":147,"url":"https://studentstutorial.com/project/signuser/signup.php","visit_uuid":"fc8564eb-16dc-4413-6a46-a1805ada4fdc"};</script>
<script data-ezscrex="false" data-pagespeed-no-defer="" data-cfasync="false" type="text/javascript">__ez.queue.addFile('banger.js', '/porpoiseant/banger.js?cb=188-0&bv=32&v=32&PageSpeed=off', true, [], true, false, false, true);</script>
<script src="/porpoiseant/banger.js?cb=188-0&amp;bv=32&amp;v=32&amp;PageSpeed=off" async=""></script>
<script>(function(){function a(g,h,i){var j=new Date;j.setTime(j.getTime()+1e3*(60*(60*(24*i))));var k="expires="+j.toUTCString(),l=g+"="+h+";"+k+";path=/;";"undefined"!=typeof ezdomain&&(l+="domain="+ezdomain),document.cookie=l}var b=window.addEventListener?"addEventListener":"attachEvent",c=window[b],f="attachEvent"==b?"onmessage":"message";c(f,function(g){"undefined"!=typeof g.data.ezstatus&&(__ez.bit.AddAndFire(_ezaq.page_view_id,[new __ezDotData("dg",g.data.ezstatus)]),a("ezdg",g.data.ezstatus,730))})})();</script>
<script data-ezscrex="false" data-cfasync="false" data-pagespeed-no-defer="">__ez.dot={};var __ezDotData=function(name,val){if(typeof(name)!='string'&&name.length==2){val=name[1];name=name[0];}
this.name=name;this.val=val;};__ez.dot.b64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9+/=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/rn/g,"n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}};__ez.dot.dataToStr=function(pixelData){if(typeof pixelData==="undefined"){return[]}
try{for(var i in pixelData){pixelData[i].val=pixelData[i].val+'';}}catch(e){}
return pixelData};__ez.dot.getCC=function(){var countryCode="XX";if(typeof _ezaq!=="undefined"&&_ezaq.hasOwnProperty("country")){countryCode=_ezaq.country;}
return countryCode;};__ez.dot.getDID=function(){var domainId="0";if(typeof _ezaq!=="undefined"&&_ezaq.hasOwnProperty("domain_id")){domainId=_ezaq.domain_id.toString();}
return domainId;};__ez.dot.getEpoch=function(tEpoch){if(typeof _ezaq!=="undefined"&&_ezaq.hasOwnProperty("t_epoch")){tEpoch=_ezaq.t_epoch;}
return tEpoch};__ez.dot.getPageviewId=function(){var pageviewId="";if(typeof _ezaq!=="undefined"&&_ezaq.hasOwnProperty("page_view_id")){pageviewId=_ezaq.page_view_id;}
return pageviewId;};__ez.dot.getURL=function(pxURL){if((typeof ezJsu!=="undefined"&&ezJsu==true)||(typeof _ez_sa!=="undefined"&&_ez_sa==true)||(typeof isAmp!=='undefined'&&isAmp===true)||(typeof ezWp!=='undefined'&&ezWp===true)){pxURL="//g.ezoic.net"+pxURL;}
return pxURL;};__ez.dot.isValid=function(pixelData){for(var i=0;i<pixelData.length;i++){if(pixelData[i]instanceof __ezDotData===false){console.error("Invalid data. ",pixelData[i]);return false}}
return true};__ez.dot.isDefined=function(){for(var i=0;i<arguments.length;i++){if(typeof arguments[i]==='undefined'||arguments[i]===null){console.error("Argument not defined. ",arguments);return false}}
return true};__ez.dot.isAnyDefined=function(){var result=false;for(var i=0;i<arguments.length;i++){if(typeof arguments[i]!=='undefined'&&arguments[i]!==null){result=true}}
if(result==false){console.error("isAnyDefined Arguments not defined. ",arguments);}
return result};__ez.dot.getSlotIID=function(slot){var iid="0";try{var map=__ez.dot.getTargetingMap(slot),dvid=__ez.dot.getElementId(slot);if(dvid.indexOf("div-gpt-ad")===-1){return iid;}
if(typeof map!=="undefined"){for(var key in map){if(key.indexOf('iid')!==-1&&typeof map[key][0]!=="undefined"){iid=map[key][0];break;}}}}catch(e){}
return iid;};__ez.dot.getElementId=function(slot){if(typeof(slot.ElementId)!='undefined'){return slot.ElementId;}else{return slot.getSlotElementId()}};__ez.dot.getAdUnitPath=function(slot){if(typeof(slot.AdUnitPath)!='undefined'){return slot.AdUnitPath;}else{return slot.getAdUnitPath()}};__ez.dot.getSizes=function(slot){if(typeof(slot.Sizes)!='undefined'){return slot.Sizes;}else{return slot.getSizes();}};__ez.dot.getTargeting=function(slot,key){if(typeof(slot.Targeting)!='undefined'){return slot.Targeting[key];}else{return slot.getTargeting(key)[0];}};__ez.dot.getTargetingMap=function(slot){if(typeof(slot.Targeting)!='undefined'){return slot.Targeting;}else{return slot.getTargetingMap();}};__ez.dot.getAdUnit=function(adSlot){if(__ez.template.isOrig===true){return __ez.dot.getAdUnitPath(adSlot).split("/").pop()+"|~ez~|"+__ez.dot.getElementId(adSlot);}
return __ez.dot.getElementId(adSlot);};__ez.bit=(function(){var pixels=[],pxURL="/detroitchicago/greenoaks.gif";function AddAndFirePixel(pvId,pixelData){AddPixel(pvId,pixelData);Fire();}
function AddPixel(pvId,pixelData){if(__ez.dot.isDefined(pvId)&&__ez.dot.isValid(pixelData)){pixels.push({type:"pageview",pageview_id:pvId,domain_id:__ez.dot.getDID(),t_epoch:__ez.dot.getEpoch(0),data:__ez.dot.dataToStr(pixelData)})}}
function Fire(){if(typeof document.visibilityState!=='undefined'&&document.visibilityState==="prerender")return;if(__ez.dot.isDefined(pixels)&&pixels.length>0){(new Image()).src=__ez.dot.getURL(pxURL)+"?orig="+(__ez.template.isOrig===true?1:0)+"&ds="+btoa(JSON.stringify(pixels));}
pixels=[]}
return{Add:AddPixel,AddAndFire:AddAndFirePixel,Fire:Fire}})();</script>
<script data-ezscrex="false" data-cfasync="false" data-pagespeed-no-defer="">__ez.pel=(function(){var pixels=[],pxURL="/porpoiseant/army.gif";function AddAndFirePixel(adSlot,pixelData){AddPixel(adSlot,pixelData,0,0,0,0,0);Fire();}
function GetCurrentPixels(){return pixels;}
function AddPixel(adSlot,pixelData,revenue,est_revenue,bid_floor_filled,bid_floor_prev,stat_source_id){if(!__ez.dot.isDefined(adSlot)||__ez.dot.isAnyDefined(adSlot.getSlotElementId,adSlot.ElementId)==false){return;}
var ad_position_id=parseInt(__ez.dot.getTargeting(adSlot,'ap'));var impId=__ez.dot.getSlotIID(adSlot),adUnit=__ez.dot.getAdUnit(adSlot);var compId=parseInt(__ez.dot.getTargeting(adSlot,"compid"));var lineItemId=0;var creativeId=0;var ezimData=getEzimData(adSlot);if(typeof ezimData=='object'){if(ezimData.creative_id!==undefined){creativeId=ezimData.creative_id;}
if(ezimData.line_item_id!==undefined){lineItemId=ezimData.line_item_id;}}
if(__ez.dot.isDefined(impId,adUnit)&&__ez.dot.isValid(pixelData)){pixels.push({type:"impression",impression_id:impId,domain_id:__ez.dot.getDID(),unit:adUnit,t_epoch:__ez.dot.getEpoch(0),revenue:revenue,est_revenue:est_revenue,ad_position:ad_position_id,ad_size:"",bid_floor_filled:bid_floor_filled,bid_floor_prev:bid_floor_prev,stat_source_id:stat_source_id,country_code:__ez.dot.getCC(),pageview_id:__ez.dot.getPageviewId(),comp_id:compId,line_item_id:lineItemId,creative_id:creativeId,data:__ez.dot.dataToStr(pixelData)});}}
function AddPixelById(impFullId,pixelData){var vals=impFullId.split('/');if(__ez.dot.isDefined(impFullId)&&vals.length===3&&__ez.dot.isValid(pixelData)){var adUnit=vals[0],impId=vals[2];pixels.push({type:"impression",impression_id:impId,domain_id:__ez.dot.getDID(),unit:adUnit,t_epoch:__ez.dot.getEpoch(0),pageview_id:__ez.dot.getPageviewId(),data:__ez.dot.dataToStr(pixelData)});}}
function Fire(){if(typeof document.visibilityState!=='undefined'&&document.visibilityState==="prerender")return;if(__ez.dot.isDefined(pixels)&&pixels.length>0){var pixelURL=__ez.dot.getURL(pxURL)+"?orig="+(__ez.template.isOrig===true?1:0)+"&sts="+btoa(JSON.stringify(pixels));if(typeof window.isAmp!=='undefined'&&isAmp&&typeof window._ezaq!=='undefined'&&_ezaq.hasOwnProperty("domain_id")){pixelURL+="&visit_uuid="+_ezaq['visit_uuid'];}
(new Image()).src=pixelURL;}
pixels=[];}
function getEzimData(adSlot){if(typeof _ezim_d=="undefined"){return false}
var adUnitName=__ez.dot.getAdUnitPath(adSlot).split('/').pop();if(typeof _ezim_d==='object'&&_ezim_d.hasOwnProperty(adUnitName)){return _ezim_d[adUnitName];}
for(var ezimKey in _ezim_d){if(ezimKey.split('/').pop()===adUnitName){return _ezim_d[ezimKey];}}
return false;}
return{Add:AddPixel,AddAndFire:AddAndFirePixel,AddById:AddPixelById,Fire:Fire,GetPixels:GetCurrentPixels,};})();var EzoicPixel=function(){this.pixels=[];this.pixelUrl="/ezoic/e.gif";if((typeof ezJsu!=="undefined"&&ezJsu===true)||(typeof _ez_sa!=="undefined"&&_ez_sa===true)||((typeof window.isAmp!='undefined')&&isAmp===true)||((typeof ezWp!=='undefined')&&ezWp===true)){this.pixelUrl="//g.ezoic.net"+this.pixelUrl}
this.tEpoch=0;if(typeof _ezaq!=="undefined"&&_ezaq.hasOwnProperty("t_epoch")){this.tEpoch=_ezaq.t_epoch}};var EzoicPixelData=function(name,val){this.name=name;this.val=val;};EzoicPixel.prototype={constructor:EzoicPixel,AddAndFireImpPixel:function(adSlot,pixelData){this.AddImpPixel(adSlot,pixelData,0,0,0,0,0);this.FirePixels()},AddAndFirePVPixel:function(pvId,pixelData){this.AddPVPixel(pvId,pixelData);this.FirePixels()},AddImpPixel:function(adSlot,pixelData,revenue,est_revenue,bid_floor_filled,bid_floor_prev,stat_source_id){if(__ez.dot.isDefined(adSlot)==false||__ez.dot.isAnyDefined(adSlot.getSlotElementId,adSlot.ElementId)==false){return}
var ad_position_id=parseInt(__ez.dot.getTargeting(adSlot,'ap'));var ad_size_array=__ez.dot.getSizes(adSlot)[0];var ad_size=ad_size_array.l.toString()+"x"+ad_size_array.j.toString();var domainId="0";var countryCode="XX";if(typeof _ezaq!=="undefined"&&_ezaq.hasOwnProperty("domain_id")){domainId=_ezaq.domain_id.toString()}
if(typeof _ezaq!=="undefined"&&_ezaq.hasOwnProperty("country")){countryCode=_ezaq.country}
var impId=__ez.dot.getSlotIID(adSlot),adUnit=__ez.dot.getSlotElementId(adSlot);if(__ez.dot.isDefined(impId,adUnit)&&this.validateData(pixelData)){pixelData=this.convertDataToStr(pixelData);this.pixels.push({type:"impression",impression_id:impId,domain_id:domainId,unit:adUnit,t_epoch:this.tEpoch,revenue:revenue,est_revenue:est_revenue,ad_position:ad_position_id,ad_size:ad_size,bid_floor_filled:bid_floor_filled,bid_floor_prev:bid_floor_prev,stat_source_id:stat_source_id,country_code:countryCode,data:pixelData})}},AddImpPixelById:function(impFullId,pixelData){var domainId="0";if(typeof _ezaq!=="undefined"&&_ezaq.hasOwnProperty("domain_id")){domainId=_ezaq.domain_id.toString()}
var vals=impFullId.split('/');if(__ez.dot.isDefined(impFullId)&&vals.length===3&&this.validateData(pixelData)){var adUnit=vals[0];var impId=vals[2];pixelData=this.convertDataToStr(pixelData);this.pixels.push({type:"impression",impression_id:impId,domain_id:domainId,unit:adUnit,t_epoch:this.tEpoch,data:pixelData})}},AddPVPixel:function(pvId,pixelData){var domainId="0";if(typeof _ezaq!=="undefined"&&_ezaq.hasOwnProperty("domain_id")){domainId=_ezaq.domain_id.toString()}
if(__ez.dot.isDefined(pvId)&&this.validateData(pixelData)){pixelData=this.convertDataToStr(pixelData);this.pixels.push({type:"pageview",pageview_id:pvId,domain_id:domainId,t_epoch:this.tEpoch,data:pixelData})}},FirePixels:function(){if(typeof document.visibilityState!=='undefined'&&document.visibilityState==="prerender"){return}
if(__ez.dot.isDefined(this.pixels)&&this.pixels.length>0){(new Image()).src=this.pixelUrl+"?orig="+(__ez.template.isOrig===true?1:0)+"&pixels="+encodeURIComponent(JSON.stringify(this.pixels))}
this.pixels=[]},NewData:function(name,val){return new EzoicPixelData(name,val)},convertDataToStr:function(pixelData){if(typeof pixelData==="undefined"){return[]}
try{for(var i in pixelData){pixelData[i].val=pixelData[i].val+''}}catch(e){}
return pixelData},validateData:function(pixelData){for(var i=0;i<pixelData.length;i++){if(pixelData[i]instanceof EzoicPixelData===false){console.error("Invalid pixelData. ",pixelData[i]);return false}}
return true}};</script>
<script data-ezscrex="false" data-pagespeed-no-defer="" data-cfasync="false" type="text/javascript">__ez.queue.addFile('rochester.js', '/detroitchicago/rochester.js?cb=188-0&v=8', false, [], true, false, true, true);</script>
<script data-ezscrex="false" data-pagespeed-no-defer="" data-cfasync="false" type="text/javascript">__ez.queue.addFile('rochester.js', '/detroitchicago/rochester.js?cb=188-0&v=8', false, [], true, false, true, true);</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Font Icon -->
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.css">
<!-- Main css -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77417952-1', 'auto');
  ga('send', 'pageview');

</script>
<style>.ezoic-ad{display:inline-block;}
.ezoic-ad .ezoic-adl {border:1px #c0c0c047 solid;border-radius:6px;overflow:hidden;background:url("/utilcave_com/l.svg") no-repeat center center}.ezoic-ad .ezfound,.ezmob-footer .ezoic-ad .ezoic-ad,.ezoic-ad-adaptive > .ezoic-ad, .ezoic-ad-rl {background:0 0;border-radius:0;border:none}
 }</style>
<script data-ezscrex="false" data-cfasync="false" type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['e._setAccount', 'UA-84007986-36']);
_gaq.push(['f._setAccount', 'UA-38339005-1']);
_gaq.push(['e._setDomainName', 'studentstutorial.com']);
_gaq.push(['f._setDomainName', 'studentstutorial.com']);
_gaq.push(['e._setCustomVar',1,'template','pub_site_noads',3]);
_gaq.push(['e._setCustomVar',2,'t','147',3]);
_gaq.push(['e._setCustomVar',3,'rid','0',2]);
_gaq.push(['e._setCustomVar',4,'bra','mod92',3]);
_gaq.push(['e._setAllowAnchor',true]);
_gaq.push(['e._setSiteSpeedSampleRate', 10]);
_gaq.push(['f._setCustomVar',1,'template','pub_site_noads',3]);
_gaq.push(['f._setCustomVar',2,'domain','studentstutorial.com',3]);
_gaq.push(['f._setSiteSpeedSampleRate', 20]);
_gaq.push(['e._trackPageview']);
_gaq.push(['f._trackPageview']);


(function() {
 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<script type="text/javascript">var ezouid = "1";</script>
<!--[if lt IE 9]>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->
<!--[if (gte IE 9) | (!IE)]><!-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!--<![endif]-->
<script type="text/javascript">
(function(){
	var div = document.createElement('div');
	div.id = 'dmo1';
	div.style = 'display:none';
	var s = document.createElement('script');
	var code = `var googleAdClient = "ca-pub-6396844742497208";
			  window.google_ad_client = googleAdClient;
			  /* dmo */
			  window.google_ad_slot = "dmo";
			  window.google_ad_width = 88;
			  window.google_ad_height = 31;
			  (adsbygoogle = window.adsbygoogle || []).push({
				  google_ad_client: googleAdClient,
				  enable_page_level_ads: false
			  });`;
	var ss = document.createElement('script');
	ss.src = '//pagead2.googlesyndication.com/pagead/show_ads.js';
	ss.type = 'text/javascript';
	ss.async = false;
	try {
		s.appendChild(document.createTextNode(code));
	} catch (e) {
		s.text = code;
	}
	div.appendChild(s);
	div.appendChild(ss);
	if (document.readyState == 'interactive' || document.readyState == 'complete') {
		document.body.appendChild(div);
	} else {
		document.addEventListener("DOMContentLoaded", function(event) {
			document.body.appendChild(div);
		});
	}
}());
</script>
<script>
var old_jquery = null;
var old_jquery_sign = null;
function open_jquery_wrapper()
{
    if(typeof $ezJQuery != 'undefined')
    {
        old_jquery = jQuery;
        old_jquery_sign = $;
        $ = $ezJQuery;
        jQuery = $ezJQuery;
    }
}
function close_jquery_wrapper()
{
    if(typeof $ezJQuery != 'undefined')
    {
        $ = old_jquery_sign;
        jQuery = old_jquery;
    }
}
</script>
<!-- START EZHEAD -->
<script data-ezscrex="false" type="text/javascript">
var soc_app_id = '0';
var did = 27244;
var ezdomain = 'studentstutorial.com';
var ezoicSearchable = 1;
</script>
<!--{jquery}-->
<!-- END EZHEAD -->
<script data-ezscrex="false" data-pagespeed-no-defer="" data-cfasync="false" type="text/javascript" style="display:none">
__ez.queue.addFile('__ezf_ezosuigeneris', '//g.ezoic.net/ezosuigeneris.js', true, [], true, false, false, false);
var __ez_ezosuigenerisEvt = function() { if(typeof(ezosuigeneris) != 'undefined'){__ez.bit.AddAndFire(_ezaq['page_view_id'], [(new __ezDotData('universal_user_id', ezosuigeneris))]); }};
__ez.queue.addFunc('__ez_ezosuigenerisEvt', '__ez_ezosuigenerisEvt', null, false, ['__ezf_ezosuigeneris'], false, false, false, false);</script>
<script src="//g.ezoic.net/ezosuigeneris.js" async=""></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="signup-content">
               <div class="signup-form">
<h2 class="form-title">Sign up</h2>
<form name="form1" method="post" action="signupuser.php"  class="register-form" id="register-form" >
<div class="form-group">
    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
    <input type="text" name="name" id="name" placeholder="Full Name" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
	<span id="error_name" style="color:red;"></span>
</div>
<div class="form-group">
    <label for="user_id"><i class="zmdi zmdi-account material-icons-name"></i></label>
    <input type="text" name="user_id" id="user_id" placeholder="Username" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
	<span id="error_name" style="color:red;"></span>
</div>
<div class="form-group">
    <label for="email"><i class="zmdi zmdi-email"></i></label>
    <input type="email" name="email" id="email" placeholder="Email Id" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
	<span id="error_email" style="color:red;"></span>
								
</div>
<div class="form-group">
    <label for="phone"><i class="zmdi zmdi-phone"></i></label>
    <input name="phone" type="tel" minlength="10" maxlength="10" id="phone" placeholder="Phone" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
	<span id="error_phone" style="color:red;"></span>
</div>
<div class="form-group">
    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
    <input type="password" name="pass" id="pass" placeholder="Password" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
</div>
<div class="form-group">
    <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
    <input type="password" name="password" id="re_pass" placeholder="Repeat your password" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
	<span id="CheckPasswordMatch" style="color:red;"></span>
</div>

<span><i class="zmdi zmdi-eye" id="show_password"></i>Show Password</span>

<div class="form-group form-button">
    <input type="submit" name="save" id="signup" class="form-submit" value="Register">
</div>

                              
</form>
</div>
<div class="signup-image">
        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
        <a href="login.php" class="signup-image-link">I am already member</a>
						
         </div>

            </div>
        </div>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">__ez.evt.add(window,"load",
    function(){var a="",b="false",c="right";if(1==ezoFormfactor&&"true"===b){
        var d=document.createElement("script");d.async=!0,d.onload=function(){
            ezExcludeDoctor={addthis:1},addthis.layers(function(a){a.destroy("share")})
            ,setTimeout(function(){addthis.layers({share:{position:""==c?"left":c,responsive:!1}})},0)}
            ,d.setAttribute("src","https://s7.addthis.com/js/300/addthis_widget.js#pubid="+(""!=a?a:"ra-57054ddedfb1b3c2")),document.body.appendChild(d)}});
    </script>
    <script type="text/javascript">
				var __inScopeForCCPA = false;
		function __uspapi(command, version, callback) {
			var response = null;
			var successs = false;
			if (command === "getUSPData" && version === 1) {
				var uspString = "1"; // Version
				if (__inScopeForCCPA) {
					uspString += "N"; // Has Explicit Notice for Opt Out been provided (ex footer or minor consent modal)
					var result;
					var consentCookie = (result = new RegExp('(?:^|; )ezoccpaconsent=([^;]*)').exec(document.cookie)) ? (result[1]) : null;
					if (consentCookie === "nonconsent") {
						uspString += "N";
					}
					else {
						uspString += "Y";
					}
					uspString += "N" // Is pub a signatory to the IAB Limited Service Provider Agreement (http://www.iabprivacy.com/)
				}
				else {
					uspString += "---";
				}
				response = {
					uspString: uspString,
					version: 1
				};
				success = true;
			}
			return callback(response, success);
		};
		function __receiveUspapiMessage(event) {
			if (event.data.hasOwnProperty('__uspapiCall')) {
				__uspapi('getUSPData', 1, (uspData, success) => {
					event.source.postMessage({
						__uspapiReturn: {
							returnValue: uspData,
							success: success,
							callId: event.data.__uspapiCall.callId
						}
					},
					event.origin);
				});
			}
			return null;
		};
		window.addEventListener("message", __receiveUspapiMessage, false);
</script>
<script type="text/javascript">
				var __inScopeForCCPA = false;
		function __uspapi(command, version, callback) {
			var response = null;
			var successs = false;
			if (command === "getUSPData" && version === 1) {
				var uspString = "1"; // Version
				if (__inScopeForCCPA) {
					uspString += "N"; // Has Explicit Notice for Opt Out been provided (ex footer or minor consent modal)
					var result;
					var consentCookie = (result = new RegExp('(?:^|; )ezoccpaconsent=([^;]*)').exec(document.cookie)) ? (result[1]) : null;
					if (consentCookie === "nonconsent") {
						uspString += "N";
					}
					else {
						uspString += "Y";
					}
					uspString += "N" // Is pub a signatory to the IAB Limited Service Provider Agreement (http://www.iabprivacy.com/)
				}
				else {
					uspString += "---";
				}
				response = {
					uspString: uspString,
					version: 1
				};
				success = true;
			}
			return callback(response, success);
		};
		function __receiveUspapiMessage(event) {
			if (event.data.hasOwnProperty('__uspapiCall')) {
				__uspapi('getUSPData', 1, (uspData, success) => {
					event.source.postMessage({
						__uspapiReturn: {
							returnValue: uspData,
							success: success,
							callId: event.data.__uspapiCall.callId
						}
					},
					event.origin);
				});
			}
			return null;
		};
		window.addEventListener("message", __receiveUspapiMessage, false);
</script>
<script type="text/javascript" data-cfasync="false"></script>
<script type="text/javascript" style="display:none;">
var __ez_dims = (function() {
	var setCookie = function( name, content, expiry ) {
		return document.cookie = name+'='+content+((expiry)?';expires='+(new Date(Math.floor(new Date().getTime()+expiry*1000)).toUTCString()):'')+';path=/';
	};
	var ffid = 1;
	var oh = window.screen.height;
	var ow = window.screen.width;
	var h = ffid === 1 ? oh : (oh > ow) ? oh : ow;
	var w = ffid === 1 ? ow : (oh > ow) ? ow : oh;
	var uh = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
	var uw = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
	setCookie('ezds', encodeURIComponent('ffid='+ffid+',w='+w+',h='+h), (31536e3*7));
	setCookie('ezohw', encodeURIComponent('w='+uw+',h='+uh), (31536e3*7));
})();
</script>
<script type="text/javascript" style="display:none;" async="">
__ez.queue.addFile('edmonton.php', '/detroitchicago/edmonton.webp?a=a&cb=188-0&shcb=32', true, [], true, false, false, false);
__ez.queue.addFile('jellyfish.php', '/porpoiseant/jellyfish.webp?a=a&cb=188-0&shcb=32', false, [], true, false, false, false);
</script>
<script>var _audins_dom="studentstutorial_com",_audins_did=27244;__ez.queue.addDelayFunc("audins.js","__ez.script.add", "//go.ezoic.net/detroitchicago/audins.js?cb=188-0");</script>
<noscript><div style="display:none;">
<img src="//pixel.quantserve.com/pixel/p-31iz6hfFutd16.gif?labels=Domain.studentstutorial_com,DomainId.27244" border="0" height="1" width="1" alt="Quantcast"/>
</div></noscript>
<noscript><img src="https://sb.scorecardresearch.com/p?c1=2&c2=20015427&cv=2.0&cj=1"/></noscript>


 
</body>
</html>