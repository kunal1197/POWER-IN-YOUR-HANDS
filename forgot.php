<?php

    $link = mysqli_connect("shareddb1c.hosting.stackcp.net","power-in-hand-313640b8","password98@","power-in-hand-313640b8");

    $error="";

    $success = 0;

    if(isset($_GET['email']) AND !empty($_GET['email'])) {

        if(isset($_POST['submit'])) {

            if($_POST['pass']!='' AND $_POST['cpass']!='') {

                if($_POST['pass'] != $_POST['cpass']) {

                    $error .= "The passwords do not match.";

                } else {

                    $query = "SELECT * FROM `sign_teacher` WHERE email='".mysqli_real_escape_string($link, $_GET['email'])."'";

                    $query1 = "SELECT * FROM `sign_village` WHERE email='".mysqli_real_escape_string($link, $_GET['email'])."'";

                    if(mysqli_num_rows(mysqli_query($link, $query))>0) {

                        $row = mysqli_fetch_array(mysqli_query($link, $query));

                        $id = $row['id'];

                        $pass = $row['password'];

                        if(hash('sha512',$_POST['pass'])==$password) {

                            $error.="New password and old password cannot be same!";

                        } else {

                            $query = "UPDATE `sign_teacher` SET password='".mysqli_real_escape_string($link, hash('sha512',$_POST['pass']))."' WHERE
                            id='".$id."'";

                            $success = 1;   

                        }

                    } else if(mysqli_num_rows(mysqli_query($link, $query1))) {

                        $row = mysqli_fetch_array(mysqli_query($link, $query1));

                        $id = $row['id'];

                        $password = $row['password'];

                        if(hash('sha512',$_POST['pass'])==$password) {

                            $error.="New password and old password cannot be same!";

                        } else {

                            $query = "UPDATE `sign_village` SET password='".mysqli_real_escape_string($link, hash('sha512',$_POST['pass']))."' WHERE
                            id='".$id."'";

                            $success = 1;

                        }

                    } 

                    if($success==1) {

                        echo "<script> alert('Password changed successfully!'); </script>";

                       // echo "<script> location.href='index.php'; </script>";

                        $to = $_GET['email'];
                        $subject = "Password Changed";
                        $message = '
                        Your password has been changed successfully!

                        Login with the following credentials to continue our services.

                        ------------------------
                        Username: '.$_GET['email'].'
                        Password: '.$_POST['pass'].'
                        ------------------------

                        This is a system generated mail. Do not reply. 
                        ';
                        $headers = 'From:noreply@powerinhand.com' . "\r\n"; 
                        mail($to, $subject, $message, $headers);

                    }

                }

            }

        }

    }

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<style>

    .pass {

        width: 25%;
        margin: 10px;
        padding: 5px 10px;
        border: 3px solid #FF9999;
        border-radius: 10px 10px 10px 10px;

    }

    #submit {

        margin: 10px;
        padding: 10px;
        border: none;
        background-color: #FF7373;
        border-radius: 20px 20px 20px 20px;
        font-weight: bold;
        color: #FFFFFF;
        font-size: 100%;
    }

    .error {

        width: 50%;
        margin: 0 auto;

    }

</style>

<br>
<div class="alert alert-danger alert-dismissible fade show error" role="alert" <?php if($error=='') { echo 'style="display: none;"'; } ?>>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <?php echo $error; ?>
</div>
<br>

<form method="post">

    <input type="password" placeholder="Enter new password" name="pass" class="pass">
    <br>
    <input type="password" placeholder="Confirm password" name="cpass" class="pass">
    <br>
    <button id="submit" name="submit">SUBMIT</button>

</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
