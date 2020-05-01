<?php 

$id = @$_GET['id'];
mysqli_query($db, "DELETE FROM program_masjid where id = '$id'") or die ($db->error);

?>

<script type="text/javascript">
	window.location.href="?page=program-masjid";
</script>