<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <!-- The following meta tag makes the page responsive-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		
        <link rel="stylesheet" href="Node_modules/css/bootstrap.min.css">
        <title>Home Page</title>
    </head>
    
    <body style="background-color: #194E49;">
		<!-- Navbar Code Begins Here-->
        <div class="col-sm">
			<nav class="navbar navbar-expand-md fixed-top" style="background-color: #0CEE2A;">
				<button class="navbar-toggler navbar-light" style="border-color: black; border-width: 2px; opacity: 100%;" data-toggle="collapse" data-target="#navbarMenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand mr-auto" href="./index.html"><img src="img/design_03.png" height="30" width="41"></a>
				<div class="collapse navbar-collapse" id="navbarMenu">
					<ul class="navbar-nav mr-auto"> 
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" style="color: black; margin-left: 10px;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								MENU
							</a>
							<div class="dropdown-menu" style="width: 200px; background-color: lightblue;" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#" style="color: black;">My Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">Order History</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">Cart</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">eWallet</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">Reward Points</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">Logout</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active" style="margin-right: 10px;">
							<a href="index.php" class="nav-link" href="#" style="color: black;">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item" style="margin-right: 10px;">
							<a class="nav-link" href="#" style="color: black;">Link</a>
						</li>
						<li class="nav-item dropdown" style="margin-right: 10px;">
							<a class="nav-link dropdown-toggle" href="#" style="color: black;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Products
							</a>
							<div class="dropdown-menu" style="width: 200px; background-color: lightblue;" aria-labelledby="navbarDropdown">
								<a href="medicineMerge.php" class="dropdown-item" href="#" style="color: black;">Medicines</a>
								<div class="dropdown-divider"></div>
								<a href="healthcareMerge.php" class="dropdown-item" href="#" style="color: black;">Health Care</a>
								<div class="dropdown-divider"></div>
								<a href="babycareMerge.php" class="dropdown-item" href="#" style="color: black;">Baby Care</a>
							</div>
						</li>
						<li class="nav-item dropdown" style="margin-right: 10px;">
							<a class="nav-link dropdown-toggle" href="#" style="color: black;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Posts
							</a>
							<div class="dropdown-menu" style="width: 200px; background-color: lightblue;" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#" style="color: black;">News</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">Blogs</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">Offers</a>
							</div>
						</li>
						<li class="nav-item" style="margin-right: 15px;">
							<a class="nav-link" href="#" style="color: black;">Log Out</a>
						</li>
					</ul>
				</div>
                
				
				<form class="form-inline">
					<input class="form-control ml-auto" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" style="background-color: navy; color: white; margin-left: 10px;" type="submit">Search</button>
				</form>
			</nav>
			
		</div>
         <?php include"healthcare.php" ?>
		<!-- Navbar Code Ends Here-->
		<script src="Node_modules/jquery/dist/jquery.slim.min.js"></script>
		<script src="Node_modules/popper.js/dist/umd/popper.min.js"></script>
		<script src="Node_modules/js/bootstrap.min.js"></script>
    </body>
    
</html>