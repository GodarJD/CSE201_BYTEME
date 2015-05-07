<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>App Bandit</title>

	<link rel="stylesheet" href="pack/css1234.css" media="all" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="userstyle.php" media="all" rel="stylesheet" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="pack/star-rating.js" type="text/javascript"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	

	<!-- Plugin CSS -->
	<link rel="stylesheet" href="css/animate.min.css" type="text/css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="css/main.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">App Bandit</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-left" role="search">
        			<div class="form-group">
          				<input type="text" class="form-control" id="search" placeholder="Search for apps">
        			</div>
      				</form>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sort <span class="caret"></span></a>
						<ul class="dropdown-menu top-menu" role="menu">
							<li><a href="#">App name</a>
							</li>
							<li><a href="#">App name (reverse alphabetical)</a>
							</li>
							<li><a href="#">Developer name</a>
							</li>
							<li><a href="#">Developer name (reverse alphabetical)</a>
							</li>
							<li><a href="#">Price (highest to lowest)</a>
							</li>
							<li><a href="#">Price (lowest to highest)</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Filters <span class="caret"></span></a>
						<ul class="dropdown-menu multi-level top-menu" role="menu" aria-labelledby="dropdownMenu">
							<li class="dropdown-submenu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Rating</a>
								<ul class="dropdown-menu" role="menu">
									<li>5 stars</li>
									<li>4 stars</li>
									<li>3 stars</li>
									<li>2 stars</li>
									<li>1 star</li>
								</ul>
							</li>
							<li class="dropdown-submenu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Platforms</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
									<li>Web</li>
									<li>iPhone/iPad</li>
									<li>Android</li>
									<li>Chrome Web Store</li>
								</ul>
							</li>
							<li class="dropdown-submenu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Price</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
									<li>Free</li>
									<li>Any price</li>
									<li>$0.99+</li>
									<li>$1.99+</li>
									<li>$4.99+</li>
									<li>$9.99+</li>
								</ul>
							</li>
							<li class="divider"></li>
							<button class="btn btn-default" role="button" id="filterapply">
								Apply
							</button>
						</ul>
					</li>
					<li>
						<a class="page-scroll" href="addapp.html">Add App</a>
					</li>
					<li>
						<a class="page-scroll" href="#user" data-toggle="modal" data-target="#myModal" id="loginbutton">
							Login/SignUp
						</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Login or Sign Up</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<h3>
		 						Login
	  						</h3>
							<label for="email" id="loginemail">Email address</label>
							<input type="email" class="form-control" id="email" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-success" id="loginsubmit">Login</button>
					</form>
					<form>
						<div class="form-group">
							<h3>
		  						Sign up
	  						</h3>
							<label for="email">Email address</label>
							<input type="email" class="form-control" id="email" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-success">Sign Up</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal" id="loginmodalclose">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- site body start -->
	
	<div class="container-fluid">
		<div class="row">
			<header id="tophead" class="header">
				<img src="http://p1.pichost.me/i/40/1638573.jpg" />
				<img src="http://www.babson.edu/Academics/undergraduate/academic-programs/PublishingImages/san-franc.jpg" />
				<div class="container">
					<div class="wide">
						<div class="col-xs-12 logo">App Bandit</div>
					</div>
					<div class="row">
						<div class="col-md-12 centered">
						<h2>
						All of the apps in the world - in one place. Find your next download.
						</h2>
						</div>
					</div>
				</div>
			</header>
		</div>
	</div>
	<div class="container-fluid" id="container-content">
			<div class="alert alert-info" role="alert" class="admin user">You're logged in as an admin. <a href="#">Review your requests</a></div>
			<div class="alert alert-info" role="alert" class="user">Want to submit an app? <a href="addapp.html">Submit an app</a></div>	
