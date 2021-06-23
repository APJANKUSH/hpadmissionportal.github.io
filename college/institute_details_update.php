<?php
include("db_connect.php");
$i_id=$_POST['i_id'];
$institute_name=$_POST["institute_name"];
$institute_address=$_POST["address"];
$institute_landmark=$_POST["landmark"];
$institute_city=$_POST["city"];
$institute_state=$_POST["state"];
$institute_pincode=$_POST["pincode"];
$institute_website=$_POST["website"];
$institute_contact_person=$_POST["institute_contact_person"];
$institute_contact_number=$_POST["contact_number"];
$institute_email_id=$_POST["institute_email_id"];
$sql="update  institute_details  set institute_name='$institute_name',institute_address='$institute_address',institute_landmark='$institute_landmark',institute_city='$institute_city',institute_state='$institute_state',institute_pincode='$institute_pincode',institute_website='$institute_website',institute_contact_person='$institute_contact_person',institute_contact_number='$institute_contact_number',institute_email_id='$institute_email_id' where institute_id='$i_id'";
mysql_query($sql);
?>
<script>
alert("institute_details are updated");
document.location="institute_details_view.php";
</script>