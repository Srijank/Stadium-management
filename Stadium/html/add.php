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
  <body style="background-color:   #b3f0ff">
  	<h1 align="center" style="color:green;">Add User </h1>
 <img src="/Stadium/images/c.jpg" height="40%" width="100%" class="tic" />

  

<div class="d" style="position: absolute;top:20%; width: 100%;">
  

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
                 Are you facing any health problems?
             </p>
              <input type="radio" name="problem" value="yes"><p class="i">
                Yes
              </p>
              <input type="radio" name="problem" value="no"><p class="i">
                No
              </p>
              <br /><br /><br />
              <div align="center" style="font-size:30px; padding:20px;border-radius:20%;">
                <input type="submit" name="save" value="Pay 500 & Book " />
              </div>

              <p class="j" style="position: absolute;left:-10%;top:93%;">
               Contact us to Book Stadium
              </p>
        </form>
        </div>

</body>
</html>