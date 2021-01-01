<?php 
    include_once("../../function/connector.php");
    include_once("../../function/helper.php");

    $user_id = $_GET['user_id'];

    $name       = $_POST['nama'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $address    = $_POST['address'];
    $level      = $_POST['level'];
    $status     = $_POST['status'];

    mysqli_query($connector, "UPDATE user SET  name     ='$name',
											   email    ='$email',
											   phone    ='$phone',
											   address  ='$address',
											   level    ='$level',
											   status   ='$status' WHERE user_id ='$user_id'");
											   

    header("location: ".BASE_URL."index.php?page=my_profile&module=user&action=list");
?>