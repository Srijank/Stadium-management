<?php
error_reporting(0);
include 'connect.php';
     $i =$_GET['il'];
        $sq="DELETE FROM users WHERE id='$i' ";
       $data = mysqli_query($conn,$sq);
       if($data){
       echo "<script>alert('Deleted Succesfully')</script>";
     	echo "<script>location.replace('/Stadium/html/login.html')</script>";
     }
      ?>