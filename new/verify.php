<?php

    $link = mysqli_connect("shareddb1c.hosting.stackcp.net","power-in-hand-313640b8","password98@","power-in-hand-313640b8");

    if(isset($_GET['email']) && !empty($_GET['email'])) {

        if($_GET['stat']==0) {

            $query = "UPDATE `sign_teacher` SET verified=1 WHERE email ='".mysqli_real_escape_string($link, $_GET['email'])."'";

            mysqli_query($link, $query);

            echo "<script> alert('Email address verified!'); </script>";

            echo "<script> location.href='index.php' </script>";

        } else {


            $query = "UPDATE `sign_village` SET verified=1 WHERE email ='".mysqli_real_escape_string($link, $_GET['email'])."'";

            mysqli_query($link, $query);

            echo "<script> alert('Email address verified!'); </script>";

            echo "<script> location.href='index.php' </script>";

        }

    }

?>