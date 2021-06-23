<?php
include("db_connect.php");
$e_id=$_REQUEST['r_id'];
$sql="delete from registration_details where reg_id='$e_id'";
mysql_query($sql);
?>
<script>
alert("value is deleted");
document.location="registration_details_view.php";
</script>