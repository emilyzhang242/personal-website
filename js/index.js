//PREP WORK
$(document).ready(function(){

	$(".title").hide(); 
	$(".nav-container").hide();
	$("#scroll1").hide();
	$(".section").hide();

	//play typing 
	if (window.location.hash) {
		$(".title").fadeIn('slow');
		$(".nav-container").fadeIn('slow');
		$("#scroll1").fadeIn();
	}else{
		playTyping();
	}

    //show pages by nav
    $("#link-aboutme").on("click", function(){
    	$(".section").hide();
    	$("#scroll-btn").attr('href', '#aboutme');
    	$("#aboutme").show();
    });
    $("#link-education").on("click", function(){
    	$(".section").hide();
    	$("#scroll-btn").attr('href', '#education');
    	$("#education").show();
    });
    $("#link-skills").on("click", function(){
    	$(".section").hide();
    	$("#scroll-btn").attr('href', '#skills');
    	$("#skills").show();
    });
    $("#link-projects").on("click", function(){
    	$(".section").hide();
    	$("#scroll-btn").attr('href', '#projects');
    	$("#projects").show();
        //slick.js
        $('.project-images').slick(getSliderSettings());
    });
    $("#link-contactme").on("click", function(){
    	$(".section").hide();
    	$("#scroll-btn").attr('href', '#contactme');
    	$("#contactme").show();
    });

    //control nav back from other pages
    //CURRENTLY ISN'T WORKING???
    var param = window.location.hash;
    if (param == "aboutme") {
    	$(".section").hide();
    	$("#aboutme").show();
    }else if (param == "courses") {
    	$(".section").hide();
    	$("#education").show();
    }

    //sticky social icons
    var stickyNavTop = $('.social').offset().top+490;

    var stickyNav = function(){
    	var scrollTop = $(window).scrollTop();

    	if (scrollTop > stickyNavTop) { 
    		$('.social').addClass("social-abs");
    		$('social').removeClass("social-fixed");
    	} else {
    		$(".social").addClass("social-fixed");
    		$('.social').removeClass("social-abs"); 
    	}
    };

    stickyNav();

    $(window).scroll(function() {
    	stickyNav();
    });

    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
            	scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } 
    });

    $("#contact-form").submit(function(event) {
    	var msg = "";
    	if ($("#contact-name").val() != "" && $("#contact-email").val() != "" && isEmail($("#contact-email").val()) && $("#contact-msg").val() != "") {
    		$(this).unbind('submit').submit();
    		msg = "Thank you! I've received your message and will respond as soon as possible.";
    	}else{
    		event.preventDefault();
    		$("#contact-check").addClass("warning");
    		msg += "(1) Please fill in all fields. ";
    	}
    	if (!isEmail($("#contact-email").val())) {
    		$("#contact-check").addClass("warning");
    		if (msg != "") {
    			msg += " (2) That isn't a valid email! <br>";
    		}else{
    			msg += "(1) That isn't a valid email! <br>";
    		}
    	}
    	$("#contact-check").html(msg);
    	$("#contact-check").css("margin-top", "4%");
    	$("#contact-form").css("margin-top", "0%");
    });

    //project descriptions

    //skill list nav
    $(".skill-list").on("click", function(){
    	var index = $(".skill-list").index(this);
    	if (index == 0) {
    		$("#skills-title").html("Java");
    		$("#skills-overview").html("<b><u>General Overview</u></b>: I would probably say I've coded the most in Java. I've learned Java alongside data structures and object oriented programming.");
    		$("#skills-classes").html("<b><u>Classes Taken</u></b>: Object Oriented Programming (CS 2110)");
    		$("#skills-exp").html("<b><u>Practical Experience</u></b>: Summer Internship at the Dallas Federal Reserve as well as projects in classes e.g. Shipping Algorithm (Djikstra) or Hangman.");
    	}
    	if (index == 1) {
    		$("#skills-title").html("Python");
    		$("#skills-overview").html("<b><u>General Overview</u></b>: I use Anaconda (Spyder) as the IDE, and I'm quite comfortable coding in Python, having used it in classes and projects.");
    		$("#skills-classes").html("<b><u>Classes Taken</u></b>: Introduction to Python (CS 1110)");
    		$("#skills-exp").html("<b><u>Practical Experience</u></b>: The backend for my League Goals project is coded completely in Python.");
    	}
    	if (index == 2) {
    		$("#skills-title").html("MySql");
    		$("#skills-overview").html("<b><u>General Overview</u></b>: I'm familiar using MySQL in PHPMyAdmin and using it in the context of querying for web pages.");
    		$("#skills-classes").html("<b><u>Classes Taken</u></b>: Intermediate Web Programming (CS 2300), Introduction to Databases (CS 4320)");
    		$("#skills-exp").html("<b><u>Practical Experience</u></b>: The data for my League Goals project is stored in a MySQL database, and I've used MySQL for projects such as a photo database.");
    	}
    	if (index == 3) {
    		$("#skills-title").html("Html/Css");
    		$("#skills-overview").html("<b><u>General Overview</u></b>: I've built several websites, including 4 for a class and 2 personal projects.");
    		$("#skills-classes").html("<b><u>Classes Taken</u></b>: Intermediate Web Programming (CS 2300)");
    		$("#skills-exp").html("<b><u>Practical Experience</u></b>: Take a look at <a href='#projects'>these websites</a> to see what I've built!");
    	}
    	if (index == 4) {
    		$("#skills-title").html("Javascript/Jquery");
    		$("#skills-overview").html("<b><u>General Overview</u></b>: I'm both comfortable with JQuery by itself and with using JS/Jquery plug-ins to further functionality.");
    		$("#skills-classes").html("<b><u>Classes Taken</u></b>: Intermediate Web Programming (CS 2300)");
    		$("#skills-exp").html("<b><u>Practical Experience</u></b>: I've used plug-ins such as datatables, Jquery UI, parallax.js, etc.");
    	}
    	if (index == 5) {
    		$("#skills-title").html("Php");
    		$("#skills-overview").html("<b><u>General Overview</u></b>: Almost all of the websites I've worked on include PHP functionality.");
    		$("#skills-classes").html("<b><u>Classes Taken</u></b>: Intermediate Web Programming (CS 2300)");
    		$("#skills-exp").html("<b><u>Practical Experience</u></b>: The majority of my League Goals website front-end is generated dynamically using PHP, and I use PHP to call Python scripts as well.");
    	}
    	if (index == 6) {
    		$("#skills-title").html("Chinese");
    		$("#skills-overview").html("<b><u>General Overview</u></b>: I'm a native speaker of Chinese, and I can both listen, speak, and write fluently.");
    		$("#skills-classes").html("<b><u>Classes Taken</u></b>: I've taken 12 years of lessons.");
    		$("#skills-exp").html("<b><u>Practical Experience</u></b>: I communicate with my family in Chinese daily.");
    	}
    	if (index == 7) {
    		$("#skills-title").html("Writing");
    		$("#skills-overview").html("<b><u>General Overview</u></b>: Not only was my high school very writing-centered, but I did 5 years of debate. In addition, "
    			+"I freelance edit essays and write in my spare time.");
    		$("#skills-classes").html("<b><u>Classes Taken</u></b>: Introduction to Creative Writing (ENGL 2800)");
    		$("#skills-exp").html("<b><u>Practical Experience</u></b>: I've written several articles for an online magazine called 'A Distinctive Style'.");
    	}
    });

    //projects nav
    $(".project-names").on("click",function(){
        //change appearance
        var index = $(".project-names").index(this);
        $(".project-names").removeClass("current-project");
        $(".project-names").eq(index).addClass("current-project");
        //change pictures 
        var id = $(".project-names").eq(index).attr('id');
        var html = ""
        for (var x=1; x<= 3; x++) {
        	html += "<div><img class='projects images' src='img/project-img/"+id+x+".png'></div>";
        }
        $(".project-images").slick('unslick');
        $(".project-images").html(html);
        $(".project-images").slick(getSliderSettings());
        //change description text
        if (id == "leaguegoals") {
        	$("#project-description").html("With a partner, I designed a website that pulls game data from the Riot API and analyzes the statistics of a user of a game called League of Legends. We analyze...</p>");
        }else if (id == "sherlock") {
        	$("#project-description").html("My first website for a class, consisting of a small quiz, and constructed using HTML, PHP, and some javascript.");
        }else if (id='booksgalore') {
        	$("#project-description").html("A simple website that stores information about books and allows you to delete, add, or search for different aspects of books. This website makes use of a text file to store data, "
        		+"as we hadn't yet learned how to use databases.");
        }
        if ($(".project-names").eq(index).hasClass("main-project")) {
        	$("#projects-learnmore").css('href', 'projects.php?project='+id);
        	$("#projects-learnmore").show();
        }else{
        	$("#projects-learnmore").hide();
        }

    });
});

//TYPED
function playTyping() {
	$(function(){
		$(".small-title-text").typed({
			strings: ["Hello!", "Welcome to my website!", "Please enjoy your stay."],
			typeSpeed: 90,
			backDelay: 750,
		});
	});
	setTimeout(function(){
		$(".small-title").fadeOut('slow', function() {
			$(".title").fadeIn('slow');
			$.ajax({
				url: "/portfolio/navbar.php",
				type: "GET",
				dataType: "html",
				success: function(text) {
					$(".nav-container").fadeIn('slow');
					$("#scroll1").fadeIn();
				}
			});
		});
	}, 11000);
}

function getSliderSettings() {

	return {
		dots: true,
		infinite: true,
		speed: 800,
		fade: true,
		cssEase: 'linear',
		autoplay:true,
		autoplaySpeed: 5000
	}
}

function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}

function getURLParameters() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}



