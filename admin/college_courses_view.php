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
                            College Courses <small>Details</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
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
               <a href="college_courses.php?c_id=<?php echo $c_id; ?>" class=" btn btn-info btn">Add New </a><hr/>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             College Coureses 
                        </div>
						                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
<tr>
      <th width="20">S.No</th>
      <th >Course Name</th>
      <th >Duration</th>	  
      <th>First Year Fees</th>
	  <th>Fees Per Year</th>
	   <th>Program Type</th>
      <th width="42">Edit</th>
      <th width="40">Delete</th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('db_connect.php');	
		$sl=1;
	$sql="select * from college_courses cc,college_details cd,course_details z where cc.college_id=cd.college_id and cc.course_id=z.course_id and cc.college_id='$c_id'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl++;?></td>
      <td>&nbsp;<?php echo $row['course_name'];?></td>
	   <td>&nbsp;<?php echo $row['course_duration'];?></td>
	    <td>&nbsp;<?php echo $row['first_year_fees'];?></td>
      <td>&nbsp;<?php echo $row['course_fees'];?></td>
	  <td>&nbsp;<?php echo $row['program_type'];?></td>
      <td>&nbsp;<a href="college_courses_edit.php?cc_id=<?php echo $row['college_course_id'];?>&c_id=<?php echo $c_id; ?>"><img src="images/edit.png" width="70" height="70"></a></td>
      <td>&nbsp;<a href="college_courses_delete.php?cc_id=<?php echo $row['college_course_id'];?>&c_id=<?php echo $c_id; ?>"><img src="images/delete.jpg" width="70" height="70"></a></td>
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
