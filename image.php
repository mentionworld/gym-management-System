

<?php
session_start();
if(isset($_SESSION["username"]) )
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
</script>
 -->
</head>
<body  style="background-image: url('img/img--19.jpg'); background-size: cover; color: white; background-repeat: no-repeat;background-attachment: fixed;">

	<ul>
		<li><a href="userindex.php" class="active">
															<?php
															// session_start();
										$conn=new mysqli("localhost","root","","gym_management") or die(" cannot connect");
										// if(isset($_GET['success']))
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

<form method="POST" action="process.php" enctype="multipart/form-data">
	<h1>ADD YOUR PROFILE</h1>
	<input type="file" name="image">
	<input type="submit" value="upload" name="upload" >
</form>
</body>
</html>
<?php
}
else 
{
	header("Location:index.php");
}
?>