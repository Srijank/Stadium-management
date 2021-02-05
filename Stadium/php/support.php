<?php 
include 'connect.php';


if(isset($_POST['su'])){
	$user_name=$_POST['name'];
	$user_password =$_POST['password'];
  $sql= "SELECT * FROM  support WHERE username= '$user_name' AND password= '$user_password' ";
  $result =mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
     if($row['username']== $user_name && $row['user_password']== $password){
	$s_id = $row['id'];
	
?>      <!DOCTYPE html>
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

    <h1 style="background-color:#66ff99;color: white; font-size: 50px; padding-bottom: 20px;" align="center">Support </h1>
     <div style="position:absolute;left:90%;top:19%">

 <?php
      echo '<a href="/Stadium/html/login.html"><button style="background-color:red;color:white;border-radius:5%;font-size:20px;position:relative;top:10%;left:55%;"><b>Log Out</b></button></a>';

   ?>
 </div><br>

         <table border="2px" align="center" class="thk" cellpadding="50">
        <thead>
         <tr>
           <th class="heading">
       Complaint Id
          </th>
    <th class="heading">Name</th>
    <th class="heading">Email</th>
    <th class="heading"> Phone number </th>
    <th class="heading">Feedback/Complaint</th>
    <th class="heading">Contact</th>
  </tr>
</thead>
<tbody>
<?php
    $supporttab = mysqli_query($conn,"SELECT * FROM contact");
    while ($supportquery = mysqli_fetch_array($supporttab)) {
      $c_id=$supportquery['id'];
         ?>

         <tr><td align="center"><b> <?php echo $supportquery['id'];?></b></td>
                       <td align="center"><b> <?php echo $supportquery['name'];?></b></td>
                       <td align="center"><b><?php  echo $supportquery['email'];?></b>
                        </td>
                       <td align="center"><b><?php  echo $supportquery['phonenumber'];?>
                        </td></b>
                        <td ><b><textarea><?php echo $supportquery['feedback'];?></textarea></b>
                        </td>
                        <?php
                        $em = $supportquery['email'];
                        echo '<td><a href="https://mail.google.com/mail/?view=cm&fs=1&to= '. $em .'" target="_blank"><img src="/Stadium/images/email.svg"></a></td>';
                        $se = mysqli_query($conn,"UPDATE contact set s_id ='$s_id' where id ='$c_id' ");
                        ?>
                    </tr>
              <?php
          }
          ?>
            </tbody>
        </table>  

 <?php
}
else{
  echo "<script>alert('Check your Credtentials.')</script>";
    echo "<script>location.replace('/Stadium/html/support.html')</script>";
}
}
?>
