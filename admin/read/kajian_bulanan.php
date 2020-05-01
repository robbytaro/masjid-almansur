<body>
		<div class="row">
			<br>
			<label><a href="?page=kajian-bulanan&action=tambah-kajian-bulanan" class="btn-floating btn-medium waves-effect waves-light blue darken-1"><i class="material-icons">add</i></a> Tambah Data</label>
			<div class="divider"></div>
			<table class="responsive-table striped highlight">
				<h5 class="center"><b>Data Kajian Bulanan</h5></b>
		        <thead class="blue darken-1">
		        	<div class="input-field col s6 right">
						<form action="" method="post">
							<i class="material-icons prefix">search</i>
							<input type="text" name="cari_kb" placeholder="Cari Disini">
							<input type="submit" name="cari_skr" value="Cari" hidden="hidden">
						</form>
					</div>
		          <tr>
		          	  <th class="center white-text">Nomor</th>
		              <th class="center white-text">ID Kajian</th>
		              <th class="center white-text">Judul Kajian</th>
		              <th class="center white-text">Pengisi Kajian</th>
		              <th class="center white-text">Tanggal Kajian</th>
		              <th class="center white-text">Gambar</th>
		              <th class="center white-text">Keterangan</th>
		              <th class="center white-text">Aksi</th>
		          </tr>
		        </thead>
		        <?php 
		        $no = 1;

		        $batas = 5;
		        $hal = @$_GET['hal'];
		        if(empty($hal)){
		        	$posisi = 0;
		        	$hal	= 1;
		        } else {
		        	$posisi = ($hal - 1) * $batas;
		        }

				$cari_kb = @$_POST['cari_kb'];
				$cari_skr = @$_POST['cari_skr'];
				if($cari_skr){
					if($cari_kb != "") {
						$sql = mysqli_query($db, "SELECT * FROM kajian_bulanan where id_kb like '%$cari_kb%' or judul_kajian like '%$cari_kb%' or tanggal_kajian like '%$cari_kb%' or pengisi_kajian like '%$cari_kb%'") or die ($db->error);
					} else {
						$sql = mysqli_query($db, "SELECT * FROM kajian_bulanan LIMIT $posisi, $batas") or die ($db->error);
					}
				} else {
						$sql = mysqli_query($db, "SELECT * FROM kajian_bulanan LIMIT $posisi, $batas") or die ($db->error);
				}

				$no = $posisi + 1;
				$cek = mysqli_num_rows($sql);
				if($cek < 1) {
					?>
					<tr>
						<td colspan="7" class="center" style="padding: 10px;">Data Tidak di Temukan</td>
					</tr>
					<?php
				} else {
					while($data = mysqli_fetch_array($sql)) {
				?>
		        <tbody>
		          <tr>
		          	<td class="center"><?php echo $no++; ?></td>
		            <td class="center"><?php echo $data['id_kb']; ?></td>
		            <td class="center"><?php echo $data['judul_kajian']; ?></td>
		            <td class="center"><?php echo $data['pengisi_kajian']; ?></td>
		            <td class="center"><?php echo $data['tanggal_kajian']; ?></td>
		            <td class="center"><img src="../img/k_bulanan/<?php echo $data['gambar']; ?>" width="120px"></td>
		            <td class="center"><?php echo $data['keterangan']; ?></td>
		            <td class="center" width="15%">
		            	<a href="?page=kajian-bulanan&action=edit-kajian-bulanan&id_kb=<?php echo $data['id_kb']; ?>" class="btn-floating btn-small waves-effect waves-light cyan"><i class="material-icons">edit</i></a> |
		            	<a onclick="return confirm('Ingin Menghapus Data Ini?')" href="?page=kajian-bulanan&action=hapus-kajian-bulanan&id_kb=<?php echo $data['id_kb']; ?>" class="btn-floating btn-small waves-effect waves-light red darken-1"><i class="material-icons">delete</i></a> </td>
		          </tr>
					<?php 
		      		}
		  			}
		       		?>
		       </tbody>
		    </table>
		    <div class="row" style="margin-top: 10px; margin-left: 20px; float: left;">
		    	<?php 
		    		$jumlah = mysqli_num_rows(mysqli_query($db, "SELECT * FROM kajian_bulanan"));
		    		echo "<u>Jumlah Data : <b>".$jumlah."</b></u>";
		    	 ?>
		    </div>

		    <ul class="row pagination" style="margin-top: 10px; margin-right: 20px; float: right;">
		    	<?php 
		    		$jumlah_hal = ceil($jumlah / $batas);
		    		for ($i=1; $i <= $jumlah_hal; $i++){
		    			if($i != $hal){
		    				echo "<a href='?page=kajian-bulanan&hal=$i'><button class='btn blue lighten-1 btn-small'>$i</button></a>";
		    			} else {
		    				echo "<button class='btn grey darken-1 btn-small'>$i</button></a>";
		    			}
		    		}
		    	 ?>
		    </ul>
	</div>
</body>