<?php
    include_once("../../function/connector.php");
    include_once("../../function/helper.php");

    $kategori   = $_POST['kategori'];
    $status     = $_POST['status'];
    $button     = $_POST['button'];
        
    if($button == "Add"){
            mysqli_query($connector, "INSERT INTO kategori (kategori, status) VALUES('$kategori', '$status')");
        }
        else if($button == "Update"){
            $kategori_id = $_GET['kategori_id'];
            
            mysqli_query($connector, "UPDATE kategori SET kategori='$kategori',
                                    status='$status' WHERE kategori_id='$kategori_id'");
        }
        
        header("location:" .BASE_URL."index.php?page=my_profile&module=kategori&action=list");
