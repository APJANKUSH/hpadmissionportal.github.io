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
                           External  Course <small>Details</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               <a href="external_course.php" class=" btn btn-info btn">Add New </a><hr/>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             External course
                        </div>
						                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="1105" height="134" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead><div align="center"><div align="center">
 
    <tr>
      <th height="40"><LABEL for="checkbox_row_1"><u>External Course Id</u></LABEL></th>
      <th><LABEL for="checkbox_row_2">External Course Name</LABEL></th>
      <th><LABEL for="checkbox_row_3">External Course Description</LABEL></th>
      <th><LABEL for="checkbox_row_4">External Course Duration</LABEL></th>
      <th><LABEL for="checkbox_row_5">External Course Eligibility</LABEL></th>
      <th><LABEL for="checkbox_row_6">External Additional Requirements</LABEL></th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
	<?php
	include('db_connect.php');
		$sl=1;
	$sql="select * from external_course";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo  $sl++;?></td>
      <td>&nbsp;<?php echo $row['external_course_name']?></td>
      <td>&nbsp;<?php echo $row['external_course_description']?></td>
      <td>&nbsp;<?php echo $row['external_course_duration']?></td>
      <td>&nbsp;<?php echo $row['external_course_eligibility']?></td>
      <td>&nbsp;<?php echo $row['external_additional_requirements']?></td>
      <td>&nbsp;<a href="external_course_edit.php?ec_id=<?php echo $row['external_course_id'];?>"><img src="images/edit.png" width="60" height="60"></a></td>
      <td>&nbsp;<a href="external_course_delete.php?ec_id=<?php echo $row['external_course_id'];?>"><img src="images/delete.jpg" width="60" height="60"></a></td>
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

