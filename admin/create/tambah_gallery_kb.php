<body>
	<div class="container">
		<div class="row">
			<br>
			<label><a href="?page=gallery-kb" class="btn-floating btn-medium waves-effect waves-light green darken-1"><i class="material-icons">dehaze</i></a> View Data Gallery</label>
			<div class="divider"></div>
			<form class="col s12" method="post" enctype="multipart/form-data">
	    	<table><thead><th class="center">Tambah Gallery</thead></table></th>
		      <div class="row">
			        <div class="input-field col s12">
			        	<p>Kajian Bulanan</p>
					    <select name="id_kb">
					      <option value="" disabled selected>Pilih ID Kajian Bulanan</option>
					      <?php 
					      	$sql_km = mysqli_query($db, "select * from kajian_bulanan order by judul_kajian asc") or die ($db->error);
					      	while ($data_km = mysqli_fetch_array($sql_km)) {
					      		echo '<option value="'.$data_km['id_kb'].'">'.$data_km['id_kb'].' - '.$data_km['judul_kajian'].' </option>';
					      	}
					       ?>
					    </select>
					</div>
				</div>
			  <div class="row">
			  	<div class="input-field col s12">
			  		<p>Gambar</p>
		         	<input type="file" name="gambar_kb[]" multiple required="required">
			  	</div>
			  </div>
		      <div class="row">
		        <div class="input-field col s12">
		        	<p>Keterangan</p>
		          	<input type="text" name="keterangan_kb" required="required">
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
	    $id_kb = @$_POST['id_kb'];
	    $keterangan_kb = @$_POST['keterangan_kb'];

			if (isset($_POST["tambah"])) {
				$jumlah = count($_FILES['gambar_kb']['name']);
				if ($jumlah > 0) {
					for ($i=0; $i < $jumlah; $i++) { 
						$file_name = $_FILES['gambar_kb']['name'][$i];
						$tmp_name = $_FILES['gambar_kb']['tmp_name'][$i];				
						move_uploaded_file($tmp_name, "../img/k_bulanan/".$file_name);
						mysqli_query($db,"INSERT INTO gallery_kb(gid_kb,id_kb,keterangan_kb,gambar_kb) VALUES('','$id_kb','$keterangan_kb','$file_name')") or die ($db->error);	
					} ?>
						<script type="text/javascript">
						alert("Tambah Data Gallery Berhasil");
						window.location.href="?page=gallery-kb";
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