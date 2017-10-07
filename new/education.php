<?php

  session_start();

  if(!isset($_SESSION['name']) AND empty($_SESSION['name']) AND !isset($_SESSION['vid']) AND empty($_SESSION['vid'])) {

        echo "<script> alert('Login or signup first'); </script>";

        echo "<script> location.href='index1.php'; </script>";

    }

	$link = mysqli_connect("shareddb1c.hosting.stackcp.net","power-in-hand-313640b8","password98@","power-in-hand-313640b8");

    if(isset($_POST['submit'])) {

    if($_POST['vname']!='' AND $_POST['subject']!='select' AND $_POST['type']!='select') {

        $query = "SELECT * FROM `village` WHERE vid='".mysqli_real_escape_string($link, $_POST['vname'])."'";

        if(mysqli_num_rows(mysqli_query($link, $query))==0) {

            echo "<script> alert('Your village is not in our database.'); </script>";

        } else {
          
            $row = mysqli_fetch_array(mysqli_query($link, $query));

            $query1 = "SELECT * FROM `sign_village` WHERE mobile='".mysqli_real_escape_string($link, $_SESSION['mobile'])."'";

            $row1 = mysqli_fetch_array(mysqli_query($link, $query1));

            $query = "INSERT INTO `teach`(`vname`, `subject`, `type`, `cemail`) VALUES('".mysqli_real_escape_string($link, $row['name'])."'
            , '".mysqli_real_escape_string($link, $_POST['subject'])."', '".mysqli_real_escape_string($link, $_POST['type'])."',
            '".mysqli_real_escape_string($link, $row1['email'])."')";

            mysqli_query($link, $query);

            echo "<script> alert('Successfully added to database.'); </script>";

        }

    } else {

        echo "<script> alert('Complete the form.'); </script>";

    }

  } 
  
  $success="";

  if(isset($_POST['interest'])) {

      $query = "SELECT * FROM `sign_teacher` WHERE mobile='".$_SESSION['mobile']."'";

      $row = mysqli_fetch_array(mysqli_query($link, $query));

      $query1 = "SELECT * FROM `teach` WHERE id='".mysqli_real_escape_string($link, $_POST['interest'])."'";

      $row1 = mysqli_fetch_array(mysqli_query($link, $query1));

      $to = $row1['cemail'];
      $subject = "Interest shown in ad";
      $message = '
      A teacher has shown interest in your ad:
      
      Name: '.$row['name'].'
      Mobile: '.$row['mobile'].'
      Email: '.$row['email'].'
      
      This is a system generated mail. Do not reply. 
      ';
      $headers = 'From:noreply@powerinhand.com' . "\r\n"; 
      mail($to, $subject, $message, $headers); 

      $success = "Email sent! The person will get back to you shortly.";

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

    <title>EDUCATION</title>

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

   .put {
 width: 35%;
          border-radius: 10px 10px 10px 10px;
          padding: 3px 5px;
          -webkit-transition: width 2s; 
          transition: width 2s;      
            }

        #select1 {

          width: 15%;
          border-radius: 10px 10px 10px 10px;
          padding: 3px 10px;
          -webkit-transition: width 2s; 
          transition: width 2s;
          margin-left:40%;

        }
         #select2 {

          width: 15%;
          border-radius: 10px 10px 10px 10px;
          padding: 3px 10px;
          -webkit-transition: width 2s; 
          transition: width 2s;
          margin-left:40%;

        }


        .inp:focus {

          width: 50%;

        }

        .ads {

            height: 300px;
            width: 300px;
            font-size: 120%;
            background-color: #FFE6B2;
            opacity: 0.7;

        }

        .ads:hover {

            font-size: 150%;
            box-shadow: 10px 10px 5px #888888;
            opacity: 1;

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

        #vid {
           padding-left: 10px;
           width: 15%;
            border-radius: 10px 10px 10px 10px;
            margin-left:40%;

        }
        #sub {
           margin-left:44%;
        }
     
    </style>

    <!--bttn.css-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">

  </head>

  <body id="page-top" style="background-image: url('http://blog.hdwallsource.com/wp-content/uploads/2014/11/gradients-26042-26727-hd-wallpapers.jpg')">

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

      <div style="margin-top: 70px" id="teacher">
	<form method="post">

    <?php 

      if($_SESSION['prof']==0) {

        echo "<div id='villager'>";
  ?>
        <input list="village" name="vname" id="vid" name='vname' class="form-control fonte" placeholder="Enter village id"><br>

        <datalist id="village">

        <?php
          $query = "SELECT * FROM `village`";

          if($result = mysqli_query($link, $query)) {

            while($row = mysqli_fetch_array($result)) {

                echo "<option value='".mysqli_real_escape_string($link, $row['vid'])."'>'".mysqli_real_escape_string($link, $row['name'])."'</option>";

            }

          }
          
        ?>

        </datalist>
        <?php
        echo '<select id="select1" name="subject"><br>';
        echo '<option value="select">--Select an Option--</option>';
        echo '<option value="Mathematics">Mathematics</option>';
        echo '<option value="English">English</option>';
        echo '<option value="Hindi">Hindi</option>';
        echo '<option value="Physics">Physics</option>';
        echo '<option value="Chemistry">Chemistry</option>';
        echo '<option value="Biology">Biology</option>';
        echo '<option value="History">History</option>';
        echo '<option value="Geography">Geography</option>';
        echo '<option value="Arts">Arts</option>';
        echo '<option value="Commerce">Commerce</option>';
        echo '</select><br><br>';
        echo '<select id="select2" name="type"><br>';
        echo '<option value="select">--Select an Option--</option>';
        echo '<option value="Primary">Primary</option>';
        echo '<option value="Secondary">Secondary</option>';
        echo '</select>';
        echo '<br><br>';
        echo '<button name="submit" class="bttn-unite bttn-md bttn-primary "id="sub">SUBMIT</button>';
        echo '</div>';

      } else if($_SESSION['prof']==1) {

        $query = "SELECT * FROM `teach`";

  ?>
        <div class="alert alert-success fonte" role="alert" <?php if($success=='') { echo "style='display: none'"; } ?>>
  <?php
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
        echo $success;
        echo '</div>';
        
        if($result = mysqli_query($link, $query)) {

            echo "<form method='post'>";
            echo "<div class='row'>";

            while($row = mysqli_fetch_array($result)) {

                echo '<div class="card ads" style="margin: 0 auto;">';
                echo '<div class="card-body" style="text-align: center;">';
                echo "<strong>Village</strong>:".$row['vname']."<br><br>";
                echo "<strong>Subject</strong>:".$row['subject']."<br><br>";
                echo "<strong>Type</strong>:".$row['type']."<br><br>";
                $id = $row['id'];
                echo "<button name='interest' value='$id' class='bttn-stretch bttn-md bttn-primary'>INTERESTED</button>";
                echo "</div>";
                echo "</div>";
              
            }

            echo "</div>";
            echo "</form>";

        }
        

      }

    ?>

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
