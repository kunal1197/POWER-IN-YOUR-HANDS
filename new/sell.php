<?php

    session_start();

    if(!isset($_SESSION['name']) AND empty($_SESSION['name']) AND !isset($_SESSION['vid']) AND empty($_SESSION['vid'])) {

        echo "<script> alert('Login or signup first'); </script>";

        echo "<script> location.href='index.php'; </script>";

    }

    $link = mysqli_connect("shareddb1c.hosting.stackcp.net","power-in-hand-313640b8","password98@","power-in-hand-313640b8");

    $success="";

    $error="";

    if(isset($_POST['submit'])) {

      if($_POST['name']!='' AND $_POST['price']!='' AND $_POST['quantity']!='' AND $_FILES['image']['name']!='') {

          $query = "SELECT * FROM `govt_rates` WHERE cname='".mysqli_real_escape_string($link, $_POST['name'])."'";

          if(mysqli_num_rows(mysqli_query($link, $query))==0) {

              $error.="This crop is still not in our database. ";

          } else {

              $row = mysqli_fetch_array(mysqli_query($link, $query));

              if($_POST['price']>$row['fin_rate']) {

                  $error.="The price exceeds government stipulated rate. ";

              } else if($_POST['price']<$row['ini_rate']) {

                  $error.="The price is less than government stipulated rate. ";

              }

          }
          if(!ctype_digit($_POST['price'])) {

              $error.="Price should be numeric. ";

          }
          if(!ctype_digit($_POST['quantity'])) {

              $error.="Quantity should be numeric.";
            
          }
          if($_FILES['image']['size']>2000000) {

              $error.="Size of image should not exceed 2MB. ";

          }
          if($error=='') {

              $query = "SELECT * FROM `sign_village` WHERE mobile='".mysqli_real_escape_string($link, $_SESSION['mobile'])."'";

              $row = mysqli_fetch_array(mysqli_query($link, $query));

              $id = $row['id'];

              $imageName = mysqli_real_escape_string($link, $_FILES['image']['name']);

              $imageData = mysqli_real_escape_string($link, file_get_contents($_FILES['image']['tmp_name']));

              $imageType = mysqli_real_escape_string($link, $_FILES['image']['type']);

              $query = "INSERT INTO `sell`(`cid`, `name`, `price`, `quantity`, `image`) VALUES('".$id."', '".mysqli_real_escape_string($link, $_POST['name'])."'
              , '".mysqli_real_escape_string($link, $_POST['price'])."', '".mysqli_real_escape_string($link, $_POST['quantity'])."', '".$imageData."')";

              mysqli_query($link, $query);

              $success.="Successfully added to database. ";

          }

      } else {

        $error="Complete the form.";

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

    <title>CROP SELL</title>

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
        #input {
          margin:100px 0px 0px 5px;
        }

        .inp {

          width: 35%;
          border-radius: 10px 10px 10px 10px;
          padding: 3px 10px;
          -webkit-transition: width 2s; 
          transition: width 2s;

        }

        .inp:focus {

          width: 50%;

        }

        @media screen and (max-width: 480px) {

          .inp {

            width: 80%;
            -webkit-transition: width 2s;
            transition: width 2s;

          }

          .inp:focus {

            width: 100%;

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

  <body id="page-top" style="background-image:url('http://www.arysta-na.com/assets/images/products/us/everest/downloads.jpg');background-repeat: no-repeat;background-size: 1400px 800px; opacity:2px;">

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
            <a class="nav-link js-scroll-trigger" href="#"><span class="nav-text">Sell Crop</span></a>
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

  <div id="input" style="text-align: center;">

  <div class="alert alert-danger alert-dismissible fade show" role="alert" <?php if($error=='') { echo "style='display: none'"; } ?>>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <?php echo $error; ?>
  </div>

  <div class="alert alert-success alert-dismissible fade show" role="alert" <?php if($success=='') { echo "style='display: none'"; } ?>>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <?php echo $success; ?>
  </div>

  <form method="post" enctype="multipart/form-data">

    <input list="village" name="name" class="inp" placeholder="Crop Name">

    <datalist id="village">

    <?php

      $query = "SELECT * FROM `govt_rates`";

      if($result = mysqli_query($link, $query)) {

        while($row = mysqli_fetch_array($result)) {

            echo "<option value='".mysqli_real_escape_string($link, $row['cname'])."'>'".mysqli_real_escape_string($link, $row['hname'])."' Rate: 
            '".mysqli_real_escape_string($link, $row['ini_rate'])."' to
            '".mysqli_real_escape_string($link, $row['fin_rate'])."'</option>";

        }

      }
      
    ?>

    </datalist>
    <br></br>
    <input type="text" id="price" placeholder="Crop Price per quintal" class='inp' name="price">
    <br></br>
    <input type="text" placeholder="Quantity in quintal (100kg)" class='inp' name="quantity">
    <br></br>
    <input type="file" name="image" accept="image/*" autocomplete=off>
    <br><br>
    <button class="bttn-gradient bttn-primary bttn-sm" name="submit">SUBMIT</button>
  </form>
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
