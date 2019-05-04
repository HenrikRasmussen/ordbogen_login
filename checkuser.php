<?php
session_start();

$_SESSION['email'] = addslashes($_POST['email']);
$_SESSION['password'] = addslashes($_POST['password']);

include('db.php');

if(!$con){
    echo 'no connection '.mysqli_connect_error();
}

$sql = 'SELECT * FROM users WHERE email ="'.$_SESSION['email'].'"';

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$num = mysqli_num_rows($result);


if (($num == 1) && ($row['password'] == $_SESSION['password'])){
    $_SESSION['loggedin'] = true;
    header('LOCATION: secretpage.php');
}else{
    if($num != 1){
        $_SESSION['wronguser'] = 'Forkert brugernavn!';
        unset($_SESSION['email']);
    }else{
        if($row['password'] != $_SESSION['password']){
            $_SESSION['wrongpassword'] = 'Forkert password! Prøv igen';    
    }
    
    }
    header('LOCATION: index.php?button=login');
}
