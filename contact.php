<?php
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

if (isset($_POST['Submit'])) {
    // Insert into contact table
    $stmt = $pdo->prepare("INSERT INTO contact (name, mobile, email, message) VALUES (:name, :mobile, :email, :message)");
    $stmt->bindParam(':name', $_POST['txtname']);
    $stmt->bindParam(':mobile', $_POST['txtmobile']);
    $stmt->bindParam(':email', $_POST['txtemail']);
    $stmt->bindParam(':message', $_POST['txtmsg']);
    $stmt->execute();
}

$collect = '';
if (isset($_POST['Submit'])) {
    $collect = 'YOUR MESSAGE WAS SUCCESSFULLY SENT';
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
        .style11 {
            font-size: 18px;
            font-weight: bold;
        }

        .style13 {
            font-size: x-large;
            font-weight: bold;
            color: #000000;
        }

        .style2 {
            color: #FF00FF;
            font-weight: bold;
        }

        .style3 {
            font-size: 18px;
            color: #000000;
        }

        .style4 {
            font-size: 18px;
            color: #FFFFFF;
        }

        .style5 {
            font-size: 12px;
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
            <li><a href="login.php">| Login |</a></li>
            <li><a href="contact.php">| Contact Us |</a></li>
            <li><a href="about.php">| About us |</a></li>
            <li><a href="help.php">| Help |</a></li>
        </ul>
    </div>
    <div id="content">
        <div id="left">
            <p style="text-align:center; color:#FF0000;">
                <strong>
                    <marquee behavior="scroll">THIS REGISTRATION FORM IS FOR ELEGIBLE WHO ARE ABOVE 18 YEARS OF AGE AS FROM 23RD MAY 2018</marquee>
                </strong>
            </p>
        </div>
        <th height="41" colspan="2" scope="col">
            <h1>
                <center></center>
            </h1>
        </th>
    </div>
    <div id="foot">
        <table width="400" border="0" valign="left">
            <tr>
                <th width="400" height="400" scope="col">
                    <table width="400" height="31" border="0" valign="left" style="background:#ABE;">
                        <tr>
                            <th width="607" scope="col">
                                <div align="center">
                                    <span class="style4">CONTACT</span>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">
                                <div align="center" style="background:#FF00OO">
                                    <h1 align="center">
                                        <strong><?php echo $collect; ?></strong>
                                    </h1>
                                </div>&nbsp;
                            </th>
                        </tr>
                    </table>
                    <form action="" method="post" enctype="multipart/form-data" id="form1">
                        <table width="431" border="0" align="center" cellpadding="3" cellspacing="17">
                            <tr>
                                <td width="122" scope="col">
                                    <div align="justify">NAME</div>
                                </td>
                                <td width="246" scope="col">
                                    <div align="justify">
                                        <input type="text" name="txtname" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="justify">MOBILE</div>
                                </td>
                                <td>
                                    <div align="justify">
                                        <input type="text" name="txtmobile" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="justify">E-MAIL</div>
                                </td>
                                <td>
                                    <div align="justify">
                                        <input type="text" name="txtemail" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="justify">MESSAGE</div>
                                </td>
                                <td>
                                    <div align="justify">
                                        <textarea name="txtmsg"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="Submit" value="Send Message" />
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </form>
                </th>
            </tr>
        </table>
        <div id="homeright">
            <h2>reach <span class="green">us</span></h2>
            <div id="sidebar1">
                <h3>147001</h3>
                <p>Voting System,<br />
                    Punjab<br />
                    Patiala,<br />
                    INDIA<br />
                </p>
            </div>
            <div id="sidebar2">
                <h3>Mobile numbers</h3>
                <p>+91-8872844550<br />
                    +91-8872844560<br />
                    +91-9878690020<br />
                    +91-9878690030<br />
                </p>
            </div>
        </div>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div style="background:black;height:150px;width:770px;margin-left:290px;">
        <p style="text-align:center;margin-bottom:30px;font-family:French Script MT;color:#008080;padding:20px;font-size:25px;">Project Developed and Designed<br />By<br />Mohandeep Bawa & Paramjeet Kaur Student of Rayat Bahra Campus, Patiala</p>
    </div>
</body>

</html>