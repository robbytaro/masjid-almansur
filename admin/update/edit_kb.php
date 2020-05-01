<!-- GET ID Kajian Bulanan -->
<?php 	
	$id_kb = @$_GET['id_kb'];
	$sql = mysqli_query($db, "select * from kajian_bulanan where id_kb = '$id_kb'") or die ($db->error);
	$data = mysqli_fetch_array($sql);
?>

<body>
	<div class="container">
		<div class="row">
			<br>
			<label><a href="?page=kajian-bulanan" class="btn-floating btn-medium waves-effect waves-light green darken-1"><i class="material-icons">dehaze</i></a> View Data Kajian Bulanan</label>
			<div class="divider"></div>
			<form class="col s12" method="post" enctype="multipart/form-data">
	    	<table><thead><th class="center">Edit Data Kajian Bulanan</thead></table></th>
	      <div class="row">
	        <div class="input-field col s12">
	          <input type="text" name="id_kb" value="<?php echo $data['id_kb']; ?>" readonly="readonly" required="required">
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
	          	<input type="text" name="pengisi_kajian" value="<?php echo $data['pengisi_kajian']; ?>" required="required">
	      		<label>Pengisi Kajian</label>
	        </div>
	        <div class="input-field col s6">
	          	<input type="date" name="tanggal_kajian" value="<?php echo $data['tanggal_kajian']; ?>" required="required">
	      		<label>Tanggal Kajian</label>
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
	          	<input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>" required="required">
	      		<label>Keterangan</label>
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
	    $pengisi_kajian = @$_POST['pengisi_kajian'];
	   	$tanggal_kajian = @$_POST['tanggal_kajian'];
  		$keterangan = @$_POST['keterangan'];

  		$sumber = @$_FILES['gambar']['tmp_name'];
		$target = '../img/k_bulanan/';
		$nama_gambar = @$_FILES['gambar']['name'];

		$edit_km = @$_POST['edit'];

		if($edit_km){
			if($judul_kajian == "" || $pengisi_kajian == "" || $tanggal_kajian == "" ||  $keterangan == ""){
				?>
				<script type="text/javascript">
					alert("Field Masih Ada yang Kosong");
				</script>
				<?php 
			} else {
				if($nama_gambar == ""){
				mysqli_query($db, "update kajian_bulanan set judul_kajian = '$judul_kajian',
																   pengisi_kajian = '$pengisi_kajian',
																   tanggal_kajian = '$tanggal_kajian',
																   keterangan = '$keterangan' 
																   where id_kb = '$id_kb'") 
				or die ($db->error);
				?>
				<script type="text/javascript">
					alert("Edit Data Kajian Mingguan Berhasil");
					window.location.href="?page=kajian-bulanan";
				</script>
				<?php 
				} else {
					$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
					if($pindah) {
					mysqli_query($db, "update kajian_bulanan set judul_kajian = '$judul_kajian',
						                                   pengisi_kajian = '$pengisi_kajian',
						                                   tanggal_kajian = '$tanggal_kajian',
						                                   keterangan = '$keterangan',
						                                   gambar = '$nama_gambar'
						                                   where id_kb = '$id_kb'")
					or die ($db->error);
					?>
					<script type="text/javascript">
						alert("Edit Gambar Berhasil");
						window.location.href="?page=kajian-bulanan";
					</script>
					<?php 
				} else {
					?>
					<script type="text/javascript">
						alert("Gambar Gagal DiUpload");
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