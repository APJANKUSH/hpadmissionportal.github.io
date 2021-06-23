<?php
session_start();
$r_id=$_SESSION["reg_id"];
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$adr=$_POST["address"];
$dob=$_POST["dob"];
$age=$_POST["age"];
$gen=$_POST["gender"];
$caste=$_POST["caste"];
$categories=$_POST["categories"];
$mobile=$_POST["mobile"];

$qulaification=$_POST["qualification"];
$university_name=$_POST["university_name"];
$year_of_passing=$_POST["year_of_passing"];
$obtained_marks=$_POST["obtained_marks"];
$total_marks=$_POST["total_marks"];
$percentage=$_POST["percentage"];
include("connection.php");
 $sql="update registration_details set first_name='$fn',last_name='$ln',gender='$gen',address='$adr',mobile_no='$mobile',qualification='$qualification',university_name='$university_name',year_of_passing='$year_of_passing',obtained_marks='$obtained_marks',total_marks='$total_marks',percentage='$percentage' where reg_id='$r_id'";
mysql_query($sql);
?>
<script type="text/javascript">
	alert("Profile Update successfully");
	document.location="profile.php";
</script>
