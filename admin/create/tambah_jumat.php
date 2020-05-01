<body>
	<div class="container">
		<div class="row">
			<br>
			<label><a href="?page=sholat-jumat" class="btn-floating btn-medium waves-effect waves-light green darken-1"><i class="material-icons">dehaze</i></a> View Data Sholat Jum'at</label>
			<div class="divider"></div>
			<form class="col s12" method="post">
	    	<table><thead><th class="center">Tambah Data Sholat Jum'at</thead></table></th>
		      <div class="row">
		      	<div class="input-field col s12">
		      		<input type="text" name="judul_tausiyah" required="required">
		      		<label>Judul Tausyiah</label>
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
		        <div class="input-field col s6">
		          	<input type="text" name="tempat" required="required">
		      		<label>Tempat Pelaksanaan</label>
		        </div>
		        <div class="input-field col s6">
		          	<input type="text" name="muadzin" required="required">
		      		<label>Mu'adzin</label>
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
		    $judul_tausiyah = @$_POST['judul_tausiyah'];
			$tanggal = @$_POST['tanggal'];
		    $waktu = @$_POST['waktu'];
		   	$khotib = @$_POST['khotib'];
	 		$imam = @$_POST['imam'];
	  		$tempat = @$_POST['tempat'];
	  		$muadzin = @$_POST['muadzin'];

			$tambah_jumat = @$_POST['tambah'];

			if($tambah_jumat){
				if($judul_tausiyah == "" || $tanggal == "" || $waktu == "" || $khotib == "" || $imam == "" || $tempat == "" ||  $muadzin == ""){
					?>
					<script type="text/javascript">
						alert("Field Masih Ada yang Kosong");
					</script>
					<?php 
				} else {
					mysqli_query($db, "INSERT INTO sholat_jumat(judul_tausiyah,tanggal,waktu,khotib,imam,tempat,muadzin) VALUES('$judul_tausiyah','$tanggal','$waktu','$khotib','$imam','$tempat','$muadzin')") 
					or die ($db->error);
					?>
					<script type="text/javascript">
						alert("Tambah Data Sholat Jum'at Berhasil");
						window.location.href="?page=sholat-jumat";
					</script>
					<?php 
					}
				}
			 ?>
			</div>
	</div>
</body>