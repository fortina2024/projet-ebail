<?php
if(isset($_GET['param'])){
  $val_menu=$_GET['param'];
}
else{
  $val_menu='Administration';
}
?>
        <div class="titreAdmin1 mt-4" style="width:82%;margin:auto;">
            <label for="" class="h6" style="color:#0068B1;">
            <a href="admin.blade.php" style="text-decoration: none;color:#0068B1;">
            <i class="bi bi-house-fill mx-2"></i>Home /</a>
            <?php echo $val_menu; ?></label>
            <div class="d-flex flex bd-highlight" style="width:100%;margin:auto;">
            <div class="flex-fill bd-highlight" style="background-color:#0068B1;height:3px;"></div>
            <div class="flex-fill bd-highlight" style="background-color:#EEC22E;height:3px;"></div>
            <div class="flex-fill bd-highlight" style="background-color:#DB3832;height:3px;"></div>
            </div>
        </div>