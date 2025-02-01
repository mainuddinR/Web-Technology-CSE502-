<?php
// Database connection details
include("db_config.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// else{
//     echo "Connected successfully";
// }

// Sanitize and validate inputs
$name = $_POST["name"] . "<br>";
$email = $_POST["email"] . "<br>";
$subject = $_POST["subject"] . "<br>";
$message = $_POST["message"] . "<br>";

//table create
// $sqlTable="CREATE TABLE `BSSE1472` (
//     `id` INT AUTO_INCREMENT PRIMARY KEY,
//     `name` VARCHAR(255) NOT NULL,
//     `email` VARCHAR(255) NOT NULL,
//     `subject` VARCHAR(255) NOT NULL,
//     `message` TEXT NOT NULL,
//     `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// )";
// if($conn->query($sqlTable)){
//         echo "Table create successfully";
// }
// else{
//     echo "Error creating table: " . $conn->error;
// }


// Insert data into database
$sql = "INSERT INTO `BSSE1472` (`name`, `email`, `subject`, `message`) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["subject"]."','".$_POST["message"]."')";
//,'$name', '$email', '$subject', '$message')";

if ($conn->query($sql)) {
   // echo "Form submitted successfully";
   echo "<script>alert('Form submitted successfully');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
include("contact.php");
?>


