<?php 

$id = @$_GET['id_id'];
mysqli_query($db, "DELETE FROM idul_adha where id_id = '$id'") or die($db->error);

?>

<script type="text/javascript">
	window.location.href="?page=idul-adha";
</script>