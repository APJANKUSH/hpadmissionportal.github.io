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
                            Registration Details <small>form</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                       <div align="left">Registration Details
                      </div>
                    </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">


<form name="formID" ID="formID" method="post" action="registration_details_insert.php">
  <div align="center">
    <p><A title="Browse: InnoDB free: 4096 kB (0 Rows)" id="browse_carrier_guidence.registration_details" href="http://localhost/phpmyadmin/sql.php?db=carrier_guidence&amp;token=ab5a2a9033790bb53e2de08ab69d4e56&amp;table=registration_details&amp;goto=tbl_structure.php"></A> Registration Details</p>
    <table width="375" height="384" border="0">
      <tr>
        <td width="126">Name</td>
        <td width="349"><input name="name" type="text" id="name" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td><input name="gender" type="radio" value="male">          
          Male
            <input name="gender" type="radio" value="female">
        Female</td>
      </tr>
      <tr>
        <td>address</td>
        <td><textarea name="address" id="address" class="form-control validate[required]"></textarea></td>
      </tr>
      <tr>
        <td>Mobile No</td>
        <td><input name="mobile_no" type="text" id="mobile_no" class="form-control validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input name="email" type="text" id="email" class="form-control validate[required,custom[email]]"></td>
      </tr>
      <tr>
        <td>Qualification</td>
        <td><input name="qualification" type="text" id="qualification" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit"class="btn btn-success">
          <input type="reset" name="Reset" value="Reset"class="btn btn-danger">
        </div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
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
			<footer><p>All right reserved.  by: Gajanan & Ankush.</p></footer>
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

