<?php 

$id = @$_GET['gid_id'];
mysqli_query($db, "DELETE FROM gallery_id where gid_id = '$id'") or die($db->error);

?>

<script type="text/javascript">
	window.location.href="?page=gallery-id";
</script>