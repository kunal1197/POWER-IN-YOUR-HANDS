<?php

    session_start();

    if(isset($_POST['logout'])) {

        $_SESSION['name'] = '';

        $_SESSION['vid'] = '';

        $_SESSION['mobile'] = '';

        echo "<script> location.href='index1.php' </script>";

    }

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Waste</title>

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
        #mar {
                    text-align: justify;
                     background-color: rgba(210,210,210,0.5);
                }


    </style>

    <!--bttn.css-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">

  </head>

  <body id="page-top" style="background-color:#FFFFB2">

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
              <a class="nav-link js-scroll-trigger" href="#"><span class="nav-text">Waste</span></a>
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
              <a class="nav-link js-scroll-trigger" href="donate.php"><span class="nav-text">Donate</span></a>
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

    <div id="mar" style="margin:100px 200px 25px 200px";>

      <h1 style="text-align:center;text-shadow: 2px 2px green;">WASTE MANAGEMENT</h1><br>
      <span class="fluid_image" style="display:block;background:url(https://d1x0je2yh2wyb8.cloudfront.net/1/9/4d7f9cd4-0040-4164-a747-37c01661b3dc.WyI2NTV4MzAwIiwiY3JvcCJd.jpg) no-repeat 50% 50%; width:100%; max-width:500px; height:225px"></span>
      <p></p>
      <p style="font-size:15px";>We believe everyone has the right to live and work in a clean environment. Because of poverty, many people have no option but to live in slums. So we’re working with some of the poorest communities to safely and securely improve their waste management and collection methods. This brings improvements to the health of the slum dwelling families and the creation of safer healthier places to live and work.</p>
      <h2 >Examples of our approach to waste management</h2><br>
      <span class="fluid_image" style="display:block;background:url(https://d1x0je2yh2wyb8.cloudfront.net/1/6/4d832d9f-a6e4-4081-aef3-05b21661b3dc.WyI5MHg5MCIsImNyb3AiXQ.jpg) no-repeat 50% 50%; width:100%; max-width:90px; height:90px;float:left";></span>
      <h3 style="margin-left:125px";>Improved toilets</h3> <!--Give link to new page improved -->
      <p style="margin-left:125px";>Some of the world’s poorest people are those who live in slums, Practical Action is working to install effective sanitation in these areas</p>
      <p style="margin-left:850px";><a href="http://powerinhand-com.stackstaging.com/itoilet.php">read more</a> </p>
      <span class="fluid_image" style="display:block;background:url(https://d1x0je2yh2wyb8.cloudfront.net/1/5/4d7f9bf1-9980-4f9e-a3d4-37bc1661b3dc.WyI5MHg5MCIsImNyb3AiXQ.jpg) no-repeat 50% 50%; width:100%; max-width:90px; height:90px;float:left"></span> <!--Give link to new page improved -->
      <h3 style="margin-left:125px";>Solid waste management</h3><!--Give link to new page-->
      <p style="margin-left:125px";>Waste collectors recycle and sell material thrown away by others, thus contributing to the improved health of slum dwelling families</p>
        <p style="margin-left:850px";><a href="http://powerinhand-com.stackstaging.com/solidwaste.php">read more</a></p>  <!--Give link to new page improved -->
        <span class="fluid_image" style="display:block;background:url(https://d1x0je2yh2wyb8.cloudfront.net/1/9/4d7f9cd4-0040-4164-a747-37c01661b3dc.WyI5MHg5MCIsImNyb3AiXQ.jpg) no-repeat 50% 50%; width:100%; max-width:90px; height:90px;float:left"></span>
    <h3 style="margin-left:125px";>Urban waste management</h3> <!--Give link to new page improved -->
    <p style="margin-left:125px";>Waste management brings improvements to the health of the slum dwelling families with the creation of safer healthier places to live and work.</p>
     <p style="margin-left:850px";><a href="http://powerinhand-com.stackstaging.com/urban.php">read more</a></p>  <!--Give link to new page improved -->
     <span class="fluid_image" style="display:block;background:url(https://d1x0je2yh2wyb8.cloudfront.net/1/5/4d7f9bf1-9980-4f9e-a3d4-37bc1661b3dc.WyI5MHg5MCIsImNyb3AiXQ.jpg) no-repeat 50% 50%; width:100%; max-width:90px; height:90px;float:left"></span>
     <h3 style="margin-left:125px";>Home composting</h3> <!--Give link to new page improved -->
     <p style="margin-left:125px";>Introducing home composting bins to poor families in order to turn generated waste into useful rich compost for vegetable gardens.</p>
     <p style="margin-left:850px";><a href="http://powerinhand-com.stackstaging.com/home.php">read more</a></p>  <!--Give link to new page improved -->
     
     <span class="fluid_image" style="display:block;background:url(https://d1x0je2yh2wyb8.cloudfront.net/9/2/4d7f9bb0-1934-4113-81fb-37c01661b3dc.WyI5MHg5MCIsImNyb3AiXQ.jpg) no-repeat 50% 50%; width:100%; max-width:90px; height:90px;float:left"></span>
     <h3 style="margin-left:125px";>Plastics recycling</h3> <!--Give link to new page improved -->
     <p style="margin-left:125px";>Waste plastics are washed in specially designed machines before being sold on for commercial recycling and pelletising.</p>
     <p style="margin-left:850px";><a href="http://powerinhand-com.stackstaging.com/plasticre.php">read more</a></p>  <!--Give link to new page improved -->


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
