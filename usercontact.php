
<?php
session_start();
if(isset($_SESSION["username"]) )
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/slide.css">
	<link  type="text/javascript" href="js/slide.js">

</head>
<body style="background-image: url('img/img--17.jpg'); background-size: cover;" >
<ul>
		<li><a href="userindex.php" class="active">
										<?php
										$conn=new mysqli("localhost","root","","gym_management") or die(" cannot connect");
										//if(isset($_GET['success']))
										//{	
											$query=" select * from userdata where username='".$_SESSION["username"]."'";
											$rs=$conn->query($query);
											while($row=$rs->fetch_assoc())
											{
													$img=$row['image'];
														?>
																<img src="img/<?php echo $img;?>" height="100" width="100">
														<?php
											}

										//}
										//else
										//{
										//	echo "prifile Is not uploaded make sure";
										//}


										?>
</a></li>

		<li> <a href="usergallary.php"> GALLARY</a></li>
		<li> <a href="usercontact.php"> CONTACT US</a></li>
		<li> <a href="userabout.php"> ABOUT</a></li>
		<li> <a href="image.php">EDIT PROFILE</a></li>
		<li><a><input type="search" name="o" placeholder="search...."></a></li>
		<li> <a href="logout.php" style="float: right;"> LOG OUT</a></li>
		<li> <a href="membership.php">MEMBERSHIP AND SCHEDULE</a></li>
	</ul>


<p style="color: blue;text-align: center;font-size: 60px;">WELCOME IN SPORT COMPLEX</p>

	<div align="center" style="font-size: 20px; font-family: sans-serif;color: #00BFFF;" >

	<form>
		<br>
		 <lebel > NAME</lebel><br><input style="width: 40%; height: 30px; background: transparent;"  type="text" name="c1" size="30" placeholder="first name"><input  style="width: 40%; height: 30px; background: transparent;"  type="text" name="c2" size="30" placeholder="last name"><br><br>

		
		   EMAIL<br><input  style="width: 80%; height: 30px; background: transparent;"   type="text" name="c3" size="100" placeholder="email id"><br><br>

		
		     PHONE NO<br><input style="width: 80%; height: 30px; background: transparent;" type="number" name="c4" size="100" placeholder="phone no"><br><br>

		     
		MESSAGE SUBJECT
		<br><select  style="width: 80%; height: 30px; background: transparent;">
			<option >kanchan</option>
			<option>kanchan1</option>
			<option>kanchan2</option>
			<option>kanchan3</option>		
		</select><br><br><br>

		MESSAGE<br>
		<textarea  style="width: 80%; height: 200px; background: transparent; color:red; font-family:times;" placeholder="MESSAGE"></textarea><br>


	<input type="submit" value="submit">
</form>
</div>
</body>


<?php
}
else 
{
	header("Location:index.php");
}
?>