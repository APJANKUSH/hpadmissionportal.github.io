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
                      <h1 class="page-header">&nbsp;</h1>
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


<body>
<?php
	include('db_connect.php');
	$ip_id=$_REQUEST['ip_id'];
	$sql="select * from institute_photos where institute_photo_id='$ip_id' ";
	$res=mysql_query($sql);
    $row=mysql_fetch_array($res);
?>
<form action="institute_photos_update.php" method="post" enctype="multipart/form-data">
<input type="hidden"name="ip_id"value="<?php echo $row['institute_photo_id'];?>">
  <div align="center">
    
    <table width="492" height="259" border="0">
      <tr>
        <td width="111">Institute Name </td>
        <td width="264"><input name="institute_id" type="text" id="institute_id" class="form-control validate[required]" value="<?php echo $row['institute_id']?>"></td>
      </tr>
      <tr>
        <td>Institute Photo</td>
        <td><div align="center"><img src="../college_photo/institute_photos/<?php echo $row['institute_photo']?>" height="75" width="75"></div><hr>
		<input type="file" name="photo" id="photo" value="<?php echo $row['institute_photo']?>" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
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

