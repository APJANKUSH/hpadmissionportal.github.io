<?php
include("db_connect.php");
$e_id=$_REQUEST['c_id'];
$sql="delete from course_details where course_id='$e_id'";
mysql_query($sql);
?>
<script>
alert("value is deleted");
document.location="course_details_view.php";
</script>