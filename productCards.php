<?php
    include 'config.php';
    include 'model/product.php';
    $sviSlatkisi = Product::getAllProducts($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/styleProductCards.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <?php
        
            while ($row = $sviSlatkisi->fetch_array()):
               
        ?>
            <div class="card">
                <div class="card-header">
                     <img src="<?php echo 'images/'.$row['image']?>" >   
                </div>
                <div class="card-body">
                      <div class="tag tag-teal">   <?php echo $row['nameCat']?>   </div>  
                    <h4>  <?php echo $row['name']?>  </h4>
                    <p>  <?php echo $row['description']?>  </p>  
                    <?php $novaCena =  $row['price']  ?>
                    <?php $staraCena =  $novaCena*1.1;  ?>

                   <p style="font-size:20px;text-decoration:  line-through;margin:0">  <?php echo "   ".$staraCena."din" ?>  </p>   
                    <p style="font-size:20px;"> <strong>  Cena:      </strong><?php echo $novaCena."din" ?> </p>
                    
                    <form  method="post">
                        <button type="button" class="btn btn-custom" onclick="updateCandy(<?php echo   $row['id'];?>)" style="background-color:#47bcd4;"     >  <i class="fas fa-pencil-alt"></i></a> </button> 
                        <button type="button" class="btn btn-custom"  style="background-color:#a18cd1;"   ><i class="fas fa-trash" onclick="deleteProduct(<?php echo   $row['id'];?>)"></i></button>  
 
                    </form>
                </div> 
            </div>

        <?php endwhile;?>
    </div>




 







</body>
</html>