<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

/* Center the form on the page */
.container {
    margin-top: 50px;
    height: 650px;
    width: 500px;
    border:2px solid;
}

/* Style the form header */
h2 {
    color: #007BFF; /* Header text color */
    
}

/* Style the form fields and labels */
.form-group {
    margin-bottom: 20px;
}

.form-control {
    border: 1px solid #ccc; /* Form input border */
    border-radius: 5px; /* Rounded corners */
}

label {
    font-weight: bold; /* Bold labels */
}

/* Style the radio buttons */
.form-check-label {
    font-weight: normal; /* Normal weight for radio button labels */
}

/* Style the submit button */
.btn-primary {
    background-color: #007BFF; /* Submit button background color */
    color: #fff; /* Submit button text color */
    border: none;
    border-radius: 5px;
}

.btn-primary:hover {
    background-color: #0056b3; /* Background color on hover */
}

/* Apply some padding to the form */
form {
    padding: 20px;
}

/* Add spacing between form elements */
.form-check {
    margin-top: 10px;
}

/* Style for success message */
.success-message {
    color: #28a745; /* Green color for success message */
}

/* Style for error message */
.error-message {
    color: #dc3545; /* Red color for error message */
}


    </style>
</head>
<body>

  <?php
session_start(); // Start the session

// ... (other code)

if (isset($_SESSION["userloggedin"]) && $_SESSION["userloggedin"] === true) {
    // User is logged in
    if (isset($_SESSION["name"])) {
        $usernam = $_SESSION["name"]; // Get the user's name from the session
                $email = $_SESSION["email"]; // Get the user's name from the session


        // Display the name in the navbar
       // echo "Welcome, $usernam!";
    } }
?>
   <?php
// Connect to the database (modify these settings according to your setup)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$PackageId = $_GET['id'];
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $payment = $_POST["payment"];
    $PackageId = $_GET['id'];


    // Retrieve selected package data (assuming you have a valid $PackageId)
    
    
    $sql = "SELECT * FROM packages WHERE package_id = $PackageId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Extract package details
        $orderID = mt_rand(100000, 999999);
        $packageName = $row["package_name"];
        $packageDescription = $row["description"];
        $packagePrice = $row["price"];
        $packageType = $row["type"];

        // Insert data into the "order" table
        $insertSql = "INSERT INTO orders (package_id, name, phone, email, address, payment, package_name, package_description, package_price, package_type,orderid)
            VALUES ($PackageId, '$name', '$phone', '$email', '$address', '$payment', '$packageName', '$packageDescription', $packagePrice, '$packageType','$orderID')";
        
        if ($conn->query($insertSql) === TRUE) {
            echo "Order placed successfully!";
    header("Location: invoice.php?order_id=$orderID");
        exit;
        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    } else {
        echo "Package not found.";
    }

    // Close the database connection
    $conn->close();
}
?>

<div class="container" >
<h2 style="text-align: center;">Order Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $PackageId; ?>" method="POST">
        <!-- Name -->
        <div class="form-group form-group-sm">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $usernam; ?>" required>
        </div>

        <!-- Phone -->
        <div class="form-group form-group-sm">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>

        <!-- Email -->
        <div class="form-group form-group-sm">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
        </div>

        <!-- Address -->
        <div class="form-group form-group-sm">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>

        <!-- Payment Options -->
        <div class="form-group form-group-sm">
            <label for="payment">Payment Options</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="onlinePayment" value="Online" required>
                <label class="form-check-label" for="onlinePayment">
                    Online Payment
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="offlinePayment" value="Offline" required>
                <label class="form-check-label" for="offlinePayment">
                    Offline Payment
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Place Order</button>
    </form>
</div>

<!-- Include Bootstrap JavaScript and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>