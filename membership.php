<?php
session_start();
if(isset($_SESSION["username"]) )
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sports  Complex</title>
<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">	
<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/slide.css">
	<link  type="text/javascript" href="js/slide.js">
	<script type="text/javascript" >


	</script>

	<style type="text/css">
		table ,td, th
		{
			border: 0.5px solid black;
			text-align: center;

		}
		table
		{
			border-collapse: collapse;
			width: 100%;
			height: 400px;
		}
		th
		{
			height: 100px;
			background-color: skyblue;
		}
		tr
		{
			height: 50px;
			background-color: white;
		}
		.s
		{
			color: green;
			background-color: #EBDEF0;
		}
		.d
		{
			color: purple;
			background-color: #A9DFBF;
		}
	</style>

	<link rel="stylesheet" type="text/css" href="css/button.css">
	<link rel="stylesheet" type="text/css" href="css/resizer.css">
	<!-- 	<script type = "text/javascript" >
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
	
	<ul><li><a href="userindex.php"  class="active" >
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
	<hr>
	<h1 style="text-align: center;">SCHEDULE FOR WORKOUT</h1>
	<div style="overflow-x: auto;">
<table>
	<thead>
		<th>Time/Day       .</th>
		<th>Monday</th>
		<th>Wedsday</th>
		<th>tuesday</th>
		<th>thursday</th>
		<th>friday</th>
		<th>Saturday</th>
	</thead>
	<tbody>
		<tr class="d">
			<td>05:00AM-07:00AM</td>
			<td>Yoga</td>
			<td>Yoga</td>
			<td>Yoga</td>
			<td>Yoga</td>
			<td>Yoga</td>
			<td>Yoga</td>
		</tr>
		<tr class="s">
			<td>07:00AM-10:00AM</td>
			<td>Crossfit</td>
			<td>Crossfit</td>
			<td>Crossfit</td>
			<td>Crossfit</td>
			<td>Crossfit</td>
			<td>Crossfit</td>
		
		</tr>
		<tr class="d">
			<td>05:00PM-07:00PM</td>
			<td>Weiight Lifting</td>
			<td>Weiight Lifting</td>
			<td>Weiight Lifting</td>
			<td>Weiight Lifting</td>
			<td>Weiight Lifting</td>
			<td>Weiight Lifting</td>
		</tr>
		<tr class="s">
			<td>07:00PM-10:00PM</td>
			<td>Cardio</td>
			<td>Cardio</td>
			<td>Cardio</td>
			<td>Cardio</td>
			<td>Cardio</td>
			<td>Cardio</td>
		</tr>
	</tbody>
</table>
</div>
<h1 style="text-align: center;">PAY FOR MEMBERSHIP</h1>
<div> 



<h2>Your Current Membership</h2>
<?php
$q2="select membership,exercise,charge from userdata where username='".$_SESSION['username']."'";
		$res2=$conn->query($q2);
		while($rows2=$res2->fetch_assoc())
		{
			echo "<b><br> Membership: ". $rows2['membership']."<br>Exercise: ".$rows2['exercise']."<br>Charge:Rs.".$rows2['charge']."<br>";

		}
?>







<h2>Update Your Membership</h2>

<div style="height: 50px; width: 50%;text-align: center;">
	<form method="post" action="membershipdata.php">
		<br>
		Select Exercise you Like
<select name="exercise" style="height: 30px;width: 500px;">
	<option value="yoga">YOGA</option>
	<option value="crossfit">CROSSFIT</option>
	<option value="weightlifting">WEIGHT LIFTING</option>
	<option value="cardio">CARDIO</option>
</select>
</div>

<div style="height: 50px; width: 50%;text-align: center;">
	<br>
	Select Membership
<select name="membership" style="height: 30px;width: 500px;" >
	<option value="monthly">MONTHLY</option>
	<option value="annualy">ANNUALY</option>
</select>
<br>
Stared Date<input type="date" name="start" style="height: 30px;width: 500px;">
<br>
ENd Date<input type="date" name="end" style="height: 30px;width: 500px;">
<input type="submit" name="submit" value="get selected values">
</form>
</div>



<!-- <table>
	<thead>
		<th>STAR DATE/MEMBERSHIP</th>
		<th>MONTHLY</th>
		<th>ANNUALY</th>
	</thead>
	<tbody>
		<form method="POST"  onsubmit="login()">
		<tr class="d">
			<td>YOGA</td>
			<td>GET<br><input type="submit"  value="Rs.1500" name="myoga" ></td>
			<td>GET<br><input type="submit"  value="Rs.4000" name="yyoga" ></td>
		</tr>
		<tr class="s">
			<td>CROSS FIT</td>
			<td>GET<br><input type="submit" name="mcross" value="Rs.1500" ></td>
			<td>GET<br><input type="submit" name="ycross" value="Rs.4000" ></td>
		
		</tr>
		<tr class="d">
			<td>WEIGHT LIFTING</td>
			<td>GET<br><input type="submit" name="mweight" value="Rs.1500" ></td>
			<td>GET<br><input type="submit" name="yweight" value="Rs.4000" ></td>
		</tr>
		<tr class="s">
			<td>CARDIO</td>
			<td>GET<br><input type="submit" name="mcardio" value="Rs.1500" ></td>
			<td>GET<br><input type="submit" name="ycardio" value="Rs.4000" ></td>
		</tr>
	|</form>
	</tbody>
</table>
 -->	
</div>
</body>
</html>

<?php
}
else 
{
	header("Location:index.php");
}
?>