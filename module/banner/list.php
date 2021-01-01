<div id="frame-tambah">
	<a class="tombol-action" href="<?php echo BASE_URL."index.php?page=my_profile&module=banner&action=form"; ?>">+ Add Banner</a>
</div>

<?php
   
        
    $queryBanner = mysqli_query($connector, "SELECT * FROM banner ORDER BY banner_id DESC");
        
    if(mysqli_num_rows($queryBanner) == 0)
    {
        echo "<h3>No data in the banner table</h3>";
    }
    else
    {
        echo "<table class='table-list'>";
            
            echo "<tr class='row-title'>
                    <th class='col-no'>No</th>
                    <th class='row'>Banner</th>
                    <th class='row'>Link</th>
                    <th class='center'>Status</th>
                    <th class='center'>Action</th>
                 </tr>";
            $no=1;
            while($rowBanner=mysqli_fetch_array($queryBanner))
            {
                echo "<tr>
                        <td class='col-no'>$no</td>
                        <td>$rowBanner[banner]</td>
                        <td><a target='blank' href='".BASE_URL."$rowBanner[link]'>$rowBanner[link]</a></td>
                        <td class='center'>$rowBanner[status]</td>
                        <td class='center'><a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=banner&action=form&banner_id=$rowBanner[banner_id]'>Edit</a></td>
                     </tr>";
                
                $no++;
            }
            
        echo "</table>";
    }
?>