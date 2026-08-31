<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mars";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES (?,?,?)";

$stmt=mysqli_prepare($conn, $sql);
$firstName="mr.";
$lastName="meow";
$email="meow@aiub.edu";
mysqli_stmt_bind_param($stmt, 'sss',$firstName,$lastName,$email);

if (mysqli_stmt_execute($stmt)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>