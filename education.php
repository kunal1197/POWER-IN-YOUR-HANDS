<?php

  session_start();

	$link = mysqli_connect("shareddb1c.hosting.stackcp.net","power-in-hand-313640b8","password98@","power-in-hand-313640b8");

  $profession = $_SESSION['prof'];

  echo "<script> alert($profession); </script>";

    if(isset($_POST['submit'])) {

    if($_POST['vname']!='' AND $_POST['subject']!='select' AND $_POST['type']!='select') {

        $query = "SELECT * FROM `village` WHERE vid='".mysqli_real_escape_string($link, $_POST['vname'])."'";

        if(mysqli_num_rows(mysqli_query($link, $query))==0) {

            echo "<script> alert('Your village is not in our database.'); </script>";

        } else {
          
          $row = mysqli_fetch_array(mysqli_query($link, $query));

            $query = "INSERT INTO `teach`(`vname`, `subject`, `type`) VALUES('".mysqli_real_escape_string($link, $row['name'])."'
            , '".mysqli_real_escape_string($link, $_POST['subject'])."', '".mysqli_real_escape_string($link, $_POST['type'])."')";

            mysqli_query($link, $query);

            echo "<script> alert('Successfully added to database.'); </script>";

        }

    } else {

        echo "<script> alert('Complete the form.'); </script>";

    }

  } 
  

 

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>village</title>

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
          margin:20px 200px 10px 345px;
            }

        #select1 {

          width: 35%;
          border-radius: 10px 10px 10px 10px;
          padding: 3px 10px;
          -webkit-transition: width 2s; 
          transition: width 2s;
           margin:20px 200px 10px 350px;

        }
         #select2 {

          width: 35%;
          border-radius: 10px 10px 10px 10px;
          padding: 3px 10px;
          -webkit-transition: width 2s; 
          transition: width 2s;
           margin:20px 200px 10px 350px;

        }


        .inp:focus {

          width: 50%;

        }

    </style>

    <!--bttn.css-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color: #FFFFD9;">
      <div class="container heading_container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><span style="color: #FF9900;">Power in your hands</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about"><span class="nav-text">Health</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services"><span class="nav-text">Education</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio"><span class="nav-text">Agriculture</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><span class="nav-text">Power</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><span class="nav-text">Sewage</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><span class="nav-text">Jobs</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><span class="nav-text">Sell Crop</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><span class="nav-text">Buy Crop</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><span class="nav-text">Donate</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><span class="nav-text">Contact</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      <div style="margin-top: 70px">
	<form method="post">

    <?php 

      if($_SESSION['prof']==0) {

        echo '<input list="village" placeholder="Enter village" name="vname">';
        echo '<datalist id="village">';
        $query = "SELECT * FROM `village`";

        if($result = mysqli_query($link, $query)) {

        while($row = mysqli_fetch_array($result)) {

          echo "<option value='".mysqli_real_escape_string($link, $row['vid'])."'>'".mysqli_real_escape_string($link, $row['name'])."'</option>";

        }

        }
        echo "</datalist><br>";
        echo '<select id="select1" name="subject">';
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
        echo '</select><br>';
        echo '<select id="select2" name="type">';
        echo '<option value="select">--Select an Option--</option>';
        echo '<option value="Primary">Primary</option>';
        echo '<option value="Secondary">Secondary</option>';
        echo '</select>';
        echo '<br>';
        echo '<button name="submit">Submit</button>';

      } else if($_SESSION['prof']==1) {

        $query = "SELECT * FROM `teach`";
        
        if($result = mysqli_query($link, $query)) {

            echo "<div class='row'>";

            while($row = mysqli_fetch_array($result)) {

                echo '<div class="card">';
                echo '<div class="card-body">';
                echo $row['vname']."<br>";
                echo $row['subject']."<br>";
                echo $row['type']."<br>";
                echo "</div>";
                echo "</div>";
              
            }

            echo "</div>";

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
