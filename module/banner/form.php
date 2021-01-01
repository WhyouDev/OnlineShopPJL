<?php
       
    $banner_id = isset($_GET['banner_id']) ? $_GET['banner_id'] : "";
       
    $banner 			= "";
    $link 				= "";
    $gambar 			= "";
	$keterangan_gambar 	= "";
    $status 			= "";  
    $button 			= "Add";
       
    if($banner_id){
        $queryBanner= mysqli_query($connector, "SELECT * FROM banner WHERE banner_id='$banner_id'");
        $row		= mysqli_fetch_array($queryBanner);
           
		$banner 			= $row["banner"];
		$link 				= $row["link"];
		$keterangan_gambar 	= "(Click select image, if you want to replace the image on the side)";
		$status 			= $row["status"];
		$gambar 			= "<img src='".BASE_URL."frontend/assets/images/slide/$row[gambar]' style='width: 200px;vertical-align: middle;' />";
		$button 			= "Update";
		
    }   
?>

<form action="<?php echo BASE_URL."module/banner/action.php?banner_id=$banner_id"?>" method="post" enctype="multipart/form-data">
	
	<div class="element-form">
		<label>Banner</label>	
		<span><input type="text" name="banner" value="<?php echo $banner; ?>" /></span>
	</div>	

	<div class="element-form">
		<label>Link</label>	
		<span><input type="text" name="link" value="<?php echo $link; ?>" /></span>
	</div>	   

	<div class="element-form">
		<label>Gambar <?php echo $keterangan_gambar; ?></label>	
		<span><input type="file" name="file" /><?php echo $gambar; ?></span>
	</div>	  
	<div class="element-form">
		<label>Status</label>	
		<span>
			<input type="radio" value="on" name="status" <?php if($status == "on"){ echo "checked"; } ?> /> On
			<input type="radio" value="off" name="status" <?php if($status == "off"){ echo "checked"; } ?> /> Off		
		</span>
	</div>	   
	   
	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>" /></span>
	</div>	
</form>