
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
                             Course <small>Details</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               <a href="course_details.php" class=" btn btn-info btn">Add New </a><hr/>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Course details 
                        </div>
						                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead><div align="center">
 
    <tr>
      <th><LABEL for="checkbox_row_1"><U>Sl No</U></LABEL>
      <LABEL for="checkbox_row_1"></LABEL></th>
      <th><LABEL for="checkbox_row_2">Course Name</LABEL></th>
      <th><LABEL for="checkbox_row_3">Description</LABEL></th>
      <th><LABEL for="checkbox_row_4">Duration</LABEL></th>
	  <th><LABEL for="checkbox_row_4">Stream</LABEL></th>
	  <th><LABEL for="checkbox_row_4">Course Type</LABEL></th>
      <th><LABEL for="checkbox_row_5">Eligibility Criteria</LABEL></th>
      <th><LABEL for="checkbox_row_6">Additional Requirements</LABEL></th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
	<?php
	include('db_connect.php');
	$sl=1;
	$sql="select * from course_details";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl++;?></td>
      <td>&nbsp;<?php echo $row['course_name']?></td>
      <td>&nbsp;<?php echo $row['course_description']?></td>
      <td>&nbsp;<?php echo $row['course_duration']?> Years</td>
	  <td>&nbsp;<?php echo $row['course_stream']."/". $row['course_substream']?></td>
      <td>&nbsp;<?php echo $row['course_type']?></td>
      <td>&nbsp;<?php echo $row['eligibility_criteria']?></td>
      <td>&nbsp;<?php echo $row['additional_requirements']?></td>
      <td>&nbsp;<a href="course_details_edit.php?c_id=<?php echo $row['course_id'];?>"><img src="images/edit.png" width="60" height="60"></a></td>
      <td>&nbsp;<a href="course_details_delete.php?c_id=<?php echo $row['course_id'];?>"><img src="images/delete.jpg" width="60" height="60"></a></td>
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

