<?php 
//linking the configuration file
require 'config.php';

//this was used because the login details could not be fetch due to not intergrating the website
//so this was manually assinged to display relavant content
$username = "Arush132";

//sql query
$ad_det = "SELECT * FROM advertisement_image i, advertisement_sellersinfo s WHERE username = '$username' and s.ad_Id = i.ad_Id";


	//sending sql query
	$result= mysqli_query($conn, $ad_det);
	
	//fetching data from database
	$ads = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE.html>
<html>

	<!--linking style sheets and javascript-->
	<link rel="stylesheet" type="text/css" href="Styles\user.css">
	<link rel="stylesheet" type="text/css" href="Styles\Body.css">
	<script src="Js\Server.js"></script>

	<head>
		<div class = "background"></div>
		 <title>User Account</title> 
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
			</div>
	    </li>

		<li class="a"><a class="b" href="#cintact us">Contact Us</a></li>
		<li class="a"><a class="b" href="#faq">FAQ</a></li>
		<div class="search">
				<button class="butt" type="submit"><img class="buttImg" src="Images\HeaderFooter\Search.png"></img></button>
				<input class="searchBox" type="text" placeholder="Search.." name="search"> 
		</div>
    </ul>
	
	<body background="Images\HeaderFooter\Background.jpg">

		 <h1><b>Dashboard</b></h1>

		 <div id="vl">

			<!-- Navigation buttons-->
			<a href="UserAccountpg.php"><button class="myAccountBut" type="submit">
				 <img class="myAccountButImg" src="Images\Body\MyAccount.png"></img>
			</button></a>
			
			<button class="settingsBut" type="submit">
				 <img class="settingsImg" src="Images\Body\Settings.png"></img>
			</button>
			
			<a href="Paymentspg.html"><button class="paymentsBut" type="submit"> 
				 <img class="paymentsImg" src="Images\Body\Payments.png"></img>
			</button></a>
			
			<button class="helpBut" type="submit">
				 <img class="helpImg" src="Images\Body\Help.png"></img>
			</button>
		 </div>
			
		 	<!--Post ad button and the heading-->
			 <div id="tBorder">
				 <p class="myAd">My Adds</p><button class="postAdBut" type="submit">
				 <img class="postAdButImg" src="Images\Body\PostAdBut.png"></img>
				 <a href="#postAdPage"></a></button>
		   	 </div>
				
			
				<!--retrieving data of ad from database-->
			     <?php foreach($ads as $ad){ ?>
				 	 <div id="post">
					 	 <img class="postImg" src="data:image/jpeg;base64, <?php echo base64_encode($ad['ad_image']); ?>"><br>
					 	 <p class="headSize"><?php echo htmlspecialchars($ad['ad_Name']); ?><br></p>
					 	 <a href="AdsViewpg.php?ad_Id=<?php echo $ad['ad_Id'] ?>"><p class="textSize">Rs.<?php echo htmlspecialchars($ad['price']); ?>
					 	 <br></p></a>
					 </div>
				 <?php } ?>	

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
	

		
		
