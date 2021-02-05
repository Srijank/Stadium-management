<?php
include 'connect.php';
$i = date('20y-m-d');
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

  </head>
  <body>

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


  <br><br><br>
  
         <table border="2px" align="center" class="thk" cellpadding="50" id="h">
        <thead>
         <tr>
           <th class="heading">
       Match Id
          </th>
    <th class="heading">Match</th>
    <th class="heading">Venue</th>
    <th class="heading"> Dates </th>
    <th class="heading">Operation</th>
  </tr>
</thead>
<tbody>
<?php 
$hg = "SELECT * FROM calender ORDER by dates ASC ";
         $redg =mysqli_query($conn,$hg);
        while ($r = mysqli_fetch_array($redg)) {
           if($i >= $r['dates']){
            $t = $r['dates'];
            $sql = mysqli_query($conn,"DELETE from calender where dates= '$t' ");
           }
        }
    

$h = "SELECT * FROM calender ORDER by dates ASC ";
         $re= mysqli_query($conn,$h);
         $count =0;
         // $admini =mysqli_query($conn,"SELECT * FROM admin");
         // $no_raw_admin = mysqli_num_rows($admini);
         while($row= mysqli_fetch_array($re) ){
            ?>
                       <tr><td align="center"><b> <?php echo $row['id'];?></b></td>
                       <td align="center"><b> <?php echo $row['matches'];?></b></td>
                       <td align="center"><b><?php  echo $row['venue'];?></b>
                        </td>
                       <td align="center"><b><?php  echo $row['dates'];?>
                        </td></b>
                       <?php
                        
                       echo '<td> 
                    <p style="color:green;">
            <b><a target="_blank "
              style="text-decoration:none;color: green;" href="http://localhost/Stadium/php/ticket.php?event='.$row['dates'] .' ">Available/Book Now</a></b>
          </p>
        </td>';
        ?>
                    </tr>
              <?php
          }
          ?>
            </tbody>
        </table>
        <h2 align="center"><a href="/stadium/html/book.html"> Book stadium now </a></h2>
    </body>
</html>