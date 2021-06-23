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
                            Institute Applications <small>Details</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
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


            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Institute Applications 
                        </div>
						                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
<tr>
      <th width="20">S.No</th>
	  <th>Applied By</th>
      <th >Course Name</th>
      <th >Mobile</th>	  
      <th>Email</th>
	  <th>Applied On</th>
	   
    </tr>
	</thead>
	<tbody>
	<?php
	include('db_connect.php');	
		$sl=1;
	$sql="select * from college_applications ca,institute_courses cc,external_course z,registration_details r where ca.institute_course_id=cc.institute_course_id and ca.reg_id=r.reg_id and cc.external_course_id=z.external_course_id and cc.institute_id='$i_id'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl++;?></td>
	        <td>&nbsp;<?php echo $row['first_name']." ".$row['last_name']?></td>
      <td>&nbsp;<?php echo $row['external_course_name'];?></td>      <td>&nbsp;<?php echo $row['mobile_no']?></td>
      <td>&nbsp;<?php echo $row['email']?></td>

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
