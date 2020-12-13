<div id="frame-tambah">
    <a href="<?php echo BASE_URL. "index.php?page=my_profile&module=kota&action=form"; ?>" class="tombol-action">+ Tambah Kota</a> 
</div>

<?php

    $queryKota = mysqli_query($connector, "SELECT * FROM kota" );

    if(mysqli_num_rows($queryKota) == 0)
    {
        echo "<h3>No data in the kota table</h3>";
    }else
    {
        echo "<table class='table-list'>";

            echo "<tr class='row-title'>
                    <th class='col-no'>No</th>
                    <th class='left'>Kota</th>
                    <th class='left'>Tarif</th>
                    <th class='right'>Status</th>
                    <th class='center'>Action</th>
                </tr>";

            $no=1;
            while($row=mysqli_fetch_assoc($queryKota)){
                echo "<tr>
                <td class='col-no'>$no</td>
                <td class='left'>$row[kota]</td>
                <td class='left'>".rupiah($row["tarif"])."</td>
                <td class='right'>$row[status]</td>
                <td class='center'>
                    <a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=kota&action=form&kota_id=$row[kota_id]'>Edit</a>
                </td>
            </tr>";
            $no++;
            }
        echo "</table>";
    }
?>

