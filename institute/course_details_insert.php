<?php
include("db_connect.php");
$course_name=$_POST["course_name"];
$description=$_POST["description"];
$duration=$_POST["duration"];
$eligibility_criteria=$_POST["criteria"];
$requirements=$_POST["requirements"];
$course_type=$_POST["course_type"];
$course_stream=$_POST["course_stream"];
$course_substream=$_POST["course_substream"];
$sql="insert into course_details values(null,'$course_name','$description','$duration','$eligibility_criteria','$requirements','$course_stream','$course_type','$course_substream')";
mysql_query($sql);
?>
<script>
alert("ccourse_details are inserted");
document.location="course_details_view.php";
</script>