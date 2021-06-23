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
                              Institute Photos<small> form </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                       <div align="left">Institutes Photos Details
                      </div>
                    </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

<?php
include("db_connect.php");
$i_id=$_REQUEST['i_id'];
$sql="select * from  institute_details where institute_id='$i_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<table class="table table-striped table-bordered table-hover">
<tr>
<th>Institute Name</th>
<td><?php echo $row["institute_name"]; ?></td>
</tr>
<tr>
<th>Address</th>
<td><?php echo $row["institute_address"]; ?></td>
</tr>
</table>
<form action="institute_photos_insert.php" enctype="multipart/form-data" method="post">
<input name="i_id" type="hidden" value="<?php echo $i_id; ?>">
  <div align="center">
  
    <table width="469" height="138" border="0">
      
      <tr>
        <td>Institute Photo</td>
        <td><input type="file" name="photo" id="photo" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
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

