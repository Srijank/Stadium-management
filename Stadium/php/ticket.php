<?php 
  include 'connect.php';
  $name = $_GET['event'];
                 $q = mysqli_query($conn,"SELECT COUNT(*) FROM ticket_registration WHERE dat ='$name' ");
               $qarray = mysqli_fetch_array($q,MYSQLI_NUM);
                 $no_row = 200 - $qarray[0];
               
                 if($no_row>=0){
                  
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
  <body style="background-color:">

      <!--Navigation Section-->
     <ul>
      <li class="firstli">
        Stadium
      </li>
      <li>
         <a style="text-decoration:none;" href="/Stadium/php/index.php">Home</a>
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
    <br />
   
    <?php   echo '<h2 style="color:red;" align="center">Hurry Up only ' . $no_row .' Tickets
              Left</h2> ';
?>
        

 <img src="/Stadium/images/c.jpg" height="50%" width="100%" class="tic" />

  

<div class="d">
  

      <form action="/Stadium/php/print.php" method="POST" class="t">
        <h2 align="center" style="color:white;font-family: 'Raleway', sans-serif;font-size:50px;" >Booking </h2><br /><br />
            <p class="pi">
               Enter your name
            </p>
              <input type="text" name="names" placeholder="" required=""> <br /><br />
              <p class="pi">
                 Enter your Mail
              </p>
                <input type="email" name="email" placeholder="" value="" required=""><br /><br />
              <p class="pi">
                Enter Phone number
              </p>
              <input type="number" name="phnumber" placeholder="" required=""><br /><br />
              <p class="pi">
                Your Match (Autofilled from Events)
              </p>
              <input type="text" name="event" readonly=""  value= <?php 
                echo $name;
                             ?>
                             ><br /><br />
             <p class="pi">
                 Do you need Ac
             </p>
              <input type="radio" name="problem" value="yes"><p class="i">
                Yes
              </p>
              <input type="radio" name="problem" value="no"><p class="i">
                No
              </p>
              <br /><br /><br />
              <h3 class="pi">1000 for Ac ,500 for normal</h3>
             <div align="center" style="font-size:30px; padding:20px;border-radius:20%;">
                <input type="submit" name="save" value="Pay & Book " />
              </div> 
              <p class="j" style="position: absolute;left:-10%;top:93%;">
              <a href="/staium/html/book.html">Contact us to Book Stadium</a>
              </p>
        </form>
        </div>

        <div class="k" align="center">
          <p class="pi">Copyright @Stadium</p>
        </div>

  </body>
</html>
<?php
}
else{
  echo"<script>alert('Sorry All Tickets are booked')</script>";
  echo "<script>location.replace('/Stadium/html/events.html')</script>";
}
?>
