<?php
session_start();
$reg_id=$_SESSION["reg_id"];
$cc_id=$_REQUEST["cc_id"];
$applied_date=date("Y-m-d");
$application_status="pending";
include("connection.php");
$sql="insert into institute_applications values(null,'$reg_id','$cc_id','$applied_date','$application_status')";
mysql_query($sql);
?>
<script type="text/javascript">
alert("Your request sent successfully");
history.back();
</script>