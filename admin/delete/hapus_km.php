<?php 

$id = @$_GET['id_km'];
mysqli_query($db, "DELETE FROM kajian_mingguan where id_km = '$id'") or die($db->error);

?>

<script type="text/javascript">
	window.location.href="?page=kajian-mingguan";
</script>