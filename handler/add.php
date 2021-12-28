<?php
    include '../config.php';
    include '../model/product.php';
   

    if ( isset($_POST['nameC']) && isset($_POST['description']) && isset($_POST['price'])) {
           
            $filename = $_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"];    
            $folder = "../images/".$filename;

        

            move_uploaded_file($tempname, $folder);

            $p = new Product(null,$_POST['nameC'],$_POST['description'],$_POST['category'],$_POST['price'], $filename);
  
       
            $status=Product::addProduct($p,$conn);
        
        
            
            if($status){
                
                echo 'Success';
                
            }else{
                echo 'Failed';
            }



      }
 




?>