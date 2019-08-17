<?php 
	session_start();
	$userid = $_POST["userid"];
	$pswd = $_POST["password"];

	if(!empty($userid) ||!empty($pswd))
	{
		$host="localhost";
		$username="root";
		$password="";
		$dbname="details";
		$conn= new mysqli($host, $username, $password, $dbname);
		if($conn->connect_error){
			echo"connection error";
			die();
		}
		else{

			
			/*$idd=$_SESSION["user_id"];*/
			$cmd1= mysqli_query($conn, "SELECT password FROM user_details WHERE id='$userid';");
			
			if($cmd1){

				$row = mysqli_fetch_assoc($cmd1);
			 /*   $r= $row["password_hash(string, PASSWORD_DEFAULT)ord"];*/
			 
			    print_r($r);

				if($r==$pswd){
					// echo "<a href = 'index.html'> login successful </a>";
				$_SESSION["user_id"]=$userid;
				$idd=$_SESSION["user_id"];
					/*echo "hellooo";*/	
				/*	header("location: ids.php");*/
				$cmd2="SELECT * FROM id_details" ;
			$result=$conn->query($cmd2);

			 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
	<form method="POST" action="ids.php">
	Search<input type="text" name="search">
	<input type="submit" name="submit">
	</form>	
	<table border="1px">
		<tr>
			<th>ID</th>
			<th>Userid</th>
			<th>Salary</th>
			<th>Email</th>

		</tr>
<!-- </body>
</html> -->



<?php 
		
			while($res=$result->fetch_assoc())	
			{ ?>


					<tr>
						<td><?php echo $res["id"]; ?></td>
						<td><?php echo $res["userid"]; ?></td>
						<td><?php echo $res["salary"]; ?></td>
						<td><?php echo $res["email"]; ?></td>
					</tr>
<?php 			
			/* echo $res["id"];
				$user=$res["userid"];
				$name=$res["salary"];
				$pswd=$res["phn_no"];*/
				}
			/*	if(isset($_POST["submit"])){
					$search=$_POST["search"];
					$ser= "SELECT * FROM id_details WHERE email LIKE'%$search%';";
					$res2= $conn->query($ser);
					while($res3=$res2->fetch_assoc()){
					echo $res3["id"];

					}
*/

				}
				/*else{
					echo "invalid username or password";
				}*/

			}
			else{
				echo "<br> Invalid userid or password";
			}
		}
	}/*else{
		echo "fields cannot be empty";
	}
*/


 ?>
 	</table>

</body>
</html>