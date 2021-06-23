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
                              Institute Details<small>update</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                       <div align="left">Institutes Details
                      </div>
                    </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">


<?php
include("db_connect.php");
$i_id=$_REQUEST['i_id'];
$sql="select * from  institute_details where institute_id='$i_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>

<body>
<?php include("val.php"); ?>

<form name="formID" ID="formID" method="post" action="institute_details_update.php">
 <input type="hidden"name="i_id"value="<?php echo $row['institute_id'];?>">

  <div align="center">
    
</p>
    <table width="727" height="552" border="0">
      <tr>
        <td width="231"><span class="style2">
          <label for="checkbox_row_2">Institute Name</label>
        </span></td>
        <td width="295"><input name="institute_name" type="text" id="institute_name" value="<?php echo $row['institute_name']?>" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td><span class="style2">
          <label for="checkbox_row_3">Institute Address</label>
        </span></td>
        <td><textarea name="address" id="address"<?php echo $row['institute_address']?>" class="form-control validate[required]"><?php echo $row['institute_address']?></textarea></td>
      </tr>
      <tr>
        <td><span class="style2">
          <label for="checkbox_row_4">Institute Landmark</label>
        </span></td>
        <td><input name="landmark" type="text" id="landmark" value="<?php echo $row['institute_landmark']?>"class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td><span class="style2">
          <label for="checkbox_row_4">Institute City </label>
        </span></td>
        <td><input name="city" type="text" id="city" value="<?php echo $row['institute_city']?>" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td><span class="style2">
          <label for="checkbox_row_6">Institute State</label>
        </span></td>
        <td><input name="state" type="text" id="state" value="<?php echo $row['institute_state']?>" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td><span class="style2">
          <label for="checkbox_row_7">Institute Pincode</label>
        </span></td>
        <td><input name="pincode" type="text" id="pincode" value="<?php echo $row['institute_pincode']?>" class="form-control validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td><span class="style2">
          <label for="checkbox_row_8">Institute Website</label>
        </span></td>
        <td><input name="website" type="text" id="website" value="<?php echo $row['institute_website']?>" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td><span class="style2">
          <label for="checkbox_row_9">Institute Contact Person</label>
        </span></td>
        <td><input name="institute_contact_person" type="text" id="institute_contact_person" value="<?php echo $row['institute_contact_person']?>" class="form-control validate[required,custom[telephone]]"></td>
      </tr>
      <tr>
        <td><span class="style2">
          <label for="checkbox_row_10">Institute Contact Number</label>
        </span></td>
        <td><input name="contact_number" type="text" id="contact_number" value="<?php echo $row['institute_contact_number']?>" class="form-control validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td height="39"><span class="style2">
          <label for="checkbox_row_11">Institute Email Id</label>
          <label for="checkbox_row_10"></label>
        </span></td>
        <td><input name="institute_email_id" type="text" id="institute_email_id" value="<?php echo $row['institute_email_id']?>" class="form-control validate[required,custom[email]]"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
            <input type="submit" name="Submit" value="Submit"class="btn btn-success">
            <input type="reset" name="Reset" value="Reset"class="btn btn-danger">
        </div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;    </p>
  </div>
</form>
</body>
</html>
