<?php include '../layout/header.php';
include '../process/db.php';?>

    <section id="content" class="section">
      <div class="container">
        <!-- Bagian atas -->
        <?php

        session_start();

        
        $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' 
                  AND password='$password'") or die(mysqli_error($con)); 

        $data = mysqli_fetch_assoc($query); 
          
        echo '<div class="head-content">
            <h1 class="title">
              Welcome, User !
            </h1>

            <div class="columns">
              <div class="column is-2">
                <figure class="image is-128x128">
                  <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                </figure>
              </div>
              <div class="column">
                <h2 class="title">
                  ' .$data['nama_user'].'              
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
          </div> ';
        ?>
        
        <!-- Bagian tengah -->

        <?php
           $query = mysqli_query($con, "SELECT * FROM menu") or die(mysqli_error($con));
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
                            <img src="' .$data['gambar'].'">
                          </figure>
                        </div>
                        <input type="hidden" name="id" value='.$data['id'].'?>
                          <div class="column">
                            <h3 class="title">' .$data['nama_makanan'].'</h3>
                            <p class="subtitle"> '.$data['promo'].'</p>
                            <button class="button is-success">
                              Get It!
                            </button>
                            </a>
                          </div>
                      </div>
                    </div>';
                  $no++;
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