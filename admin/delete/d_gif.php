<?php 

$id = @$_GET['gid_if'];
mysqli_query($db, "DELETE FROM gallery_if where gid_if = '$id'") or die($db->error);

?>

<script type="text/javascript">
	window.location.href="?page=gallery-if";
</script>