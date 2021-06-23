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
                            Institute photos <small>Details</small>
                        </h1>
                    </div>
                </div> 
				<?php
include("db_connect.php");
$i_id=$_SESSION['institute_id'];

?>

                 <!-- /. ROW  -->
               <a href="institute_photos.php" class=" btn btn-info btn">Add New </a><hr/>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Institute photos
                        </div>
						                        <div class="panel-body">
                            <div class="table-responsive">
                                <table height="168" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
<div align="center">

  
    <tr>
      <th width="20" height="59"><div align="center">
        <LABEL for="checkbox_row_1">S.No</LABEL>
      </div></th>
      <th><div align="center">
        <LABEL for="checkbox_row_3">Institute Photo</LABEL>
      </div></th>
      <th width="75"><div align="center">Delete</div></th>
    </tr>
	<?php
	
	include('db_connect.php');
	$sl=1;
	$sql="select * from institute_photos where institute_id='$i_id'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>
      <td height="63">&nbsp;<?php echo  $sl++;?></td>
      <td>&nbsp;<img src="../college_photo/institute_photos/<?php echo $row['institute_photo']?>" height="75" width="75"></td>
      <td>&nbsp;<a href="institute_photos_delete.php?ip_id=<?php echo $row['institute_photo_id'];?>"><img src="images/delete.jpg" width="60"height="60"></a></td>
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
