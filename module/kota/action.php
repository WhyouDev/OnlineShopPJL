<?php
    include_once("../../function/connector.php");
    include_once("../../function/helper.php");

    $kota   = $_POST['kota'];
    $tarif  = $_POST['tarif'];
    $status = $_POST['status'];
    $button = $_POST['button'];
        
    if($button == "Add"){
            mysqli_query($connector, "INSERT INTO kota (kota, tarif, status) VALUES('$kota', '$tarif', '$status')");
        }
        else if($button == "Update"){
            $kota_id = $_GET['kota_id'];
            
            mysqli_query($connector, "UPDATE kota SET kota   ='$kota',
                                                      tarif  ='$tarif',
                                                      status ='$status' WHERE kota_id='$kota_id'");
        }
        
        header("location:" .BASE_URL."index.php?page=my_profile&module=kota&action=list");
