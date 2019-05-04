<?php

session_start();

$_SESSION['name'] = addslashes($_POST['name']);
$_SESSION['address'] = addslashes($_POST['address']);
$_SESSION['postalcode'] = addslashes($_POST['postalcode']);
$_SESSION['city'] = addslashes($_POST['city']);
$_SESSION['email'] = addslashes($_POST['email']);
$_SESSION['password'] = addslashes($_POST['password']);

require_once('db.php');

if (!$con) {
    echo 'no connection '.mysqli_connect_error();
}

$sql = 'SELECT * FROM users WHERE email ="'.$_SESSION['email'].'"';

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$num = mysqli_num_rows($result);


if ($num == 1) {
    $_SESSION['userexist'] = 'User already exist!';
    header('LOCATION: index.php?button=create');
} else {
        echo $sql = "INSERT INTO users (name, address, postalcode, city, email, password) VALUES (
        '".$_SESSION['name']."',
        '".$_SESSION['address']."',
        '".$_SESSION['postalcode']."',
        '".$_SESSION['city']."',
        '".$_SESSION['email']."',
        '".$_SESSION['password']."'
        )";

        $result = mysqli_query($con, $sql);
        header('LOCATION: index.php?button=login');
    }
  
// EOF
