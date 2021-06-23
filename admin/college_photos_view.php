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
                            College photos<small>details</small>
                        </h1>
                    </div>
                </div> 
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
                 <!-- /. ROW  -->
               <a href="college_photos.php?c_id=<?php echo $c_id; ?>" class=" btn btn-info btn">Add New </a><hr/>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             College photos
                        </div>
						                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead><div align="center">

    <tr>
      <th width="159">S.No</th>
      <th width="117"><LABEL for="checkbox_row_3">College Photo</LABEL></th>
      <th width="145">Delete</th>
    </tr>
	<?php
	include('db_connect.php');
	$sl=1;
	$sql="select * from college_photos where college_id='$c_id'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo  $sl++;?></td>
      <td>&nbsp;<img src="../college_photo/<?php echo $row['college_photo']?>" height="75" width="75"></td>
      <td>&nbsp;<a href="college_photos_delete.php?cp_id=<?php echo $row['college_photo_id'];?>&c_id=<?php echo $c_id; ?>"><img src="images/delete.jpg" widht="60" height="60"></a></td>
    </tr>
	<?php
	}
	?>
  </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                <?php include('footer.php');?>
			    </div>
				
            </div>
                <!-- /. ROW  -->
            
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
             
			       </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
