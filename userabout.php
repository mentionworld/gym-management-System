
<?php
session_start();
if(isset($_SESSION["username"]) )
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/slide.css">
	<link  type="text/javascript" href="js/slide.js">

</head>
<body style="background-image: url('img/img--19.jpg'); background-size: cover; color: white; background-repeat: no-repeat;background-attachment: fixed;">
<ul>
		<li><a href="userindex.php" class="active">
										<?php
										$conn=new mysqli("localhost","root","","gym_management") or die(" cannot connect");
									//	if(isset($_GET['success']))
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

<h1 style="color: blue;text-align: center;">WELCOME TO SPORTS COMPLEX</h1>
<h3 style="color: purple;text-align: center;">our mission to provide you better to best service</h3>
<p>A gymnasium, also known as a gym, is a covered location for gymnastics, athletics and gymnastic services. The word is derived from the ancient Greek gymnasium. They are commonly found in athletic and fitness centres, and as activity and learning spaces in educational institutions. "Gym" is also slang for "fitness centre", which is often an area for indoor recreation. </p>
<h1 style="color: blue;text-align: center;">Mission</h1>
<p>
We are intensely committed to providing a friendly, innovative and healthy workout environment equipped with world class facilities & equipment at an affordable price.</p>

<h1 style="color: blue;text-align: center;">Vision</h1>
<p>
To be a leader, and model for the gym industry nationwide. As well as setting a new standard for fitness across the spectrum.</p>
<h1 style="color: blue;text-align: center;">WORLD CLASS MODERN AESTHETICS</h1>
<p>
"Aesthetics have a vital role in keeping you motivated. Research shows that the more the environment is live and positive the more effective the results are and you feel like working out without getting tired. Our gym has the best interior design to provide luxurious experience to all our members. We have got it all, from Bose speakers to changing LED Lights so as to bring the right energy and positivity while you workout."</p>


<h1 style="color: blue;text-align: center;">SPECIALIZED FITNESS EXPERTS</h1>
<p>
The team at 21 fitness is well trained and is always ready to guide and motivate you to obtain your desired results in the least time possible. Our fitness experts understand that no two people are the same and neither can be their training schedule. We provide taylor made training schedules to all our clients and hence provide different training to clients based on their fitness goals. They coordinate with members’ everyday so that members can keep a pace with their training routine.</p>


<h1 style="color: blue;text-align: center;">NUTRITIONISTS</h1>
<p>
The demand of the right nutrition brings the need of a nutritionist. 21 fitness has a team of experts from an array of nutrition and wellness background that share their knowledge and guide members by contemplating their own nutrition programs. The highly qualified in- house nutritionists keep a close check on your dietary needs and make sure that your diet compliments your workout and never goes wrong. They also provide you with personalised meal plan that will help you find your scientific nutrition needs.</p>
</body>
</html>

<?php
}
else 
{
	header("Location:index.php");
}
?>