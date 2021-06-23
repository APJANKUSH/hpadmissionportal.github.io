<?php
include("db_connect.php");
$college_name=$_POST["college_name"];
$address=$_POST["address"];
$landmark=$_POST["landmark"];
$city=$_POST["city"];
$state=$_POST["state"];
$pincode=$_POST["pincode"];
$website=$_POST["website"];
$contact_person=$_POST["contact_person"];
$contact_number=$_POST["contact_number"];
$email=$_POST["email_id"];

$college_type=$_POST["college_type"];
$college_desc=$_POST["college_desc"];

$prospectus=basename($_FILES["prospectus"]["name"]);
$target="file/".$_FILES["prospectus"]["name"];
move_uploaded_file($_FILES["prospectus"]["tmp_name"],$target);

$college_photo=basename($_FILES["college_photo"]["name"]);
$target="file/".$_FILES["college_photo"]["name"];
move_uploaded_file($_FILES["college_photo"]["tmp_name"],$target);

$college_logo=$_FILES["college_logo"]["name"];
$tmp_location=$_FILES["college_logo"]["tmp_name"];
$target="../college_photo/college_logo/".$college_logo;
move_uploaded_file($tmp_location,$target);

$sql="insert into college_details values(null,'$college_name','$address','$landmark','$city','$state','$pincode','$website','$contact_person','$contact_number','$email','$college_desc','$prospectus','$college_photo','$college_logo','$college_type')";
mysql_query($sql);
$sql="insert into login values('$email','123456','college','What is your email?','$email','active')";
mysql_query($sql);
?>
<script>
alert("college_details are inserted");
document.location="college_details_view.php";
</script>