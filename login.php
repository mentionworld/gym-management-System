<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
session_destroy();    ?>



<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/slide.css">
	<link  type="text/javascript" href="js/slide.js">
	<link  type="text/javascript" href="js/varify.js">
	<script type="text/javascript" >
		function login()
{	
	var v1=document.getElementById("n1").value
	var v2=document.getElementById("n2").value
	
	if(v1=="")
	{
		alert("name should not empty")
	}
	else if(v2=="")
	{
		alert("password should not empty")
	}
	else
	{		
		var XHRObj;
		if(window.XMLHttpRequest)
		{
				XHRObj=new XMLHttpRequest()
		}
		else
		{
			XHRObj=new ActiveXObject("Microsoft.XMLHTTP")
		}
			XHRObj.open("POST","userdata.php?r1="+v1+"&r2="+v2,true)
			XHRObj.onreadystatechange=function()
			{
				if(XHRObj.readyState==4 && XHRObj.status==200)
					{
							
							
							alert(""+XHRObj.responseText);
							var a="login successful";
							var b="already logged in";
							if(a==XHRObj.responseText)
							{
							 window.location.replace("userindex.php");
							}
							else if(b==XHRObj.responseText)
							{
								window.location.replace("userindex.php");
							}
							else
							{
								window.location.replace("login.php");
							}

					}
			
			};
			XHRObj.send(); 


	}
}
	</script>



</head>
<body bgcolor="#D2691E" >

	<ul>
		<li><a class="active" href="index.php">HOME</a></li>
		<li> <a href="gallary.php"> GALLARY</a></li>
		<li> <a href="contact.php"> CONTACT US</a></li>
		<li> <a href="about.php"> ABOUT</a></li>
		<li><a href="registration.php">BECOME MEMEBER</a></li>
		<li><a><input type="search" name="o" placeholder="search...."></a></li>
		<li> <a href="login.php" style="float: right;"> SIGN IN</a></li>
	</ul>


<p style="color: blue;text-align: center;font-size: 60px;">WELCOME IN SPORT COMPLEX</p>

	<div style="background-color: white; height: 00px; width:25%; display: inline-block;"></div>
	<div style="background-color: #D8BFD8;color: blue; height: 400px; width:50%; display: inline-block;text-align: center;">
				Log In 
				<form method="POST"  >
				<p >USERNAME<input style="width: 80%; height: 30px;"   type="text"  name="name" id="n1"><br></p>
				<p >PASSWORD<input style="width: 80%; height: 30px;"  type="password" name="pass" id="n2"><br></p>
				<input type="button" value="LOGIN" onclick="login()" >
				</form>
			<a href="ForgetPassword.php">Forget password?</a><br>
			<button><a href="registration.php" style="display: inline-block;text-decoration: none;">create</a></button><br>
			<br>
			<br>
			<br>
		
			<button><a href="adminlogin.php" style="text-decoration: none;">Admin Login</a></button>
	</div>
	<div style="background-color: white; height: 00px; width:25%; display: inline-block;"></div>
	<div  id="div"></div>
</body>
</html>
