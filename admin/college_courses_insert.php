<?php
include("db_connect.php");
$college_id=$_POST["college_id"];
$course_id=$_POST["course_id"];
$course_fees=$_POST["course_fees"];
$first_year_fees=$_POST["first_year_fees"];
$program_type=$_POST["program_type"];
$sql="insert into college_courses values(null,'$college_id','$course_id','$course_fees','$first_year_fees','$program_type')";
mysql_query($sql);
?>
<script>
alert("college_courses are inserted");
document.location="college_courses_view.php?c_id=<?php echo $college_id; ?>";
</script>