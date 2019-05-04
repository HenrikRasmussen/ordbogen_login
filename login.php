<div id="form" class="center">
    <form action="checkuser.php" method="post">
        <div class="row">
            <div class="col2 left">
                <label id="labelemail" class="label" for="email" >E-mail:</label>
                <input type="text" name="email" placeholder="<?php if (isset($_SESSION['wronguser'])) {
                    echo $_SESSION['wronguser'];
                    unset($_SESSION['wronguser']);
                }else {echo 'Indtast E-mailadresse';
                      } ?>" <?php if (isset($_SESSION['email'])) {
                    echo 'value="'.$_SESSION['email'].'"';
                } ?>>
            </div>
               
        </div>
        <div class="row">
            <div class="col2 right">
                <label id="labelpassword" class="label" for="password" >Adgangskode:</label>
                <input type="password" name="password" placeholder="<?php if (isset($_SESSION['wrongpassword'])) {
                    echo $_SESSION['wrongpassword'];
                    unset($_SESSION['wrongpassword']);
                    }else {echo 'Indtast Adgangskode';
                          }?> ">
            </div>
               
        </div>
        <div>
        <button class="loginbutton clear">Log ind</button>
        </div>
    </form>       
</div>