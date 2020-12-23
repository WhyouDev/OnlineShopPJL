<?php
    include_once("../../function/connector.php");
    include_once("../../function/helper.php");
     
    $banner     = $_POST['banner'];
    $link       = $_POST['link'];
    $status     = $_POST['status'];
    $button     = $_POST['button'];
    $update_gambar= "";
	
 
    if($_FILES["file"]["name"])
    {
        $nama_file = $_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"], "../../frontend/assets/images/slide/".$nama_file);
         
        $update_gambar  = ", gambar='$nama_file'";
    }
     
    if($button == "Add")
    {
        mysqli_query($connector, "INSERT INTO banner (banner, link, gambar, status) VALUES ('$banner', '$link', '$nama_file', '$status')");
    }
    elseif($button == "Update")
    {
	    $banner_id = $_GET['banner_id'];
		
        mysqli_query($connector, "UPDATE banner SET banner='$banner',
                                        link='$link',
                                        $edit_gambar
                                        status='$status'
										$edit_gambar WHERE banner_id='$banner_id'");
    }
     
     
    header("location: ".BASE_URL."index.php?page=my_profile&module=banner&action=list");
?>