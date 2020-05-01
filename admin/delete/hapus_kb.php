<?php 

$id = @$_GET['id_kb'];
mysqli_query($db, "DELETE FROM kajian_bulanan where id_kb = '$id'") or die($db->error);

?>

<script type="text/javascript">
	window.location.href="?page=kajian-bulanan";
</script>