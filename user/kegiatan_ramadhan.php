<?php 
include "../config/koneksi.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<?php 
include "_header.php";
 ?>

  <div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row">
         <div class="col l12 s12 white-text">
           <h4 class="thin-taxt center-align">يَرْفَعِ اللهُ الَّذِينَ ءَامَنُوا مِنكُمْ وَالَّذِينَ أُوتُوا الْعِلْمَ دَرَجَاتٍ</h4>
           <h5 class="thin-taxt center-align">”Allah akan meninggikan orang-orang yang beriman di antaramu dan orang-orang yang diberi ilmu pengetahuan.” (QS.Al-Mujadalah:11).</h5>
         </div> 
        </div>
      </div>
    </div>
    <div class="parallax"><img src="../img/parallax3.jpg" alt="Unsplashed background img 1"></div>
  </div>
    <!-- Kajian Mingguan Section -->
    <div class="container">
      <div class="section">
        <h3 class="thin-text-2 center">Kegiatan Ramadhan</h3>
      <table>
      <h5>Buka Bersama</h5>
      <th>Hari</th>
      <th>Waktu</th>
      <th>Tempat</th>
      <th>HTM</th>
      <tr>
        <td>Setiap Hari</td>
        <td>17:40 s/d Ba'da Maghrib</td>
        <td>Masjid Al-Mansur.</td>
        <th>Free</th>
      </tr>
    </table>
    <h5 class="thin-text-2">Kajian Ramadhan</h5>
        <?php   
              $sql = mysqli_query($db, "select * from kajian_ramadhan") or die ($db->error);
              while($data = mysqli_fetch_array($sql)) {
        ?>
      <div class="row">
        <div class="col l3 m8 s12">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="../img/k_ramadhan/<?php echo $data['gambar']; ?>">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><?php echo $data['judul_kajian']; ?><i class="material-icons right">arrow_drop_up</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><?php echo $data['tanggal'] ?><i class="material-icons right">close</i> </span>
              <p>Pengisi : <?php echo $data['pengisi']; ?></p>
              <p>Waktu : <?php echo $data['jam']; ?> WIB</p>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
    </div>
  <?php include '_footer.php'; ?>
</html>