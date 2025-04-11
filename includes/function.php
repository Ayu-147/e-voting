<?php

function query($sql, $pdo)
{
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt;
    } catch (PDOException $e) {
        echo 'An error occurred: ' . $e->getMessage();
        exit;
    }
}

function login($log, $pdo)
{
    if (empty($log['txtusername'])) return 'Username is empty, Kindly insert your Username';
    if (empty($log['txtpassword'])) return 'Election ID is empty, Kindly insert your password';
    
    $uname = $log['txtusername'];
    $pass = $log['txtpassword'];
    
    $stmt = query("SELECT username, password FROM admin WHERE username = :username AND password = :password", $pdo);
    $stmt->bindParam(':username', $uname);
    $stmt->bindParam(':password', $pass);
    $stmt->execute();
    
    if ($stmt->rowCount() == 1) {
        session_start();
        $_SESSION["txtusername"] = $uname;
        $_SESSION["txtpassword"] = $pass;
        header("location: admin_home.php");
        return 'You have successfully logged in';
    } else {
        return 'Invalid Login-in';
    }
}

function get_prime_vote($pdo)
{
    $stmt = query('SELECT cand_name, party, position FROM pm_votes', $pdo);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_cm_vote($pdo)
{
    $stmt = query('SELECT cand_name, party, position FROM cm_votes', $pdo);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_mla_vote($pdo)
{
    $stmt = query('SELECT cand_name, party, position FROM mla_votes', $pdo);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_msg($pdo)
{
    $stmt = query('SELECT name, mobile, email, message FROM contact', $pdo);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>