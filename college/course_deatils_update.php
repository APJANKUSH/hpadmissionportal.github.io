<?php
include("db_connect.php");
$c_id=$_POST['c_id'];
$course_name=$_POST["course_name"];
$description=$_POST["description"];
$duration=$_POST["duration"];
$criteria=$_POST["criteria"];
$requirements=$_POST["requirements"];
$sql="update  course_details  set course_name='$course_name',course_description='$description',course_duration='$duration',eligibilty_criteria='$criteria',additional_requirements='$requirements' where course_id='$c_id'";
mysql_query($sql);
?>
<script>
alert("courses_details are updated");
document.location="course_details_view.php";
</script>