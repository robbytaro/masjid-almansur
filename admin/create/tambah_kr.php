<!-- Query Kode Otomatis -->
<?php 

		$query_kode = mysqli_query($db, "select max(id_kr) from kajian_ramadhan") or die($db->error);
		$data_kode = mysqli_fetch_array($query_kode);
		if($data_kode){
			$nilaikode = substr($data_kode[0], 1);
			$kode = (int) $nilaikode;
			$kode = $kode + 1;
			$kode_otomatis = "R".str_pad($kode, 3, "0", STR_PAD_LEFT);
		} else {
			$kode_otomatis = "R01";
		}
?>
<body>
	<div class="container">
		<div class="row">
			<br>
			<label><a href="?page=kajian-ramadhan" class="btn-floating btn-medium waves-effect waves-light green darken-1"><i class="material-icons">dehaze</i></a> View Data Kajian Ramadhan</label>
			<div class="divider"></div>
			<form class="col s12" method="post" action="" enctype="multipart/form-data">
	    	<table><thead><th class="center">Tambah Data Kajian Ramadhan</thead></table></th>
	      <div class="row">
	        <div class="input-field col s12">
	          <input value="<?php echo $kode_otomatis; ?>" type="text" name="id_kr" required="required" readonly="readonly">
	          <label>ID Kajian</label>
	        </div>
	      </div>
	      <div class="row">
	      	<div class="input-field col s12">
	      		<input type="text" name="judul_kajian" required="required">
	      		<label>Judul Kajian</label>
	      	</div>
	      </div>
	      <div class="row">
	        <div class="input-field col s6">
	          	<input type="time" name="jam" required="required">
	      		<label>Jam</label>
	        </div>
	        <div class="input-field col s6">
	          	<input type="date" name="tanggal" required="required">
	      		<label>Tanggal Kajian</label>
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
	          	<input type="text" name="pengisi" required="required">
	      		<label>Pengisi Kajian</label>
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
	    $id_kr = @$_POST['id_kr'];
		$judul_kajian = @$_POST['judul_kajian'];
	    $tanggal = @$_POST['tanggal'];
	   	$jam = @$_POST['jam'];
  		$pengisi = @$_POST['pengisi'];

  		$sumber = @$_FILES['gambar']['tmp_name'];
  		$target = '../img/k_ramadhan/';
  		$nama_gambar = @$_FILES['gambar']['name'];

		$tambah_kr = @$_POST['tambah'];

		if($tambah_kr){
			if($id_kr == "" || $judul_kajian == "" || $tanggal == "" || $jam == "" || $nama_gambar == "" || $pengisi == ""){
				?>
				<script type="text/javascript">
					alert("Field Masih Ada yang Kosong");
				</script>
				<?php 
			} else {
				$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
				if($pindah){
				mysqli_query($db, "INSERT INTO kajian_ramadhan(id_kr,judul_kajian,tanggal,jam,gambar,pengisi) VALUES('$id_kr','$judul_kajian','$tanggal','$jam','$nama_gambar','$pengisi')") 
				or die ($db->error);
				?>
				<script type="text/javascript">
					alert("Tambah Data Kajian Ramadhan Berhasil");
					window.location.href="?page=kajian-ramadhan";
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