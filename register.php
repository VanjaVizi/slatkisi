<?php
    	require 'config.php';
       
    
     
        if(isset($_POST["register"])){ 
            $email = $_POST["emailR"];
            $password = $_POST["passwordR"];
            $name= $_POST["nameR"];
            $phone= $_POST["phoneR"];
            $bday= $_POST["birthdayR"];

           
            
         
            $result= $conn->query("Insert into user(email,password,name,phone,birthdate) values('$email','$password','$name',' $phone','$bday')");
                
            
            if ($result){
                echo '<script>alert("Uspesno")</script>';
                 
                 header('Location: index.php');
                 
            }else{
                echo '<script>alert("Neuspesna registracija")</script>';
            }
        }
    




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Register</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="nameR" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="birthdayR"required>
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                         
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="emailR" id="emailR" onblur="proveri(document.getElementById('emailR').value)"   required>
                        </div>
                        <div  id="user" style="color:white">Da li je dobar email</div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phoneR"required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="passwordR"required>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" id="register" name="register" >Submit</button>
                        </div>
                        <br><br>
                        <p><a href="index.php" style="text-decoration: none;color: white;">I already have an account!</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="js/provera.js"></script>


</body> 

</html>
<!-- end document-->