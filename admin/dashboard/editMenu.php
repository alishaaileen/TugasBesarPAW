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
      <form action="">
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
          <div class="control">
          <div class="field">
              <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
              <div class="control has-text-centered">
                <figure class="image is-128x128 is-inline-block">
                  <?php if($data['gambar']==NULL): ?>
                    <img class="img" src="https://img.pngio.com/blank-avatarpng-avatar-png-486_489.png" onClick="triggerClick()" id="profileDisplay">
                  <?php else: ?>
                    <img class="img" src="../images/<?php echo $data['gambar'];?>" onClick="triggerClick()" id="profileDisplay">
                  <?php endif; ?>
                </figure>
                <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                <p>Click on Image to Browse Picture</p>
              </div>
            </div>
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
            <button type="submit" class="button is-link">Update</button>
          </div>
        </div>
      </form></div>
    <?php } ?>
  </div>
</div>
</div>
</body>
<script src="../../js/script.js">
</html>