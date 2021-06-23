<?php
include("db_connect.php");
$ic_id=$_POST['ic_id'];
$institute_id=$_POST["institute_Id"];
$external_course_id=$_POST["course_Id"];
$course_fees=$_POST["fees"];
$sql="update institute_courses set institute_id='$institute_id',external_course_id='$external_course_id',course_fees='$course_fees' where institute_course_id='$ic_id'";
mysql_query($sql);
?>
<script>
alert("institute_courses are updated");
document.location="institute_courses_view.php?i_id=<?php echo $institute_id; ?>";
</script>