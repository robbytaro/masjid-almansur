<!-- Koneksi ke Database -->
<?php 
@session_start();
include "../config/koneksi.php";

if(@$_SESSION['admin']){
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" type="image/png" href="../img/logo.png">
	<title>Administrator | Masjid Al-Mansur</title>

	<!-- Memanggil fungsi CSS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	<div class="navbar-fixed">
		<nav class="orange accent-3" role="navigation">
			<div class="nav-wrapper">
				<a id="logo" href="/masjid-almansur">Page Administrator | Sisfo Masjid Al-Mansur</a>
				<ul class="right hide-on-med-and-down">
			        <li><a href="#!"><span class="dropdown-trigger white-text" data-target="dropdown1"><i class="material-icons right">arrow_drop_down</i>Kajian</a></li></span>
			        <li><a href="#!"><span class="dropdown-trigger white-text" data-target="dropdown2"><i class="material-icons right">arrow_drop_down</i>Hari Raya</a></li></span>
			        <li><a href="?page=sholat-jumat"><span class="white-text"></i>Sholat Jum'at</a></li></span>
			        <li><a href="?page=program-masjid"><span class="white-text">Program Masjid</a></li></span>
			        <li><a href="#!"><span class="dropdown-trigger white-text" data-target="dropdown3"><i class="material-icons right">arrow_drop_down</i>Gallery Kegiatan</a></li></span>
			        <li class="red darken-5"><a href="logout.php"><span class="white-text">Log Out</a></li></span>
			    </ul>

			    <!-- Target Dropdown1 -->
		        <ul id='dropdown1' class='dropdown-content orange accent-3'>
		           <li><a href="?page=kajian-mingguan"><span class="white-text">Kajian Mingguan</a></li></span>
		           <li><a href="?page=kajian-bulanan"><span class="white-text">Kajian Bulanan</a></li></span>
		           <li><a href="?page=kajian-ramadhan"><span class="white-text">Kajian Ramadhan</a></li></span>
		        </ul>

		        <!-- Target Dropdown3 -->
		        <ul id='dropdown3' class='dropdown-content orange accent-3'>
		           <li><a href="?page=gallery-km"><span class="white-text">Gallery Mingguan</a></li></span>
		           <li><a href="?page=gallery-kb"><span class="white-text">Gallery Bulanan</a></li></span>
		           <li><a href="?page=gallery-kr"><span class="white-text">Gallery Ramadhan</a></li></span>
		           <li><a href="?page=gallery-if"><span class="white-text">Gallery IdulFitri</a></li></span>
		           <li><a href="?page=gallery-id"><span class="white-text">Gallery Idul Adha</a></li></span>
		           <li><a href="?page=gallery-promas"><span class="white-text">Gallery Program Masjid</a></li></span>
		        </ul>

		        <!-- Target Dropdown2 -->
		        <ul id='dropdown2' class='dropdown-content orange accent-3'>
		           <li><a href="?page=idul-fitri"><span class="white-text">Idul Fitri</a></li></span>
		           <li><a href="?page=idul-adha"><span class="white-text">Idul Adha</a></li></span>
		        </ul>
			</div>
		</nav>
	</div>

	<div class="container z-depth-2" style="min-height: 580px;">
		<div class="section">
			<!-- Page Dinamis PHP -->
		        <?php 
					$page = @$_GET['page'];
					$action = @$_GET['action'];

					if($page == "kajian-mingguan") {
						if($action == "") {
							include "../admin/read/kajian_mingguan.php";
						} else if($action == "tambah-kajian-mingguan") {
							include "../admin/create/tambah_km.php";
						} else if($action == "edit-kajian-mingguan") {
							include "../admin/update/edit_km.php";
						} else if($action == "hapus-kajian-mingguan") {
							include "../admin/delete/hapus_km.php";
						} else {
						echo "<script>alert('Anda Tidak Punya Hak Akses ke Halaman Ini!')</script>";
						}
					} else if($page == "kajian-bulanan") {
						if ($action == "") {
							include "../admin/read/kajian_bulanan.php";
						} else if($action == "tambah-kajian-bulanan") {
							include "../admin/create/tambah_kb.php";
						} else if($action == "hapus-kajian-bulanan") {
							include "../admin/delete/hapus_kb.php";
						} else if($action == "edit-kajian-bulanan") {
							include "../admin/update/edit_kb.php";
						} else {
						echo "<script>alert('Anda Tidak Punya Hak Akses ke Halaman Ini!')</script>";
						}
					} else if($page == "kajian-ramadhan") {
						if ($action == "") {
							include "../admin/read/kajian_ramadhan.php";
						} else if($action == "tambah-kajian-ramadhan") {
							include "../admin/create/tambah_kr.php";
						} else if($action == "hapus-kajian-ramadhan") {
							include "../admin/delete/hapus_kr.php";
						} else if($action == "edit-kajian-ramadhan") {
							include "../admin/update/edit_kr.php";
						} else {
						echo "<script>alert('Anda Tidak Punya Hak Akses ke Halaman Ini!')</script>";
						}
					} else if($page == "idul-fitri") {
						if ($action == "") {
							include "../admin/read/idul_fitri.php";
						} else if($action == "tambah-idul-fitri") {
							include "../admin/create/tambah_if.php";
						} else if($action == "hapus-idul-fitri") {
							include "../admin/delete/hapus_if.php";
						} else if($action == "edit-idul-fitri") {
							include "../admin/update/edit_if.php";
						} else {
						echo "<script>alert('Anda Tidak Punya Hak Akses ke Halaman Ini!')</script>";
						}
					} else if($page == "idul-adha") {
						if ($action == "") {
							include "../admin/read/idul_adha.php";
						} else if($action == "tambah-idul-adha") {
							include "../admin/create/tambah_id.php";
						} else if($action == "hapus-idul-adha") {
							include "../admin/delete/hapus_id.php";
						} else if($action == "edit-idul-adha") {
							include "../admin/update/edit_id.php";
						} else {
						echo "<script>alert('Anda Tidak Punya Hak Akses ke Halaman Ini!')</script>";
						}
					} else if($page == "sholat-jumat") {
						if ($action == "") {
							include "../admin/read/sholat_jumat.php";
						} else if($action == "tambah-sholat-jumat") {
							include "../admin/create/tambah_jumat.php";
						} else if($action == "hapus-sholat-jumat") {
							include "../admin/delete/hapus_jumat.php";
						} else if($action == "edit-sholat-jumat") {
							include "../admin/update/edit_jumat.php";
						} else {
						echo "<script>alert('Anda Tidak Punya Hak Akses ke Halaman Ini!')</script>";
						}
					} else if($page == "program-masjid") {
						if ($action == "") {
							include "../admin/read/program_masjid.php";
						} else if($action == "tambah-program-masjid") {
							include "../admin/create/tambah_promas.php";
						} else if($action == "hapus-program-masjid") {
							include "../admin/delete/hapus_promas.php";
						} else if($action == "edit-program-masjid") {
							include "../admin/update/edit_promas.php";
						} else {
						echo "<script>alert('Anda Tidak Punya Hak Akses ke Halaman Ini!')</script>";
						}
					} else if($page == "gallery-km") {
						if ($action == "") {
							include "../admin/read/v_gallery_km.php";
						} else if($action == "tambah-gallery-km") {
							include "../admin/create/tambah_gallery_km.php";
						} else if($action == "hapus-gallery-km") {
							include "../admin/delete/d_gkm.php";
						} else {
						echo "<script>alert('Anda Tidak Punya Hak Akses ke Halaman Ini!')</script>";
						}
					} else if($page == "gallery-kb") {
						if ($action == "") {
							include "../admin/read/v_gallery_kb.php";
						} else if($action == "tambah-gallery-kb") {
							include "../admin/create/tambah_gallery_kb.php";
						} else if($action == "hapus-gallery-kb") {
							include "../admin/delete/d_gkb.php";
						} else {
						echo "<script>alert('Anda Tidak Punya Hak Akses ke Halaman Ini!')</script>";
						}
					} else if($page == "gallery-kr") {
						if ($action == "") {
							include "../admin/read/v_gallery_kr.php";
						} else if($action == "tambah-gallery-kr") {
							include "../admin/create/tambah_gallery_kr.php";
						} else if($action == "hapus-gallery-kr") {
							include "../admin/delete/d_gkr.php";
						} else {
						echo "<script>alert('Anda Tidak Punya Hak Akses ke Halaman Ini!')</script>";
						}
					} else if($page == "gallery-if") {
						if ($action == "") {
							include "../admin/read/v_gallery_if.php";
						} else if($action == "tambah-gallery-if") {
							include "../admin/create/tambah_gallery_if.php";
						} else if($action == "hapus-gallery-if") {
							include "../admin/delete/d_gif.php";
						} else {
						echo "<script>alert('Anda Tidak Punya Hak Akses ke Halaman Ini!')</script>";
						}
					} else if($page == "gallery-id") {
						if ($action == "") {
							include "../admin/read/v_gallery_id.php";
						} else if($action == "tambah-gallery-id") {
							include "../admin/create/tambah_gallery_id.php";
						} else if($action == "hapus-gallery-id") {
							include "../admin/delete/d_gid.php";
						} else {
						echo "<script>alert('Anda Tidak Punya Hak Akses ke Halaman Ini!')</script>";
						}
					} else if($page == "gallery-promas") {
						if ($action == "") {
							include "../admin/read/v_gallery_promas.php";
						} else if($action == "tambah-gallery-promas") {
							include "../admin/create/tambah_gallery_promas.php";
						} else if($action == "hapus-gallery-promas") {
							include "../admin/delete/d_gpromas.php";
						} else {
						echo "<script>alert('Anda Tidak Punya Hak Akses ke Halaman Ini!')</script>";
						}
					} else if($page == "") {
						echo "<h5 class='center'>Selamat Datang di Halaman Utama Administrator.</h5>";
						echo "<p class='center'>di Page Administrator ini hanya Admin yang berhak memanipulasi data yang terdapat pada Sistem Informasi Masjid Al-Mansur.</p>";
					} else {
						echo "<center><img src='../img/404.jpg' width='20%'></center>";
						echo "<center><h4> 404, Tidak Ada Page Yang Aman! </h4></center>";
					}
				 ?>
		</div>
	</div>	

		<footer class="page-footer teal orange accent-3">
	    <div class="container">
	      <div class="row">
	        <div class="col l6 s12">
	          <h5 class="white-text">Masjid Al-Mansur</h5>
	          <p class="grey-text text-lighten-4"></p>
	        </div>
	      </div>
	    </div>
	    <div class="footer-copyright">
	      <div class="container">
	       © Copyright Hanya Milik Allah, <a class="brown-text text-lighten-1"> Allrights Reserved</a>
	       <a class="brown-text text-lighten-1 right"> Privacy Policy</a>
	     </div>
	  </footer>

	<!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
</body>
</html>
<?php } else { header("location: login.php"); } ?>