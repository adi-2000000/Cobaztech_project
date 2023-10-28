<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <!-- site metas -->
      <title>cobaztech</title>


     <style>
         #box{
            height: 430px;
            width: 450px;
            border: 2px solid;
            margin-left: 600px;
      
         }

         .package-tabs {
            margin-top: 20px;
        }

        .price-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .custom-button {
        background-color: #FF5733; /* Custom button background color */
        color: #fff; /* Text color */
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        transition: background-color 0.3s; /* Add a smooth transition effect for hover */
        margin-left:55px;
    }
    h1 {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    span:nth-child(1) {
        order: 2;
        margin-left: 120px; /* Adjust this value as needed */
    }

    span:nth-child(2) {
        order: 1;
    }

    .custom-button:hover {
        background-color: #E6402C; /* Change button background color on hover */
    }

        .price-tooltip {
            cursor: pointer;
        }

        .delivery-icon, .revisions-icon {
            margin-right: 10px;
        }

        .list-unstyled {
            list-style: none;
            padding: 0;
        }

        .list-unstyled li {
            margin-bottom: 10px;
        }

        .btn-group .btn {
            margin-right: 10px;
        }

        /* Style for the active button */
        .btn-group .btn.active {
            background-color: #007BFF; /* Change to your desired color */
            color: #fff; /* Change to your desired text color */
        }

        /* Common button styles */
        .btn-group .btn {
            background-color: #f5f5f5; /* Change to your desired button color */
            color: #333; /* Change to your desired text color */
            border: 1px solid #ccc; /* Add a border */
            padding: 10px 20px; /* Adjust padding to your liking */
            border-radius: 5px; /* Rounded corners */
        }


         #box {
            background-color: #f8f9fa; /* Light gray background color */
            padding: 20px;
            border: 1px solid #d1d1d1;
            border-radius: 10px;
        }

        .package-title {
            font-size: 24px;
            margin-top: 20px;
        }

        .package-description {
            font-size: 16px;
        }

        .package-price {
            font-size: 20px;
            font-weight: bold;
        }

        .select-button {
            background-color: #007bff; /* Blue color */
            color: #fff; /* White text */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
        }
        h1 {
            font-size: 14px;
            color: #333;
        }
        

        p {
            font-size: 18px;
            color: #666;
        }

        ul {
            list-style: disc;
            margin-left: 20px;
            padding-left: 10px;
        }

        li {
            font-size: 16px;
            color: #444;
            margin-bottom: 10px;
        }
    </style>

         
      
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

   </head>
   <body>

    <?php
//session_start(); // Start the session

// ... (other code)

if (isset($_SESSION["userloggedin"]) && $_SESSION["userloggedin"] === true) {
    // User is logged in
    if (isset($_SESSION["name"])) {
        $usernam = $_SESSION["name"]; // Get the user's name from the session

        // Display the name in the navbar
        echo "Welcome, $usernam!";
    } }
