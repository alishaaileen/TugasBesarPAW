<?php 
  include '../layout/header.php';
  include '../process/db.php';
?>
  <form action="./order.php" method="GET"></form>
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
                        <img src="'.$data['gambar'].'">
                      </figure>
                    </div>
                    <input type="hidden" name="id" value='.$data['id'].'?>
                    <div class="column">
                      <h3 class="title">' .$data['nama_makanan'].'</h3>
                      <p class="subtitle">'.$data['deskripsi'].'</p>
              <a href="./order.php?id='.$data['id'].'">
                <button class="button is-success is-medium" style="border-radius: 150px;">
                  Buy Item
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
        <div class="kotak">
          <div class="columns">
            <div class="column is-2">
              <figure class="image is-128x128">
                <img src="https://www.foodrepublic.com/wp-content/uploads/2012/03/033_FR11785.jpg">
              </figure>
            </div>
            <div class="column">
              <h3 class="title"></h3>
              <p class="subtitle"></p>
              <a href="./order.php">
                <button class="button is-success is-medium" style="border-radius: 150px;">
                  Buy Item
                </button>
              </a>
            </div>
          </div>
        </div>
          
        
        <div class="kotak">
          <div class="columns">
            <div class="column is-2">
              <figure class="image is-128x128">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPjI9Nd7bwA7y9GaE7eBxgKS9zCDW3uFxzZtd4rWTP6HVL4VqZKg">
              </figure>
            </div>
            <div class="column">
              <h3 class="title">Krabby Double Cheese</h3>
              <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates rerum repudiandae atque assumenda ullam unde tempore dignissimos expedita laborum dolorem eum, asperiores beatae nesciunt at possimus quibusdam in hic consectetur!</p>
              <a href="./orderdouble.php">
                <button class="button is-success is-medium" style="border-radius: 150px;">
                  Buy Item
                </button>
              </a>
            </div>
          </div>
        </div>

        <div class="kotak">
          <div class="columns">
            <div class="column is-2">
              <figure class="image is-128x128">
                <img src="https://pbs.twimg.com/media/Csp6EO5WEAQN0UL.jpg">
              </figure>
            </div>
            <div class="column">
              <h3 class="title">Krabby Triple Cheese</h3>
              <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates rerum repudiandae atque assumenda ullam unde tempore dignissimos expedita laborum dolorem eum, asperiores beatae nesciunt at possimus quibusdam in hic consectetur!</p>
              <a href="./order.php">
                <button class="button is-success is-medium" style="border-radius: 150px;">
                  Buy Item
                </button>
              </a>
            </div>
          </div>
        </div>
      -->
      </div>
    </section>
    
    <?php include '../layout/footer.php';?>
  </body>
  <script>
    document.getElementById('nav-order').classList.add('is-active')
  </script>
</html>