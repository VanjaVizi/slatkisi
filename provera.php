<?php

    include "config.php";
     
    if (!isset ($_GET["emailR"])){
        
         echo "Parametar email nije prosleđen!";
    } else {
        $email=$_GET["emailR"];


   
        $rezultat = $conn->query("SELECT * FROM user WHERE email='$email'");
        if ($rezultat->num_rows!=0){
            echo "0";
        } else {
            echo "1";
        }
     
    }
?>
