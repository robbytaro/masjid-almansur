<?php 

$id = @$_GET['gid_kr'];
mysqli_query($db, "DELETE FROM gallery_kr where gid_kr = '$id'") or die($db->error);

?>

<script type="text/javascript">
	window.location.href="?page=gallery-kr";
</script>