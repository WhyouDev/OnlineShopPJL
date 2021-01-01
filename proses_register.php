<?php 

    include_once("function/connector.php");
    include_once("function/helper.php");

    $level      = "customer";
    $status     = "on";
    $fullname   = $_POST['fullname'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $address    = $_POST['address'];     
    $password   = $_POST['password'];     
    $confirm_p  = $_POST['confirm_password'];     

    unset($_POST['password']);
    unset($_POST['confirm_password']);
    $dataForm = http_build_query($_POST);

    $query = mysqli_query($connector, "SELECT * FROM user WHERE email='$email'");
    
    if(empty($fullname) || empty($email) || empty($phone) || empty($address) || empty($password)){
        header ("location: ".BASE_URL."index.php?page=register&notif=require&$dataForm");
    }elseif($password != $confirm_p){
        header ("location: ".BASE_URL."index.php?page=register&notif=password&$dataForm");
    }elseif(mysqli_num_rows($query) == 1){
        header ("location: ".BASE_URL."index.php?page=register&notif=email&$dataForm");
    }else
    {
        $password= md5($password);
        mysqli_query($connector, "INSERT INTO user (level, name, email, address, phone, password, status)
                                         VALUES('$level','$fullname','$email','$address', '$phone', '$password', '$status')");

        header ("location: ".BASE_URL."index.php?page=login");
    }
        
    