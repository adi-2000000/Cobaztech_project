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
      <!-- site metas -->
      <title>Cobaztech</title>
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
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
    <?php
session_start(); // Start the session

// ... (other code)

if (isset($_SESSION["userloggedin"]) && $_SESSION["userloggedin"] === true) {
    // User is logged in
    if (isset($_SESSION["name"])) {
        $username = $_SESSION["name"]; // Get the user's name from the session

        // Display the name in the navbar
      //   echo "Welcome, $username!";
    } }
?>


      <!-- header section start -->
     <!-- <div class="header_section">
    <div class="container"> -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.html"><img src=""><h2>Cobaztech</h2></a></div>
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
                                echo '<li>Welcome, ' . $username . '!</li>';                              
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
    <!-- </div>
</div> -->
      <!-- banner section start -->
      <!-- <div class="banner_section layout_padding">
         <div class="container">
            <div id="costum_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <h1 class="furniture_text">FURNITURE</h1>
                     <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some fo</p>
                     <div class="contact_bt_main">
                        <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="furniture_text">FURNITURE</h1>
                     <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some fo</p>
                     <div class="contact_bt_main">
                        <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="furniture_text">FURNITURE</h1>
                     <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some fo</p>
                     <div class="contact_bt_main">
                        <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
               <i class=""><img src="images/left-arrow.png"></i>
               </a>
               <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
               <i class=""><img src="images/right-arrow.png"></i>
               </a>
            </div>
         </div>
      </div> -->
      <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <!-- <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">our services</h1>
            <p class="many_taital">There are many variations of passages of Lorem Ipsum </p>
            <div class="services_section2 layout_padding">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/icon-1.png"></div>
                     <h2 class="furnitures_text">Furnitures</h2>
                     <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/icon-2.png"></div>
                     <h2 class="furnitures_text">office</h2>
                     <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/icon-3.png"></div>
                     <h2 class="furnitures_text">Home</h2>
                     <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/icon-4.png"></div>
                     <h2 class="furnitures_text">badroom</h2>
                     <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- services section end -->
      <!-- about section start -->

      <div class="projects_section layout_padding" style="padding-top: 10px;">
         <div class="container">
              <!-- <h1 class="our_text">Our Development</h1> -->
            <!-- <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p> --> 
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="projects_section2">
                        <div class="container_main2">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="container_main1" >
                                    <img src="images/web-development1.png" alt="Avatar" class="image" style="width: 400px; height: 350px;">
                                    <h1 class="modern_text"></h1>
                                    <div class="middle">
                                      <a href="website.php"> <div class="text">VIEW MORE</div></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                    <img src="images/digital.jpg" alt="Avatar" class="image"  style="width: 400px; height: 350px;">
                                    <h1 class="modern_text"></h1>
                                    <div class="middle">
                                       <a href="DigitalMarketing.php"> <div class="text">VIEW MORE</div></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                    <img src="images/service.jpg" alt="Avatar" class="image" style="width: 400px; height: 350px;">
                                    <h1 class="modern_text"></h1>
                                    <div class="middle">
                                       <a href="support.php"> <div class="text">VIEW MORE</div></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                   <div class="carousel-item">
                     <div class="projects_section2">
                        <div class="container_main2">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                    <img src="images/web+digital2.jpg" alt="Avatar" class="image" style="width: 370px; height: 350px;" >
                                    <h1 class="modern_text"></h1>
                                    <div class="middle">
                                       <a href="web+digital.php"> <div class="text">VIEW MORE</div></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                      <img src="images/digital.jpg" alt="Avatar" class="image"  style="width: 400px; height: 350px;">
                                    <h1 class="modern_text"></h1>
                                    <div class="middle">
                                       <a href="DigitalMarketing.php"> <div class="text">VIEW MORE</div></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                    <img src="images/digital-marketing-main.png" alt="Avatar" class="image" style="height: 350px; width: 550px;">
                                    <h1 class="modern_text"></h1>
                                    <div class="middle">
                                       <a href="./shop.html"> <div class="text">VIEW MOREs</div></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>








      <div class="about_section layout_padding" style="background-color: rgb(243, 239, 239);">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="about_text"  style="color: black;">About Us</h1>
                  <p class="lorem_text" style="color: black;"> Design the visual layout and user interface of your website. This includes choosing colors, typography, images, and the overall aesthetic. It's important to create a design that is both visually appealing and user-friendly.</p>
                  <div class="read_bt1"><a href="#">Read More</a></div>
               </div>
               <div class="col-md-6">
                  <div class="image_1"><img src="images/web-design-and-development.png" style="height: 380px; width: 550px;"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
     
      <!-- <div class="furnitures_section layout_padding">
         <div class="container">
            <h1 class="our_text">OUR furnitures</h1>
            <p class="ipsum_text">There are many variations of passages of Lorem Ipsum </p>
            <div class="furnitures_section2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="container_main">
                        <img src="images/img-2.png" alt="Avatar" class="image">
                        <div class="overlay">
                           <a href="#" class="icon" title="User Profile">
                           <i class="fa fa-search"></i>
                           </a>
                        </div>
                     </div>
                     <h3 class="temper_text">Tempor incididunt ut labore et dolore</h3>
                     <p class="dololr_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p>
                  </div>
                  <div class="col-md-6">
                     <div class="container_main">
                        <img src="images/img-3.png" alt="Avatar" class="image">
                        <div class="overlay">
                           <a href="#" class="icon" title="User Profile">
                           <i class="fa fa-search"></i>
                           </a>
                        </div>
                     </div>
                     <h3 class="temper_text">Tempor incididunt ut labore et dolore</h3>
                     <p class="dololr_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- furnitures section end -->
      <!-- who section start
      <div class="who_section layout_padding">
         <div class="container">
            <h1 class="who_taital">who we are ?</h1>
            <h4 class="designer_text">DESIGNERS & INNOVATORS</h4>
            <p class="lorem_ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi utLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>
         </div>
         <div class="get_bt_main">
            <div class="get_bt"><a href="#">Get A Quote</a></div>
         </div>
      </div> -->
      <div class="furnitures_section layout_padding">
         <div class="container">
            <h1 class="our_text">OUR Services</h1>
            <!-- <p class="ipsum_text">There are many variations of passages of Lorem Ipsum </p> -->
            <div class="furnitures_section2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="container_main">
                        <img src="images/web-development1.png" alt="Avatar" class="image" style="height: 337px; width: 550px;">
                        <div class="overlay">
                           <a href="website.php" class="icon" title="User Profile">
                              <i class="fa fa-search"></i>
                           </a>
                        </div>
                     </div>
                     <h2 class="temper_text">WebSite Development</h2>
                     <p class="dololr_text">This involves creating the user interface and user experience (UI/UX) of a website. Front-end developers use technologies like HTML, CSS, and JavaScript to build the visual elements that users interact with. </p>
                  </div>
                  <div class="col-md-6">
                     <div class="container_main">
                        <img src="images/digital.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                           <a href="DigitalMarketing.php" class="icon" title="User Profile">
                              <i class="fa fa-search"></i>
                           </a>
                        </div>
                     </div>
                     <h2 class="temper_text">Digital Marketing</h2>
                     <p class="dololr_text"> Digital marketing leverages various online platforms and channels to reach and engage with the target audience. These channels include websites, social media, email, search engines, mobile apps, and more. </p>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="container_main">
                           <img src="images/service.jpg" alt="Avatar" class="image">
                           <div class="overlay">
                              <a href="DigitalMarketing.php" class="icon" title="User Profile">
                                 <i class="fa fa-search"></i>
                              </a>
                           </div>
                        </div>
                        <h2 class="temper_text">Customer Support</h2>
                        <p class="dololr_text"> Customer support can be reached through various channels, including phone, email, live chat, social media, and in-person assistance in physical stores or offices. </p>
                     </div>
                     <div class="col-md-6">
                        <div class="container_main">
                           <img src="images/web+digital2.jpg" alt="Avatar" class="image" style="height: 370px; width: 550px;">
                           <div class="overlay">
                              <a href="#" class="icon" title="User Profile">
                                 <i class="fa fa-search"></i>
                              </a>
                           </div>
                        </div>
                        <h2 class="temper_text">WedSite Development + Digital marketing</h2>
                        <p class="dololr_text">Create valuable and relevant content to attract and engage your target audience. This can include blog posts, videos, infographics, and more. </p>
                     </div>
               </div>
            </div>
         </div>
      </div>
      <!-- furnitures section end -->
      <!-- who section start
      <div class="who_section layout_padding">
         <div class="container">
            <h1 class="who_taital">who we are ?</h1>
            <h4 class="designer_text">DESIGNERS & INNOVATORS</h4>
            <p class="lorem_ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
               incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
               nisi utLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
               dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>
         </div>
         <div class="get_bt_main">
            <div class="get_bt"><a href="#">Get A Quote</a></div>
         </div>
      </div> -->
      <!-- who section end -->
      <!-- projects section start -->
      
      <!-- projects section end -->
      <!-- client section start -->
      <!-- <div class="clients_section layout_padding">
         <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <h1 class="client_text">what is says our clients</h1>
                     <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                     <div class="clients_section2 layout_padding">
                        <div class="client_1">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-7.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                        <div class="client_2">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-8.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="client_text">what is says our clients</h1>
                     <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                     <div class="clients_section2 layout_padding">
                        <div class="client_1">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-7.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                        <div class="client_2">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-8.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="client_text">what is says our clients</h1>
                     <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                     <div class="clients_section2 layout_padding">
                        <div class="client_1">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-7.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                        <div class="client_2">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-8.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="client_text">what is says our clients</h1>
                     <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                     <div class="clients_section2 layout_padding">
                        <div class="client_1">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-7.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                        <div class="client_2">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-8.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- client section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="contact_text">CONTACT US</h1>
                  <div class="mail_sectin">
                     <input type="text" class="email-bt" placeholder="Name" name="Name">
                     <input type="text" class="email-bt" placeholder="Email" name="Name">
                     <input type="text" class="email-bt" placeholder="Phone Number" name="Name">
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                     <div class="send_bt"><a href="#">SEND</a></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                        <div class="map-responsive">
                           <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
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






      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form action="login.php" method="post">
                         <div class="form-group">
                             <label for="username">Username</label>
                             <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username">
                         </div>
                         <div class="form-group">
                             <label for="password">Password</label>
                             <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
                         </div>
                                              <button type="submit" class="btn btn-primary">Login</button>

                     </form>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 </div>
             </div>
         </div>
     </div>
 </div>




 <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
