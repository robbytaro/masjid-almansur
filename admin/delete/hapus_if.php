<?php 

$id = @$_GET['id_if'];
mysqli_query($db, "DELETE FROM idul_fitri where id_if = '$id'") or die($db->error);

?>

<script type="text/javascript">
	window.location.href="?page=idul-fitri";
</script>