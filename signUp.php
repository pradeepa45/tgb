<html>

<head>
	<title>3-GB - SignUp</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/circle.ico" height="16px" type="x-icon" />
	<!-- google-fonts -->
	<link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<!-- //google-fonts -->
	<link rel="stylesheet" href="assets/css/style-starter.css">

	<style>
		h1 {
			font-size: 30px;
			color: white;
			/* padding-top: 10px; */
		}

		#signup-container {
			text-align: center;
			width: fit-content;
			background-color: #0c4972;
			border-radius: 12px;
			margin-left: auto;
			margin-right: auto;
			padding: 20px;
			margin-top: 72px;
			margin-bottom: 100px;
			border: 5px white solid;
		}

		#header {
			padding-top: 20px;
			padding-bottom: 20px;
		}

		#form {
			/* margin-left: 90px; */
			padding: 30px;
			text-align: center;
		}

		#form button {
			margin: 20px;
			width: 250px;
			border-radius: 10px;
			background-color: #FF6E65;
			color: white;
			padding: 20px;
			outline-color: transparent;
		}

		#form input {
			margin-bottom: 20px;
			width: 250px;
			padding: 20px;
			border-radius: 10px;

		}

		.span-text a {
			color: #FF6E65;
			text-decoration: none;
		}

		/* a:visited {
			color: white;
		} */

		.span-text {
			color: #FF6E65;
			font-weight: 600;
		}
	</style>

</head>

<body>
	<?php include('header.php'); ?>
	<div id="signup-container">
		<div id="header">
			<h1>Welcome, Sign Up</h1>
		</div>
		<div id="form">
			<input type="email" placeholder="Email" id="email" /><br>
			<input type="password" placeholder="Password" id="password" /> <br>
			<button onClick="signup()" id="signup">Sign Up</button>
			<br />
			<p style="color: white;float: right;margin-bottom: 20px;">Have an Account? <span class="span-text"><a
						href="login.php">Sign In</a></span></p>

		</div>
	</div>
	<?php include('footer.php'); ?>
	<!-- ADDED BY PRADEEPA -->
	<button onclick="topFunction()" id="movetop" title="Go to top">
		<span class="fa fa-level-up" aria-hidden="true"></span>
	</button>
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function () {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("movetop").style.display = "block";
			} else {
				document.getElementById("movetop").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
		function displaySearch(){
            document.getElementById('search-icon').style.display = "none";
            document.getElementById('search-bar').style.display = "block";
        }
	</script>
	<!-- //move top -->

	<!-- common jquery plugin -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<!-- //common jquery plugin -->

	<!-- banner slider -->
	<script src="assets/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-one').owlCarousel({
				loop: true,
				margin: 0,
				nav: false,
				responsiveClass: true,
				autoplay: true,
				autoplayTimeout: 5000,
				autoplaySpeed: 1000,
				autoplayHoverPause: true,
				responsive: {
					0: {
						items: 1,
						nav: false
					},
					480: {
						items: 1,
						nav: false
					},
					667: {
						items: 1,
						nav: false
					},
					1000: {
						items: 1,
						nav: false
					}
				}
			})

			$("more-links")
				.mouseenter(function () {
					$('.dropdown-content').css({ 'display': 'block' })
				})
				.mouseleave(function () {
					$('.dropdown-content').css({ 'display': 'none' })
				});
		})
	</script>
	<!-- //banner slider -->

	<!-- counter for stats -->
	<script src="assets/js/counter.js"></script>
	<!-- //counter for stats -->

	<!-- theme switch js (light and dark)-->
	<script src="assets/js/theme-change.js"></script>
	<script>
		function autoType(elementClass, typingSpeed) {
			var thhis = $(elementClass);
			thhis.css({
				"position": "relative",
				"display": "inline-block"
			});
			thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
			thhis = thhis.find(".text-js");
			var text = thhis.text().trim().split('');
			var amntOfChars = text.length;
			var newString = "";
			thhis.text("|");
			setTimeout(function () {
				thhis.css("opacity", 1);
				thhis.prev().removeAttr("style");
				thhis.text("");
				for (var i = 0; i < amntOfChars; i++) {
					(function (i, char) {
						setTimeout(function () {
							newString += char;
							thhis.text(newString);
						}, i * typingSpeed);
					})(i + 1, text[i]);
				}
			}, 1500);
		}

		$(document).ready(function () {
			// Now to start autoTyping just call the autoType function with the 
			// class of outer div
			// The second paramter is the speed between each letter is typed.   
			autoType(".type-js", 200);
		});
	</script>
	<!-- //theme switch js (light and dark)-->

	<!-- MENU-JS -->
	<script>
		$(window).on("scroll", function () {
			var scroll = $(window).scrollTop();

			if (scroll >= 80) {
				$("#site-header").addClass("nav-fixed");
			} else {
				$("#site-header").removeClass("nav-fixed");
			}
		});

		//Main navigation Active Class Add Remove
		$(".navbar-toggler").on("click", function () {
			$("header").toggleClass("active");
		});
		$(document).on("ready", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
			$(window).on("resize", function () {
				if ($(window).width() > 991) {
					$("header").removeClass("active");
				}
			});
		});
	</script>
	<!-- //MENU-JS -->

	<!-- disable body scroll which navbar is in active -->
	<script>
		$(function () {
			$('.navbar-toggler').click(function () {
				$('body').toggleClass('noscroll');
			})
		});
	</script>
	<!-- //disable body scroll which navbar is in active -->
	<!-- //ADDED BY PRADEEPA -->

	<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-database.js"></script>

	<script>
		var firebaseConfig = {
			apiKey: "AIzaSyCyeUSXzudTeRxw_w8iJm3GSpwVs2nJVAQ",
			authDomain: "login-4c29b.firebaseapp.com",
			projectId: "login-4c29b",
			storageBucket: "login-4c29b.appspot.com",
			messagingSenderId: "125981690227",
			appId: "1:125981690227:web:8964d846505e10dcaa5d06",
			measurementId: "G-0572DFJKW2"
		};
		// Initialize Firebase
		firebase.initializeApp(firebaseConfig);

		//------SignUp-----
		const auth = firebase.auth();

		function signup() {
			var email = document.getElementById("email");
			var password = document.getElementById("password");

			const promise = auth.createUserWithEmailAndPassword(email.value, password.value);
			promise.catch(e => alert(e.message));

			alert("Signed Up");
		}


	</script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>