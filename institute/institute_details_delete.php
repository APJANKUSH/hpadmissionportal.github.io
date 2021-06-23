<?php
include("db_connect.php");
$i_id=$_REQUEST['i_id'];
$sql="delete from institute_details where institute_id='$i_id'";
mysql_query($sql);
?>
<script>
alert("value is deleted");
document.location="institute_details_view.php";
</script>