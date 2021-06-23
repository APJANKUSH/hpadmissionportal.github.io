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
                            College Photos <small>form</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           College Photos Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php
include("db_connect.php");

?>

<form action="college_photos_insert.php" enctype="multipart/form-data" method="post" name="formID" id="formID">
<input name="college_id" type="hidden" value="<?php echo $_SESSION["college_id"]; ?>">
  <div align="center">
   
<p>&nbsp;      </p>
    <table width="528" height="184" border="0">
      
      <tr>
        <td height="52"><p>Photo</p></td>
        <td><input name="photo" type="file" id="photo" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td height="48" colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit"  class="btn btn-success">
          <input type="reset" name="Reset" value="Reset"  class="btn btn-danger">
        </div></td>
      </tr>
    </table>
    <p>&nbsp;    </p>
  </div>
</form>
</body>
</html>
