<html>
<?php

    include("databas.php");
    $namn = $_POST["namn"];
    $ort = $_POST["ort"];
    $mail = $_POST["mail"];
    $personNr = $_POST["personNr"];

    $sql = "INSERT INTO lista (namn, ort, mail, personNr)VALUES('$namn','$ort','$mail','$personNr')";

    if($conn->query($sql) === TRUE){  ?>
        <script>
            alert("Klart");
            window.location.replace("http://localhost/omval/folkval");
        </script>
  <?php
    }
    else{
      echo "Okej";
    }

 ?>
 </html>
