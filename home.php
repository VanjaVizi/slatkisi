<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slatkisi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
   <style>
        
        /* Modify the background color navbara */
         
        .navbar-custom {
            background-color:  #a18cd1;
        }
        /* Modify brand and text color navbara */
         
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            color: Black;
        }

    </style>
</head>
<body style="background: linear-gradient(to top, #fbc2eb 0%, #a18cd1 100%);">
    <nav class="navbar navbar-custom"  >
        <a class="navbar-brand" href="#">
            <img src="images/bombona.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Poslasticarnica <strong> <i>
                Slatkisi
            </strong></i>
        </a> 
        <div>
            <a class="nav-link" href="dodajSlatkis.php" style="color:black;text-decoration: none;float:left"><strong>Dodaj novi slatkis</strong> </a>
            <a   class="nav-link" href="logout.php" style="color:black;text-decoration: none;float:right">Odjava</a>
        </div>
    
    </nav>
 
   <div class="products">
    <div id="products" name="products">
            <?php include "productCards.php"; ?>
            
        </div>
    </div> 






    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
     
   
     <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="js/main.js"></script>
</body>
</html>