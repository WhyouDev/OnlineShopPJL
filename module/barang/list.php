<div id="frame-tambah">
    <a href="<?php echo BASE_URL. "index.php?page=my_profile&module=barang&action=form"; ?>" class="tombol-action">+ Tambah barang</a>
</div>

<?php

    $query = mysqli_query($connector, "SELECT barang.*, kategori.kategori FROM barang JOIN kategori ON barang.kategori_id=kategori.kategori_id" );

    if(mysqli_num_rows($query) == 0){
        echo "<h3>No data in the kategori table</h3>";
    }else{

        echo "<table class='table-list'>";

        echo "<tr class='row-title'>
                <th class='col-no'>No</th>
                <th class='left'>Nama Barang</th>
                <th class='left'>Kategori</th>
                <th class='left'>Harga</th>
                <th class='center'>Status</th>
                <th class='center'>Action</th>
            </tr>";

            $no=1;
            while($row=mysqli_fetch_assoc($query)){
                echo "<tr>
                <td class='col-no'>$no</td>
                <td class='left'>$row[nama_barang]</td>
                <td class='left'>$row[kategori]</td>
                <td class='left'>".rupiah($row["harga"])."</td>
                <td class='center'>$row[status]</td>
                <td class='center'>
                    <a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=barang&action=form&barang_id=$row[barang_id]'>Edit</a>
                </td>
            </tr>";
            $no++;
            }
            echo "</table>";
        }
?>