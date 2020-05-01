<?php 

$id = @$_GET['id_kr'];
mysqli_query($db, "DELETE FROM kajian_ramadhan where id_kr = '$id'") or die($db->error);

?>

<script type="text/javascript">
	window.location.href="?page=kajian-ramadhan";
</script>