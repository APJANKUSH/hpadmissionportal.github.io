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
                            College Photos <small>update</small>
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
	include('db_connect.php');
	$cp_id=$_REQUEST['cp_id'];
	$sql="select * from college_photos where college_photo_id='$cp_id' ";
	$res=mysql_query($sql);
$row=mysql_fetch_array($res);
	
	?>
<form action="college_photos_update.php" method="post" enctype="multipart/form-data" >
<input type="hidden"name="cp_id"value="<?php echo $row['college_photo_id'];?>">

  <div align="center">

</p>
    <table width="447" height="272" border="0">
      <tr>
        <td width="104" height="48">College Name </td>
        <td width="297"><select name="college_id" id="college_id" class="form-control validate[required]">
          <option >Select</option>
          <?php 
		$sql1="select * from college_details";
		$res1=mysql_query($sql1);
		while($row1=mysql_fetch_array($res1))
		{
		?>
          <option value="<?php echo $row1['college_id'];?>"<?php if($row1['college_id']==$row['college_id']) { echo "selected"; } ?>><?php echo $row1['college_name'];?></option>
          <?php
		}
		?>
        </select></td>
      </tr>
      <tr>
        <td> photo</td>
        <td><img src="../college_photo/<?php echo $row['college_photo']?>" height="75" width="75">
		<input name="photo" type="file" id="file" value="<?php echo $row['college_photo']?>" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-success">
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
        </div></td>
      </tr>
    </table>
    <p>&nbsp;    </p>
  </div>
</form>
</body>
</html>
