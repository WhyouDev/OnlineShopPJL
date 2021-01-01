<?php 
    $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : false;
        
    $button  = "Update";
    $queryUser = mysqli_query($connector, "SELECT * FROM user WHERE user_id='$user_id'");
    
    $row = mysqli_fetch_array($queryUser);
    
    $name     = $row['name'];
    $email    = $row['email'];
    $address  = $row['address'];
    $phone    = $row['phone'];
    $password = $row['password'];
    $status   = $row['status'];
    $level    = $row['level'];
        
    
        
?>
<form action="<?php echo BASE_URL."module/user/action.php?user_id=$user_id"?>" method="POST">
	  
        <div class="element-form">
            <label>FullName</label>	
            <span><input type="text" name="nama" value="<?php echo $name; ?>" /></span>
        </div>	
    
        <div class="element-form">
            <label>Email</label>	
            <span><input type="text" name="email" value="<?php echo $email; ?>" /></span>
        </div>		
    
        <div class="element-form">
            <label>Phone</label>	
            <span><input type="text" name="phone" value="<?php echo $phone; ?>" /></span>
        </div>	
    
        <div class="element-form">
            <label>Address</label>	
            <span><input type="text" name="address" value="<?php echo $address; ?>" /></span>
        </div>		
    
        <div class="element-form">
            <label>Level</label>	
            <span>
                <input type="radio" value="superadmin" name="level" <?php if($level == "superadmin"){ echo "checked"; } ?> /> Superadmin
                <input type="radio" value="customer" name="level" <?php if($level == "customer"){ echo "checked"; } ?> /> Customer			
            </span>
        </div>	
    
        <div class="element-form">
            <label>Status</label>	
            <span>
                <input type="radio" value="on" name="status" <?php if($status == "on"){ echo "checked"; } ?> /> on
                <input type="radio" value="off" name="status" <?php if($status == "off"){ echo "checked"; } ?> /> off		
            </span>
        </div>		
        <div class="element-form">
            <span><input type="submit" name="button" value="<?php echo $button; ?>" /></span>
        </div>
  </form>