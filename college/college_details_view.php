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
                            College  <small>Details</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p style="color:#0000FF "> College details </p>
                        </div>
						                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                    <tr>
                            <th width="126" class="style3"><div align="center">
                              <label for="checkbox_row_2">College Name</label>
                              <label for="checkbox_row_3"></label>
                            </div></th>
                            <th width="80" class="style3"><div align="center">
                              <label for="checkbox_row_3">Address</label>
                                </div></th>
                            <th width="116" class="style3"><div align="center">Contact Details</div></th>
                            <th width="66" class="style3"><label for="checkbox_row_2">College Logo</label>
                                <label for="checkbox_row_3"></label></th>
                            <th width="66" class="style3"><div align="center">Edit</div></th>

                          </tr>
	  </thead>
	  <tbody>
      <?php
	  $sn=1;
	include('db_connect.php');
	$sql="select * from college_details where college_id='".$_SESSION["college_id"]."'"; 
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
      <tr>
        <td class="style3">&nbsp;<?php echo $sn++; ?></td>
        <td class="style3">&nbsp;<img src="../admin/file/<?php echo $row['image']?>" width="100" height="100"/> <?php echo $row['college_name']?></td>
        <td class="style3">&nbsp;<?php echo $row['address'].",".$row['landmark'].",".$row['city'].",".$row['state']."-".$row['pincode'];?></td>
        <td class="style3">&nbsp;<?php echo $row['website']."<br>".$row['contact_person']."<br>".$row['contact_number']."<br>".$row['email_id']?></td>
        <td class="style3"><img src="../college_photo/college_logo/<?php echo $row['college_logo']?>" width="100" height="100"/></td>
        <td class="style3">&nbsp;<a href="college_details_edit.php?c_id=<?php echo $row['college_id'];?>"><img src="images/edit.png" width="60" height="60"></a></td>
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
