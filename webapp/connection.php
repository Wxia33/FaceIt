<html>
<body>
<?php 

if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
	//change it to reflect to UI. 
	throw new Exception("Form must be filled");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("location:wrongemail.html");
} else {

	// $servername = "localhost";
	// $username = "root";
	// $password = "1234";
	// $dbname = "emailaddress";

	// $servername = "webserver.clvxqblnnvau.us-west-2.rds.amazonaws.com";
	// $username = "webserver";
	// $password = "Eli13951430130!";
	// $dbname = "desentric";

	// // create connection 
	// $conn = mysqli_connect($servername, $username, $password, $dbname);
	// if (mysqli_connect_errno()) {
 //  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //  	} else {
 //  		echo "Success!";
 //  	}

  	$dbhost = "webserver.clvxqblnnvau.us-west-2.rds.amazonaws.com";
	$username = "webserver";
	$password = "Eli1123581321!";
	$dbname = "desentric";
    echo "helloworld";

	//Create connection
	$conn = mysqli_connect($dbhost, $username, $password, $dbname, 3306);
    echo "hello";
	// Check connection
	if (mysqli_connect_errno()) {

    	echo "failed";

	}else{
        echo "connected successfully";

	}



	$sql = "INSERT INTO email(email) Values ('".$email."')";

	$result = mysqli_query($conn, $sql);
	header("location:thankyou.html");
	// $count = mysqli_num_rows($result);

	// // Associative array
	// $row=mysqli_fetch_assoc($result);
	// printf ("%s (%s)\n",$row["id"],$row["email"]);

	mysqli_close($conn);
	}




?>
</body>
</html>