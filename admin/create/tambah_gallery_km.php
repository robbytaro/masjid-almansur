<body>
	<div class="container">
		<div class="row">
			<br>
			<label><a href="?page=gallery-km" class="btn-floating btn-medium waves-effect waves-light green darken-1"><i class="material-icons">dehaze</i></a> View Data Gallery</label>
			<div class="divider"></div>
			<form class="col s12" method="post" enctype="multipart/form-data">
	    	<table><thead><th class="center">Tambah Gallery</thead></table></th>
		      <div class="row">
			        <div class="input-field col s12">
			        	<p>Kajian Mingguan</p>
					    <select name="id_km">
					      <option value="" disabled selected>Pilih ID Kajian Mingguan</option>
					      <?php 
					      	$sql_km = mysqli_query($db, "select * from kajian_mingguan order by judul_kajian asc") or die ($db->error);
					      	while ($data_km = mysqli_fetch_array($sql_km)) {
					      		echo '<option value="'.$data_km['id_km'].'">'.$data_km['id_km'].' - '.$data_km['judul_kajian'].' </option>';
					      	}
					       ?>
					    </select>
					</div>
				</div>
			  <div class="row">
			  	<div class="input-field col s12">
			  		<p>Gambar</p>
		         	<input type="file" name="gambar_km[]" multiple required="required">
			  	</div>
			  </div>
		      <div class="row">
		        <div class="input-field col s12">
		        	<p>Keterangan</p>
		          	<input type="text" name="keterangan_km" required="required">
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
	    $keterangan_km = @$_POST['keterangan_km'];

			if (isset($_POST["tambah"])) {
				$jumlah = count($_FILES['gambar_km']['name']);
				if ($jumlah > 0) {
					for ($i=0; $i < $jumlah; $i++) { 
						$file_name = $_FILES['gambar_km']['name'][$i];
						$tmp_name = $_FILES['gambar_km']['tmp_name'][$i];				
						move_uploaded_file($tmp_name, "../img/k_mingguan/".$file_name);
						mysqli_query($db,"INSERT INTO gallery_km(gid_km,id_km,keterangan_km,gambar_km) VALUES('','$id_km','$keterangan_km','$file_name')") or die ($db->error);	
					} ?>
						<script type="text/javascript">
						alert("Tambah Data Gallery Berhasil");
						window.location.href="?page=gallery-km";
						</script>
						<?php
				} else {
					?>
						<script type="text/javascript">
						alert("Gagal Input Data");
						</script>
					<?php 
				}
			}
		?>
		</div>
	</div>
</body>