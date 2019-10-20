<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADS Referral program</title>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="indowebsia.com" />
<meta name="Rating" content="General">

<mete name="revisit-after" content="2 days">
<meta name="MSSmartTagsPreventParsing" content="TRUE">
<meta name="Resource-Type" content="document">
<meta name="robots" content="INDEX2, FOLLOW">
<meta name="googlebot" content="index2,follow">
<link rel="stylesheet" type="text/css" href="indowebsia-style.css" />


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28915404-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<style type="text/css">
<!--
.style3 {
	font-size: 10px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
body {
	background-image: url(images/bg.jpg);
	background-repeat: repeat;
}
-->
</style>
</head>

<body>
<table width="998" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="998" height="48" style="background:url(images/list-header.jpg) no-repeat center;">&nbsp;</td>
  </tr>
  <tr>
    <td height="350" valign="top" style="background:url(images/bg-header.jpg) repeat-x;"><div style="width:961px; height:302; margin:auto; padding-top:30px;"><img src="images/h1.jpg" width="961" height="302" border="0" usemap="#Map2" /></div></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#000000"><table width="99%" border="0" align="center">
      <tr>
	  
	<div id='cssmenu'>
		<ul>
			<li><a href="?page_id=pending"><span>Pending</span></a></li>
			<li><a href="?page_id=#"><span>Approve</span></a></li>
			<li class='has-sub'><a href="?page_id=#"><span>Non Approve</span></a>
			</li>
			<li><a href="index.php"><span>Log Out</span></a></li>
		</ul>
	</div>
	
		  </ul></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#e7e4df"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="35" bgcolor="#168B44">&nbsp;</td>
      </tr>
    </table>
      <table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>
		  
<?php
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
$page_id = $_GET['page_id'];
$page_id = str_replace(".php","",$page_id); //menghilangkan ekstensi .html
$file ="$page_id.php";
if (!file_exists($file)) {
@include ("home.php");
} else if ($page_id=="" || $page_id=="home"){ 
@include ("home.php"); //memanggil file yang di-include
} 
else { // jika file tidak ada
@include ("$page_id.php");
}
?></td>

        </tr>
      </table>
      <div style="height:10px;"></div>
      <table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" style="background: url(images/b2.jpg) repeat-y center;">
        <tr>
          <td height="43" colspan="3" class="style1" style="background: url(images/b1.jpg) no-repeat center;"></td>
        </tr>
        <tr >
		  <td valign="top" class="style2" style="padding:20px;"><span class="style1" style="background: url(images/b2.jpg) no-repeat center;"><img src="images/contactus.jpg" width="150" height="28" /></span><br />
          <br />
			PT. Arisma Data Setia
          <br />
			ADS Building 3rd floor
			Jl. Panjang No. 71, Kebon Jeruk
			Jakarta 11510
          <br />
			Phone : (021) 5640707
          <br />
			Fax    : (021) 5606810
          <br />
			http://www.arismadata.com
          <br />
			http://solidworks.arismadata.com
		  <br />
		  <br />
			<a href="?page_id=contact-us"><img src="images/readmore.jpg" width="114" height="33" border="0" /></a>
		</td>
		<td valign="top" class="style2" style="padding:20px 30px 0px;"><span class="style1" style="background: url(images/b2.jpg) no-repeat center;"><img src="images/find.png" width="120" height="30" /></span><br />
        <br />
			&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/SolidWorksADS" ><img src="images/fb.png" width="80" height="20" ></img></a>
          <br />
		  <br />
			&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/SolidWorksADS" ><img src="images/twit.png" width="75" height="20" ></img></a>
          <br />
		  <br />
			&nbsp;&nbsp;&nbsp;<a href="http://solidworks.arismadata.com/blog/" ><img src="images/blog.png" width="80" height="20" ></img></a>
          <br />
		</td>
		</tr>
        <tr>
          <td colspan="3"><img src="images/b3.jpg" width="965" height="22" border="0" /></td>
        </tr>
      </table>
	  </td>
  </tr>
  <tr>
    <td height="30" valign="middle" bgcolor="#FFFFFF" class="white-link2" style="background: url(images/footer.jpg) repeat-x;"><div align="center" style="letter-spacing:3px;"><br />
        <br />
    Copyright &copy; 2013.  Arisma Data Setia PT</div></td>
  </tr>
</table>

<map name="Map2" id="Map2"><area shape="rect" coords="41,235,187,273" href="?page_id=tentang-program" />
</map></body>
</html>
