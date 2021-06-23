<?php
include("db_connect.php");
$e_id=$_REQUEST['ec_id'];
$sql="delete from external_course where external_course_id='$e_id'";
mysql_query($sql);
?>
<script>
alert("value is deleted");
document.location="external_course_view.php";
</script>