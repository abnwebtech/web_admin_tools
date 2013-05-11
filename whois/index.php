<?php
error_reporting(0);
header("Content-Type:text/html;charset=GB2312");
$domain = trim($_POST['domain']);
$domain = strtolower($domain);
if(!$domain && $_GET['domain']){
	$domain = strtolower(trim($_GET['domain']));
}
$domain = $domain?$domain:'34ways.com';
if($domain){
	@require_once('../cache.php');
	if(file_exists("../cache/whoischace.php")){
		@require_once("../cache/whoischace.php");
		$urls = filehave($urls,$domain);
	}else{
	$urls = fileno($domain);
	}
	writeover("../cache/whoischace.php","<?php\r\n\$urls=".vvar_export($urls).";\r\n?>");
}
if(substr($domain,0,7) == "http://") {
	$domain = str_replace("http://","",$domain);
}
if(substr($domain,0,4) == "www.") {
	$domain = str_replace("www.","",$domain);
}
if($domain){
	preg_match("/<div class=\"lyTableInfoWrap\">(.+?)<\/div>/is", @file_get_contents('http://www.xinnet.cn/Modules/agent/serv/pages/domain_whois.jsp?domainNameWhois='.$domain.'&noCode=noCode'), $whois);
	$result = $whois[0];
	$result = str_replace("Billing Contact","财务联系",$result);
	$result = str_replace("Technical Contact","技术联系",$result);
	$result = str_replace("Administrative Contact","管理人联系",$result);
	$result = str_replace("Expiration Date","过期时间",$result);
	$result = str_replace("Updated Date","更新时间",$result);
	$result = str_replace("Creation Date","创建时间",$result);
	$result = str_replace("Status","状态",$result);
	$result = str_replace("Name Server","DNS服务器",$result);
	$result = str_replace("Referral URL","相关网站",$result);
	$result = str_replace("Registrar:","注册商:",$result);
	$result = str_replace("Whois Server:","域名服务器:",$result);
	$result = str_replace("no data found!"," ",$result);
	$result = str_replace("-jan","-1月",$result);
	$result = str_replace("-feb","-2月",$result);
	$result = str_replace("-mar","-3月",$result);
	$result = str_replace("-apr","-4月",$result);
	$result = str_replace("-may","-5月",$result);
	$result = str_replace("-jun","-6月",$result);
	$result = str_replace("-jul","-7月",$result);
	$result = str_replace("-aug","-8月",$result);
	$result = str_replace("-sep","-9月",$result);
	$result = str_replace("-oct","-10月",$result);
	$result = str_replace("-nov","-11月",$result);
	$result = str_replace("-dec","-12月",$result);
	$resul2 = "访问此网站：<a href=http://".$domain.">http://".$domain."</a><br/>".$result;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title><?php echo $domain;?>的Whois信息-站长工具 - 社会化收藏分享按钮 Powered by 34ways.com</title>
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
<ul><li><a href="http://www.34ways.com" target="_blank"><font color="blue">34ways团购导航</font></a></li>
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
<div class="main">
  <div class="box">
    <div id="c">
      <h1><a href="/whois">域名Whois查询工具</a></h1>
      <div class="box1" style="text-align:center;"> 
      <form action="" method="POST">
          <span class="info3" > 请输入要查询的域名：
            <font color="green"><b>HTTP://</b></font><input name="domain" type="text" id="domain" class="input" size="40" url="true" value="<?php echo $domain?>" onkeydown="if(event.keyCode==13)startRequest();"/>
            <input name="btnS" class="but" type="submit" value="查询"  id="sub"/>
          </span></form>
           <div id="more" class="div_whois">
               相关查询:
<a href="/dels/dels.php?domain=34ways.com">域名删除时间</a>
<a href="/ip/?domain=34ways.com">IP查询</a>
<a href="/whois/?domain=34ways.com">WHOIS查询</a>
            </div>
          <div style="width:100%">
              <div id="detail" class="info1">
<div id="result" class="div_whois">
<?php echo $resul2;?>
</div>
              </div>
              <div style="float:right; width:40%; text-align:right; padding-top:9px;">
                            <ul style="text-align:left; width:200px; overflow:hidden;">
              <li>最近查询域名：</li>
             <?php
@require_once('../cache/whoischace.php');
if($urls){
foreach ($urls as $key=>$v){
	echo " <li><a href=/whois/index.php?domain=".$urls[$key].">".$urls[$key]."</a>&nbsp;&nbsp;</li>";
}}?>
              </ul>
              </div>
          </div>
      </div>
    </div>
  </div>


<div id="b_14">
    <div class="box">
      <div id="b_14">
        <h1>工具简介</h1>
        <div class="box1">
            <span class="info2">
               <p>Whois 简单来说，就是一个用来查询域名是否已经被注册，以及注册域名的详细信息的数据库（如域名所有人、域名注册商、域名注册日期和过期日期等）。通过域名Whois查询，可以查询域名归属者联系方式，以及注册和到期时间,可以用 <b style="color:Red;">www.34ways.com</b> 访问！</p>
            
            <p><b>关于域名到期删除规则实施的解释：</b></p>
            <p>国际域名：</p>
            <p>(1) 到期当天暂停解析，如果在72小时未续费，则修改域名DNS指向广告页面（停放）。38天内，可以自动续费。续费后，系统自动
恢复原来的DNS，刷新时间大概是24－48小时。</p>
            <p>&nbsp;(2) 39-70天，域名处于赎回期（Redemption），此期间域名无法管理，需手工赎回！
            </p>
            <p>(3) 75天，域名被彻底删除，可以重新注册。</p>
            <p>国内域名：</p>
            <p>(1) 到期当天暂停解析，如果在72小时未续费，则修改域名DNS指向
      广告页面（停放）。35天内，可以自动续费。
            </p>
            <p>(2) 过期后36－48天，将进入13天的高价赎回期，此期间域名无法管
     理。赎回价格（中文1500元/个，英文500元/个）
            </p>
            <p>(3) 过期后48天后仍未续费的，域名将随时被删除。 
            </p>
            </span>
        </div>
      </div>
</div>
<?php @require_once('../foot.php');?>