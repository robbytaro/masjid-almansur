<?php 

$id = @$_GET['id'];
mysqli_query($db, "DELETE FROM sholat_jumat where id = '$id'") or die($db->error);

?>

<script type="text/javascript">
	window.location.href="?page=sholat-jumat";
</script>