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
    ?>
    <body>
        
           
        <?php
         
        $user= $_POST['user'];
        $pass= $_POST['pass'];
        
        if(!$user || !$pass){
            echo 'Try again later!</br>';
        } else {
            
            if(mysqli_connect_errno()){
                echo 'Error to connect Database!';
            } else {
                $query= "select * from password";
                
                $result= $db->query($query);
                
                    $row= $result->fetch_assoc();
                    
                    echo '<tr>';
            if($user==$row['user'] && $pass==$row['pass']){
                echo "<a href='directors.php'>Click Here for Board of Directors.</a></br>";
                echo "<a href='approval.php'>Click Here for Students Approval.</a></br>";
            }
                }
                
                }
        
        ?>
        </table><br/><br/>
    </body>
    <?php
    require 'footer.php';
    ?>
</html>

