<?php 
		/*$user= $_POST["user"];
		$pswd = $_POST["password"];*/
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
			echo "connection establisheds";
			$id = $_GET["id"];
			$cmd1= "DELETE FROM users WHERE username='$id';";
			$conn->query($cmd1);
			header("Location:displaytable.php");
			echo "user deleted";
		}
 
 ?>