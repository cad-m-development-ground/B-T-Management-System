<?php	
	include_once ('sample.php');

?>
<html>
<head>
	<title> Inserting Data </title>
</head>
<body>
<form action="signup.php" method="POST">
	<input type="text" name="name" placeholder="Enter your Name">
	<br>
	<input type="text" name="age" placeholder="Enter your age">
	<br>
	<input type="text" name="address" placeholder="Enter your Address">
	<br>
	<input type="text" name="gender" placeholder="Enter your Gender">
	<br>
	<button type="submit" name="submit"> Add to Database </button>
</form>
</body>
</html>
