<?php
       session_start();
       ?>


<!DOCTYPE html>

<html>
    <head>
        <title>Approval</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <?php
       
       $crs= $_SESSION['course'];
       $id= $_SESSION['id'];
       $name= $_SESSION['name'];
       $mail= $_SESSION['mail'];
       $txn= $_SESSION['txn'];
       @ $db= new mysqli('localhost','root','','itbidda');
            if(mysqli_connect_errno()){
                echo 'Error to connect Database!';
            } else {
              if(isset($_POST['submit_'.$crs])){
       $query1= "UPDATE $crs SET approve='0' where id=".$id;
                if($result1= $db->query($query1)){
                    
       echo $id .$name ;
                }
        /*
        $to_address= $mail;
        $subject= "Admin Approval";
        $mailcontent= "Dear ".$name.",\nAn admin approved your information.You are able to see your information in dashboard as an approved student. "
                . "\nYour Student ID : ".$id
                ."\n& Txn ID: ".$txn;
        $from_address= "From: info.itbidda@gmail.com";
        
        mail($to_address, $subject, $mailcontent,$from_address);   */
            }
            else if ($_POST['delete_'.$crs]) {
            $query1= "DELETE FROM $crs WHERE id=".$id;
            $db->query($query1);
        }
            }
            session_destroy();  
       ?> 
        
        <table border="0" class="tabl">
            <tbody>
                <tr>
                    <td colspan="4"><h1>Next ↓</h1></td>
                </tr>
                <tr>
        <td><a href="approval.php"><input type="submit" value="Web Design" /></a></td>
        <td><a href="approval_wdv.php"><input type="submit" value="Web Development" /></a></td>
        <td><a href="approval_gds.php"><input type="submit" value="Graphic Design" /></a></td>
        <td><a href="approval_ict.php"><input type="submit" value="HSC ICT" /></a></td>
                </tr>
            </tbody>
        </table></br>
        
    </body>
</html>
