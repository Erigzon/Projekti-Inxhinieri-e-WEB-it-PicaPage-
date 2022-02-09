<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{

		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$tempPass = $_POST['password'];
		$password = password_hash($tempPass, PASSWORD_DEFAULT);



		$sql = "INSERT INTO users(fullname, email, username, password) VALUES ( :fullname, :email, :username, :password)";

		$prep = $con->prepare($sql);
					

					
		$prep->bindParam(':fullname', $fullname);
		$prep->bindParam(':email', $email);
		$prep->bindParam(':username', $username);
		$prep->bindParam(':password', $password);

		$prep->execute();

					

  		header( "Location: login.php" ); 


		}
				


?>