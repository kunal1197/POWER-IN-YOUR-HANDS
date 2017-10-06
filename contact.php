<?php

		session_start();

		if(isset($_POST['logout'])) {

        $_SESSION['name'] = '';

        $_SESSION['vid'] = '';

        $_SESSION['mobile'] = '';

        echo "<script> location.href='index.php' </script>";

    }

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CONTACT US</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!--jQuery 1.12.4-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <style type="text/css">

        .navbar-brand:hover {

            font-size: 150%;

        }

        .nav-text:hover {

          font-size: 110%;

        }

        .nav-text {

            color: #E0A108;

        }

				.flip-container {
					-webkit-perspective: 1000;
					-moz-perspective: 1000;
					-o-perspective: 1000;
					perspective: 1000;

					border: 1px solid #ccc;
				}

					.flip-container:hover .flipper,  
					.flip-container.hover .flipper {
						-webkit-transform: rotateY(180deg);
						-moz-transform: rotateY(180deg);
						-o-transform: rotateY(180deg);
						transform: rotateY(180deg);
					}

				.flip-container, .front, .back {
					width: 280px;
					height: 380px;
				}

				.flipper {
					-webkit-transition: 0.6s;
					-webkit-transform-style: preserve-3d;

					-moz-transition: 0.6s;
					-moz-transform-style: preserve-3d;
					
					-o-transition: 0.6s;
					-o-transform-style: preserve-3d;

					transition: 0.6s;
					transform-style: preserve-3d;

					position: relative;
				}

				.front, .back {
					-webkit-backface-visibility: hidden;
					-moz-backface-visibility: hidden;
					-o-backface-visibility: hidden;
					backface-visibility: hidden;

					position: absolute;
					top: 0;
					left: 0;
				}

				.front {
					background-color: yellow;
					background-size: 100px 100px;
					background-position: 100px 150px;
					z-index: 2;
					background: #FFB280;
				}

				.back {

					-webkit-transform: rotateY(180deg);
					-moz-transform: rotateY(180deg);
					-o-transform: rotateY(180deg);
					transform: rotateY(180deg);

					background: #D68552;
				}


				.back-logo {
					position: absolute;
					top: 40px;
					left: 90px;
					width: 160px;
					height: 117px;
				}

				.back-title {
					font-weight: bold;
					color: #00304a;
					position: absolute;
					top: 150px;
					left: 0;
					right: 0;
					text-align: center;
					text-shadow: 0.1em 0.1em 0.05em #acd7e5;
					font-family: Courier;
					font-size: 2em;
				}

				.back p {
					position: absolute;
					bottom: 150px;
					left: 0;
					right: 0;
					text-align: center;
					padding: 0 20px;
					font-family: arial;
					line-height: 2em;
				}

				@media screen and (max-width: 480px) {

					#twit {

							margin-left: -10px;

					}

				}

				.logout {

            border: none;
            background-color: Transparent;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.7); 
            margin-top: 7px;

        }

        .logout:hover {

            color: white;
            font-size: 90%;

        }

        @media screen and (max-width: 480px)
        {

            .logout {

                color: #222222;
                margin-left: -4px;

            }

        }

    </style>

    <!--bttn.css-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">

  </head>

  <body id="page-top" style="background-color: #BFFFBF;">>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color: #FFFFD9;">
      <div class="container heading_container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"><span style="color: #FF9900;">Power in your hands</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
					<form method="post">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="health.php"><span class="nav-text">Health</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services"><span class="nav-text">Education</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="agri.php"><span class="nav-text">Agriculture</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><span class="nav-text">Power</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="waste.php"><span class="nav-text">Sewage</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><span class="nav-text">Jobs</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="sell.php"><span class="nav-text">Sell Crop</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="buy.php"><span class="nav-text">Buy Crop</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="donate.php"><span class="nav-text">Donate</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#"><span class="nav-text">Contact</span></a>
            </li>
						<li class="nav-item">
              <?php

                  if(!empty($_SESSION['name']) OR !empty($_SESSION['vid'])) {

                      echo "<form method='post'><button class='logout' name='logout'><span class='nav-text'>LOG OUT</span></button></form>";

                  }

              ?>
          </li>
          </ul>
					</form>
        </div>
      </div>
    </nav>

    <div style="margin-top: 80px;">
			<div class="row">
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');" style="margin: 0 auto;">
					<div class="flipper">
						<div class="front">
							<img src="https://cdn4.iconfinder.com/data/icons/social-icons-6/40/phone-512.png" width="40%" style="margin-left: 28%; margin-top: 45%;">
						</div>
						<div class="back">
							<div class="back-logo"></div>
							<div class="back-title">Phone</div>
							<a href="tel:1234567890"><p>1234567890</p></a>
						</div>
					</div>
				</div>
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');" style="margin: 0 auto;">
					<div class="flipper">
						<div class="front">
							<img src="img/email.png" width="40%" style="margin-left: 28%; margin-top: 45%;">
						</div>
						<div class="back">
							<div class="back-logo"></div>
							<div class="back-title">Email</div>
							<p>powerinhand2017@gmail.com</p>
						</div>
					</div>
				</div>
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');" style="margin: 0 auto;">
					<div class="flipper">
						<div class="front">
							<img src="img/fb.png" width="40%" style="margin-left: 28%; margin-top: 45%;">
						</div>
						<div class="back">
							<div class="back-logo"></div>
							<div class="back-title">Username</div>
							<a href="https://www.facebook.com/Powerinhands-129012344511893" target="_blank"><p style="top: 180px;">www.facebook.com/Powerinhands-129012344511893</p></a>
						</div>
					</div>
				</div>
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');" style="margin: 0 auto;">
					<div class="flipper">
						<div class="front">
							<img src="img/twitter.png" width="40%" style="margin-left: 28%; margin-top: 45%;">
						</div>
						<div class="back">
							<div class="back-logo"></div>
							<div class="back-title">Username</div>
							<a href="https://twitter.com/powerinhand2017" target="_blank"><p id="twit">https://twitter.com/powerinhand2017</p></a>
						</div>
					</div>
				</div>
			</div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>




