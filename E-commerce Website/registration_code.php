<!--
Here, we write code for registration.
-->
<?php
include 'connection.php';
$conn = OpenConnection();
#$fname = $lname = $email = $password = $pwd = '';
#(First Name, Last Name, email, password)
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM User WHERE email='$email'";
$outcome = mysqli_query($conn, $sql);
if(mysqli_num_rows($outcome) > 0){
	echo "
	<script>
	alert('Username is already taken, please register with another email');
	window.location.href = 'Register.html';
	</script>
	";
}
else{
	$sql = "INSERT INTO User  VALUES ('$fname','$lname','$email','$password')";
	$result = mysqli_query($conn, $sql); 
	if($result)
	{
		echo 
		" <script>
		alert('new recorder has been successfully saved');
		window.location.href = 'Home.html';
		</script>";
	}
	else
	{
		echo "Error :".$sql;
	}
}
?>