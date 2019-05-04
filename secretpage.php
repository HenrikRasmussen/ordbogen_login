<?php

session_start();

// Tjekker om der er logget ind, hvis der er forbliver den logget ind - ellers sendes tilbage til index.php
if (!$_SESSION['loggedin']) {
    header('LOCATION: index.php');
    die();
}
require_once('top.php'); // DOCTYPE -> bodytag

?>

<div id="main">
    <div id="secret" class="center">
        <h1 class="center"><?= 'Velkommen til siden'; ?></h1>
        <div class="center">
            <a href="logout.php"><button id="logoutbutton" >LOG UD</button></a>
        </div>
    </div>
</div>
<?php

require_once('bottom.php'); // /bodytag og /html

?>