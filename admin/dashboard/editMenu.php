<?php
  include '../layout/dashboard.php';
  include '../db.php';
  $id = $_GET['id'];
?>
  <div class="content">
    <h1 class="title is-1">Edit Menu</h1>

    <?php
      $query = mysqli_query($con, "SELECT * FROM menu WHERE id='$id'")or die(mysql_error($con));
      $nomor = 1;

      while($data = mysqli_fetch_array($query)){
    ?>

    <div style="width: 60%">
      <form action="../proses/prosesEditMenu.php" method="POST" enctype="multipart/form-data">
        <div class="field">
          <label class="label">Menu Name</label>
          <div class="control">
            <input name="id" class="input" type="hidden" value="<?php echo $data['id'];?>">
            <input name="nama_makanan" class="input" type="text" value="<?php echo $data['nama_makanan'];?>">
          </div>
        </div>
  
        <div class="field">
          <label class="label">Deskripsi</label>
          <div class="control">
            <input name="deskripsi" class="input" type="text" value="<?php echo $data['deskripsi'];?>">
          </div>
        </div>
  
        <div class="field">
          <label class="label">Gambar</label>
            <div class="file is-boxed">
              <label class="file-label">
                <input class="file-input" type="file" name="gambar" id="gambar">
                <span class="file-cta">
                  <span class="file-icon">
                    <i class="fas fa-upload"></i>
                  </span>
                  <span class="file-label">
                    Choose a file…
                  </span>
                </span>
              </label>
            </div>
        </div>
  
        <div class="field">
          <label class="label">Promo</label>
          <div class="control">
            <textarea name="nama_promo" class="textarea"><?php echo $data['nama_promo'];?></textarea>
          </div>
        </div>
  
        <div class="field">
          <div class="control">
            <button type="submit" class="button is-link" name="update">Update</button>
          </div>
        </div>
      </form></div>
    <?php } ?>
  </div>
</div>
</div>
</body>
<script src="../../js/script.js"></script>
</html>