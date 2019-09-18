<?php include '../layout/header.php';?>

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
        <div class="kotak">
          <div class="columns">
            <div class="column is-2">
              <figure class="image is-128x128">
                <img src="https://www.foodrepublic.com/wp-content/uploads/2012/03/033_FR11785.jpg">
              </figure>
            </div>
            <div class="column">
              <h3 class="title">Krabby Cheese</h3>
              <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates rerum repudiandae atque assumenda ullam unde tempore dignissimos expedita laborum dolorem eum, asperiores beatae nesciunt at possimus quibusdam in hic consectetur!</p>
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

      </div>
    </section>
    
    <?php include '../layout/footer.php';?>
  </body>
  <script>
    document.getElementById('nav-order').classList.add('is-active')
  </script>
</html>