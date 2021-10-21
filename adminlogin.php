<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["password"]);
unset($_SESSION["email"]);
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
			XHRObj.open("POST","admin_verify.php?r1="+v1+"&r2="+v2,true)
			XHRObj.onreadystatechange=function()
			{
				if(XHRObj.readyState==4 && XHRObj.status==200)
					{
							
							
							alert(""+XHRObj.responseText);
							var a="login successful";
							var b="already logged in";
							if(a==XHRObj.responseText)
							{
							 window.location.replace("admin.php");
							}
							else if(b==XHRObj.responseText)
							{
								window.location.replace("admin.php");
							}
							else
							{
								window.location.replace("adminlogin.php");
							}

					}
			
			};
			XHRObj.send(); 


	}
}
	</script>



</head>
<body style="background-image: url('img/x3.jpg');background-size: cover;">


<p style="color: blue;text-align: center;font-size: 60px;">WELCOME IN SPORT COMPLEX</p>

	<div style="background-color: transparent; height: 00px; width:25%; display: inline-block;"></div>
	<div style="background-color: #D8BFD8;color: blue; height: 400px; width:50%; display: inline-block;text-align: center;">
				Log In 
				<form method="POST"  >
				<p >USERNAME<input style="width: 80%; height: 30px;"   type="text"  name="admin_name" id="n1"><br></p>
				<p >PASSWORD<input style="width: 80%; height: 30px;"  type="password" name="admin_pass" id="n2"><br></p>
				<input type="button" value="LOGIN" onclick="login()" >
				</form>
			<a href="ForgetPassword.php">Forget password?</a><br>
			
	</div>
	
</body>
</html>
