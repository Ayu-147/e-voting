<?php 
include('includes/conn.php');
$collect='';
if($_POST){
$collect = login($_POST);
if($collect == 'you have successfully login'){
header("location:admin_home.php");
exit;}
}
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| E-VOTING ||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
	font-size: 16px;
}
.style7 {font-size: 16px; font-weight: bold; }
.style8 {color: #000000; font-weight: bold; font-size: 18px; }
.style3 {	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div id="header">
  <table width="200" align="center">
    <tr>
      <img src="images/logo.png" id="logo"/>
<img src="images/banner.png" id="banner" /></tr>
  </table>
</div>
<div id="menu">
	<ul>
		<li> <a href="index.php"> |  Home  |</a></li>
		
		<li>  <a href="result.php">|  Result  |</a></li>
		<li>
		  <a href="login.php" >|  Admin Login  |</a></li>
		<li>
		  <a href="contact.php">|  Contact Us  |</a></li>
	</ul>
</div>
<div id="content">
	<div id="left">
    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">
    THIS E-VOTING SYSTEMIS FOR ELEGIBLE WHO ARE ABOVE 18 YEARS OF AGE AS FROM 23RD MAY 2018 
    </marquee></strong></p>
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
</div>
</div>
<div id="footer">
  <p class="style8">ADMIN LOGIN</p>
	<table width="371" height="177" border="1" align="center" bgcolor="#99CCFF">
      <tr>
        <td width="361" height="32"><table width="200" align="center" bgcolor="#CCCCCC">
            <tr>
              <td height="29"><div align="center"><span class="style3">ADMIN LOGIN</span></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="130"><form id="form1" method="post" action="">
            <table width="313" align="center">
              <tr>
                <td width="96"><span class="style3">USERNAME</span></td>
                <td width="205"><label>
                  <input type="text" name="txtusername" />
                </label></td>
              </tr>
              <tr>
                <td height="30"><span class="style3">PASSWORD</span></td>
                <td><input type="password" name="txtpassword" /></td>
              </tr>
              <tr>
                <td height="41"><label>
                  <input type="submit" name="Submit" value="Submit" />
                </label></td>
                <td><input type="reset" name="Submit2" value="Reset" /></td>
              </tr>
            </table>
        </form></td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
	<p>&nbsp;</p>
	<div style="background:black;height:150px;width:770px;">
	<p style="text-align:center;margin-bottom:30px;font-family:French Script MT;color:#008080;padding:20px;font-size:25px;">Project Developed and Designed<br/>By<br/>Mohandeep Bawa & Paramjeet Kaur Student of Rayat Bahra Campus, Patiala</p>
</div>
</div>
	</body>
</html>