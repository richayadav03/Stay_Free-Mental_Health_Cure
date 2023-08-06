<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stay Free</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link href="csstest.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>
    body{
        background: #F5D2D3;
        margin: 0; /* Add this to remove default body margin */
    }
   
    .carousel-container {
        position: relative;
        top: 50px; 
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; 
    }
    .carousel {
        width: 100%;
        max-width: 1080px; 
    }

    .footer{
        background: #dfccf1;
        color: #9b59b6;
        font-size: 16px;
        padding: 20px 0; /* Correct padding declaration */
        position: relative;
        top: 150px;
        text-align: center; /* Add this to center align the footer content */
    }
    .footer p{
        color: #8a8a8a;
    }
    .footer h3{
        color: #8a8a8a;
        margin-bottom: 20px;
    }
    .footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
        min-width: 250px;
        margin-bottom: 10px;
    }
    .footer-col-1{
        flex-basis: 30%;
    }
    .footer-col-2{
        flex: 1;
        text-align: center;
    }
    .footer-col-2 img{
        width: 100px;
        margin-bottom: 20px;
    }
    .footer-col-3, .footer-col-4{
        flex-basis: 12%;
        text-align: center;
    }

    ul{
        list-style-type: none;
    }
    .app-logo{
        margin-top: 20px;
    }
    .app-logo img{
        width: 140px;
    }
    .footer hr{
        border: none;
        background: #dfccf1;
        height: 1px;
        margin: 20px 0;
    }
    .copyright{
        font-size: 14px; /* Add font size value */
    }

    .menu-icon{
        width: 28px;
        margin-left: 20px;
        display: none;
    }
	body {
        background: linear-gradient(to left, #F5D2D3, #F5D2D3);
        min-height: 40vh;
        margin: 0; /* Add this to remove default body margin */
    }

    .width-auto {
        width: auto;
    }

    .text-lg {
        font-size: 2rem;
    }

    .carousel-indicators li {
        border: none;
        background: #ccc;
    }

    .carousel-indicators li.active {
        background: #28a745;
    }
</style>
<body>
    <?php require 'partials/_nav.php'; ?>
    <div class="carousel-container">
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
            <div class="carousel-item active">
    <img src="stayfree.png" class="d-block w-100" style="width: 150px; height:170px object-fit: contain;" alt="...">
</div>
                <div class="carousel-item">
                    <a href="#">    <img src="freeport.png" class="d-block w-100" alt="..."></a>
                </div>
                <div class="carousel-item">
                    <a href="#"></a> <img src="p2.png" class="d-block w-100" alt="..."></a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
	
	<div class="container">
		<b><h1><center>Reviews</center></h1></b>
		<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleSlidesOnly">
			
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-lg-4">
							<div class="card">
								<div class="box front">
									<img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlqTeRgEP-wcvEXjt8Lb9ctRLir98JndOHSRusfwahNLAV9U40emRr_hhJr5m1ErzYSSY&usqp=CAU">
									<h2>Jesicca Doe</h2>
									
									<p class="socials">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-twitter"></i>
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-youtube"></i>
									</p>
								</div>
								<div class="box back">
									<span class="fa fa-quote-left"></span>
									<p>
										StayFree from Stress provided a life-changing experience with its user-friendly interface, secure database, and seamless video conferencing.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card">
								<div class="box front">
									<img alt="" src="https://www.petalrepublic.com/wp-content/uploads/2021/07/Dandelion-Flower-Symbolism-Uses-and-Benefits.jpeg">
									<h2>Claire Chedd</h2>
									
									<p class="socials">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-twitter"></i>
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-youtube"></i>
									</p>
								</div>
								<div class="box back">
									<span class="fa fa-quote-left"></span>
									<p>
										StayFree from Stress revolutionized my mental health support with flexible plans, safe data storage, and immersive video sessions.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card">
								<div class="box front">
									<img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSR7XZDfMgmskBdjQ_8c0ykYwGbpG7kbZD5ig&usqp=CAU">
									<h2>Maria Lopez</h2>
									
									<p class="socials">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-twitter"></i>
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-youtube"></i>
									</p>
								</div>
								<div class="box back">
									<span class="fa fa-quote-left"></span>
									<p>
										StayFree from Stress made therapy convenient and accessible through its user-friendly interface, secure database, and top-notch video conferencing.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-lg-4">
							<div class="card">
								<div class="box front">
									<img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDcekkoRpLtmTBMYseuaPVkaKNNWTnpkZrdg&usqp=CAU">
									<h2>Jesicca Doe</h2>
									
									<p class="socials">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-twitter"></i>
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-youtube"></i>
									</p>
								</div>
								<div class="box back">
									<span class="fa fa-quote-left"></span>
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores soluta quidem dolorem debitis. Minima, optio illum magni exercitationem eum laborum! Incidunt sequi repellat vero.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card">
								<div class="box front">
									<img alt="" src="https://images.unsplash.com/photo-1588139094921-01da2d0bc337?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8ZGFuZGVsaW9ufGVufDB8fDB8fHww&w=1000&q=80">
									<h2>Claire Chedd</h2>
									
									<p class="socials">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-twitter"></i>
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-youtube"></i>
									</p>
								</div>
								<div class="box back">
									<span class="fa fa-quote-left"></span>
									<p>
										StayFree from Stress provided a supportive community, responsive customer service, and effective tools for tracking progress, making my therapy experience truly empowering.									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="box front">
									<img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtJjU0AsVdbdVlTySIZOHDmO33Dg1kgwJccw&usqp=CAU">
									<h2>Mary Joe</h2>
									
									<p class="socials">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-twitter"></i>
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-youtube"></i>
									</p>
								</div>
								<div class="box back">
									<span class="fa fa-quote-left"></span>
									<p>
										StayFree from Stress transformed my life with its compassionate therapists, seamless payment process, and seamless integration of notes, allowing me to focus on my mental well-being.									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-lg-4">
							<div class="card">
								<div class="box front">
									<img alt="" src="https://d3mvlb3hz2g78.cloudfront.net/wp-content/uploads/2016/05/thumb_720_450_Dandelion_Feature_xl_10556655_(Custom).jpg">
									<h2>Jeremiah Kleren</h2>
									
									<p class="socials">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-twitter"></i>
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-youtube"></i>
									</p>
								</div>
								<div class="box back">
									<span class="fa fa-quote-left"></span>
									<p>
										StayFree from Stress offered a calming ambiance, efficient payment module, and personalized therapy plans, enhancing my mental well-being journey.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card">
								<div class="box front">
									<img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKDrYm4J2CPCdMvC5iQaVLhDtUauwSwK-HAW3z8YJXSARqsrNey1AzFGFowizUEr9PEcg&usqp=CAU">
									<h2>Sarah Manurios</h2>
									
									<p class="socials">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-twitter"></i>
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-youtube"></i>
									</p>
								</div>
								<div class="box back">
									<span class="fa fa-quote-left"></span>
									<p>
										StayFree from Stress exceeded my expectations with its modern design, confidential data storage, and easy-to-use platform for connecting with therapists.									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card">
								<div class="box front">
									<img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg6pD-5nsUxOz1xgCzSDVNDOM6fLb65CXv5A&usqp=CAU">
									<h2>chloe Dargent</h2>
									
									<p class="socials">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-twitter"></i>
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-youtube"></i>
									</p>
								</div>
								<div class="box back">
									<span class="fa fa-quote-left"></span>
									<p>
										StayFree from Stress made therapy stress-free and convenient with its secure database, quality video sessions, and options for exclusive and standard plans.									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			


		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">
	</script> 
	<script>
	</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

	<section class="py-5 text-center">
    <div class="container py-4 text-white">
        <header>
           
        </header>
    </div>
</section>
<section class="pb-5">
    <div class="container2">
        <div class="row">
            <div class="col-lg-10 col-xl-8 mx-auto">
                <div class="p-5 bg-white shadow rounded">
                    <!-- Bootstrap carousel-->
                    <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
                        <!-- Bootstrap carousel indicators [nav] -->
                        <ol class="carousel-indicators mb-0">
                            <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner px-5 pb-4">
                            <!-- Carousel slide-->
                            <div class="carousel-item active">
                                <div class="media"><img class="rounded-circle img-thumbnail" src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-1_ffutqr.jpg" alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>"Choose peace over chaos, calmness over turmoil, and create a stress-free world with stayfree within yourself.".</p>
                                            <footer class="blockquote-footer">Our talented expert from
                                                <cite title="Source Title">Stay Free</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="media"><img class="rounded-circle img-thumbnail" src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-3_hdxocq.jpg" alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <footer class="blockquote-footer">Our talented expert from
                                                <cite title="Source Title">Stay Free</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="media"><img class="rounded-circle img-thumbnail" src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-2_gibm2s.jpg" alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>"Choose peace over chaos, calmness over turmoil, and create a stress-free world within yourself."</p>
                                            <footer class="blockquote-footer">Our talented expert from
                                                <cite title="Source Title">Stay Free</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <a class="carousel-control-next width-auto" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="fa fa-angle-right text-dark text-lg"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <p>Contact: +123 454-889-543</p>
                    <p>Email: stay_free@gmail.com</p><br>
                    <h3>Download Our App</h3>
                     <!-- change -->
                    <div class="app-logo">
                        <a href="http://play.google.com" target="_blank"><img src="play-store.png" alt="Google Play Store"></a>
                        <a href="http://www.apple.com" target="_blank"><img src="app-store.png" alt="Apple App Store"></a>
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="logo.jpg">
                    <!-- change -->
                    <p>Stay free, break the chains, and set your soul free. </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4" >
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                        <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
                        <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
                        <li><a href="https://www.youtube.com/" target="_blank">YouTube</a></li>
                    </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">&copy; 2023 Stay Free. All rights reserved.</p>
    </div>
    </div>
</body>
</html>
