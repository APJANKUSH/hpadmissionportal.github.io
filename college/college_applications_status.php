<?php
include("db_connect.php");
$application_id=$_REQUEST['application_id'];

$sql="update college_applications set application_status='approved' where application_id='$application_id'";
mysql_query($sql);
?>
<script>
alert("approved");
document.location="college_applications.php";
</script>