<?php
include '../config.php';
include '../model/product.php';

if (isset($_POST['nameCE'])) {  
 
    $idP = $_POST['hiddenID'];
    $name = $_POST['nameCE'];
    $description = $_POST['descriptionE'];
    $price = $_POST['priceE'];
    $cat = $_POST['categoryE'];


    if($_FILES["uploadfileE"]["name"]!=""){ //ovako znamo da korisnik nije nista uneo
       $filename = $_FILES["uploadfileE"]["name"];
      
       $tempname = $_FILES["uploadfileE"]["tmp_name"];    
       $folder = "../images/".$filename;
       move_uploaded_file($tempname, $folder);
   }else{
      
       //slika ostaje ono sto je i bila, ovaj podatak cemo citati iz skrivenog polja
       $filename = $_POST['hiddenSlika'];
      
   }

   $product = new Product($idP,$name,$description,$cat,$price,$filename);
   $status = Product::updateProduct($product,$conn);
   
    if($status){
                    
        echo 'Success';
    
        }else{
            echo 'Failed';
        }


   
}
?>