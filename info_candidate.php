<?php
session_start();
if (!isset($_SESSION['txtusername'])) {
    header("location:login.php");
    exit();
}

$host = "localhost"; // Host name
$username = "root"; // Mysql username
$password = ""; // Mysql password
$db_name = "evoting"; // Database name

try {
    // Connect to server and select database using PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$names = $pdo->query("SELECT cand_name, party, position FROM pm_votes")->fetchAll(PDO::FETCH_ASSOC);
$names2 = $pdo->query("SELECT cand_name, party, position FROM cm_votes")->fetchAll(PDO::FETCH_ASSOC);
$names3 = $pdo->query("SELECT cand_name, party, position FROM mla_votes")->fetchAll(PDO::FETCH_ASSOC);
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
            <li><a href="messages.php">| Messages</a></li>
            <li><a href="contact.php">| Contact Us |</a></li>
            <li><a href="about.php">| About Us |</a></li>
            <li><a href="help.php">| Help |</a></li>
        </ul>
    </div>
    <div id="content">
        <div id="left">
            <p style="text-align:center; color:#FF0000;">
                <strong>
                    <marquee behavior="scroll">THIS E-VOTING SYSTEM IS FOR ELEGIBLE WHO ARE ABOVE 18 YEARS OF AGE AS FROM 23RD JUNE 2012</marquee>
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
        <p class="style1">CANDIDATE INFORMATION</p>
        <table width="743" height="93" border="1" align="center" cellpadding="7" cellspacing="0" bgcolor="#999999">
            <tr>
                <th width="263" height="56" scope="col">CANDIDATE NAME</th>
                <th width="215" scope="col">PARTY</th>
                <th width="215" scope="col">POSITION</th>
            </tr>
            <?php foreach ($names as $index => $col_val) {
                $format = ($index % 2 == 0) ? "background-color:#cccccc" : "background-color:#00FF66";
            ?>
            <tr>
                <td style="<?php echo $format; ?>"><?php echo $col_val['cand_name'] ?></td>
                <td style="<?php echo $format; ?>"><?php echo $col_val['party'] ?></td>
                <td style="<?php echo $format; ?>"><?php echo $col_val['position'] ?></td>
            </tr>
            <?php } ?>
            <?php foreach ($names2 as $index => $col_val) {
                $format = ($index % 2 == 0) ? "background-color:#cccccc" : "background-color:#00FF66";
            ?>
            <tr>
                <td style="<?php echo $format; ?>"><?php echo $col_val['cand_name'] ?></td>
                <td style="<?php echo $format; ?>"><?php echo $col_val['party'] ?></td>
                <td style="<?php echo $format; ?>"><?php echo $col_val['position'] ?></td>
            </tr>
            <?php } ?>
            <?php foreach ($names3 as $index => $col_val) {
                $format = ($index % 2 == 0) ? "background-color:#cccccc" : "background-color:#00FF66";
            ?>
            <tr>
                <td style="<?php echo $format; ?>"><?php echo $col_val['cand_name'] ?></td>
                <td style="<?php echo $format; ?>"><?php echo $col_val['party'] ?></td>
                <td style="<?php echo $format; ?>"><?php echo $col_val['position'] ?></td>
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