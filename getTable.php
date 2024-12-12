<?php
//set the db connection file
require_once 'dbconf.php';

try{
	//Query
	$sql = "SELECT * FROM users ";

	//execute the query
	$result = mysqli_query($connect,$sql);

	//check if data exists in the table
	if(mysqli_num_rows($result)>0){

		//fetch the data from rows
		while($row = mysqli_fetch_assoc($result)){
			print_r($row);
		}
	}
	else{
		echo "No result";
	}
}
catch(Exception $e){
	die($e->getMessage());
}
?>