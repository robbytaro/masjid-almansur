<!-- Query Kode Otomatis -->
<?php 

		$query_kode = mysqli_query($db, "select max(id_km) from kajian_mingguan") or die($db->error);
		$data_kode = mysqli_fetch_array($query_kode);
		if($data_kode){
			$nilaikode = substr($data_kode[0], 1);
			$kode = (int) $nilaikode;
			$kode = $kode + 1;
			$kode_otomatis = "M".str_pad($kode, 3, "0", STR_PAD_LEFT);
		} else {
			$kode_otomatis = "M01";
		}
?>
<body>
	<div class="container">
		<div class="row">
			<br>
			<label><a href="?page=kajian-mingguan" class="btn-floating btn-medium waves-effect waves-light green darken-1"><i class="material-icons">dehaze</i></a> View Data Kajian Mingguan</label>
			<div class="divider"></div>
			<form class="col s12" method="post" enctype="multipart/form-data">
	    	<table><thead><th class="center">Tambah Data Kajian Mingguan</thead></table></th>
	      <div class="row">
	        <div class="input-field col s12">
	          <input type="text" name="id_km" value="<?php echo $kode_otomatis; ?>" readonly="readonly" required="required">
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
	          	<input type="text" name="pengisi_kajian" required="required">
	      		<label>Pengisi Kajian</label>
	        </div>
	        <div class="input-field col s6">
	          	<input type="date" name="tanggal_kajian" required="required">
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
	          	<input type="text" name="keterangan" required="required">
	      		<label>Keterangan</label>
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
	    $id_km = @$_POST['id_km'];
		$judul_kajian = @$_POST['judul_kajian'];
	    $pengisi_kajian = @$_POST['pengisi_kajian'];
	   	$tanggal_kajian = @$_POST['tanggal_kajian'];
  		$keterangan = @$_POST['keterangan'];

  		$sumber = @$_FILES['gambar']['tmp_name'];
  		$target = '../img/k_mingguan/';
  		$nama_gambar = @$_FILES['gambar']['name'];

		$tambah_km = @$_POST['tambah'];

		if($tambah_km){
			if($id_km == "" || $judul_kajian == "" || $pengisi_kajian == "" || $tanggal_kajian == "" || $nama_gambar == "" || $keterangan == ""){
				?>
				<script type="text/javascript">
					alert("Field Masih Ada yang Kosong");
				</script>
				<?php 
			} else {
				$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
				if($pindah){
				mysqli_query($db, "INSERT INTO kajian_mingguan(id_km,judul_kajian,pengisi_kajian,tanggal_kajian,gambar,keterangan) VALUES('$id_km','$judul_kajian','$pengisi_kajian','$tanggal_kajian','$nama_gambar','$keterangan')") 
				or die ($db->error);
				?>
				<script type="text/javascript">
					alert("Tambah Data Kajian Mingguan Berhasil");
					window.location.href="?page=kajian-mingguan";
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