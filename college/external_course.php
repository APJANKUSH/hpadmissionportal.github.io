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
                            External Course<small>form</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                       <div align="left">External Course Details
                      </div>
                    </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">



<form name="formID" ID="formID" method="post" action="external_course_insert.php">
  <div align="center">
 
    <table width="434" height="310" border="0">
      <tr>
        <td width="188" height="41">External Course Name</td>
        <td width="146"><input name="external_name" type="text" id="external_name" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td height="40">External Course Description</td>
        <td><input name="external_description" type="text" id="external_description" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td height="33">External Course Duration</td>
        <td><input name="external_duration" type="text" id="external_duration" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td height="41"><p>External Course Eligibility</p>
        </td>
        <td><input name="external_eligibility" type="text" id="external_eligibility" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td height="43">External Additional Requirements</td>
        <td><input name="requirements" type="text" id="requirements" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td height="47" colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit"class="btn btn-success">
          <input type="reset" name="Reset" value="Reset"class="btn btn-danger">
        </div></td>
      </tr>
    </table>
    <p>&nbsp;    </p>
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
