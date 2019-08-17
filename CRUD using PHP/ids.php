	<?php 
	session_start();
	$idd=$_SESSION["user_id"];
		/*include_once("displaytable.php"); */
/*		$user= $_POST["user"];
	$pswd = $_POST["password"];*/
		$host="localhost";
		$username="root";
		$password="";
		$dbname="details";
		$conn= new mysqli($host, $username, $password, $dbname);
		if($conn->connect_error)
		{
			echo"connection error";
			die();
		}?>
		<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 

	<table border="1px">
		<tr>
			<th>ID</th>
			<th>Userid</th>
			<th>Salary</th>
			<th>Email</th>

		</tr>
</body>
</html>
			<?php if(isset($_POST["submit"])){
					$search=$_POST["search"];
					$ser= "SELECT * FROM id_details WHERE email LIKE'%$search%';";
					$res2= $conn->query($ser);
					while($res3=$res2->fetch_assoc()){?>
						<tr>
						<td><?php echo $res3["id"]; ?></td>
						<td><?php echo $res3["userid"]; ?></td>
						<td><?php echo $res3["salary"]; ?></td>
						<td><?php echo $res3["email"]; ?></td>
						</tr>
<?php 


					}
				}

		/*$id = $_GET["id"];
		echo $id;
		$cmd1="SELECT * FROM id_details where id= '$id';" ;
			$result=$conn->query($cmd1);
		
			while($res=$result->fetch_assoc())	
			{
			 echo $res["id"];
				$user=$res["username"];
				$name=$res["salary"];
				$pswd=$res["phnno"];

			} */
	?>
</table>

</body>
</html>