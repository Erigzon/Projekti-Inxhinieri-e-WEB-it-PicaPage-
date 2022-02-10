<?php

	include_once('config.php');

	$id = $_GET['id'];


	$sql = "SELECT * FROM users WHERE id=:id";

	$prep = $con->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->execute();

	$user = $prep->fetch();


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>

		form>input {
		    margin-bottom: 10px;
		    font-size: 20px;
		    padding: 5px;
		}

		button {
		    background: none;
		    border: none;
		    border: 1px solid black;
		    padding: 10px 40px;
		    font-size: 20px;
		    cursor: pointer;
		}
	</style>
</head>
<body>
	
	<form action="update.php" method="POST">
		
		<input type="hidden" value="<?= $user['id']; ?>" name="id"><br>
		<input type="text" value="<?= $user['fullname']; ?>" name="fullname"><br>
		<input type="email" value="<?= $user['email']; ?>" name="email"><br>
		
		<button type="submit" name="update">Update</button>

	</form>

	<a href="dashboard.php">Dashboard</a>

</body>
</html>