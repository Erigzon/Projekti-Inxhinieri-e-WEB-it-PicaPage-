<?php
require 'header.php' ?>

<div class="login">

	<form class="form-signin" action="loginLogic.php" method="post">
		
		<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>


		<input type="text" id="inputUserna,e" class="form-control" placeholder="username" name="username" required autofocus>

		<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>


		<button class="btn btn-lg btn-warning btn-block" type="submit" name="submit">Sign in</button>

		<small>If you aren't registered. Sign up <a href="signup.php">here</a></small>
	</form>

	</div>

<?php require 'footer.php' ?>