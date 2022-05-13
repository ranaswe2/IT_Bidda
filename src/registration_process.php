<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <?php
    require 'header.php';
    require 'notice.php';
    ?>
    <body>
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
        
        switch ($_POST['pmethod']){
    case 'a':
        $pmethod= 'Bkash';
        break;
    case 'b':
        $pmethod= 'Rocket';
        break;
    case 'c':
        $pmethod= 'Nogod';
        break;
        } 
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $mail=$_POST['mail'];
    $amount=$_POST['amount'];
    $txn=$_POST['txn'];
    $reference=$_POST['reference'];
    $approve='0';
    
    @ $db= new mysqli('localhost','root','','itbidda');
            
            if(mysqli_connect_errno()){
                echo 'Error to connect Database!';
            } else {
                $query0= "select MAX(id) from ". strtolower(str_replace(" ", "_", $course)) ;
                $result= $db->query($query0);
                    $row= $result->fetch_assoc();
                    $id=$row['MAX(id)']+1;
                    
                    $query="INSERT INTO ". strtolower(str_replace(" ", "_", $course))." (approve, id, name, fname, mname, address, phone, mail, amount, pmethod, txn, reference) VALUES ('".$approve."','".$id."','".$name."','".$fname."','".$mname."','".$address."','".$phone."','".$mail."','".$amount."','".$pmethod."','".$txn."','".$reference."')";                
                    
                if($result= $db->query($query)){
                    echo '<p> Your given information is saved to our server.You are now waiting for an admin approval.We shall confirm you within 48 hour to your mail inbox.If you will not get any mail within 48 hour that`s mean your given informations aren`t true at all. Then you may call to our imergency contact number.Thank You for stay with IT BIDDA.</p>';
                
                     
                    
                } else {
                    echo 'Please,try again later! Your informations aren`t saved to our server.';
                }    
                    
                   
            }
            $db->close();
    ?>
    </body>
    <?php
    require 'footer.php';
    ?>
</html>
