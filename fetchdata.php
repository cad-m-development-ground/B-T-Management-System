<?php
include_once('sample.php');
$query='select * from name';
$result=mysql_query($query);
?>

<!DOCTYPE HTML>
<html>
	<title>
		<head> Sample Data Fetching </head>
	</title>
<body>
	<table align="center" border="1px" style="width:300; line-height:30px;">
		<tr>
			<th><h2> Student Record </h2> </th>
		</tr>
		<tr>
			<th> Name </th>
			<th> Age </th>
			<th> Address </th>
			<th> Gender </th>
		</tr>

</html>