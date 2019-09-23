<?php
  include '../layout/dashboard.php';
  include '../db.php';
  $id = $_GET['id'];
?>
<div id="dashboardData">
  <div class="section">
    <div class="container">
    <?php
      $query = mysqli_query($con, "SELECT * FROM pegawai WHERE id='$id'")or die(mysql_error($con));
      $nomor = 1;

      while($data = mysqli_fetch_array($query)){
    ?>
    <section class="form-pegawai section">
      <form action="../proses/updatePegawai.php" method="POST">
        <div class="form-kotak">
          <div class="field">
            <h1 class="title">Ubah Data Pegawai</h1>
            <label class="label">Nama lengkap</label>
            <div class="control">
              <input name="id" id="id" class="input" type="hidden" value="<?php echo $data['id'];?>">
              <input class="input" type="text" value="<?php echo $data['nama'];?>" name="nama">
            </div>
          </div>

          <div class="field">
            <label class="label">Gender</label>
            <div class="control">
              <?php 
                if( $data['gender'] == 1) {
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
              <input class="input" type="email" value="<?php echo $data['email'];?>" name="email">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </div>
          </div>

          <div class="field">
            <label class="label">Nomor Telepon</label>
            <div class="control">
              <input class="input" type="text" value="<?php echo $data['nomorHandphone'];?>" name="nomorHandphone">
            </div>
          </div>
        </div>

        <div class="form-kotak">
          <div class="field">
            <h1 class="title">Pendidikan</h1>

            <label class="label">Background Pendidikan</label>
            <div class="control">
              <div class="select">
                <select name="pendidikan">
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="S3">S3</option>
                </select>
              </div>
            </div>
          </div>

          <div class="field">
            <label class="label">IPK</label>
            <div class="control">
              <input class="input" type="number" value="<?php echo $data['ipk'];?>" name="ipk">
            </div>
          </div>
          
          <div class="field">
            <label class="label">Cumlaude</label>
            <div class="control">
            <?php 
                if( $data['cumlaude'] == 0) {
                    echo '<label class="radio">
                            <input type="radio" name="cumlaude" checked="checked">
                            Ya
                          </label>
                          <label class="radio">
                            <input type="radio" name="cumlaude">
                            Tidak
                          </label>';
                }
                else {
                  echo '<label class="radio">
                          <input type="radio" name="cumlaude">
                            Ya
                          </label>
                          <label class="radio">
                            <input type="radio" name="cumlaude" checked="checked">
                            Tidak
                          </label>';
                }
              ?>
            </div>
          </div>
          
        </div>

        <div class="form-kotak">
          <div class="field">
            <h1 class="title">Lokasi Penempatan Kerja</h1>

            <label class="label">Alamat</label>
            <div class="control">
              <input class="input" type="text" value="<?php echo $data['alamtKerja'];?>" name="alamatKerja">
            </div>
          </div>

          <div class="field">
            <label class="label">Kota</label>
            <div class="control">
              <input class="input" type="text" value="<?php echo $data['kotaKerja'];?>" name="alamatKota">
            </div>
          </div>
          
        </div>

        <div class="buttons field is-grouped">
          <div class="control">
            <button class="button is-link" type="submit" name="store1">Submit</button>
          </div>
        </div>
      </form>
      <?php } ?>
    </section>
  </div>
    </div>
  </div>
</body>
<script src="../script/script.js"></script>
<script>
  var elm = document.getElementById("list-pegawai").classList.add("isActive")
</script>
</html>