<!-- GET ID Kajian Mingguan -->
<?php 	
	$id = @$_GET['id'];
	$sql = mysqli_query($db, "select * from program_masjid where id = '$id'") or die ($db->error);
	$data = mysqli_fetch_array($sql);
?>

<body>
	<div class="container">
		<div class="row">
			<br>
			<label><a href="?page=kajian-mingguan" class="btn-floating btn-medium waves-effect waves-light green darken-1"><i class="material-icons">dehaze</i></a> View Data Program Masjid</label>
			<div class="divider"></div>
			<form class="col s12" method="post" enctype="multipart/form-data">
	    	<table><thead><th class="center">Tambah Data Program Masjid</thead></table></th>
	    	<div class="row">
		      	<div class="input-field col s12">
		      		<input type="text" name="id" value="<?php echo $data['id']; ?>" readonly="readonly" required="required">
		      		<label>ID Program</label>
		      	</div>
		      </div>
		      <div class="row">
		      	<div class="input-field col s12">
		      		<input type="text" name="nama_program" value="<?php echo $data['nama_program']; ?>" required="required">
		      		<label>Nama Program</label>
		      	</div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          	<input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>" required="required">
		      		<label>Tanggal Pelaksanaan</label>
		        </div>
		        <div class="input-field col s6">
		          	<input type="text" name="tempat" value="<?php echo $data['tempat']; ?>" required="required">
		      		<label>Tempat Pelaksanaan</label>
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
		          	<input class="btn blue lighten-1" type="submit" name="edit" value="Edit">
					<input class="btn red darken-1" type="reset" name="reset" value="Clear">
		        </div>
		      </div>
		    </form>
	    <?php 

		$nama_program = @$_POST['nama_program'];
	    $tanggal = @$_POST['tanggal'];
	   	$tempat = @$_POST['tempat'];

	   	$sumber = @$_FILES['gambar']['tmp_name'];
	   	$target = '../img/promas/';
	   	$nama_gambar = @$_FILES['gambar']['name'];

		$edit_km = @$_POST['edit'];

		if($edit_km){
			if($nama_program == "" || $tanggal == "" || $tempat == ""){
				?>
				<script type="text/javascript">
					alert("Field Masih Ada yang Kosong");
				</script>
				<?php 
			} else {
				if($nama_gambar == ""){
				mysqli_query($db, "update program_masjid set nama_program = '$nama_program',
																   tanggal = '$tanggal',
																   tempat = '$tempat'
																   where id = '$id'") 
				or die ($db->error);
				?>
				<script type="text/javascript">
					alert("Edit Data Program Masjid Berhasil");
					window.location.href="?page=program-masjid";
				</script>
				<?php 
				} else {
					$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
					if($pindah) {
						mysqli_query($db, "update program_masjid set nama_program = '$nama_program',
																	 tanggal = '$tanggal',
																	 tempat = '$tempat',
																	 gambar = '$nama_gambar'
																	 where id = '$id'")
						or die ($db->error);
						?>
						<script type="text/javascript">
							alert("Edit Gambar Berhasil");
							window.location.href="?page=program-masjid";
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