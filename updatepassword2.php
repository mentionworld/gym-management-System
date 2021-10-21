<?php
if(isset($_POST['uppass']))
		{
			session_start();
			$x=$_SESSION['name'];
			$pass=$_POST['pass1'];
			$pass1=$_POST['pass2'];
			if($pass==$pass1)
			{
				$conn=new mysqli("localhost","root","","gym_management");
				$q2="update userdata set password='".$pass."' where username='".$x."'";
				$conn->query($q2);
				echo "password updated";
				header("Location:login.php");
			}
			else
			{
				echo "confirm password";
			}
		}
		else
		{
			echo "values not set";
		}
?>