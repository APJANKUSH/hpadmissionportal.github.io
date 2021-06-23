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
                        Institute<small>Details</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Institute Details
                        </div>
						                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead><div align="center"><div align="center">
<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {font-size: 16px}
-->
</style>
<div align="center">

    <tr>

      <th width="84"><span class="style2">
        <label for="checkbox_row_2">Institute Name</label>
      </span></th>
      <th width="79"><span class="style2">
        <label for="checkbox_row_3">Institute Address</label>
      </span></th>
     <th width="79"><span class="style2">
        <label for="checkbox_row_3">Contact Details</label>
      </span></th>
	  <th width="79"><span class="style2">
	    <label for="checkbox_row_2">Institute Logo </label>
	  </span></th>

      <th width="43"><span class="style2"> Edit</span></th>
    </tr>
    <?php
	include('db_connect.php');
	$sl=1;
	 $sql="select * from institute_details where institute_id='".$_SESSION["institute_id"]."'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>

      <td>&nbsp;<?php echo $row['institute_name']?><br><img src="../college_photo/institute_photos/<?php echo $row['image']; ?>" width="50" height="50"></td>
      <td>&nbsp;<?php echo $row['institute_address'].",".$row['institute_landmark'].",".$row['institute_city'].",".$row['institute_state']."-".$row['institute_pincode']?></td>
      <td>&nbsp;<?php echo $row['institute_website']."<br>".$row['institute_contact_person']."<br>".$row['institute_contact_number']."<br>".$row['institute_email_id']?></td>
	  <th>&nbsp;<a href="institute_details_edit.php?i_id=<?php echo $row['institute_id'];?>&i_id=<?php echo $i_id; ?>"><img src="images/edit.png" width="60" height="60"></a></th>

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
