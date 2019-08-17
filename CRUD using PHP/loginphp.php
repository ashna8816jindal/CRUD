<?php 
	$usern = $_POST["username"];
	$pswd = $_POST["password"];
	if(!empty($usern) ||!empty($pswd))
	{
		$host="localhost";
		$username="root";
		$password="";
		$dbname="users_account";
		$conn= new mysqli($host, $username, $password, $dbname);
		if($conn->connect_error){
			echo"connection error";
			die();
		}
		else{
			$cmd1= mysqli_query($conn, "SELECT password FROM users WHERE username='$usern';");
			
			if($cmd1){
				$row = mysqli_fetch_assoc($cmd1);
			    $r= $row["password"];
			    print_r($r);
				if($r==$pswd){
					echo "<a href = 'index.html'> login successful </a>";
				}
				else{
					echo "invalid username or password";
				}

			}
			else{
				echo "query mistake";
			}
		}
	}else{
		echo "fields cannot be empty";
	}


 ?>/