<?php
include("db_connect.php");
$cc_id=$_POST['cc_id'];
$college_id=$_POST["c_id"];
$course_id=$_POST["course_id"];
$course_fees=$_POST["course_fees"];
$first_year_fees=$_POST["first_year_fees"];
$program_type=$_POST["program_type"];
$sql="update  college_courses  set college_id='$college_id',course_id='$course_id',course_fees='$course_fees',first_year_fees='$first_year_fees',program_type='$program_type' where college_course_id='$cc_id'";
mysql_query($sql);
?>
<script>
alert("college_courses are updated");
document.location="college_courses_view.php";
</script>