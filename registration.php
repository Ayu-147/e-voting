<?php
include('includes/config.php');
$collect = '';
if ($_POST) {
    $collect = insert($_POST);
}

try {
    $pdo = new PDO("mysql:host=localhost;dbname=evoting", DBUSER, DBPASS);
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
            <li><a href="login.php">| Voting |</a></li>
            <li><a href="result.php">| Result |</a></li>
            <li><a href="login.php">| Login |</a></li>
            <li><a href="contact.php">| Contact Us |</a></li>
            <li><a href="about.php">| About Us |</a></li>
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
    <div id="footer">
        <table width="651" border="0" align="center">
            <tr>
                <th width="645" height="783" scope="col">
                    <table width="667" height="31" border="0" align="center" style="background:#ABE;">
                        <tr>
                            <th width="607" scope="col">
                                <div align="center">
                                    <span class="style4">REGISTRATION FORM</span>
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
                                    <div align="justify">FIRSTNAME</div>
                                </td>
                                <td width="246" scope="col">
                                    <div align="justify">
                                        <input type="text" name="txtfirstname" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="justify">LASTNAME</div>
                                </td>
                                <td>
                                    <div align="justify">
                                        <input type="text" name="txtlastname" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="justify">SEX</div>
                                </td>
                                <td>
                                    <div align="justify">
                                        <label>
                                            <select name="txtsex">
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                            </select>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="justify">AGE</div>
                                </td>
                                <td>
                                    <div align="justify">
                                        <input type="text" name="txtage" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="justify">ADDRESS</div>
                                </td>
                                <td>
                                    <div align="justify">
                                        <input type="text" name="txtaddress" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="justify">CITY</div>
                                </td>
                                <td>
                                    <div align="justify">
                                        <input type="text" name="txtcity" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="justify">STATE</div>
                                </td>
                                <td>
                                    <div align="justify">
                                        <input type="text" name="txtstate" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="justify">COUNTRY</div>
                                </td>
                                <td>
                                    <div align="justify">
                                        <input type="text" name="txtcountry" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="justify">PHONE</div>
                                </td>
                                <td>
                                    <div align="justify">
                                        <input type="text" name="txtphone" />
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
                                    <div align="justify">PREFERED ELECTION DISTRICT</div>
                                </td>
                                <td>
                                    <div align="justify">
                                        <input type="text" name="txtelectiondist" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>OCCUPATION</td>
                                <td>
                                    <div align="justify">
                                        <input type="text" name="txtoccupation" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>USERNAME</td>
                                <td><input type="text" name="txtusername" /></td>
                            </tr>
                            <tr>
                                <td>VOTER'S ID</td>
                                <td><input type="text" name="txtelectionid" /></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="Submit" value="Registered" />
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </form>
                </th>
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