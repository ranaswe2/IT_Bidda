<!DOCTYPE html>

<html>
    <head>
        <title>Entry Book</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Result of new Book Registration</h2>
        <?php
        $isbn=$_POST['isbn'];   
        $author=$_POST['author'];  
        $title=$_POST['title'];  
        $price=$_POST['price'];  
        
        if(!$author || !$isbn || !$price || !$title){
            echo 'Go back & Fill all Fields!';
        } else {
            @ $db= new mysqli("localhost","root","","bookorama");
            if(mysqli_connect_errno()){
                echo 'Could not connect to Database.</br>Try again Later!</br>';
            } else {
                $query= "insert into books values('".$isbn."','".$author."','".$title."','".$price."')";
                $result= $db->query($query);
                
                if($result){
                    echo $db->affected_rows." Book Inserted into Database!";
                } else {
                    echo 'An error has Occured!</br>Try again Later.';
                }
            }
            
        }
        ?>
    </body>
</html>
