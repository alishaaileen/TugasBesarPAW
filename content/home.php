<?php include '../layout/header.php';?>
<form action="./order.php" method="GET"></form>
    <section id="content" class="section">
      <div class="container">
        <!-- Bagian atas -->
        <?php
        session_start();
        include('../process/db.php');
        $user = $_SESSION['user'];
        $id = $user['id'];  
        $query = mysqli_query($con, "SELECT * FROM user WHERE id = '$id'") or die(mysqli_error($con)); 
        $data = mysqli_fetch_assoc($query); 
        ?>
        <div class="head-content">
            <h1 class="title">
              Welcome, <?php echo $data['username'];?> !
            </h1>

            <div class="columns">
              <div class="column is-2">
                <figure class="image is-480x480 is-square">
                  <?php if($data['profile_image']==NULL): ?>
                    <img class="is-rounded img" src="https://img.pngio.com/blank-avatarpng-avatar-png-486_489.png">
                  <?php else: ?>
                    <img class="is-rounded img" src="../images/<?php echo $data['profile_image'];?>">
                  <?php endif; ?>
                </figure>
              </div>
              <div class="column">
                <h2 class="title">
                  <?php echo $data['nama_user'];?>
                </h2>
                  <a href="./menu.php">
                    <button class="button is-success">
                      Order
                    </button>
                  </a>
                  <a href="./voucher.php">
                    <button class="button is-link">
                      Vouchers
                    </button>
                  </a>
              </div>
            </div>
          </div>
        
        
        <!-- Bagian tengah -->

        <?php
           $data2 = mysqli_query($con, "SELECT * FROM menu WHERE status_promo='1' ") or die(mysqli_error($con));
           if(mysqli_num_rows($data2) == 0) {
            echo '<tr><td colspan="7">Tidak ada menu</td></tr>';
          }
          else {
            $no = 1;
            while($data3 = mysqli_fetch_assoc($data2)) {
          ?>
           <div class="kotak">
                      <div class="columns">
                        <div class="column is-2">
                          <figure class="image is-128x128">
                            <img src="../images/<?php echo $data3['gambar'];?>">
                          </figure>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $data3['id'];?>">
                          <div class="column">
                            <h3 class="title"> <?php echo $data3['nama_makanan'];?></h3>
                            <p class="subtitle"> <?php echo $data3['nama_promo'];?></p>
                            <a href="./order_promo.php?id=<?php echo $data3['id'] ?>">  
                              <button class="button is-success">
                                Get It!
                              </button>
                            </a>
                          </div>
                      </div>
                    </div>
                <?php
              }
            }
            ?>
        

        <!--
        <section class="section">
          <div class="container">

            <h3 class="subtitle">Today's Promo</h3>

            <div class="kotak">
              <div class="columns">
                <div class="column is-2">
                  <figure class="image is-128x128">
                    <img src="http://katalogpromosi.com/wp-content/uploads/2019/03/minimal-store.jpg">
                  </figure>
                </div>
                <div class="column">
                  <h3 class="title">Krabby Patty</h3>
                  <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates rerum repudiandae atque assumenda ullam unde tempore dignissimos expedita laborum dolorem eum, asperiores beatae nesciunt at possimus quibusdam in hic consectetur!</p>
                </div>
              </div>
            </div>

            <div class="kotak">
              <div class="columns">
                <div class="column is-2">
                  <figure class="image is-128x128">
                    <img src="https://pbs.twimg.com/media/DNBv-QgW0AIcQlw.png">
                  </figure>
                </div>
                <div class="column">
                  <h3 class="title">Krabby Patty</h3>
                  <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates rerum repudiandae atque assumenda ullam unde tempore dignissimos expedita laborum dolorem eum, asperiores beatae nesciunt at possimus quibusdam in hic consectetur!</p>
                </div>
              </div>
            </div>

            <div class="kotak">
              <div class="columns">
                <div class="column is-2">
                  <figure class="image is-128x128">
                    <img src="https://bulma.io/images/placeholders/128x128.png">
                  </figure>
                </div>
                <div class="column">
                  <h3 class="title">Krabby Patty</h3>
                  <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates rerum repudiandae atque assumenda ullam unde tempore dignissimos expedita laborum dolorem eum, asperiores beatae nesciunt at possimus quibusdam in hic consectetur!</p>
                </div>
              </div>
            </div>

          </div>
        </section>
        -->
      </div>
    </section>
    
    <?php include '../layout/footer.php';?>
  </body>
  <script>
    document.getElementById('nav-home').classList.add('is-active')
  </script>
</html>