<?php
if(isset($_REQUEST['r1']) && isset($_REQUEST['r2']))
{
$name=$_REQUEST['r1'];
$pass=$_REQUEST['r2'];

$conn=new mysqli("localhost","root","","gym_management") or die("Conbnection Fail");
$q="select name,password from admin ";
$res=$conn->query($q);
while($row=$res->fetch_assoc())
{
	if($name==$row['name']  &&  $pass==$row['password'])
	{
		session_start();
		$_SESSION['name']=$name;
		echo "login successful";
	}
}
}
else
{
	echo "not set";
}
?>