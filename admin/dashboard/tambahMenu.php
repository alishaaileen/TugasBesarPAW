<?php include '../layout/dashboard.php';?>
  <div id="dashboardData">
  <div class="section">
    <div class="container">

      <form name="dataPegawai" action="../proses/createUser.php" method="POST">
        <div class="form-kotak">
          <div class="field">
            <h1 class="title">Data Pegawai</h1>
            <label class="label">Nama lengkap</label>
            <div class="control">
              <input name="nama" id="nama" class="input" type="text" placeholder="Nama lengkap" onchange="cekInput()">
            </div>
          </div>

          <div class="field">
            <label class="label">Gender</label>
            <div class="control">
              <label class="radio">
                <input type="radio" name="gender">
                Laki-laki
              </label>
              <label class="radio">
                <input type="radio" name="gender">
                Perempuan
              </label>
            </div>
          </div>
          
          <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
              <input name="email" class="input" type="email" placeholder="Email anda">
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
                  <input class="input" name="tglLahir" type="date">
                </div>
              </div>
              </div>
            </div>
          </div>

          <div class="field">
            <label class="label">Nomor Telepon</label>
            <div class="control">
              <input name="noTelp" class="input" type="text" placeholder="Nomor HP anda">
            </div>
          </div>

          <div class="field">
            <div class="control">
              <button class="button is-link inputButton" type="submit" name="store" value="Tambahkan" onclick="return cekAllInput()">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
<script src="../script/script.js"></script>
<script>
  var elm = document.getElementById("userTab").classList.add("isActive")
</script>
</html>