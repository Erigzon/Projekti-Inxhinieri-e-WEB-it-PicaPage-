<h1>Dashboard</h1>

<a href="logout.php">Log out</a>


<?php

require'config.php';

if (empty($_SESSION['fullname'])) {
	header('Location:login.php');

}
$sql="SELECT * from users";
$prep=$con->prepare($sql);
$prep->execute();
$datas=$prep->fetchAll();
//var_dump ($datas);die;
?>
<?php require 'header.php'?>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
	<a class="navbar-brand col-sm-3 col-md-2 nr-0" href="#"><?=$_SESSION['fullname']?></a>
	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap ">
			<a class="nav-link" href="logout.php">Sign out</a>
		</li>
	</ul>
</nav>

<div class="container-fluid">
	<div class="row">
		<nav class="col-md-2 d-none d-md-blocl bg-light sidebar">
		<div class="sidebar-sticky">
		<ul class="nav flex-column">
		<li class="nav-item">
		<a class="nav-link active" href="dashboard.php">
		<span data-feather="home"></span>
		Dashboard<span class="sr-only">(current)</span>
		</a>
		</li>
		<li class="nav-item">
			<a  class="nav-link active" href="users.php">
				<span data-feather="users"></span>
				users

			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">
				<span data-feather="file"></span>
			</a>
		</li>

			</ul>
		</div>
		</nav>
<main role="main" class="rol-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between felx-wrap flex-md-nowrap align-item-center pb-2 mb-3 border-bottom"></div>
	<h1 class="h2">Dashboard</h1>
</div>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>#</th>
				<th>Full Name</th>
				<th>Username</th>
				<th>email</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($datas as $data ):?> 
			<tr>
			<td><?=$data['id']?></td>	
			<td><?=$data['fullname']?></td>	
			<td><?=$data['username']?></td>	
			<td><?=$data['email']?></td>	
            <td><a href="edit.php?id=<?=$data['id'];?>">Edit</a></td>	
            <td><a href="delete.php?id=<?=$data['id'];?>">Delete</a></td>
             </tr>
          <?php endforeach; ?>
		</tbody>
	</table>
</div>
</main>

	</div>
</div>
<?php require'footer.php'?>