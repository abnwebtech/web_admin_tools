<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<?php
 if($hu == 'js'){
 	$uu = 'JS����/���� - ';
 }elseif($hu == 'utf'){
 	$uu = 'UTF-8����ת������ - ';
 }elseif($hu == 'unicode'){
 	$uu = 'Unicode����ת������ - ';
 }elseif($hu == 'sharelink'){
 	$uu = '�������� - ';
 }elseif($hu == 'meta'){
 	$uu = 'META��Ϣ��� - ';
 }elseif($hu == 'mds'){
 	$uu = 'MD5���ܹ��� - ';
 }elseif($hu == 'ids'){
 	$uu = '���֤����ֵ��ѯ - ';
 }elseif($hu == 'htmlubb'){
 	$uu = 'HTML/UBB����ת������ - ';
 }elseif($hu == 'htmljs'){
 	$uu = 'HTML/JS��ת - ';
 }elseif($hu == 'eseach'){
 	$uu = '����֩�롢������ģ�⹤�� - ';
 }elseif($hu == 'density'){
 	$uu = '�ؼ����ܶȼ�� - ';
 }elseif($hu == 'countryym'){
 	$uu = '���������鿴 - ';
 }elseif($hu == 'yb'){
 	$uu = '�ʱ����Ų�ѯ - ';
 }elseif($hu == 'whois'){
 	$uu = '����Whois��ѯ���� - ';
 }elseif($hu == 'webs'){
 	$uu = '�����Ӽ��/ȫվPR��ѯ - ';
 }elseif($hu == 'ssyqsl'){
 	$uu = '����������¼��ѯ - ';
 }elseif($hu == 'ssyqfl'){
 	$uu = '�������淴������ - ';
 }elseif($hu == 'shouji'){
 	$uu = '��ѯ�ֻ���������� - ';
 }elseif($hu == 'seo'){
 	$uu = 'SEO�ۺϲ�ѯ - ';
 }elseif($hu == 'pr'){
 	$uu = 'PRֵ��ѯ - ';
 }elseif($hu == 'keys'){
 	$uu = '�ؼ���������ѯ - ';
 }elseif($hu == 'ip'){
 	$uu = 'IP��ѯ - ';
 }elseif($hu == 'google'){
 	$uu = 'Google��¼��ѯ - ';
 }elseif($hu == 'friends'){
 	$uu = '�������Ӳ�ѯ���� - ';
 }elseif($hu == 'friendlink'){
 	$uu = '��������IP��ѯ���� - ';
 }elseif($hu == 'dels'){
 	$uu = '����ɾ����ѯ - ';
 }elseif($hu == 'baidu'){
 	$uu = '�ٶ���¼��ѯ - ';
 }elseif($hu == 'outpr'){
 	$uu = 'PR���ֵ��ѯ - ';
 }elseif($hu == 'yuan'){
 	$uu = '�鿴��ҳԴ���� - ';
 }elseif($hu == 'unix'){
 	$uu = 'Unixʱ���(Unix timestamp)ת������ - ';
 }
?>
<title><?php echo $uu;?>վ������ - ��ữ�ղط���ť Powered by 34ways.com</title>
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
               alert("��������ܾ���\n�����������ַ������'about:config'���س�\nȻ��'signed.applets.codebase_principal_support'����Ϊ'true'");   
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
    <a href="http://www.34ways.com" target="_parent">34ways�Ź�����</a> | 
    <a href="http://www.niaituan.com" target="_blank"><b>�㰮��-�����Ź�ģ��</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!-- Wofav Button BEGIN --><script language="javascript" id="wofav_stat"></script><script src="http://www.wofav.com/share/wofav_f.js" _menu="0" _b="0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31|32|33|34|35|36|37|38|39|40|41|42|43|44|45|46|47|48|49|50|51|52|72|73|74|" _p="f" _img="no" _u="admin" id="oops"></script><!-- Wofav Button END --></div>
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
<li><a href="http://www.34ways.com" target="_blank"><font color="blue">34ways�Ź�����</font></a></li>
<li><a href="http://www.niaituan.com" target="_blank"><font color="red">�㰮��-�����Ź�ģ��</font></a></li>

