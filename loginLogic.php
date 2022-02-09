<?php
	require "config.php";
	
	
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		if(empty($username)||empty($password))
		{
			echo "Please fill your username and password";
		}
		else
		{
			$sql="SELECT ID, username, fullname, username, password FROM users WHERE username=:username";
			$selectUser=$con->prepare($sql);
			$selectUser->bindParam(":username",$username);
			$selectUser->execute();

			$data=$selectUser->fetch();

			if($data==false)
			{
				echo "Username <b> $username </b> doesn't exist";
			}else
			{
				if(password_verify($password, $data['password']))
				{
					
					$_SESSION['username']=$data['username'];
					$_SESSION['fullname']=$data['fullname'];

					header('Location:dashboard.php');
				}
				else
				{
					echo "Password doesn't match";
				}
			}
		}
	}



?>

