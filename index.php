<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="msapplication-tap-highlight" content="no">
	<title>home</title>
	<!--font awesome cdn-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
	 crossorigin="anonymous">
	<!--normalize-->
	<link rel="stylesheet" href="normalize/normalize.css">

	<link rel="stylesheet" href="foundation/css/foundation.css">
	<link rel="stylesheet" href="foundation/css/app.css">
	<!--owl css-->
	<link rel="stylesheet" href="owl/css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl-theme.css">
	<!--css-->
	<link href="css/style.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="css/new-home.css">
	<link rel="stylesheet" href="css/video-modal.css">
	<link rel="stylesheet" href="css/aaron-global.css">
</head>

<body id="home">
	<div id="baseline-overlay"></div>
	<div id="column-overlay"></div>
	<!-- vide modal -->
	<div class="reveal large" id="video-modal" data-reveal aria-labelledby="video-modal" aria-hidden="true" role="dialog">
		<h2 id="video-modal">Time Building at Flying Academy</h2>
		<div class="responsive-embed widescreen">
			<iframe width="100%" height="600" src="https://www.youtube.com/embed/8832H4BPV1M?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media"
			 allowfullscreen></iframe>
		</div>
		<button class="close-button button" data-close aria-label="Close modal" type="button">&times;</button>
	</div>
	<div class="wrapper">
		<?php include 'header.php' ?>
		<div class="grid-container full">
			<!-- row 1 -->
			<!--jumbo carousel-->
			<section class="owl-carousel owl-theme jumbo-carousel tall" style="margin-bottom: 4.5rem;">
				<!--item 1-->
				<div class="item" style="background-image: url(images/plane-flying-over-mountains.jpg);">
					<!--info box-->
					<div class="info-box">
						<h1>Flying Academy</h1>
						<a href="" class="button transparent full big">Join Us Now</a>
					</div>
				</div>
				<!--item 2-->
				<div class="item" style="background-image: url(images/plane-flying-over-mountains.jpg);">
					<!--info box-->
					<div class="info-box">
						<h1>Flying Academy</h1>
						<a href="" class="button transparent full big">Join Us Now</a>
					</div>
				</div>
				<!--item 3-->
				<div class="item" style="background-image: url(images/plane-flying-over-mountains.jpg);">
					<!--info box-->
					<div class="info-box">
						<h1>Flying Academy</h1>
						<a href="" class="button transparent full big">Join Us Now</a>
					</div>
				</div>
			</section>
		</div>
		<!--row 2-->
		<div class="grid-container">
			<article class="grid-x grid-margin-x">
				<header class="cell text-center">
					<p class="special-heading">Flying Academy</p>
					<h1>Popular Courses</h1>
				</header>
				<div class="cell large-4 shaded-box inset-outline" style="background-image: url(images/easa-ppl-2.jpg);">
					<h1>EASA/FA PPL</h1>
					<p>Private Pilot License is a qualification that permits to act without remuneration as PIC or co-pilot on aeroplanes in
						non-commercial operations.</p>
					<a href="" class="button">Learn more</a>
				</div>
				<div class="cell large-4 shaded-box inset-outline" style="background-image: url(images/easa-ppl.jpg);">
					<h1>EASA 0-ATPL</h1>
					<p>The ATPL(A) license is the highest level of aircraft pilot certification, that permits to act as Pilot-In-Command (PIC)
						of an aircraft in an airline.</p>
					<p class="hide">This program is designed for students with little to no flying experience and that want to pursue a career in aviation
						according to EASA regulations.</p>
					<a href="" class="button">Learn more</a>
				</div>
				<div class="cell large-4 shaded-box inset-outline" style="background-image: url(images/faa-cpl.jpg);">
					<h1>FAA 0-CPL</h1>
					<p>The CPL license permits to act as Pilot-In-Command (PIC) and acquire compensation on an aircraft.</p>
					<p class="hide">This program is designed for students with little to no flying experience and that want to pursue a career in aviation
						according to FAA regulations.</p>
					<a href="" class="button">Learn more</a>
				</div>
				</section>
			</article>
			<article class="grid-x grid-margin-x">
				<header class="cell text-center">
					<p class="special-heading">Flying Academy</p>
					<h1>Courses and Events Calendar</h1>
				</header>
				<section class="cell large-8">
					<form class="flex-wrapper">
						<select>
							<option value="option1">United States (FAA)</option>
							<option value="option1">option2</option>
							<option value="option1">option3</option>
							<option value="option1">option4</option>
						</select>
						<input type="text" name="search" placeholder="Search">
					</form>
					<!--fancy table-->
					<table class="fancy-table events">
						<thead>
							<tr>
								<th>Event/Class</th>
								<th>Location</th>
								<th>Date</th>
								<th>Info</th>
							</tr>
						</thead>
						<tbody>
							<tr class="event-type-a">
								<td>Flying Academy Christmas Party</td>
								<td>Los Angeles, California</td>
								<td>
									<time>12.12.18</time>
								</td>
								<td>
									<button class="view-more" href="#">READ MORE</button>
								</td>
							</tr>
							<tr class="event-type-b">
								<td>Flying Academy Course 1</td>
								<td>Los Angeles, California</td>
								<td>
									<time>12.12.18</time>
								</td>
								<td>
									<button class="view-more" href="#">READ MORE</button>
								</td>
							</tr>
							<tr class="event-type-b">
								<td>Flying Academy Course 2</td>
								<td>Los Angeles, California</td>
								<td>
									<time>12.12.18</time>
								</td>
								<td>
									<button class="view-more" href="#">READ MORE</button>
								</td>
							</tr>
							<tr class="event-type-a">
								<td>Flying Academy New Years Party</td>
								<td>Los Angeles, California</td>
								<td>
									<time>12.12.18</time>
								</td>
								<td>
									<button class="view-more" href="#">READ MORE</button>
								</td>
							</tr>
						</tbody>
					</table>
				</section>
				<section class="cell large-4">
					<!--calendar events-->
					<table class="calendar events">
						<thead>
							<tr>
								<th colspan="7">
									<a class="previous" href="">&#9664;</a>
									<a class="next" href="">&#9654;</a>
									<p>December 2018</p>
								</th>
							</tr>
							<tr>
								<th>Mo</th>
								<th>Tu</th>
								<th>We</th>
								<th>Th</th>
								<th>Fr</th>
								<th>Sa</th>
								<th>Su</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="ghosted">26</td>
								<td class="ghosted">27</td>
								<td class="ghosted">28</td>
								<td class="ghosted">29</td>
								<td class="ghosted">30</td>
								<td class="ghosted">31</td>
								<td>1</td>
							</tr>
							<tr>
								<td>2</td>
								<td>3</td>
								<td>4</td>
								<td>5</td>
								<td>6</td>
								<td>7</td>
								<td>8</td>
							</tr>
							<tr>
								<td>9</td>
								<td class="event-type-a">10</td>
								<td>11</td>
								<td>12</td>
								<td>13</td>
								<td>14</td>
								<td>15</td>
							</tr>
							<tr>
								<td>16</td>
								<td>17</td>
								<td>18</td>
								<td>19</td>
								<td>20</td>
								<td class="event-type-b">21</td>
								<td>22</td>
							</tr>
							<tr>
								<td>23</td>
								<td>24</td>
								<td>25</td>
								<td>26</td>
								<td>27</td>
								<td>28</td>
								<td>29</td>
							</tr>
							<tr>
								<td>30</td>
								<td class="ghosted">1</td>
								<td class="ghosted">2</td>
								<td class="ghosted">3</td>
								<td class="ghosted">4</td>
								<td class="ghosted">5</td>
								<td class="ghosted">6</td>
							</tr>
						</tbody>
					</table>
					<div class="legend events">
						<p>Event</p>
						<p>Course Start</p>
					</div>
					<p class="asterisk">Request an individual term</p>
				</section>
			</article>
			<!-- row 3-->
		</div>
		<div class="grid-container full">
			<div class="grid-container">
				<!--row 4 -->
				<article class="grid-x grid-margin-x">
					<header class="cell text-center">
						<p class="special-heading">Flying Academy</p>
						<h1>Our Courses</h1>
					</header>
					<section class="cell large-6">
						<ul class="tabs" data-tabs id="example-tabs">
							<li class="tabs-title is-active">
								<a href="#panel-1" aria-selected="true">FAA - American way</a>
								<!-- <small>American Way</small> -->
							</li>
							<li class="tabs-title">
								<a href="#panel-2" data-tabs-target="panel-2">
									<span>EASA - European way</span>
								</a>
								<!-- <small>European Way</small> -->
							</li>
						</ul>
						<div class="tabs-content" data-tabs-content="example-tabs">
							<div class="tabs-panel" id="panel-1">
								<section>
									<h1>PPL</h1>
									<p>Private Pilot License is a qualification that permits to act without remuneration as PIC or co-pilot on airplanes
										in non-commercial operations.</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>0-CPL</h1>
									<p>The CPL license permits to act as Pilot-In-Command (PIC) and acquire compensation on an aircraft. This program is
										designed for students with little to no flying experience and that want to pursue a career in aviation according
										to FAA regulations.</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>CPL</h1>
									<p>The Commercial Pilot Certificate is a qualification that permits the holder to act as the pilot of an aircraft for
										remuneration.
									</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>IR</h1>
									<p>Instrument Rating refers to the qualifications that is required in order to fly according to Instrument Flight Rules
										(IFR).
									</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>MEP</h1>
									<p>The Multi Engine Piston rating extends the privileges of a Commercial Pilot Licence (CPL) and allows you to fly
										aircraft with more than one engine.</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>CFI, CFII</h1>
									<p>The Certified Flight Instructor license allows individuals to provide training to pilots while the Certified Flight
										Instrument Instructor rating allows holders to provide IR(A) training to pilots.</p>
									<a class="" href="#">Read more</a>
								</section>
							</div>
							<div class="tabs-panel is-active" id="panel-2">
								<section>
									<h1>PPL</h1>
									<p>Private Pilot License is a qualification that permits to act without remuneration as PIC or co-pilot on aeroplanes
										in non-commercial operations.</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>ATPL Integrated</h1>
									<p>During the Integrated ATPL(A), you will become a Commercial Pilot, from no flight experience to holding an EASA
										Multi-Engine Instrument Rating Commercial Pilot License with ATPL frozen.</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>0-ATPL</h1>
									<p>The ATPL(A) license is the highest level of aircraft pilot certification, that permits to act as Pilot-In-Command
										(PIC) of an aircraft in an airline. This program is designed for students with little to no flying experience and
										that want to pursue a career in aviation according to EASA regulations.</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>0-ATPL with US experience</h1>
									<p>The ATPL(A) license is the highest level of aircraft pilot certification, that permits to act as Pilot-In-Command
										(PIC) of an aircraft in an airline. The course “0-ATPL with US experience” guides the students through the process
										of getting their Private Pilot License in the US all the way to the ATPL level.</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>ATPL theory</h1>
									<p>During the course an applicant must demonstrate a level of knowledge appropriate to the privileges of the holder
										of a ATPL(A) in accordance with the requirements in Part – FCL.</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>IR</h1>
									<p>Instrument Rating refers to the qualifications that is required in order to fly according to Instrument Flight Rules
										(IFR).
									</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>MEP</h1>
									<p>The Multi Engine Piston rating extends the privileges of a Private Pilot’s Licence (PPL) or Commercial Pilot’s Licence
										(CPL) and allows you to pilot aircraft with more than one engine.</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>NR</h1>
									<p>The qualification allows pilots to fly during night time in Visual Meteorological Conditions (VMC)</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>MCC</h1>
									<p>Multi Crew Co-Operation course is essential to have completed in order to fly as an airline crew member in a Multi
										Pilot Aircraft (MPA).</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>JOC</h1>
									<p>The Jet Orientation Course or Jet Familiarization Course is an advance training dedicated for future Airline pilots
										with no jet handling experience.</p>
									<a class="" href="#">Read more</a>
								</section>
								<section>
									<h1>FI, IRI</h1>
									<p>The Flight Instructor license allows individuals to provide training to pilots while the Instrument Rating Instructor
										license allows holders to provide IR(A) training to pilots.</p>
									<a class="" href="#">Read more</a>
								</section>
							</div>
						</div>
					</section>
					<section class="cell large-6">
						<div class="responsive-sprite" style="background-image: url(images/pilot-students.jpg);"></div>
					</section>
				</article>
			</div>
		</div>
		<div class="grid-container">
			<!--row 5-->
				<article class="grid-x grid-margin-x">
					<header class="cell text-center">
						<p class="special-heading">Flying Academy</p>
						<h1>Campus Locations</h1>
					</header>
					<div class="cell world-map">
						<img class="world-map-image" src="images/world-map.jpg" alt="world map">
						<section id="los-angeles" class="place">
							<a class="pin">Los Angeles, CA, United States</a>						
							<div class="information" style="background-image: url(images/faa-flying-license.jpg);">
								<h4>Los Angeles</h4>
								<p>Lorem ipsum dolor sit amet, condimentum mi magna, nam risus odio vestibulum. Dui bibendum nec sed at quam arcu, fringilla nunc adipiscing vel tellus ut erat.</p>
								<a class="button transparent" href="">Learn More</a>
							</div>
						</section>
						<section id="miami" class="place">
							<a class="pin">Miami, FL, United States</a>						
							<div class="information" style="background-image: url(images/flight-training-courses-miami.jpg);">
								<h4>Miami, Florida</h4>
								<p>Lorem ipsum dolor sit amet, condimentum mi magna, nam risus odio vestibulum. Dui bibendum nec sed at quam arcu, fringilla nunc adipiscing vel tellus ut erat.</p>
								<a class="button transparent" href="">Learn More</a>
							</div>
						</section>			
						<section id="prague" class="place">
							<a class="pin">Prague, Czech Republic</a>						
							<div class="information" style="background-image: url(images/easa-flying-license.jpg);">
								<h4>Prague</h4>
								<p>Lorem ipsum dolor sit amet, condimentum mi magna, nam risus odio vestibulum. Dui bibendum nec sed at quam arcu, fringilla nunc adipiscing vel tellus ut erat.</p>
								<a class="button transparent" href="">Learn More</a>
							</div>
						</section>
						<section id="brno" class="place">
							<a class="pin">Brno, Czech Republic</a>						
							<div class="information" style="background-image: url(images/flight-training-courses-brno.jpg);">
								<h4>Brno</h4>
								<p>Lorem ipsum dolor sit amet, condimentum mi magna, nam risus odio vestibulum. Dui bibendum nec sed at quam arcu, fringilla nunc adipiscing vel tellus ut erat.</p>
								<a class="button transparent" href="">Learn More</a>
							</div>
						</section>
						<section id="gurugram" class="place">
							<a class="pin">Gurugram, Delhi NRC, India</a>						
							<div class="information" style="background-image: url(images/gurugram-india-3.png);">
								<h4>Gurugram</h4>
								<p>Lorem ipsum dolor sit amet, condimentum mi magna, nam risus odio vestibulum. Dui bibendum nec sed at quam arcu, fringilla nunc adipiscing vel tellus ut erat.</p>
								<a class="button transparent" href="">Learn More</a>
							</div>
						</section>						
					</div>
				</article>
			</div>
			<!--row 6-->
			<div class="grid-container full">
				<article class="grid-container">
					<div class="grid-x grid-margin-x">
						<!-- row 6 / how to become a pilot -->
						<header class="cell text-center">
							<p class="special-heading">flying academy</p>
							<h1>How to Become a Pilot</h1>
						</header>
						<div class="cell large-4 shaded-box inset-outline" style="background-image: url(images/faa-courses.jpg);">
							<h1>Commercial or Private Pilot</h1>
							<p>Spread your wings by becoming a private pilot with the option of adding a commercial certificate.</p>
							<a href="" class="button">Learn more</a>
						</div>
						<div class="cell large-4 shaded-box inset-outline" style="background: url(images/usa-eu-flags.jpg) no-repeat center;">
							<h1>United States or Europe</h1>
							<p>You can join our flight school in our bases in Europe as well as in the United States.</p>
							<a href="" class="button">Learn more</a>
						</div>
						<div class="cell large-4 shaded-box inset-outline" style="background-image: url(images/miami-brno.jpg);">
							<h1>FAA or EASA</h1>
							<p>Under which aviation authority should you study for your license?</p>
							<a href="" class="button">Learn more</a>
						</div>
					</div>
				</article>
			</div>
			<div class="grid-container">
				<!--row 7-->
				<article class="grid-x">
					<!--video box-->
					<section class="cell large-6 video-box" data-open="video-modal">
						<dir class="responsive-sprite" style="background-image: url(images/pilot.jpg)"></dir>
					</section>
					<!--video summary box-->
					<section class="cell large-6 video-summary-box">
						<p class="special-heading small">Flying Academy</p>
						<h1>Our Student's Experiences</h1>
						<p>Flight training should be life time experience.</p>
						<a class="button light" href="/fa-new/blog.php">View more at our Blog</a>
					</section>
				</article>
				<!--row 8-->
				<article id="easa-flight-courses" class="grid-x grid-margin-x info-banner">
					<header class="cell text-center">
						<p class="special-heading">flying academy</p>
						<h1>Our Fleet</h1>
					</header>
					<!--big carousel-->
					<section class="cell owl-carousel owl-theme big-carousel tall">
						<!--column 1-->
						<div class="item" style="background-image: url(images/fleet1.jpg);"></div>
						<!--column 2-->
						<div class="item" style="background-image: url(images/fleet2.jpg);"></div>
						<!--column 3-->
						<div class="item" style="background-image: url(images/fleet3.jpg);"></div>
						<!--column 3-->
						<div class="item" style="background-image: url(images/fleet4.jpg);"></div>
					</section>
				</article>
				<!--row 9-->
				<!--colossal form-->
				<div class="colossal-form double-outline">
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
			<?php include 'footer.php' ?>
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
			<script>
				$(document).ready(function () {
					$('.jumbo-carousel').owlCarousel({
						dots: true,
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
			<script>
				$(document).ready(function () {
					$('.big-carousel').owlCarousel({
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