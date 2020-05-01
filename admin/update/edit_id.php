<!-- GET ID Kajian Mingguan -->
<?php 	
	$id_id = @$_GET['id_id'];
	$sql = mysqli_query($db, "select * from idul_adha where id_id = '$id_id'") or die ($db->error);
	$data = mysqli_fetch_array($sql);
?>

<body>
	<div class="container">
		<div class="row">
			<br>
			<label><a href="?page=idul-adha" class="btn-floating btn-medium waves-effect waves-light green darken-1"><i class="material-icons">dehaze</i></a> View Data Idul Adha</label>
			<div class="divider"></div>
			<form class="col s12" method="post" enctype="multipart/form-data">
	    	<table><thead><th class="center">Tambah Data (Acara) Idul Adha</thead></table></th>
		      <div class="row">
		      	<div class="input-field col s12">
		      		<input type="text" name="tema" value="<?php echo $data['tema']; ?>" required="required">
		      		<label>Tema Idul Fitri</label>
		      	</div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          	<input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>" required="required">
		      		<label>Tanggal Pelaksanaan</label>
		        </div>
		        <div class="input-field col s6">
		          	<input type="time" name="waktu" value="<?php echo $data['waktu']; ?>" required="required">
		      		<label>Waktu Pelaksanaan</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          	<input type="text" name="tempat" value="<?php echo $data['tempat']; ?>" required="required">
		      		<label>Tempat Pelaksanaan</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          	<input type="text" name="khotib" value="<?php echo $data['khotib']; ?>" required="required">
		      		<label>Khotib</label>
		        </div>
		        <div class="input-field col s6">
		          	<input type="text" name="imam" value="<?php echo $data['imam']; ?>" required="required">
		      		<label>Imam</label>
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
			$tema = @$_POST['tema'];
		    $tanggal = @$_POST['tanggal'];
		   	$waktu = @$_POST['waktu'];
	 		$tempat = @$_POST['tempat'];
	  		$khotib = @$_POST['khotib'];
	 		$imam = @$_POST['imam'];
	  		
	  		$sumber = @$_FILES['gambar']['tmp_name'];
	  		$target = '../img/idul_adha/';
	  		$nama_gambar = @$_FILES['gambar']['name'];

			$edit_if = @$_POST['edit'];

			if($edit_if){
				if($tema == "" || $tanggal == "" || $waktu == "" || $tempat == "" || $khotib == "" || $imam == ""){
					?>
					<script type="text/javascript">
						alert("Field Masih Ada yang Kosong");
					</script>
					<?php 
				} else {
					if ($nama_gambar == ""){
					mysqli_query($db, "update idul_adha set tema = '$tema',
															 tanggal = '$tanggal',
															 waktu = '$waktu',
															 tempat = '$tempat',
															 khotib = '$khotib',
															 imam = '$imam'
															 where id_id = '$id_id'") 
					or die ($db->error);
					?>
					<script type="text/javascript">
						alert("Edit Data Idul Fitri Berhasil");
						window.location.href="?page=idul-adha";
					</script>
					<?php 
					} else {
						$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
						if ($pindah){
							mysqli_query($db, "update idul_adha set tema = '$tema',
																	 tanggal = '$tanggal',
																	 waktu = '$waktu',
																	 tempat = '$tempat',
																	 khotib = '$khotib',
																	 imam = '$imam',
																	 gambar = '$nama_gambar'
																	 where id_id = '$id_id'")
							or die ($db->error);
						?>
						<script type="text/javascript">
							alert("Edit Gambar Berhasil");
							window.location.href="?page=idul-adha";
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