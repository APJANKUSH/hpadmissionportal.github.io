<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('metadata.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
</head>
<body>

        <!--/. NAV TOP  -->
  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Course Details<small>update</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Course Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

<?php
	include('db_connect.php');
	$c_id=$_REQUEST['c_id'];
	$sql="select * from course_details where course_id='$c_id'";
	$res=mysql_query($sql);
    $row=mysql_fetch_array($res);
	?>
    <form name="formID" ID="formID" method="post" action="course_details_update.php">
     <input type="hidden" name="c_id"value="<?php echo $row['course_id'];?>" class="form-control validate[required,custom[onlyLetter]]">


  <table width="430" height="272" border="0" align="center">
    <tr>
      <td width="161">Course Name</td>
      <td width="259"><input name="course_name" type="text" id="course_name" value="<?php echo $row['course_name']?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input name="description" type="text" id="description" value="<?php echo $row['course_description']?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Duration</td>
      <td><input name="duration" type="text" id="duration" value="<?php echo $row['course_duration']?>" class="form-control validate[required,custom[onlyNumber]]">Years</td>
    </tr>
   <tr>
      <td>Course Stream</td>
      <td><select name="course_stream" type="text" id="course_stream" class="form-control validate[required]">
	  <option value="">Select Course Stream</option>
	 
	  <option <?php if($row['course_stream']=="ARTS"){ echo "selected"; } ?>>ARTS</option>	  
	<option <?php if($row['course_stream']=="COMMERCE"){ echo "selected"; } ?>>COMMERCE</option>	  
	<option <?php if($row['course_stream']=="SCIENCE"){ echo "selected"; } ?>>SCIENCE</option>	  
	  </select>
	  </td>
    </tr>
	<tr>
      <td>Course Stream</td>
      <td><select name="course_substream" type="text" id="course_substream" class="form-control validate[required]">
	  <option value="">Select Course Sub Stream</option>
	 
	  <option <?php if($row['course_substream']=="Bachelors"){ echo "selected"; } ?>>Bachelors</option>	  
	<option <?php if($row['course_substream']=="Masters"){ echo "selected"; } ?>>Masters</option>	  
	<option <?php if($row['course_substream']=="Management"){ echo "selected"; } ?>>Management</option>	  
	<option <?php if($row['course_substream']=="Professional Course"){ echo "selected"; } ?>>Professional Course</option>	  
	  </select>
	  </td>
    </tr>
	<tr>
      <td>Course Type</td>
      <td><select name="course_type" type="text" id="course_type" class="form-control validate[required]">
	  <option value="">Select Course Type</option>
	 
	  <option <?php if($row['course_type']=="DIPLOMA"){ echo "selected"; } ?>>DIPLOMA</option>	  
	<option <?php if($row['course_type']=="GRADUATION"){ echo "selected"; } ?>>GRADUATION</option>	  
	<option <?php if($row['course_type']=="POST GRADUATION"){ echo "selected"; } ?>>POST GRADUATION</option>	  
	<option <?php if($row['course_type']=="JOB ORIENTED"){ echo "selected"; } ?>>JOB ORIENTED</option>	  
	  </select>
	  </td>
    </tr>
    <tr>
      <td>Eligibility Criteria</td>
      <td><input name="criteria" type="text" id="criteria" value="<?php echo $row['eligibility_criteria']?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Addiional Requirements</td>
      <td><input name="requirements" type="text" id="requirements" value="<?php echo $row['additional_requirements']?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit"class="btn btn-success">
        <input type="reset" name="Reset" value="Reset"class="btn btn-danger">
      </div></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
</form>
</body>
</html>
