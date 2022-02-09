<?php require 'header.php' ?>
	
<div class="signup">

	<form class="form-signin" action="signupLogic.php" method="post">
		
		<h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

		
		<input type="text" id="username" class="form-control" placeholder="fullname" name="fullname" required autofocus>

		<input type="email" id="fullname" class="form-control" placeholder="email" name="email" required autofocus>
		
		<input type="text" id="inputEmail" class="form-control" placeholder="username" name="username" required autofocus>

		
		<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>


		<button class="btn btn-lg btn-success btn-block" type="submit" name="submit">Sign up</button>

		<small>If you already have an account. Login <a href="login.php">here</a></small>
	</form>

  </div>

<?php require 'footer.php' ?>