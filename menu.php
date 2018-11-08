<?php 
	print '
	<div class="banner">
        <img class="banner-image" src="images/nieuwsbrief.png">
    </div>
	<ul>
		<li><a href="index.php?menu=1">Home</a></li>
		<li><a href="index.php?menu=2">News</a></li>
		<li><a href="index.php?menu=3">Contact</a></li>
		<li><a href="index.php?menu=4">About</a></li>
		<li><a href="index.php?menu=5">Gallery</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<a href="index.php?menu=6">Register</a>
			<a href="index.php?menu=7">Sign In</a>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<a href="index.php?menu=8">Admin</a>
			<a href="signout.php">Sign Out</a>';
		}
		print '
	</ul>';
?>