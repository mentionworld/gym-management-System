<?php

$conn=new mysqli("localhost","root","","gym_management") or die(" cannot connect");
if(isset($_POST["upload"]))
{
	$image=$_FILES['image']['name'];
	$type=$_FILES['image']['type'];
	$temp_name=$_FILES['image']['tmp_name'];
	$size=$_FILES['image']['size'];

	$imagexnt=explode('.',$image);
	$allowexnt=strtolower(end($imagexnt));
	$allow=array('jpg','jpeg','png' );
	$target="img/".$image;

	if(in_array($allowexnt,$allow))
	{
		session_start();

		if($size<10000000)
		{
			$query=" insert into userdata(image) values ('".$image."') where username='".$_SESSION["username"]."'";
			$rs=$conn->query($query);
			if($rs>0)
			{
			echo "image inserted";
			move_uploaded_file($temp_name,$target);
			header("Location:display.php?success");
			}
			else
			{
				$query1="UPDATE userdata SET image='".$image."' where username='".$_SESSION["username"]."'";
				$rs2=$conn->query($query1);
				move_uploaded_file($temp_name,$target);
			header("Location:display.php?success");

			}
		}
		else
		{
			echo "IT IS LARGE FILE ";
		}

	}
	else
	{
		echo "THIS TYPE IS NOT SUPPORTED";
	}
	// print_r($image);
}
else
{
	header("Location:image1.php");
}
?>