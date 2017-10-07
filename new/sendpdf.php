<?php

   $link = mysqli_connect("shareddb1c.hosting.stackcp.net","power-in-hand-313640b8","password98@","power-in-hand-313640b8");
   if(isset($_POST['submit'])) {

        $pdfName = mysqli_real_escape_string($link, $_FILES['pdf']['name']);
        $pdfData = mysqli_real_escape_string($link, file_get_contents($_FILES['pdf']['tmp_name']));
        $pdfType = mysqli_real_escape_string($link, $_FILES['pdf']['type']);
        echo $pdfType;

   }

?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="pdf" accept="application/pdf">
    <button name="submit">Submit</button>
</form>