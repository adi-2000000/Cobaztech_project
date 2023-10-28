<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    
    // Hash the password for security (use appropriate hashing and salting)
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
    // Insert data into the 'service_user' table
    $servername = "localhost"; // Replace with your database server
    $dbUsername = "root"; // Replace with your database username
    $dbPassword = ""; // Replace with your database password
    $dbName = "test"; // Replace with your database name
    
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO service_user (name, email, password, phone) VALUES ('$username', '$email', '$hashedPassword', '$phone')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
header("Location: index.php#loginModal");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