?>

   <?php
    // PHP code to connect to the database and fetch package data
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }  ?>
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html"></a><h2>Cobaztech</h2></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <!-- <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                     </li> -->
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                     </li>
                  </ul>
                 <form class="form-inline my-2 my-lg-0">
                    <div class="search_icon">
                        <ul>
                            <!-- Check if the user is logged in and display the username, or show login and signup buttons -->
                            <?php
                            if (isset($_SESSION["userloggedin"]) && $_SESSION["userloggedin"] === true) {
                                echo '<li>Welcome, ' . $usernam . '!</li>';                              
   //  echo '<li><form method="post" action="logout.php">
   //  <button type="submit" class="btn btn-primary mt-3" name="logout" >LOGOUT</button>
   //  </form></li>';

                            } else {
                                echo '<li><button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#loginModal">LOGIN</button></li>';
                                echo '<li><button type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#signupModal">Sign Up</button></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- furnitures section start -->
      <div class="furnitures_section layout_padding">
         <div class="container">
            <h2 class="our_text">Digital Marketing</h2>
            <p class="ipsum_text">I will develop a modern professional responsive  website design</p>
            <div class="furnitures_section2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="container_main">
                        <img src="images/digital-marketing-main.png" alt="Avatar" class="image" style="width: 500px; height: 400px;">
                        <!-- <div class="overlay">
                           <a href="#" class="icon" title="User Profile">
                           <i class="fa fa-search"></i>
                           </a>
                        </div> -->
                     </div>

 


   
        <div id="box" style="position: absolute; top: 0; right: 50;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="nav nav-tabs" id="package-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="basic-tab" data-toggle="tab" href="#basic" role="tab"
                                    aria-controls="basic" aria-selected="true">Basic</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="standard-tab" data-toggle="tab" href="#standard" role="tab"
                                    aria-controls="standard" aria-selected="false">Standard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="premium-tab" data-toggle="tab" href="#premium" role="tab"
                                    aria-controls="premium" aria-selected="false">Premium</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="tab-content" id="package-content">
                            <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                                <!-- Basic package content here -->
                             <?php   $sql = "SELECT * FROM packages";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data for each row
        while ($row = $result->fetch_assoc()) {
 if($row["package_name"] == "Basic" &&  $row["type"] == "Digital Marketing") {


           $packageName = $row["package_name"];
                $description = $row["description"];
                $numberOfPages = $row["number_of_pages"];
                $price = $row["price"];
                  $id = $row["package_id"];
              //  var_dump($numberOfPages);
        } }
    } else {
        echo "0 results";
    }

    // Close the database connection
   
    ?>
                              <h1><span >₹<?php echo $price ?></span><span><?php echo $packageName ?></span></h1>
                                <p>This package includes:</p>
                                <ul>
                                    
                                    <li><?php echo $description ?></li>
                                 
                                </ul>
                                <a href="form.php?id=<?php echo $id; ?>" class="btn btn-primary custom-button" style="background-color: #0a9dad; color: #fff; text-decoration: none; padding: 10px 120px; border-radius: 5px;">Select</a>

                            </div>
                            <div class="tab-pane fade" id="standard" role="tabpanel" aria-labelledby="standard-tab">
                                <!-- Standard package content here -->
                                                              
                                                                <?php   $sql = "SELECT * FROM packages";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data for each row
        while ($row = $result->fetch_assoc()) {
 if($row["package_name"] == "Standard"  && $row["type"] == "Digital Marketing") {


           $packageName = $row["package_name"];
                $description = $row["description"];
                $numberOfPages = $row["number_of_pages"];
                $price = $row["price"];
                  $id = $row["package_id"];
              //  var_$row
         } }
    } else {
        echo "0 results";
    }

    // Close the database connection
   
    ?>
                             <h1><span  >₹<?php echo $price ?></span><span><?php echo $packageName ?></span></h1>


                             <p>This package includes:</p>
                                <ul>
                                 
                                    <li><?php echo $description ?></li>
                                 
                                </ul>

                                <a href="form.php?id=<?php echo $id; ?>" class="btn btn-primary custom-button" style="background-color: #0a9dad; color: #fff; text-decoration: none; padding: 10px 120px; border-radius: 5px;">Select</a>

                            </div>
                            <div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="premium-tab">
                                <!-- Premium package content here -->
                                                               
                                                               <?php   $sql = "SELECT * FROM packages";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data for each row
        while ($row = $result->fetch_assoc()) {
 if($row["package_name"] == "Premium" &&  $row["type"] == "Digital Marketing") {


           $packageName = $row["package_name"];
                $description = $row["description"];
                $numberOfPages = $row["number_of_pages"];
                $price = $row["price"];
                  $id = $row["package_id"];
              //  var_dump($numberOfPages);
        } }
    } else {
        echo "0 results";
    }

    // Close the database connection
   
    ?>
                                <h1><span >₹<?php echo $price ?></span><span><?php echo $packageName ?></span></h1>
                                <p>This package includes:</p>
