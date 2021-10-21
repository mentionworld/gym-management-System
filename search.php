<?php
	if(isset($_POST['search']))
	{
				$search=$_POST['username'];
				$f=0;
		
				$conn=new mysqli("localhost","root","","gym_management");
				$q1="select username from userdata";
				$res=$conn->query($q1);
				while($row=$res->fetch_assoc())
				{
		if($row['username']==$search)
		{
			$f=1;
			break;
		}
	}
			

			if($f==1)
			{
				echo "username match";
				
				$q2="select email,password,contact_no,membership,image,exercise,charge from userdata where username='".$search."'";
				$res2=$conn->query($q2);
			while($rows2=$res2->fetch_assoc())
				{
				echo "<b><br>Email:   ".$rows2['email']."<br> Password:  ".$rows2['password']."<br> Contact: ".$rows2['contact_no']." <br>  Membership: ". $rows2['membership']."<br>Exercise: ".$rows2['exercise']."<br>Charge:Rs.".$rows2['charge']."<br><hr>";
			
				}
				?>
				<button><a href="admin.php" style="text-decoration: none;">BackToHome</a></button>
				<?php
			}
			else
			{
				echo "ddoesnot match";
				?>
				<button><a href="admin.php" style="text-decoration: none;">BackToHome</a></button>
				<?php
			}
		
	}
	else
	{
		echo "not set";
		?>
				<button><a href="admin.php" style="text-decoration: none;">BackToHome</a></button>
				<?php
	}

?>