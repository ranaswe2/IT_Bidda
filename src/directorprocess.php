<!DOCTYPE html>

<html>
    <head>
        <title>Directors</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        
        $name= $_POST['name'];
        $degree= $_POST['degree'];
        $university= $_POST['university'];
        $mail= $_POST['mail'];
        $fb= $_POST['fb'];
        
        @ $db= new mysqli('localhost','root','','itbidda');
         
                  
            if(mysqli_connect_errno()){
                echo 'Error to connect Database!';
            }else {
                $query0= "select MAX(id) from directors";
                $result= $db->query($query0);
                    $row= $result->fetch_assoc();
                    $id=$row['MAX(id)']+1;
                
                
                    $image=$_FILES['image']['name'];
                    
                    if(isset($_POST['upload'])){
                if(!$name || !$degree || !$university || !$mail){
            echo "You can`t perform this action!";
                  }
            else { 
                        
                $query= "INSERT INTO directors(id,name, degree, university, photo,mail,fb) VALUES ('".$id."','".$name."','".$degree."','".$university."','".$image."','".$mail."','".$fb."')";
                
                if($result= mysqli_query($db, $query)){
                    move_uploaded_file($_FILES['image']['tmp_name'],"$image");
                    echo "<h1 align='center' color='green'>".$name."'s information uploaded to the Database!</h2>";
                }
               else {
                    echo 'Sorry for upload incompleated!';
               }
                }
            }
              if(isset($_POST['delete'])){
                  
                    $query1="DELETE FROM directors WHERE name ='".$name."'" ;
                    
                    if($result= mysqli_query($db, $query1)){
                    echo "<h1 align='center' color='green'>".$name."'s information Deleted from the Database!</h2>";
                }else {
                    echo 'Sorry for update incompleated!';
               }
            
            }
            }
        
        include 'directors.php';
        ?>
    </body>
</html>

