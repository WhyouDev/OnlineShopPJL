<form action="<?php echo BASE_URL. "./module/kategori/action.php" ?>" method="post">


        <div class="element-form">
            <label for="kategori">Kategori</label>
            <span><input type="text" name="kategori"></span>
        </div>
        <div class="element-form">
            <label for="status">Status</label>
            <span>  <input type="radio" name="status" value="on" />On
                    <input type="radio" name="status" value="off" />Off
            </span>
        </div>
        <div class="element-form">
            <span><input type="submit" name="button" value="Add" /></span>
        </div>

</form>