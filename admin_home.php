<?php
session_start();
if (!isset($_SESSION['txtusername'])) {
    header("location:admin_login.php");
    exit();
}

if (isset($_POST['Submit'])) {
    header("location:info_candidate.php");
    exit();
}
if (isset($_POST['Submit2'])) {
    header("location:messages.php");
    exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>|| CHOOSE ELECTION SYSTEM ||</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="default.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .style2 {
            color: #000000;
            font-size: 16px;
        }

        .style8 {
            color: #0000FF;
            font-weight: bold;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div id="header">
        <table width="200" align="center">
            <tr>
                <img src="images/logo.png" id="logo" />
                <img src="images/banner.png" id="banner" />
            </tr>
        </table>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.php"> | Home |</a></li>
            <li><a href="result.php">| Result |</a></li>
            <li><a href="admin_login.php">| Admin Login |</a></li>
            <li><a href="contact.php">| Contact Us |</a></li>
            <li><a href="about.php">| About Us |</a></li>
            <li><a href="help.php">| Help |</a></li>
        </ul>
    </div>
    <div id="content">
        <div id="left">
            <p align="right" style="text-align:center; color:#60B7DE;">
                <a href="logout.php">LOGOUT</a>
            </p>
        </div>
        <th height="41" colspan="2" scope="col">
            <h1>
                <center>
                    <span class="style2">Choose from below options</span>
                </center>
            </h1>
        </th>
        <p>&nbsp;</p>
    </div>
    <div id="footer">
        <table width="463" align="center">
            <tr>
                <td width="455" height="61">
                    <form id="form1" method="post" action="">
                        <table width="459" height="103" align="center">
                            <tr>
                                <td width="405" height="55">
                                    <div align="center" class="style8">CANDIDATE INFORMATION</div>
                                </td>
                                <td width="142">
                                    <label>
                                        <div align="center">
                                            <input type="submit" name="Submit" value="CANDIDATE" />
                                        </div>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td height="40">
                                    <div align="center" class="style8">MESSAGES </div>
                                </td>
                                <td>
                                    <div align="center">
                                        <input type="submit" name="Submit2" value="MESSAGE" />
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div style="background:black;height:150px;width:770px;">
            <p style="text-align:center;margin-bottom:30px;font-family:French Script MT;color:#008080;padding:20px;font-size:25px;">Project Developed and Designed<br />By<br />Mohandeep Bawa & Paramjeet Kaur Student of Rayat Bahra Campus, Patiala</p>
        </div>
    </div>
</body>

</html>