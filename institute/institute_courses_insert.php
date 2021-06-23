<?php
include("db_connect.php");
$instiute_id=$_POST["i_id"];
$external_course_id=$_POST["course_id"];
$course_fees=$_POST["fees"];
$sql="insert into institute_courses values(null,'$instiute_id','$external_course_id','$course_fees')";
mysql_query($sql);
?>
<script>
alert("institute_courses are inserted");
document.location="institute_courses_view.php";
</script>