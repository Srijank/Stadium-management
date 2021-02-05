<?php
  include 'connect.php';
  $i = $_GET['rn'];
  if($i){
?><!DOCTYPE html>
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
<script src="https://use.fontawesome.com/b5e9fd525f.js"></script>
  </head>
  <body style="background-color:   #b3f0ff">
  	<h1 align="center" style="color:green;">Add User </h1>
 <img src="/Stadium/images/c.jpg" height="40%" width="100%" class="tic" />

  

<div class="d" style="position: absolute;top:20%; width: 100%; left:5%;">
  

      <form action="/Stadium/php/adduser.php" method="POST" class="t">
        <h2 align="center" style="color:white;font-family: 'Raleway', sans-serif;font-size:50px;" >Booking </h2><br /><br />
            <p class="pi">
               Enter  name
            </p>
              <input type="text" name="names" placeholder="" required=""> <br /><br />
              <p class="pi">
                 Enter  Mail
              </p>
                <input type="email" name="email" placeholder="" value="" required=""><br /><br />
                <p class="pi">
               Enter User name
            </p>
              <input type="text" name="users" placeholder="" required=""> <br /><br />
              <p class="pi">
                Enter Phone number
              </p>
              <input type="number" name="phnumber" placeholder="" required=""><br /><br />
              <p class="pi">
                Enter Password
              </p>
              <input type="password" name="password" placeholder="" required="" id="myinput">

                        <span class="eye" style="display:absolute;top:63%; "onclick="myFunction()">
                 <i id="hide1" class="fa fa-eye"></i>
                 <i id="hide2" class="fa fa-eye-slash"></i>

               </span>
              <br /><br />
              <p class="pi">
                Add as 
              </p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <select name="user" >
                <option value="authority" selected=""><h1>Authority</h1></option>
                <option value="support">Support</option>
              </select><br /><br />
             
              <div align="center" style="font-size:30px; padding:20px;border-radius:20%;">
                <input type="submit" name="save" value="Add User" />
              </div>

        </form>
        </div>
 
 <script type="text/javascript">
            function myFunction(){
              var x = document.getElementById("myinput");
               var y = document.getElementById("hide1");
                var z = document.getElementById("hide2");
                if(x.type === "password"){
                  x.type ="text";
                  y.style.display ="block";
                  z.style.display ="none";
                }
                else {
                  x.type ="password";
                  y.style.display ="none";
                  z.style.display ="block";
                }
            }
          </script> 
          
</body>
</html>
<?php
}
else {
  echo "<script>location.replace('/Stadium/html/admin.html')</script>";
}
?>