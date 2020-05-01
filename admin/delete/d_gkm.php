<?php 

$id = @$_GET['gid_km'];
mysqli_query($db, "DELETE FROM gallery_km where gid_km = '$id'") or die($db->error);

?>

<script type="text/javascript">
	window.location.href="?page=gallery-km";
</script>