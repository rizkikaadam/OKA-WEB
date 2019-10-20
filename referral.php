<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="indowebsia.com" />
<meta name="Rating" content="General">

<mete name="revisit-after" content="2 days">
<meta name="MSSmartTagsPreventParsing" content="TRUE">
<meta name="Resource-Type" content="document">
<meta name="robots" content="INDEX, FOLLOW">
<meta name="googlebot" content="index,follow">
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
  function tambah(){
  var nilai1=document.getElementById("n1").value;
  var nilai2=document.getElementById("n2").value;
  var nilai3=document.getElementById("n3").value;
  var nilai4=document.getElementById("n4").value;
  var nilai5=document.getElementById("n5").value;
  var nilai6=document.getElementById("n6").value;
  var nilai7=document.getElementById("n7").value;
  var tambah=parseInt(nilai1)+parseInt(nilai2)+parseInt(nilai3)+parseInt(nilai4)+parseInt(nilai5)+parseInt(nilai6)+parseInt(nilai7);
  document.getElementById("hasil").value=parseInt(tambah);
  }
 
	
</script>
<style type="text/css">
<!--
.c12 {
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #333333;
}
-->
</style>
</head>

<body>
<form method=post action="?page_id=personal_data">
<table align="center" width="960" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td style="background: url(images/l2.jpg) repeat-y center;"><div align="center"> <br />
      <table border="0">
        <tr>
          <td>
              <h1>Referral Form </h1>
                
            
			</tr></td><tr>
			<a id="a"><td>Reference Company *</td></a><td><input type=text name=reference_company size=30></td><td><input type=submit name=submit value="Cek"></td>
			</tr>
			<tr>
			<td>Reference Name *</td><td><input type=text name=reference_name size=30></td>
			</tr>
			<tr>
			<td>Reference Phone *</td><td><input type=text name=reference_phone size=13></td>
			</tr>
			<tr>
			<td>Reference E-Mail *</td><td><input type=text name=reference_email size=30></td>
			</tr>
			<tr>
			<td>Position</td><td><input type=text name=position size=30></td>
			</tr>
			<tr>
			<td>Location</td><td><input type=text name=location size=30></td>
			</tr>
			<tr>
			<td>% Probability Close</td>
			<td>
			<select name="Probability">
			<option value="<25%"><25%</option>
			<option value="25%-50%">25%-50&</option>
			<option value="50%-75%">50%-75%</option>
			<option value="75%-100%">75%-100%</option>
			</select>
			</tr></td>
			<tr><td>Month Of Close</td>
			<td><input type=date name=month></td>
			</tr>
			<tr><td>Total Seats</td>
			<td><input type=text name=total_seats id="hasil" disabled size=5 value=0 ></td>
			</tr>
			</tr>
				<tr>
				<td>
	 <a href="#popup">Product Detail</a>
		
		<div id="popup">
			<div class="window">
				<a href="#" class="close-button" title="Close">X</a>
				<table>
				<td></td><td>Product Detail</td>
			</tr>
			<tr>
			<td></td><td>- SolidWorks Std           </td><td><input type=text name=SW1 id="n1" onkeyup="tambah()" value=0 size=5></td>
			</tr>
			<tr>
			<td></td><td>- SolidWorks Profesional   </td><td><input type=text name=SW2 id="n2" onkeyup="tambah()" value=0  size=5></td>
			</tr>
			<tr>
			<td></td><td>- SolidWorks Premium </td><td><input type=text name=SW3 id="n3" onkeyup="tambah()" value=0 size=5></td>
			</tr>
			<tr>
			<td></td><td>- SolidWorks Plastic </td><td><input type=text name=SW4 id="n4" onkeyup="tambah()" value=0 size=5></td>
			</tr>
			<tr>
			<td></td><td>- SolidWorks EPDM </td><td><input type=text name=SW5 id="n5" onkeyup="tambah()" value=0 size=5></td>
			</tr>
			<tr>
			<td></td><td>- SolidWorks Composer </td><td><input type=text name=SW6 id="n6" onkeyup="tambah()" value=0 size=5></td>
			</tr>
			<tr>
			<td></td><td>- SolidWorks Electrical </td><td><input type=text name=SW7 id="n7" onkeyup="tambah()" value=0 size=5></td>
			</tr>
				<td>
				<a href="#a"><input type="button" name="OK" value="OK" ></a>
				</td>
                <td>
				<input type=reset name=reset value="Cancel">
				</td>
				</tr>
				</table>
			</div>
		</div>
		</td>
		</tr>
        <tr>
        <td>
				<input type=submit name=Submit2 value="Save">
				</td>
                </tr>
</table>
      <p><a href="#"><br />
        </a></p>
    </div></td>
  </tr>
  <tr>
    <td><a href="#"><img src="images/l3.jpg" width="960" height="15" border="0" /></a></td>
  </tr>
</table>
</form>
</body>
</html>
