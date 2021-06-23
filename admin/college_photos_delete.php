<?php
include("db_connect.php");
$college_id=$_REQUEST["c_id"];
$e_id=$_REQUEST['cp_id'];
$sql="delete from college_photos where college_photo_id='$e_id'";
mysql_query($sql);
?>
<script>
alert("value is deleted");
document.location="college_photos_view.php?c_id=<?php echo $college_id; ?>";
</script>