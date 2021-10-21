<?php
	if(isset($_POST['delete']))
	{		
			$conn=new mysqli("localhost","root","","gym_management");
			$q1="delete from userdata where username='".$_POST['uname']."'";
			$res=$conn->query($q1);
			if($res==1)
			{
				echo "deleted";
				?>
				<button><a href="admin.php" style="text-decoration: none;">BackToHome</a></button>
				<?php
			}
			else
			{
				echo "cant delete";
				?>
				<button><a href="admin.php" style="text-decoration: none;">BackToHome</a></button>
				<?php
			}

	}
	else if(isset($_POST['update']))
	{	 session_start();
		$_SESSION['uname1']=$_POST['uname'];
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Update</title>
		</head>
		<body>
		<h1>What do you wnt to update</h1>
		<form method="post" action="update.php">
			<select name="field">
				<option value="username">UserName</option>
				<option value="password">Password</option>
				<option value="email">Email Id</option>
				<option value="contact">Contact No</option>
				<option value="membership">Membership</option>
			</select>
			<input type="text" name="fieldvalue">
			<input type="submit" name="submit" value="update">
		</form>
				<button><a href="admin.php" style="text-decoration: none;">BackToHome</a></button>
				
		</body>
		</html>
		<?php
	}
	else
	{
		echo "not set";
		?>
				<button><a href="admin.php" style="text-decoration: none;float: right;">BackToHome</a></button>
				<?php
	}

?>