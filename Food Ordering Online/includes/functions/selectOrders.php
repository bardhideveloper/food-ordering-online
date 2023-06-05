<?php
require 'includes/functions/connect.php';

$query1 = mysqli_query($connect, "SELECT pr.fullname as Client , p.id as NrOrder , pro.name as ProductName, p.quantity as Quantity , p.address as Address , p.phonenumber as PhoneNumber
FROM orders p , users pr , products pro 
WHERE pr.username = p.uname and p.idPr = pro.id");
	
while($row = mysqli_fetch_array($query1))
{
	echo "<table class='table table-bordered'>
		<tr>
			<th class=''>Client</th>
			<th class=''>NrOrder</th>
			<th class=''>ProductName</th>
			<th class=''>Quantity</th>
			<th class=''>Address</th>
			<th class=''>PhoneNumber</th>
			<th class=''>Delete Order</th>
		</tr>";
		
		while($row1 = mysqli_fetch_assoc($query1)) {
			$client = $row['Client'];
			$id = $row1['NrOrder'];
			$nameP = $row1['ProductName'];
			$quantity = $row1['Quantity'];
			$address = $row1['Address'];
			$phN = $row1['PhoneNumber'];

			echo "<tr>
			<td class=''>$client</td>
			<td class=''>$id</td>
			<td class=''>$nameP</td>
			<td class=''>$quantity</td>
			<td class=''>$address</td>
			<td class=''>$phN</td>
			<td class=''><a href='includes/functions/deleteOrder.php?id=$id' class='btn btn-danger'>Delete</a></td>
			</tr>";
		}
}
	echo "</table>";

?>