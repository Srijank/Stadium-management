<?php

include 'connect.php';
     $i =$_GET['rn'];
       $h = mysqli_query($conn,"SELECT * FROM support WHERE id ='$i' ");
       $result = mysqli_fetch_array($h);
       $data = mysqli_query($conn,"DELETE FROM support WHERE id='$i' ");
       if($data){
       	echo "<script>alert('Deleted Succesfully')</script> ";
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

    <h1 style="background-color:#66ff99;color: white; font-size: 50px; padding-bottom: 20px;" align="center">Admin </h1>
     <div style="position:absolute;left:90%;top:19%">
      <?php
  
    ?>

 <?php
      echo '<a href="/Stadium/html/login.html"><button style="background-color:red;color:white;border-radius:5%;font-size:20px;position:relative;left:60%;"><b>Log Out</b></button></a>';

   ?>
 </div>
 <a href="/Stadium/html/add.html" ><img src="/Stadium/images/add.svg" height="5%" width="5%" style="position: fixed;left:1%;"></a>
 <br>
 <h3 align="center">Authority</h3>
 <?php 
       $auth_admin = "SELECT * FROM authority";
                       $res_admin= mysqli_query($conn,$auth_admin);
                       $nu= mysqli_query($conn,"SELECT COUNT(*) FROM authority");
                       $qarray = mysqli_fetch_array($nu,MYSQLI_NUM);
                       if(!$qarray[0]){
                        echo '<h4 align="center">You are not having any Authority user.Add user by clicking top left icon </h4>';
                       }
                       else{
 ?>
 <table border="2px" align="center" class="thk" cellpadding="50">
        <thead>
         <tr>
           <th class="heading">
       UserId
          </th>
    <th class="heading">Name</th>
    <th class="heading">Email</th>
    <th class="heading">User name</th>
    <th class="heading">Password</th>
    <th class="heading">Phone number</th>
    <th class="heading">Operations</th>
  </tr>
</thead>
<tbody>
  <?php
                    while($row =mysqli_fetch_array($res_admin)){
                      ?>
                       <tr><td align="center"><b> <?php echo $row['id'];?></b></td>
                       <td align="center"><b> <?php echo $row['name'];?></b></td>
                       <td align="center"><b><?php  echo $row['email'];?></b>
                        </td>
                       <td align="center"><b><?php  echo $row['username'];?>
                        </td></b>
                        <td align="center"><b><?php echo $row['password'];?></b>
                        </td>
                        <td align="center"><b><?php echo $row['phone'];?></b>
                        </td>
                        <td>
                        <?php
                         echo '<a href="remove.php?rn=' . $row['id'] .'">
                         <button style="background-color:red;color:white;border-radius:5%;font-size:20px;">Remove </button></a>';
   
                        ?>
                        <?php
                        $us =$row['username'];
                        $pas =$row['password'];
                        $em = $row['email'];
                        echo '<a href="https://mail.google.com/mail/?view=cm&fs=1&to= '. $em .'&subject=Login Credentials&body=USERNAME:' .$us .'      PASSWORD:' .$pas .'" target="_blank"><img src="/Stadium/images/email.svg" height="30%" width="30%"></a>';
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
?>
<br><br>
<h3 align="center">Support </h3>

<?php 
       $sup_admin = "SELECT * FROM support";
                       $resa_admin= mysqli_query($conn,$sup_admin);
                       $nua= mysqli_query($conn,"SELECT COUNT(*) FROM support");
                       $qarrays = mysqli_fetch_array($nua,MYSQLI_NUM);
                       if(!$qarrays[0]){
                        echo '<h4 align="center">You are not having any Support user.Add user by clicking top left icon </h4>';
                       }
                       else{
 ?>
 <table border="2px" align="center" class="thk" cellpadding="50">
        <thead>
         <tr>
           <th class="heading">
       UserId
          </th>
    <th class="heading">Name</th>
    <th class="heading">Email</th>
    <th class="heading">User name</th>
    <th class="heading">Password</th>
    <th class="heading">Phone number</th>
    <th class="heading">Operations</th>
  </tr>
</thead>
<tbody>
  <?php $sup_admin = "SELECT * FROM support";
                       $resa_admin= mysqli_query($conn,$sup_admin);
                    while($riw =mysqli_fetch_array($resa_admin)){
                      ?>
                       <tr><td><b> <?php echo $riw['id'];?></b></td>
                       <td><b> <?php echo $riw['name'];?></b></td>
                       <td><b><?php  echo $riw['email'];?></b>
                        </td>
                       <td ><b><?php  echo $riw['username'];?>
                        </td></b>
                        <td><b><?php echo $riw['password'];?></b>
                        </td>
                        <td><b><?php echo $riw['phone'];?></b>
                        </td>
                        <td>
                        <?php
                         echo '<a href="removesup.php?rn=' . $riw['id'] .'">
                         <button style="background-color:red;color:white;border-radius:5%;font-size:20px;">Remove </button></a>';
   
                        ?>
                        <?php
                        $usi =$riw['username'];
                        $pasi =$riw['password'];
                        $emi = $riw['email'];
                        echo '<a href="https://mail.google.com/mail/?view=cm&fs=1&to= '. $emi .'&subject=Login Credentials&body=USERNAME:' .$usi .'      PASSWORD:' .$pasi .'" target="_blank"><img src="/Stadium/images/email.svg" height="30%" width="30%"></a>';
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
?>

    </body></html>
    <?php

  }

?>