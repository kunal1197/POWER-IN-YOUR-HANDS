<?php

    $link = mysqli_connect("shareddb1c.hosting.stackcp.net","power-in-hand-313640b8","password98@","power-in-hand-313640b8");

    $query = "SELECT * FROM `sign_teacher`";

    $i=0;

    if($result = mysqli_query($link, $query)) {

        while($row = mysqli_fetch_array($result)) {

            if($i%2==0) {

                echo "<div style='float: left;'>";
                echo '<embed src="data:application/pdf;base64,' . base64_encode($row['resume']) . '" width="500" height="500"><br><br>';
                echo "Id: ".$row['id'].", Email id: ".$row['email']."<br><br>";
                echo "</div>";

            } else {

                echo "<div style='float: right;'>";
                echo '<embed src="data:application/pdf;base64,' . base64_encode($row['resume']) . '" width="500" height="500" ><br><br>';
                echo "Id: ".$row['id'].", Email id: ".$row['email']."<br><br>";
                echo "</div>";

            }

            $i++;

        }

    }

?>