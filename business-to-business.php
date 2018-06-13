<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="msapplication-tap-highlight" content="no">
		<title>Business to Business</title>
		<!--font awesome cdn-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<!--normalize-->
		<link rel="stylesheet" href="normalize/normalize.css">
		<!--foundation css-->
		<link rel="stylesheet" href="foundation/css/foundation.css">
		<link rel="stylesheet" href="foundation/css/app.css">
		<!--css-->
		<link href="css/style.css" rel="stylesheet" media="screen">
	</head>
	<body id="business-to-business">
		<div id="baseline-overlay"></div>
		<div id="column-overlay"></div>

		<div class="reveal large" id="video-modal" data-reveal aria-labelledby="video-modal" aria-hidden="true" role="dialog">
                <h2 id="video-modal">Time Building at Flying Academy</h2>
                <div class="responsive-embed widescreen">
                    <iframe width="100%" height="600" src="https://www.youtube.com/embed/8832H4BPV1M?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                    <button class="close-button button" data-close aria-label="Close modal" type="button">&times;</button>
                </div>

		<div class="wrapper">
			<!--page navigation-->
			<nav class="page-nav" style="background-image: url(images/headerb2b.jpg);">
				<div class="grid-container">
				<ul class="vertical medium-horizontal menu" data-smooth-scroll>
					<li><a href="#pop-section">Become a PoP</a></li>
					<li><a href="#benefits-section">PoP Benefits</a></li>
					<li><a href="#register-section">Register</a></li>
				</ul>
				</div>
			</nav>
			<div class="grid-container">
				<article class="grid-x grid-margin-x">
					<!--row 1-->
					<header class="cell large-8 large-offset-2 text-center">
						<p class="special-heading center">Flying Academy</p>
						<h1>Business To Business</h1>
						<p>Flying Academy, one of the biggest flight training organisations is offering the opportunity to businesses across the world to become local Point of Presence (PoP). We are looking for aviation professionals or organizations to represent us in their respective territories. Current focus is on countries from South America, Middle East, India, Southeast Asia, Western Europe, however, we are open to discuss other territories than the above.</p>
					</header>
				</article>
				<!--row 2-->
				<article class="grid-x grid-margin-x">
					<!--image-->
					<section class="cell medium-7">
						<div class="responsive-sprite" style="background-image: url(images/b2b1.jpg); background-position: left;"></div>
					</section>
					<!--offest box-->
					<section class="cell medium-5 offset-box right" id="pop-section">
						<h1>Become a PoP</h1>
						<ol class="simple-list number">
							<li>Recruit individual students</li>
							<li>Meet and close agreements with Airlines to which we will provide Cadets</li>
						</ol>
					</section>
				</article>
				<!--row 3-->
				<article class="grid-x grid-margin-x">
					<!--offset box-->
					<section class="cell medium-5 offset-box left" id="benefits-section">
					<h1>Benefits of Becoming a PoP</h1>
					<ul class="simple-list bullet">
						<li>Top class training</li>
						<li>Commission based deal depending of the number of students recruited</li>
						<li>Stability and sustainability</li>
						<li>Access to a worldwide network of professionals</li>
					</ul>
					<p style="text-align: left;">For those interested, please send us an enquiry at <a href="mailto:b2b@FlyingAcademy.com">b2b@FlyingAcademy.com</a> including the company you are representing or with a resume, if you are an aviation professional.</p>
					</section>
					<!--image-->
					<section class="cell medium-7">
						<div class="responsive-sprite" style="background-image: url(images/b2b2.jpg); background-position: right;"></div>
					</section>
				</article>
				<!--row 4-->
				<!--colossal form-->
				<div class="colossal-form double-outline" id="register-section">
					<!--colossal form-->
					<form class="grid-x grid-padding-x">
						<h1 class="cell">Join Us Now!</h1>
						<!--name-->
						<div class="cell medium-6">
							<label for="name">Name</label>
							<input type="text" id="name" placeholder="First Name">
						</div>
						<!--surname-->
						<div class="cell medium-6">
							<label for="surname">Surname</label>
							<input type="text" id="surname" placeholder="Last Name">
						</div>
						<!--email-->
						<div class="cell medium-6">
							<label for="email">Email</label>
							<input type="email" id="email" placeholder="Email">
						</div>
						<!--confirm email-->
						<div class="cell medium-6">
							<label for="confirm-email">Confirm Email</label>
							<input type="email" id="confirm-email" placeholder="Confirm Email">
						</div>
						<!--phone-->
						<div class="cell medium-6">
							<label for="phone">Phone</label>
							<input type="tel" id="phone" placeholder="Phone">
						</div>
						<!--preferred contact method-->
						<div class="cell medium-6">
							<div class="form-spacer"></div>
							<input type="checkbox" id="prefered-contact-method">
							<label for="prefered-contact-method">I Prefer Phone Contact</label>
						</div>
						<!--country-->
						<div class="cell medium-6">
							<label for="country">Country of Residence</label>
							<select id="country">
								<option>Select Country</option>
							</select>
						</div>
						<!--type of license-->
						<div class="cell medium-6">
							<label for="type-license">Type of License</label>
							<select id="type-license">
								<option>Select License</option>
							</select>
						</div>
						<!--interested in...-->
						<div class="cell medium-6">
							<label for="interest">Interested in...</label>
							<select id="interest">
								<option>Select Interest</option>
							</select>
						</div>
						<!--flight experience-->
						<div class="cell medium-6">
							<div class="form-spacer"></div>
							<input type="checkbox" id="flight-experience">
							<label for="flight-experience">Previous Flight Experience</label>
						</div>
						<!--message-->
						<div class="cell">
							<label for="message">Message</label>
							<textarea id="message"></textarea>
						</div>
						<!--submit-->
						<div class="cell">
							<button type="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--jquery-->
		<script src="jquery/jquery.min.js"></script>
		<!--foundation js-->
		<script src="foundation/js/vendor/what-input.js"></script>
		<script src="foundation/js/vendor/foundation.js"></script>
		<script>
			$(document).foundation();
		</script>
		<!--owl js-->
		<script src="owl/js/owl.carousel.js"></script>
	</body>
</html>
