<?php include '../layout/header.php';?>

    <section id="content" class="section">
      <div class="container">
        <!-- Bagian atas -->
        <div class="head-content">
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
              <h2 class="title">........</h2>
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
        <section class="section">
          <div class="container">

            <h3 class="subtitle">Today's Promo</h3>

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
      </div>
    </section>
    
    <?php include '../layout/footer.php';?>
  </body>
  <script>
    document.getElementById('nav-home').classList.add('is-active')
  </script>
</html>