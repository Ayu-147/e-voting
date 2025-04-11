<?php

$connect = new PDO("mysql:host=localhost;dbname=evoting", DBUSER, DBPASS);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function query($que, $pdo)
{
    try {
        $stmt = $pdo->prepare($que);
        $stmt->execute();
        return $stmt;
    } catch (PDOException $e) {
        echo '<h4>An error occurred: ' . $e->getMessage() . '</h4>';
        exit;
    }
}

function insert($data, $pdo)
{
    // Validation checks
    if (empty($data['txtfirstname'])) return 'Please enter your Firstname';
    if (empty($data['txtlastname'])) return 'Please choose your Lastname';
    if (empty($data['txtsex'])) return 'Please choose your Sex';
    if (empty($data['txtaddress'])) return 'Please enter your Address';
    if (empty($data['txtcity'])) return 'Please enter your city';
    if (empty($data['txtstate'])) return 'Please enter your state';
    if (empty($data['txtcountry'])) return 'Please enter your country';
    if (empty($data['txtemail'])) return 'Please enter E-mail';
    if (empty($data['txtphone'])) return 'Please enter your Phone';
    if (empty($data['txtage'])) return 'Please enter your Age';
    if (empty($data['txtelectiondist'])) return 'Please choose your election district';
    if (empty($data['txtoccupation'])) return 'Please choose your occupation';
    if (empty($data['txtusername'])) return 'Please choose a username';
    if (empty($data['txtelectionid'])) return 'Please choose an election id';

    // Check if username already exists
    $fname = $data['txtusername'];
    $stmt = query("SELECT username FROM voter WHERE username = :username", $pdo);
    $stmt->bindParam(':username', $fname);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) return 'USERNAME ALREADY EXISTS, CHOOSE ANOTHER USERNAME';

    $age = $data['txtage'];
    if ($age < 18) return 'ELIGIBLE WHO ARE ABOVE 18 YEARS';

    $mobile = $data['txtphone'];
    if (strlen($mobile) > 10) return 'Enter maximum 10 numbers in phone field';

    // Insert into database
    $stmt = $pdo->prepare("INSERT INTO voter (firstname, lastname, sex, age, address, city, state, country, phone, email, election_district, occupation, username, election_id) VALUES (:firstname, :lastname, :sex, :age, :address, :city, :state, :country, :phone, :email, :election_district, :occupation, :username, :election_id)");
    
    $stmt->bindParam(':firstname', $data['txtfirstname']);
    $stmt->bindParam(':lastname', $data['txtlastname']);
    $stmt->bindParam(':sex', $data['txtsex']);
    $stmt->bindParam(':age', $data['txtage']);
    $stmt->bindParam(':address', $data['txtaddress']);
    $stmt->bindParam(':city', $data['txtcity']);
    $stmt->bindParam(':state', $data['txtstate']);
    $stmt->bindParam(':country', $data['txtcountry']);
    $stmt->bindParam(':phone', $data['txtphone']);
    $stmt->bindParam(':email', $data['txtemail']);
    $stmt->bindParam(':election_district', $data['txtelectiondist']);
    $stmt->bindParam(':occupation', $data['txtoccupation']);
    $stmt->bindParam(':username', $data['txtusername']);
    $stmt->bindParam(':election_id', $data['txtelectionid']);
    
    if ($stmt->execute()) {
        return 'YOUR REGISTRATION WAS SUCCESSFUL';
    } else {
        return 'YOUR REGISTRATION WAS NOT SUCCESSFUL';
    }
}

function msg($data, $pdo)
{
    if (empty($data['txtname'])) return 'Please enter your Name';
    if (empty($data['txtemail'])) return 'Please enter E-mail';
    if (empty($data['txtmobile'])) return 'Please enter your Mobile-No';
    if (empty($data['txtmsg'])) return 'Please enter your Message';

    $stmt = $pdo->prepare("INSERT INTO contact (name, mobile, email, message) VALUES (:name, :mobile, :email, :message)");
    $stmt->bindParam(':name', $data['txtname']);
    $stmt->bindParam(':mobile', $data['txtmobile']);
    $stmt->bindParam(':email', $data['txtemail']);
    $stmt->bindParam(':message', $data['txtmsg']);
    
    if ($stmt->execute()) {
        return 'YOUR MESSAGE WAS SUCCESSFULLY SENT';
    } else {
        return 'YOUR MESSAGE WAS NOT SENT';
    }
}

function login($log, $pdo)
{
    if (empty($log['txtusername'])) return 'Username is empty, Kindly insert your Username';
    if (empty($log['txtelectionid'])) return 'Election ID is empty, Kindly insert your Election ID';

    $uname = $log['txtusername'];
    $pass = $log['txtelectionid'];
    
    $stmt = query("SELECT username, election_id FROM voter WHERE username = :username AND election_id = :election_id", $pdo);
    $stmt->bindParam(':username', $uname);
    $stmt->bindParam(':election_id', $pass);
    $stmt->execute();
    
    if ($stmt->rowCount() == 1) {
        session_start();
        $_SESSION["txtusername"] = $uname;
        $_SESSION["txtelectionid"] = $pass;
        header("location: choose_election.php");
        return 'You have successfully logged in';
    } else {
        return 'Invalid Login-in';
    }
}

function get_prime_vote($pdo)
{
    $stmt = query('SELECT cand_name, party, pm_count FROM pm_votes', $pdo);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_cm_vote($pdo)
{
    $stmt = query('SELECT cand_name, party, cm_count FROM cm_votes', $pdo);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_mla_vote($pdo)
{
    $stmt = query('SELECT cand_name, party, mla_count FROM mla_votes', $pdo);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>