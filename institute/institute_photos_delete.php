<?php
include("db_connect.php");
$e_id=$_REQUEST['ip_id'];
$sql="delete from institute_photos where institute_photo_id='$e_id'";
mysql_query($sql);
?>
<script>
alert("value is deleted");
document.location="institute_photos_view.php";
</script>