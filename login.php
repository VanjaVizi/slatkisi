<?php

	require 'config.php';
 


	session_start();
	if(isset($_POST["login"])){ 
		$email = $_POST["email"];
		$password = $_POST["password"];
	 
		$result= $conn->query("select * from user where email='$email' and password='$password'");
         //$id = User::getIdByEmail($user,$conn);
		// $_SESSION["currentUser"] = $id;
		 
		if(mysqli_num_rows($result) > 0){
			
		 
			
			echo '<script>alert("USPESNO")</script>';
			header('Location: home.php');
		}else{
			echo '<script>alert("Wrong credentials")</script>';
		}
	}

?>