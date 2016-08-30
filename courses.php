<!DOCTYPE html> 
<html lang="en">
<head>
	<title> Emily Zhang: Courses </title>
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
		<a href='index.php#education'><img id='nav-courses' class='nav-ship' src='img/rocketship.png'></a>
		<p id='nav-back'>Go Back</p>
		<img id='deco' src='img/no-rocket.png'>
		<h1 class='text-center header-text'>Courses</h1>
		<?php
		$type = array("Computer Science", "Design", "English", "Math", "Science", "Data/Statistics");
		$courses = array(
			array("CS 1110", "CS 2110", "CS 2300", "CS 2800", "CS 4320"),
			array("INFO 2450","INFO 4240"),
			array("GERST 1170", "ENGL 2000", "ENGL 2800", "AP"),
			array("MATH 1920", "MATH 2930", "MATH 2940"),
			array("PHYS 1112", "PHYS 2213", "AP"),
			array("ENGRD 2700", "ECON 3130", "ORIE 3800", "ORIE 3300", "ORIE 3500", "AP", "AP")
			);
		$names = array(
			array("Introduction to Computing Using Python", "Object Oriented Programming and 
			Data Structures (Java)", "Intermediate Web Programming", "Discrete Structures", "Introduction to Databases"),
			array("Communication and Technology", "Designing Technologies for Social Impact"),
			array("Marx, Nietzsche, Freud", "Introduction to Criticism & Theory", "Introduction to Creative Writing", "English Language & Composition"),
			array("Multivariable Calculus", "Differential Equations", "Linear Algebra"),
			array("Physics I: Mechanics", "Physics II: Electromagnetism", "Chemistry"),
			array("Basic Engineering Probability & Statistics", "Statistics and Probability", "Information Systems and Analysis", "Optimization I", "Engineering Probability and Stats II", "Macroeconomics", "Microeconomics")
			);
		for ($x=0; $x < sizeof($type); $x++) {
			if ($x==0) {
				echo "<h3 class='courses top'> $type[$x] Courses </h3>";
			}else{
				echo "<h3 class='courses'> $type[$x] Courses </h3>";
			}
			echo "<div class='col-sm-1'></div>";
			echo "<div class='col-sm-3'>";
			echo "<p class='text'>";
			for ($y=0; $y < sizeof($courses[$x]); $y++) {
				$course = $courses[$x][$y];
				echo $course."<br>";
			}
			echo "</p></div>";
			echo "<div class='col-sm-8'>";
			echo "<p class='text'>";
			for ($z=0; $z < sizeof($names[$x]); $z++) {
				$name = $names[$x][$z];
				echo $name."<br>";
			}
			echo "</p></div>";
		}
		?>
	</div>
</body>

