<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Order</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your custom CSS file here -->
    <style>

/* Center the content on the page */
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

/* Style the heading */
h2 {
    font-size: 36px;
    color: #007BFF;
    margin-bottom: 20px;
}

/* Style the thank you message */
p {
    font-size: 20px;
    margin-bottom: 20px;
    text-align: center;
}

/* Style the "Back to Home" button */
.btn-primary {
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 18px;
    text-decoration: none; /* Remove underline */
}

.btn-primary:hover {
    background-color: #0056b3;
}


    </style>
</head>
<body>
    <div class="container">
        <h2>Thank You for Your Order</h2>
        <p>Your order has been successfully placed.</p>

        <!-- Button to go back to the home page -->
        <a href="index.php" class="btn btn-primary">Back to Home</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
