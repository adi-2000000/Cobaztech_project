<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Perform database connection and query here
    $servername = "localhost"; // Replace with your database server
    $dbUsername = "root"; // Replace with your database username
    $dbPassword = ""; // Replace with your database password
    $dbName = "test"; // Replace with your database name
    
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Query the database to check if the username exists
    $query = "SELECT name, password FROM service_user WHERE name = '$username'";
    $result = $conn->query($query);
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row["password"];
        
        
        // Verify the password
        if (password_verify($password, $storedPassword)) {
            // Password is correct, set the userloggedin session variable
            $_SESSION["userloggedin"] = true;
                    $_SESSION["name"] = $row["name"]; // Store the user's name
                           $_SESSION["email"] = $row["email"]; // Store the user's name

            header("Location: index.php"); // Redirect to the index page or wherever you want
            exit();
        } else {
            // Incorrect password
            echo "Incorrect password";
        }
    } else {
        // Username not found
        echo "Username not found";
    }
    
    $conn->close();
}
?>
