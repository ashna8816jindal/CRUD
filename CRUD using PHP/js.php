<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> <form action="signupphp.php" method="post">
	Username <input type="text" name="username"><br>
	Name <input type="text" name="name"> <br>
	Password <input type="password" id="pswd1" name="password1"><br>
	Confirm Password <input type="password" id="pswd2" name="password2"> <br>
	<input type="submit" value="signup" onclick = "valid()" > <br>
	Already a user? <a href="new2.php">login</a>
</form>
<script type="text/javascript">
	function valid(){
	var	psw1 = document.getElementById('pswd1').value;
	var psw2 = document.getElementById('pswd2').value;
	if(psw1==psw2){
		alert("Welcome!");
	}
	else{

		window.location.reload();
		window.write("helloo!!!!");
		alert("Your passwords entered should be same");
	}
}
</script>
</body>
</html>
