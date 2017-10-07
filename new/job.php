<?php

    session_start();

    $link = mysqli_connect("shareddb1c.hosting.stackcp.net","power-in-hand-313640b8","password98@","power-in-hand-313640b8");

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

    <title>JOBS</title>

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

        .show_row {

            border: 1px solid black;

        } 

        .show_row:hover {

            background-color: #D8D8D8;
            box-shadow: 10px 10px 5px #888;

        }

        .info {

            font-size: 120%;
            -webkit-transition: font-size 1s;
            transition: font-size 1s;

        }

        .info:hover {

            font-size: 180%;

        }


    </style>

    <!--bttn.css-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">

  </head>

  <body id="page-top">

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
              <a class="nav-link js-scroll-trigger" href="#"><span class="nav-text">Jobs</span></a>
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

    <div style="margin-top: 70px; text-align: center;">

        <?php

            $query = "SELECT * FROM `jobs`";

            if($result = mysqli_query($link, $query)) {

                while($row = mysqli_fetch_array($result)) {
                    echo "<div class='show_row'>";
                    echo "<p class='info'>Name:".$row['name']."</p>";
                    echo "<p class='info'>TYPE:".$row['type']."</p>";
                    echo "<p class='info'>DESCRIPTION:".$row['description']."</p>";
                    echo "<p class='info'>LAST DATE:".$row['ldate']."</p>";
                    echo "<p class='info'><a href=data:application/pdf;base64,".base64_encode($row['form'])." download>Download Form</a></p>";
                    echo "<p class='info'><a href='".$row['link']."' target='_blank'>Know More</a>";
                    echo "<hr>";
                    echo "</div>";
                }

            }

        ?>

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
