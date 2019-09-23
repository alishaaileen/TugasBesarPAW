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
            Order Krabby
          </h1>
          <p class="subtitle">You can only order one patty at a time.</p>
        </div>
        
        <!-- Bagian tengah -->
        <div class="columns">
          <div class="column is-2">
            <figure class="image is-480x480">
              <img src="https://www.foodrepublic.com/wp-content/uploads/2012/03/033_FR11785.jpg">
            </figure>
          </div>
          <div class="column">
            <h3 class="title"><?php echo $data["nama_makanan"]; ?></h3>
            <p class="subtitle"><?php echo $data["deskripsi"]; ?></p>
          </div>
        </div>

        <form name="addOrder" action="../process/addOrder.php" method="POST">
          <div class="field">
              <input type="hidden" name="nama_makanan" value="<?php echo $data['nama_makanan']; ?>">
            <label class="label">Amount</label>
            <div class="control">
              <input class="input is-danger" type="number" name="jumlah" style="width: 10%;">
            </div>
            <p class="help is-danger">This amount is invalid</p>
          </div>

          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <input class="textarea" name="pesan" type="text">
            </div>
          </div>
      
          <button type="submit" class="button is-success is-medium" name="addOrder" style="border-radius: 150px;">
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
    document.getElementById('nav-home').classList.add('is-active')
  </script>
</html>