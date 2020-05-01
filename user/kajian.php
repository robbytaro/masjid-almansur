<?php 
include "../config/koneksi.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<?php include '_header.php'; ?>
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
      <div class="section" id="k_m">
      <h3 class="thin-text-2">Kegiatan Kajian Mingguan</h3>
        <?php   
              $sql = mysqli_query($db, "select * from kajian_mingguan") or die ($db->error);
              while($data = mysqli_fetch_array($sql)) {
        ?>
      <div class="row">
        <div class="col l3 m8 s12">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="../img/k_mingguan/<?php echo $data['gambar']; ?>">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><?php echo $data['judul_kajian']; ?><i class="material-icons right">arrow_drop_up</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Tanggal Kajian : <?php echo $data['tanggal_kajian'] ?><i class="material-icons right">close</i> </span>
              <p>Pengisi : <?php echo $data['pengisi_kajian']; ?></p>
              <p><?php echo $data['keterangan']; ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
      </div>

      <div class="section" id="k_b">
      <h3 class="thin-text-2">Kegiatan Kajian Bulanan</h3>
        <?php   
              $sql = mysqli_query($db, "select * from kajian_bulanan") or die ($db->error);
              while($data = mysqli_fetch_array($sql)) {
        ?>
      <div class="row">
        <div class="col l3 m8 s12">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="../img/k_bulanan/<?php echo $data['gambar']; ?>">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><?php echo $data['judul_kajian']; ?><i class="material-icons right">arrow_drop_up</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Tanggal Kajian : <?php echo $data['tanggal_kajian'] ?><i class="material-icons right">close</i> </span>
              <p>Pengisi : <?php echo $data['pengisi_kajian']; ?></p>
              <p><?php echo $data['keterangan']; ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
      </div>
    </div>
<?php include '_footer.php'; ?>
</html>