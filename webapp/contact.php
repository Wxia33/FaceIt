<html>
<body>
<?php 

if (isset($_POST['name'])) {
    $name = $_POST['name'];
} else {
	//change it to reflect to UI. 
	throw new Exception("Form must be filled");
}


if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
	//change it to reflect to UI. 
	throw new Exception("Form must be filled");
}

if (isset($_POST['message'])) {
    $msg = $_POST['message'];
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
    // echo "helloworld";

	//Create connection
	$conn = mysqli_connect($dbhost, $username, $password, $dbname, 3306);
    // echo "hello";
	// Check connection
	if (mysqli_connect_errno()) {

    	echo "failed";

	}else{
        echo "connected successfully";

	}


    echo $email;
    echo $msg;

    $sql1 = "INSERT INTO contact(name, email, msg) Values ('";
    $sql2 = $name;
    $sql3 = "','";
    $sql4 = $email;
    $sql5 = "','";
    $sql6 = $msg;
    $sql7 =  "')";
    $sql = $sql1.$sql2.$sql3.$sql4.$sql5.$sql6.$sql7;
    echo $sql;
    mysqli_query($conn, $sql);
    header("location:thankyou.html");
	// $sql = "INSERT INTO contact(name, email, msg) Values ('".$name."','".$email."','".$msg"')";

	// $result = mysqli_query($conn, $sql);
	// header("location:thankyou.html");
	// $count = mysqli_num_rows($result);

	// // Associative array
	// $row=mysqli_fetch_assoc($result);
	// printf ("%s (%s)\n",$row["id"],$row["email"]);

	mysqli_close($conn);
	}




?>
</body>
</html>