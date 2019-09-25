<?php
  include '../layout/dashboard.php';
  include '../db.php';
?>

<div class="content">

  <h1 class="title is-1">View All Menu</h1>

  <table>
    <tr>
      <th>No.</th>
      <th>Menu Name</th>
      <th>Description</th>
      <th>Picture</th>
      <th>Promo</th>
    </tr>
    <?php
    $query = mysqli_query($con, "SELECT * FROM menu") or die(mysqli_error($con));

    if(mysqli_num_rows($query) == 0) {
      echo '<tr><td colspan="5">Tidak ada data</td></tr>';
    }
    else {
      $no = 1;
      while($data = mysqli_fetch_assoc($query)) {
        echo '<tr>
              <td>'.$no.'</td>
              <td>'.$data['nama_makanan'].'</td>
              <td>'.$data['deskripsi'].'</td>
              <td>
                <figure class="image is-128x128">
                <img src="../../images/'.$data['gambar'].'">
                </figure>
              </td>
              <td>'.$data['promo'].'</td>
              </tr>';
              $no++;
          }
        }
        ?>
        </table>

      </div>

    </div>
  </div>
</body>
<script src="../script/script.js"></script>
<script>
  var elm = document.getElementById("view-menu").classList.add("is-nav-active")
</script>
</html>