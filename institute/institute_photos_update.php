<?php
include("db_connect.php");
$ip_id=$_POST['ip_id'];
$institute_id=$_POST["institute_id"];
//$institute_photo=$_POST["file"];
$photo=$_FILES["photo"]["name"];
$tmp_location=$_FILES["photo"]["tmp_name"];
$target="../college_photo/institute_photos/".$photo;
move_uploaded_file($tmp_location,$target);

$sql="update  institute_photos  set institute_id='$institute_id',institute_photo='$photo' where   institute_photo_id='$ip_id'";
mysql_query($sql);
?>

<script>
alert("institute_photos are updated");
document.location="institute_photos_view.php?i_id=<?php echo $institute_id; ?>";
</script>


