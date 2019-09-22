<?php include '../layout/dashboard.php';?>

<div id="dashboardData">

  <div style="margin: 20px 0;">
    <form action="../proses/createPdfPegawai.php" method="POST">
      <button type="submit">Make PDF</button>
    </form>
  </div>

  <table class="userListTable">
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Gender</th>
      <th>No. HP</th>
      <th>Pendidikan</th>
      <th>IPK</th>
      <th>Cumlaude</th>
      <th>Alamat kerja</th>
      <th>Kota kerja</th>
      <th>Pengaturan</th>
    </tr>
    <?php
    $query = mysqli_query($con, "SELECT * FROM pegawai") or die(mysqli_error($con));

    if(mysqli_num_rows($query) == 0) {
      echo '<tr><td colspan="7">Tidak ada data</td></tr>';
    }
    else {
      $no = 1;
      while($data = mysqli_fetch_assoc($query)) {
        echo '<tr>
              <td>'.$no.'</td>
              <td>'.$data['nama'].'</td>
              <td>'.$data['email'].'</td>
              <td>'; if($data['gender'] == 0) {
                echo 'Laki-laki';
              }else {
                echo 'Perempuan';
              }
        echo '</td>
              <td>'.$data['nomorHandphone'].'</td>
              <td>'.$data['pendidikan'].'</td>
              <td>'.$data['ipk'].'</td>
              <td>'; if($data['cumlaude'] == 0) {
                echo 'Ya';
              }else {
                echo 'Tidak';
              }
        echo '</td>
              <td>'.$data['alamtKerja'].'</td>
              <td>'.$data['kotaKerja'].'</td>
              <td>
                <a href="./editPegawai.php?id='.$data['id'].'">Edit</a>
                <a href="../proses/deletePegawai.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a>
              </td>
              </tr>';
              $no++;
      }
    }
    ?>
  </table>
</div>
</body>
<style>
  .userListTable{
    width: 100%;
  }
  table, tr, td, th{
    border: 1px;
    border: 1px solid black;
    border-collapse: collapse;
  }
</style>
<script src="../script/script.js"></script>
<script> var elm = document.getElementById("list-pegawai").classList.add("isActive")</script>
</html> 