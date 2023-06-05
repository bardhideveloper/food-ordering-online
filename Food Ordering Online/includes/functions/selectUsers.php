<?php

require "includes/functions/connect.php";

$query1 = mysqli_query($connect, "SELECT username,fullname,role FROM users;");
echo "<table class='table table-bordered'
		<tr>
			<th class=''>username</th>
			<th class=''>fullname</th>
			<th class=''>admin(1) or user(2)</th>
			<th class=''>delete user</th>
		</tr>";

while($row1 = mysqli_fetch_assoc($query1)) {
	$username = $row1['username'];
	$fullname = $row1['fullname'];
	$role = $row1['role'];

echo "<tr>
		<td class=''>$username</td>
		<td class=''>$fullname</td>	
		<td class=''>$role</td>
		<td class='produktet'><a href='includes/functions/deleteUsersDB.php?username=$username' class='btn btn-danger'>Delete</a></td>
	</tr>";
}
echo "</table>";

?>