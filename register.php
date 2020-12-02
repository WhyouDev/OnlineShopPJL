<?php 
        if($user_id) {
            header("location:" .BASE_URL);
        }
?>


<div id="container-user-akses">

    <form action="<?php echo BASE_URL. "proses_register.php"; ?>" method="POST">
        <?php
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
            $fullname = isset($_GET['fullname']) ? $_GET['fullname'] : false;
            $email = isset($_GET['email']) ? $_GET['email'] : false;
            $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
            $address = isset($_GET['address']) ? $_GET['address'] : false;
            
            if($notif == "require"){
                echo "<div class='notif'>Sorry,Please fill out all of the required fields correctly</div>";
            }else if($notif == "password"){
                echo "<div class='notif'>Sorry, your pasword is dismatch, Try Again !</div>";
            }
            else if($notif == "email"){
                echo "<div class='notif'>Sorry, Email already registered </div>";
            }
        ?>

        <div class="element-form">
            <label>Full Name</label>
            <span><input type="text" name="fullname" value="<?php echo $fullname ?>"/></span>
        </div>
        <div class="element-form">
            <label>Email</label>
            <span><input type="text" name="email" value="<?php echo $email ?>" /></span>
        </div>
        <div class="element-form">
            <label>Nomor Telepon / Handphone</label>
            <span><input type="text" name="phone" value="<?php echo $phone ?>"/></span>
        </div>
        <div class="element-form">
            <label>Address</label>
            <span><textarea name="address" id="" cols="30" rows="10"><?php echo $address ?></textarea></span>
        </div>
        <div class="element-form">
            <label>password</label>
            <span><input type="password" name="password" /></span>
        </div>        
        <div class="element-form">
            <label>confirm password</label>
            <span><input type="password" name="confirm_password" /></span>
        </div>        
        <div class="element-form">
            <span><input type="submit" value="register" /></span>
        </div>        

    </form>
</div>