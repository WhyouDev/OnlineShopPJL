<?php
    if($user_id) {
        header("location:" .BASE_URL);
    }

?>

<div id="container-user-akses">
    <form action="<?php echo BASE_URL. "proses_login.php"; ?>" method="POST">

        <?php
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

            if($notif == true){
                
                echo "<div class='notif'>Sorry, the email or password you entered does not match </div>";
            }
        ?>

   
        <div class="element-form">
                <label for="login">Email</label>
                <span><input type="text" name="email"></span>
        </div>
        <div class="element-form">
                <label for="password" type="password">Password</label>
                <span><input type="password" name="password" /></span>
        </div>
        <div class="element-form">
                <span><input type="submit" value="login"></span>
        </div>
    </form>
</div>