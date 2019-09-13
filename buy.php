<?php
    if(isset($_GET['movieID'])){
        $db = new mysqli('localhost', 'root', '', 'instamovies');
        $movieID = mysqli_real_escape_string($db, $_GET['movieID']);
        $select_movie = "SELECT * FROM tbl_movies WHERE movie_id='$movieID'";
        $result=mysqli_query($db,$select_movie);
        $row = mysqli_fetch_array($result);
    }
	
	
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		
		<!--Font Awesome CSS-->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		
		<!--Glyphicons CSS-->
		<link rel="stylesheet" type="text/css" href="css/glyphicon.css">

		<!--JQuery-UI CSS-->
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

		<!--Owl Carousel CSS-->
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
		
		<!--Custom Style CSS-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/movies_slider.css">

		<!--Favicon Image-->
		<link rel="shortcut icon" type="image/png" href="images/icon.png">
		
		<title>InstaMovies</title>

	</head>

	
  <body id="itemid-7">

	<!--Navbar Code - Start-->
	<div class="header_wrapper">    
		<div class="main_menu_wrapper">
			<div class="navbar-box fixed-top" id='nav'></div>
			<nav class="navbar navbar-expand-md navbar-dark bg-dark bg-transparent fixed-top" role="navigation">
				<div class="container">
					<div class="row">
						<div class="col-md-1">
							<div class="navbar-brand">
								<a href=""> <img src="images/eaplogo.png"></a>
							</div>
						</div>
					
						<div class="col-md-11">
							<div class="collapse navbar-collapse" id="navbarNavDropdown">
								<ul class="navbar-nav ml-auto">
									<li class="item-1"><a class="nav-link" href="index.html">HOME</a></li>
									<li class="item-2"><a class="nav-link" href="movies.html">MOVIES</a></li>
									<li class="item-3"><a class="nav-link" href="rates_and_showtimes.html">RATES & SHOW TIMES<span class="sr-only">(current)</span></a></li>
									<li class="item-4"><a class="nav-link" href="theatres.html">THEATRES</a></li>
									<li class="item-5"><a class="nav-link" href="news.html">NEWS</a></li>
									<li class="item-6"><a class="nav-link" href="offers.html">OFFERS</a></li>
									<li class="item-7 active"><a class="nav-link" href="buytickets.html">BUY TICKETS</a></li>
									<li class="item-8"><a class="nav-link" href="contact_us.html">CONTACT US</a></li>
								</ul>
								<form class="form-inline">
									<button class="btn btn-primary" type="button">LOGIN</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</nav>
        </div>
    </div>
    <!--Navbar Code - End-->


    <!--Buy Tickets Body - Start-->
    <div class="buy-tickets">
        <div class="movie_banner" id="movie_banner">
            <img src="images/banner.jpg">
        </div>
        
        <div class="movie-name">
            <div class="container">
                <div class="row">
                    <div class="movie_selection_list col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form>
                            <div class="form-group" id="now-showing-list">
                                <select class="form-control form-control-lg" id="selectMovie" onChange="SelectRedirect();">
                                <option value="">Select Movie</option>
                                <?php include 'assets/rates_and_showtimes.inc.php'?> 
                                    <?php
                                    echo $options_movie;
									
                                    ?>

                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="show-date" id="show_date">
            <div class="container">
                <div class="row">
                    <div class="date_selection col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <form>
                            <div class="form-group" >
                                <div class="input-group">
                                    <input type='text' class="form-control" id='datepicker' readonly="true">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="show-time-table">
            <div class="container">
                <div class="row">
                    <table class="table table-responsive">
                        <tbody>
                            <tr class="theater-row">
                                <td class="theater">
                                    <div class="theater-name">Theater</div>
                                    <div class="theater-city">City</div>
                                </td>

                                <td class="theater-showtime">
                                    <ul>
                                        <li class="one-theater-showing">

                                        </li>
                                    </ul>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!--Buy Tickets Body - End-->
        
        
        
	
	<!--Footer-->
	<footer class="site-footer">
		<div class="container">
			<div class="row">
			  <div class="col-md-5 col-sm-12">
			    <div class="footer_left">
				  <img src="images/footer_logo.png" class="img-responsive" alt="InstaMovies Logo">
				  <p> © 2018 InstaMovies. All Rights Reserved. Site by <span class="company_name">GenetriX</span></p>
				</div>
			  </div>
			</div>
			<div class="bottom-footer">
					<ul class="footer-nav">
						<li class="footer-item-1"><a href="index.html">Home</a></li>
						<li class="footer-item-2"><a href="privacy_policy.html">Privacy Policy</a></li>
						<li class="footer-item-3"><a href="terms_of_use.html">Terms of Use</a></li>
						<li class="footer-item-4"><a href="disclaimer.html">Disclaimer</a></li>
						<li class="footer-item-5"><a href="about_us.html">About Us</a></li>
					</ul>
				
					<ul class="footer-nav">
						<li class="footer-item-6"><a href="login.html">Login</a></li>
						<li class="footer-item-7"><a href="register.html">Register</a></li>
						<li class="footer-item-8"><a href="advertise.html">Advertice</a></li>
						<li class="footer-item-9"><a href="career.html">Career</a></li>
						<li class="footer-item-10"><a href="contact_us.html">Contact Us</a></li>
					</ul>
			</div>
		</div>
	</footer>
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js,then Owl_Carousel, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.js"></script>

	<!--Navbar Script-->
		<script>
			var nav = document.getElementById('nav');
			window.onscroll = function(){
				if (window.pageYOffset > 50){
					nav.style.background = "#000";
				}
				else{
					nav.style.background = "transparent";
				}
			}
		</script>

    
        <script>
            function SelectRedirect(){
                var $valueid=document.getElementById('selectMovie').value;
                window.location="buy_tickets.php?movieID="+$valueid;
            }

            $("#selectMovie > [value=" + "<?php echo $movieID ?>" + "]").attr("selected", "true");
        </script>
	

  </body>
</html>