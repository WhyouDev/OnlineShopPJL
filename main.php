<div id="kiri">
    <?php 
        $query = mysqli_query($connector, "SELECT * FROM kategori WHERE status='on'");
        while($row=mysqli_fetch_assoc($query)){
            echo "<li><a href='".BASE_URL."index.php?kategori_id=$row[kategori_id]'>$row[kategori]</a></li>";
        }
        

    ?>

</div>

<div id="kanan">
    <div id="slides">
        <?php 
            $querryBanner = mysqli_query($connector, "SELECT * FROM banner WHERE status='on' ORDER BY banner_id DESC LIMIT 3");
            while($rowBanner=mysqli_fetch_assoc($querryBanner)){
                echo "<a href='".BASE_URL."$rowBanner[link]'> <img src='".BASE_URL."frontend/assets/images/slide/$rowBanner[gambar]'/></a>";
            }
        ?>
    </div>
</div>

