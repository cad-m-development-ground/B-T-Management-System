<!doctype html>

<html>
	<head>
		<title> Table with Database </title>
	</head>
	<body>
		<table align="center" border="1px" style="width:300; line-height:30px;">
			<th> Name </th>
			<th> Age </th>
			<th> Address</th>
			<th> Gender</th>
		
		<?php
		$conn = mysqli_connect("localhost", "root", "", "abcd");
		if ($conn -> connect_error) {
				die("Connection Failed:". $conn -> connect_error);
		}
		
		$sql = "SELECT name, age, address, gender from name";
		$result = $conn -> query($sql);
		
		if ($result -> num_rows > 0) {
			while ($row = $result -> fetch_assoc()) {
				echo "<tr><td>". $row["name"]. "</td><td>".$row["age"]. "</td><td>". $row["address"]. "</td><td>". $row["gender"]. "</td></tr>";
			}
		echo "</table>";
		}
		else {
			echo "0 result";
		}
		
		?>
		
	</table>
</body>
</html>
</html>