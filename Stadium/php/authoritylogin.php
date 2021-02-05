<?php 
include 'connect.php';


if(isset($_POST['su'])){
	$user_name=$_POST['name'];
	$user_password =$_POST['password'];
  $sql= "SELECT * FROM  authority WHERE username= '$user_name' AND password= '$user_password' ";
  $result =mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
     if($row['username']== $user_name && $row['password']== $user_password){
	
	     $a_id=$row['id'];
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

    <h1 style="background-color:#66ff99;color: white; font-size: 50px; padding-bottom: 20px;" align="center">Authority </h1>
     <div style="position:absolute;left:90%;top:19%">

 <?php
      echo '<a href="/Stadium/html/login.html"><button style="background-color:red;color:white;border-radius:5%;font-size:20px;"><b>Log Out</b></button></a>';

   ?>
 </div>

        <form action="/Stadium/php/search.php" align="center" style="padding: 20px;" method="post">
        	
        	<input type="search" name="search" required="">
        	<input type="submit" name="sub" value="Search">
        </form>

         <table border="2px" align="center" class="thk" cellpadding="50">
        <thead>
         <tr>
           <th class="heading">
       UserId
          </th>
    <th class="heading">Name</th>
    <th class="heading">Email</th>
    <th class="heading"> Phone number </th>
    <th class="heading">Revenue</th>
    <th class="heading"> Email</th>
  </tr>
</thead>
<?php 
     

$h = "SELECT * FROM users ";
         $re= mysqli_query($conn,$h);
         $count =0;
         $admini =mysqli_query($conn,"SELECT * FROM booking");
         $no_raw_admn = mysqli_query($conn,"SELECT COUNT(*) from booking");
         $no_raw_admin= mysqli_fetch_array($no_raw_admn,MYSQLI_NUM);
         while($raw= mysqli_fetch_array($re) ){
            ?>
           <?php
           $id = $raw['id'];
                        $name = $raw['name'];
                        $email = $raw['email'];
                        $ph = $raw['phnumber'];
                         $j= $raw['email'];
                        $g = "SELECT * FROM ticket_registration WHERE email='$j' ";
                       $res= mysqli_query($conn,$g);
                       $no_ra =mysqli_query($conn,"SELECT COUNT(*) from ticket_registration where email= '$j'AND ac='yes'");
                        $no_raw = mysqli_fetch_array($no_ra,MYSQLI_NUM);
                        $moni = 1000 * $no_raw[0];

                       $rese= mysqli_query($conn,"SELECT COUNT(*) from ticket_registration where email= '$j' AND ac='no'");
                       $no_rawe =mysqli_fetch_array($rese,MYSQLI_NUM);
                        $mone = 500 * $no_rawe[0];
                      


                        $mon = $moni+$mone;
                       
                        $update = mysqli_query($conn,"UPDATE booking SET revenue = $mon where user_email='$j'");
                        
                            $count ++;
                          if($count>$no_raw_admin[0]){
                    	
                    		$ls= "INSERT INTO booking (user_id,user_name,user_email,user_phone_number,revenue,a_id) 
                        	VALUES ('$id','$name','$email','$ph','$mon','$a_id') ";
                       $ls_query= mysqli_query($conn,$ls);
                   }
                   $r = mysqli_query($conn,"UPDATE booking SET a_id ='$a_id' WHERE user_id='$id'");
               }

               $g_admin = "SELECT * FROM booking ORDER BY revenue DESC";
                       $res_admin= mysqli_query($conn,$g_admin);
                    while($row =mysqli_fetch_array($res_admin)){
                    	?>
                       <tbody><tr><td align="center"><b> <?php echo $row['user_id'];?></b></td>
                       <td align="center"><b> <?php echo $row['user_name'];?></b></td>
                       <td align="center"><b><?php  echo $row['user_email'];?></b>
                        </td>
                       <td align="center"><b><?php  echo $row['user_phone_number'];?>
                        </td></b>
                        <td align="center"><b><?php echo $row['revenue'];?></b>
                        </td>
                        <?php
                        $em = $row['user_email'];
                        echo '<td><a href="https://mail.google.com/mail/?view=cm&fs=1&to= '. $em .'" target="_blank"><img src="/Stadium/images/email.svg"></a></td>';
                        ?>
                    </tr>
              <?php
          }
          ?>
            </tbody>
        </table>

<br><br><h2 align="center"> Matches</h2>
         <table border="2px" align="center" class="thk" cellpadding="50">
        <thead>
         <tr>
           <th class="heading">
              MatchId
          </th>
    <th class="heading">Match</th>
    <th class="heading">Venue</th>
    <th class="heading"> Dates</th>
    <th class="heading">Operation</th>
  </tr>
</thead>
<tbody>
<?php 
     

$ha = "SELECT * FROM calender ORDER by dates ASC ";
         $rea= mysqli_query($conn,$ha);
         // $admini =mysqli_query($conn,"SELECT * FROM admin");
         // $no_raw_admin = mysqli_num_rows($admini);
         while($rowa= mysqli_fetch_array($rea) ){
            ?>
                       <tr><td align="center"><b> <?php echo $rowa['id'];?></b></td>
                       <td align="center"><b> <?php echo $rowa['matches'];?></b></td>
                       <td align="center"><b><?php  echo $rowa['venue'];?></b>
                        </td>
                       <td align="center"><b><?php  echo $rowa['dates'];?>
                        </td></b>
                       <?php
                        
                       echo '<td> 
                    <p>
            <b><a target="_blank"  style="text-decoration:none;color: red;" href="/Stadium/php/deletematch.php?rn='.$rowa['id'] .'&user=' .$user_name .'">Remove match</a></b>
          </p>
        </td>';
        ?>
                    </tr>
              <?php
          }
          ?>
            </tbody>
        </table>
</body>
</html>
<?php

}
else{
		echo "<script>alert('Check your Credtentials.')</script>";
  	echo "<script>location.replace('/Stadium/html/authoritylogin.html')</script>";
}
}
?>