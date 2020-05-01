<!-- GET ID Kajian Ramadhan -->
<?php 	
	$id_kr = @$_GET['id_kr'];
	$sql = mysqli_query($db, "select * from kajian_ramadhan where id_kr = '$id_kr'") or die ($db->error);
	$data = mysqli_fetch_array($sql);
?>

<body>
	<div class="container">
		<div class="row">
			<br>
			<label><a href="?page=kajian-mingguan" class="btn-floating btn-medium waves-effect waves-light green darken-1"><i class="material-icons">dehaze</i></a> View Data Kajian Ramadhan</label>
			<div class="divider"></div>
			<form class="col s12" method="post" enctype="multipart/form-data">
	    	<table><thead><th class="center">Edit Data Kajian Ramadhan</thead></table></th>
	      <div class="row">
	        <div class="input-field col s12">
	          <input type="text" name="id_kr" value="<?php echo $data['id_kr']; ?>" readonly="readonly" required="required">
	          <label>ID Kajian</label>
	        </div>
	      </div>
	      <div class="row">
	      	<div class="input-field col s12">
	      		<input type="text" name="judul_kajian" value="<?php echo $data['judul_kajian']; ?>" required="required">
	      		<label>Judul Kajian</label>
	      	</div>
	      </div>
	      <div class="row">
	        <div class="input-field col s6">
	          	<input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>" required="required">
	      		<label>Tanggal Kajian</label>
	        </div>
	        <div class="input-field col s6">
	          	<input type="text" name="jam" value="<?php echo $data['jam']; ?>" required="required">
	      		<label>Waktu Kajian</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	        	<p>Gambar</p>
	         	<input type="file" name="gambar">
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          	<input type="text" name="pengisi" value="<?php echo $data['pengisi'] ?>" required="required">
	      		<label>Pengisi</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          	<input class="btn blue lighten-1" type="submit" name="edit" value="Edit">
				<input class="btn red darken-1" type="reset" name="reset" value="Clear">
	        </div>
	      </div>
	    </form>
	    <?php 

		$judul_kajian = @$_POST['judul_kajian'];
	    $tanggal = @$_POST['tanggal'];
	   	$jam = @$_POST['jam'];
  		$pengisi = @$_POST['pengisi'];

  		$sumber = @$_FILES['gambar']['tmp_name'];
  		$target = '../img/k_ramadhan/';
  		$nama_gambar = @$_FILES['gambar']['name'];

		$edit_km = @$_POST['edit'];

		if($edit_km){
			if($judul_kajian == "" || $tanggal == "" || $jam == "" || $pengisi == ""){
				?>
				<script type="text/javascript">
					alert("Field Masih Ada yang Kosong");
				</script>
				<?php 
			} else {
				if ($nama_gambar == ""){
				mysqli_query($db, "update kajian_ramadhan set judul_kajian = '$judul_kajian',
																   tanggal = '$tanggal',
																   jam = '$jam',
																   pengisi = '$pengisi' 
																   where id_kr = '$id_kr'") 
				or die ($db->error);
				?>
				<script type="text/javascript">
					alert("Edit Data Kajian Ramadhan Berhasil");
					window.location.href="?page=kajian-ramadhan";
				</script>
				<?php 
				} else {
					$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
					if ($pindah){
						mysqli_query($db, "update kajian_ramadhan set judul_kajian = '$judul_kajian',
																	   tanggal = '$tanggal',
																	   jam = '$jam',
																	   pengisi = '$pengisi',
																	   gambar = '$nama_gambar'
																	   where id_kr = '$id_kr'")
						or die ($db->error);
						?>
						<script type="text/javascript">
							alert("Edit Gambar Berhasil");
							window.location.href="?page=kajian-ramadhan";
						</script>
						<?php 
					} else {
						?>
						<script type="text/javascript">
							alert("Gagal Edit Gambar");
						</script>
						<?php

						}
					}
				}
			}

		 ?>
		 </div>
	    </div>
</body>