

<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
session_destroy();
if(isset($_SESSION["username"]) && $_SESSION["username"]==1)
{
	header("Location:userindex.php");
}
else if(!isset($_SESSION["username"])  &&   $_SESSION["username"]  ||   $_SESSION["username"]==0)
{
	header("Location:index.php");
}
?>
