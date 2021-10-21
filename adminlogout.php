

<?php
session_start();
unset($_SESSION["name"]);
session_destroy();
if(isset($_SESSION["name"]))
{
	header("Location:admin.php");
}
else if(!isset($_SESSION["name"]) )
{
	header("Location:index.php");
}
?>
