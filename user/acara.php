<?php 
include "../config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include "_header.php"; ?>
  <div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row">
         <div class="col l12 s12 white-text">
           <h4 class="thin-text-3 center-align">Ayo Ikuti Acara yang diadakan di Masjid Al-Mansur!.</h4>
           <h5 class="thin-text-3 center-align">Catat Jadwal-Jadwalnya!.</h5>
         </div> 
        </div>
      </div>
    </div>
    <div class="parallax"><img src="../img/parallax3.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <div class="container">

  <!-- Event Section -->
  <div class="section" id="agenda">
    <div class="row">
      <h3 class="thin-text-2 orange-text text-darken-4">Sholat Jum'at</h3>
    </div>
    <table class="striped highlight responsive-table">
            <thead>
              <tr>
                  <th class="center">Judul Tausiyah</th>
                  <th class="center">Tanggal</th>
                  <th class="center">Waktu</th>
                  <th class="center">Tempat</th>
                  <th class="center">Khotib</th>
                  <th class="center">Imam</th>
                  <th class="center">Mu'adzin</th>
              </tr>
            </thead>
            <?php   
              $sql = mysqli_query($db, "SELECT * FROM sholat_jumat ORDER BY tanggal ASC") or die ($db->error);
              while($data = mysqli_fetch_array($sql)) {
            ?>
              <tr>
                <td class="center"><?php echo $data['judul_tausiyah']; ?></td>
                <td class="center"><?php echo $data['tanggal']; ?></td>
                <td class="center"><?php echo $data['waktu']; ?></td>
                <td class="center"><?php echo $data['tempat']; ?></td>
                <td class="center"><?php echo $data['khotib']; ?></td>
                <td class="center"><?php echo $data['imam']; ?></td>
                <td class="center"><?php echo $data['muadzin']; ?></td>
              </tr>
            <?php } ?>
           </tbody>
        </table>

    <div class="row">
      <h3 class="thin-text-2 orange-text text-darken-4">IdulFitri 1440 H.</h3>
    </div>
    <table class="striped highlight responsive-table">
    <thead>
        <tr>
          <th class="center">Hari</th>
          <th class="center">Waktu</th>
          <th class="center">Tempat</th>
          <th class="center">Tema</th>
          <th class="center">Khotib</th>
          <th class="center">Imam</th>
          <th class="center">Gambar</th>
        </tr>
    </thead>
      <?php 
       $sql = mysqli_query($db, "SELECT * FROM idul_fitri ORDER BY tanggal ASC") or die ($db->error);
       while($data = mysqli_fetch_array($sql)) {
       ?>
    <tbody>
      <tr>
        <td class="center"><?php echo $data['tanggal']; ?></td>
        <td class="center"><?php echo $data['waktu']; ?></td>
        <td class="center"><?php echo $data['tempat']; ?></td>
        <td class="center"><?php echo $data['tema']; ?></td>
        <td class="center"><?php echo $data['khotib']; ?></td>
        <td class="center"><?php echo $data['imam']; ?></td>
        <td class="center"> <img class="materialboxed responsive-img z-depth-3" width="300" height="300" src="../img/idul_fitri/<?php echo $data['gambar']; ?>"></td>
      </tr>
    </tbody>
    <?php } ?>
    </table>

    <div class="row">
      <h3 class="thin-text-2 orange-text text-darken-4">Idul Adha 1440 H.</h3>
    </div>
    <table class="striped highlight responsive-table">
    <thead>
        <tr>
          <th class="center">Hari</th>
          <th class="center">Waktu</th>
          <th class="center">Tempat</th>
          <th class="center">Tema</th>
          <th class="center">Khotib</th>
          <th class="center">Imam</th>
          <th class="center">Gambar</th>
        </tr>
    </thead>
      <?php 
       $sql = mysqli_query($db, "SELECT * FROM idul_adha ORDER BY tanggal ASC") or die ($db->error);
       while($data = mysqli_fetch_array($sql)) {
       ?>
    <tbody>
      <tr>
        <td class="center"><?php echo $data['tanggal']; ?></td>
        <td class="center"><?php echo $data['waktu']; ?></td>
        <td class="center"><?php echo $data['tempat']; ?></td>
        <td class="center"><?php echo $data['tema']; ?></td>
        <td class="center"><?php echo $data['khotib']; ?></td>
        <td class="center"><?php echo $data['imam']; ?></td>
        <td class="center"> <img class="materialboxed responsive-img z-depth-3" width="300" height="300" src="../img/idul_adha/<?php echo $data['gambar']; ?>"></td>
      </tr>
    </tbody>
    <?php } ?>
    </table>
<br>
<?php include "_footer.php"; ?>
</html>