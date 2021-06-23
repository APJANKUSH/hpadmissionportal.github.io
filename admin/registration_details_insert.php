<?php
include("db_connect.php");
$name=$_POST["name"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$mobile_no=$_POST["mobile_no"];
$email=$_POST["email"];
$qualification=$_POST["qualification"];
$sql="insert into registration_details values(null,'$name','$gender','$address','$mobile_no','$email','$qualification')";
mysql_query($sql);
?>
<script>
alert("registration_details are inserted");
document.location="registration_details_view.php";
</script>              

           