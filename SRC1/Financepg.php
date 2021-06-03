<?php
//linking the configuration file
require 'config.php';

//retrieving data from database
$tran_det = "SELECT* FROM trans_det ORDER BY transaction_Id";


	$result= mysqli_query($conn, $tran_det);

	
	$trans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	

//retrieving data from database
$trans_totnum = "SELECT COUNT(transaction_Id) as tot FROM trans_det";
	
	$result1 = mysqli_query($conn, $trans_totnum);
	
	$totnums = mysqli_fetch_assoc($result1);
	
//retrieving data from database
$trans_petsnum = "SELECT COUNT(transaction_Id) as tot FROM trans_det WHERE catagory='Pets'";
	
	$result2 = mysqli_query($conn, $trans_petsnum);
	
	$petsnum = mysqli_fetch_assoc($result2);

//retrieving data from database
$trans_autonum = "SELECT COUNT(transaction_Id) as tot FROM trans_det WHERE catagory='Automobiles'";
	
	$result3 = mysqli_query($conn, $trans_autonum);
	
	$autonum = mysqli_fetch_assoc($result3);

//retrieving data from database
$trans_realnum = "SELECT COUNT(transaction_Id) as tot FROM trans_det WHERE catagory='Real_estate'";
	
	$result4 = mysqli_query($conn, $trans_realnum);
	
	$realnum = mysqli_fetch_assoc($result4);

//retrieving data from database
$trans_elecnum = "SELECT COUNT(transaction_Id) as tot FROM trans_det WHERE catagory='Electronics'";
	
	$result5 = mysqli_query($conn, $trans_elecnum);
	
	$elecnum = mysqli_fetch_assoc($result5);


?>

<!DOCTYPE.html>
<html>

	<!--linking style sheets and javascript-->
	<link rel="stylesheet" type="text/css" href="Styles\user.css">
	<link rel="stylesheet" type="text/css" href="Styles\Body.css">
	<script src="Js\Server.js"></script>
	
	<head>
		 <title>Finance</title> 
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
		 
		 <div >
			 <h1 class id="chart">Transaction Dashboard</h1>

			 <!--Display transaction counts-->
			 <div class="out1">
				 <lable>Total number of Transactions</lable><br><input class="size" type="text" value="<?php echo htmlspecialchars($totnums['tot']); ?>" disabled>
			 </div>

			 <div class="out2">
			 <lable>Number of pet transactions</lable><br><input class="size" type="text" value="<?php echo htmlspecialchars($petsnum['tot']); ?>" disabled>
			 </div>

			 <div class="out3">
			 <lable>Number of Real estate transactions</lable><br><input class="size" type="text" value="<?php echo htmlspecialchars($realnum['tot']); ?>" disabled>
			 </div>

			 <div class="out4">
			 <lable>Number of automobile transactions</lable><br><input class="size" type="text" value="<?php echo htmlspecialchars($autonum['tot']); ?>" disabled>
			 </div>

			 <div class="out5">
			 <lable>Number of Electronics transactions</lable><br><input class="size" type="text" value="<?php echo htmlspecialchars($elecnum['tot']); ?>" disabled>
			 </div>

			 <div class="pBut1">
				 <a href="generaterep.php"><input  class="pBut" value="Generate Report" type="button" ></a>
			 </div>

		 </div>
 
		<!--Activity board(showing transactions)-->
		 <div class id="transBoard">
			 <h2 class="act"><b>Activity</b></h2>
			 <div id="transAct">
				 <div id="tId">Transaction ID</div>
				 <div id="tUsr">Username</div>
				 <div id="tDate">Date</div>
				 <div id="tAmt">Amount</div>
			 </div>

			 <!--Retriving transaction data from database-->
			 <?php foreach($trans as $tran){?>
			 <div id="transAct">
				 <div id="tId"><?php echo htmlspecialchars($tran['transaction_Id']); ?></div>
				 <div id="tUsr"><?php echo htmlspecialchars($tran['username']); ?></div>
				 <div id="tDate"><?php echo htmlspecialchars($tran['t_date']); ?></div>
				 <div id="tAmt">Rs.<?php echo htmlspecialchars($tran['amount']); ?>.00</div>
			 </div>
			 <?php } ?> 
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
	

		
		
