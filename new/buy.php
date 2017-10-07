<?php

    session_start();

    $link = mysqli_connect("shareddb1c.hosting.stackcp.net","power-in-hand-313640b8","password98@","power-in-hand-313640b8");

    if(isset($_POST['logout'])) {

        $_SESSION['name'] = '';

        $_SESSION['vid'] = '';

        $_SESSION['mobile'] = '';

        echo "<script> location.href='index.php' </script>";

    }

    $success="";

    if(isset($_POST['submit'])) {

        if($_SESSION['prof']==1) {

          $query = "SELECT * FROM `sign_teacher` WHERE mobile='".mysqli_real_escape_string($link, $_SESSION['mobile'])."'";

          $row = mysqli_fetch_array(mysqli_query($link, $query));

        } else if($_SESSION['prof']==0) {

          $query = "SELECT * FROM `sign_village` WHERE mobile='".mysqli_real_escape_string($link, $_SESSION['mobile'])."'";

          $row = mysqli_fetch_array(mysqli_query($link, $query));

        }

        $to = $_POST['submit'];
        $subject = "Interest shown in ad";
        $message = '
        A customer has shown interest in your ad:
        
        Name: '.$row['name'].'
        Mobile: '.$row['mobile'].'
        Email: '.$row['email'].'
        
        This is a system generated mail. Do not reply. 
        ';
        $headers = 'From:noreply@powerinhand.com' . "\r\n"; 
        mail($to, $subject, $message, $headers); 

        $success = "Email sent successfully!";

    }

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BUY CROPS</title>

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

        .card {
          /*margin: 0 auto;/* /* Added */
          float: none; /* Added */
          background-color: #FFB280;
          margin: 0px 10px 15px 15px; /* Added */
          width: 20rem;
           box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;

        }
        .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.7);
}

        .buy {

          margin-top: 80px;

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

  <body id="page-top" style="background-color: #BFFFBF;">

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
              <a class="nav-link js-scroll-trigger" href="waste.php"><span class="nav-text">Waste</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="job.php"><span class="nav-text">Jobs</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="sell.php"><span class="nav-text">Sell Crop</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#"><span class="nav-text">Buy Crop</span></a>
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
      <div>
    <div class="buy" style=" margin:80px 70px 0px 200px" ;>

      
        <div class="alert alert-success fonte" role="alert" <?php if($success=='') { echo "style='display: none'"; } ?>>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <?php echo $success; ?>
        </div>
        

      <div class="row">
      <form method="post">

        <?php

              $query = "SELECT * FROM `sell`";

              if($result = mysqli_query($link, $query)) {

                  while($row = mysqli_fetch_array($result)) {

                      $query1 = "SELECT * FROM `sign_village` WHERE id='".mysqli_real_escape_string($link, $row['cid'])."'";
                      $row1 = mysqli_fetch_array(mysqli_query($link, $query1));
                      $email = $row1['email'];
                      $name = $row1['name'];
                      echo "<button type='submit' name='submit' value='".$email."' class='card' style='text-align: center; float: left;'>";
                      echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" style="margin: 0 auto;" alt="No Image" width="50" height="50"><br><br>';
                      echo "<h5><strong>Seller</strong>: ".mysqli_real_escape_string($link, $name)."</h5>";
                      echo "<h6>".mysqli_real_escape_string($link, $row['name'])."</h6>";
                      echo "<h6><strong>Price</strong>: ".mysqli_real_escape_string($link, $row['price'])."</h6>";
                      echo "<h6><strong>Quantity (in quintal)</strong>: ".mysqli_real_escape_string($link, $row['quantity'])."</h6>";
                      echo "</button>";
                  }

              }
        
        ?>
      </form>
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
