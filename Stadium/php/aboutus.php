<?php
 include 'connect.php';
 if(isset($_POST['sub']))
{
  $name= $_POST['name'];
  $email= $_POST['email'];
  $phnumber= $_POST['no'];
  $message= $_POST['message'];

  $que= mysqli_query ($conn,"SELECT * FROM users WHERE email= '$email'");
  $q_r = mysqli_fetch_array($que);
  $user =$q_r['id'];
  if($user){

  $sql_query="INSERT INTO contact (name,email,phonenumber,feedback,user_id)
  VALUES ('$name','$email','$phnumber','$message','$user') ";
}
else{

  $sql_query="INSERT INTO contact (name,email,phonenumber,feedback)
  VALUES ('$name','$email','$phnumber','$message') ";
}
 
  //$query = mysqli_query($conn,"SELECT * FROM contact ORDER BY id DESC LIMIT 1");
  //$query_run= mysqli_fetch_row($query);

 if(mysqli_query($conn,$sql_query)){
 	echo "<script>alert('Feedback submitted.We will reply shortly')</script>";
 	echo "<script>location.replace('/Stadium/html/aboutus.html')</script>";
 }
}