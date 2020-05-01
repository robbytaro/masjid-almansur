<body>
		<div class="row">
			<br>
			<label><a href="?page=sholat-jumat&action=tambah-sholat-jumat" class="btn-floating btn-medium waves-effect waves-light blue darken-1"><i class="material-icons">add</i></a> Tambah Data</label>
			<div class="divider"></div>
			<table class="striped highlight responsive-table">
				<h5 class="center"><b>Data Sholat Jum'at</h5></b>
		        <thead class="blue darken-1">
		        	<div class="input-field col s6 right">
		        		<form action="" method="post">
							<i class="material-icons prefix">search</i>
							<input type="text" name="cari_sj" placeholder="Cari Disini">
							<input type="submit" name="cari_skr" value="Cari" hidden="hidden">
						</form>
					</div>
		          <tr>
		              <th class="center white-text">No</th>
		              <th class="center white-text">Judul Tausiyah</th>
		              <th class="center white-text">Tanggal</th>
		              <th class="center white-text">Waktu</th>
		              <th class="center white-text">Tempat</th>
		              <th class="center white-text">Khotib</th>
		              <th class="center white-text">Imam</th>
		              <th class="center white-text">Mu'adzin</th>
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

				$cari_sj = @$_POST['cari_sj'];
				$cari_skr = @$_POST['cari_skr'];
				if($cari_skr){
					if($cari_sj != "") {
						$sql = mysqli_query($db, "SELECT * FROM sholat_jumat where id like '%$cari_sj%' or judul_tausiyah like '%$cari_sj%' or tanggal like '%$cari_sj%' or tempat like '%$cari_sj%' or waktu like '%$cari_sj%' or khotib like '%$cari_sj%' or imam like '%$cari_sj%' or muadzin like '%$cari_sj%'") or die ($db->error);
					} else {
						$sql = mysqli_query($db, "SELECT * FROM sholat_jumat LIMIT $posisi, $batas") or die ($db->error);
					}
				} else {
						$sql = mysqli_query($db, "SELECT * FROM sholat_jumat LIMIT $posisi, $batas") or die ($db->error);
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
		          <tr>
		            <td class="center"><?php echo $no++; ?></td>
		            <td class="center"><?php echo $data['judul_tausiyah']; ?></td>
		            <td class="center"><?php echo $data['tanggal']; ?></td>
		            <td class="center"><?php echo $data['waktu']; ?></td>
		            <td class="center"><?php echo $data['tempat']; ?></td>
		            <td class="center"><?php echo $data['khotib']; ?></td>
		            <td class="center"><?php echo $data['imam']; ?></td>
		            <td class="center"><?php echo $data['muadzin']; ?></td>
		            <td class="center" width="15%">
		            <a href="?page=sholat-jumat&action=edit-sholat-jumat&id=<?php echo $data['id']; ?>" class="btn-floating btn-small waves-effect waves-light cyan"><i class="material-icons">edit</i></a> |
		            <a onclick="return confirm('Ingin Menghapus Data Ini?')" href="?page=sholat-jumat&action=hapus-sholat-jumat&id=<?php echo $data['id']; ?>" class="btn-floating btn-small waves-effect waves-light red darken-1"><i class="material-icons">delete</i></a></td>
		          </tr>
		          <?php 
		      		}
		  			}
		       		?>
		       </tbody>
		    </table>
		    <div class="row" style="margin-top: 10px; margin-left: 20px; float: left;">
		    	<?php 
		    		$jumlah = mysqli_num_rows(mysqli_query($db, "SELECT * FROM sholat_jumat"));
		    		echo "<u>Jumlah Data : <b>".$jumlah."</b></u>";
		    	 ?>
		    </div>

		    <ul class="row pagination" style="margin-top: 10px; margin-right: 20px; float: right;">
		    	<?php 
		    		$jumlah_hal = ceil($jumlah / $batas);
		    		for ($i=1; $i <= $jumlah_hal; $i++){
		    			if($i != $hal){
		    				echo "<a href='?page=sholat-jumat&hal=$i'><button class='btn blue lighten-1 btn-small'>$i</button></a>";
		    			} else {
		    				echo "<button class='btn grey darken-1 btn-small'>$i</button></a>";
		    			}
		    		}
		    	 ?>
		    </ul>
	</div>
</body>