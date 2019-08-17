<?php 
if(isset($_POST["user"]))
	{$user= $_POST["user"];
	$pswd = $_POST["password"];
}
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
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1px">
		<tr>
			<th>Username</th>
			<th>Name</th>
			<th>Password</th>
			<th>update</th>

		</tr>

<?php 
			if($result->num_rows > 0)
			{
	
				while ($res= $result-> fetch_assoc()) {
?>				
					<tr>
						<td><?php echo $res["username"]; ?></td>
						<td><?php echo $res["name"]; ?></td>
						<td><?php echo $res["password"]; ?></td>
						<td><a href="delete.php?id=<?php echo $res["username"];?>">delete</a></td>
						<td> <a href="edit.php?id=<?php echo $res["username"];?>">eddit</a></td>
					</tr>
					
<?php 				}
				
			}else{
				echo "no results";
			}
		}
	}
?>
	</table>

</body>
</html>
	