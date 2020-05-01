<body>
	<div class="container">
		<div class="row">
			<br>
			<label><a href="?page=idul-fitri" class="btn-floating btn-medium waves-effect waves-light green darken-1"><i class="material-icons">dehaze</i></a> View Data Idul Fitri</label>
			<div class="divider"></div>
			<form class="col s12" method="post" enctype="multipart/form-data">
	    	<table><thead><th class="center">Tambah Data (Acara) Idul Fitri</thead></table></th>
		      <div class="row">
		      	<div class="input-field col s12">
		      		<input type="text" name="tema" required="required">
		      		<label>Tema Idul Fitri</label>
		      	</div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          	<input type="date" name="tanggal" required="required">
		      		<label>Tanggal Pelaksanaan</label>
		        </div>
		        <div class="input-field col s6">
		          	<input type="time" name="waktu" required="required">
		      		<label>Waktu Pelaksanaan</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          	<input type="text" name="tempat" required="required">
		      		<label>Tempat Pelaksanaan</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          	<input type="text" name="khotib" required="required">
		      		<label>Khotib</label>
		        </div>
		        <div class="input-field col s6">
		          	<input type="text" name="imam" required="required">
		      		<label>Imam</label>
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
			$tema = @$_POST['tema'];
		    $tanggal = @$_POST['tanggal'];
		   	$waktu = @$_POST['waktu'];
	 		$tempat = @$_POST['tempat'];
	  		$khotib = @$_POST['khotib'];
	 		$imam = @$_POST['imam'];

	 		$sumber = @$_FILES['gambar']['tmp_name'];
	  		$target = '../img/idul_fitri/';
	  		$nama_gambar = @$_FILES['gambar']['name'];

			$tambah_if = @$_POST['tambah'];

			if($tambah_if){
				if($tema == "" || $tanggal == "" || $waktu == "" || $tempat == "" || $khotib == "" || $imam == "" || $nama_gambar == ""){
					?>
					<script type="text/javascript">
						alert("Field Masih Ada yang Kosong");
					</script>
					<?php 
				} else {
					$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
					if($pindah){
					mysqli_query($db, "INSERT INTO idul_fitri(tema,tanggal,waktu,tempat,khotib,imam,gambar) VALUES('$tema','$tanggal','$waktu','$tempat','$khotib','$imam','$nama_gambar')") 
					or die ($db->error);
					?>
					<script type="text/javascript">
						alert("Tambah Data Idul Fitri Berhasil");
						window.location.href="?page=idul-fitri";
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