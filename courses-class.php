<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="msapplication-tap-highlight" content="no">
		<title>Course Details</title>
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
	<body id="course-details">
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
			<nav class="page-nav">
				<div class="grid-container">			
				<ul class="vertical medium-horizontal menu" data-smooth-scroll>
					<li><a href="#our-courses">Our Courses</a></li>
					<li><a href="#easa-flight-courses">EASA Flight Courses</a></li>
					<li><a href="#easa-locations">EASA Locations</a></li>
					<li><a href="#faa-flight-courses">FAA Flight Courses</a></li>
					<li><a href="#faa-locations">FAA Locations</a></li>
				</ul>
				</div>			
			</nav>
			<div class="grid-container">
				<!--row 1-->
				<article class="grid-x grid-margin-x">
					<!--uni carousel-->
					<section class="cell large-6 owl-carousel owl-theme uni-carousel">
						<!--column 1-->
						<div class="item" style="background-image: url(images/0-atpl-with.jpg);">
						</div>
						<!--column 2-->
						<div class="item" style="background-image: url(images/0-atpl-with.jpg);">
						</div>
						<!--column 3-->
						<div class="item" style="background-image: url(images/0-atpl-with.jpg);">
						</div>
					</section>
					<!--simple info-->
					<section class="cell large-6 simple-info">
						<p class="special-heading small">Flying Academy</p>
						<h1>FAA 0-CPL</h1>						
						<p>0-<abbr title="Commercial Pilot Licence">CPL(A)</abbr> is designed for students with little to no flying experience and that want to pursue a career in aviation according to <abbr title="Federal Aviation Administration">FAA</abbr> regulations. The trainees of the program will start with <a href=""><abbr title="Private Pilot Licence">PPL(A)</abbr></a> and, upon obtaining the necessary flight experience, will continue with <abbr title="Instrument Rating"><a href="">IR(A)</a></abbr>, <abbr title="Commercial Pilot Licence">CPL(A)</abbr> modules and <a href=""><abbr title="multi-engine Land">MEL</abbr></a> flight programs.</p>
						<!--hidden text-->
						<p class="hide">After successful completion of the zero to <abbr title="Commercial Pilot Licence">CPL(A)</abbr> course, you will be issued an FAA <abbr title="Commercial Pilot Licence">CPL(A)</abbr> license and will be authorized to act as Pilot-In-Command (PIC) and acquire compensation on an aircraft. The privileges of the holder of a <abbr title="Commercial Pilot Licence">CPL(A)</abbr> are to act as pilot-in-command (Captain) or co-pilot (First Officer) in charter operations and corporate flying which exercises all the privileges of the holder of a PPL(A), and IR(A). At the end of the course, each pilot will have 190 hours of flight experience out of which 100 as Pilot in Command [PIC] if training is done under FAA Part 141; 250 hours of flight experience out of which 100 as Pilot in Command [PIC] if training is done under FAA Part 61.</p>
						<button class="view-more">View More</button>
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
				</article>
				<!--row 2-->
				<article class="grid-x grid-margin-x">
					<section class="cell large-7">
						<h1>Nearest Flight Courses</h1>
						<!--fancy table-->
						<table class="fancy-table upcoming">
							<thead>
								<tr>
									<th colspan="4"><a href="">Show All</a></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Aircraft Piper Cadet (VFR - 2 seater)</td>
									<td>Miami</td>
									<td><time>15.12.18</time></td>
									<td><a href="">Register Now</a></td>
								</tr>
								<tr>
									<td>Aircraft Piper Cadet (VFR - 2 seater)</td>
									<td>Los Angeles</td>
									<td><time>17.12.18</time></td>
									<td><a href="">Register Now</a></td>
								</tr>
								<tr>
									<td>Aircraft Piper Cadet (VFR - 2 seater)</td>
									<td>Miami</td>
									<td><time>21.12.18</time></td>
									<td><a href="">Register Now</a></td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="4"><a href="">Request an Individual Term</a></td>
								</tr>
							</tfoot>
						</table>
					</section>
					<!--aviation newsletter-->
					<form class="cell large-5 aviation-newsletter-form">
						<h1>Subscribe to Aviation News!</h1>
						<input type="email" placeholder="Your Email">
						<button type="submit" value="Subscribe Now">Subscribe Now</button>
					</form>
				</article>
				<!--row 3-->
				<article class="grid-x grid-margin-x">
					<!--image wrapper-->
					<section class="cell large-7 image-tag-box right">
						<div class="responsive-sprite" style="background-image: url(images/pilot.jpg)"></div>						
						<div>
							<p>price from</p>
							<p>&dollar;32,595</p>
						</div>						
					</section>
					<!--offest box-->
					<section class="cell large-5 offset-box right">
						<h1>PPL</h1>
						<h2>Private Pilot License</h2>
						<p>Private Pilot License is a qualification that permits to act without renumeration as PIC or co-pilot on airplanes in non-comercial operations.</p>
						<div class="flex-wrapper">
							<a class="button transparent big" href="">See details</a>
							<a class="button neutral big" href="">Apply now</a>
						</div>
					</section>
				</article>
				<!---row 4-->
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
				<article class="grid-x grid-margin-x">
					<section class="cell large-6">
						<h1>Course Entry Requirements</h1>
						<!--fancy list-->
						<ul class="fancy-list">
							<li>1. 18+ Years of Age</li>
							<li>Must be 18 years of age or older</li>
							<li>2. Must Hold <a href="">Class 2 Medical Certification</a></li>
							<li>Physical fitness requirement <a href="">Class 2 FAA Pilot Medical Certificate</a></li>
							<li>3. Fluent in English Language</li>
							<li>Must read, write, understand and speak English with proficiancy</li>
						</ul>
						<!--faq link-->
						<p class="faq-link">Find answers to your <a href=""><abbr title="Frequently Asked Questions">FAQ</abbr> (Frequently Asked Questions)</a></p>
					</section>
					<!--responsive sprite-->
					<section class="cell large-6"s>
						<div class="responsive-sprite" style="background-image:url(images/student.jpg);"></div>
					</section>
				</article>
			</div>
			<!--row 6-->
			<!--fade wrapper-->
			<div class="grid-container full background">
				<!--fade image-->
				<div class="full-width-gradient-image" style="background-image: url(images/mountains.jpg);"></div>
				<div class="grid-container">
					<!--fade info-->
					<article class="grid-x grid-margin-x">
						<section class="cell large-7">
							<p class="special-heading small">Flying Academy</p>
							<h1>Training Locations</h1>						
							<hr>
							<h2>Miami, Florida</h2>
							<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<button class="view-more">View More</button>
							<hr>
							<h2>Los Angeles, California</h2>
							<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<button class="view-more">View More</button>
						</section>					
					</article>
				</div>
			</div>
			<div class="grid-container">
				<!--row 7-->				
				<article>
					<section>
						<header class="text-center">
							<p class="special-heading small center">Flying Academy</p>
							<h1>CPL Training Curriculum</h1>
						</header>
						<!--fancy description list-->
						<dl class="grid-x grid-padding-x fancy-description-list">
							<!--term 1-->					
							<dt class="cell large-3">
								<h2>Ground<br>Training</h2>
							</dt>
							<!--description 1-->
							<dd class="cell large-9">
								<p>Theoretical preparation lays the foundation for practical flight training. During the Zero to CPL course, the trainee will complete theoretical courses for PPL(A), IR(A), CPL(A) and MEL (A). The curriculum for the program Zero to Commercial can be found under the PPL, IR, CPL, and ME sections.</p>
							</dd>
							<!--term 2-->
							<dt class="cell large-3">
								<h2>Flight<br>Training</h2>
							</dt>
							<!--description 2-->
							<dd class="cell large-9">
								<p>The flight training will start with the PPL(A), continues with IR(A) and with the CPL SEL and MEL add on.The curriculum for the program Zero to Commercial can be found under the PPL, IR, CPL, and ME sections.</p>
								<!--tab buttons-->
								<ul id="info-tabs" class="tabs" data-tabs>
									<li class="tabs-title is-active">
										<a href="#panel-1" aria-selected="true">Part 141</a>
									</li>
									<li class="tabs-title">
										<a href="#panel-2" data-tabs-target="panel-2" >Part 61</a>
									</li>
								</ul>
								<!--tab content-->
								<div class="tabs-content" data-tabs-content="info-tabs">
									<!--tab panel 1-->
									<div id="panel-1" class="tabs-panel is-active">
										<p>190 hours total time. Must have 120 hours of dual time including in the total. Must complete 55 hours of training with an instructor in which must include:</p>
										<ul class="simple-list">
											<li>10 hours under the hood; simulated instruments.</li>
											<li>One 2 hour cross-country that consists on more than 100 nm straight line distance during the day.</li>
											<li>One 2 hour cross-country that consists on more than 100 nm straight line distance during the night.</li>
											<li>10 hours of training in a SEL complex aircraft.</li>
											<li>3 hour of training 60 days prior to the checkride.</li>
										</ul>
										<p>Student must complete 10 hours solo in which must include:</p>
										<ul class="simple-list">
											<li>One cross-country with three landing points and one straight-line segment of 250 nm.</li>
											<li>5 hours of night VFR conditions with 10 takeoffs/landings which must be performed during pattern work.</li>
										</ul>
									</div>
									<!--tab panel 2-->
									<div id="panel-2" class="tabs-panel" >
										<p>250 hours total time which must include:</p>
										<ul class="simple-list">
											<li>100 hours of PIC time flight time which includes at least: 50 hours in cross-country flight of which at least must be in airplanes</li>
										</ul>
										<p>20 hours of training with instructor in which includes:</p>
										<ul class="simple-list">
											<li>10 hours under the hood; simulated instruments</li>
											<li>One 2 hour cross-country that consists more than 100 nm straight line distance during the day.</li>
											<li>One 2 hour cross-country that consists more than 100 nm straight line distance during the night.</li>
											<li>10 hours of training in a SEL complex aircraft.</li>
											<li>3 hour of training 60 days prior to the checkride.</li>
										</ul>
										<p>Student must complete 10 hours solo in which must include:</p>
										<ul class="simple-list">
											<li>One cross-country with landings at a minimum of three points and one segment of the flight must consist of a straight-line distance of at least 250 nm.</li>
											<li>5 hours of night VFR conditions with 10 takeoffs/landings which must be performed during pattern work.</li>
										</ul>
									</div>
								</div>
							</dd>
							<!--term 3-->
							<dt class="cell large-3">
								<h2>Theoretical<br>Examinations</h2>
							</dt>
							<!--description 3-->
							<dd class="cell large-9">
								<p>Towards the end of the course of PPL, IR and CPL you will have to demonstrate a sufficient level of theoretical knowledge at an FAA approved testing center in the form of a written test. To pass the written examinations you need to achieve a score of at least 70%,  which is still a passing score. This test must be done before the Checkride.</p>
							</dd>
							<!--term 4-->
							<dt class="cell large-3">
								<h2>Practical<br>Examinations</h2>
							</dt>
							<!--description 4-->
							<dd class="cell large-9">
								<p>The final aeronautical knowledge and practical test is the checkride. It will be taken at the end of the training of PPL, IR, CPL and ME  and consist of an oral and practical exam. The length of the Check Ride varies depending on the FAA examiner.</p>
							</dd>
						</dl>
					</section>
				<!--row 8-->
				</article>
				<article class="grid-x grid-margin-x">		
					<!--uni carousel-->
					<section class="cell large-6 owl-carousel owl-theme uni-carousel">
						<!--column 1-->
						<div class="item" style="background-image: url(images/0-atpl-with.jpg);">
						</div>
						<!--column 2-->
						<div class="item" style="background-image: url(images/0-atpl-with.jpg);">
						</div>
						<!--column 3-->
						<div class="item" style="background-image: url(images/0-atpl-with.jpg);">
						</div>
					</section>
					<!--fancy list check box-->
					<section class="cell large-6">
						<h1>Course Fees Cover the Following:</h1>
						<ul class="fancy-list check">
							<li>Flight instructor time for ground and practical training</li>
							<li>Airplane usage, including fuel</li>
							<li>Subsidized iPad Mini 4G + WiFi</li>
							<li>Rocket Route Flight Planning Services Account - Valued at &dollar;300/year</li>
						</ul>
						<a class="button dark big">Learn more about courses fees</a>
					</section>
				</article>
			</div>
			<?php include 'footer.php' ?>

		</div>
		<!--jquery-->
		<script src="jquery/jquery.min.js"></script>
		<!--foundation js-->
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
