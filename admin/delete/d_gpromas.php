<?php 

$id = @$_GET['gid_promas'];
mysqli_query($db, "DELETE FROM gallery_promas where gid_promas = '$id'") or die($db->error);

?>

<script type="text/javascript">
	window.location.href="?page=gallery-promas";
</script>