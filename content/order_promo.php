<?php 
  include '../layout/header.php';
  include '../process/db.php';
  $id = $_GET['id'];
  $query = mysqli_query($con, "SELECT * FROM menu WHERE id='$id'")or die(mysql_error($con));
  $nomor = 1;
  while($data = mysqli_fetch_array($query)){
?>

    <section id="content" class="section">
      <div class="container">
        <!-- Bagian atas -->
        <div class="head-content">
          <h1 class="title">
            PROMO Krabby
          </h1>
          <p class="subtitle">You can only order one patty at a time.</p>
        </div>
        
        <!-- Bagian tengah -->
        <div class="columns">
          <div class="column is-2">
            <figure class="image is-480x480">
              <img src="<?php echo $data["gambar"]; ?>">              
            </figure>
          </div>
          <div class="column">
            <h3 class="title"><?php echo $data["nama_makanan"]; ?></h3>
            <p class="subtitle"><?php echo $data["deskripsi"]; ?></p>
            <p class="subtitle"><?php echo $data["nama_promo"]; ?></p>
          </div>
        </div>

        <form name="addOrder" action="../process/addOrder.php" method="POST">
          <div class="field">
              <input type="hidden" name="nama_makanan" value="<?php echo $data['nama_makanan']; ?>">
              <input type="hidden" name="gambar" value="<?php echo $data['gambar']; ?>">
            <label class="label">Amount</label>
            <div class="control">
              <input class="input" type="number" name="jumlah" style="width: 10%;">
            </div>
            <p id="danger" class="help">This amount is invalid</p>
          </div>

          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <input class="textarea" name="pesan" type="text">
            </div>
          </div>
      
          <button type="submit" onclick="return cekAmount()" class="button is-success is-medium" name="addOrder" style="border-radius: 150px;">
            Buy Item
          </button>
        </form>
        </br>
        <a href="./menu.php">
            <button class="button is-light is-medium" style="border-radius: 150px;">
              Cancel
            </button>
          </a>
        <?php } ?>
      </div>
    </section>
    
    <?php include '../layout/footer.php';?>
  </body>
  <script>
    document.getElementById('nav-order').classList.add('is-active')
  </script>
  <script>
    function cekAmount(){
      var danger = document.getElementById('danger')
      
      if(document.getElementsByName('jumlah')[0].value<1){
        danger.classList.add('is-danger')
        return false
      }
      return true
    }
  </script>
</html>