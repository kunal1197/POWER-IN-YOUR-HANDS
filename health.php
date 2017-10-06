<?php

    session_start();

    $link = mysqli_connect("shareddb1c.hosting.stackcp.net","power-in-hand-313640b8","password98@","power-in-hand-313640b8");

    $error="";

    $array = array();

    $year = 0;

    $success = "";

    if(isset($_POST['submit'])) {

        if($_POST['month']!=1 AND $_POST['date']!='' AND $_POST['type']!=1) {

            $array = array(
                "January" => 31,
                "February" => 28,
                "March" => 31,
                "April" => 30,
                "May" => 31,
                "June" => 30,
                "July" => 31,
                "August" => 31,
                "September" => 30,
                "October" => 31,
                "November" => 30,
                "December" => 31,
            );

            $month = array(

                "January" => 1,
                "February" => 2,
                "March" => 3,
                "April" => 4,
                "May" => 5, 
                "June" => 6, 
                "July" => 7,
                "August" => 8,
                "September" => 9,
                "October" => 10,
                "November" => 11,
                "December" =>12,

            );

            $mon = date("m");

            if($month[$_POST['month']]<$mon) {

                $error.=$_POST['month']." has already passed.";

            }

            $year = date("Y");

            if($year%4==0) {

                if($year%100==0) {

                    if($year%400==0) {

                        $array["February"] = 29;

                    } else {

                        $array["February"] = 28;

                    }

                } else {

                      $array["February"] = 29;

                }

            } else {

                  $array["February"] = 28;

            }
            
            if($_POST['date']<1 OR $_POST['date']>$array[$_POST['month']]) {

                $error.="Incorrect date.";

            } 

            $query = "SELECT * FROM `sign_village` WHERE mobile='".mysqli_real_escape_string($link, $_SESSION['mobile'])."'";

            if(mysqli_num_rows(mysqli_query($link, $query))==0) {

                $error.="You are not a villager.";

            }
            
            if($error=='') {

                $row = mysqli_fetch_array(mysqli_query($link, $query));

                $to = "powerinhand2017@gmail.com";
                $subject = "Checkup Request";
                $message = '
                A person from the following village booked a '.$_POST['type'].':-

                Name: '.$row['name'].'

                Mobile: '.$row['mobile'].'

                Email: '.$row['email'].'

                '.$row['vname'].'

                Date: '.$_POST['date'].' '.$_POST['month'].' '.date("Y").'
                
                ';
                $headers = 'From:noreply@powerinhand.com' . "\r\n"; 
                mail($to, $subject, $message, $headers);

                echo "<script> alert('Your request has been recieved successfully. We will get back to you soon.'); </script>";

            }

        } else {

            $error = "Complete the form.";

        }

    } 

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

    <title>HEALTH</title>

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

        #iframe {

            width: 640px;
            height: 480px;
            float: left;
            margin-right: 10px;
            margin-left: 10px;

        } 

        .login {

            width: 100%;

        }

        #request {

            float: left;

        }

        @media screen and (max-width: 480px) {

            #iframe {
                
                width: 100%; 
                height: 300px;
                margin-left: 0;

            }

            #request {

                margin-left: 10px;
        
            }

            .login {

                width: 80%;

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
              <a class="nav-link js-scroll-trigger" href="#"><span class="nav-text">Health</a>
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

    <div style="margin-top: 70px;">

      <iframe src="https://www.google.com/maps/d/u/0/embed?mid=18rzuIbLhq8pcn8EWwHAWKQUoic8" id="iframe"></iframe>
      <div id="request">
        <h2>Request a Checkup</h2>
        <form method="post">
          <div class="form-group login">
            <select class="form-control" name="month">
              <option value="1">--Select a Month--</option>
              <option value="January">January</option>
              <option value="February">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="September">September</option>
              <option value="October">October</option>
              <option value="November">November</option>
              <option value="December">December</option>
            </select>
          </div>
          <div class="input-group input-group-md login">
            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            <input type="number" class="form-control" placeholder="Enter date" name="date">
          </div>
          <br>
          <div class="form-group login">
            <select class="form-control" name="type">
              <option value="1">--Choose type--</option>
              <option value="Medical Camp">Medical Camp</option>
              <option value="General Health Campaign">General Health Campaign</option>
            </select>
          </div>
          <button type="submit" class="bttn-unite bttn-primary bttn-sm" name="submit">SUBMIT</button>
          <br><br>
        </form>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" <?php if($error=='') { echo "style='display: none;"; } ?>>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?php echo $error; ?>
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

