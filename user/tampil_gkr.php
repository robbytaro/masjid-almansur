<?php include '../config/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<?php include '_header.php'; ?>
<?php 	
	$id_kr = @$_GET['id_kr'];
	$sql = mysqli_query($db, "select * from gallery_kr where id_kr = '$id_kr'") or die ($db->error);
	$data = mysqli_fetch_array($sql);
?>
<body>
	<div id="index-banner" class="parallax-container valign-wrapper">
	    <div class="section no-pad-bot">
	</div>
		  <div class="parallax"><img src="../img/parallax1.jpg" alt="Unsplashed background img 1">
	   </div>
	</div>
	<div class="container">
		<div class="row">
		<h3 class="thin-taxt center">Gallery <?php echo $data['id_kr']; ?></h3>
	      <p class="center"><?php echo $data['keterangan']; ?></p>
	      <div class="row">
	      	<?php   
	              $sql = mysqli_query($db, "SELECT * FROM gallery_kr where id_kr = '$id_kr'") or die ($db->error);
	              while($data = mysqli_fetch_array($sql)) {
	        ?>
	        <div class="col l3 m8 offset-m2 s12">
	        <img class="materialboxed responsive-img" width="500" height="300" src="../img/k_ramadhan/<?php echo $data['gambar_kr']; ?>">
	        </div>
	        <?php } ?>
	      </div>
	     <p class="thin-text-2 center">(Youtube Link)</p>
	    </div>
</div>
<?php include '_footer.php'; ?>
</html>