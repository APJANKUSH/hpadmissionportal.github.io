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
                            College Details<small> form</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           College  Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">


<form name="formID" id="formID" method="post" action="college_details_insert.php" enctype="multipart/form-data">
  <div align="center">
   
    <table width="577" height="674"  border="0">
      <tr>
        <td width="209"><div align="center" class="style4">College Name</div></td>
        <td width="240"><input name="college_name" type="text" id="college_name" class="form-control validate[required,custom[onlyLetter]]" ></td>
      </tr>
      <tr>
        <td><div align="center" class="style4">Address</div></td>
        <td><span class="style4">
          <textarea name="address" id="address" class="form-control validate[required]"></textarea>
        </span></td>
      </tr>
      <tr>
        <td><div align="center" class="style4">Landmark</div></td>
        <td><input name="landmark" type="text" id="landmark" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td><div align="center" class="style4">City</div></td>
        <td><input name="city" type="text" id="city" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td><div align="center" class="style4">State</div></td>
        <td><input name="state" type="text" id="state" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td><div align="center" class="style4">Pincode</div></td>
        <td><input name="pincode" type="text" id="pincode" class="form-control validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td><div align="center" class="style4">Website</div></td>
        <td><input name="website" type="text" id="website" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td><div align="center" class="style4">Contact Person</div></td>
        <td><input name="contact_person" type="text" id="contact_person" class=" form-control validate[required]"></td>
      </tr>
      <tr>
        <td><div align="center" class="style4">Contact Number</div></td>
        <td><input name="contact_number" type="text" id="contact_number" class=" form-control validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td><div align="center" class="style4">Email Id</div></td>
        <td><input name="email_id" type="text" id="email_id" class=" form-control validate[required,custom[email]]"></td>
      </tr>
      <tr>
        <td>Short Description About College </td>
        <td><textarea name="college_desc" id="college_desc"></textarea></td>
      </tr>
	  <tr>
      <td>College Type</td>
      <td><select name="college_type" type="text" id="college_type" class="form-control validate[required]">
	  <option value="">Select Course Type</option>
	 
	  <option>PRIVATE</option>	  
	<option>PUBLIC</option>	  
	<option>GOVERNMENT</option>	  
	  </select>
	  </td>
    </tr>
      <tr>
        <td>Prospectus</td>
        <td><input name="prospectus" type="file" id="prospectus" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td>College Photo </td>
        <td><input name="college_photo" type="file" id="college_photo" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td>College Logo </td>
        <td><input name="college_logo" type="file" id="college_logo" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td colspan="2">
          <div align="center">
            <input type="submit" name="Submit" value="Submit" class="btn btn-success">
            <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
          </div></td></tr>
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
