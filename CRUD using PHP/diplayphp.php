<?php 
	$user= $_POST["user"];
	$pswd = $_POST["password"];
	if(!empty($usern) ||!empty($pswd))
	{
		$host="localhost";
		$username="root";
		$password="";
		$dbname="users_account";
		$conn= new mysqli($host, $username, $password, $dbname);
		if($conn->connect_error)
		{
			echo"connection error";
			die();
		}
		else
		{	
			$cmd1= "select * from users";
			$result= $conn-> query($cmd1);
			if($result->num_rows > 0)
			{
				while ($res= $result-> fetch_assoc()) {
					echo "Username :  " .$res["username"]. "<br>","Name : " .$res["name"]. "<br>","Password : " .$res["password"]. 
					"<br> <br>"	;
				}
				
			}else{
				echo "no results";
			}
		}
	}
?>