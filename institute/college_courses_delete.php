<?php
include("db_connect.php");
$e_id=$_REQUEST['cc_id'];
$sql="delete from college_courses where college_course_id='$e_id'";
mysql_query($sql);
?>
<script>
alert("value is deleted");
document.location="college_courses_view.php";
</script>