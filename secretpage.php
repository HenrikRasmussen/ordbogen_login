<?php

session_start();

// Tjekker om der er logget ind, hvis der er forbliver den logget ind - ellers sendes tilbage til index.php
if (!$_SESSION['loggedin']) {
    header('LOCATION: index.php');
    die();
}
require_once('top.php'); // DOCTYPE -> bodytag

require_once('db.php');

$sql = 'SELECT * FROM users WHERE email = "'.$_SESSION['email'].'"';
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

?>

<div id="main">
    <div id="secret" class="center">
        <h1 class="center">Velkommen</h1>
        <h2 class="center"><?php echo $row['name']; ?></h2>
        <div class="center">
            <a href="logout.php"><button id="logoutbutton" >LOG UD</button></a>
        </div>
    </div>
</div>
<?php

require_once('bottom.php'); // /bodytag og /html

?>