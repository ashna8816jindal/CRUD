<?php 
		$usern= $_POST["username"];
		$name= $_POST["name"];
		$pswd1= $_POST["password1"];
		$pswd2= $_POST["password2"];
	if(!empty($usern) || !empty($name) || !empty($pswd1) || !empty($pswd2))
{
	
	$host="localhost";
	$username="root";
	$password="";
	$dbname= "users_account";
	$conn= new mysqli($host, $username, $password, $dbname);
	if($conn->connect_error){
		echo "error in connection";
		die();
	}
	else{
		$cmd= "INSERT INTO users(username, name, password) VALUES('$usern', '$name', md5('$pswd1'));";
		echo $cmd;
		$cmd1= mysqli_query($conn, "SELECT * FROM users WHERE username = '$usern'  ");
		$row = mysqli_fetch_assoc($cmd1);
		if(count($row)==0)
		{
		 	if($conn->query($cmd)){
			header("Location: http://localhost/ashna/new2.php");
			echo "values inserted";

			}
			else{
				echo "error in insertion";
			}
		}
		else
		{
			echo"username already used";
		}
	
 }
}
else 
{
	echo "fields should not be empty";
}

?>
