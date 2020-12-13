<?php 
    $no=1;
    $queryAdmin = mysqli_query($connector, "SELECT * FROM user ORDER BY name ASC");

    if(mysqli_num_rows($queryAdmin) == 0)
    {
        echo "<h3>Currently, no user data has been entered</h3>";
    }
    else
    {
        echo "<table class='table-list'>";
        
        echo 
        "<tr class='row-list'>
                <th class='col-no'>No</th>
                <th class='left'>Nama</th>
                <th class='left'>Email</th>
                <th class='left'>Phone</th>
                <th class='left'>Level</th>
                <th class='center'>Status</th>
                <th class='center'>Action</th>
            </tr>";


            while($rowUser=mysqli_fetch_array($queryAdmin)){
                echo 
                "<tr>
                    <td class='col-no'>$no</td>
                    <td>$rowUser[name]</td>
                    <td>$rowUser[email]</td>
                    <td>$rowUser[phone]</td>
                    <td>$rowUser[level]</td>
                    <td class='center'>$rowUser[status]</td>
                    <td class='tengah'><a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=user&action=form&user_id=$rowUser[user_id]"."'>Edit</a></td>
                </tr>";   
            $no++;
            }
        echo "</table>";
    }
?>