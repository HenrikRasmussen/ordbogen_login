<?php
session_start();
if(!$_SESSION['loggedin']){
    header('LOCATION: index.php');
    die();
}
include('top.php'); // DOCTYPE -> bodytag
?>

<div id="main">
    <div id="secret" class="center">
        <h1 class="center"><?php echo addslashes('Velkommen til siden'); ?></h1>
        <div class="center">
            <a href="logout.php"><button id="logoutbutton" >LOG UD</button></a>
        </div>
    </div>
</div>
<?php
include('bottom.php'); // /bodytag og /html
?>
