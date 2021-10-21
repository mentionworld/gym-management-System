<?php
if(isset($_POST['submit']))
{
	session_start();
	$option=$_POST['field'];
	$value=$_POST['fieldvalue'];
	$conn=new mysqli("localhost","root","","gym_management") or die("CONNECTION FAILED");
	if($option=='username')
	{
		$q="update set username='".$value."' from userdata where username='".$_SESSION['uname1']."'";
		$res=$conn->query($q);
		if($res==1)
		{
			echo "sucsessfuly updated USERNAME";
			?>
				<button><a href="admin.php" style="text-decoration: none;float: right;">BackToHome</a></button>
				<?php
		}
		else
		{
			echo "Not Updated Username";
			?>
				<button><a href="admin.php" style="text-decoration: none;float: right;">BackToHome</a></button>
				<?php
		}
	}
	else if($option=='password')
	{
		$q="update userdata set password='".$value."'  where username='".$_SESSION['uname1']."'";
		$res=$conn->query($q);
		if($res==1)
		{
			echo "sucsessfuly updated PASSWORD";
			?>
				<button><a href="admin.php" style="text-decoration: none;float: right;">BackToHome</a></button>
				<?php
		}
		else
		{
			echo "Not Updated password";
			?>
				<button><a href="admin.php" style="text-decoration: none;float: right;">BackToHome</a></button>
				<?php
		}
	}
	else if($option=='email')
	{
		$q="update userdata set email='".$value."'  where username='".$_SESSION['uname1']."'";
		$res=$conn->query($q);
		if($res==1)
		{
			echo "sucsessfuly updated EMAIL";
			?>
				<button><a href="admin.php" style="text-decoration: none;float: right;">BackToHome</a></button>
				<?php
		}
		else
		{
			echo "Not Updated Email";
			?>
				<button><a href="admin.php" style="text-decoration: none;float: right;">BackToHome</a></button>
				<?php
		}
	}
	else if($option=='contact')
	{
		$q="update userdata set contact_no='".$value."'  where username='".$_SESSION['uname1']."'";
		$res=$conn->query($q);
		if($res)
		{
			echo "sucsessfuly updated CONTACT";
			?>
				<button><a href="admin.php" style="text-decoration: none;float: right;">BackToHome</a></button>
				<?php
		}
		else
		{
			echo "Not Contact";
			?>
				<button><a href="admin.php" style="text-decoration: none;float: right;">BackToHome</a></button>
				<?php
		}
	}
	else if($option=='membership')
	{
		$q="update userdata set membership='".$value."',exercise='Cardio' ,charge='Rs.1500'  where username='".$_SESSION['uname1']."'";
		$res=$conn->query($q);
		if($res==1)
		{
			echo "sucsessfuly updated MEMBERSHIP";
			?>
				<button><a href="admin.php" style="text-decoration: none;float: right;">BackToHome</a></button>
				<?php
		}
		else
		{
			echo "Not Updated memebership";
			?>
				<button><a href="admin.php" style="text-decoration: none;float: right;">BackToHome</a></button>
				<?php
		}	
	}
	else

	{
		echo "NOT SELECTED";
		?>
				<button><a href="admin.php" style="text-decoration: none;float: right;">BackToHome</a></button>
				<?php
	}
}
else
{
	echo "VALUE NOT SET";
	?>
				<button><a href="admin.php" style="text-decoration: none;float: right;">BackToHome</a></button>
				<?php
}
?>