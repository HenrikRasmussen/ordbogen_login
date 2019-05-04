<?php 
session_start(); // Starter sessions
include('top.php'); // DOCTYPE -> bodytag
?>
<div id="main">
    <nav>
        <div id="logincreate" class="center">
           <a href="?button=login"><button class="left">LOGIN</button></a>
           <a href="?button=create"><button class="right">OPRET BRUGER</button></a>
        </div>
    <nav>

    <?php
    
    if(isset($_GET['button'])){
        if($_GET['button'] == 'login'){ 
            include('login.php');
        }else if($_GET['button'] == 'create'){
            include('createuser.php');
        }
    }
    ?>

</div>
<?php
include('bottom.php'); // /bodytag og /html
?>
