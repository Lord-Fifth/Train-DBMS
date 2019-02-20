<?php
   include('res.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
	<style type="text/css">
		/*font-family: 'Abel', sans-serif;
font-family: 'Montserrat', sans-serif;
font-family: 'Patua One', cursive;*/
		*{
			padding: 0;
			margin: 0;	
		}
		body{
			background: #eee;
		}
		.bg-image{
			width: 100%;
			height: 626px;
			background: url('train.jpg');
			background-size: cover;
		}
		.bw-gradient{
			width: 100%;
			height: 600px;
			position: absolute;
			/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#8b008b+0,000000+100&0.77+5,0+100 */
background: -moz-linear-gradient(top, rgba(139,0,139,0.77) 0%, rgba(132,0,132,0.77) 5%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(139,0,139,0.77) 0%,rgba(132,0,132,0.77) 5%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(139,0,139,0.77) 0%,rgba(132,0,132,0.77) 5%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c48b008b', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
		}
		.container{
			width: 960px;
			height: 600px;
			position: relative;
			margin: 0 auto;
		}
		.header{
			width: 960px;
			padding: 20px;
		}
		nav>ul{
			position: absolute;
			right: 80px;
		}
		nav>ul>li{
			list-style: none;
			float: left;
			height: 30px;
			line-height: 30px;
		}
		nav>ul>li>a{
			text-decoration: none;
			font-family: 'Abel', sans-serif;
			color: #fff;
			font-size: 16px;
			font-weight: bold;
			padding: 0 20px 0 20px;
		}
		.butn{
			width: 60px;
			height: 30px;
			background: #fff;
			font-size: 18px;
			font-weight: bold;
			font-family: 'Abel', sans-serif;
			border: none;
			border-radius: 5px;
			color: #8b008b;
			position: absolute;
			right: 0;
		}
		.logo{
			color: #fff;
			font-family: 'Abel', sans-serif; 
			font-size: 30px;
			position: absolute;
			padding: 20px;
		}	
		.brand-quote{
			color: #fff;
			font-family: 'Abel', sans-serif; 
			font-size: 50px;
			padding-left: 0px;
			position: relative;
			top: 40px;
		}
		.para{
			width: 800px;
			font-family: 'Montserrat', sans-serif;
			color: #fff;
			position: relative;
			top: 120px;
			padding-left: 10px;
			line-height:30px
		}
		.textbox{
			width: 100%;
			overflow: hidden;
			font-size: 20px;
			padding: 8px 0;
			margin: 8px 0;
			border-bottom: 1px solid #dfc12a;
		}
		.textbox input{
			border: none;
			outline: none;
			background: none;
			color: white;
			font-size: 18px;
			width: 80%;
			float: left;
			margin: 0 10px;
		}
		.btn{
			width: 100%;
			background: none;
			border: 2px solid #dfc12a;
			color: white;
			padding: 5px;
			font-size: 18px;
			cursor: pointer;
			margin: 12px 0;
		}
	</style>
</head>
<body>
	<div class="bg-image">
		<div class="bw-gradient"></div>
		<div class="container">
			<div class="logo">IRCTC</div>
			<div class="header">
				<nav>
					<ul>
						<li><a href=index.html>Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="train.php">Trains</a></li>
						<li><a href="login.html">Login In</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</nav>
				<form method="POST" action="index.html">
 				   <input class="butn" type="submit" value="Sign Out" />
				</form>		
			<h1 class="brand-quote" style="color: #dfc12a">Welcome <?php echo  $_SESSION['myusername']; ?>.</h1>
			<br><br><br>
				<nav>
					<ul>
						<li><a href=reservation.php>Reserve</a></li>
						<li><a href=cancel.php>Cancel</a></li>
					</ul>
				</nav>
			
		</div>
			<form action = "reservation.php" method = "post">
				<div class="textbox">
           	   		 <input type = "text" placeholder="Train No" name = "tno" class = "box"/>
           	    </div>
                <input class="btn" type = "submit" value = "Go"/>
        	</form>
	</div>
</body>
</html>