<?php
//error_reporting(0);
include 'connect.php';

$i = date('20y-m-d');

//Check submit is pressed
if(isset($_POST['save']))
{
  $name= $_POST['names'];
  $email= $_POST['email'];
  $phnumber= $_POST['phnumber'];
  $matc= $_POST['matches'];
  $in = $_POST['user'];
  $dat= $_POST['dat'];
  if($dat >$i ){



  $q = mysqli_query($conn,"SELECT COUNT(*) FROM calender WHERE dates ='$dat' ");
               $qarray = mysqli_fetch_array($q,MYSQLI_NUM);
                 if($qarray[0]){

                 		echo "<script>alert('Already match is there .Please see calender and book')</script>";
  	echo "<script>location.replace('/Stadium/html/book.html')</script>";
                 } 
                 else{


  $que= mysqli_query ($conn,"SELECT * FROM users WHERE email= '$email'");
  $q_r = mysqli_fetch_array($que);
  $user =$q_r['id'];
  if($user){
  $sqlquery="INSERT INTO calender (name,email,phonenumber,matches,venue,dates,user_id)
  VALUES ('$name','$email','$phnumber','$matc','$in','$dat','$user') ";
  $d = mysqli_query($conn,$sqlquery);
}
else{
  $sqlquery="INSERT INTO calender (name,email,phonenumber,matches,venue,dates)
  VALUES ('$name','$email','$phnumber','$matc','$in','$dat') ";
  $d = mysqli_query($conn,$sqlquery);
}
  echo "<script>alert('Booked the satdium.Go to events to see your match')</script>";
    echo "<script>location.replace('/Stadium/php/events.php')</script>";
}
  }
  else if( $dat< $i){
      echo "<script>alert('Cant book the date early to today.Please see calender and book')</script>";
    echo "<script>location.replace('/Stadium/html/book.html')</script>";
  }

}