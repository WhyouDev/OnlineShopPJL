<div id="frame-tambah">
    <a href="<?php echo BASE_URL. "index.php?page=my_profile&module=kategori&action=form"; ?>" class="tombol-action">+ Tambah Kategory</a> 
</div>

<?php

    $queryKategori = mysqli_query($connector, "SELECT * FROM kategori" );

    if(mysqli_num_rows($queryKategori) == 0){
        echo "<h3>No data in the kategori table</h3>";
    }else{

        echo "<table class='table-list'>";

        echo "<tr class='row-title'>
                <th class='col-no'>No</th>
                <th class='left'>Kategori</th>
                <th class='right'>Status</th>
                <th class='center'>Action</th>
            </tr>";

        $no=1;
        while($row=mysqli_fetch_assoc($queryKategori)){
            echo "<tr>
            <td class='col-no'>$no</td>
            <td class='left'>$row[kategori]</td>
            <td class='right'>$row[status]</td>
            <td class='center'>
                <a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=kategori&action=form&kategori_id=$row[kategori_id]'>Edit</a>
            </td>
        </tr>";
        $no++;
        }
        echo "</table>";
    }
?>

