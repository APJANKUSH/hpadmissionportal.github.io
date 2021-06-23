<?php
include("db_connect.php");
$institute_name=$_POST["institute_name"];
$institute_address=$_POST["address"];
$institute_landmark=$_POST["landmark"];
$institute_city =$_POST["city"];
$institute_state=$_POST["state"];
$institute_pincode=$_POST["pincode"];
$institute_website=$_POST["website"];
$institute_contact_person=$_POST["institute_contact_person"];
$institute_contact_number=$_POST["contact_number"];
$institute_email_id=$_POST["institute_email_id"];

$image=$_FILES["image"]["name"];
$tmp_location=$_FILES["image"]["tmp_name"];
$target="../college_photo/institute_photos/".$image;
move_uploaded_file($tmp_location,$target);



$logo_institute=$_FILES["logo_institute"]["name"];
$tmp_location=$_FILES["logo_institute"]["tmp_name"];
$target="../college_photo/institute_logo/".$logo_institute;
move_uploaded_file($tmp_location,$target);

$sql="insert into institute_details values(null,'$institute_name','$institute_address','$institute_landmark','$institute_city ','$institute_state','$institute_pincode','$institute_website','$institute_contact_person','$institute_contact_number','$institute_email_id','$image','$logo_institute')";
mysql_query($sql);
$sql="insert into login values('$email','123456','institute','What is your email?','$email','active')";
mysql_query($sql);
?>
<script>
alert("institute_details are inserted");
document.location="institute_details_view.php";
</script>
