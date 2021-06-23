<?php
include("db_connect.php");
$e_id=$_REQUEST['ec_id'];
$sql="delete from external_courses where ec_id='ec_id'";
mysql_query($sql);
?>
<script>
alert("value is deleted");
document.location="external_courses_view.php";
</script>