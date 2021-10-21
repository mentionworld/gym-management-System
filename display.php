<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
$conn=new mysqli("localhost","root","","gym_management") or die(" cannot connect");
if(isset($_GET['success']))
{	session_start();
	$query=" select * from userdata where username='kanchan kumar sharma'";
	$rs=$conn->query($query);
	while($row=$rs->fetch_assoc())
	{
		$img=$row['image'];
		?>
<img src="img/<?php echo $img;?>" height="200" width="200">
		<?php
	}

}
else
{
	header("Location:image1.php");
}


?>
</body>
</html>