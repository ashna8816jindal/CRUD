<?php 

	$usern = $_POST["username"];
	$email = $_POST["email"];
	$pswd = $_POST["password"];


	if(!empty($usern) || !empty($email) ||!empty($pswd)){
		$host="localhost";
		$username="root";
		$password="";
		$dbname="db";
		$conn= new mysqli($host, $username, $password, $dbname);
		if($conn->connect_error){
			echo "connect error";
			die();
		}
		else{
			$sql="insert into contact (username, email, password) values ('$usern', '$email', '$pswd');";
			if($conn->query($sql)){
				echo "values inserted";
			}
			else{
				echo "error";
			}
			$conn->close();

		}
	}
	else{
		echo "all fields should be filled";
	}

 ?>