<?php 
$conn=new mysqli("localhost","root","","gym_management") or die("Connection Faild");
$q="select * from userdata ";
$res=$conn->query($q);


while($row=$res->fetch_assoc())
{
	echo "username:".$row['username']."<br>password:".$row['password']."<hr>";
	echo "";
}


 ?>