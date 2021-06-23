<?php
include("db_connect.php");
$cp_id=$_POST['cp_id'];
$college_id=$_POST["college_id"];
$college_photo=$_POST["college_photo"];
$sql="update  college_photos  set college_id='$college_id',college_photos='$college_photos' where  college_photo_id='$cp_id'";
mysql_query($sql);
?>
<script>
alert("college_courses are updated");
document.location="college_photos_view.php?c_id=<?php echo $college_id; ?>";
</script>