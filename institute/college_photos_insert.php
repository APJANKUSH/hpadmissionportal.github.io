<?php
include("db_connect.php");
$college_id=$_POST["college_id"];
$photo=$_POST["photo"];

$photo=$_FILES["photo"]["name"];
$tmp_location=$_FILES["photo"]["tmp_name"];
$target="../college_photo/".$photo;
move_uploaded_file($tmp_location,$target);


$sql="insert into college_photos values(null,'$college_id','$photo')";
mysql_query($sql);
?>
<script>
alert("college_photos are inserted");
document.location="college_photos_view.php";
</script>
