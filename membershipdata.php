<?php

if(isset($_POST['submit']))
{	
				session_start();
				$conn=new mysqli("localhost","root","","gym_management");
				$q1="select membership from userdata where username='".$_SESSION['username']."'";
				$res=$conn->query($q1);
				// $q2="select count(membership) from userdata";
				// $res2=$conn->query($q2);
				// print_r($res2);

	while($row=$res->fetch_assoc())
	{
				if($row['membership']="")
				{
					$exercise=$_POST['exercise'];
					$membership=$_POST['membership'];
							// $start=$_POST['start'];
							// $end=$_POST['end'];
								// $diff=date_diff($end,$start,true);
							// echo "<script>alert('hello')</script>";
					if($exercise=='yoga'  || $exercise=='crossfit' || $exercise=='weightlifting' || $exercise=='cardio')
					{
						if($membership=='monthly')
						{
				

							?>
								<!DOCTYPE html>
								<html>
								<body>
								<div style="height: 60px;width: 100%; background-color: blue;text-align: center;color: white;">
									<h1><b>Take Your Reciept</b></h1>
								</div>
								<div>
									Name : <?php  echo $_SESSION['username']; ?>
									<br>
									Membership : <?php echo strtoupper($membership); ?>
									<br>
									Exercise: <?php echo strtoupper($exercise);    ?>
									<br>
									payed : Rs.1500
									<br>
									<br>
									<button onclick="window.print()">Print</button> <button><a href="membership.php" style="text-decoration: none;">GoBack</a></button> 
								</div>
								</body>
								</html>
							<?php
				
								$q="update userdata set membership='".$membership."',exercise='".$exercise."',charge=1500 where username='".$_SESSION['username']."'";
								$res=$conn->query($q);
				
							}
						else if($membership=='annualy')
							{
							?>
							<!DOCTYPE html>
							<html>
							<body>
							<div style="height: 60px;width: 100%; background-color: blue;text-align: center;color: white;">
							<h1><b>Take Your Reciept</b></h1>
								</div>
							<div>
								Name : <?php  echo $_SESSION['username']; ?>
						<br>
						Membership : <?php echo strtoupper($membership); ?>
						<br>
						Exercise: <?php echo strtoupper($exercise);    ?>
						<br>
						payed : Rs.4000
						<br>
						<br>
						<button onclick="window.print()">Print</button><button><a href="membership.php" style="text-decoration: none;">GoBack</a></button> 
					</div>
									</body>
					</html>
				<?php
				
			
				$q="update userdata set membership='".$membership."',exercise='".$exercise."',charge=4000 where username='".$_SESSION['username']."'";
				$res=$conn->query($q);
			}
			else
			{
				echo "membership not selected";
			}

		// header("Location:membership.php");
		} 
		else
		{
			echo "select Exercise";
		}
	}
	else
	{
		echo "<script>alert('Do You Want To upadte Membership')</script>";

		$exercise=$_POST['exercise'];
		$membership=$_POST['membership'];
		// $start=$_POST['start'];
		// $end=$_POST['end'];
		// $diff=date_diff($end,$start,true);
		// echo "<script>alert('hello')</script>";
		if($exercise=='yoga'  || $exercise=='crossfit' || $exercise=='weightlifting' || $exercise=='cardio')
		{
			if($membership=='monthly')
			{
				

				?>
				<!DOCTYPE html>
				<html>
				<body>
				<div style="height: 60px;width: 100%; background-color: blue;text-align: center;color: white;">
					<h1><b>Take Your Reciept</b></h1>
				</div>
				<div>
					Name : <?php  echo $_SESSION['username']; ?>
					<br>
					Membership : <?php echo strtoupper($membership); ?>
					<br>
					Exercise: <?php echo strtoupper($exercise);    ?>
					<br>
					payed : Rs.1500
					<br>
					<br>
					<button onclick="window.print()">Print</button> <button><a href="membership.php" style="text-decoration: none;">GoBack</a></button> 
				</div>
				</body>
				</html>
				<?php
				
				$q="update userdata set membership='".$membership."',exercise='".$exercise."',charge=1500 where username='".$_SESSION['username']."'";
				$res=$conn->query($q);
				
			}
		else if($membership=='annualy')
			{
				?>
				<!DOCTYPE html>
				<html>
				<body>
				<div style="height: 60px;width: 100%; background-color: blue;text-align: center;color: white;">
					<h1><b>Take Your Reciept</b></h1>
				</div>
				<div>
					Name : <?php  echo $_SESSION['username']; ?>
					<br>
					Membership : <?php echo strtoupper($membership); ?>
					<br>
					Exercise: <?php echo strtoupper($exercise);    ?>
					<br>
					payed : Rs.4000
					<br>
					<br>
					<button onclick="window.print()">Print</button><button><a href="membership.php" style="text-decoration: none;">GoBack</a></button> 
				</div>
				</body>
				</html>
				<?php
				
			
				$q="update userdata set membership='".$membership."',exercise='".$exercise."',charge=4000 where username='".$_SESSION['username']."'";
				$res=$conn->query($q);
			}
			else
			{
				echo "membership not selected";
			}
		}else
		{
			echo "select exercise";
		}
	}
	}
}
else
{
	echo "<script>alert('value not set')</script>";
	echo "<script> window.location.replace('membership.php')</script>";
}
?>