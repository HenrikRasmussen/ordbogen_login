<div id="form" class="center">

<?php 
    
if (isset($_SESSION['userexist'])) {
    echo "<h1>".$_SESSION['userexist']."</h1>";
    unset($_SESSION['userexist']);
} else { 
    
?>

    <form action="createuseraction.php" method="post">
        <div class="left col2">
            <label for="" >Navn:</label>
            <input type="text" name="name" placeholder="Indtast Navn" required>
        </div>
        <div class="right col2">
            <label for="" >Adresse:</label>
            <input type="text" name="address" placeholder="Indtast Adresse" required>
        </div>
        <div class="left col2">
            <label for="" >Postnummer:</label>
            <input type="text" name="postalcode" placeholder="Indtast Postnummer" required>
        </div>
        <div class="right col2">
            <label for="" >By:</label>
            <input type="text" name="city" placeholder="Indtast By" required>
        </div>
        <div class="left col2">
            <label for="" >E-mail:</label>
            <input type="text" name="email" placeholder="Indtast E-mailadresse" required>
        </div>
        <div class="right col2">
            <label for="" >Adgangskode:</label>
            <input type="password" name="password" placeholder="Indtast Adgangskode" required>
        </div>
        <button class="loginbutton clear">OPRET</button>
    </form>

<?php
    
}
    
?>

</div>