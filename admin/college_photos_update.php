<?php
include("db_connect.php");
$cp_id=$_POST['cp_id'];
$college_id=$_POST["college_id"];
//$photo=$_POST["photo"];
$photo=$_FILES["photo"]["name"];
$tmp_location=$_FILES["photo"]["tmp_name"];
$target="../college_photo/".$photo;
move_uploaded_file($tmp_location,$target);

$sql="update  college_photos  set college_id='$college_id',college_photo='$photo' where  college_photo_id='$cp_id'";
mysql_query($sql);
?>
<script>
alert("college_courses are updated");
document.location="college_photos_view.php?c_id=<?php echo $college_id; ?>";
</script>