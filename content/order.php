<?php 
  include '../layout/header.php';
  include '../process/db.php';
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
            <h3 class="title">Krabby Cheese</h3>
            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates rerum repudiandae atque assumenda ullam unde tempore dignissimos expedita laborum dolorem eum, asperiores beatae nesciunt at possimus quibusdam in hic consectetur!</p>
          </div>
        </div>

        <form action="">
          <div class="field">
            <label class="label">Amount</label>
            <div class="control">
              <input class="input is-danger" type="number" style="width: 10%;">
            </div>
            <p class="help is-danger">This amount is invalid</p>
          </div>

          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <input class="textarea" type="text">
            </div>
          </div>
      
          <button type="submit" class="button is-success is-medium" style="border-radius: 150px;">
            Buy Item
          </button>
          
          <a href="./menu.php">
            <button class="button is-light is-medium" style="border-radius: 150px;">
              Cancel
            </button>
          </a>
         
          
        </form>

      </div>
    </section>
    
    <?php include '../layout/footer.php';?>
  </body>
  <script>
    document.getElementById('nav-home').classList.add('is-active')
  </script>
</html>