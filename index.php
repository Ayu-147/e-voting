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

if (isset($_POST['submit'])) {
    // Insert into voter table
    $stmt = $pdo->prepare("INSERT INTO voter (firstname, lastname, sex, age, address, city, state, country, phone, email, election_district, occupation, username, election_id) VALUES (:firstname, :lastname, :sex, :age, :address, :city, :state, :country, :phone, :email, :election_district, :occupation, :username, :election_id)");
    $stmt->bindParam(':firstname', $_POST['txtfirstname']);
    $stmt->bindParam(':lastname', $_POST['txtlastname']);
    $stmt->bindParam(':sex', $_POST['txtsex']);
    $stmt->bindParam(':age', $_POST['txtage']);
    $stmt->bindParam(':address', $_POST['txtaddress']);
    $stmt->bindParam(':city', $_POST['txtcity']);
    $stmt->bindParam(':state', $_POST['txtstate']);
    $stmt->bindParam(':country', $_POST['txtcountry']);
    $stmt->bindParam(':phone', $_POST['txtphone']);
    $stmt->bindParam(':email', $_POST['txtemail']);
    $stmt->bindParam(':election_district', $_POST['txtelectiondist']);
    $stmt->bindParam(':occupation', $_POST['txtoccupation']);
    $stmt->bindParam(':username', $_POST['txtusername']);
    $stmt->bindParam(':election_id', $_POST['txtelectionid']);
    $stmt -> execute();
}

$collect = '';
if (isset($_POST['submit'])) {
    $collect = 'YOUR REGISTRATION WAS SUCCESSFUL';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>|| E-VOTING ||</title>
    <link href="css/sheet1.css" rel="stylesheet" />
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        #nav {
            background-color: #333;
            padding: 10px 0;
        }

        #nav img {
            height: 50px;
            margin: 0 20px;
        }

        /* Content Styles */
        content {
            display: block;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        /* Button Styles */
        #button, #button1 {
            background-color: #5cb85c; /* Green */
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        #button:hover, #button1:hover {
            background-color: #4cae4c; /* Darker green */
        }

        /* Image Slider Styles */
        .slider img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        /* Footer Styles */
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* Responsive Styles */
        @media (max-width: 600px) {
            #nav img {
                height: 40px;
            }

            #button, #button1 {
                width: 100%;
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    <div id="nav">
        <table width="200" align="center">
            <tr>
                <img src="images/logo.png" id="logo" />
                <img src="images/banner.png" id="banner" />
            </tr>
        </table>
    </div>
    <content>
        <a href="index.php"><img src="images/homepic.png" id="home" /><br /><br /></a>
        <a href="registration.php"><img src="images/voter_reg.png" id="reg" /><br /><br /></a>
        <a href="result.php"><img src="images/votingpoll.png" id="result" /><br /><br /></a>
        <a href="parties.html"><img src="images/parties_info.png" id="parties" /><br /><br /></a>
        <a href="admin_login.php"><img src="images/admin.png" id="admin" /><br /><br /></a>
        <a href="contact.php"><img src="images/contactus.png" id="news" /><br /><br /></a>
        <a href="about.php"><img src="images/aboutus.png" id="about" /><br /><br /></a>
        <a href="help.php"><img src="images/help.png" id="help" /></a>
        <div class="image">
            <div class="info">Information about E-Voting</div>
            <div class="pic">
                <div class="next"> >>> </div>
                <div class="prev"> <<< </div>
                <div class="images">
                    <img src="images/vote1.jpg" height="100%" width="100%" />
                    <img src="images/vote2.jpg" height="100%" width="100%" />
                    <img src="images/vote3.jpg" height="100%" width="100%" />
                    <img src="images/election.jpg" height="100%" width="100%" />
                </div>
            </div>
            <div class="detail">
                <p class="detail1">E-voting stands for electronic voting is a term encompassing several different
                    types of voting embracing both electronic means of costing a vote and electronic means of
                    counting votes. Our application tries to enable everybody to use it in an easy way and
                    transparency, this will avoid disorder of traditional voting.</p>
            </div>
        </div>
        <div class="mainform">
            <form id="form1" method="post" action="">
                <h1>Login Form</h1><br /><br />
                &nbsp &nbsp Username &nbsp &nbsp<input type="text" name="txtusername" id="myname" class="field" />
                <br /><br />
                &nbsp &nbsp Password &nbsp &nbsp<input type="text" name="txtelectionid" id="myname"
                    class="field" /><br /><br />
                <input type="submit" value="Login" name="submit" id="button" />
                <input type="reset" value="Reset" name="submit2" id="button1" />
            </form>
        </div>
        <div class="slider">
            <img src="images/votingg.jpg" height="100%" width="100%" />
            <img src="images/election.jpg" height="100%" width="100%" />
            <img src="images/elections.jpg" height="100%" width="100%" />
        </div>
    </content>
    <footer>
        <p class="footer"><b>Project Developed and Designed<br />By<br />Mohandeep Bawa & Paramjeet Kaur Student of
                Rayat Bahra Campus, Patiala</b></p>
    </footer>
</body>

</html>
<script src="js/jquery.js"></script>
<script src="js/slider.js"></script>
<script>
    $(document).ready(function() {
        $('.images').cycle({
            fx: 'cover',
            sync: false,
            delay: -1000,
            next: '.next',
            prev: '.prev'
        });
        $('.slider').cycle({
            fx: 'curtainX',
            sync: false,
            delay: -1000
        });
    });
</script>