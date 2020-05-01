<?php 

$id = @$_GET['gid_kb'];
mysqli_query($db, "DELETE FROM gallery_kb where gid_kb = '$id'") or die($db->error);

?>

<script type="text/javascript">
	window.location.href="?page=gallery-kb";
</script>