<?php 
  include '../layout/header.php';
  include '../process/db.php';
?>
<form action="" method="GET"></form>
    <section id="content" class="section">
      <div class="container">
        <!-- Bagian atas -->
        <div class="head-content">
          <h1 class="title">
            Voucher Krabby
          </h1>
          <p class="subtitle">You can only use one voucher at a time.</p>
        </div>
        
        <!-- Bagian tengah -->
        <?php
           $query = mysqli_query($con, "SELECT * FROM vouchers") or die(mysqli_error($con));
           if(mysqli_num_rows($query) == 0) {
            echo '<tr><td colspan="7">Tidak ada menu</td></tr>';
          }
          else {
            $no = 1;
            while($data = mysqli_fetch_assoc($query)) {
              echo '<div class="kotak">
                      <div class="columns">
                        <div class="column is-2">
                          <figure class="image is-128x128">
                            <img src="'.$data['gambar'].'">
                          </figure>
                        </div>
                          <input type="hidden" name="id" value='.$data['id'].'?>
                            <div class="column">
                              <h3 class="title">' .$data['nama_voucher'].'</h3>
                              <p class="subtitle">'.$data['deskripsi'].'</p>
                              <a href="./order_voucher.php?id='.$data['id'].'">
                              <button class="button is-danger is-medium" style="border-radius: 150px;">
                                Use Voucher
                              </button>
                              </a>
                            </div>
                      </div>  
                    </div>';
                  $no++;
              }
            }
        ?>
    </section>
    
    <?php include '../layout/footer.php';?>
  </body>
  <script>
    document.getElementById('nav-vouchers').classList.add('is-active')
  </script>
</html>