</ul>
	</div>
  </div>
  <div class="menu"><a href="/">��ҳ</a> <a href="http://tool.34ways.com/" class="select">վ������</a> 
   <a onmouseover="mouseover(this, 3)" onmouseout="mouseout()" style="cursor:pointer;">��վ��Ϣ��ѯ</a> 
   <a onmouseover="mouseover(this, 4)" onmouseout="mouseout()" style="cursor:pointer;">SEO��Ϣ��ѯ</a> 
   <a onmouseover="mouseover(this, 5)" onmouseout="mouseout()" style="cursor:pointer;">����/IP���ѯ</a> 
   <a onmouseover="mouseover(this, 6)" onmouseout="mouseout()" style="cursor:pointer;">����ת������</a> 
   <a onmouseover="mouseover(this, 7)" onmouseout="mouseout()" style="cursor:pointer;">��������</a>
  </div>
  <!--sub menu-->
  <div id="menu3" class="menu-list" onmouseover="_mouseover()" onmouseout="_mouseout()">
    <ul>
    <li><a href="/alexa" target="_blank">ALEXA������ѯ</a></li>
    <li><a href="/webs/webs.php" target="_blank">վ�����ӷ���</a></li>
    <li><a href="/density.php">�ؼ����ܶȼ��</a></li>
    <li><a href="/meta.php">META��Ϣ���</a></li>
    <li><a href="/pr/outpr.php">PR���ֵ��ѯ</a></li>
    <li><a href="/yuan.php">�鿴��ҳԴ����</a></li>
    </ul>
  </div>
  <div id="menu4" class="menu-list" onmouseover="_mouseover()" onmouseout="_mouseout()">
    <ul>
    <li><a href="/friends/friends.php">�������Ӽ��</a></li>
    <li><a href="/keys/keys.php">�ؼ���������ѯ</a></li>
    <li><a href="/baidu/baidu.php">�ٶȽ�����¼</a></li>
    <li><a href="/google/google.php">Google��¼</a></li>
    <li><a href="/ssyqsl/ssyqsl.php">��վ��¼��ѯ</a></li>
    <li><a href="/ssyqfl/ssyqfl.php">�������Ӳ�ѯ</a></li>
    <li><a href="/pr/pr.php">PR��ѯ</a></li>
    <li><a href="/esearch.php">������ģ��</a></li>
    </ul>
  </div>
  <div id="menu5" class="menu-list" onmouseover="_mouseover()" onmouseout="_mouseout()">
    <ul>
    <li><a href="/dels/dels.php">����ɾ��ʱ��</a></li>
    <li><a href="/ip/">IP��ѯ</a></li>
    <li><a href="/whois/">WHOIS��ѯ</a></li>
    <li><a href="/friendlink/friendlink.php">��������IP��ѯ</a></li>
    </ul>
   </div>
   <div id="menu6" class="menu-list" onmouseover="_mouseover()" onmouseout="_mouseout()">
     <ul>
      <li><a href="/mds.php?mds=md5">MD5����</a></li>
      <li><a href="/js.php">JS����/����</a></li>
      <li><a href="/htmljs.php">HTML/JS��ת</a></li>
      <li><a href="/unicode.php">Unicodeת��</a></li>
      <li><a href="/utf.php">Utf-8����ת��</a></li>
      <li><a href="/htmlubb.php">HTML/UBB��ת</a></li>
      <li><a href="/unix.php">Unixʱ���ת��</a></li>
     </ul>
   </div>
    <div id="menu7" class="menu-list" onmouseover="_mouseover()" onmouseout="_mouseout()">
     <ul>
      <li><a href="/ids.php">���֤�����ѯ</a></li>
      <li><a href="/shouji/index.php">�ֻ����������</a></li>
      <li><a href="/yb/yb.php">�ʱ����Ų�ѯ</a></li>
      <li><a href="/countryym.php">������������</a></li>
     </ul>
   </div>
   