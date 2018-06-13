<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="msapplication-tap-highlight" content="no">
		<title>Location Details</title>
		<!--font awesome cdn-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<!--normalize-->
		<link rel="stylesheet" href="normalize/normalize.css">
		<!--foundation css-->
		<link rel="stylesheet" href="foundation/css/foundation.css">
		<link rel="stylesheet" href="foundation/css/app.css">
		<!--owl css-->
		<link rel="stylesheet" href="owl/css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl-theme.css">
		<!--css-->
		<link href="css/style.css" rel="stylesheet" media="screen">
	</head>
	<body id="location-details">
		<!--overlay-->
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
		<?php include 'header.php' ?>

			<!--page navigation-->
			<nav class="page-nav" id="locations">
				<div class="grid-container">
					<ul class="vertical medium-horizontal menu">
						<li><a href="">Miami home</a></li>
						<li><a href="">Courses in Miami</a></li>
						<li><a href="">Contacts</a></li>						
					</ul>
				</div>
			</nav>
			<div class="grid-container">
				<!--row 1-->
				<!--info banner-->
				<article class="grid-x grid-margin-x background">
					<!--background gradient image-->
					<div class="gradient-image" style="background-image: url(images/bg-miami-buildings.jpg);"></div>	
					<section class="cell medium-6">
						<p class="special-heading">Flying Academy</p>
						<h1>Miami, Florida</h1>
						<p>Flying Academy Miami is a flight school authorized by the FAA under Part 141 and Part 61. Our school is located just 13 miles (21 km) southwest of Downtown Miami at Miami Executive Airport (KTMB), Miami FL, USA. Miami Executive Airport is known for the highest volume of traffic. This will prepare the future pilot career. Florida tropical weather, makes it possible to fly year-round, you can expect over 360 flying days. This condition makes the building hours up quick so they can jump into the seat of an airline or corporate position.</p>
						<!--sudo table-->						
						<div class="pseudo-table">
							<div>
								<img src="images/envelope.png">
								<a href="">fly@flyingacademy.com</a>
							</div>
							<div>
								<img src="images/phone.png">
								<a href="">+420 228 882 444</a>
							</div>
							<div>
								<img src="images/server.png">
								<a href="">Course Brochure.pdf</a>
							</div>
							<div>
								<img src="images/sun.png">
								Local weather: 29C/85F
							</div>						
							<div>
								<img src="images/clock.png">
								Local time <time>15:40</time>
							</div>						
							<div>
								<img src="images/price.png">
								Price from: $32,595
							</div>
						</div>
					</section>			
					<!--quad carousel -->		
					<Section class="cell owl-carousel owl-theme quad-carousel">
						<!--column 1-->
						<div class="item" style="background-image: url(images/ppl.jpg);">
							<h2 class="layer-1">0-PPL</h2>
							<div class="layer-2">
								<h2>0-PPL</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales finibus arcu, at vestibulum libero rhoncus nec.</p>
							</div>
						</div>
						<!--column 2-->
						<div class="item" style="background-image: url(images/0-atpl.jpg);">
							<h2 class="layer-1">0-CPL</h2>
							<div class="layer-2">
								<h2>0-CPL</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales finibus arcu, at vestibulum libero rhoncus nec.</p>
							</div>
						</div>
						<!--column 3-->
						<div class="item" style="background-image: url(images/atpl-integrated.jpg);">
							<h2 class="layer-1">ATPL</h2>
							<div class="layer-2">
								<h2>ATPL</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales finibus arcu, at vestibulum libero rhoncus nec.</p>
							</div>
						</div>
						<!--column 4-->
						<div class="item" style="background-image: url(images/0-atpl-with.jpg);">
							<h2 class="layer-1">0-ATPL</h2>
							<div class="layer-2">
								<h2>0-ATPL</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales finibus arcu, at vestibulum libero rhoncus nec.</p>
							</div>
						</div>
						<!--column 5-->
						<div class="item" style="background-image: url(images/ppl.jpg);">
							<h2 class="layer-1">PPL</h2>
							<div class="layer-2">
								<h2>PPL</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales finibus arcu, at vestibulum libero rhoncus nec.</p>
							</div>
						</div>
						<!--column 6-->
						<div class="item" style="background-image: url(images/0-atpl.jpg);">
							<h2 class="layer-1">0-ATPL</h2>
							<div class="layer-2">
								<h2>0-ATPL</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales finibus arcu, at vestibulum libero rhoncus nec.</p>
							</div>
						</div>
						<!--column 7-->
						<div class="item" style="background-image: url(images/atpl-integrated.jpg);">
							<h2 class="layer-1">ATPL</h2>
							<div class="layer-2">
								<h2>ATPL</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales finibus arcu, at vestibulum libero rhoncus nec.</p>
							</div>
						</div>
						<!--column 8-->
						<div class="item" style="background-image: url(images/0-atpl-with.jpg);">
							<h2 class="layer-1">0-ATPL</h2>
							<div class="layer-2">
								<h2>0-ATPL</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales finibus arcu, at vestibulum libero rhoncus nec.</p>
							</div>
						</div>
					</section>
				</article>
				<!--row 2-->	
				<!--uni carousel container-->
				<article class="grid-x grid-margin-x">
					<section class="cell medium-7">
						<!--uni carousel-->
						<div class="owl-carousel owl-theme uni-carousel tall">
							<!--column 1-->
							<div class="item" style="background-image: url(images/0-atpl-with.jpg);">
							</div>
							<!--column 2-->
							<div class="item" style="background-image: url(images/0-atpl-with.jpg);">
							</div>
							<!--column 3-->
							<div class="item" style="background-image: url(images/0-atpl-with.jpg);">
							</div>
						</div>
					</section>
					<!--offset box-->
					<section class="cell medium-5 offset-box right">
						<h1>Miami Executive Airport (KTMB):</h1>
						<ul class="simple-list">
							<li>International airport</li>
							<li>Award-winning FAA-staffed control tower</li>
							<li>Training opportunities with full ILS and RNAV/GPS approaches</li>
							<li>Port of entry with US customs</li>					
							<li>IFR, CTR</li>
						</ul>
						<a class="button nuetral big" href="">See More About Our Fleet</a>
					</section>
				</article>
				<!--row 3-->
				<!--statistics boxes-->
				<article class="grid-x large-up-3 grid-margin-x stats-box">
					<section class="cell">
						<p>3</p>
						<h1>Runways</h1>
					</section>
					<section class="cell">
						<p>186 653</p>
						<h1>Operations per year</h1>
					</section>
					<section class="cell">
						<p>450</p>
						<h1>Aircrafts</h1>
					</section>
				</article>
				<!--row 4-->
				<article class="grid-x">
					<!--video box-->
					<section class="cell large-6 video-box" data-open="video-modal">
                            <dir class="responsive-sprite" style="background-image: url(images/pilot.jpg)"></dir>
                        </section>
					<!--video summary box-->
					<section class="cell large-6 video-summary-box">
						<p class="special-heading small">Flying Academy</p>
						<h1>How to Become Airline Pilot with FAA License</h1>
						<p>In this video Anna will explain you how you can become an international airline pilot with american license FAA ATPL. You will learn that ATPL pilot consists of and what courses can give it to you</p>
						<a class="button youtube" href="">See More Videos On Our YouTube Channel</a>
					</section>
				</article>
				<!--row 5-->
				<!--background-->
				<article class="grid-x grid-margin-x background">			
					<!--floaty image-->
					<div class="gradient-image" style="background-image: url(images/bg-miami-beach.jpg);"></div>
					<section class="cell large-6">
						<h1>Miami Transportation Fees</h1>
						<!--fancy table-->
						<table class="fancy-table">
							<tbody>
								<tr>
									<td>From Miami International Airport</td>
									<td>&dollar;70 usd</td>
								</tr>
								<tr>
									<td>From Fort Lauderdale International Airport</td>
									<td>&dollar;120 usd</td>
								</tr>
								<tr>
									<td>From any location within a 10 mile radius of Flying Academy</td>
									<td>&dollar;20 usd</td>
								</tr>
								<tr>
									<td>Aircraft Piper Cadet (VFR - 2 Seater)</td>
									<td>&dollar;6 usd</td>
								</tr>
							</tbody>
						</table>
						<p class="asterisk">Stops between trips will incur additional charges</p>
					</section>
				</article>
				<!--row 6-->
				<article class="grid-x grid-margin-x">					
					<section class="cell medium-7">
						<!--resposive sprite-->
						<div class="responsive-sprite" style="background-image: url(images/bg-scooter.jpg);"></div>	
					</section>
					<!--offest box-->
					<section class="cell medium-5 offset-box right">
						<h1>Scooter Rental</h1>
						<p>One Monthly Rate<br>&dollar;200 usd/month</p>
						<p>Six Month Rate<br>&dollar;150 usd/month</p>
						<p>Two Weeks–One Month Rate<br>&dollar;125 usd/month</p>
						<p>Daily Rate<br>&dollar;10 usd/month</p>
					</section>					
				</article>
				<!--row 7-->
				<!--background-->
				<article class="grid-x grid-margin-x background">
					<!--floaty image-->
					<div class="gradient-image" style="background-image: url(images/bg-miami-buildings.jpg);"></div>	
					<section class="cell medium-6">
						<h1>Miami Accomodation</h1>
						<p>Our staff will help you find the most suitable place during your study. Flying Academy can provide accommodation to fit everyone's taste and budget. Short-term and long-term accommodations are available on the request.
						</p>
						<p>We offer our students a family house type of accommodation, fully furnished with a complete kitchenette, bathrooms and internet. The accommodation facilities are always only a short drive away from our Flying Academy base.</br>Students can decide between a single or shared room.</p>				
						<!--flex wrapper-->
						<div class="flex-wrapper">
							<!--detail box-->
							<div class="detail-box">
								<h1>Private Room</h1>
								<p>Monthly rate - &dollar;1200</br>&dollar;1200 - private bathroom</br>15 days rate - &dollar;850</br>Daily rate - &dollar;60</p>
							</div>		
							<!--detail box-->
							<div class="detail-box">
								<h1>Shared Room</h1>		
								<p>Monthly rate - &dollar;750</br>15 days rate - &dollar;500</br>Daily rate - &dollar;40</p>
							</div>
						</div>
						<a class="button dark big full" href="">Read More About Accomodations in Miami</a>
					</section>
				</article>
			</div>
			<div class="colossal-form double-outline">
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
			<?php include 'footer.php' ?>

		</div>		
		<!--jquery-->
		<script src="jquery/jquery.min.js"></script>
		<!--foundation js-->		
		<script src="foundation/js/vendor/jquery.js"></script>
		<script src="foundation/js/vendor/what-input.js"></script>
		<script src="foundation/js/vendor/foundation.js"></script>
		<script src="foundation/js/app.js"></script>
		<script>
			$(document).foundation();
		</script>
		<!--owl js-->
		<script src="owl/js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {
				$('.quad-carousel').owlCarousel({
					dots: false,
					nav: true,
					autoplay: true,
					autoplayTimeout: 5000,					
					loop: true,
					margin: 30,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1
						},
						640: {
							items: 2
						},
						1024: {
							items: 4
						},
						1200: {
							items: 4
						},
						1440: {
							items: 4
						},
					}
				})
			})
		</script>
		<script>
			$(document).ready(function() {
				$('.uni-carousel').owlCarousel({
					dots: false,
					nav: true,
					autoplay: true,
					autoplayTimeout: 5000,					
					loop: true,
					margin: 30,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1
						},
						640: {
							items: 1
						},
						1024: {
							items: 1
						},
						1200: {
							items: 1
						},
						1440: {
							items: 1
						},
					}
				})
			})
		</script>
	</body>
</html>