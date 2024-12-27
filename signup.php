<?php
	require_once 'dbconf.php';
	function AddData($connect,$email,$password){
		try {
            $hashed_Password = password_hash($password, PASSWORD_DEFAULT);
            
		
			$sql = "INSERT INTO users (email,password_hash) VALUES('$email','$hashed_Password')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				//  echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../login.php');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
	
		$email = $_POST['email'];
		$Password = $_POST['password'];
		AddData($connect,$email,$Password);
	}
	

	?>