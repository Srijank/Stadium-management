<?php 
include '/Stadium/php/connect.php';
?>
         <table border="2px" align="center">
        <thead>
         <tr>
           <th>
       UserId
          </th>
    <th>Name</th>
    <th>Email</th>
    <th> Phone number </th>
    <th>Revenue</th>
  </tr>
</thead>
<?php 
$h = "SELECT user_id,user_name,user_email,user_phone_number FROM admin ";
         $re= mysqli_query($conn,$h);
         while($raw= mysqli_fetch_array($re) ){
            ?>
           <tbody><tr>

           
                       <td align="center"> <?php echo $raw['id'];?></td>
                       <td align="center"> <?php echo $raw['user_name'];?></td>
                       <td align="center"><?php  echo $raw['user_email'];?>
                        </td>
                       <td align="center"><?php  echo $raw['user_phone_number'];?>
                        </td>
                        <td align="center"> <?php 
                        $j= $raw['user_email'];
                        $g = "SELECT * FROM ticket_registration WHERE email='$j' ";
                       $res= mysqli_query($conn,$g);
                       $no_raw =mysqli_num_rows($res);
                        $mon = 500* $no_raw;
                        echo  $no_raw;?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
