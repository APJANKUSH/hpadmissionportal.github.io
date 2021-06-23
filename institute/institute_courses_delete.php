<?php
include("db_connect.php");
$i_id=$_REQUEST["i_id"];
$e_id=$_REQUEST['ic_id'];
$sql="delete from institute_courses where institute_course_id='$e_id'";
mysql_query($sql);
?>
<script>
alert("value is deleted");
document.location="institute_courses_view.php?i_id=<?php echo $i_id; ?>";
</script>