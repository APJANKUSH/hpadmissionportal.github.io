<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('metadata.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
</head>
<body>

        <!--/. NAV TOP  -->
  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Institute Details<small>form</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                       <div align="left">Institutes Details
                      </div>
                    </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">



<form action="institute_details_insert.php" method="post" enctype="multipart/form-data" name="formID" ID="formID">
  <div align="center">
 
</p>
    <table width="527" height="600" border="0">
      <tr>
        <td width="265"><LABEL for="checkbox_row_2">Institute Name</LABEL></td>
        <td width="252"><input name="institute_name" type="text" id="institute_name" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td><LABEL for="checkbox_row_3">Institute Address</LABEL></td>
        <td><textarea name="address" id="address" class="form-control validate[required]"></textarea></td>
      </tr>
      <tr>
        <td><LABEL for="checkbox_row_4">Institute Landmark</LABEL></td>
        <td><input name="landmark" type="text" id="landmark" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td><LABEL for="checkbox_row_4">Institute City </LABEL></td>
        <td><input name="city" type="text" id="city" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td><LABEL for="checkbox_row_6">Institute State</LABEL></td>
        <td><input name="state" type="text" id="state" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td><LABEL for="checkbox_row_7">Institute Pincode</LABEL></td>
        <td><input name="pincode" type="text" id="pincode" class="form-control validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td><LABEL for="checkbox_row_8">Institute Website</LABEL></td>
        <td><input name="website" type="text" id="website" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td><LABEL for="checkbox_row_9">Institute Contact Person</LABEL></td>
        <td><input name="institute_contact_person" type="text" id="institute_contact_person"class="form-control validate[required,custom[telephone]]"></td>
      </tr>
      <tr>
        <td><LABEL for="checkbox_row_10">Institute Contact Number</LABEL></td>
        <td><input name="contact_number" type="text" id="contact_number" class="form-control validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td height="39"><LABEL for="checkbox_row_11">Institute Email Id</LABEL>          <LABEL for="checkbox_row_10"></LABEL></td>
        <td><input name="institute_email_id" type="text" id="institute_email_id" class="form-control validate[required,custom[email]]"></td>
      </tr>
      <tr>
        <td height="39">Institute Photo </td>
        <td><p>
          <input name="image" type="file" id="image" class="form-control validate[required]">
        </p>
          </td>
      </tr>
      <tr>
        <td height="39">Institure Logo</td>
        <td><input name="logo_institute" type="file" class="form-control validate[required]" id="logo_institute"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit"class="btn btn-success">
&nbsp;&nbsp;          
<input type="reset" name="Reset" value="Reset"class="btn btn-danger">
        </div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
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

