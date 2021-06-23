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
                            College Courses<small> update</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             College Courses Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

<?php
include("db_connect.php");
$c_id=$_REQUEST['c_id'];
$sql="select * from  college_details where college_id='$c_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<table class="table table-striped table-bordered table-hover">
<tr>
<th>College Name</th>
<td><?php echo $row["college_name"]; ?></td>
</tr>
<tr>
<th>Address</th>
<td><?php echo $row["address"]; ?></td>
</tr>
</table>
<?php
$cc_id=$_REQUEST['cc_id'];
$sql="select * from  college_courses  where college_course_id='$cc_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>

<form name="formID" id="formID" method="post" action="college_courses_update.php">
<input type="hidden"name="cc_id"value="<?php echo $row['college_course_id'];?>">
<input type="hidden"name="c_id"value="<?php echo $c_id;?>">
  <div align="center">
   
    <div align="center">
      <table width="316" border="0">
       
        <tr>
          <td><span class="style2">Course Name </span></td>
          <td><select name="course_id" id="course_id" class="form-control validate[required]">
            <option value="">Select</option>
            <?php 
		$sql1="select * from course_details";
		$res1=mysql_query($sql1);
		while($row1=mysql_fetch_array($res1))
		{
		
		?>
            <option value="<?php echo $row1['course_id']; ?>" <?php if($row1['course_id']==$row['course_id']) { echo "selected"; } ?>><?php echo $row1['course_name']; ?></option>
            <?php
		}
		?>
          </select></td>
        </tr>
        <tr>
          <td><span class="style2">Course Fees Per Year</span></td>
          <td><input name="course_fees" type="text" id="course_fees" value="<?php echo $row['course_fees'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
        </tr>
		<tr>
        <td height="31"><p>College Fees(First Year)</p>
        </td>
        <td><input name="first_year_fees" type="text" id="first_year_fees"  value="<?php echo $row['first_year_fees'];?>"  class="form-control validate[required,custom[onlyNumber]]"></td>
      </tr>
	   <tr>
      <td>Program Type</td>
      <td><select name="program_type" type="text" id="program_type" class="form-control validate[required]">
	  <option value="">Select Program Type</option>
	 
	  <option <?php if($row['program_type']=="FULL TIME"){ echo "selected"; } ?>>FULL TIME</option>	  
	<option <?php if($row['program_type']=="CORRESPONDENCE"){ echo "selected"; } ?>>CORRESPONDENCE</option>	  
 
	  </select>
	  </td>
    </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="Submit" value="Submit" class="btn btn-success">
            <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
          </div></td>
        </tr>
      </table>
    </div>
    <p align="center">&nbsp;    </p>
  </div>
</form>
</div>
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<footer><p>All right reserved.  by: Vishwanath</p></footer>
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   <?php include("val.php"); ?>

</body>
</html>
