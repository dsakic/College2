<?php 
	// Stop Hacking attempt
	define('__APP__', TRUE);
	
	// Start session
    session_start();
	
	// Database connection
	include ("dbconn.php");
	
	// Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	// Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
	// Classes & Functions
    include_once("functions.php");
	
print '
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="keywords" content="HTML,CSS">
		<meta name="author" content="Denis Sakic">
		<meta name="description" content="projektni_zadatak">
		<title>PHP and MySQL project</title>
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
<body>

	<header>
		<div'; print '></div>
		
		<nav>';
			include("menu.php");
		print '</nav>
		
	</header>

	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	
	// Homepage
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
	// News
	else if ($menu == 2) { include("news.php"); }
	
	// Contact
	else if ($menu == 3) { include("contact.php"); }
	
	// About us
	else if ($menu == 4) { include("about-us.php"); }

	// Gallery
	else if ($menu == 5) { include("gallery.php"); }
	
	// Register
	else if ($menu == 6) { include("register.php"); }

	// Signin
	else if ($menu == 7) { include("signin.php"); }
	
	// Admin webpage
	else if ($menu == 8) { include("admin.php"); }
	
	print '
	</main>

	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Denis Šakić <a href="https://github.com/dsakic" class="Github"><i class="fa fa-github"></i></a></p>
		<div class="icon-bar">
			<a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a>
			<a href="https://www.twitter.com/" class="twitter"><i class="fa fa-twitter"></i></a>
			<a href="https://www.google.com/" class="google"><i class="fa fa-google"></i></a>
			<a href="https://www.linkedin.com/" class="linkedin"><i class="fa fa-linkedin"></i></a>
			<a href="https://www.youtube.com/" class="youtube"><i class="fa fa-youtube"></i></a>
		</div>
	</footer>

</body>
</html>';
?>