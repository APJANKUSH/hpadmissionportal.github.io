<?php
include("db_connect.php");
$institute_id=$_POST["i_id"];
//$institute_photo=$_POST["file"];

$photo=$_FILES["photo"]["name"];
$tmp_location=$_FILES["photo"]["tmp_name"];
$target="../college_photo/institute_photos/".$photo;
move_uploaded_file($tmp_location,$target);

$sql="insert into institute_photos values(null,'$institute_id','$photo')";
mysql_query($sql);
?>
<script>
alert("institute values are inserted");
document.location="institute_photos_view.php";
</script>              
