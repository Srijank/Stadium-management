<?php
 include 'connect.php';
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

    <h1 style="background-color:#66ff99;color: white; font-size: 50px; padding-bottom: 20px;" align="center">Authority </h1>
   

        <form action="/Stadium/php/search.php" align="center" style="padding: 20px;" method="post">
        	
        	<input type="search" name="search" required>
        	<input type="submit" name="sub" value="Search">
        </form>
<?php
 if(isset($_POST['sub'])){
 	$se = $_POST['search'];
 	$se = preg_replace("#[^0-9a-z]#i","",$se);
 	$ser = mysqli_query($conn,"SELECT * FROM admin WHERE user_id = '$se' OR user_name LIKE '%$se%' ");
 	?>  
  <table border="2px" align="center" class="thk" cellpadding="50">
        <thead>
         <tr>
           <th>
       UserId
          </th>
    <th>Name</th>
    <th>Email</th>
    <th> Phone number </th>
    <th>Revenue</th>
    <th> Email</th>
  </tr>
</thead>
 <tbody>
<?php
        $r = mysqli_fetch_array($ser);
 		if(!$r){
 			echo "<script>alert('Not found ');</script>";
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
  <body style="background-color:   #b3f0ff">

<?php 
   
      echo '<a href="/Stadium/html/login.html"><button style="background-color:red;color:white;border-radius:5%;font-size:20px;position:absolute;left:90%;"><b>Log Out</b></button></a>';

   

$h = "SELECT * FROM users ";
         $re= mysqli_query($conn,$h);
         $count =0;
         $admini =mysqli_query($conn,"SELECT * FROM admin");
         $no_raw_admin = mysqli_num_rows($admini);
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
                       $no_raw =mysqli_num_rows($res);
                        $mon = 500 * $no_raw;
                
                            $count ++;
                          if($count>$no_raw_admin){
                    	
                    		$ls= "INSERT INTO admin(user_id,user_name,user_email,user_phone_number,revenue) 
                        	VALUES ('$id','$name','$email','$ph','$mon') ";
                       $ls_query= mysqli_query($conn,$ls);
                   }
               }

               $g_admin = "SELECT * FROM admin ORDER BY revenue DESC";
                       $res_admin= mysqli_query($conn,$g_admin);
                    while($row =mysqli_fetch_array($res_admin)){
                    	?>
                      
                      <tr><td align="center"><b> <?php echo $row['user_id'];?></b></td>
                       <td align="center"><b> <?php echo $row['user_name'];?></b></td>
                       <td align="center"><b><?php  echo $row['user_email'];?></b>
                        </td>
                       <td align="center"><b><?php  echo $row['user_phone_number'];?>
                        </td></b>
                        <td align="center"><b><?php echo $row['revenue'];?></b>
                        </td>
                        <td>
                        <?php
                        $em = $row['user_email'];
                        echo '<a href="https://mail.google.com/mail/?view=cm&fs=1&to= '. $em .'" target="_blank"><img src="/Stadium/images/email.svg"></a>';
                        ?>
                        </td>
                    </tr>
              <?php
          }
          ?>
            </tbody>
        </table>

<?php
 		}
    else{
        echo '<a href="/Stadium/html/login.html"><button style="background-color:red;color:white;border-radius:5%;font-size:20px;position:absolute;left:90%;"><b>Log Out</b></button></a>';
 		while($raw =mysqli_fetch_array($ser)){
          
           ?>

           <tr><td align="center"><b> <?php echo $raw['user_id'];?></b></td>
                       <td align="center"><b> <?php echo $raw['user_name'];?></b></td>
                       <td align="center"><b><?php  echo $raw['user_email'];?></b>
                        </td>
                       <td align="center"><b><?php  echo $raw['user_phone_number'];?>
                        </td></b>
                        <td align="center"><b><?php echo $raw['revenue'];?></b>
                        </td>
                        <td>
                        <?php
                        $ema = $raw['user_email'];
                        echo '<a href="https://mail.google.com/mail/?view=cm&fs=1&to= '. $ema .'" target="_blank"><img src="/Stadium/images/email.svg"></a>';
                        ?>
                        </td>
                    </tr>
              <?php
          }
          ?>
      </tbody>
  </table>
  <?php
 		
 }
    }
      ?>
