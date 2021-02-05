<?php
include 'connect.php';
$i = date('20y-m-d');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stadium</title>

    <!-- Bootstrap link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- External Css Link-->
    <link href="/Stadium/css/index.css" rel="stylesheet" />
    
    <!--Google fonts link-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&family=Sansita+Swashed:wght@900&display=swap" rel="stylesheet">

  </head>
  <body>
 <!--Navigation Section-->
    <ul>
      <li class="firstli">
        Stadium
      </li>
      <li>
        <a style="text-decoration:none;" href="/Stadium/html/index.html">Home</a>
      </li>
      <li>
          <a style="text-decoration:none;"href="/Stadium/php/events.php">Events</a>
      </li>
      <li>
        <a style="text-decoration:none;"href="/Stadium/html/login.html">
          Login/Signup </a>
      </li>
      <li>
        <a style="text-decoration:none;"href="/Stadium/html/aboutus.html">
        About</a>
      </li>
    </ul>



<!--Animation Slides-->
    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel" style="margin-top:10px;">
      <div class="carousel-inner">
        <div class="carousel-item active">
           <img src="/Stadium/images/ed.png" class="d-block  w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/Stadium/images/j1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/Stadium/images/b.png" class="d-block w-100" alt="...">
        </div>
      </div>
     <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
   </div> <br /><br />

<!-- Matches Section-->
<h2 align="center">Upcoming matches this week</h2>
<table class="table table-hover" border="1px">
    <thead style="background-color:#66ff66;">
      <tr>
        <th><b>Matches</b></th>
        <th>Venue</th>
        <th>Date and Time</th>
        <th>
          Booking
        </th>
      </tr>
    </thead>
    <tbody>
     
  
<!--Footer Section-->
          <div class="l" align="center">
            <p class="pi">Copyright @Stadium</p>
          </div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
