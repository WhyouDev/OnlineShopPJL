<?php
    session_start();
    include_once("function/connector.php");
    include_once("function/helper.php");
    
    $page = isset($_GET['page']) ? $_GET['page'] : false;
    $kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;
    
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : false;
    $level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Pinunjul Store | Kebutuhan Sembako</title>
     <link rel="stylesheet" href="<?php echo BASE_URL. "/frontend/assets/css/style.css"; ?>" type="text/css" />
     <script src="<?php echo BASE_URL. "/frontend/assets/js/jquery-3.1.1.min.js"; ?>"></script>
     <script src="<?php echo BASE_URL. "/frontend/assets/js/SlidesJS-3/source/jquery.slides.min.js"; ?>"></script>
 </head>
 <body>
   
    <div id="container">
        <div id="header">
            <a href="<?php echo BASE_URL. "index.php"; ?>">
            <img src="<?php echo BASE_URL. "/frontend/assets/images/logo/Pinunjul-Logo.png"?>" alt="logo"/>
            </a>
            <div id="menu">
                <div id="user">
                <?php 
                    if($user_id){
                        echo "Hi <b>$name</b>,<a href='.BASE_URL. index.php?page=my_profile&module=pesanan&action=list'>My Profile</a> 
                                <a href='".BASE_URL."logout.php'>Logout</a>";
                    }else{
                        echo "<a href='".BASE_URL."index.php?page=login'>Login</a>
                              <a href='".BASE_URL."index.php?page=register'>Register</a>";
                    }
                ?>    
                </div>
                <a href="<?php echo BASE_URL. "index.php?page=cart"; ?>" id="button_cart">
                <img src="<?php echo BASE_URL. "/frontend/assets/images/logo/Shopping_cart_white.png"?>" alt="logo_cart"/>
                </a>
            </div>
        </div>

        <div id="content">
        <!-- //Untuk memanggil form yang akan ditampilkan di page. -->
        <?php 
        $filename = "$page.php";

        if(file_exists($filename)) {
            include_once($filename); 
        } else {
            include_once("main.php");
        }
        ?>
        </div>
        <div id="footer">
            <p>Copyright Pinunjul Store 2020</p>
        </div>
    </div>
 </body>
 </html>