<ul>
  
    <li style="font-style: italic;"><?php echo $description ?></li>
   
</ul>
<a href="form.php?id=<?php echo $id; ?>" class="btn btn-primary custom-button" style="background-color: #0a9dad; color: #fff; text-decoration: none; padding: 10px 120px; border-radius: 5px;">Select</a>




                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Additional info here -->
                    </div>
                </div>
            </div>
        </div>

             
               











                     <!-- <h3 class="temper_text">Tempor incididunt ut labore et dolore</h3>
                     <p class="dololr_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p>
                  </div>
                  <div class="col-md-6">
                     <div class="container_main" style="border: 2px solid; display: flex; justify-content: space-between;" style="width: 500px; height: 400px;">
                        <div class="card">
                            <div class="card-header">
                                <h3>Basic Plan</h3>
                            </div>
                            
                              
                           
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3>Premium Plan</h3>
                            </div>
                          
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3>Standard Plan</h3>
                            </div>
                           
                        </div>
                    </div>
                     -->
                     <!-- <h3 class="temper_text">Tempor incididunt ut labore et dolore</h3>
                     <p class="dololr_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- furnitures section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">INFORMATION</h1>
                  <p class="footer_lorem_text">There are many variat
                     ions of passages of L
                     orem Ipsum available
                     , but the majority h
                     ave suffered altera
                     tion in some form, by 
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">LET US HELP YOU</h1>
                  <p class="footer_lorem_text">There are many variat
                     ions of passages of L
                     orem Ipsum available
                     , but the majority h
                     ave suffered altera
                     tion in some form, by 
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">UseFul Links</h1>
                  <p class="footer_lorem_text1">About Us<br>
                     Careers<br>
                     Sell on shopee<br>
                     Press & News<br>
                     Competitions<br>
                     Terms & Conditions
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">OUR Design</h1>
                  <p class="footer_lorem_text">There are many variat
                     ions of passages of L
                     orem Ipsum available
                     , but the majority h
                     ave suffered altera
                     tion in some form, by 
                  </p>
               </div>
            </div>
            <div class="input-group mb-3">
               <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="basic-addon2">
               <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2"><a href="#">Subscribe</a></span>
               </div>
            </div>
         </div>
      </div>
      <!--  footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a> Distribution By <a href="https://themewagon.com">ThemeWagon</a></p>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>   
      <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const packageButtons = document.querySelectorAll("#package-tabs button");
            const packageContent = document.querySelectorAll("#package-content .tab-pane");

            packageButtons.forEach(button => {
                button.addEventListener("click", function () {
                    // Remove the "active" class from all buttons
                    packageButtons.forEach(b => b.classList.remove("active"));
                    // Add the "active" class to the clicked button
                    button.classList.add("active");

                    // Hide all package content
                    packageContent.forEach(content => {
                        content.style.display = "none";
                    });

                    // Show the corresponding package content
                    const packageId = button.getAttribute("href").substring(1);
                    const selectedContent = document.getElementById(packageId);
                    selectedContent.style.display = "block";
                });
            });
        });
    </script> -->



   <script>
    document.addEventListener("DOMContentLoaded", function () {
        const packageTabs = document.querySelectorAll(".nav-link");
        const packageContent = document.querySelectorAll(".tab-pane");

        packageTabs.forEach(tab => {
            tab.addEventListener("click", function () {
                packageTabs.forEach(t => t.classList.remove("active"));
                tab.classList.add("active");

                packageContent.forEach(content => {
                    content.classList.remove("show", "active");
                });

                const packageId = tab.getAttribute("href").substring(1);
                const selectedContent = document.getElementById(packageId);
                selectedContent.classList.add("show", "active");
            });
        });
    });
</script>

 
   </body>
</html>