<form action="signup.php" method="POST">
                   <div class="form-group">
                       <label for="signup-username">Username</label>
                       <input type="text" class="form-control"for="username" id="username" placeholder="Enter your desired username" name="username">
                   </div>
                   <div class="form-group">
                       <label for="signup-email">Email</label>
                       <input type="email" class="form-control" id="email" for="email" placeholder="Enter your email" name="email">
                   </div>
                   <div class="form-group">
                       <label for="signup-password">Password</label>
                       <input type="password" class="form-control" id="password"  for="password"placeholder="Enter your password" name="password">
                   </div>
                    <div class="form-group">
                       <label for="signup-password">Phone</label>
                       <input type="number" class="form-control" id="phone" for="phone"placeholder="Enter phone number" name="phone">
                   </div>
                                  <button type="submit" class="btn btn-success">Sign Up</button>

               </form>
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           </div>
       </div>
   </div>
</div>
</div>
 
 <!-- Add Bootstrap and jQuery scripts -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
<script>
    // Check if the user is not logged in (userloggedin is not true)
    if (!<?php echo isset($_SESSION["userloggedin"]) && $_SESSION["userloggedin"] ? "true" : "false"; ?>) {
        // Show the login modal
        $('#loginModal').modal('show');
    }
</script>





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
   </body>
</html>