<?php
session_start();
if (!isset($_SESSION['txtusername'])) {
    header("location:login.php");
    exit();
}

include('includes/conn.php');

try {
    $pdo = new PDO("mysql:host=localhost;dbname=evoting", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>|| E-VOTING ||</title>
    <link href="default.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .style1 {
            color: #000000;
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
            <li><a href="info_candidate.php">| Candidate Info |</a></li>
            <li><a href="contact.php">| Contact Us |</a></li>
            <li><a href="about.php">| About Us |</a></li>
            <li><a href="help.php">| Help |</a></li>
        </ul>
    </div>
    <div id="content">
        <div id="left">
            <p style="text-align:center; color:#FF0000;">
                <strong>
                    <marquee behavior="scroll">THIS E-VOTING SYSTEM IS FOR ELIGIBLE WHO ARE ABOVE 18 YEARS OF AGE AS FROM 23RD JUNE 2012</marquee>
                </strong>
            </p>
        </div>
        <th height="41" colspan="2" scope="col">
            <h1>
                <center></center>
            </h1>
        </th>
    </div>
    <div id="footer">
        <p class="style1"><a href="logout.php">LOGOUT</a></p>
        <p class="style1">MESSAGES FROM USERS</p>
        <table width="743" height="93" border="1" align="center" cellpadding="7" cellspacing="0" bgcolor="#999999">
            <tr>
                <th width="263" height="56" scope="col">NAME</th>
                <th width="215" scope="col">MOBILE-NO</th>
                <th width="215" scope="col">E-MAIL</th>
                <th width="215" scope="col">MESSAGE</th>
            </tr>
            <?php 
            $stmt = $pdo->query("SELECT name, mobile, email, message FROM contact");
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($row as $index => $col_val) {
                $format = ($index % 2 == 0) ? "background-color:#cccccc" : "background-color:#00FF66";
            ?>
            <tr>
                <td style="<?php echo $format; ?>"><?php echo $col_val['name'] ?></td>
                <td style="<?php echo $format; ?>"><?php echo $col_val['mobile']; ?></td>
                <td style="<?php echo $format; ?>"><?php echo $col_val['email']; ?></td>
                <td style="<?php echo $format; ?>"><?php echo $col_val['message']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div style="background:black;height:150px;width:770px;margin-left:290px;">
        <p style="text-align:center;margin-bottom:30px;font-family:French Script MT;color:#008080;padding:20px;font-size:25px;">Project Developed and Designed<br />By<br />Mohandeep Bawa & Paramjeet Kaur Student of Rayat Bahra Campus, Patiala</p>
    </div>
</body>

</html>