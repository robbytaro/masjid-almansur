<!-- GET ID Kajian Mingguan -->
<?php 	
	$id = @$_GET['id'];
	$sql = mysqli_query($db, "select * from sholat_jumat where id = '$id'") or die ($db->error);
	$data = mysqli_fetch_array($sql);
?>

<body>
	<div class="container">
		<div class="row">
			<br>
			<label><a href="?page=sholat-jumat" class="btn-floating btn-medium waves-effect waves-light green darken-1"><i class="material-icons">dehaze</i></a> View Data Sholat Jum'at</label>
			<div class="divider"></div>
			<form class="col s12" method="post">
	    	<table><thead><th class="center">Edit Data Sholat Jum'at</thead></table></th>
		      <div class="row">
		        <div class="input-field col s12">
		          <input type="text" name="id" value="<?php echo $data['id']; ?>" readonly="readonly" required="required">
		          <label>ID</label>
		        </div>
		      </div>
		      <div class="row">
		      	<div class="input-field col s12">
		      		<input type="text" name="judul_tausiyah" value="<?php echo $data['judul_tausiyah']; ?>" required="required">
		      		<label>Judul Tausyiah</label>
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
		        <div class="input-field col s6">
		          	<input type="text" name="tempat" value="<?php echo $data['tempat']; ?>" required="required">
		      		<label>Tempat Pelaksanaan</label>
		        </div>
		        <div class="input-field col s6">
		          	<input type="text" name="muadzin" value="<?php echo $data['muadzin']; ?>" required="required">
		      		<label>Mu'adzin</label>
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

			$judul_tausiyah = @$_POST['judul_tausiyah'];
		    $tanggal = @$_POST['tanggal'];
		   	$waktu = @$_POST['waktu'];
	 		$khotib = @$_POST['khotib'];
	  		$imam = @$_POST['imam'];
	  		$tempat = @$_POST['tempat'];
	  		$muadzin = @$_POST['muadzin'];

			$edit_jumat = @$_POST['edit'];

			if($edit_jumat){
				if($judul_tausiyah == "" || $tanggal == "" || $waktu == "" || $khotib == "" || $imam == "" || $tempat == "" || $muadzin == ""){
					?>
					<script type="text/javascript">
						alert("Field Masih Ada yang Kosong");
					</script>
					<?php 
				} else {
					mysqli_query($db, "update sholat_jumat set judul_tausiyah = '$judul_tausiyah',
															   tanggal = '$tanggal',
															   waktu = '$waktu',
															   khotib = '$khotib',
															   imam = '$imam',
															   tempat = '$tempat',
															   muadzin = '$muadzin'
															   where id = '$id'") 
					or die ($db->error);
					?>
					<script type="text/javascript">
						alert("Edit Data Sholat Jumat Berhasil");
						window.location.href="?page=sholat-jumat";
					</script>
					<?php 
					}
				}

			 ?>
		 </div>
	    </div>
</body>