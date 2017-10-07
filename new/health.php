<?php

    session_start();

    if(!isset($_SESSION['name']) AND empty($_SESSION['name']) AND !isset($_SESSION['vid']) AND empty($_SESSION['vid'])) {

        echo "<script> alert('Login or signup first'); </script>";

        echo "<script> location.href='index1.php'; </script>";

    }

    $link = mysqli_connect("shareddb1c.hosting.stackcp.net","power-in-hand-313640b8","password98@","power-in-hand-313640b8");

    $error="";

    $array = array();

    $year = 0;

    $success = "";

    if(isset($_POST['submit'])) {

        if($_POST['month']!=1 AND $_POST['date']!='' AND $_POST['type']!=1) {

            $curTime = time();
            $current = date('Y-m-d',$curTime);
            $query = "SELECT * FROM `village` WHERE name='Ryakal'";
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_assoc($result)) {
                $date = $row['date'];
                $put = date('Y-m-d',strtotime("+30 day".$date));
                echo "<script> alert('$put'); </script>";
                echo "<script> alert('$current'); </script>";
                if($put > $current) {
                    $error.="Only 1 request possible per month. Last camp was organized on: ".$row['date'];
                }
            }

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

        .arrow {

            width: 50px; 

        }

    </style>

    <!--bttn.css-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">

  </head>

  <body id="page-top">

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
              <a class="nav-link js-scroll-trigger" href="#"><span class="nav-text">Health</a>
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

    <div style="margin-top: 50px;">

        <div>
        <div class="jumbotron" style="
        background-image: url('http://billionsinchange.in/wp-content/uploads/revslider/health-solution-header/Healthy-Happy-Family.jpg'); height: 700px;
        color: white;">
        <div style="margin-left: 80%;">
        <h1>Welcome Wellness</h1>
        <p style="font-size: 120%;">Meeting basic needs is the most effective and efficient<br> way to prevent disease and enable wellness.</p>
        <a href="#request"><img src="https://di-uploads-pod2.s3.amazonaws.com/grapponeautogroup/uploads/2015/03/down-arrow-white.png" class="arrow"></a>
        </div>
        </div>
        <img src="http://billionsinchange.in/wp-content/uploads/2017/09/loren-joseph-286131v2.jpg" style="float: left; margin-left: 30px; margin-right: 20px;" height="400px">
        <div>
        <h1>WHY THIS MATTERS</h1>
        <p>The conventional approach to healthcare is inadequate because it tends to focus on treating people who are already sick. A more effective approach would be to focus on keeping people from getting sick in the first place. That requires an understanding of both the root causes of disease and the fundamental sources of wellness. </p>
        <p>When people lack basic needs like clean water, electricity, and nutritious food, the result is poor health. Poor health hinders the ability to work, earn a living, care for a family, get an education, and experience good quality of life. Further, treatment costs for certain health conditions can be financially crushing. When an entire region lacks basic needs, the result is poor healthcare. Poor healthcare means diseases aren’t cured, illnesses aren’t treated, and medical services aren’t effectively performed. The combination of poor health and poor healthcare is lethal. Therefore, ensuring that basic needs are met is one of the most important health initiatives in the world today.</p>
        </div>
        <br><br><br><br>
        <div class="jumbotron" style="text-align: center;">
        <p style="font-size: 300%; color: #F12A2A;">Inventing for Good Health</p>
        <img src="http://billionsinchange.in/wp-content/uploads/2016/06/health.png" style="margin-bottom: 20px;">
        <p>Meeting basic needs is the most effective and efficient way to prevent disease and enable wellness.</p>
        </div>
        <!--IMAGE-->
        <div class="text1" id="info" style="margin:10px 200px 0px 200px;text-align: justify;
                     background-color: rgba(210,210,210,0.5);">
        <h1>CLEAN WATER IS HEALTH</h1><br>
        <h2>RainMaker: Preventing Disease, Enabling Wellness</h2><br>
        <p>Nearly 1.5 million people, mostly children, die from waterborne diseases each year, and half the world’s hospital beds are occupied by people sick from bad water. Additionally, hundreds of millions of people suffer debilitating illnesses because of unsafe water. Providing people access to clean water for drinking and sanitation could reduce incidences of serious diseases, including (with estimated annual cases globally) cholera (3-5 million cases), giardia (280 million cases), amoebic dysentery (480 million cases), Hepatitis A (114 million cases), and Typhoid fever (12.5 million). Our RainMaker devices are designed with disease prevention and wellness in mind. They’re made for use at the village level and can purify any type of contaminated water at a rate of 5-10 gallons per minute.</p>
        <h1>ELECTRICITY ENABLES HEALTHCARE</h1>
        <h2>Free Electric: Empowering Health Clinics</h2><br>
        <p>Health clinics all over the world operate without electricity, leaving an estimated 1 billion people unable to receive adequate medical treatment. In India alone, 46 percent of healthcare facilities lack power. That means doctors seeing patients at night have to do so in the dark, or with only the dim light of a kerosene lantern. When vaccines and medicines cannot be refrigerated, they can spoil and go to waste. When medical supplies and instruments cannot be stored in a sterile environment and at constant temperature, the risk of infection increases. For newborns to the elderly, the absence of electricity prevents the use of important diagnostic tools as well as the administration of potentially lifesaving cures. Our HANS™ devices are helping to solve some of the problems facing health clinics that lack power, enabling them to provide critical health services to rural populations.</p>
        <!--Image--> <!--Image-->
        <h1>YOU ARE WHAT YOUR FOOD EATS</h1><br>
        <h2>Shivansh Farming: Supporting Healthy Families</h2><br>
        <p>The use of chemical fertilizers like urea has resulted in a domino effect of negative outcomes for farmers, one of which is poor health: urea destroys the microscopic soil organisms responsible for releasing nutrients to plants; plants with nutrient deficiencies produce fruits with lower levels of essential vitamins and minerals; people who eat vitamin-deficient foods are less likely to thrive, are more likely to develop compromised immune systems, and are more prone to illness. Our Shivansh Farming method is addressing the root cause (literally) of this health crisis. Farmers who have implemented the Shivansh Fertilizer have noticed that because they’re producing higher quality food, their kids are visibly healthier and household medical expenditures have gone down. With better health and lower costs come opportunity for further improving livelihoods. The Shivansh Farming method essentially reversed the domino effect of negative outcomes, into a chain reaction of benefits.</p>
        <h1>STOP DISEASE BEFORE IT STARTS</h1><br>
        <h2>Renew ECP: Improving Circulation for Better Health</h2><br>
        <p>Good blood circulation is the cornerstone of good health. Blood delivers nutrients and oxygen and removes waste from cells. When blood flows freely and efficiently, the body is able to defend itself against disease. But poor circulation flow can result in serious health problems like heart disease, diabetes, stroke, high blood pressure, dementia, and cancer. Renew ECP is a blood flow enhancement apparatus developed by Stage 2 that uses external counterpulsation (ECP) to squeeze blood from the lower body into the core while the heart is at rest. It acts like an auxiliary heart pumping blood between heartbeats. This action increases circulation while reducing the heart’s workload. The enhanced circulation widens blood vessels causing more blood to reach all areas of the body. Renew ECP is FDA-approved for increased blood flow for both heart patients and healthy individuals.</p>
        <!--Image-->
        </div>

    </div>

      <div id="map"><iframe src="https://www.google.com/maps/d/u/0/embed?mid=18rzuIbLhq8pcn8EWwHAWKQUoic8" id="iframe"></iframe></div>
      <div id="request">
        <h2 id="form">Request a Checkup</h2>
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
        <div class="alert alert-danger alert-dismissible fade show" id="message" role="alert"<?php if($error=='') { echo "style='display: none;"; } ?>>
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