<?php
	
	//DISPLAY APPS
	
		$host     = "65.29.193.84";
		$port     = 3306;
		$socket   = "C:/xampp2/mysql/mysql.sock";
		$user     = "root";
		$password = "";
		$dbname   = "byteme";

		$appNameField = "app Name";		
		$verNameField = "version 1.0.1";

		$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	    	or die ('Could not connect to the database server' . mysqli_connect_error());
	
		$query = "SELECT * FROM apps";

		$counter = 1;
		if ($stmt = $con->prepare($query)) {
		    $stmt->execute();
		    $stmt->bind_result($aname, $adev, $aplatform, $iname, $appid, $rat, $dol, $cen);
		    while ($stmt->fetch()) {
		        echo "App " . $counter . " is " . $aname . " " . $adev . " " . $aplatform . " " . $iname . " " . $appid . " " . $rat . " " . $dol . " " . $cen;
		        $counter += 1;
			}
		    $stmt->close();
		}
		$con->close();
		
	?>

		
		<div class="page-header">
		<h1>
		  New & Updated Apps
		</h1>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="https://lh3.ggpht.com/GWV3wWWO4TidHhf0GmM2RvW0fS9RGKP2-D1eFyiZDBR-KUitHXaJnQcr1aSyZrHyusM=h900-rw" alt="Generic placeholder thumbnail" class="img-responsive app-img">
				<div class="caption1">
					<h3>Zumper - Apartments for Rent </h3><span class="label label-default">Updated</span>  <span class="label label-success">Free</span>
					<input id="input-2c" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">
					<p>Zumper is apartment renting made easy! Find and instantly apply to rent your dream home, apartment, or condominium across the country from San Francisco to New York, Boston, Chicago, and LA.</p>
					<p>
						<!-- Single button -->
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Get App <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">iPhone/iPad App Store</a>
								</li>
								<li><a href="#">Google Play Store</a>
								</li>
								<li><a href="#">Web Site</a>
								</li>
							</ul>
						</div>
						<a href="appdetail.html" class="btn btn-default" role="button" data-toggle="tooltip" data-placement="top" title="Read the full description, and leave a rating and comment">Details</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="https://lh3.googleusercontent.com/JMYtdwZv6zXI0-wtBMo3scpt5jYPEJVKBSqPkCz9Ie_FPYDf7vaHwQ-A9LpdNOOwheq6=h900-rw" alt="Generic placeholder thumbnail" class="img-responsive app-img">
				<div class="caption">
					<h3>Any.do </h3><span class="label label-default">Updated</span>  <span class="label label-success">Free</span>  <span class="label label-info">In-App Purchases</span>
					<input id="input-2c" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">
					<p>Millions around the world use Any.do to capture ideas, things to do, and collaborate with the people around them. From planning your next vacation to organizing a big project at work or sharing a grocery list...</p>
					<p>
						<!-- Single button -->
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Get App <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">iPhone/iPad App Store</a>
								</li>
								<li><a href="#">Google Play Store</a>
								</li>
								<li><a href="#">Chrome Web Store</a>
								</li>
								<li><a href="#">Web Site</a>
								</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default" role="button" data-toggle="tooltip" data-placement="top" title="Read the full description, and leave a rating and comment">Details</a> 
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="http://a4.mzstatic.com/us/r30/Purple3/v4/ab/98/c7/ab98c777-790d-3438-ef6c-fdae577ae750/screen322x572.jpeg" alt="Generic placeholder thumbnail" class="img-responsive app-img">
				<div class="caption">
					<h3>Evernote </h3><span class="label label-default">Updated</span>  <span class="label label-success">Free</span>  <span class="label label-info">In-App Purchases</span>
					<input id="input-2c" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">
					<p>You’re on the path to something big — Evernote is where you do the work to achieve it. Write notes of all types, from short lists to lengthy research, and access them on any device. Collect web articles, handwritten notes...</p>
					<p>
						<!-- Single button -->
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Get App <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">iPhone/iPad App Store</a>
								</li>
								<li><a href="#">Google Play Store</a>
								</li>
								<li><a href="#">Chrome Web Store</a>
								</li>
								<li><a href="#">Web Site</a>
								</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default" role="button" data-toggle="tooltip" data-placement="top" title="Read the full description, and leave a rating and comment">Details</a> 
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="https://lh3.googleusercontent.com/WhCfZUAUMdyNGTRm8bQwBziSaJACAMpvXdAtuCMhQix_JCt34Vuurpx0iksUNIvpsSc=h900-rw" alt="Generic placeholder thumbnail" class="img-responsive app-img">
				<div class="caption">
					<h3>Memrise - Learn Languages Free </h3><span class="label label-primary">New</span>  <span class="label label-success">Free</span>  <span class="label label-info">In-App Purchases</span>
					<input id="input-2c" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">
					<p>Meet your new Personal Memory Coach! Do you want to learn a new language, but are too busy to find the time? Have you always meant to improve your general knowledge but never quite get around to it?</p>
					<p>
						<!-- Single button -->
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Get App <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">iPhone/iPad App Store</a>
								</li>
								<li><a href="#">Google Play Store</a>
								</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default" role="button" data-toggle="tooltip" data-placement="top" title="Read the full description, and leave a rating and comment">Details</a> 
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="https://lh3.ggpht.com/pbIKmUDOexbsfLZXVygglnjucXKcVLl8K8FAsQ42EYVXUcDpPNClGbmVWpFXY_HPbEyF=h900-rw" alt="Generic placeholder thumbnail" class="img-responsive app-img">
				<div class="caption">
					<h3>DocuSign - Sign & Send Docs </h3><span class="label label-default">Updated</span>  <span class="label label-success">Free</span>  <span class="label label-info">In-App Purchases</span>
					<input id="input-2c" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">
					<p>Provides a simple and secure way to electronically sign documents and collect signatures from others. Eliminate the hassles, costs, and lack of security in printing, faxing, scanning, and overnighting documents for signature.</p>
					<p>
						<!-- Single button -->
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Get App <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">iPhone/iPad App Store</a>
								</li>
								<li><a href="#">Google Play Store</a>
								</li>
								<li><a href="#">Chrome Web Store</a>
								</li>
								<li><a href="#">Website</a>
								</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default" role="button" data-toggle="tooltip" data-placement="top" title="Read the full description, and leave a rating and comment">Details</a> 
					</p>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="https://lh4.ggpht.com/RPjng8d5N5c3k6bJtJhlbCiCoZ0G2v6TR8qPKA2mTzQ8huo-KhgAsSfAvn72qQ5bxAx4=h900-rw" alt="Generic placeholder thumbnail" class="img-responsive app-img">
				<div class="caption">
					<h3>Belly </h3><span class="label label-primary">New</span>  <span class="label label-success">Free</span>
					<input id="input-2c" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">
					<p>Belly is a universal loyalty program that offers one-of-a-kind rewards at the businesses you love, replacing boring "Buy 10, Get 1 Free" punch cards with free stuff you actually want.</p>
					<p>
						<!-- Single button -->
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Get App <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">iPhone/iPad App Store</a>
								</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default" role="button" data-toggle="tooltip" data-placement="top" title="Read the full description, and leave a rating and comment">Details</a> 
					</p>
				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="page-header">
			<h1>
			  Popular Apps & Games <small>This week's best titles</small>
			</h1>
		</div>

		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="https://lh5.ggpht.com/30yURMjG4IA4QvFV5R78l2jMF6bx1nE2tYZ9J0Cz2ZQQEZsSHfrhkbYCtsPWM8kqreo=h900-rw" alt="Generic placeholder thumbnail" class="img-responsive app-img">
				<div class="caption">
					<h3>Dubsmash </h3><span class="label label-default">Updated</span>  <span class="label label-success">Free</span>
					<input id="input-2c" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">
					<p>Say it with video!
						<br />1. Choose a famous sound
						<br />2. Record a video on it
						<br />3. Send the dubbed video to your friends</p>
					<p>
						<!-- Single button -->
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Get App <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">iPhone/iPad App Store</a>
								</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default" role="button" data-toggle="tooltip" data-placement="top" title="Read the full description, and leave a rating and comment">Details</a> 
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="https://lh5.ggpht.com/X10cCqE4MoMN7qlBABpkom9EPPghBdUbFAbSLEsL2jQTS-fBHF33nMt7vOEuLQNtp8U=h900-rw" alt="Generic placeholder thumbnail" class="img-responsive app-img">
				<div class="caption">
					<h3>Learn C++ </h3><span class="label label-primary">New</span>  <span class="label label-success">Free</span>
					<input id="input-2c" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">
					<p>Learn C++ is another FREE programming course by SoloLearn. Whether you've had any prior programming experience or not, this app will help you learn all you need to know in order to start.</p>
					<p>
						<!-- Single button -->
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Get App <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">iPhone/iPad App Store</a>
								</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default" role="button" data-toggle="tooltip" data-placement="top" title="Read the full description, and leave a rating and comment">Details</a> 
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="https://lh3.ggpht.com/geONr8Qv4aiZCSMDdy0I8ceyFt977ba7kaa93miURzBJgLhXHL7-mAUTR2Nz382Ewg=h900-rw" alt="Generic placeholder thumbnail" class="img-responsive app-img">
				<div class="caption">
					<h3>Luminosity</h3><span class="label label-default">Updated</span>  <span class="label label-success">Free</span>  <span class="label label-info">In-App Purchases</span>
					<input id="input-2c" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">
					<p>Train your memory and attention. Used by over 70 million people worldwide, Lumosity creates a Personalized Training Program that challenges your brain. Lumosity is designed by neuroscientists to train memory, attention, and more. With foundations in the study of neuroplasticity, Lumosity games are used in research, and have been incorporated into studies done by top scientists worldwide.</p>
					<p>
						<!-- Single button -->
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Get App <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">iPhone/iPad App Store</a>
								</li>
								<li><a href="#">Google Play Store</a>
								</li>
								<li><a href="#">Web Site</a>
								</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default" role="button" data-toggle="tooltip" data-placement="top" title="Read the full description, and leave a rating and comment">Details</a> 
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="https://lh3.ggpht.com/9vogbyGKxhOprtKORBfjcgHgsfycX5ZO_4ndqPuasZ5KOa6SS_WTUPBp8-UysSAGpw=h900-rw" alt="Generic placeholder thumbnail" class="img-responsive app-img">
				<div class="caption">
					<h3>Amazon Shopping </h3><span class="label label-default">Free</span>
					<input id="input-2c" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">
					<p>Product Features
						<br />* Customers are able to shop millions of products on any of Amazon's sites around the world from a single app
						<br />* Quickly search, get product details, and read reviews on millions of products from Amazon and other merchants
						<br />* Take advantage of 1-Click ordering</p>
					<p>
						<!-- Single button -->
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Get App <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">iPhone/iPad App Store</a>
								</li>
								<li><a href="#">Google Play Store</a>
								</li>
								<li><a href="#">Web Site</a>
								</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default" role="button" data-toggle="tooltip" data-placement="top" title="Read the full description, and leave a rating and comment">Details</a> 
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="https://lh3.ggpht.com/HM7Jb2YuViNqOmJkAiMN5DeH5xiHLxJGlWCYV6xJJn5NGN-HIjkPJ5lmTqlWjSMXYCDP=h900-rw" alt="Generic placeholder thumbnail" class="img-responsive app-img">
				<div class="caption">
					<h3>Skype Qik: Group Video Chat </h3><span class="label label-primary">New</span>  <span class="label label-default">Free</span>
					<input id="input-2c" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">

					<p>Introducing Skype Qik (say “quick”), a free* video messenger made for capturing moments and sharing laughs throughout your day. Set up a group and immediately start shooting and swapping videos. Send something to crack your friends up, or show off
						a new dance move—whatever you want.</p>
					<p>
						<!-- Single button -->
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Get App <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">iPhone/iPad App Store</a>
								</li>
								<li><a href="#">Google Play Store</a>
								</li>
								<li><a href="#">Web Site</a>
								</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default" role="button" data-toggle="tooltip" data-placement="top" title="Read the full description, and leave a rating and comment">Details</a> 
					</p>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="https://lh4.ggpht.com/9tjOzANNIsshH-Zp41FB2dYlKD1Yd8ViQKv-626fxUtXHAvlPYLU7gOoZysbBOEgmQ=h900-rw" alt="Generic placeholder thumbnail" class="img-responsive app-img">
				<div class="caption">
					<h3>Instacart</h3>  <span class="label label-primary">New</span>  <span class="label label-default">Free</span>
					<input id="input-2c" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">
					<p>Create a grocery order with a few taps, from fresh fruit and vegetables, to meat, seafood and home essentials. Order from local grocery stores like Whole Foods Market, Petco or Costco and get your groceries delivered when you want them! Save time
						and take back your weekends!</p>
					<p>
						<!-- Single button -->
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Get App <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">iPhone/iPad App Store</a>
								</li>
								<li><a href="#">Google Play Store</a>
								</li>
								<li><a href="#">Web Site</a>
								</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default" role="button" data-toggle="tooltip" data-placement="top" title="Read the full description, and leave a rating and comment">Details</a> 
					</p>
				</div>
			</div>

	</div>
	<!-- end fluid container -->

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="js/mobilecheck.js"></script>

	<script>
		jQuery(document).ready(function() {
			$("#input-21f").rating({
				starCaptions: function(val) {
					if (val < 3) {
						return val;
					} else {
						return 'high';
					}
				},
				starCaptionClasses: function(val) {
					if (val < 3) {
						return 'label label-danger';
					} else {
						return 'label label-success';
					}
				},
				hoverOnClear: false
			});

			$('#rating-input').rating({
				min: 0,
				max: 5,
				step: 1,
				size: 'lg',
				showClear: false
			});

			$('#btn-rating-input').on('click', function() {
				$('#rating-input').rating('refresh', {
					showClear: true,
					disabled: true
				});
			});


			$('.btn-danger').on('click', function() {
				$("#kartik").rating('destroy');
			});

			$('.btn-success').on('click', function() {
				console.log('class btn-success clicked and function called');
				$("#kartik").rating('create');
			});

			$('#rating-input').on('rating.change', function() {
				alert($('#rating-input').val());
			});

			$('.rb-rating').rating({
				'showCaption': true,
				'stars': '3',
				'min': '0',
				'max': '3',
				'step': '1',
				'size': 'xs',
				'starCaptions': {
					0: 'status:nix',
					1: 'status:wackelt',
					2: 'status:geht',
					3: 'status:laeuft'
				}
			});
		});
	</script>
</body>

</html>