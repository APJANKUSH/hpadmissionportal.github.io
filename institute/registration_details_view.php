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
                            Registration<small>details</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Registration details
                        </div>
						                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    

<thead>
    <tr>
      <th width="47"><div align="center">Reg No</div></th>
      <th width="47"><div align="center">Name</div></th>
      <th width="55"><div align="center">Gender</div></th>
      <th width="61"><div align="center">Address</div></th>
      <th width="94"><div align="center">Mobile No</div></th>
      <th width="69"><div align="center">Email</div></th>
      <th width="101"><div align="center">Qualification</div></th>
      <th width="55"><div align="center">Edit</div></th>
      <th width="113"><div align="center">Delete</div></th>
    </tr>
	
	 

	<?php
	include('db_connect.php');
	$sl=1;
	$sql="select * from registration_details";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>
      <td height="51">&nbsp;<?php echo $sl++;?></td>
      <td>&nbsp;<?php echo $row['first_name']." ".$row['last_name']?></td>
      <td>&nbsp;<?php echo $row['gender']?></td>
      <td>&nbsp;<?php echo $row['address']?></td>
      <td>&nbsp;<?php echo $row['mobile_no']?></td>
      <td>&nbsp;<?php echo $row['email']?></td>
      <td>&nbsp;<?php echo $row['qualification']?></td>
      <td>&nbsp;<a href="registration_details_edit.php?r_id=<?php echo $row['reg_id'];?>"><img src="images/edit.png" width="60" height="60"></a></td>
      <td>&nbsp;<a href="registration_details_delete.php?r_id=<?php echo $row['reg_id'];?>"><img src="images/delete.jpg" width="60" height="60"></a></td>
    </tr>
	<?php
	}
	?>
        			  
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
