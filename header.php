<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<?php
 if($hu == 'js'){
 	$uu = 'JS加密/解密 - ';
 }elseif($hu == 'utf'){
 	$uu = 'UTF-8编码转换工具 - ';
 }elseif($hu == 'unicode'){
 	$uu = 'Unicode编码转换工具 - ';
 }elseif($hu == 'sharelink'){
 	$uu = '友情链接 - ';
 }elseif($hu == 'meta'){
 	$uu = 'META信息检测 - ';
 }elseif($hu == 'mds'){
 	$uu = 'MD5加密工具 - ';
 }elseif($hu == 'ids'){
 	$uu = '身份证号码值查询 - ';
 }elseif($hu == 'htmlubb'){
 	$uu = 'HTML/UBB代码转换工具 - ';
 }elseif($hu == 'htmljs'){
 	$uu = 'HTML/JS互转 - ';
 }elseif($hu == 'eseach'){
 	$uu = '搜索蜘蛛、机器人模拟工具 - ';
 }elseif($hu == 'density'){
 	$uu = '关键词密度检测 - ';
 }elseif($hu == 'countryym'){
 	$uu = '国家域名查看 - ';
 }elseif($hu == 'yb'){
 	$uu = '邮编区号查询 - ';
 }elseif($hu == 'whois'){
 	$uu = '域名Whois查询工具 - ';
 }elseif($hu == 'webs'){
 	$uu = '死链接检测/全站PR查询 - ';
 }elseif($hu == 'ssyqsl'){
 	$uu = '搜索引擎收录查询 - ';
 }elseif($hu == 'ssyqfl'){
 	$uu = '搜索引擎反向链接 - ';
 }elseif($hu == 'shouji'){
 	$uu = '查询手机号码归属地 - ';
 }elseif($hu == 'seo'){
 	$uu = 'SEO综合查询 - ';
 }elseif($hu == 'pr'){
 	$uu = 'PR值查询 - ';
 }elseif($hu == 'keys'){
 	$uu = '关键词排名查询 - ';
 }elseif($hu == 'ip'){
 	$uu = 'IP查询 - ';
 }elseif($hu == 'google'){
 	$uu = 'Google收录查询 - ';
 }elseif($hu == 'friends'){
 	$uu = '友情链接查询工具 - ';
 }elseif($hu == 'friendlink'){
 	$uu = '友情链接IP查询工具 - ';
 }elseif($hu == 'dels'){
 	$uu = '域名删除查询 - ';
 }elseif($hu == 'baidu'){
 	$uu = '百度收录查询 - ';
 }elseif($hu == 'outpr'){
 	$uu = 'PR输出值查询 - ';
 }elseif($hu == 'yuan'){
 	$uu = '查看网页源代码 - ';
 }elseif($hu == 'unix'){
 	$uu = 'Unix时间戳(Unix timestamp)转换工具 - ';
 }
?>
<title><?php echo $uu;?>站长工具 - 社会化收藏分享按钮 Powered by 34ways.com</title>
<link href="/images/toolsite.css" rel="stylesheet" type="text/css" />
<script src="/images/globals.js" type="text/javascript"></script>
<script src="/images/home.js" type="text/javascript"></script>
<script type="text/javascript">
function $(ID) {
	return document.getElementById(ID);
}
	var xmlHttp;
	function creatXMLHttpRequest() {
		if(window.ActiveXObject) {
			xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
		} else if(window.XMLHttpRequest) {
			xmlHttp = new XMLHttpRequest();
		}
	}

	function startRequest() {
		var queryString;
		var domain = document.getElementById('domain').value;
		queryString = "domain=" + domain;
		creatXMLHttpRequest();
		xmlHttp.open("POST","?action=do","true");
		xmlHttp.onreadystatechange = handleStateChange;
		xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;");
		xmlHttp.send(queryString);
	}

	function handleStateChange() {
		if(xmlHttp.readyState == 1) {
			document.getElementById('result').style.cssText = "";
			document.getElementById('result').innerText = "Loading...";
		}
		if(xmlHttp.readyState == 4) {
			if(xmlHttp.status == 200) {
				document.getElementById('result').style.cssText = "";
				var allcon =  xmlHttp.responseText;
				document.getElementById('result').innerHTML = allcon;
			}
		}
	}

function copyToClipboard(txt) {   
     if(window.clipboardData) {   
         window.clipboardData.clearData();   
         window.clipboardData.setData("Text", txt);   
     } else if(navigator.userAgent.indexOf("Opera") != -1) {   
          window.location = txt;   
     } else if (window.netscape) {   
          try {   
               netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");   
          } catch (e) {   
               alert("被浏览器拒绝！\n请在浏览器地址栏输入'about:config'并回车\n然后将'signed.applets.codebase_principal_support'设置为'true'");   
          }
          var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);   
          if (!clip)
               return;
          var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);   
          if (!trans)   
               return;   
          trans.addDataFlavor('text/unicode');   
          var str = new Object();   
          var len = new Object();   
          var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);   
          var copytext = txt;   
          str.data = copytext;   
          trans.setTransferData("text/unicode",str,copytext.length*2);   
          var clipid = Components.interfaces.nsIClipboard;   
          if (!clip)   
               return false;   
          clip.setData(trans,null,clipid.kGlobalClipboard);
     }   
}
function killErrors() {
return true;
}
window.onerror = killErrors;

