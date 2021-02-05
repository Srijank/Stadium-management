<?php
error_reporting(0);
include 'connect.php';
if(isset($_POST['updt'])){
  $id= $_POST['id'];
  $email = $_POST['email'];
  $name =$_POST['name'];
  $password =$_POST['password'];
  $ph= $_POST['ph'];
  $sql= "UPDATE users SET name ='$name',email='$email',password ='$password',phnumber='$ph' WHERE id= '$id'";
  mysqli_query($conn,$sql);
  echo "<script>alert('Updated Sucessfully.Login again to acess the account')</script>";
      echo "<script>location.replace('/Stadium/html/login.html')</script>";
  include 'login.html';
  }
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
<script src="https://use.fontawesome.com/b5e9fd525f.js"></script>
  </head>
  <body>

    <!--Navigation Section-->
     <ul >
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
<br><br>

     <form action="/Stadium/php/update.php" method="POST" style="
  background-color:#0059b3;
  opacity: 0.7;
  padding-right: 50px;
  padding-bottom: 30px;
  border-radius: 20%;
  border-top-color: black;">
        <h2 align="center" style="color:white;font-family: 'Raleway', sans-serif;font-size:50px;" >Update your Profile</h2><br />
        <p style="color:white;" align="center">Please change the details that you want to update and re-enter the fields which you don't want to change</p><br />
         <p class="pi" style="font-weight: bold;">
                 Your ID (This cannot be changed)
              </p>
               <input type="number" name="id" readonly="" placeholder="1" value=<?php 
               $id=$_GET['ih'];
               echo $id;
               ?> > <br><br>
                <span class="eye" onclick="myFunction()" style="display:relative;top:70%%;">
                 <i id="hide1" class="fa fa-eye"></i>
                 <i id="hide2" class="fa fa-eye-slash"></i>
               </span>
                <p class="pi" style="font-weight: bold;">
                 Enter your Email
              </p>
               &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="email" name="email" required="" value=<?php 
               $em=$_GET['email'];
               echo $em;
               ?> > &nbsp &nbsp &nbsp
                 <p class="pi" style="font-weight: bold;">
                 Enter your Password
              </p>
               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="password" placeholder="**********" required="" id="myinput">
             <br><br>
                 <p class="pi" style="font-weight: bold;">
                 Enter your Name
              </p>
               &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="name" name="name" required="" value=<?php 
               $name=$_GET['name'];
               echo $name;
               ?> ><br><br>
              
               


              

               <p class="pi" style="font-weight: bold;">
                 Enter your Phone number
              </p>
               <input type="number" name="ph" required="" value=<?php 
               $id=$_GET['ph'];
               echo $id;
               ?> ><br><br>
              <div align="center" style="font-size:30px; padding:20px;border-radius:20%; font-weight: bold;">
                
                <input type="submit" name="updt" value="Update" />
              </div>

        </form>
        </div>
         <script type="text/javascript">
            function myFunction(){
              var x = document.getElementById("myinput");
               var y = document.getElementById("hide1");
                var z = document.getElementById("hide2");
                if(x.type === 'password'){
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

