<?php
include 'db_connection.php';
$conn = OpenCon();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $mconn->connect_error);
}

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }

//getting id from url
$bookingID = $_GET['bookingID'];
$driverPhone = $_SESSION['loginUser'];
 
//selecting data associated with this particular id
$result = mysqli_query($conn, "UPDATE booking SET pickupStatus='Picked', driverPhone='$driverPhone' WHERE bookingID=$bookingID");
 
$conn->close();

?>
<html>
<body>
	<h1>Heading to your location</h1>
	</body>
</html>
