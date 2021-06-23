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
                            Course Details<small> form </small>
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


<form name="formID" ID="formID" method="post" action="course_details_insert.php">
 
  <table width="340" height="276" border="0" align="center">
    <tr>
      <td width="103">Course Name</td>
      <td width="227"><input name="course_name" type="text" id="course_name" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input name="description" type="text" id="description" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Duration(Years)</td>
      <td><input name="duration" type="text" id="duration" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Eligibility Criteria</td>
      <td><input name="criteria" type="text" id="criteria" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Additional Requirements</td>
      <td><input name="requirements" type="text" id="requirements" class="form-control validate[required]"></td>
    </tr>
	<tr>
      <td>Course Stream</td>
      <td><select name="course_stream" type="text" id="course_stream" class="form-control validate[required]">
	  <option value="">Select Course Stream</option>
	 
	  <option>ARTS</option>	  
	<option>COMMERCE</option>	  
	<option>SCIENCE</option>	  
	  </select>
	  </td>
    </tr>
	<tr>
      <td>Course Sub Stream</td>
      <td><select name="course_substream" type="text" id="course_substream" class="form-control validate[required]">
	  <option value="">Select Course Sub Stream</option>
	 
	  <option>Bachelors</option>	  
	<option>Masters</option>	  
	<option>Management</option>	  
	<option>Professional Course</option>	  
	  </select>
	  </td>
    </tr>
	<tr>
      <td>Course Type</td>
      <td><select name="course_type" type="text" id="course_type" class="form-control validate[required]">
	  <option value="">Select Course Type</option>
	 
	  <option>DIPLOMA</option>	  
	<option>GRADUATION</option>	  
	<option>POST GRADUATION</option>	  
	<option>JOB ORIENTED</option>	  
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
  <p align="center">&nbsp;</p>
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
