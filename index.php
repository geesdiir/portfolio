
<?php include("db/db.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>My Portfolio</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/superslides.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/contact.css">
	<!-- All Fonts  -->
	<!--font-awesome-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--//font-awesome-css-->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!--//online-fonts -->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<section>
		<div class="container">
			
		</div>
			<nav id="navigation" class="navbar navbar-expand-lg fixed-top">
				<div class="container">
					<a class="navbar-brand" href="index.php">Gaagaale Technology</a>
			
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				
					<div class="collapse navbar-collapse " id="navbarNav">
						<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#skills">Skills</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#stats">Status</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#portfolio">Projects</a>
						</li>
						</ul>
					</div>

				</div>
					
			  
				  </nav>
	</section>

	<div class="loader">
		<div class="inner"></div>
	</div>

	<div id="slides">

		<div class="overlay"></div>

		<div class="slides-container">
		    <img src="img/slide1.jpg" alt="">
		    <img src="img/slide2.jpeg" alt="">
		    <img src="img/slide3.jpeg" alt="">
		</div>
			

		<div class="titleMessage">
			<div class="heading">
					
				<p class="main">Gaagaale </p>
				<p class="sub typed"></p>
			</div>
			
		</div>
		
		


		<nav class="slides-navigation">
		    <a href="#" class="next"></a>
		    <a href="#" class="prev"></a>
		</nav>


	</div>


	<!-- Catting of nafbar -->



<!-- About section -->

	<div id="about" class="section">

		<div class="container">

			<div class="row">

				<div class="col-md-5">
					<img class="aboutImage rounded-circle border border-danger" src="img/me.jpg">
				</div>

				<div class="col-md-7">

                    
					<h4 >My name is Mohamud Said</h4>

					<p class="">Hi there! I'm Mohamud Said from Sanaag, Somalia. I currently work as a Software Engineer at freelancer. I have two years experience creating software, desktop apps and websites for both myself, and for clients. I have ability to write difference  programming languages with different purpose such as  PHP,  C# and javascript however still iam a student for learning new changes that every Month/Year/Week upcoming.</p>
					<p>I'm also Certified in Cisco technology specially Routing and Switching (CCNA r&s) at the same time I have two years experience of  configuring data centralization by using  Microsoft Windows Server  </p>
					<p>I graduated from university in Leeds, Bangladesh with first class honours (3.65 GPA) in Master of Software Engineering  and also spent a four years studying Software Engineering at Daffodil International University  in Dhaka, BD. </p>

				</div>

			</div>

		</div>

	</div>

<!-- Section Skills -->

	<div id="skills" class="skillsSection section">

		<div class="container">

			<div class="row">

				<div class="col-md-12 text-center">
					<h2>TECHNICAL SKILLS</h2>
					<p>My proficiency in each skill (drag to scroll)</p>
					<hr>
				</div>


				<div class="owl-carousel owl-theme">
				    
				    <div class="skill">
				    	<span class="chart" data-percent="83">
				    		<span class="percent">83</span>
				    		<canvas height="152" width="152"></canvas>
				    	</span>
				    	<h4>PHP</h4>
				    	<p>Used of most web based projects</p>
				    </div>

				    <div class="skill">
				    	<span class="chart" data-percent="79">
				    		<span class="percent">79</span>
				    		<canvas height="152" width="152"></canvas>
				    	</span>
				    	<h4>C#</h4>
				    	<p>Used for Desktop applications</p>
				    </div>

				    <div class="skill">
				    	<span class="chart" data-percent="60">
				    		<span class="percent">60</span>
				    		<canvas height="152" width="152"></canvas>
				    	</span>
				    	<h4>Nodejs</h4>
				    	<p>A new skill I am learning</p>
				    </div>


				    <div class="skill">
				    	<span class="chart" data-percent="71">
				    		<span class="percent">71</span>
				    		<canvas height="152" width="152"></canvas>
				    	</span>
				    	<h4>React</h4>
				    	<p>Used for web based projects</p>
				    </div>



				    <div class="skill">
				    	<span class="chart" data-percent="87">
				    		<span class="percent">87</span>
				    		<canvas height="152" width="152"></canvas>
				    	</span>
				    	<h4>MySQL</h4>
				    	<p>Used for web based projects / Php connection</p>
					</div>
					
					<div class="skill">
							<span class="chart" data-percent="75">
								<span class="percent">80</span>
								<canvas height="152" width="152"></canvas>
							</span>
							<h4>MSSQL</h4>
							<p>Used of Desktop apps</p>
						</div>


				</div>

				

			</div>

		</div>

	</div>



	<div id="stats" class="statsSection section">

		<div class="container">

			<div class="row">

				
				<div class="col-md-3 col-sm-6">
					<div class="squareItem">
						<div class="squareInnerContainer">
							<div class="squareIcon">
								<i class="fa fa-clock"></i>
							</div>
							<div class="squareContent">
                                <h2 class="counter">3</h2>
                                <h3>Years Experience</h3>
                            </div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="squareItem">
						<div class="squareInnerContainer">
							<div class="squareIcon">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="squareContent">
                                <h2 class="counter">20</h2>
                                <h3>Clients</h3>
                            </div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="squareItem">
						<div class="squareInnerContainer">
							<div class="squareIcon">
								<i class="fa fa-bolt"></i>
							</div>
							<div class="squareContent">
                                <h2 class="counter">7</h2>
                                <h3>Desktop Apps</h3>
                            </div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="squareItem">
						<div class="squareInnerContainer">
							<div class="squareIcon">
								<i class="fa fa-cloud"></i>
							</div>
							<div class="squareContent">
                                <h2 class="counter">4</h2>
                                <h3>Websites Made</h3>
                            </div>
						</div>
					</div>
				</div>


			</div>

		</div>

	</div>
	<!--  start Contact Section -->

	<div id="contact" class="contactSection section">

			<section class="main-w3l">
					<div class="w3ls-top">
						<div class="element-img">
							<img src="img/visa.jpg" alt="image" class="img-responsive"/>
						</div>
						<div class="top-text">
							<h2>Mohamud</h2>
							<h5>The Full Stuck Developer</h5>
						</div>
						<div class="w3ls-ma"> 
							<p class="ph-icon">+252907715300</p>
							<p><a href="https://gmail.com">badhan2099@gmail.com</a></p>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="agile-form">
					<!-- Database section and connecting on the servers -->
					<?php
					// -----------------------------------------------------------------------
					if(isset($_POST['submit'])){

					 $first_name = $_POST['first_name'];
                      $last_name = $_POST['last_name'];
                      $email = $_POST['email'];
                      $message = $_POST['message'];
                       $query = "INSERT INTO data(first_name, last_name, email, message) ";
					 $query .="VALUES('$first_name', 'last_name', '$email', '$message') ";
					 $result = mysqli_query($connection, $query);


					}
					
					   

					?>
						<form action="index.php" method="post">
						  <div class="agile_w3l_inner_form">
								<div class="ft-name">
									<input type="text" name="first_name" placeholder="First Name" required="required">
								</div>
								<div class="lt-name">
								<input type="text" name="last_name" placeholder="Last Name" required="required">
								</div>
								<div class="clear"> </div>
								<div class="e-name">
								<input type="email" name="email" placeholder="Email Address" required="required">	
								</div>
								<textarea name="message" placeholder="Message" required=""></textarea>
							 </div>
							 <div class="w3ls-bottom">
						
							<input type="submit" value="SEND MESSAGE" name="submit">
						
							 </div>
							 
						</form>
					</div>
					
				</section>
	

	

	</div>

	<!-- end Contact section -->



	<div id="portfolio" class="section">

		<div class="container">

			<div class="row">

				

				<div class="filter">

					<ul id="filters">
						<!-- all Projects -->
						<div class="row">
							<div class="col-md-3">
								<div class="card">
									    <a href="">
									<img src="img/portfolio/image4.PNG" alt="" width="300" height="150">
								       </a>
								</div>
							</div>
							<div class="col-md-3">
								 <div class="card">
									 <a href="">
									<img src="img/portfolio/image3.PNG" alt="" width="300" height="150">
								       </a>
								 </div>
								</div>
								<div class="col-md-3">
									
								 <div class="card">
										<a href="">
									<img src="img/portfolio/image6.PNG" alt="" width="300" height="150">
								      </a>	
								 </div>	
									
						</div>

						<div class="col-md-3">
								<div class="card">
									    <a href="">
								   <img src="img/portfolio/image5.PNG" alt="" width="300" height="150">
								   
								     </a>	   
								</div>
								   
					   </div>


					</div>

					
					</ul>

				</div>


				<div class="itemsContainer">


						<li class="me col-xs-6 col-sm-4 col-md-3 col-lg-3">

				</div>

			</div>

		</div>

	</div>


	<div class="copyrightSection">

		<div class="col-md-12 text-center">
			<p>&copy; Copyright Gaagaale 2019</p>
		</div>

	</div>








	<script src="js/countUp.js"></script>
	<script src="js/countUp-jquery.js"></script>
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/jquery.easypiechart.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/typed.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://unpkg.com/isotope-layout@3.0.5/dist/isotope.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

	<script src="js/script.js"></script>

</body>
</html>