<?php
// $name=$_POST["name"];
// $pass=$_POST["pass"];

$name=$_REQUEST['r1'];


$mobile_no=$_REQUEST['r2'];


$email=$_REQUEST['r3'];


$password=$_REQUEST['r4'];


$confirm_password=$_REQUEST['r5'];
$sql="INSERT INTO userdata (username,email,password,contact_no) VALUES ('".$name."','".$email."','".$password."','".$mobile_no."')";


 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "gym_management";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
  
$q="select password,username,email,contact_no from userdata";
$rs=$conn->query($q);
$f=0;
if($rs->num_rows >0)
{
  while($rows=$rs->fetch_assoc())
  {
    if($name==$rows['username'] || $email==$rows['email'] || $mobile_no==$rows['contact_no']   )
    {
        $f=1;
        break;
    }

  }
}

if($f==1)
{
  echo "USER EXISTS";  
}
else
{
   if($password==$confirm_password)
    {
     echo "USER CREATED";
     $rs1=$conn->query($sql);
     // echo "$rs1<hr>";
     // echo "$sql";
    } 
    else
    {
       echo "please confirm password";
    }
}



?>