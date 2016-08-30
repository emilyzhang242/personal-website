<!DOCTYPE html> 
<html lang="en">
<head>
	<title> Emily Zhang </title>
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!--FONT AWESOME-->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<!--JAVASCRIPT-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<!--PARALLAX.JS-->
	<script src="js/parallax/parallax.js"></script>
	<script src="js/parallax/parallax.min.js"></script>
	<!--TYPED.JS-->
	<link href='js/typed/main.css' rel='stylesheet'>
	<script src="js/typed/js/typed.js"></script>
	<!--SLICK (IMAGE SLIDER)-->
	<link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<!--CSS-->
	<link href="css/style.css" media="screen and (min-device-width: 600px)" rel="stylesheet">
	<link href="css/mobile_style.css" media="screen and (max-device-width: 600px)" rel="stylesheet">
	<!--MY JS-->
	<script type="text/javascript" src="js/index.js"></script>

</head>
<body>
	<div class="container-fluid" id='main' data-parallax="scroll" data-position="top" data-bleed="10" data-image-src='img/bg/bg-astronaut-stars.png' data-natural-width="1400" data-natural-height="1100" style="width: 100%">
		<div class='row social'>
			<a href='https://www.linkedin.com/in/emily-zhang-287b24b1' target='_blank'><i class="fa fa-linkedin-square social-icons" aria-hidden="true"></i><br></a>
			<a href= 'https://github.com/emilyzhang242' target='_blank'><i class="fa fa-github-square social-icons" aria-hidden="true"></i><br></a>
			<a href='https://www.pinterest.com/tamagirl242/' target='_blank'><i class="fa fa-pinterest-square social-icons" aria-hidden="true"></i><br></a>
			<a href='#contactme' id='link-contactme'><i class="fa fa-envelope-square social-icons" aria-hidden="true"></i></a>
		</div>
		<div class='row'>
			<div class='small-title'><h3 class='small-title-text text-center'></h3></div>
			<div class='title'>
				<h1 class='title-text text-center'>EMILY ZHANG</h1>
			</div>
		</div>
		<div class='row nav-container'>
			<ul class='mainnav'>
				<li><a href='#aboutme' class='link' id='link-aboutme'>About Me</a></li>
				<li><a href='#education' class='link' id='link-education'>Education</a></li>
				<li><a href='#skills' class='link' id='link-skills'>Skills</a></li>
				<li><a href='#projects' class='link' id='link-projects'>Projects</a></li>
			</ul>
		</div>
		<a id='scroll-btn' href='#aboutme'><i class="fa fa-angle-double-down scroll-button" id='scroll1' aria-hidden="true"></i></a>
		
	</div>
	<h1 class='page-divider' id='divider1'></h1>
	<div class='container-fluid section' id='aboutme'>
		<h1 class='text-center header-text'>About Me</h1>
		<img class='card-icon' id='aboutme-icon1' src='img/icons/girl.png' title='Icon made by Freepik from www.flaticon.com'>
		<div class='aboutme card'>
			<p class='text aboutme'><b><u>WHO</b></u>: Emily Zhang<br><b><u>WHAT</b></u>: InfoSci Major, & hopefully full-stack developer!<br><b><u>WHEN</b></u>: 1995 - Present <br><b><u>WHERE</b></u>: Cornell University, Ithaca<br><b><u>WHY</b></u>: I'm here to live and learn, to expand my horizons as far as my imagination will take me.<br><br><b><u>LIFE PHILOSOPHY</b></u>: "Don't tell me the sky is the limit when there are footprints on the moon."<br></p>
			<a href='aboutme.php' class='btn btn-default' id='aboutme-button'>Learn more about me!</a>
			<p class='text' id='aboutme-mobile'><br>Learn more about me on my desktop site!</p>
		</div>
	</div>
	<div class='container-fluid section' id='education'>
		<h1 class='text-center header-text'>Education</h1>
		<div class='row'>
			<img class='card-icon' src='img/icons/hockaday.jpg' id='education-icon1'>
			<div class='education card'>
				<h3 class='card-title'>2010-2014</h3>
				<p class='text'><b><u>High School</u></b>: The Hockaday School<br><u><b>GPA</b></u>: 3.90<br><u><b>Extracurriculars</b></u>: Debate, Chinese, Voice</p>
				<a class='btn btn-default' target='_blank' href='files/highschoolresume.pdf' id='mobile-resume1'>High School Resume</a>
			</div>
			<img class='card-icon' src='img/icons/cornell.jpg' id='education-icon2'>
			<div class='education card current-card'>
				<h3 class='card-title'>2014-Present</h3>
				<p class='text'><u><b>College</b></u>: Cornell University<br><u><b>Major</b></u>: Information Science<br><b><u>Minor</b></u>: English, Game Design</p>
				<a class='btn btn-default' target='_blank' href='files/collegeresume.pdf' id='mobile-resume2'>College Resume</a>
			</div>
		</div>
		<div class='row education files'>
			<a class='btn btn-default' target='_blank' href='files/highschoolresume.pdf' id='resume1'>High School Resume</a>
			<a class='btn btn-default' target='_blank' href='files/collegeresume.pdf' id='resume2'>College Resume</a>
		</div>
		<div class='row education learnmore text-center'>
			<a id='courses-taken' href='courses.php' class='btn btn-default'>Courses I've Taken</a>
		</div>
	</div>
	<div class='container-fluid section' id='skills'>
		<h1 class='text-center header-text'>Skills</h1>
		<div class='row'>
			<div class='col-md-5'>
				<div class='row skills cards'>
					<div class='skills card'>
						<h3 class='card-title'>Back-end</h3>
						<div class='row skill-set'>
							<div class='col-md-4 skill-list'>
								<img class='skills icon center-block' src='img/icons/java.png'>
								<p class='skills card-text'>Java</p>
							</div>
							<div class='col-md-4 skill-list'>
								<img class='skills icon center-block' src='img/icons/python.png'>
								<p class='skills card-text'>Python</p>
							</div>
							<div class='col-md-4 skill-list'>
								<img class='skills icon center-block' src='img/icons/mysql.png'>
								<p class='skills card-text'>MySQL</p>
							</div>
						</div>
					</div>
					<div class='skills card'>
						<h3 class='card-title'>Front-end</h3>
						<div class='row skill-set'>
							<div class='col-md-4 skill-list'>
								<img class='skills icon center-block' src='img/icons/html.png'>
								<p class='skills card-text'>HTML</p>
							</div>
							<div class='col-md-4 skill-list'>
								<img class='skills icon center-block' src='img/icons/javascript.png'>
								<p class='skills card-text'>Javascript</p>
							</div>
							<div class='col-md-4 skill-list'>
								<img class='skills icon center-block' src='img/icons/php.png'>
								<p class='skills card-text'>PHP</p>
							</div>
						</div>
					</div>
					<div class='skills card'>
						<h3 class='card-title'>Other</h3>
						<div class='row skill-set'>
							<div class='col-md-4 skill-list'>
								<img class='skills icon center-block' src='img/icons/chinese.png'>
								<p class='skills card-text'>Chinese</p>
							</div>
							<div class='col-md-4 skill-list'>
								<img class='skills icon center-block' src='img/icons/writing.png'>
								<p class='skills card-text'>Writing</p>
							</div>
							<div class='col-md-4'>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='col-md-7 skills description'>
				<h2 class='skills description-text' id='skills-title'>Java</h2>
				<hr class='skills'>
				<p class='text skills general-overview' id='skills-overview'><b><u>General Overview</u></b>: I would probably say I've coded the most in Java. Last Summer, I worked as an Application Developer Intern for the Dallas Federal Reserve and coded in Java.</p>
				<p class='text skills classes' id='skills-classes'><b><u>Classes Taken</u></b>: Object Oriented Programming (CS 2110)</p>
				<p class='text skills exp' id='skills-exp'><b><u>Practical Experience</u></b>: Projects in classes e.g. Shipping Algorithm (Djikstra) or Hangman. </p>
				<p class='text important'>*Click on the icons on the cards to see more info!</p>
			</div>
		</div>
	</div>
	<div class='container-fluid section' id='projects'>
		<h1 class='text-center header-text'>Projects</h1>
		<div class='row' id='mobile-projects'>
			<div class="card">
				<p class='text project-page'>Please refer to my desktop site or github for a list of projects I've worked on!<br><a href= 'https://github.com/emilyzhang242' target='_blank'><i class="fa fa-github-square mobile-icon" aria-hidden="true"></i><br></a></p>
			</div>
		</div>
		<div class='row' id='desktop-projects'>
			<div class='col-md-1'></div>
			<div class='col-md-7'>
				<div class='row project-images'>
					<div><img class='projects images project-image' src='img/project-img/leaguegoals1.png'></div>
					<div><img class='projects images project-image' src='img/project-img/leaguegoals2.png'></div>
					<div><img class='projects images project-image' src='img/project-img/leaguegoals3.png'></div>
				</div>
				<div class='row'>
					<div class='card project description'>
						<p class='text' id='project-description'>With a partner, I designed a website that pulls game data from the Riot API and analyzes the statistics of a user of a game called League of Legends. We analyze...</p>
						<a href='project_leaguegoals.php' class='btn btn-default projects learnmore' id='projects-learnmore'>Learn more about this project</a>
					</div>
				</div>
			</div>
			<div class='col-md-4'>
				<div class='row projects card'>
					<p class='projects text project-names' id='booksgalore'>Books Galore</p>
					<p class='projects text project-names main-project current-project' id='leaguegoals'>League Goals</p>
					<p class='projects text project-names' id='sherlock'>Sherlock</p>
				</div>
			</div>
		</div>
	</div>
	<div class='container-fluid section' id='contactme'>
		<h1 class='text-center header-text'>Contact Me</h1>
		<div class='row'>
			<p class='contactme message text-center' id='contact-check'></p>	
			<div class='col-md-4'></div>
			<div class='col-md-4'>
				<form id='contact-form' class='text-center contactme' action="MAILTO:ez86@cornell.edu" method="post" enctype="text/plain">
					<label class='pull-left' for='contact-name'>Name*:</label><br>
					<input id='contact-name' class='form-control' type="text" name="name" placeholder="your name" id='contact-name'><br>
					<label class='pull-left' for='contact-email'>E-mail*:</label><br>
					<input id='contact-email' class='form-control' type="text" name="mail" placeholder='your email' id='contact-email'><br>
					<label class='pull-left' for='contact-msg'>Message*:</label><br>
					<textarea id='contact-msg' class='form-control' type="text" name="comment" placeholder="your comment" rows='10'></textarea><br><br>
					<input id='contact-submit' class='btn btn-default' name='contact-submit' type="submit" value="Send">
				</form>
			</div>
			<div class='col-md-4'></div>
		</div>
	</div>
</body>
