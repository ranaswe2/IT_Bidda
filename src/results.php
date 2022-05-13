<!DOCTYPE html>
<html>
    <head>
        <title>search Results</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        h2,h3{text-align: center}
    </style>
    <?php
    require 'header.php';
    require 'notice.php';
    ?>
    <body>
        <h2>Search Results</h2>
        <?php
        $searchtype= $_POST['searchtype'];
        $searchterm= $_POST['searchterm'];
        
        if(!$searchterm || !$searchtype){
            echo 'Try again later and Enter Search Type or Term First!</br>';
        } else {
            @ $db= new mysqli('localhost','root','','bookorama');
            
            if(mysqli_connect_errno()){
                echo 'Error to connect Database!';
            } else {
                $query= "select * from books where ".$searchtype. " like '%".$searchterm ."%'";
                $result= $db->query($query);
                $num_result= $result->num_rows;
                
                echo '<h3><b>'. $num_result .' Book/s found!</b><h3>';
                
                for($i=0;$i<$num_result;$i++){
                    $row= $result->fetch_assoc();
                    echo '<p>';
                    
                    echo '<b>'. ($i+1) .'. Title: '. $row['title'] .'</b></br>';
                    echo 'Author: '. $row['author'] .'</br>';
                    echo 'ISBN: '. $row['isbn'] .'</br>';
                    echo 'Price: $'. $row['price'] .'</br>';
                    
                    echo '</p>';
                }
                $result->free();
                $db->close();
            }
        }
        ?>
    </body>
    <?php
    require 'footer.php';
    ?>
</html>
