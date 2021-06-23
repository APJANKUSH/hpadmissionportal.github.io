<?php
include("db_connect.php");
$c_id=$_POST['c_id'];
$college_name=$_POST["college_name"];
$address=$_POST["address"];
$landmark=$_POST["landmark"];
$city=$_POST["city"];
$state=$_POST["state"];
$pincode=$_POST["pincode"];
$website=$_POST["website"];
$contact_person=$_POST["contact_person"];
$contact_number=$_POST["contact_number"];
$email_id=$_POST["email_id"];
$college_type=$_POST["college_type"];
 $sql="update  college_details  set college_name='$college_name',address='$address',landmark='$landmark',city='$city',state='$state',pincode='$pincode',website='$website',contact_person='$contact_person',contact_number='$contact_number',email_id='$email_id',college_type='$college_type' where college_id='$c_id'";
mysql_query($sql);
?>
<script>
alert("college_details are updated");
document.location="college_details_view.php";
</script>