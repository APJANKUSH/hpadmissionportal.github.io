<?php
include("db_connect.php");
$ec_id=$_POST['ec_id'];
$external_course_name=$_POST["external_name"];
$external_course_description=$_POST["external_description"];
$external_course_duration=$_POST["external_duration"];
$external_course_eligibility=$_POST["external_eligibility"];
$external_additional_requirements=$_POST["requirements"];
 $sql="update  external_course set external_course_name='$external_course_name',external_course_description='$external_course_description',
external_course_duration='$external_course_duration',external_course_eligibility='$external_course_eligibility',
external_additional_requirements='$external_additional_requirements' where external_course_id='$ec_id'";
mysql_query($sql);
?>
<script>
alert("external_course are updated");
document.location="external_course_view.php";
</script>