<div id="frame-tambah">
    <a href="<?php echo BASE_URL. "index.php?page=my_profile&module=kategori&action=form"; ?>" class="tombol-action">+ Tambah Kategory</a> 
</div>

<?php

    $queryKategori = mysqli_query($connector, "SELECT * FROM kategori" );

    if(mysqli_num_rows($queryKategori) == 0){
        echo "<h3>No data in the kategori table</h3>";
    }else{

        echo "<table class='table-list'>";

        echo "<tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Action</th>
            </tr>";

        $no=1;
        while($row=mysqli_fetch_assoc($queryKategori)){
            echo "<tr>
            <td>$no</td>
            <td>$row[kategori]</td>
            <td>$row[status]</td>
            <td>
                <a class='".BASE_URL."index.php?page=my_profile&module&action=form&kategori=kategori_id=$row[kategori_id]>Edit</a>
            </td>
        </tr>";
        }

        echo "</table>";
    }
?>

          