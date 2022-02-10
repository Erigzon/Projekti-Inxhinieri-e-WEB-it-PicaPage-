<?php 

	include_once('config.php');


	if(isset($_POST['update']))
	{
	
		$id = $_POST['id'];
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$username = $_POST['username'];


		

			$sql = "UPDATE users SET fullname = :fullname, email = :email, username = :username WHERE id=:id";

			$prep = $con->prepare($sql);

		 	$prep->bindParam(':id', $id);
			$prep->bindParam(':fullname', $fullname);
			$prep->bindParam(':email', $email);
			$prep->bindParam(':username', $username);

			$prep->execute();

			
			header('Location:dashboard.php');

		

}


?>