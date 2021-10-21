<?php


$username=$_REQUEST['r1'];
$password=$_REQUEST['r2'];
session_start();
if(isset($_SESSION["username"]) && $_SESSION["username"]==$username )
{
  echo "already logged in";
  // header("Location:userindex.php");
}
else 
{

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "gym_management";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 // $sql1="delete from userdata";
 // $result1=$conn->query($sql1);

$sql = "SELECT password FROM userdata where username='".$username."'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
 {
    // output data of each row
    while($row = $result->fetch_assoc())
  {
      if($password!=$row['password'])
      {
      	echo "incorrect user and password";
      }
      else
      {
      	echo "login successful";
        $_SESSION["username"]=$username;
         $_SESSION["password"]=$password;
         $_SESSION['time']=time();
        
      }

  }
}
else
{
	echo "you are no a valid user please check user name and password";
}

}
?>