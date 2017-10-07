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

    <title>DONATE</title>

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
        #img {
            width: 100%;
            height: 100%;
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
					background-size: 100px 100px;
					background-position: 100px 150px;
					z-index: 2;
					background: #8AC4FF;
					opacity: 0.7;
				}

				.front:hover {

					opacity: 1;

				}

				.back {

					-webkit-transform: rotateY(180deg);
					-moz-transform: rotateY(180deg);
					-o-transform: rotateY(180deg);
					transform: rotateY(180deg);
					background: #8AC4FF;
				}


    </style>

    <!--bttn.css-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">

  </head>

  <body id="page-top" style="background-image: url('img/donate.jpg');background-position:center;
  background-repeat: no-repeat; background-size: 1366px 768px;">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color: #FFFFD9;">
      <div class="container heading_container">
        <a class="navbar-brand js-scroll-trigger" href="index1.php"><span style="color: #FF9900;">Power in your hands</span></a>
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
              <a class="nav-link js-scroll-trigger" href="education.php"><span class="nav-text">Education</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="agri.php"><span class="nav-text">Agriculture</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="power.php"><span class="nav-text">Power</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="waste.php"><span class="nav-text">Waste</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="job.php"><span class="nav-text">Jobs</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="sell.php"><span class="nav-text">Sell Crop</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="buy.php"><span class="nav-text">Buy Crop</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#"><span class="nav-text">Donate</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.php"><span class="nav-text">Contact</span></a>
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
    <body img id="img" >

    <div style="background-color: #008E8F; height: 120px;margin-top: 55px; text-align: center; color: white; padding-top: 20px;">

       <h2 >MAKE A DONATION</h2>
       <span style="font-size: 100%;">for rural development.</span>

    </div>

    <div style="margin-top: 50px;margin-left:35%; text-align: center;" id="paytm">
    <div class="row">
      <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
        <div class="flipper">
          <div class="front">
            <img src="img/paytm_pic.png" width="60%" style="margin-top: 50%;">
            <br><span style="text-align: center;text-color:#000000;">Pay via Paytm</span>
          </div>
          <div class="back">
            <img src="img/paytm_qr.jpeg" width="70%" style="margin-top: 30%;">
          </div>
        </div>
      </div>

      <div class="flip-container" ontouchstart="this.classList.toggle('hover');" id="phonepe">
        <div class="flipper">
          <div class="front">
            <img src="img/phonepe.png" width="50%" style="margin-top: 50%;">
            <br><span style="text-align: center;text-color:#000000;">Pay via Phonepe</span>
          </div>
          <div class="back">
            <img src="img/phonepe_qr.jpeg" width="70%" style="margin-top: 30%;">
          </div>
        </div>
      </div>
    </body>

    <script type="text/javascript">

        $("#genQR").click(function(){

            $("#QR").show();
            $("#QR1").hide();
            $("#img").hide();

        });

        $("#genQR1").click(function(){

            $("#QR1").show();
            $("#QR").hide();
            $("#img").hide();

        });

    </script>

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
