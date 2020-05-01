<?php 
  include "../config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include "_header.php";?>

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
      <h3 class="thin-taxt center">Program-Program Masjid Al-Mansur</h3>
    </div>

    <?php 
    $sql = mysqli_query($db, "SELECT * FROM program_masjid ORDER BY tanggal ASC") or die ($db->error);
    while($data = mysqli_fetch_array($sql)){
    ?>

    <table>
      <h5><?php echo $data['nama_program']; ?></h5>
      <th>Tanggal</th>
      <th>Tempat</th>
      <th>Gambar</th>
      <tr>
        <td><?php echo $data['tanggal']; ?></td>
        <td><?php echo $data['tempat']; ?></td>
        <td><img class="materialboxed responsive-img z-depth-3" width="200" height="200" src="../img/promas/<?php echo $data['gambar']; ?>"></td>
      </tr>
    </table>
    <br>
  <?php } ?>
  </div>  
  </div>
<?php include "_footer.php"; ?>
</html>