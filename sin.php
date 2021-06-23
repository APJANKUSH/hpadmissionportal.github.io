<?php
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$adr=$_POST["address"];
$dob=$_POST["dob"];
$age=$_POST["age"];
$gen=$_POST["gender"];
$caste=$_POST["caste"];
$categories=$_POST["categories"];
$email=$_POST["email_id"];
$mobile=$_POST["mobile"];
$uname=$email;
$password=$_POST["password"];
$type = $_POST["type"];
$question=$_POST["question"];
$answer=$_POST["answer"];
$qulaification=$_POST["qualification"];
$university_name=$_POST["university_name"];
$year_of_passing=$_POST["year_of_passing"];
$obtained_marks=$_POST["obtained_marks"];
$total_marks=$_POST["total_marks"];
$percentage=$_POST["percentage"];
include("connection.php");
  $sql="select * from login where username='$uname'";
  $res=mysql_query($sql);
  if(!$row=mysql_fetch_array($res))
  {

$target="student_photos/";
$target=$target.$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],$target);
$image=$_FILES["image"]["name"];



$sql="insert into registration_details values(null,'$fn','$ln','$dob','$gen','$adr','$mobile','$email','$qulaification','$university_name','$year_of_passing','$obtained_marks','$total_marks','$percentage','$caste','$categories','$image')";

mysql_query($sql);

$sid=mysql_insert_id();


$sql1="insert into login values('$uname','$password','$type','$question','$answer','active')";
mysql_query($sql1);




?>


<script type="text/javascript">
	alert("User Is  Registerd...");
	document.location="login.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
	alert("username already taken...");
	document.location="loginform.php";
</script>
<?php
}

?>