</script>
</head>
<body>
<div class="wrap"> 
<div class="top-nav">
    <div class="top-menu">
    <a href="http://www.34ways.com" target="_parent">34ways团购导航</a> | 
    <a href="http://www.niaituan.com" target="_blank"><b>你爱团-最土团购模板</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!-- Wofav Button BEGIN --><script language="javascript" id="wofav_stat"></script><script src="http://www.wofav.com/share/wofav_f.js" _menu="0" _b="0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31|32|33|34|35|36|37|38|39|40|41|42|43|44|45|46|47|48|49|50|51|52|72|73|74|" _p="f" _img="no" _u="admin" id="oops"></script><!-- Wofav Button END --></div>
 </div>
  <div class="top">
    <div class="topbanner"><script type="text/javascript">
  u_a_client="38";
  u_a_width="468"; 
  u_a_height="60"; 
  u_a_zones="572"; 
  u_a_type="0"; 
</script>
<script src="/images/468x60.js"></script></div>
    <div class="banneright">
<ul>
<li><a href="http://www.34ways.com" target="_blank"><font color="blue">34ways团购导航</font></a></li>
<li><a href="http://www.niaituan.com" target="_blank"><font color="red">你爱团-最土团购模板</font></a></li>

</ul>
	</div>
  </div>
  <div class="menu"><a href="/">首页</a> <a href="http://tool.34ways.com/" class="select">站长工具</a> 
   <a onmouseover="mouseover(this, 3)" onmouseout="mouseout()" style="cursor:pointer;">网站信息查询</a> 
   <a onmouseover="mouseover(this, 4)" onmouseout="mouseout()" style="cursor:pointer;">SEO信息查询</a> 
   <a onmouseover="mouseover(this, 5)" onmouseout="mouseout()" style="cursor:pointer;">域名/IP类查询</a> 
   <a onmouseover="mouseover(this, 6)" onmouseout="mouseout()" style="cursor:pointer;">代码转换工具</a> 
   <a onmouseover="mouseover(this, 7)" onmouseout="mouseout()" style="cursor:pointer;">其他工具</a>
  </div>
  <!--sub menu-->
  <div id="menu3" class="menu-list" onmouseover="_mouseover()" onmouseout="_mouseout()">
    <ul>
    <li><a href="/alexa" target="_blank">ALEXA排名查询</a></li>
    <li><a href="/webs/webs.php" target="_blank">站内链接分析</a></li>
    <li><a href="/density.php">关键词密度检测</a></li>
    <li><a href="/meta.php">META信息检测</a></li>
    <li><a href="/pr/outpr.php">PR输出值查询</a></li>
    <li><a href="/yuan.php">查看网页源代码</a></li>
    </ul>
  </div>
  <div id="menu4" class="menu-list" onmouseover="_mouseover()" onmouseout="_mouseout()">
    <ul>
    <li><a href="/friends/friends.php">友情链接检测</a></li>
    <li><a href="/keys/keys.php">关键词排名查询</a></li>
    <li><a href="/baidu/baidu.php">百度近日收录</a></li>
    <li><a href="/google/google.php">Google收录</a></li>
    <li><a href="/ssyqsl/ssyqsl.php">网站收录查询</a></li>
    <li><a href="/ssyqfl/ssyqfl.php">反向链接查询</a></li>
    <li><a href="/pr/pr.php">PR查询</a></li>
    <li><a href="/esearch.php">机器人模拟</a></li>
    </ul>
  </div>
  <div id="menu5" class="menu-list" onmouseover="_mouseover()" onmouseout="_mouseout()">
    <ul>
    <li><a href="/dels/dels.php">域名删除时间</a></li>
    <li><a href="/ip/">IP查询</a></li>
    <li><a href="/whois/">WHOIS查询</a></li>
    <li><a href="/friendlink/friendlink.php">友情链接IP查询</a></li>
    </ul>
   </div>
   <div id="menu6" class="menu-list" onmouseover="_mouseover()" onmouseout="_mouseout()">
     <ul>
      <li><a href="/mds.php?mds=md5">MD5加密</a></li>
      <li><a href="/js.php">JS加密/解密</a></li>
      <li><a href="/htmljs.php">HTML/JS互转</a></li>
      <li><a href="/unicode.php">Unicode转换</a></li>
      <li><a href="/utf.php">Utf-8编码转换</a></li>
      <li><a href="/htmlubb.php">HTML/UBB互转</a></li>
      <li><a href="/unix.php">Unix时间戳转换</a></li>
     </ul>
   </div>
    <div id="menu7" class="menu-list" onmouseover="_mouseover()" onmouseout="_mouseout()">
     <ul>
      <li><a href="/ids.php">身份证号码查询</a></li>
      <li><a href="/shouji/index.php">手机号码归属地</a></li>
      <li><a href="/yb/yb.php">邮编区号查询</a></li>
      <li><a href="/countryym.php">国家域名查找</a></li>
     </ul>
   </div>
   