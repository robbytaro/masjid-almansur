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
		      		<input type="text" name="nama_program" required="required">
		      		<label>Nama Program</label>
		      	</div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          	<input type="date" name="tanggal" required="required">
		      		<label>Tanggal Pelaksanaan</label>
		        </div>
		        <div class="input-field col s6">
		          	<input type="text" name="tempat" required="required">
		      		<label>Tempat Pelaksanaan</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		        	<p>Gambar</p>
		         	<input type="file" name="gambar" required="required">
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          	<input class="btn blue lighten-1" type="submit" name="tambah" value="Tambah">
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

			$tambah_km = @$_POST['tambah'];

			if($tambah_km){
				if($nama_program == "" || $tanggal == "" || $tempat == "" || $nama_gambar == ""){
					?>
					<script type="text/javascript">
						alert("Field Masih Ada yang Kosong");
					</script>
					<?php 
				} else {
					$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
					if($pindah){
					mysqli_query($db, "INSERT INTO program_masjid(id,nama_program,tanggal,tempat,gambar) VALUES('$id','$nama_program','$tanggal','$tempat','$nama_gambar')") 
					or die ($db->error);
					?>
					<script type="text/javascript">
						alert("Tambah Data Program Masjid Berhasil");
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

		 ?>
		</div>
	</div>
</body>