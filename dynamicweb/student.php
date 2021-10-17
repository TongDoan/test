<!DOCTYPE html>
<html>
<head>
	<title>Student detail</title>
</head>
<body>	
<?php 
$stdlist = array(array(1, "Nguyen Van An", 8),
	array(2, "Tran Thi Bich", 7),
	array(3, "Le Hong Ha", 9));
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	if($id>=1 && $id<=3)
	{
?>
		<h1>Student detail</h1>
		<p>Id: <?=$stdlist[$id-1][0]?></p>
		<p>Name: <?=$stdlist[$id-1][1]?></p>
		<p>Mark: <?=$stdlist[$id-1][2]?></p>
<?php

	}
	else
	{
		echo "id not found";
	}
}
?>
</body>