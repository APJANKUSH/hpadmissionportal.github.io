<?php
include("db_connect.php");
$e_id=$_REQUEST['c_id'];
$sql="delete from college_details where college_id='$e_id'";
mysql_query($sql);
?>
<script>
alert("value is deleted");
document.location="college_details_view.php";
</script>