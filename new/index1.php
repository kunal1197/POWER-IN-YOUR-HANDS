<?php

    session_start();

    $link = mysqli_connect("shareddb1c.hosting.stackcp.net","power-in-hand-313640b8","password98@","power-in-hand-313640b8");

    $success = "";

    $error = "";

    if(isset($_POST['login'])) {

        if($_POST['mobile']!='' AND $_POST['password']!='') {

          if(strlen($_POST['mobile'])==10 AND ctype_digit($_POST['mobile'])) {

              $query = "SELECT * FROM `sign_teacher` WHERE mobile='".mysqli_real_escape_string($link, $_POST['mobile'])."' AND password='".
              mysqli_real_escape_string($link, hash('sha512', $_POST['password']))."'";
              $query1 = "SELECT * FROM `sign_village` WHERE mobile='".mysqli_real_escape_string($link, $_POST['mobile'])."' AND password='".
              mysqli_real_escape_string($link, hash('sha512', $_POST['password']))."'";
              if(mysqli_num_rows(mysqli_query($link, $query))==1) {

                  $success.="Logged in successfully.";

                  $row = mysqli_fetch_array(mysqli_query($link, $query));

                  $mobile = $row['mobile'];

                  $name = $row['name'];

                  $_SESSION['prof'] = 1;

                  $_SESSION['name'] = $name;

                  $_SESSION['mobile'] = $mobile;

                  $success.="Welcome back $name";
                  

              } else if(mysqli_num_rows(mysqli_query($link, $query1))==1) {

                  $success.="Logged in successfully.";

                  $row = mysqli_fetch_array(mysqli_query($link, $query1));

                  $mobile = $row['mobile'];

                  $name = $row['name'];

                  $_SESSION['prof'] = 0;

                  $_SESSION['name'] = $name;

                  $_SESSION['mobile'] = $mobile;

                  $success.="Welcome back $name";

              } else {

                  $error = "Wrong Credentials!";

              }

          } else {

              $error = "Invalid mobile number.";

          }

        } else {

            $error = "Complete the form.";

        }

    }
    
    if(isset($_POST['village'])) {

        if(isset($_POST['vid'])) {

            if(strlen($_POST['vid'])==8) {

                $query = "SELECT * FROM `village` WHERE vid='".mysqli_real_escape_string($link, $_POST['vid'])."'";

                if(mysqli_num_rows(mysqli_query($link, $query))==1) {

                    $row = mysqli_fetch_array(mysqli_query($link, $query));

                    $_SESSION['vname'] = $row['name'];

                    $name = $_SESSION['vname'];

                    $_SESSION['vid'] = $_POST['vid'];

                    $success = "Logged in successfully. Welcome back $name";

                } else {

                    $error = "Sorry! Your village is not in our database currently!!!!";

                }

            } else {

                $error = "Invalid village id.";

            }

        } else {

            $error = "Complete the form1.";

        }

    }

    if(isset($_POST['signup'])) {

      if($_POST['name']!='' AND $_POST['mobile']!='' AND $_POST['password']!='' AND $_POST['cpassword']!='' AND $_POST['adhar']
      AND $_POST['email']!='' AND $_POST['address']!='' AND $_FILES['pdf']['name']!='') {

        $pdfName = mysqli_real_escape_string($link, $_FILES['pdf']['name']);

        $pdfData = mysqli_real_escape_string($link, file_get_contents($_FILES['pdf']['tmp_name']));

        $pdfType = mysqli_real_escape_string($link, $_FILES['pdf']['type']);

        if(strlen($_POST['mobile'])!=10 OR !ctype_digit($_POST['mobile'])) {

            $error.="Invalid Mobile Number.";

        }

        if($_POST['password']!=$_POST['cpassword']) {

            $error.="Passwords do not match.";

        }

        if(strlen($_POST['adhar'])!=12 OR !ctype_digit($_POST['adhar'])) {

            $error.="Invalid Adhaar number.";

        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

            $error.="Invalid email address.";

        }  

        if($_FILES['pdf']['size']>500000) {

            $error.="File size greater than 500kb.";

        }

        $query = "SELECT `id` FROM `sign_teacher` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."' OR mobile='".
        mysqli_real_escape_string($link, $_POST['mobile'])."' OR adharno='".mysqli_real_escape_string($link,$_POST['adhar'])."'";

        if(mysqli_num_rows(mysqli_query($link, $query))>0) {

            $error.="Account already exists.";

        }

        $query = "SELECT `id` FROM `sign_village` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."' OR mobile='".
        mysqli_real_escape_string($link, $_POST['mobile'])."' OR adharno='".mysqli_real_escape_string($link,$_POST['adhar'])."'";

        if(mysqli_num_rows(mysqli_query($link, $query))>0) {

            $error.="You are already signed up as villager.";

        }
        
        if($error=='') {

            $query = "INSERT INTO `sign_teacher`(`name`, `mobile`, `email`, `password`, `address`, `adharno`, `resume`) VALUES('".
            mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['mobile'])."'
            , '".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, hash('sha512', $_POST['password']))."'
            , '".mysqli_real_escape_string($link, $_POST['address'])."', '".mysqli_real_escape_string($link,$_POST['adhar'])."', '".$pdfData."')";

            mysqli_query($link, $query);

            $success="Successfully Signed Up! Verify your email address.";

            $verify=0;

            $status=0;

            $mail=$_POST['email'];

            $password=$_POST['password'];

            $to = $_POST['email'];
            $subject = "Email Verification";
            $message = '
            Thanks for signing up!
            Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
            
            ------------------------
            Username: '.$mail.'
            Password: '.$password.'
            ------------------------
            
            Please click this link to activate your account:
            http://powerinhand-com.stackstaging.com/verify.php?email='.$mail.'&stat='.$status.'
            
            This is a system generated mail. Do not reply. 
            ';
            $headers = 'From:noreply@powerinhand.com' . "\r\n"; 
            mail($to, $subject, $message, $headers); 

        }

      } else if($_POST['name']!='' AND $_POST['mobile']!='' AND $_POST['password']!='' AND $_POST['cpassword']!='' AND $_POST['adhar']
      AND $_POST['villagename'] AND $_POST['vemail']) {

        if(strlen($_POST['mobile'])!=10 OR !ctype_digit($_POST['mobile'])) {

            $error.="Invalid Mobile Number.";

        }

        if($_POST['password']!=$_POST['cpassword']) {

            $error.="Passwords do not match.";

        }

        if(strlen($_POST['adhar'])!=12 OR !ctype_digit($_POST['adhar'])) {

            $error.="Invalid Adhaar number.";

        } 

        if (!filter_var($_POST['vemail'], FILTER_VALIDATE_EMAIL)) {

            $error.="Invalid email address.";

        } 

        $query = "SELECT `id` FROM `sign_village` WHERE email='".mysqli_real_escape_string($link, $_POST['vemail'])."' OR mobile='".
        mysqli_real_escape_string($link, $_POST['mobile'])."' OR adharno='".mysqli_real_escape_string($link,$_POST['adhar'])."'";

        if(mysqli_num_rows(mysqli_query($link, $query))>0) {

            $error.="Account already exists.";

        }

        $query = "SELECT `id` FROM `sign_teacher` WHERE email='".mysqli_real_escape_string($link, $_POST['vemail'])."' OR mobile='".
        mysqli_real_escape_string($link, $_POST['mobile'])."' OR adharno='".mysqli_real_escape_string($link,$_POST['adhar'])."'";

        if(mysqli_num_rows(mysqli_query($link, $query))>0) {

            $error.="You are already signed up as teacher.";

        }

        $query1 = "SELECT * FROM `village` WHERE vid='".mysqli_real_escape_string($link, $_POST['villagename'])."'";

        if(mysqli_num_rows(mysqli_query($link, $query1))==0) {

            $error.="Sorry your village is not in our database yet.";

        } else {

            $row1 = mysqli_fetch_array(mysqli_query($link, $query1));

        }
        
        if($error=='') {

            $query = "INSERT INTO `sign_village`(`name`, `mobile`, `email`, `password`, `vname`, `adharno`) VALUES('".
            mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['mobile'])."'
            , '".mysqli_real_escape_string($link, $_POST['vemail'])."', '".mysqli_real_escape_string($link, hash('sha512', $_POST['password']))."'
            , '".mysqli_real_escape_string($link, $row1['name'])."', '".mysqli_real_escape_string($link, $_POST['adhar'])."')";

            mysqli_query($link, $query);

            $success="Successfully Signed Up! Verify your email address.";

            $verify=0;

            $status=1;

            $mail=$_POST['vemail'];

            $password=$_POST['password'];

            $to = $_POST['vemail'];
            $subject = "Email Verification";
            $message = '
            Thanks for signing up!
            Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
            
            ------------------------
            Username: '.$mail.'
            Password: '.$password.'
            ------------------------
            
            Please click this link to activate your account:
            http://powerinhand-com.stackstaging.com/verify.php?email='.$mail.'&stat='.$status.'
            
            This is a system generated mail. Do not reply. 
            ';
            $headers = 'From:noreply@powerinhand.com' . "\r\n"; 
            mail($to, $subject, $message, $headers); 

        }

      } else {

          $error = "Complete the form.";

      }

    }

    if(isset($_POST['logout'])) {

        $_SESSION['name'] = '';

        $_SESSION['vid'] = '';

        $_SESSION['mobile'] = '';

    }

    if(isset($_POST['sell'])) {

        if(empty($_SESSION['name']) AND empty($_SESSION['vid'])) {

            echo "<script> alert('Login or signup first.'); </script>";

        } else {

            header("Location: sell.php");

        }

    } 

    $ver_err="";

     $query = "SELECT * FROM sign_village WHERE mobile='".mysqli_real_escape_string($link, $_SESSION['mobile'])."'";

      if(mysqli_num_rows(mysqli_query($link, $query))>0) {

          if($result = mysqli_query($link, $query)) {

              while($row = mysqli_fetch_array($result)) {

                  if($row['verified']==NULL) {

                      $ver_err="Verify email address1."; 

                  }

              }

          }

      }

      $query = "SELECT * FROM sign_teacher WHERE mobile='".mysqli_real_escape_string($link, $_SESSION['mobile'])."'";

      if(mysqli_num_rows(mysqli_query($link, $query))>0) {

          if($result = mysqli_query($link, $query)) {

              while($row = mysqli_fetch_array($result)) {

                  if($row['verified']==NULL) {

                      $ver_err="Verify email address."; 

                  }

              }

          }

      }

      if(isset($_POST['forgot'])) {

            if($_POST['forgotMail']!='') {

                $query = "SELECT `email` FROM `sign_teacher` WHERE email='".mysqli_real_escape_string($link, $_POST['forgotMail'])."'";

                $query1 = "SELECT `email` FROM `sign_village` WHERE email='".mysqli_real_escape_string($link, $_POST['forgotMail'])."'";

                if(mysqli_num_rows(mysqli_query($link, $query))>0 OR mysqli_num_rows(mysqli_query($link, $query1))>0) {

                    $success = "A mail has been sent. Follow the link to change password.";

                    $to = $_POST['forgotMail'];
                    $subject = "Forgot Password";
                    $message = '
                    You can change your password by clicking on the following link:-

                    http://powerinhand-com.stackstaging.com/forgot.php?email='.$_POST['forgotMail'].'
                    
                    This is a system generated mail. Do not reply. 
                    ';
                    $headers = 'From:noreply@powerinhand.com' . "\r\n"; 
                    mail($to, $subject, $message, $headers);


                } else {

                    $error = "This email is not yet registered.";

                }

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

    <title>POWER IN YOUR HANDS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Tinos" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	
	
	<!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!--jQuery 1.12.4-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <style type="text/css">
	
.fonte {
	/*font-family: "Pontano Sans", sans-serif;*/
	/*font-family: 'Tinos', serif;*/
	font-family: 'Lato', sans-serif;
	}
	
        .regLog {

          border-radius: 10px 10px 10px 10px;
          background-color: white;
          padding: 5px 10px;
          border: none;
          margin-right: none;

        }

        .login {

          width: 35%;
          margin: 0 auto;   

        }

        @media screen and (max-width: 400px)
        {

            .login {

                width: 90%;

            }

        }

        .navbar-brand:hover {

            font-size: 150%;

        }

        .nav-text:hover {

          font-size: 110%;

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

        .report {

                padding: 10px;
                border-radius: 10px 10px 10px 10px;
                

        }

        #describe {

            width: 500px;

        }

    </style>

    <!--bttn.css-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top fonte" id="mainNav">
      <div class="container heading_container fonte">
        <a class="navbar-brand js-scroll-trigger fonte" href="index1.php">Power in your hands</a>
        <button class="navbar-toggler navbar-toggler-right fonte" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fonte"></span>
        </button>
        <div class="collapse navbar-collapse fonte" id="navbarResponsive">
          <form method="post">
          <ul class="navbar-nav ml-auto fonte">
            <li class="nav-item fonte">
              <a class="nav-link js-scroll-trigger fonte" href="health.php"><span class="nav-text">Health</span></a>
            </li>
            <li class="nav-item fonte">
              <a class="nav-link js-scroll-trigger fonte" href="education.php"><span class="nav-text">Education</span></a>
            </li>
            <li class="nav-item fonte">
              <a class="nav-link js-scroll-trigger fonte" href="agri.php"><span class="nav-text">Agriculture</span></a>
            </li>
            <li class="nav-item fonte">
              <a class="nav-link js-scroll-trigger fonte" href="power.php"><span class="nav-text">Power</span></a>
            </li>
            <li class="nav-item fonte">
              <a class="nav-link js-scroll-trigger fonte" href="waste.php"><span class="nav-text">Waste</span></a>
            </li>
            <li class="nav-item fonte">
              <a class="nav-link js-scroll-trigger fonte" href="job.php"><span class="nav-text">Jobs</span></a>
            </li>
           <li class="nav-item fonte">
              <a class="nav-link js-scroll-trigger fonte" href="sell.php"><span class="nav-text">Sell Crop</span></a>
            </li>
            <li class="nav-item fonte">
              <a class="nav-link js-scroll-trigger fonte" href="buy.php"><span class="nav-text">Buy Crop</span></a>
            </li>
            <li class="nav-item fonte">
              <a class="nav-link js-scroll-trigger fonte" href="donate.php"><span class="nav-text">Donate</span></a>
            </li>
            <li class="nav-item fonte">
              <a class="nav-link js-scroll-trigger fonte" href="contact.php"><span class="nav-text">Contact</span></a>
            </li>
            <li class="nav-item fonte">
              <?php

                  if(!empty($_SESSION['name']) OR !empty($_SESSION['vid'])) {

                      echo "<form method='post'><button class='logout' name='logout'>LOG OUT</button></form>";

                  }

              ?>
            </li>
          </ul>
          </form>
        </div>
      </div>
    </nav>

    <header class="masthead fonte" style="min-height: 700px;">
      
        <br><br>
        <div class="alert alert-danger fonte" role="alert" <?php if($ver_err=='') { echo "style='display: none'"; } ?>>
            <?php echo $ver_err; ?>
        </div>
        <div class="alert alert-success alert-dismissible fade show fonte" role="alert" <?php if($success=='') { echo "style='display: none'"; } ?>>
          <button type="button" class="close fonte" data-dismiss="alert fonte" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?php echo $success; ?>
        </div>
        <div class="alert alert-danger alert-dismissible fade show fonte" role="alert" <?php if($error=='') { echo "style='display: none'"; } ?>>
          <button type="button" class="close fonte" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?php echo $error; ?>
        </div>
        <br>

        <?php

              if(!empty($_SESSION['name']) OR !empty($_SESSION['vid'])) {

                  $query = "SELECT * FROM sign_village WHERE mobile='".mysqli_real_escape_string($link, $_SESSION['mobile'])."'";

                  if(mysqli_num_rows(mysqli_query($link, $query))>0) {

                      if($result = mysqli_query($link, $query)) {

                          while($row = mysqli_fetch_array($result)) {

                              echo "<p>Name:".$row['name']."</p>";
                              echo "<p>Mobile: ".$row['mobile']."</p>";
                              echo "<p>Email: ".$row['email']."</p>";
                              echo "<p>Village: ".$row['vname']."</p>";
                               echo "<p>Adhaar: ".$row['adharno']."</p>";

                          }

                      }

                  }

                  $query = "SELECT * FROM sign_teacher WHERE mobile='".mysqli_real_escape_string($link, $_SESSION['mobile'])."'";

                  if(mysqli_num_rows(mysqli_query($link, $query))>0) {

                      if($result = mysqli_query($link, $query)) {

                          while($row = mysqli_fetch_array($result)) {
                          
                              echo "<p><strong>Name</strong>: ".$row['name']."</p>";
                              echo "<p><strong>Mobile</strong>: ".$row['mobile']."</p>";
                              echo "<p><strong>Email</strong>: ".$row['email']."</p>";
                              echo "<p><strong>Address</strong>: ".$row['address']."</p>";
                              echo "<p><strong>Adhaar</strong>: ".$row['adharno']."</p>";
                            
                          }

                      }

                  }

                  $query = "SELECT * FROM village WHERE vid='".mysqli_real_escape_string($link, $_SESSION['vid'])."'";

                  if(mysqli_num_rows(mysqli_query($link, $query))>0) {

                      if($result = mysqli_query($link, $query)) {

                          while($row = mysqli_fetch_array($result)) {

                              echo "<p>Id: ".$row['vid']."</p>";
                              echo "<p>Name: ".$row['name']."</p>";
                              echo "<p>District: ".$row['district']."</p>";
                              echo "<p>State: ".$row['state']."</p>";
                              echo "<p>Pincode: ".$row['pincode']."</p>";

                          }

                      }

                  }

              }

        ?>
        <!--Login--> 
        <div <?php if($_SESSION['name']!='' OR $_SESSION['vid']!='') { echo "style='display:none;'"; } ?>>
          <button class="bttn-unite bttn-primary bttn-sm fonte" id="logButton">LOG IN</button>
          <button class="bttn-unite bttn-primary bttn-sm fonte" style="margin-left: 20px;" id="signButton">SIGN UP</button>
          <br><br>
          <!--Login-->
          <form method="post">
            <div id="logIn">
            <div id="innerLog">
              <div class="input-group input-group-md login fonte">
                <span class="input-group-addon fonte" id="sizing-addon1"><i class="fa fa-phone fonte fonte" aria-hidden="true"></i></span>
                <input type="text" class="form-control fonte" placeholder="Enter mobile number" name="mobile" onkeypress='return validateQty(event);'>
              </div>
              <br>
              <div class="input-group input-group-md login fonte">
                <span class="input-group-addon fonte" id="sizing-addon1"><i class="fa fa-key fonte" aria-hidden="true"></i></span>
                <input type="password" class="form-control fonte" placeholder="Enter password" name="password">
              </div>
            </div>
              <br>
              <div id="outerLog" style="display: none;">
                <div class="input-group input-group-md login fonte">
                        <span class="input-group-addon fonte" id="sizing-addon1"><i class="fa fa-phone fonte" aria-hidden="true"></i></span>
                        <input type="text" class="form-control fonte" placeholder="Enter email address" name="forgotMail">
                </div>
                <br>
                <button type="submit" class="bttn-unite bttn-primary bttn-sm fonte" name="forgot">FORGOT PASSWORD</button>
            </div>
                <br>
              <button type="button" class="bttn-unite bttn-primary bttn-sm fonte" id="forgot">FORGOT PASSWORD</button>
                
              <button type="submit" class="bttn-unite bttn-primary bttn-sm fonte" name="login" id="login">SUBMIT</button>
              <br><br>
          </form>
          <form method="post">
              <div class="input-group input-group-md login fonte">
                <span class="input-group-addon" id="sizing-addon1 fonte"><i class="fa fa-id-badge fonte" aria-hidden="true"></i></span>

                <input list="village" name="vid" class="form-control fonte" placeholder="Enter village id">

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

              </div>
              <br>
              <button type="submit" class="bttn-unite bttn-primary bttn-sm fonte" name="village">LOGIN AS VILLAGE</button>
            </div>
          </form>
          <!--Signup-->
          <form method="post" enctype="multipart/form-data"> 
            <div id="signUp" style="display: none;">
              <div class="input-group input-group-md login fonte">
                <span class="input-group-addon fonte" id="sizing-addon1"><i class="fa fa-user" fonte aria-hidden="true"></i></span>
                <input type="text" class="form-control fonte" placeholder="Enter name" name="name">
              </div>
              <br>
              <div class="input-group input-group-md login fonte">
                <span class="input-group-addon fonte" id="sizing-addon1"><i class="fa fa-phone fonte" aria-hidden="true"></i></span>
                <input type="text" class="form-control fonte" placeholder="Enter mobile number" name="mobile" onkeypress='return validateQty(event);'>
              </div> 
              <br>
              <div class="input-group input-group-md login fonte">
                <span class="input-group-addon fonte" id="sizing-addon1"><i class="fa fa-key fonte" aria-hidden="true"></i></span>
                <input type="password" class="form-control fonte" placeholder="Enter password" name="password">
              </div>
              <br>
              <div class="input-group input-group-md login fonte">
                <span class="input-group-addon fonte" id="sizing-addon1"><i class="fa fa-key fonte" aria-hidden="true"></i></span>
                <input type="password" class="form-control fonte" placeholder="Confirm password" name="cpassword">
              </div>
              <br>
              <div class="input-group input-group-md login fonte">
                <span class="input-group-addon fonte" id="sizing-addon1"><i class="fa fa-address-card fonte" aria-hidden="true"></i></span>
                <input type="text" class="form-control fonte" placeholder="Enter adhaar number" name="adhar" onkeypress='return validateQty(event);'>
              </div>
              <button type="button" class="bttn-jelly bttn-primary bttn-sm fonte" id="Teacher" style="margin-top: 10px;" name="teacher">TEACHER</button>
              <button type="button" class="bttn-jelly bttn-primary bttn-sm fonte" style="margin-left: 20px;" id="Villager" name="villager">VILLAGER</button>
              <br><br>
              <div id="teacher" style="display: none;">
                <div class="input-group input-group-md login fonte">
                  <span class="input-group-addon fonte" id="sizing-addon1"><i class="fa fa-envelope fonte" aria-hidden="true"></i></span>
                  <input type="text" class="form-control fonte" placeholder="Enter email" name="email">
                </div>
                <br>
                <div class="input-group input-group-md login fonte">
                  <span class="input-group-addon fonte" id="sizing-addon1"><i class="fa fa-address-book fonte" aria-hidden="true"></i></span>
                  <input type="text" class="form-control fonte" placeholder="Enter address" name="address">
                </div>
                <br>
                <label for="pdfFile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload your resume</label>
                <input type="file" id="pdfFile" name="pdf" accept="application/pdf">
              </div>
              <div id="villager" style="display: none;">
                <div class="input-group input-group-md login fonte">
                  <span class="input-group-addon fonte" id="sizing-addon1"><i class="fa fa-location-arrow fonte" aria-hidden="true"></i></span>
                  <input list="vname" name="villagename" class="form-control fonte" placeholder="Enter village id">

                  <datalist id="vname">

                  <?php
                    $query = "SELECT * FROM `village`";

                    if($result = mysqli_query($link, $query)) {

                      while($row = mysqli_fetch_array($result)) {

                          echo "<option value='".mysqli_real_escape_string($link, $row['vid'])."'>'".mysqli_real_escape_string($link, $row['name'])."'</option>";

                      }

                    }
                    
                  ?>

                  </datalist>
                </div>
                <br>
                <div class="input-group input-group-md login fonte">
                  <span class="input-group-addon fonte" id="sizing-addon1"><i class="fa fa-envelope fonte" aria-hidden="true"></i></span>
                  <input type="text" class="form-control fonte" placeholder="Enter email" name="vemail">
                </div>
              </div>
              <br>
              <button class="bttn-unite bttn-primary bttn-sm fonte" name="signup">SUBMIT</button>
            </div>
          </form>
        </div>
    </header>

    <div style="background-color: #D6C299; opacity: 0.8;">
        <h2 style="margin-left:44%">Report an Issue</h2>
        <select id="issue" name="issue" class='report'>
            <option value="1">--Select an Option--</option>
            <option value="health">Health</option>
            <option value="education">Education</option>
            <option value="agri">Agriculture</option>
            <option value="power">Power</option>
            <option value="waste">Waste</option>
            <option value="job">Jobs</option>
            <option value="donate">Donate</option>
            <option value="other">Other</option>
        </select>
        <br><br>
        <select id="subissue1" style="display: none;" class='report'>
            <option value="1">--Select an Option--</option>
            <option value="info">Information</option>
            <option value="map">Map</option>
            <option value="form">Form</option>
        </select>
        <select id="subissue2" style="display: none;" class='report'>
            <option value="1">--Select an Option--</option>
            <option value="teacher">Request a teacher</option>
        </select>
        <select id="subissue3" style="display: none;" class='report'>
            <option value="1">--Select an Option--</option>
            <option value="irrigation">Irrigation Techniques</option>
            <option value="rainwater">Rain Water Harvesting</option>
            <option value="fertilizer">Fertilizer</option>
        </select>
         <select id="subissue4" style="display: none;" class='report'>
            <option value="1">--Select an Option--</option>
            <option value="biogas">Bio Gas</option>
            <option value="solar">Solar</option>
            <option value="micro">Micro Hydro</option>
            <option value="mini">Mini Grid</option>
        </select>
         <select id="subissue5" style="display: none;" class='report'>
            <option value="1">--Select an Option--</option>
            <option value="itoilet.php">Improved Toilets</option>
            <option value="solidwaste.php">Solid Waste Management</option>
            <option value="urban.php">Urban Waste Management</option>
            <option value="home.php">Home Composting</option>
            <option value="plasticre.php">Plastic Recycling</option>
        </select>
         <select id="subissue6" style="display: none;" class='report'>
            <option value="1">--Select an Option--</option>
            <option value="job">Jobs</option>
        </select>
         <select id="subissue7" style="display: none;" class='report'>
            <option value="1">--Select an Option--</option>
            <option value="paytm">Paytm</option>
            <option value="phonepe">Phonepe</option>
        </select>
        <br><br>
        <textarea placeholder="Describe your problem" id="describe" class='report'></textarea>
        <br><br>
        <button class="bttn-unite bttn-md bttn-primary" id="submit" type="button">Submit</button>
        <div style="display: none;" id="suggestion"> 
            <p>The following links can help you.</p>  
            <p id="text"></p>
        </div>

    </div>

    <script type="text/javascript">

        function hidden(current){
              for(var i=1;i<=7;i++){
                  if(i!=current){
                      $("#subissue"+i).hide();
                  }
              }


            }
            var subtype = 0;
            $("#issue").change(function() {
               var issue=$("#issue").val();
               if(issue=="health") {
                    $("#subissue1").show();
                    hidden(1);
                    subtype=1;
               } else if(issue=="education"){
                   $("#subissue2").show();
                   hidden(2);
                   subtype=2;
               }else if(issue=="agri"){
                   $("#subissue3").show();
                   hidden(3);
                   subtype=3;
               }else if(issue=="power"){
                   $("#subissue4").show();
                   hidden(4);
                   subtype=4;
               }else if(issue=="waste"){
                   $("#subissue5").show();
                   hidden(5);
                   subtype=5;
               }else if(issue=="job"){
                   $("#subissue6").show();
                   hidden(6);
                   subtype=6;
               }else if(issue=="donate"){
                   $("#subissue7").show();
                   hidden(7);
                   subtype=7;
               }
            });

            $("#submit").click(function() {
                var issue = $("#issue").val();
                var subissue = $("#subissue"+subtype).val();
                if(issue == "waste") {

                    $("#suggestion").show();
                    link = subissue;
                    link = "<a href='"+subissue+"' target='_blank'>"+link+"</a>";
                    $("#text").html(link);

                } else {

                    var link = issue+".php#"+subissue;
                    $("#suggestion").show();
                    link = "<a href='"+link+"' target='_blank'>"+link+"</a>";
                    $("#text").html(link);

                }
            });

        $("#forgot").click(function(){

            $("#innerLog").hide();
            $("#login").hide();
            $("#outerLog").show();
            $("#forgot").hide();

        });

        //Get Number only
        function validateQty(event) {
            var key = window.event ? event.keyCode : event.which;

        if (event.keyCode == 8 || event.keyCode == 46
        || event.keyCode == 37 || event.keyCode == 39) {
            return true;
        }
        else if ( key < 48 || key > 57 ) {
            return false;
        }
        else return true;
        };

        $(".regLog").mouseover(function() {

          $(this).css("background-color","#CFFFFF");

        });

        $(".regLog").mouseleave(function() {

           $(".regLog").css("background-color","white");

        });

        $("#signButton").click(function(){

            $("#logIn").hide();
            $("#signUp").show();

        });

        $("#logButton").click(function(){

            $("#logIn").show();
            $("#signUp").hide();

        });

        $("#Teacher").click(function() {

          $("#teacher").show();
          $("#villager").hide();

        });

        $("#Villager").click(function() {

          $("#villager").show();
          $("#teacher").hide();

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
