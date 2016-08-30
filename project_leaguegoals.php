<!DOCTYPE html> 
<html lang="en">
<head>
	<title> Emily's Project: League Goals </title>
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!--FONT AWESOME-->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<!--JAVASCRIPT-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<!--TYPED.JS-->
	<link href='js/typed/main.css' rel='stylesheet'>
	<script src="js/typed/js/typed.js"></script>
	<!--CSS-->
	<link href="css/style.css" rel="stylesheet">

</head>
<body>
	<div class='container-fluid section'>
		<a href='index.php#projects'><img id='nav-courses' class='nav-ship' src='img/rocketship.png'></a>
		<p id='nav-back'>Go Back</p>
		<img id='deco' src='img/no-rocket.png'>
		<h1 class='text-center header-text'>League Goals</h1>
		<p class='text project-page'><u><b>MOTIVATION:</b></u><br>My friends and I all play this game called League of Legends, which is one of the most <br>popular multiplayer games right now. However, our competitive streaks forbid us from simply <br>playing; we wanted to excel at the game. After looking at website after website, my friend <br> and I realized that the data we truly needed to improve at the game was missing. Most <br> websites showed statistics of users, but made no comparison. We didn't just want to see what our own statistics were though, we wanted to see what statistics we would need to get to the rank we wanted to be at. And thus, the idea for this website was born.
		<br><br>
		<u><b>PREMISE:</b></u><br>By entering their username as well as the rank they'd like to achieve, a user can compare their own statistics to the average of that rank, seeing how much they need to improve in certain important game metrics. <br><br>This is a data-driven website. For each user that comes to the site, we add their statistics to the pool of data, increasing its accuracy and minimizing our own effort (after all, it's nearly impossible to add the tens of millions of users by ourselves). 
		<br><br>
		<u><b>CONSTRUCTION:</b></u><br>Python in the back-end drives the retrieval of data. Not only is all the data retrieved from the Riot API in Python, but I coded the analysis and computations in Python as well. This allows us to simply run a Python script in the backend.<br><br>The front-end consists of HTML, JQuery, and PHP. All pages are dynamically generated using PHP and offer interactivity (searching, sorting, hovering over) through JQuery. 
		<br><br>
		<u><b>MY TAKEAWAY: </b></u><br>This was the first large scale project I attempted, and I'm quite happy with the result. I accomplished much of what I set out to accomplish. I worked on every single layer of this project, including the planning and execution. The difficulties in this project lay in piecing together the separate parts: making the Python scripts work in PHP, making sure the JQuery CSS didn't conflict with the HTML CSS, etc. However, this project has taught me just how enjoyable being full-stack can be.<br><br>This is by no means a complete website; it's more a prototype to something I'd like to build later, but it's been an eye-opening experience, and definitely worth the many grueling hours I put into it. </p>
	</div>
</body>

