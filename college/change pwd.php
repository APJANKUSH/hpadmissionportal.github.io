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
                            Change <small>Password</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Change Password
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                      <form name="form1" method="post" action="changepin.php">
                            
                            
                            <table width="420" height="267" border="0">
                              <tr>
                                <td><label>Old Password:</label></td>
                                <td><input type="text" name="old_password" id="old_password" class="input-short form-control"></td>
                              </tr>
                              <tr>
                                <td><label>New Password:</label></td>
                                <td><input type="text" name="new_password" id="new_password" class="input-short form-control"></td>
                              </tr>
                              <tr>
                                <td><label>Confirm Password:</label></td>
                                <td><input type="text" name="confirm_password" id="confirm_password" class="input-short form-control"></td>
                              </tr>
                              <tr>
                                <td colspan="2"><div align="center">
                                  <input class="submit-green btn btn-primary btn" type="submit" value="Submit"  />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                  
<input class="submit-gray btn btn-danger btn" type="submit" value="Cancel"  />
                                </div></td>
                              </tr>
                            </table>
                          
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
