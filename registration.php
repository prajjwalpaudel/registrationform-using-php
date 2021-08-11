<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>user registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php
	if(isset($_POST['create'])){
		$firstname= $_POST['firstname'];
		$lastname= $_POST['lastname'];
		$email= $_POST['email'];
		$phonenumber= $_POST['phonenumber'];
		$password= $_POST['password'];
         
         $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password) VALUES(?,?,?,?,?)";
         $stmtinsert = $db->prepare($sql);
         $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]); 
		if($result){
			echo'Registered.';
		}else{
			echo 'there were errors while saving the data.';
		}
	}
?>

<div>
	<form action="registration.php" method="post">
		<div class="container">

			<div class="row">
				<div class="col-sm-3">
			<h1>Registration</h1>
			<p>Fill the form </p>
			<hr class="mb-3">
			<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" name="create" value="Sign up">
				 </div>
				</div>
			</div>
				</form>
			</div>

</body>
</html>