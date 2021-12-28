<?php
    include '../config.php';
    include '../model/product.php';

        if(isset($_POST['deleteid'])){
               $result=  Product::deleteProduct($_POST['deleteid'],$conn);

               if($result){
                   echo 'Success';
               }else{
                   echo 'Failed';
               }
            
                
         }


?>