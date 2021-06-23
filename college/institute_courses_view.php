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
                          Institute Courses <small>Details</small>
                        </h1>
                    </div>
                </div> 
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
                 <!-- /. ROW  -->
               <a href="institute_courses.php?i_id=<?php echo $i_id; ?>"class=" btn btn-info btn">Add New </a><hr/>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Institute courses
                        </div>
						                        <div class="panel-body">
                            <div class="table-responsive">
                                <table height="183" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>

    <tr>
      <th width="20" height="81"><div align="center">
        
       <LABEL for="checkbox_row_1">S.No</LABEL></th>
      <th width="139"><div align="center">
        <LABEL for="checkbox_row_3">External Course Name</LABEL>        
        <LABEL for="checkbox_row_2"></LABEL>
      </div></th>
      <th width="93"><div align="center">
        <LABEL for="checkbox_row_4">Course Fees</LABEL>
      </div></th>
      <th width="66"><div align="center">Edit</div></th>
      <th width="125"><div align="center">Delete</div></th>
    </tr>
	<?php
	include('db_connect.php');
		$sl=1;
	$sql="select * from institute_courses ic,institute_details id,external_course c where ic.institute_id=id.institute_id and ic.external_course_id=c.external_course_id and ic.institute_id='$i_id'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{

	?>
    <tr>
      <td>&nbsp;<?php echo  $sl++;?></td>
      <td>&nbsp;<?php echo $row['external_course_name']?></td>
      <td>&nbsp;<?php echo $row['course_fees']?></td>
      <td>&nbsp;<a href="institute_courses_edit.php?ic_id=<?php echo $row['institute_course_id'];?>&i_id=<?php echo $i_id; ?>"><img src="images/edit.png" width="60" height="60"></a></td>
      <td>&nbsp;<a href="institute_courses_delete.php?ic_id=<?php echo $row['institute_course_id'];?>&i_id=<?php echo $i_id; ?>"><img src="images/delete.jpg" width="60" height="60"></a></td>
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
&#333;         <!-- /. PAGE WRAPPER  -->
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

