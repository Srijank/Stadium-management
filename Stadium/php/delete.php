<?php

include 'connect.php';
     $i =$_GET['rn'];
       $h = mysqli_query($conn,"SELECT * FROM ticket_registration WHERE id ='$i' ");
       $result = mysqli_fetch_array($h);
       $data = mysqli_query($conn,"DELETE FROM ticket_registration WHERE id='$i' ");
       $email = $result['email'];
       $g =mysqli_query($conn,"SELECT * FROM users WHERE email='$email' ");
       $res = mysqli_fetch_array($g);
       $password = $res['password'];
       if($data){
       	echo "<script>alert('Deleted Succesfully')</script> ";
       $sql= "SELECT * FROM  users WHERE email= '$email' AND password= '$password' ";
  $result =mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
     if($row['email']== $email && $row['password']== $password){
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

<style type="text/css">
  @media screen{
    .print{
      display: none;
    }
  }
  @media print{
    .noprint{
      display: none;
    }
  }
</style>
  </head>
  <body style="background-color:   #b3f0ff">

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

<h1 align="center" class="noprint">Welcome <?php echo $row['name']?></h1>
<div style="position: relative;left:10%;">
<?php
      echo '<a href="/Stadium/php/update.php?ih=' . $row['id'] .'&name=' . $row['name'] .'&email=' . $row['email'] .'&ph=' . $row['phnumber'] .'">
      <button style="background-color:#00e600;color:white;border-radius:5%;font-size:20px;"><b>Update Your Profile</b></button></a>';
   ?>
 </div>
<div style="position:absolute;left:75%;top:19%">
 <?php
      echo '<a href="/Stadium/php/deleteuser.php?il=' . $row['id'] .'">
      <button style="background-color:red;color:white;border-radius:5%;font-size:20px;"><b>Delete your Profile</b></button></a>';
   ?>
 </div>
 <div style="position:absolute;left:90%;top:19%">

 <?php
      echo '<a href="/Stadium/html/login.html"><button style="background-color:red;color:white;border-radius:5%;font-size:20px;"><b>Log Out</b></button></a>';

   ?>
 </div>
<br><br>
 <?php
         $g = "SELECT * FROM ticket_registration WHERE email='$email' ";
         $res= mysqli_query($conn,$g);
         $no_raw =mysqli_num_rows($res);
         if($no_raw){
         ?>
<h3 align="center" class="noprint"> Your Seat ticket booking details</h3><br>

<table border="2px" align="center">
  <thead>
    <tr>
    <th>
      Ticket number
    </th>
    <th>Match</th>
    <th>Phone number</th>
    <th> Operation </th>
  </tr>
</thead>
<?php 
         while($raw= mysqli_fetch_array($res) ){
            ?>
           <tbody><tr>

           
                       <td align="center"> <?php echo $raw['id'];?></td>
                       <td align="center"> <?php echo $raw['dat'];?></td>
                       <td align="center"><?php 
                          echo $raw['phonenumber'];?>
                        </td>
                        <td align="center">               
                          <table class="print">
    <tr>
        <td style="color:white;font-family: 'Raleway', sans-serif;font-size:50px;" colspan="2" align="center" >Ticket Details</td>
      </tr>
      <tr>
        <td style="font-size: 35px;"> Ticket Number </td>
        <td style="font-size: 35px;">: &nbsp<?php echo $raw[0];
        ?>
        </td>
      </tr>
      <tr>
        <td style="font-size: 35px;" > Name </td>
        <td style="font-size: 35px;">:&nbsp <?php echo $raw[1];
        ?>
        </td>
      </tr>
      <tr>
        <td style="font-size: 35px;"> Email </td>
        <td style="font-size: 35px;">:&nbsp<?php echo $raw[2];
        ?>
        </td>
      </tr>
      <tr>
        <td style="font-size: 35px;"> Phone Number </td>
        <td style="font-size: 35px;">:&nbsp<?php echo $raw[3];
        ?>
        </td>
      </tr>
      <tr>
        <td style="font-size: 35px;"> Date </td>
        <td style="font-size: 35px;">:&nbsp<?php echo $raw[4];
        ?>
        </td>
      </tr>
      <br/>
     <tr>
      <td colspan="2"><h2>Instructions :-</h2>
        <h3> WASHING HANDS OFTEN:</h3>
  1]Washing your hands often with soap and water or other disinfectants that have similar soap properties for at least 20 seconds is advised. This should be done especially after you have been to public places, or after blowing your nose or coughed or sneezed.<br>
  2]If in any case, that soap is not readily available, using a hand sanitizer which has almost 60% alcohol composition is also a good way to sanitize your hands.<br>
  3]Also try to avoid touching your face, eyes, nose or mouth with unwashed hands as the pathogens can enter through your mouth or other openings as well.
<h3>AVOIDING CLOSE CONTACT/ SOCIAL DISTANCING: </h3>
1]Avoiding contact with people who are affected is the best way to stay safe, even if the person affected is one of your family members.<br>
2]Maintain a 6 feet distance between the person who is sick and you.<br>
3]Make sure not to gather in groups.<br>
4]Stay out of gatherings and crowded places.<br>
5]If you are someone who gets easily sick, then you must maintain this distance strictly.
<h3>USE OF MASKS:</h3>
1]The use of masks when going out is a must, especially when you are going for buying something.<br>
2]You should use the masks even if you do not feel sick as the transmission can happen through the droplets from the sneezes or coughs of other people.<br>
3]DO NOT use the masks that are supposed to be provided for the health workers as they are the front line during this pandemic and any shortage of such special masks can cause the health workers to fall sick which can furthermore spread the virus.
<h3>CLEANING AND DISINFECTING AREAS: </h3>
1]Disinfecting area is a key to being safe as well. Places such as tables, doorknobs, light switches, desks, handles, toilets, sinks and faucets should be clean and disinfected.<br>
2]If the surfaces are dirty, use of detergent or soap before disinfection is highly advised.<br>
3]Use of disinfectant even when using household material is very necessary.

<h1 align="center">Lets Fight together</h1><br>
       </td>
     </tr>
      
 


   </table>
   <?php
      echo '<a href="delete.php?rn=' . $raw['id'] .'">
      <button style="background-color:red;color:white;border-radius:5%;font-size:20px;">Delete</button></a>';
   ?>
  </td></tr>
  <?php 
                       }
                       ?> 

                     </tbody></table>



                      
            <div style="position:relative;left:45%;top:100%;" class="noprint">
            <button onclick="window.print()" style="padding: 10px; background-color: blue;color: white;"><b>View Complete Details</b></button>
</div>

<?php
}
 else {
  echo '<h3 align="center">You havent Booked any Tickets.Go and Book Ticket&nbsp<a href="/Stadium/events.html"><button background-color="green">Book Now </button></h3>' ;
 }
 ?>
        </body>
        </html>
     <?php 

    

} else{
      echo "<script>alert('Check credentials or Sign up first')</script>";
      echo "<script>location.replace('/Stadium/html/login.html')</script>";
     }
}


       
       ?>