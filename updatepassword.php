<?php
if(isset($_POST['submit']))
{
	$uname=$_POST['name1'];
	$email=$_POST['email1'];
	$f=0;

	$conn=new mysqli("localhost","root","","gym_management");
	$q="select username,email from userdata ";
	$res=$conn->query($q);
	while($row=$res->fetch_assoc())
	{
		if($row['username']==$uname && $row['email']==$email)
		{	
			
			$f=1;
			session_start();
			$_SESSION['name']=$uname;
			break;
		}
		
	}


	if($f==1)
	{	
		?>

		<!DOCTYPE html>
<html>
<head>
	<title>Sports Complex</title>
<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">	
<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/slide.css">
	<link  type="text/javascript" href="js/slide.js">
	<link rel="stylesheet" type="text/css" href="css/button.css">
		<!-- <script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script> -->
	<!-- <script type = "text/javascript" >
   function preventBack(){window.history.back();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
	 -->
</head>
<body  style="background-image: url('img/img--19.jpg'); background-size: cover; color: white; background-repeat: no-repeat;background-attachment: fixed;">

	<ul>
		<li><a class="active" href="index.php">HOME</a></li>
		<li> <a href="gallary.php"> GALLARY</a></li>
		<li> <a href="contact.php"> CONTACT US</a></li>
		<li> <a href="about.php"> ABOUT</a></li>
		<li><a href="registration.php">BECOME MEMEBER</a></li>
		<li><a><input type="search" name="o" placeholder="search...."></a></li>
		<li> <a href="login.php" style="float: right;"> SIGN IN</a></li>
	</ul>
	<div style="text-align: center;">
		<form method="post" action="updatepassword2.php">
			New Password<br><input style="width: 40%; height: 40px;border-radius: 20%;" type="password" name="pass1"><br><br>
			Confirm Pasword<br><input style="width: 40%; height: 40px;border-radius: 20%;" type="password" name="pass2"><br><br>
			<input type="submit" name="uppass">
		</form>
	</div>
		<?php
		
		
	}
	else
	{
		
			echo "User Doesnot valid or email";
		
	}





}
else
{
	echo "values is not set";
}
?>