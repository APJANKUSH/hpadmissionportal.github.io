<?php
include("db_connect.php");
$r_id=$_POST['r_id'];
$name=$_POST["name"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$mobile_no=$_POST["mobile_no"];
$email=$_POST["email"];
$qualification=$_POST["qualification"];
$sql="update registration_details set name='$name',gender='$gender',address='$address',mobile_no='$mobile_no',email='$email',qualification='$qualification' where reg_id='$r_id'";
mysql_query($sql);
?>
<script>
alert("registration_details are updated");
document.location="registration_details_view.php";
</script>