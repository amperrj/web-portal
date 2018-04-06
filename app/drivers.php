<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once("layouts/dashboard.header.php") ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body class="login-page">
		<!--<?php include_once("layouts/dashboard.navigation.php") ?>-->
	    <div class="container-fluid">
	      <div class="row">
	      	<?php include_once("layouts/dashboard.sidebar.php") ?>
	        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2">
						<h1 class="h2"><span class="fa fa-fw fa-users"></span> Drivers</h1>
						<p>
						<a href="register.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Add</button></a>
						<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span> Delete</button>
						<button type="button" class="btn btn-secondary"><span class="glyphicon glyphicon-pencil"></span> Update</button>
						
						</p>	
						<p>
							<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
								 
									<div class="input-group">
									  <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
									 <div class="input-group-append">
											<div class="input-group-text btn-success"><i class="fa fa-lg fa-search"></i>
											<button type="button" class="btn btn-info"> <span class="glyphicon glyphicon-search"></span> Search </button>
										</div> 
											</div>
											
									</div>
								</div>
						</div>
						</p>
						<div class="table-responsive">
							<table class="table table-striped table-md">
								<thead>
									<tr>
										<th><input class="form-control" type="checkbox" name=""></th>
										<th>#</th>
										<th>ID</th>
										<th>Driver Full Name</th>
										<th>Account Status</th>
										<th>Date Joined</th>
									</tr>
								</thead>
								<tbody>
								<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>1</td>
										<td>DRV-0001</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle">Lorem, Ipsum Dolor</a></td>
										<td><span class="btn-success btn-sm" href="#" role="button">Active</span></td>
										<td>15 Sept, 8:56 AM (2015)</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>2</td>
										<td>DRV-0002</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle">Lorem, Ipsum Dolor</a></td>
										<td><span class="btn-secondary btn-sm" href="#" role="button">Block</span></td>
										<td>15 Sept, 8:56 AM (2015)</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>3</td>
										<td>DRV-0003</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle">Lorem, Ipsum Dolor</a></td>
										<td><span class="btn-success btn-sm" href="#" role="button">Active</span></td>
										<td>15 Sept, 8:56 AM (2015)</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>4</td>
										<td>DRV-0004</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle">Lorem, Ipsum Dolor</a></td>
										<td><span class="btn-secondary btn-sm" href="#" role="button">Block</span></td>
									<td>15 Sept, 8:56 AM (2015)</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>5</td>
										<td>DRV-0005</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle">Lorem, Ipsum Dolor</a></td>
										<td><span class="btn-success btn-sm" href="#" role="button">Active</span></td>
										<td>15 Sept, 8:56 AM (2015)</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>6</td>
										<td>DRV-0006</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle">Lorem, Ipsum Dolor</a></td>
										<td><span class="btn-success btn-sm" href="#" role="button">Active</span></td>
										<td>15 Sept, 8:56 AM (2015)</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>7</td>
										<td>DRV-0007</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle">Lorem, Ipsum Dolor</a></td>
										<td><span class="btn-warning btn-sm" href="#" role="button">Suspect</span></td>
										<td>15 Sept, 8:56 AM (2015)</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>8</td>
										<td>DRV-0008</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle">Lorem, Ipsum Dolor</a></td>
										<td><span class="btn-danger btn-sm" href="#" role="button">Violation</span></td>
										<td>15 Sept, 8:56 AM (2015)</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>9</td>
										<td>DRV-0009</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle">Lorem, Ipsum Dolor</a></td>
										<td><span class="btn-danger btn-sm" href="#" role="button">Violation</span></td>
										<td>15 Sept, 8:56 AM (2015)</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>10</td>
										<td>DRV-0010</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle">Lorem, Ipsum Dolor</a></td>
										<td><span class="btn-danger btn-sm" href="#" role="button">Violation</span></td>
										<td>15 Sept, 8:56 AM (2015)</td>
									</tr>
								</tbody>
							</table>
						</div>
							<nav aria-label="Page navigation example">
							  <ul class="pagination justify-content-end">
							    <li class="page-item disabled">
							      <a class="page-link" href="#" tabindex="-1">&laquo;</a>
							    </li>
							    <li class="page-item active"><a class="page-link" href="#">1</a></li>
							    <li class="page-item"><a class="page-link" href="#">2</a></li>
							    <li class="page-item"><a class="page-link" href="#">3</a></li>
							    <li class="page-item">
							      <a class="page-link" href="#">&raquo;</a>
							    </li>
							  </ul>
							</nav>
	        </main>
	      </div>
	    </div>
	</body>
</html> 
