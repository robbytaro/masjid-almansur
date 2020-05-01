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
    <!--<form method="GET" action="">
    	<table><thead><th class="center">Pilih ID Gallery</thead></table></th>
		      <div class="row">
			        <div class="input-field col s12">
			        	<p>Gallery Kajian Mingguan</p>
					    <select name="id_km">
					      <option value="" disabled selected>Pilih ID Gallery Kajian Mingguan</option>
					      <?php 
					      	$sql_km = mysqli_query($db, "SELECT DISTINCT id_km FROM gallery_km") or die ($db->error);
					      	while ($data_km = mysqli_fetch_array($sql_km)) {
					      		echo '<option value="'.$data_km['id_km'].'">'.$data_km['id_km'].' </option>';
					      	}
					       ?>
					    </select>
					</div>
				</div>
				<div class="row">
		        <div class="input-field col s12">
		          	<input class="btn blue lighten-1" type="submit" name="ambil_gkm" value="get">
		        </div>
		      </div>
    </form>
    <?php 
    if (isset($_GET['ambil_gkm'])) {
    	$id_km = $_GET['id_km'];
     ?>
     <script type="text/javascript">
		window.location.href="tampil_gkm.php?id_km=<?php echo $data_km['id_km']; ?>";
	 </script>
	<?php } ?>-->
      <h3 class="thin-text-2">Gallery Kajian Mingguan</h3>
      	<?php   
              $sql = mysqli_query($db, "SELECT DISTINCT id_km,keterangan_km FROM gallery_km") or die ($db->error);
              while($data = mysqli_fetch_array($sql)) {
        ?>
      <div class="row">
      	<div class="col l3 m8 s12">
          <div class="card">
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><?php echo $data['id_km']; ?><i class="material-icons right">arrow_drop_up</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
              <p><?php echo $data['keterangan_km']; ?></p>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"></span>
              <p><a href="tampil_gkm.php?id_km=<?php echo $data['id_km']; ?>">Lihat Gallery</a></p>
            </div>
          </div>
        </div>
    	<?php } ?>
      </div>
    </div>
</div>
<?php include "_footer.php"; ?>
</html>