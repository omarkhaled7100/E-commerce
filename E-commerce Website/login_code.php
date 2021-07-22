<!--
Here, we write code for login.
-->
<?php

include 'connection.php';
$conn = OpenConnection();

$email = $_POST['email'];
$password = $_POST['password'];
#mysqli_num_rows($result) == 0
$sql = "SELECT * FROM User WHERE email='$email' AND Password='$password'";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);


#echo "row count " . $rowCount;


if($rowCount){

	echo "<script>
	alert('This account is not registered!!');
	window.location.href='Register.html';
	</script>";
	
}
else{
	echo "<script>
	alert('Welcome!!');
	window.location.href='Home.html';
	</script>";
}

?>