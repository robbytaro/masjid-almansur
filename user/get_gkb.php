<?php include "../config/koneksi.php"; ?>
<!DOCTYPE html>
<html>

<?php include "_header.php"; ?>

<div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
    </div>
    <div class="parallax"><img src="../img/parallax1.jpg" alt="Unsplashed background img 1"></div>
</div>

<div class="container">
    <div class="section">
    	<h3 class="thin-text-2">Gallery Kajian Bulanan</h3>
      	<?php   
              $sql = mysqli_query($db, "SELECT DISTINCT id_kb,keterangan_kb FROM gallery_kb") or die ($db->error);
              while($data = mysqli_fetch_array($sql)) {
        ?>
      <div class="row">
      	<div class="col l3 m8 s12">
          <div class="card">
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><?php echo $data['id_kb']; ?><i class="material-icons right">arrow_drop_up</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
              <p><?php echo $data['keterangan_kb']; ?></p>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"></span>
              <p><a href="tampil_gkb.php?id_kb=<?php echo $data['id_kb']; ?>">Lihat Gallery</a></p>
            </div>
          </div>
        </div>
    	<?php } ?>
      </div>
    </div>
</div>
<?php include "_footer.php"; ?>
</html>