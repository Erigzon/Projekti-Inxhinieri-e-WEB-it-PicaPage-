<?php 

// With this file we include the DB connection

	include_once("config.php");

		
	
// isset checks if we submit the button

	if(isset($_POST['submit']))
	{

		// $_POST['name']; gets data from input with name="name"
		
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		

		
			$sql = "INSERT INTO users(name,surname,email) VALUES (:name, :surname, :email)";

			$newUser = $con->prepare($sql);

			
			$newUser->bindParam(':name', $name);
			$newUser->bindParam(':surname', $surname);
			$newUser->bindParam(':email', $email);
			

			$newUser->execute();

			echo "Added successfully";

			echo "<a href='dashboard.php'>Dashboard</a>";


		

	}

	?>

	<a href="index.php">Home</a>









