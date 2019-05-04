<?php

session_start(); // Starter sessions
require_once('top.php'); // DOCTYPE -> bodytag

?>
<div id="main">
    <nav>
        <div id="logincreate" class="center">
           <a href="?button=login"><button class="left">LOGIN</button></a>
           <a href="?button=create"><button class="right">OPRET BRUGER</button></a>
        </div>
    </nav>

    <?php
    
    if (isset($_GET['button'])) {
        if ($_GET['button'] == 'login') { 
            require_once('login.php');
        } elseif ($_GET['button'] == 'create') {
            require_once('createuser.php');
        }
    }
        
    ?>

</div>

<?php
        
require_once('bottom.php'); // /bodytag og /html
        
?>