<!DOCTYPE html>
<html lang="en">
<head>
  <title>Travel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="main_page.css?v=<?php echo time(); ?>">    
  
</head>
<body>
  <header>
    <div>
    
      <div class="navbar"> 
        <h1 >What A Trip</h1> 
        <div class="dropdown">
          <button class="dropbtn">More 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="signUp.php"target="_blank">Add Account</a>
            <a href="index.php" target="_blank">Sign In</a> 
            <form  class="del" action="http://localhost/miniproject/del.php"> 
            <input  class="del" type="submit" value ="Delete Account" name="delete"></form>
            <form    action="http://localhost/miniproject/chpaswd.php">
            <input class="update" type="submit" value ="Update Account" name="update"></form>
             
    
          </div>
          <div class="line"></div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Contact 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">8669510685</a>
            <a href="#">9579276942</a>
          </div> 
          <div class="line"></div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">About
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="about.php">Our Team</a>
          </div> 
          <div class="line"></div>
        </div>
        <div class="nav">
          <a href="main_page.php" target="_blank">Home <div class="line"></div></a>
        </div> 
       
      </div>
      <div class="banner">
        <div class="container">
          <h1 class="banner-title">
            <h1>What A Trip</h1> 
          </h1>
          <h3>Book your Trip </h3> 
         
        </div>
      </div> 
    </div> 
  </header>
  <section class="design" id="design">
    <div class="container">
      <div class="design-content">
        <!-- item -->
        <div class="design-item">
         <a href="http://localhost/miniproject/flight_web_design.php">
            <div class="design-img">
              <img src="images\flight.jpg" alt="">
              <span>Travel <i class="far fa-heart"></i></span>
              <span>Flight Booking</span>
            </div>
          </a>
          <div class="design-title">
            <a href="http://localhost/miniproject/flight_web_design.php">check to book a flight </a>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class="design-item">
          <a href="http://localhost/miniproject/railway_web_design.php">
            <div class="design-img">
              <img src="images\railway.jpg" alt="">
              <span>Travel <i class="far fa-heart"></i></span>
              <span>Railway Booking</span>
            </div>
          </a>
          <div class="design-title">
            <a href="http://localhost/miniproject/railway_web_design.php">check to book a Railway</a>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class="design-item">
          <a href="http://localhost/miniproject/cab_web_design.php">
            <div class="design-img">
              <img src="images\cab.jpg" alt="">
              <span>Travel <i class="far fa-heart"></i></span>
              <span>Cab Booking</span>
            </div>
          </a>
          <div class="design-title">
            <a href="http://localhost/miniproject/cab_web_design.php">check to book a Cab</a>
          </div>
        </div>
     </div>
    </div>
  </section>
  <!-- end of design -->
  <div class="flex-container">
    <div class="flex-1">
      <h4>Why What A Trip</h4>
      <p>Established in 2020, What A Trip has since positioned itself as one of the leading
        website, providing great offers, competitive airfares, exclusive discounts, and
        a seamless online booking experience to many of its customers. The experience of booking
        your flight tickets,railway tickets,cab booking through our desktop site can be done with complete ease and no hassles at all. 
     </p>
    </div>
    <div class="flex-2">
      <h4>Booking Trips withWhat A Trip</h4>
      <p>
        At What A Trip, you can find the best of deals and cheap air tickets, railway tickets,cabs booking to any place you
        want by booking your tickets on our website . Being India's  website
        for flights, railways and cabs What A Trip helps you book flight tickets that
        are affordable and customized to your convenience. With customer satisfaction being our
        ultimate goal, we also have a 24/7 dedicated helpline to cater to our customer’s queries
        and concerns. Serving over 5 million happy customers, we at MakeMyTrip are glad to fulfill
        the dreams of folks who need a quick and easy means to find air tickets. You can get a
        hold of the cheapest flight of your choice today while also enjoying the other available
        options for your travel needs with us.</p>
    </div>
    <div class="flex-3">
      <h4>Domestic Flights with What A Trip,</h4>
      <p>
      What A Trip, is India's leading player for  bookings.With the cheapest fare guarantee, experience
        great value at the lowest price. Instant notifications ensure current flight status, instant fare
        drops, amazing discounts, instant refunds and rebook options, price comparisons and many more interesting
        features.</p>
    </div>
  </div>
  <footer>
    <br><br>
    <div class="copyright">
      <p>CopyRight&copy;2020</p>
    </div>
  </footer> 
 
    
</body>
</html> 