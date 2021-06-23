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
                            College Details <small>update </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             College Details
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
<form name="formID" ID="formID" method="post" action="college_details_update.php">
    <div align="center">
      <input type="hidden"name="c_id"value="<?php echo $row['college_id'];?>"/>
  <div align="center">
    </div>
    
    <div align="center" class="style1">
      <table width="492" height="416" border="0">
        <tr>
          <td width="206" class="style2"><div align="center">College Name</div></td>
          <td width="245" class="style2"><input name="college_name" type="text" id="college_name" value="<?php echo $row['college_name']?>" class="form-control validate[required,custom[onlyLetter]]"></td>
        </tr>
        <tr>
          <td class="style2"><div align="center">Address</div></td>
          <td class="style2"><textarea name="address" id="address" value="<?php echo $row['address']?>" class="form-control validate[required]"><?php echo $row['address']?></textarea></td>
        </tr>
        <tr>
          <td class="style2"><div align="center">Landmark</div></td>
          <td class="style2"><input name="landmark" type="text" id="landmark" value="<?php echo $row['landmark']?>" class="form-control validate[required]"></td>
        </tr>
        <tr>
          <td class="style2"><div align="center">City</div></td>
          <td class="style2"><input name="city" type="text" id="city" value="<?php echo $row['city']?>" class="form-control validate[required,custom[onlyLetter]]"></td>
        </tr>
        <tr>
          <td class="style2"><div align="center">State</div></td>
          <td class="style2"><input name="state" type="text" id="state" value="<?php echo $row['state']?>" class="form-control validate[required,custom[onlyLetter]]"></td>
        </tr>
        <tr>
          <td class="style2"><div align="center">Pincode</div></td>
          <td class="style2"><input name="pincode" type="text" id="pincode" value="<?php echo $row['pincode']?>" class="form-control validate[required,custom[onlyNumber]]"></td>
        </tr>
        <tr>
          <td class="style2"><div align="center">Website</div></td>
          <td class="style2"><input name="website" type="text" id="website" value="<?php echo $row['website']?>" class="form-control validate[required]"></td>
        </tr>
        <tr>
          <td class="style2"><div align="center">Contact Person</div></td>
          <td class="style2"><input name="contact_person" type="text" id="contact_person" value="<?php echo $row['contact_person']?>" class="form-control validate[required]"></td>
        </tr>
        <tr>
          <td class="style2"><div align="center">Contact Number</div></td>
          <td class="style2"><input name="contact_number" type="text" id="contact_number" value="<?php echo $row['contact_number']?>" class="form-control validate[required,custom[onlyNumber]]"></td>
        </tr>
        <tr>
          <td class="style2"><div align="center">Email Id</div></td>
          <td class="style2"><input name="email_id" type="text" id="email_id" value="<?php echo $row['email_id']?>" class="form-control validate[required,custom[email]]"></td>
        </tr>
		 <tr>
      <td>College Type</td>
      <td><select name="college_type" type="text" id="college_type" class="form-control validate[required]">
	  <option value="">Select College Type</option>
	 
	  <option <?php if($row['college_type']=="PRIVATE"){ echo "selected"; } ?>>PRIVATE</option>	  
	<option <?php if($row['college_type']=="PUBLIC"){ echo "selected"; } ?>>PUBLIC</option>	  
	<option <?php if($row['college_type']=="GOVERNMENT"){ echo "selected"; } ?>>GOVERNMENT</option>	  
	  </select>
	  </td>
    </tr>
        <tr>
          <td colspan="2" class="style2">
            <div align="center">
              <input type="submit" name="Submit" value="Submit" class="btn btn-success">
              <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
            </div></td>
        </tr>
      </table>
    </div>
    <p class="style1">&nbsp;    </p>
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
