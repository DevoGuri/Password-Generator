<?php
	function password($chars) 
	{
	  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
	  return substr(str_shuffle($data), 0, $chars);
	}


	if(isset($_POST['submit'])) {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
	}


?>

<!Doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
		<link rel="stylesheet" type="text/css" href="./css/style.css">

		<title>Password Generator</title>
	</head>
	<body>
		<div class="header" id="top">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-dark">
			  		<div class="container">
		    			<a class="navbar-brand" href="#">UGenerate</a>
				    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      		<span class="navbar-toggler-icon"></span>
				    	</button>
				    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
				     		<ul class="navbar-nav ms-auto">
				        		<li class="nav-item">
				          			<a class="nav-link active" aria-current="page" href="#">Home</a>
				        		</li>
				      		</ul>
			    		</div>
			  		</div>
				</nav>
				<hr>
				<!-- branding -->
				<header>
					<h1>Generate your secure password</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</header>
			</div>
		</div>
		<div class="container">
			<div class="main">
				<form action="" method="post">
					<div class="row">
						<div class="col-sm-8" style="padding-right: 0px;">
							<div class="form-group">
								<label for="password">Password</label>
								<input type="text" name="password" class="password"  id="foo" value="<?php if(isset($_POST['submit'])) { echo substr(str_replace(' ', '', $first_name.$last_name.password(20)),0,20); } else { echo password(20); } ?>">
							</div>
						</div>
						<div class="col-sm-4" style="margin-top: 66px;padding: 10px;border-bottom: 2px solid #4568dc">
							<h2 style="float: right;"><i class="bi bi-arrow-clockwise" onClick="location.reload(true)"></i></h2>
							<h2 style="float: right;padding:0px 10px;" class="copy" data-clipboard-action="copy" data-clipboard-target="#foo"><i class="bi bi-clipboard"></i></h2>
						</div>
					</div>
					<h2 class="edit">Password With Name</h2>
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="first_name">First Name</label>
								<input type="text" name="first_name" class="name" required="">
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="last_name">Last Name</label>
								<input type="text" name="last_name" class="name" required="">
							</div>
						</div>
					</div>
					<div class="d-grid gap-2 col-6 mx-auto">
						<button class="btn btn-danger" type="submit" name="submit">Generate</button>
					</div>
				</form>
			</div>
		</div>

		

		<!-- FOOTER -->
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<h6>Copyright &copy; UGenerate | 2021</h6>
					</div>
					<div class="col-sm-12 col-md-6">
						<a href="#top"><h6 style="float:right;">TOP</h6></a>
					</div>
				</div>
			</div>
		</footer>


    <!-- 2. Include library -->
    <script src="./dist/clipboard.min.js"></script>

    <!-- 3. Instantiate clipboard -->
    <script>
    var clipboard = new ClipboardJS('.copy');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>

		<!-- Bootstrap Bundle with Popper -->
		<script src="./js/bootstrap.bundle.min.js"></script>
		<script src="./dist/clipboard.min.js"></script>
	</body>
</html>
