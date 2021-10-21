<?php
session_start();
if(isset($_SESSION['name']))
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body style="background-color: #00FDDF;">

<div style="height: 100px; width: 100%;text-align: center; color: red;font-size: 50px;background-image: url('img/x1.jpg'); background-size: cover;">
	<?php

	$name=$_SESSION['name'];
	$conn=new mysqli("localhost","root","","gym_management");
	echo "Welcome Admin ".strtoupper($name)." You To Sport Complex";
	?>
</div>
<hr>
<h1>THERE IS USERS INFORMATION</h1>

<!-- it's a experiment no 1011 -->


<div>
	<form method="post" action="search.php" >
	<input type="search" name="username">
	<input type="submit" name="search" value="search">
	</form>

	

</div>
<!-- end of game -->
<br>
<h1>.........................................................................................................</h1>
<h1>SEE ALL USER HERE</h1>
<hr>
<div >
	<?php
	$q1="select username from userdata";
	$res=$conn->query($q1);
	while($rows=$res->fetch_assoc()) 
	{	
		echo "<b>USER NAME:".$rows['username']."</b>";
		$q2="select email,password,contact_no,membership,image,exercise,charge from userdata where username='".$rows['username']."'";
		$res2=$conn->query($q2);
		while($rows2=$res2->fetch_assoc())
		{
			echo "<b><br>Email:   ".$rows2['email']."<br> Password:  ".$rows2['password']."<br> Contact: ".$rows2['contact_no']." <br>  Membership: ". $rows2['membership']."<br>Exercise: ".$rows2['exercise']."<br>Charge:Rs.".$rows2['charge']."<br>";
			?>
			<form method="post" action="updateuser.php">
				<input name="uname"   value="<?php echo $rows['username']; ?>">
				<input type="submit" name="delete" value="delete">
				<input type="submit" name="update" value="update">
			</form>
			<hr>
			<?php
			
		}
		
	}

	?>

</div>
<button><a href="http://localhost/phpmyadmin/sql.php?server=1&db=gym_management&table=userdata&pos=0" style="text-decoration: none;">Edit Users</a></button><button><a href="adminlogout.php" style="text-decoration: none;">Logout</a></button>

</body>
</html>
<?php
}
else
{
	header("Location:login.php");
}
?>