
//*************************************************************************************************************************************//
//Card payment function//

function payMeth()
{
	 var name = document.getElementById("name").value;
	 var exp = document.getElementById("exp").value;
	 var cvv = document.getElementById("cvv").value;
	 var payMeth = document.getElementById("option").value;
	 var numbVal = document .getElementById("cNumb").value;
	 var fNumb = (''+numbVal)[0];

	 if((name == "") || (exp == "") || (cvv == "") || (numbVal == ""))
	 {
		 alert("Please insert details to all the fields!");
	 }

	 else
	 {
	     if(payMeth == 1)
	     {
		 	 if(fNumb == 4)
			 {
				 alert("Transaction Successful. Press Proceed to publish the Ad");
				 document.getElementById("paySuc").innerHTML = "Payment Successfully" + "<br>" + "Completed!";
			 	 document.getElementById("procButt").innerHTML='<a href="PublishAdFinalpg.php?username=Arush132">' + '<button class="proceedButt" type="submit">' + "Proceed" + '</button>' + '</a>'
			 

		 	 }

			  	 else
				 {
					 do
			 	 	 {
					 	 var newCard = prompt("Not a Visa card, Please check and enter the number again. To change the card type press Cancel")
					 	 if(newCard === null)
					 	 {
						 	 return;
						 }
					 
					 	 var corNumb = (''+newCard)[0];
			 		 }		
					 while(corNumb != 4)	   
				 	 document.getElementById("cNumb").value = newCard;
				 	 alert("Transaction Successful. Press Proceed to publish the Ad");
				 	 document.getElementById("paySuc").innerHTML = "Payment Successfully" + "<br>" + "Completed!";
				 	 document.getElementById("procButt").innerHTML='<a href="PublishAdFinalpg.php?username=Arush132">' + '<button class="proceedButt" type="submit">' + "Proceed" + '</button>' + '</a>'
			     }
	 	 }

			 else
		 	 {
			 	
				 if(fNumb == 5)
				 {
					 alert("Transaction Successful. Press Proceed to publish the Ad");
					 document.getElementById("paySuc").innerHTML = "Payment Successfully" + "<br>" + "Completed!";
					 document.getElementById("procButt").innerHTML='<a href="PublishAdFinalpg.php?username=Arush132">' + '<button class="proceedButt" type="submit">' + "Proceed" + '</button>' + '</a>'
	   
				 }
	   
					 else
				     {
						 do
						 {
							 var newCard = prompt("Not a Mastercard card, Please check and enter the number again. To change the card type press Cancel");
							 if(newCard === null)
							 {
								 return;
							 }
							 var corNumb = (''+newCard)[0];
						 }		
						 while(corNumb != 5)	   
						 document.getElementById("cNumb").value = newCard;
						 alert("Transaction Successful. Press Proceed to publish the Ad");
						 document.getElementById("paySuc").innerHTML = "Payment Successfully" + "<br>" + "Completed!";
						 document.getElementById("procButt").innerHTML='<a href="PublishAdFinalpg.php?username=Arush132">' + '<button class="proceedButt" type="submit">' + "Proceed" + '</button>' + '</a>'
					 }
			 }
	 }
			
 }

//Paypal payment method
//***********************************************************************************************************//
 function oPaypal()
 {
	 window.open("https://www.paypal.com/lk/signin?country.x=LK&locale.x=en_LK", "_blank");
 }
		


 //PublishAdFinalpg 
 //********************************************************************************************************* */
 function transView()
 {
	var date = new Date();
	var curDate = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+ date.getDate();
	var amount = 350;

	document.getElementById("trDate").innerHTML = "Transactio Date : " + curDate;
	document.getElementById("adId").innerHTML = "Ad ID : " + "1";
	document.getElementById("amount").innerHTML = "Paid Amount : Rs." + amount + "/-";


 }







 