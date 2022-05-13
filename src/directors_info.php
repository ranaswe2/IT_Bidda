<!DOCTYPE html>

<html>
    
    <style>
        input{
            border-radius: 10px;
            height: 20px;
            align-content: center;
        }
        @media (min-width: 700px) and (max-width: 767px){
        .div{
            display:flex;
            background-color: lightgoldenrodyellow;
            box-shadow: 0px 8px 15px silver;
            margin: auto;
            border:10%;
            padding:5%;
            width: 80%;
            border-radius: 3%;
        }
        }
        @media (min-width: 768px) and (max-width: 1024px){
        .div{
            display:flex;
            background-color: lightgoldenrodyellow;
            box-shadow: 0px 8px 15px silver;
            margin: auto;
            border:10%;
            padding:3%;
            width: 50%;
            border-radius: 3%;
        }
        }
        @media (min-width: 1025px){
        .div{
            display:flex;
            background-color: lightgoldenrodyellow;
            box-shadow: 0px 8px 15px silver;
            margin: auto;
            border:10%;
            padding:3%;
            width: 25%;
            border-radius: 3%;
        }
        }
        .div2{
            background-color: #fff;
            box-shadow: 0px 8px 15px lightgreen;
            margin: auto;
            width: 100px;
            height: 100px;
            position: relative;
            overflow: hidden;
            border-radius: 100%;
        }
        .rounded{
            display: inline;
            margin: auto ;
            height: 110%;
            width: 110%;
        }
        
        h1{
            text-align: center;
            color: blue;
        }
      /*  .protab{
            margin-left: auto;
            margin-right: auto;
        }*/
        tr{
            text-align: center;
        }
    </style>
    <?php
    require 'header.php';
    require 'notice.php';
    ?>
    <body>
           <h1> </h1>
           
            <?php
        
             $db= new mysqli('localhost','root','','itbidda');
            
            if(mysqli_connect_errno()){
                echo 'Error to connect Database!';
            } else {
                $query= "SELECT name, degree, university, photo,mail,fb FROM directors";
                $result= $db->query($query);
                $num_result= $result->num_rows;
                
                for($i=0;$i<$num_result;$i++){
                    $row= $result->fetch_assoc();
                    
                    echo "<div class='div' content='width=device-width, initial-scale=1.0'><table class='protab'>";
            echo "<tr><td><div class='div2'><a href='".$row['fb']."' class='a'><img src='".$row['photo']."' class='rounded'></div></td>"        
            . '<tr><td><h2>'. $row['name'] ."</h2></td></tr>"
            . '<tr><td>'. $row['degree'] ."</td></tr>"
            . '<tr><td><b><strong>'. $row['university'] ."</strong></b></td></tr>"
            . "<tr><td><img src='gmaillogo.png' width='21' height-'13'>  ". $row['mail'] ."</td></tr>";
                   
                    echo '</table></div></br></br>';
        
                }
            } 
                
        
        ?>
        
    </body>
    <?php
    require 'footer.php';
    ?>
</html>

