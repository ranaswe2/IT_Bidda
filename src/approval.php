<?php
session_start();
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Admin Approval</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        .tabl{
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
        }
        input{
            background-color: lightgreen;
        }
    </style>
    <?php
    require 'header.php'; //action="approvalrev.php"
    ?>
    <body>
        <h1 align="center">Approval Requests</h1>
        <form method="post" action="approvalrev.php" id="form"> 
        
        <table border='1' class="tabl">
            <tr bgcolor="#d3d3d3">
                  
            <td>ID</td>
            <td>Name</td>
            <td>Father's Name</td>
            <td>Mother's Name</td>
            <td>Address</td>
            <td>Phone No.</td>
            <td>E-mail Address</td>
            <td>Paid Amount</td>
            <td>Payment Method</td>
            <td>Txn ID</td>
            <td>Reference</td>
            <td>Request</td>
           
            </tr>
        <?php
        @ $db= new mysqli('localhost','root','','itbidda');
            if(mysqli_connect_errno()){
                echo 'Error to connect Database!';
            } else {
                
                $query0= "select * from web_design";
                $query=  $query0." where approve='1'";
                $result= $db->query($query);
                $num_result= $result->num_rows;
                echo "<tr><td colspan='12' align='center'><h3>Course Name: Web Design</h3></td></tr>";
           //for($i=0;$i<$num_result;$i++){     
                    $row= $result->fetch_assoc();
                    echo '<tr>'
            . "<td>". $row['id'] ."</td>"        
            . '<td>'. $row['name'] ."</td>"
            . '<td>'. $row['fname'] ."</td>"
            . '<td>'. $row['mname'] ."</td>"
            . '<td>'. $row['address'] ."</td>"
            . '<td>'. $row['phone'] ."</td>"
            . '<td>'. $row['mail'] ."</td>"
            . '<td>'. $row['amount'] ."</td>"
            . '<td>'. $row['pmethod'] ."</td>"
            . '<td>'. $row['txn'] ."</td>"
            . '<td>'. $row['reference'] ."</td>"
            . "<td><input type='submit' value='Approve' name='submit_web_design'><input type='submit' value='Delete' name='delete_web_design'></td>"       
                    . "</tr>"; ///onclick= 'this.disabled=true'
                    
                           
                 
                    $_SESSION['course']='web_design';
                    $_SESSION['id']=$row['id'];
                    $_SESSION['name']=$row['name'];
                    $_SESSION['mail']=$row['mail'];
                    $_SESSION['txn']=$row['txn']; 
                    
                    
                    require 'approval_check.php';   
                    
            }
            $db->close();
        ?>
        </table><br/><br/>
         </form>
        <table border="0" class="tabl">
            <tbody>
                <tr>
                    <td></td>
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
    <?php
    require 'footer.php';
    ?>
</html>
