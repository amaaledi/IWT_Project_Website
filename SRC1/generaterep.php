<?php

//linking the configuration file
require 'config.php';

//sql command
$sql = "SELECT * FROM trans_det";

//proceeding the query
$result =mysqli_query($conn, $sql);


//printing htm table tags
echo "<table border='2' style = 'width:50%'>";
echo "<tr class'gdat'>
		<th class='gdat'> Transaction Id </th>
		<th class='gdat'> Catagory </th>
		<th class='gdat'> Username </th>
		<th class='gdat'> Date </th>
		<th class='gdat'> Amount </th></tr>";


//retrieving and inserting data to relavant table rows
while($row=$result->fetch_assoc())
	{
		
		echo "<tr class'gdat'>
			  <td align ='center'>" . $row['transaction_Id'] . "</td>
			  <th class='gdat'>" . $row['catagory'] . "</td>
		  	  <th class='gdat'>" . $row['username'] . "</td>
			  <th class='gdat'>" . $row['t_date'] . "</td>
			  <th class='gdat'>Rs." . $row['amount'] . "</td></tr>";

	};

?>

