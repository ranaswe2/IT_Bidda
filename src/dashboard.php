<!DOCTYPE html>

<html>
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
       
        h1,h3{
            text-align: center;
            color: blueviolet;
            }
        .tabl{
            margin-left: auto;
            margin-right: auto;
        }
        td{
            text-align: center
        }
    </style>
    <?php
    require 'header.php';
    require 'notice.php';
    ?>
    <body>
        
        <h1>Student's Dashboard</h1>
        <?php
        switch ($_POST['course']){
    case 'a':
        $course= 'Web Design';
        break;
    case 'b':
        $course= 'Web Development';
        break;
    case 'c':
        $course= 'Graphic Design';
        break;
    case 'd':
        $course= 'HSC Advance ICT';
        break;
        }
        echo '<h3>Course : '.$course.'</h3>';
        ?>
        <table border='1' class="tabl">
            <tr bgcolor="#d3d3d3">
            <td>Approved</td>    
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
            <td>Referance</td>
           
            </tr>
           
        <?php
         
        $id= $_POST['id'];
        $txn= $_POST['txn'];
        
        if(!$id){
            echo 'Try again later and Enter ID First!</br>';
        } else {
            @ $db= new mysqli('localhost','root','','itbidda');
            
            if(mysqli_connect_errno()){
                echo 'Error to connect Database!';
            } else {
                $query= "select * from ". strtolower(str_replace(" ", "_", $course))." where id like '".$id ."' and txn like '".$txn."'" ;
                $result= $db->query($query);
                
                    $row= $result->fetch_assoc();
                    
                    echo '<tr>';
            if($row['approve']=='1'){
                echo "<td><img src='appro.png' alt= '' width='30' height='30'></td>";
            } else {
                echo "<td><img src='approno.png' alt= '' width='30' height='30'></td>";
            }
            
            echo '<td>'. $row['id'] ."</td>"        
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
                    . "</tr>";
        
                }
                
                }
        
        ?>
        </table><br/><br/>
    </body>
    <?php
    require 'footer.php';
    ?>
</html>
