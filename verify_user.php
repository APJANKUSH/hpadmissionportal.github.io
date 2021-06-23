<?php
session_start();
require_once('connection.php');
$username=$_POST["username"];
$password=$_POST["password"];

$sql="select * from login where username='$username' and password='$password'";

$res=mysql_query($sql);
if($row=mysql_fetch_array($res))
{
$type=$row["type"];
$_SESSION["uname"]=$username;
if($type=="admin")
{

?>
<script>
document.location="admin/home.php";
</script>
<?php
}
else if($type=="student")
{
$sql="select * from registration_details where email='$username'";

$res=mysql_query($sql);
$row=mysql_fetch_array($res);
 $_SESSION["sname"]=$row["first_name"]." ".$row["last_name"];
 $_SESSION["reg_id"]=$row["reg_id"];
?>
<script>
document.location="index.php";
</script>
<?php

}
else if($type=="college")
{
	$sql="select * from college_details where email_id='$username'";
	$res=mysql_query($sql);
$row=mysql_fetch_array($res);
$_SESSION["college_id"]=$row["college_id"];
$_SESSION["college_name"]=$row["college_name"];
?>
<script>
document.location="college/home.php";
</script>
<?php

}
else if($type=="institute")
{
	$sql="select * from institute_details where institute_email_id='$username'";
	$res=mysql_query($sql);
$row=mysql_fetch_array($res);
$_SESSION["institute_id"]=$row["institute_id"];
$_SESSION["institute_name"]=$row["institute_name"];
?>
<script>
document.location="institute/home.php";
</script>
<?php

}

}
else
{
?>
<script>
alert("Invalid Login Details");
history.back();
</script>
<?php

}
?>