<?php

include("db_config.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// else{
//     echo "connect successfully";
// }


//admin table create
// $adminTable = "CREATE TABLE `admin` (
//     `id` INT AUTO_INCREMENT PRIMARY KEY,
//     `username` VARCHAR(50) NOT NULL,
//     `password` VARCHAR(255) NOT NULL
// )";
// if($conn->query($adminTable)){
//         echo "Table create successfully";
// }
// else{
//     echo "Error creating table: " . $conn->error;
// }
// $admin="admin";
// $password="123456";
// $sql = "INSERT INTO `admin` (`username`, `password`) VALUES ('".$_POST["admin"]."', '".$_POST["password"]."')";

// if($conn->query($sql)){
//     echo "insert successfully";
// }
// else{
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$dbAdmin;
$dbpass;

$sql = "select * from `admin`";

//echo $sql;

if ($result = $conn->query($sql)) {
  //echo "Query executed successfully";
}
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $dbAdmin=$row["username"];
      $dbpass=$row["password"];
    }
}

session_start();

// // Hard-coded admin credentials
// $adminUsername = "admin";
// $adminPassword = "123456";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $dbAdmin && $password == $dbpass) {
        $_SESSION["admin"] = true;
        header("Location: contact-list.php");
    } else {
        echo "<script>alert('Invalid username or password');</script>";
        header("Location:admin.html");
    }
}
?>
