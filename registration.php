<!DOCTYPE html>
<html>
<head>
	<title>Registration Account</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/slide.css">
	<script type="text/javascript" >
		function login()
{	
	var v1=document.getElementById("r1").value
	var v2=document.getElementById("r2").value
	var v3=document.getElementById("r3").value
	var v4=document.getElementById("r4").value
	var v5=document.getElementById("r5").value

	if(v1=="")
	{
		alert("name should not empty")
	}
	else if(v4=="")
	{
		alert("password should not empty")
	}
	else if(v5=="")
	{
		alert("please conform  password")
	}
	else if(v5!=v4)
	{
		alert("pleasr enter correct Confirfom password")
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
			XHRObj.open("POST","user.php?r1="+v1+"&r2="+v2+"&r3="+v3+"&r4="+v4+"&r5="+v5,true)
			XHRObj.onreadystatechange=function()
			{
				if(XHRObj.readyState==4 && XHRObj.status==200)
					{
							
							// alert("user created ")
							alert(""+XHRObj.responseText)
							if("USER CREATED"==XHRObj.responseText)
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
<body style="background-image: url('img/img--18.jpg');  background-size: cover;">

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
	<div style="background-image: url('img/img--12.jpg'); background-size: cover; color: blue; height: 500px; width:50%; display: inline-block;text-align: center;">

	<form method="POST">
	
		<br>ENTER NAME   <br> <input style="width: 80%; height: 30px;" type="text" name="r1" id="r1"><br><br>
		ENTER MOBILE NO<br><input style="width: 80%; height: 30px;"  type="number" name="r2" id="r2"><br><br>
	    ENTER EMAIL   <br> <input style="width: 80%; height: 30px;"  type="email" name="r3" id="r3"><br><br>
	  <!--   AGE      <br><input style="width: 80%; height: 30px;"  type="text" name="r4"><br><br> -->
	    PASS      <br>   <input style="width: 80%; height: 30px;"  type="text" name="r4"  id="r4"><br><br>
	    Confirfom password <br>    <input  style="width: 80%; height: 30px;"   type="text" name="r5" id="r5"><br><br>
	<input type="button" value="create" onclick="login()">
			<a href="login.php" style="display: inline-block;text-decoration: none;padding: 2px 10px;background-color: red;margin: 1px">login</a>
	</form>
</div>
<div style="background-color: white; height: 00px; width:25%; display: inline-block;"  id="div"></div>
</body>
</html>