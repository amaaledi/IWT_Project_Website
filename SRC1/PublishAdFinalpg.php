<?php
//linking the configuration file
require 'config.php';


	$username = $_GET['username'];

?>

<!DOCTYPE.html>
<html> 

	<!--linking style sheets and javascript-->
	<link rel="stylesheet" type="text/css" href="Styles\user.css">
	<link rel="stylesheet" type="text/css" href="Styles\Body.css">
	<script src="Js\Server.js"></script>

	<head>
		 <title>Publish Ad page</title> 
		 <h1 class = "header"><a href="#homepage">
			 <img class="hImage2" src = "Images\HeaderFooter\yousell.png" alt = "Website logo" ></a></img>
			 <img class="hImage" src="Images\HeaderFooter\SELLEAZY.png" ></img>
			 <a href="#login"><img class="logAv" src="Images\HeaderFooter\LoginAva.png"></a></img>
		 </h1>	
	</head>

	<!--Menu bar-->
	<ul class= "nav">
		 <li class="a"><a class="b" href="#home">Home</a></li>
		 <li class="dropDwn">
			 <a class="dropDownButt" href="#catagories">Catagories</a>
				 <div class="DropDwnLst">
				 	 <a class="b" href="#Automobiles">Automobiles</a>
				 	 <a class="b" href="#Electronics">Eletronics</a>
				 	 <a class="b" href="#Pets">Pets</a>
					 <a class="b" href="#Real-Estate">Real-Estate</a>
				 </div>
         </li>
		 <li class="a"><a class="b" href="#cintact us">Contact Us</a></li>
		 <li class="a"><a class="b" href="#faq">FAQ</a></li>
		 <div class="search">
				 <button class="butt" type="submit"><img class="buttImg" src="Images\HeaderFooter\Search.png"></img></button>
				 <input class="searchBox" type="text" placeholder="Search.." name="search"> 
		 </div>
	 </ul>
	
	 <body background="Images\HeaderFooter\Background.jpg" onload="transView()">

		<!--Displaying transaction details-->
         <div id="transInfo" >
             <h2>Transaction Information</h2>
             <p class="thnku">Thank You!</p>
             <form action="">
                 <ul class="orderList">
                     <li id="usrName">Username -:  <?php echo htmlspecialchars($username)?></li><br><br>
                     <li id="trDate"></li><br><br>
                     <li id="adId"></li><br><br>
                     <li id="amount"></li><br><br>
                 </ul>
             </form>

			 	<!--Directs to user account page-->
                 <a href="UserAccountpg.php"><button class="goBack" type="submit">Go Back to My Account</button></a>
         </div>
	</body>
	
	<!--Horizontal line above the footer-->
	<hr class="line">
	<footer>

		<!--Help and support list--> 
		<div class id = "box1">
		<ul class="texts">
			 <li class="e">Help & Support</li>
			 <br>
			 <br>
			 <li class="c"><a class="d" href="#faq">FAQ</a></li><br>
			 <li class="c"><a class="d" href="#Queries">Queries</a></li><br>
			 <li class="c"><a class="d" href="#cintact us">Contact Us</a></li>
		</ul>
		</div>
		
		<!--About us list-->
		<div class id="box2">
		<ul class="texts">
			 <li class="f">About Us</li>
			 <br>
			 <br>
			 <li class="g"><a class="h" href="#about us">About Us</a></li><br>
			 <li class="g"><a class="h" href="#Terms and Conditions">Terms and Conditions</a></li><br>
			 <li class="g"><a class="h" href="#privacy policy">Privacy Policy</a></li>
		</ul>
		</div>
		
		<!--Card payment image-->
		<div class id="box3">
			 <p>We Accept</p>
			 <img class="cardpay" src="Images\HeaderFooter\CardPay.png"></img>
		 </div>
		
		 <!--social media images-->
		<div class id="box4">
			 <p>Social Media</p>
			 <img class="social" src="Images\HeaderFooter\Social.png"></img>
		
			 <p>Download Our App On</p>
			 <img class="app" src="Images\HeaderFooter\App.png">
		</div>
		
	</footer>
</html>
	

		
		
