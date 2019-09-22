<?php
  include '../layout/dashboard.php';
  include '../db.php';
  $id = $_GET['id'];
?>
  <div id="dashboardData">
  <div class="section">
    <div class="container">

    <?php
      $query = mysqli_query($con, "SELECT * FROM customer WHERE id='$id'")or die(mysql_error($con));
      $nomor = 1;

      while($data = mysqli_fetch_array($query)){
    ?>
      <form name="dataPegawai" action="../proses/updateUser.php" method="POST">
        <div class="form-kotak">
          <div class="field">
            <h1 class="title">Ubah Data Pegawai</h1>
            <label class="label">Nama lengkap</label>
            <div class="control">
              <input name="id" id="id" class="input" type="hidden" value="<?php echo $data['id'];?>">
              <input name="nama" id="nama" class="input" type="text" value="<?php echo $data['name'];?>">
            </div>
          </div>

          <div class="field">
            <label class="label">Gender</label>
            <div class="control">
              <?php 
                if( $data['jenisKelamin'] == 0) {
                    echo '<label class="radio">
                            <input type="radio" name="gender" checked="checked">
                            Laki-laki
                          </label>
                          <label class="radio">
                            <input type="radio" name="gender">
                            Perempuan
                          </label>';
                }
                else {
                  echo '<label class="radio">
                            <input type="radio" name="gender">
                            Laki-laki
                          </label>
                          <label class="radio">
                            <input type="radio" name="gender" checked="checked">
                            Perempuan
                          </label>';
                }
              ?>
            </div>
          </div>
          
          <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
              <input name="email" class="input" type="email" value="<?php echo $data['email'];?>">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </div>
          </div>

          <div class="field">
            <label class="label">Tanggal Lahir</label>
            <div class="columns">
              <div class="column">
                <div class="control">
                  <input class="input" name="tglLahir" type="date" value="<?php echo $data['tanggalLahir'];?>">
                </div>
              </div>
              </div>
            </div>
          </div>

          <div class="field">
            <label class="label">Nomor Telepon</label>
            <div class="control">
              <input name="noTelp" class="input" type="text" value="<?php echo $data['nomorHandphone'];?>">
            </div>
          </div>

          <div class="field">
            <div class="control">
              <button class="button is-link inputButton" type="submit" name="store" value="Update" onclick="return cekAllInput()">Update</button>
            </div>
          </div>
        </div>
      </form>
      <?php } ?>
    </div>
  </div>
</body>
<script src="../script/script.js"></script>
<script>
  var elm = document.getElementById("listUser").classList.add("isActive")
</script>
</html>