<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
session_destroy();?>
<!DOCTYPE html>
<html>
<head>
	<title>Sports Complex</title>
<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">	
<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/slide.css">
	<link  type="text/javascript" href="js/slide.js">
	<link rel="stylesheet" type="text/css" href="css/button.css">
		<script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
	<!-- <script type = "text/javascript" >
   function preventBack(){window.history.back();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
	 -->
</head>
<body  style="background-image: url('img/img--19.jpg'); background-size: cover; color: white; background-repeat: no-repeat;background-attachment: fixed;">

	<ul>
		<li><a class="active" href="index.php">HOME</a></li>
		<li> <a href="gallary.php"> GALLARY</a></li>
		<li> <a href="contact.php"> CONTACT US</a></li>
		<li> <a href="about.php"> ABOUT</a></li>
		<li><a href="registration.php">BECOME MEMEBER</a></li>
		<li><a><input type="search" name="o" placeholder="search...."></a></li>
		<li> <a href="login.php" style="float: right;"> SIGN IN</a></li>
	</ul>
	<!-- <marquee direction="down" height="20px">kanchan</marquee> -->
	<div style="background-image: url('img/img--16.jpg'); background-size: cover; height: 400px; width: 100%; text-align: center;">
		<h1>WELCOME TO SPORT COMPLEX</h1>
		<h3>WITH YOU HAPPY JURNEY</h3>
		<a href="registration.php" class="button12">CRETE ACCOUNT</a>
	</div>
	<marquee direction="right" height="20px"  style="font-size: 20px; color:hsla(120,60%,70%,9);">KANCHAN</marquee>
	<hr>
	<section>
		
		<div style="background-image: url('img/img--15.jpg'); background-size: cover;; height: 200px; width:25vw; display: inline-block;text-align: center;">
			<h2>CROSSFIT</h2>
			<h3>all about your health you beecome healthikesr fitt</h3>
			<a href="https://en.wikipedia.org/wiki/CrossFit" class="button12">MORE</a>
		</div>


		<div style="background-image: url('img/img--14.jpg'); background-size: cover; height: 200px; width: 25vw; display: inline-block;text-align: center;">
			<h2>Weight LIfiting</h2>
			<h3>all about your health you beecome healthikesr fitt</h3>
			<a href="https://en.wikipedia.org/wiki/Weight_training" class="button12">MORE</a>
		</div>

		<div style="background-image: url('img/img--13.jpg'); background-size: cover; height: 200px; width: 25vw; display: inline-block;text-align: center;">
			<h2>Cardio</h2>
			<h3>all about your health you beecome healthikesr fitt</h3>
			<a href="https://www.healthstatus.com/health_blog/wellness/cardio-exercise-definition-and-benefits/" class="button12">MORE</a>

		</div>

		<div style="background-image: url('img/img--12.jpg'); background-size: cover; height: 200px; width: 20vw; display: inline-block;text-align: center;">
			<h2>Yoga</h2>
			<h3>all about your health you beecome healthikesr fitt</h3>
			<a href="https://simple.wikipedia.org/wiki/Yoga" class="button12">MORE</a>

		</div>
	
	</section>
	<hr>
	<section >
		<div style="text-align: center; background-image: url('img/img--9.jpg'); background-size: cover; display:inline-block; height: 400px; width: 100%;">
			<h1>GALLARY</h1>
			<h3>we provide best to best service take a look of our system</h3>
			<a href="gallary.php" class="button12">CHECK</a>
		</div>
	</section>
<hr>
<section>
<!-- mr patil sir information -->
	<div style="width: 100vw;height: 400px;">
		<div style="background-image: url('img/img--27.jpg'); background-size: cover; height: 100%; width: 50%; display: inline-block;text-align: center;">
			<h2>SAMAR JHA </h2>
			<h3>CARDIO SPECIALIST</h3>
			<a href="#" class="button12">MORE</a>
		</div>
	

		<div style="background-image: url('img/img--23.jpg'); background-size: cover; height: 100%; width: 47%; display: inline-block;text-align: center;">
			<h2>HIS PROFILE</h2>
			<h3>GET BEST TRAINNIG</h3>
			<h1>100%</h1>
			<h3></h3>
			<h3></h3>

		</div>
	</div>
<!-- 	end of me patil sir information -->


<hr>
		
<hr>
<!-- mr patil sir information -->
	<div style="width: 100vw;height: 400px">
		<div style="background-image: url('img/img--32.jpg'); background-size: cover; height: 100%; width: 50%; display: inline-block;text-align: center;">
			<h2>SOMNATH CHAMKURE</h2>
			<h3>WEIGHT LIFTING SPECIALIST</h3>
			<a href="#" class="button12">MORE</a>
		</div>

	<div style="background-image: url('img/img--25.jpg'); background-size: cover; height: 100%; width: 47%; display: inline-block;text-align: center;">
			<h2>HIS PROFILE</h2>
			<h3>GET BEST TRAINNING AS YOU NEVER ACCEPT</h3>
			<h1>100%</h1>
			<h3></h3>
			<h3></h3>

		</div>
	</div>
<!-- 	end of me patil sir information -->

<hr>

<!-- mr patil sir information -->
	<div style="width: 100vw;height: 400px">
		<div style="background-image: url('img/img--31.jpg'); background-size: cover; height: 100%; width: 50%; display: inline-block;text-align: center;">
			<h2>KANCHAN SHARMA</h2>
			<h3>YOGA & CARDIO SPECIALIST</h3>
			<a href="#" class="button12">MORE</a>
		</div>

		<div style="background-image: url('img/img--24.jpg'); background-size: cover; height: 100%; width: 47%; display: inline-block;text-align: center;">
			<h2>HIS PROFILE</h2>
			<h3>GET BEST OF KANCHAN SIR</h3>
			<h1>0% BECAUSE HE IS TOO LOWER TO COMPETE SAMAR AND SOMNATH</h1>
			<h3></h3>
			<h3></h3>

		</div>
	</div>
<!-- 	end of me patil sir information -->
<hr>
	</section>
	<hr>
	<hr>
	<hr>
	<h1 style="text-align: center; color: yellow;">THANK YOU FOR VISIT OUR HOME</h1>
	<hr>
	<hr>
	<hr>
</body>
</html>
