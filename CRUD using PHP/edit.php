<?php 
		/*include_once("displaytable.php"); */
/*		$user= $_POST["user"];
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
		$id = $_GET["id"];
		$cmd1="SELECT * FROM users where username= '$id';" ;
			$result=$conn->query($cmd1);
		
			while($res=$result->fetch_assoc())	
			{
			 echo $res["username"];
				$user=$res["username"];
				$name=$res["name"];
				$pswd=$res["password"];

			} 

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form method="post">
 		<TABLE>
            <tr> 
                <td>userame</td>
                <td><input type="text" name="usern" value="<?php echo $user;?>"></td>
            </tr>
            <tr> 
                <td>name</td>
                <td><input type="text" name="names" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
            	<td>password</td>
                <td><input type="text" name="paswrd" value="<?php echo $pswd;?>"></td>
            </tr>
            <tr>
               
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>			


<?php
/*
include_once("displaytable.php"); */
	/*	$user= $_POST["user"];
	$pswd = $_POST["password"];*/
	echo $user;
	if(!empty($user) ||!empty($pswd))
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
		else{
			echo "In else block";
			if(isset($_POST['update']))
			{
				echo "update block";
				$id=$_GET["id"];
				echo "new id: ";
				echo $id;
				$user= $_POST["usern"];
				$pswd = $_POST["paswrd"];
				$name = $_POST["names"];
				$update="UPDATE users SET name='$name', username='$user', password='$pswd' where username='$id'; ";
				$conn->query($update);
				header("Location: displaytable.php");
			}
				echo "outside if block";
		}
	}
 ?>