<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

/* Center the content on the page */
.container {
    margin-top: 50px;
    text-align: center;
}

/* Style the invoice header */
h2 {
    background-color: #007BFF;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
}

/* Style the table */
.table {
    margin-top: 20px;
}

/* Style table headers */
th {
    background-color: #f2f2f2;
}

/* Style table rows */
td {
    background-color: #f9f9f9;
}

/* Style the buttons */
.btn-primary {
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    margin-right: 10px;
    display: inline-block;
}

.btn-primary:hover {
    background-color: #0056b3;
}

#goBackButton {
    margin-left: 10px;
}

/* Hide buttons when printing */
@media print {
    .btn-primary, #goBackButton {
        display: none;
    }
}


    </style>
</head>
<body>
    <div class="container">
        <h2>Invoice</h2>
        <?php

        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
        // Check if the order ID is provided as a query parameter
        if (isset($_GET['order_id'])) {
            // Retrieve order details from the database using the provided order ID
            $orderID = $_GET['order_id'];
            $sql = "SELECT * FROM orders WHERE orderid = $orderID";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>
        <table class="table">
            <tr>
                <th>Order ID</th>
                <td><?php echo $row['orderid']; ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo $row['name']; ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo $row['phone']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $row['address']; ?></td>
            </tr>
            <tr>
                <th>Payment Method</th>
                <td><?php echo $row['payment']; ?></td>
            </tr>
            <tr>
                <th>Package Name</th>
                <td><?php echo $row['package_name']; ?></td>
            </tr>
            <tr>
                <th>Package Description</th>
                <td><?php echo $row['package_description']; ?></td>
            </tr>
            <tr>
                <th>Package Price</th>
                <td>$<?php echo $row['package_price']; ?></td>
            </tr>
        </table>
        <?php
            } else {
                echo "Order not found.";
            }
        } else {
            echo "Order ID is missing.";
        }
        ?>
                <button class="btn btn-primary" onclick="printInvoice()">Print Invoice</button>

        <a href="thankyou.php" class="btn btn-primary" id="goBackButton">Complete Order</a>
    </div>

    
    
 <script>
        function printInvoice() {
            // Hide all buttons before printing
               const printButton = document.querySelector("button");
        const goBackButton = document.getElementById("goBackButton");
        
        printButton.style.display = "none";
        goBackButton.style.display = "none";

        // Call window.print()
        window.print();

        // Show the buttons again
        printButton.style.display = "block";
        goBackButton.style.display = "inline-block";
        }
    </script>
</body>

</html>
