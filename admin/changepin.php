
<?php
session_start();
?>
<?php
		
	 $a=$_POST['new_password'];
   	$b=$_POST['confirm_password'];
	
		include('db_connect.php');
		$sql = "select * from login where username ='".$_SESSION['uname']."' and password='".$_POST['old_password']."'";
		$res=mysql_query($sql);
	if($a==$b)
	{
		if(mysql_num_rows($res)>0)
		{
			$sql1 = "update login set password = '".$_POST['new_password']."' where username ='".$_SESSION['uname']."'";
			$res1 = mysql_query($sql1);
			?>
				<script>
					alert('Successfully updated your password');
					document.location="change pwd.php";
				</script>
			<?php
		} else
		{
			?>
				<script>
					alert('Failed to update your password');
					document.location="change pwd.php";
				</script>
			<?php
		}
	}else
		{
			?>
				<script>
					alert('New Password and Retype Password do not match');
					document.location="change pwd.php";
				</script>
			<?php
		}
		
?>
