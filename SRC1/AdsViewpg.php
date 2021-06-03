<?php 

//linking the configuration file
require 'config.php';

//obtaining ad detils according to the ad id
if(isset($_GET['ad_Id'])){

	$ad_Id = mysqli_real_escape_string($conn, $_GET['ad_Id']);

	$ad_det = "SELECT * FROM advertisement_sellersinfo s, advertisement_image i WHERE s.ad_Id = i.ad_Id and i.ad_Id = $ad_Id ";

	$result = mysqli_query($conn, $ad_det);

	$ads = mysqli_fetch_assoc($result);
}


	//sellers information obtaining
	if(isset($_GET['ad_Id'])){

		$ad_Id = mysqli_real_escape_string($conn, $_GET['ad_Id']);
		$sell_info = "select phone_No, email, s_address from advertisement_sellersinfo where ad_Id = $ad_Id";

		$result1 = mysqli_query($conn, $sell_info);

		$display = mysqli_fetch_assoc($result1);
	}

?>

<!DOCTYPE.html>
<html>

	<!--Linking relavant style sheets and javascripts-->
	<link rel="stylesheet" type="text/css" href="Styles\user.css">
	<link rel="stylesheet" type="text/css" href="Styles\Body.css">
	<script src="Js\Server.js"></script>
	
	<head>
		 <title>Ad View</title> 
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
	
			 <!--Item heading-->
			 <h1 class="itemHead"><?php echo htmlspecialchars($ads['ad_Name']); ?></h1>

			 <!--Item image-->
			 <div class id="itemImage">
				 <img class="itemPhoto" src="data:image/jpeg;base64, <?php echo base64_encode($ads['ad_image']); ?>" alt="Item Image"> 
			 </div>
			 
			 <!--Item description-->
			 <div class id="itemInfo">
				 <h3 class="itemTopic">Description</h3>
				 <p class="itemText"><?php echo htmlspecialchars($ads['item_Description']); ?></p>
				 
				 <h2 class="itemPrice">Price -: Rs.<?php echo htmlspecialchars($ads['price']); ?></h2>
				 
				 <!--Sellers information-->
				 </div>
				 <div id="sellerInfo">
					<h2 id="sellInfo">Sellers Information</h2>
                    <p id="phNum"><b>Phone Number -:   </b><input class="sellout" type="text" value="<?php echo htmlspecialchars($display['phone_No']); ?>" disabled></p>
		            <p id="email"><b>Email -:   </b><input class="sellout1" type="text" value="<?php echo htmlspecialchars($display['email']); ?>" disabled></p>
		            <p id="address"><b>Address -:   </b><input class="sellout2" type="text" value="<?php echo htmlspecialchars($display['s_address']); ?>" disabled></p>	
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
	

		
		
