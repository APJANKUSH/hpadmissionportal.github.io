<?php
include("db_connect.php");
$institute_id=$_REQUEST["i_id"];
$e_id=$_REQUEST['ip_id'];
$sql="delete from institute_photos where institute_photo_id='$e_id'";
mysql_query($sql);
?>
<script>
alert("value is deleted");
document.location="institute_photos_view.php?i_id=<?php echo $institute_id; ?>";
</script>