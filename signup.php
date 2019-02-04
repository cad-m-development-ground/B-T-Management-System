<?php
	$sql = "INSERT INTO `name` (`name`, `age`, `address`, `gender`) VALUES ('Aires Minoza', '25', 'Maria Luisa', 'Female');";
	$result = mysqli_query($con, $sql);
	header("Location: ../fetchdata.php?signup=success");
?>