<?php
include("db_connect.php");
$external_course_name=$_POST["external_name"];
$external_course_description=$_POST["external_description"];
$external_course_duration=$_POST["external_duration"];
$external_course_eligibility=$_POST["external_eligibility"];
$external_additional_requirements=$_POST["requirements"];
$sql="insert into external_course values(null,'$external_course_name','$external_course_description','$external_course_duration','$external_course_eligibility','$external_additional_requirements')";
mysql_query($sql);
?>
<script>
alert("external_course are inserted");
document.location="external_course_view.php";
</script>